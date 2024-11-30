<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DB;

class DominioController extends Controller
{
    public function getRotaApi(){
        $query = DB::select( DB::raw('SELECT rota_api FROM rota_api') );
        return $query[0]->rota_api;
    }

    public function getStatusDominio($pasta){
        if(is_dir(public_path($pasta))){
            $retorno = 'true';
        }else{
            $retorno = 'false';
        }
        return $retorno;
    }
    
    public function adicionarDominio(Request $request, $tipo_dominio, $dominio, $nm_loja){
        try {
            if(!isset($request->token) 
            || !isset($request->url_api)
            || !isset($request->idloja)
            ){
                return ['status' => 401, 'mensagem' => 'verificacao'];
            }

            $nm_loja = str_replace(" ", "", $nm_loja);

            if($tipo_dominio == 'loja'){
                if (!is_dir(public_path($nm_loja))) {
                    mkdir(public_path($nm_loja), 0777, true);
                    mkdir(public_path($nm_loja . '/produto'), 0777, true);
                }
            }

            if($tipo_dominio == 'checkout'){
                $rand = rand(1000,99999999);
                $arquivo_conf = "/etc/apache2/sites-available/{$rand}.conf";
                $diretorio = "/var/www/html/frontend/public/";
                $conteudo_conf = <<<EOF
                                <VirtualHost *:80>
                                ServerAdmin webmaster@{$dominio}
                                ServerName {$dominio}
                                DocumentRoot {$diretorio}

                                <Directory {$diretorio}>
                                    Options Indexes FollowSymLinks MultiViews
                                    AllowOverride All
                                    Require all granted
                                </Directory>

                                ErrorLog \${APACHE_LOG_DIR}/{$dominio}-error.log
                                CustomLog \${APACHE_LOG_DIR}/{$dominio}-access.log combined
                                </VirtualHost>
                                EOF;
                file_put_contents($arquivo_conf, $conteudo_conf);

                $link_conf = "/etc/apache2/sites-available/{$rand}.conf";


                $ln = exec("ln -s {$arquivo_conf} {$link_conf}");
                $a2ensite = exec("a2ensite {$rand}");

                return $a2ensite;

            }

            $html = file_get_contents(public_path('modelo_loja.html'));
            $html = str_replace('%FLAG_TOKEN_CHECKOUT%', $request->token, $html);
            $html = str_replace('%FLAG_URL_API%', 'https://' . $request->url_api, $html);
            $html = str_replace('%FLAG_ID_LOJA%', $request->idloja, $html);
            
            $html2 = file_get_contents(public_path('modelo_produto.html'));
            $html2 = str_replace('%FLAG_TOKEN_CHECKOUT%', $request->token, $html2);
            $html2 = str_replace('%FLAG_URL_API%', 'https://' . $request->url_api, $html2);
            $html2 = str_replace('%FLAG_ID_LOJA%', $request->idloja, $html2);
            
            if(!file_exists(public_path($nm_loja . '/index.html'))){
                file_put_contents(public_path($nm_loja . '/index.html'), $html);
            }
            
            if(!file_exists(public_path($nm_loja . '/produto/index.html'))){
                file_put_contents(public_path($nm_loja . '/produto/index.html'), $html2);
            }
            

            $arquivo_conf = "/etc/apache2/sites-available/{$nm_loja}.conf";
            $diretorio = "/var/www/html/frontend/public/" . $nm_loja;
            $conteudo_conf = <<<EOF
                            <VirtualHost *:80>
                            ServerAdmin webmaster@{$dominio}
                            ServerName {$dominio}
                            DocumentRoot {$diretorio}

                            <Directory {$diretorio}>
                                Options Indexes FollowSymLinks MultiViews
                                AllowOverride All
                                Require all granted
                            </Directory>

                            ErrorLog \${APACHE_LOG_DIR}/{$dominio}-error.log
                            CustomLog \${APACHE_LOG_DIR}/{$dominio}-access.log combined
                            </VirtualHost>
                            EOF;
            file_put_contents($arquivo_conf, $conteudo_conf);

            $link_conf = "/etc/apache2/sites-available/{$nm_loja}.conf";


            $ln = exec("sudo ln -s {$arquivo_conf} {$link_conf}");
            $a2ensite = exec("sudo -S a2ensite {$nm_loja}");
            
            return $a2ensite;
        } catch (\Exception $e) {
            return $e;
            return ['status' => 500, 'mensagem' => 'catch'];
            
        }
    }

    public function reiniciarApache(Request $request){

        $token = $request->token;
        if(!isset($token) || $token == "" || !$this->verificaToken($token)){
            return response()->json(['status' => 401]);
        } 
        
        $comando = "sudo service apache2 restart";
        $execucao = exec($comando);
        return response()->json(['status'=>200]);
    }

    private function verificaToken($token){
        $token_sessao = (!is_null(session('usuario_checkout')['token_checkout']) ? session('usuario_checkout')['token_checkout'] : 0);

        if($token_sessao == $token){
            return true;
        }else{
            return false;
        }

    }

    public function ativassl(Request $request){
        try { 
            if(!isset($request->dominio) || is_null($request->dominio)){
                return response()->json(['status' => 500 ]);
            }
            $dominio = $request->dominio;
            $email = 'roiari' . rand(1000, 999999) . '@gmail.com';

            $senha = "Tula13371337!";
            $comando = "echo '$senha' | sudo -S certbot --apache -d $dominio -m $email --agree-tos -n";
            $certbot = shell_exec($comando);
            sleep(5);
            $certbot = shell_exec($comando);
            sleep(5);
            $certbot = shell_exec($comando);

            return true;

        } catch (\Exception $e){
            return response()->json(['status' => 500]);
        }
    }

    public function apagarDominio(Request $request){
        try { 
            if(!isset($request->nm_loja)
            || !isset($request->id_usuario)
            ) return response()->json(['status' => 500]);

            $nm_loja = str_replace(" ", "", $request->nm_loja);

            if(is_dir(public_path($nm_loja . $request->id_usuario))){
                $apagaPublic = exec("sudo rm -rf /var/www/html/frontend/public/" . $nm_loja . $request->id_usuario);
            }

            $apagaSitesAvailable = exec("sudo rm /etc/apache2/sites-available/". $nm_loja . $request->id_usuario . ".conf");
            $apagaSitesAvailableSSL = exec("sudo rm /etc/apache2/sites-available/". $nm_loja . $request->id_usuario . "-le-ssl.conf");

            $apagaSitesEnabled = exec("sudo rm /etc/apache2/sites-enabled/". $nm_loja . $request->id_usuario . ".conf");
            $apagaSitesEnabledSSL = exec("sudo rm /etc/apache2/sites-enabled/". $nm_loja . $request->id_usuario . "-le-ssl.conf");

            if($apagaPublic == ""
            && $apagaSitesAvailable == ""
            && $apagaSitesAvailableSSL == ""
            && $apagaSitesEnabled == ""
            && $apagaSitesEnabledSSL == "") $flag = true;
            else $flag = false;
            return response()->json([
                'public' => $apagaPublic,
                'sA' => $apagaSitesAvailable,
                'sA_SSL' => $apagaSitesAvailableSSL,
                'sE' => $apagaSitesEnabled,
                'sE_SSL' => $apagaSitesEnabledSSL,
                'codigo' => $flag
            ]);

        } catch(\Exception $e){
            return $e;
        }
    }

    public function devLoja(Request $request){

        $html = file_get_contents(public_path('modelo_loja.html'));
        $html = str_replace('%FLAG_TOKEN_CHECKOUT%', '$2y$10$ZTQPD/.39x57dsGmFJNz9.qkjPzI/VmUcVZmR5tcxyMwjmOKqw3M6', $html);
        $html = str_replace('%FLAG_URL_API%', 'http://127.0.0.1:8181/api/', $html);
        $html = str_replace('%FLAG_ID_LOJA%', $request->idloja, $html);
        $html = str_replace('/produto?p=', '/dev/produto?p=', $html);
        
        $html2 = file_get_contents(public_path('modelo_produto.html'));
        $html2 = str_replace('%FLAG_TOKEN_CHECKOUT%', '$2y$10$ZTQPD/.39x57dsGmFJNz9.qkjPzI/VmUcVZmR5tcxyMwjmOKqw3M6', $html2);
        $html2 = str_replace('%FLAG_URL_API%', 'http://127.0.0.1:8181/api/', $html2);
        $html2 = str_replace('%FLAG_ID_LOJA%', $request->idloja, $html2);

        $html3 = file_get_contents(public_path('modelo_categoria.html'));
        $html3 = str_replace('%FLAG_TOKEN_CHECKOUT%', '$2y$10$ZTQPD/.39x57dsGmFJNz9.qkjPzI/VmUcVZmR5tcxyMwjmOKqw3M6', $html3);
        $html3 = str_replace('%FLAG_URL_API%', 'http://127.0.0.1:8181/api/', $html3);
        $html3 = str_replace('%FLAG_ID_LOJA%', $request->idloja, $html3);

        file_put_contents(public_path('dev' . '\index.html'), $html);
        file_put_contents(public_path('dev' . '\produto\index.html'), $html2);
        file_put_contents(public_path('dev' . '\categorias\index.html'), $html3);


        return true;
    }
}
