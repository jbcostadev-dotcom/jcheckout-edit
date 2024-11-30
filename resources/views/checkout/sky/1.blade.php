<html lang="en" class="fa-events-icons-ready">
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&amp;display=swap" rel="stylesheet" />
        <script src="https://connect.facebook.net/signals/config/267724002605725?v=2.9.127&amp;r=stable&amp;domain=checkout.skypayments.com.br" async=""></script>
        <script src="https://connect.facebook.net/signals/config/1004819960516385?v=2.9.127&amp;r=stable&amp;domain=checkout.skypayments.com.br" async=""></script>
        <script src="https://connect.facebook.net/signals/config/831075655066362?v=2.9.127&amp;r=stable&amp;domain=checkout.skypayments.com.br" async=""></script>
        <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
        <script src="https://use.fontawesome.com/d8f4d1d9c1.js"></script>
        <link href="https://use.fontawesome.com/d8f4d1d9c1.css" media="all" rel="stylesheet" />
        <meta charset="utf-8" />
        <title>Finalizar compra</title>
        <base href="/" />
        <meta name="google" content="notranslate" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://api.hopysplit.com.br/v1/js"></script>
        <link rel="stylesheet" href="https://checkout.skypayments.com.br/styles.css" />
        <link rel="icon" href="https://assets.skypayments.com.br/_main/favicon.ico" />
        <style>
         .openSansText {
	font-family: 'Open Sans', sans-serif;
	color: black;
  font-size: 13px;
  line-height: 20px;
}

.boldText {
	font-weight: 700;
}

.black_back {
	position: fixed;
	background: rgba(0,0,0,0.2) left top;
	width: 100%;
	height:100%;
	z-index: 99;
	top: 0;
  left: 0;
}

/* don't include above in final! */

.modal_mobile {
  width: 280px;
  position: fixed;
  padding: 30px 0 0 0;
  background-color: #fff;
  z-index: 100;
  border-radius: 5px;
  left: 50%;
  margin-left: -140px;
  top: 50%;
  margin-top:-93px;
}

.modal_mobile div.title.openSansText.boldText {
	font-size: 20px;
	text-align: center;
}

.modal_mobile .content {
	font-size: 14px;
  text-align: center;
  display: inline-block;
	margin: 20px 20px 30px 20px;
}

.modal_mobile .button {
	border-top: 1px solid #E9E9E9;
	font-size: 16px;
	color: #3d7ac3;
	line-height: 44px;
	text-align: center;
	width: 100%;
}

 
/* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.6);
}

 
 
  .loader {
    animation: rotate 1s infinite;
    height: 50px;
    width: 50px;
  }

  .loader:before,
  .loader:after {
    border-radius: 50%;
    content: '';
    display: block;
    height: 20px;
    width: 20px;
  }

  .loader:before {
    animation: ball1 1s infinite;
    background-color: #C2185B;
    box-shadow: 30px 0 0 #f8b334;
    margin-bottom: 10px;
  }

  .loader:after {
    animation: ball2 1s infinite;
    background-color: #00BCD4;
    box-shadow: 30px 0 0 #97bf0d;
  }

  @keyframes rotate {
    0% {
      -webkit-transform: rotate(0deg) scale(0.8);
      -moz-transform: rotate(0deg) scale(0.8);
    }
    50% {
      -webkit-transform: rotate(360deg) scale(1.2);
      -moz-transform: rotate(360deg) scale(1.2);
    }
    100% {
      -webkit-transform: rotate(720deg) scale(0.8);
      -moz-transform: rotate(720deg) scale(0.8);
    }
  }

  @keyframes ball1 {
    0% {
      box-shadow: 30px 0 0 #f8b334;
    }
    50% {
      box-shadow: 0 0 0 #f8b334;
      margin-bottom: 0;
      -webkit-transform: translate(15px, 15px);
      -moz-transform: translate(15px, 15px);
    }
    100% {
      box-shadow: 30px 0 0 #f8b334;
      margin-bottom: 10px;
    }
  }

  @keyframes ball2 {
    0% {
      box-shadow: 30px 0 0 #97bf0d;
    }
    50% {
      box-shadow: 0 0 0 #97bf0d;
      margin-top: -20px;
      -webkit-transform: translate(15px, 15px);
      -moz-transform: translate(15px, 15px);
    }
    100% {
      box-shadow: 30px 0 0 #97bf0d;
      margin-top: 0;
    }
  }


        </style>
        <script>
            function detectWebcam(b) {
                var a = navigator.mediaDevices;
                if (!a || !a.enumerateDevices) return b(!1);
                a.enumerateDevices().then(function (a) {
                    return b(
                        a.some(function (a) {
                            return "videoinput" === a.kind;
                        })
                    );
                });
            }
            detectWebcam(function (b) {
                window.mlbp_webcam = b;
            });
            function getEtag() {
                return new Promise(function (b) {
                    var a = new XMLHttpRequest(),
                        c = getUrlEtag();
                    a.open("GET", c);
                    a.withCredentials = !1;
                    a.onload = function () {
                        200 <= this.status && 300 > this.status ? b(a.getResponseHeader("Etag")) : b(null);
                    };
                    a.send();
                });
            }
            function getUrlEtag() {
                var b = document.location.host.match("www.mercado(libre|livre|pago).com.*"),
                    a = navigator.userAgent,
                    c = a.includes("Chrome/") || a.includes("Chromium/") || a.includes("CriOS/"),
                    d = a.includes("Firefox/") || a.includes("FxiOS/"),
                    e = a.includes("Edg/") || a.includes("Edge/") || a.includes("EdgiOS/") || a.includes("EdgA/"),
                    a = !c && !d && !e && a.includes("Safari/") && a.includes("Version/");
                return b && a ? "https://" + document.location.host + "/jms/lgz/background/etid" : "https://www.mercadolibre.com/jms/lgz/background/etid";
            }
            "undefined" !== typeof Promise &&
                ((window.mlbp_etag = null),
                getEtag().then(function (b) {
                    window.mlbp_etag = b;
                }));
            function isPrivateMode() {
                return new Promise(function (d) {
                    function f() {
                        var a = "MozAppearance" in document.documentElement.style;
                        if (a)
                            if (null == indexedDB) b();
                            else {
                                var e = indexedDB.open("inPrivate");
                                e.onsuccess = c;
                                e.onerror = b;
                            }
                        return a;
                    }
                    function g() {
                        var a = navigator.userAgent.match(/Version\/([0-9\._]+).*Safari/);
                        if (a) {
                            if (11 > parseInt(a[1], 10)) {
                                try {
                                    localStorage.length || (localStorage.setItem("inPrivate", "0"), localStorage.removeItem("inPrivate")), c();
                                } catch (e) {
                                    navigator.cookieEnabled ? b() : c();
                                }
                                return !0;
                            }
                            try {
                                window.openDatabase(null, null, null, null), c();
                            } catch (e) {
                                b();
                            }
                        }
                        return !!a;
                    }
                    function h() {
                        var a = !window.indexedDB && (window.PointerEvent || window.MSPointerEvent);
                        a && b();
                        return !!a;
                    }
                    var b = function () {
                            d(!0);
                        },
                        c = function () {
                            d(!1);
                        };
                    if (
                        !(
                            (function () {
                                var a = /(?=.*(opera|chrome)).*/i.test(navigator.userAgent) && navigator.storage && navigator.storage.estimate;
                                a &&
                                    navigator.storage.estimate().then(function (a) {
                                        return 12e8 > a.quota ? b() : c();
                                    });
                                return !!a;
                            })() ||
                            f() ||
                            g() ||
                            h()
                        )
                    )
                        return c();
                });
            }
            "undefined" !== typeof Promise &&
                isPrivateMode().then(function (d) {
                    window.mlbp_incognito = d;
                });
            window.JSON || (window.JSON = {});
            (function () {
                function a(a) {
                    return 10 > a ? "0" + a : a;
                }
                function c(a) {
                    d.lastIndex = 0;
                    return d.test(a)
                        ? '"' +
                              a.replace(d, function (a) {
                                  var b = h[a];
                                  return "string" === typeof b ? b : "\\u" + ("0000" + a.charCodeAt(0).toString(16)).slice(-4);
                              }) +
                              '"'
                        : '"' + a + '"';
                }
                function b(a, d) {
                    var e,
                        h,
                        p,
                        v,
                        w = g,
                        r,
                        n = d[a];
                    n && "object" === typeof n && "function" === typeof n.toJSON && (n = n.toJSON(a));
                    "function" === typeof l && (n = l.call(d, a, n));
                    switch (typeof n) {
                        case "string":
                            return c(n);
                        case "number":
                            return isFinite(n) ? String(n) : "null";
                        case "boolean":
                        case "null":
                            return String(n);
                        case "object":
                            if (!n) return "null";
                            g += f;
                            r = [];
                            if ("[object Array]" === Object.prototype.toString.apply(n)) {
                                v = n.length;
                                for (e = 0; e < v; e += 1) r[e] = b(e, n) || "null";
                                p = 0 === r.length ? "[]" : g ? "[\n" + g + r.join(",\n" + g) + "\n" + w + "]" : "[" + r.join(",") + "]";
                                g = w;
                                return p;
                            }
                            if (l && "object" === typeof l) for (v = l.length, e = 0; e < v; e += 1) "string" === typeof l[e] && ((h = l[e]), (p = b(h, n)) && r.push(c(h) + (g ? ": " : ":") + p));
                            else for (h in n) Object.prototype.hasOwnProperty.call(n, h) && (p = b(h, n)) && r.push(c(h) + (g ? ": " : ":") + p);
                            p = 0 === r.length ? "{}" : g ? "{\n" + g + r.join(",\n" + g) + "\n" + w + "}" : "{" + r.join(",") + "}";
                            g = w;
                            return p;
                    }
                }
                "function" !== typeof Date.prototype.toJSON &&
                    ((Date.prototype.toJSON = function () {
                        return isFinite(this.valueOf())
                            ? this.getUTCFullYear() + "-" + a(this.getUTCMonth() + 1) + "-" + a(this.getUTCDate()) + "T" + a(this.getUTCHours()) + ":" + a(this.getUTCMinutes()) + ":" + a(this.getUTCSeconds()) + "Z"
                            : null;
                    }),
                    (String.prototype.toJSON = Number.prototype.toJSON = Boolean.prototype.toJSON = function () {
                        return this.valueOf();
                    }));
                var e = /[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
                    d = /[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
                    g,
                    f,
                    h = { "\b": "\\b", "\t": "\\t", "\n": "\\n", "\f": "\\f", "\r": "\\r", '"': '\\"', "\\": "\\\\" },
                    l;
                "function" !== typeof window.JSON.stringify &&
                    (window.JSON.stringify = function (a, c, d) {
                        var e;
                        f = g = "";
                        if ("number" === typeof d) for (e = 0; e < d; e += 1) f += " ";
                        else "string" === typeof d && (f = d);
                        if ((l = c) && "function" !== typeof c && ("object" !== typeof c || "number" !== typeof c.length)) throw Error("JSON.stringify");
                        return b("", { "": a });
                    });
                "function" !== typeof window.JSON.parse &&
                    (window.JSON.parse = function (a, b) {
                        function c(a, d) {
                            var e,
                                f,
                                g = a[d];
                            if (g && "object" === typeof g) for (e in g) Object.prototype.hasOwnProperty.call(g, e) && ((f = c(g, e)), void 0 !== f ? (g[e] = f) : delete g[e]);
                            return b.call(a, d, g);
                        }
                        var d;
                        a = String(a);
                        e.lastIndex = 0;
                        e.test(a) &&
                            (a = a.replace(e, function (a) {
                                return "\\u" + ("0000" + a.charCodeAt(0).toString(16)).slice(-4);
                            }));
                        if (
                            /^[\],:{}\s]*$/.test(
                                a
                                    .replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g, "@")
                                    .replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, "]")
                                    .replace(/(?:^|:|,)(?:\s*\[)+/g, "")
                            )
                        )
                            return (d = eval("(" + a + ")")), "function" === typeof b ? c({ "": d }, "") : d;
                        throw new SyntaxError("JSON.parse");
                    });
            })();
            function t(a) {
                if (Array.prototype.reduce && /\{\s*\[native code\]\s*\}/.test("" + Array.prototype.reduce))
                    return a.split("").reduce(function (a, b) {
                        a = (a << 5) - a + b.charCodeAt(0);
                        return a & a;
                    }, 0);
                var c = 0;
                if (0 === a.length) return c;
                for (var b = 0; b < a.length; b++) (c = (c << 5) - c + a.charCodeAt(b)), (c &= c);
                return c;
            }
            window.x64h = {
                f: function (a, c) {
                    a = [a[0] >>> 16, a[0] & 65535, a[1] >>> 16, a[1] & 65535];
                    c = [c[0] >>> 16, c[0] & 65535, c[1] >>> 16, c[1] & 65535];
                    var b = [0, 0, 0, 0];
                    b[3] += a[3] + c[3];
                    b[2] += b[3] >>> 16;
                    b[3] &= 65535;
                    b[2] += a[2] + c[2];
                    b[1] += b[2] >>> 16;
                    b[2] &= 65535;
                    b[1] += a[1] + c[1];
                    b[0] += b[1] >>> 16;
                    b[1] &= 65535;
                    b[0] += a[0] + c[0];
                    b[0] &= 65535;
                    return [(b[0] << 16) | b[1], (b[2] << 16) | b[3]];
                },
                c: function (a, c) {
                    a = [a[0] >>> 16, a[0] & 65535, a[1] >>> 16, a[1] & 65535];
                    c = [c[0] >>> 16, c[0] & 65535, c[1] >>> 16, c[1] & 65535];
                    var b = [0, 0, 0, 0];
                    b[3] += a[3] * c[3];
                    b[2] += b[3] >>> 16;
                    b[3] &= 65535;
                    b[2] += a[2] * c[3];
                    b[1] += b[2] >>> 16;
                    b[2] &= 65535;
                    b[2] += a[3] * c[2];
                    b[1] += b[2] >>> 16;
                    b[2] &= 65535;
                    b[1] += a[1] * c[3];
                    b[0] += b[1] >>> 16;
                    b[1] &= 65535;
                    b[1] += a[2] * c[2];
                    b[0] += b[1] >>> 16;
                    b[1] &= 65535;
                    b[1] += a[3] * c[1];
                    b[0] += b[1] >>> 16;
                    b[1] &= 65535;
                    b[0] += a[0] * c[3] + a[1] * c[2] + a[2] * c[1] + a[3] * c[0];
                    b[0] &= 65535;
                    return [(b[0] << 16) | b[1], (b[2] << 16) | b[3]];
                },
                h: function (a, c) {
                    c %= 64;
                    if (32 === c) return [a[1], a[0]];
                    if (32 > c) return [(a[0] << c) | (a[1] >>> (32 - c)), (a[1] << c) | (a[0] >>> (32 - c))];
                    c -= 32;
                    return [(a[1] << c) | (a[0] >>> (32 - c)), (a[0] << c) | (a[1] >>> (32 - c))];
                },
                b: function (a, c) {
                    c %= 64;
                    return 0 === c ? a : 32 > c ? [(a[0] << c) | (a[1] >>> (32 - c)), a[1] << c] : [a[1] << (c - 32), 0];
                },
                a: function (a, c) {
                    return [a[0] ^ c[0], a[1] ^ c[1]];
                },
                C: function (a) {
                    a = this.a(a, [0, a[0] >>> 1]);
                    a = this.c(a, [4283543511, 3981806797]);
                    a = this.a(a, [0, a[0] >>> 1]);
                    a = this.c(a, [3301882366, 444984403]);
                    return (a = this.a(a, [0, a[0] >>> 1]));
                },
                Ca: function (a, c) {
                    a = a || "";
                    c = c || 0;
                    for (var b = a.length % 16, e = a.length - b, d = [0, c], g = [0, c], f = [0, 0], h = [0, 0], l = [2277735313, 289559509], q = [1291169091, 658871167], k = 0; k < e; k += 16)
                        (f = [
                            (a.charCodeAt(k + 4) & 255) | ((a.charCodeAt(k + 5) & 255) << 8) | ((a.charCodeAt(k + 6) & 255) << 16) | ((a.charCodeAt(k + 7) & 255) << 24),
                            (a.charCodeAt(k) & 255) | ((a.charCodeAt(k + 1) & 255) << 8) | ((a.charCodeAt(k + 2) & 255) << 16) | ((a.charCodeAt(k + 3) & 255) << 24),
                        ]),
                            (h = [
                                (a.charCodeAt(k + 12) & 255) | ((a.charCodeAt(k + 13) & 255) << 8) | ((a.charCodeAt(k + 14) & 255) << 16) | ((a.charCodeAt(k + 15) & 255) << 24),
                                (a.charCodeAt(k + 8) & 255) | ((a.charCodeAt(k + 9) & 255) << 8) | ((a.charCodeAt(k + 10) & 255) << 16) | ((a.charCodeAt(k + 11) & 255) << 24),
                            ]),
                            (f = this.c(f, l)),
                            (f = this.h(f, 31)),
                            (f = this.c(f, q)),
                            (d = this.a(d, f)),
                            (d = this.h(d, 27)),
                            (d = this.f(d, g)),
                            (d = this.f(this.c(d, [0, 5]), [0, 1390208809])),
                            (h = this.c(h, q)),
                            (h = this.h(h, 33)),
                            (h = this.c(h, l)),
                            (g = this.a(g, h)),
                            (g = this.h(g, 31)),
                            (g = this.f(g, d)),
                            (g = this.f(this.c(g, [0, 5]), [0, 944331445]));
                    f = [0, 0];
                    h = [0, 0];
                    switch (b) {
                        case 15:
                            h = this.a(h, this.b([0, a.charCodeAt(k + 14)], 48));
                        case 14:
                            h = this.a(h, this.b([0, a.charCodeAt(k + 13)], 40));
                        case 13:
                            h = this.a(h, this.b([0, a.charCodeAt(k + 12)], 32));
                        case 12:
                            h = this.a(h, this.b([0, a.charCodeAt(k + 11)], 24));
                        case 11:
                            h = this.a(h, this.b([0, a.charCodeAt(k + 10)], 16));
                        case 10:
                            h = this.a(h, this.b([0, a.charCodeAt(k + 9)], 8));
                        case 9:
                            (h = this.a(h, [0, a.charCodeAt(k + 8)])), (h = this.c(h, q)), (h = this.h(h, 33)), (h = this.c(h, l)), (g = this.a(g, h));
                        case 8:
                            f = this.a(f, this.b([0, a.charCodeAt(k + 7)], 56));
                        case 7:
                            f = this.a(f, this.b([0, a.charCodeAt(k + 6)], 48));
                        case 6:
                            f = this.a(f, this.b([0, a.charCodeAt(k + 5)], 40));
                        case 5:
                            f = this.a(f, this.b([0, a.charCodeAt(k + 4)], 32));
                        case 4:
                            f = this.a(f, this.b([0, a.charCodeAt(k + 3)], 24));
                        case 3:
                            f = this.a(f, this.b([0, a.charCodeAt(k + 2)], 16));
                        case 2:
                            f = this.a(f, this.b([0, a.charCodeAt(k + 1)], 8));
                        case 1:
                            (f = this.a(f, [0, a.charCodeAt(k)])), (f = this.c(f, l)), (f = this.h(f, 31)), (f = this.c(f, q)), (d = this.a(d, f));
                    }
                    d = this.a(d, [0, a.length]);
                    g = this.a(g, [0, a.length]);
                    d = this.f(d, g);
                    g = this.f(g, d);
                    d = this.C(d);
                    g = this.C(g);
                    d = this.f(d, g);
                    g = this.f(g, d);
                    return ("00000000" + (d[0] >>> 0).toString(16)).slice(-8) + ("00000000" + (d[1] >>> 0).toString(16)).slice(-8) + ("00000000" + (g[0] >>> 0).toString(16)).slice(-8) + ("00000000" + (g[1] >>> 0).toString(16)).slice(-8);
                },
            };
            window.mlbp = {
                options: { B: [/palemoon/i] },
                L: function () {
                    var a = {},
                        c = null,
                        b = null,
                        e = null,
                        d = null,
                        g = null,
                        f = null,
                        h = null,
                        l = !0;
                    0 == "false".localeCompare("false") &&
                        ((l = !1),
                        (c = Date.now()),
                        (b = window.mlbp.M()),
                        (a.canvas = Date.now() - c),
                        (c = Date.now()),
                        (e = window.mlbp.da()),
                        (a.webgl = Date.now() - c),
                        (c = Date.now()),
                        (d = window.mlbp.ca()),
                        (a.userfonts = Date.now() - c),
                        (c = Date.now()),
                        (g = window.mlbp.J()),
                        (a.browserplugins = Date.now() - c),
                        (c = Date.now()),
                        (f = window.mlbp.T()),
                        (a.plugins = Date.now() - c),
                        (c = Date.now()),
                        (h = window.mlbp.S()),
                        (a.installedfonts = Date.now() - c));
                    return {
                        ad_block: window.mlbp.I(),
                        canvas: b,
                        connection: window.mlbp.O(),
                        cookie_enabled: navigator.cookieEnabled,
                        device_memory: navigator.deviceMemory ? Math.trunc(navigator.deviceMemory) : 0,
                        do_not_track: navigator.doNotTrack ? navigator.doNotTrack.toString() : null,
                        etag: window.mlbp_etag,
                        fonts: d,
                        hardware_concurrency: navigator.hardwareConcurrency || 0,
                        history: window.history ? window.history.length : "unknown",
                        incognito: window.mlbp_incognito,
                        js_type: "js_hash",
                        lang: navigator.language || navigator.userLanguage,
                        languages: navigator.languages,
                        literal_colors: t(new String(JSON.stringify(window.mlbp_literal_colors))),
                        local_storage: !!window.localStorage,
                        login_detection: window.mlbp_login_detection,
                        math_number: window.mlbp.U(),
                        open_database: !!window.openDatabase,
                        pixel_ratio: window.devicePixelRatio,
                        platform: window.mlbp.W(),
                        webgl: e,
                        plugins: g,
                        resolution: [screen.height, screen.width, screen.colorDepth].join("x"),
                        screen: window.mlbp.$(),
                        session_storage: !!window.sessionStorage,
                        time: a,
                        time_based_fp: window.mlbp_time_based_fp,
                        time_zone_name: window.Intl && window.Intl.DateTimeFormat ? new window.Intl.DateTimeFormat().resolvedOptions().timeZone : "",
                        time_zone_offset: new Date().getTimezoneOffset(),
                        touch_points: navigator.maxTouchPoints,
                        user_agent: navigator.userAgent,
                        vendor: navigator.vendor,
                        window_size: window.mlbp.ia(),
                        webdriver: navigator.webdriver,
                        installed_fonts: h,
                        installed_plugins: f,
                        light_version: l,
                        referer: window.mlbp.Y(),
                        webcam: window.mlbp_webcam,
                    };
                },
                Y: function () {
                    var a = null;
                    "undefined" != typeof window.__PRELOADED_STATE__ && (a = window.__PRELOADED_STATE__.referer);
                    return a;
                },
                ia: function () {
                    return { inner: [window.innerHeight, window.innerWidth].join("x"), outer: [window.outerHeight, window.outerWidth].join("x") };
                },
                $: function () {
                    return window.screen
                        ? {
                              orientation: window.screen.orientation ? window.screen.orientation.angle : null,
                              type: window.screen.orientation ? window.screen.orientation.type : null,
                              avail_height: window.screen.availHeight,
                              avail_left: window.screen.availLeft,
                              avail_top: window.screen.availTop,
                              avail_width: window.screen.availWidth,
                          }
                        : null;
                },
                O: function () {
                    return navigator.connection
                        ? {
                              downlink: navigator.connection.downlink ? navigator.connection.downlink.toString() : null,
                              rtt: navigator.connection.rtt ? navigator.connection.rtt.toString() : null,
                              type: navigator.connection.effectiveType ? navigator.connection.effectiveType.toString() : null,
                          }
                        : null;
                },
                U: function () {
                    return Math.tan(-1e300) + Math.asinh(1) + Math.expm1(1) + Math.cbrt(100) + Math.log1p(10) + Math.sinh(1) + Math.cosh(10) + Math.tanh(1);
                },
                I: function () {
                    var a = document.createElement("div");
                    a.innerHTML = "\x26nbsp;";
                    a.className = "adsbox";
                    var c = !1;
                    try {
                        document.body.appendChild(a), (c = 0 === document.getElementsByClassName("adsbox")[0].offsetHeight), document.body.removeChild(a);
                    } catch (b) {
                        c = !1;
                    }
                    return c;
                },
                Ea: function () {
                    return { js_type: "js_cookie", value: "x" };
                },
                S: function () {
                    try {
                        return new window.mlbp.m(window.mlbp.sa).P();
                    } catch (a) {
                        return ["not available"];
                    }
                },
                m: function (a) {
                    function c() {
                        var a = document.createElement("span");
                        a.style.position = "absolute";
                        a.style.left = "-9999px";
                        a.style.fontSize = "72px";
                        a.innerHTML = "mmmmmmmmmmlli";
                        return a;
                    }
                    function b(a) {
                        for (var b = !1, c = 0; c < d.length && !(b = a[c].offsetWidth !== l[d[c]] || a[c].offsetHeight !== q[d[c]]); c++);
                        return b;
                    }
                    for (
                        var e = [], d = ["monospace", "sans-serif", "serif"], g = document.getElementsByTagName("body")[0], f = document.createElement("div"), h = document.createElement("div"), l = {}, q = {}, k = [], m = 0, u = d.length;
                        m < u;
                        m++
                    ) {
                        var p = c();
                        p.style.fontFamily = d[m];
                        f.appendChild(p);
                        k.push(p);
                    }
                    g.appendChild(f);
                    m = 0;
                    for (u = d.length; m < u; m++) (l[d[m]] = k[m].offsetWidth), (q[d[m]] = k[m].offsetHeight);
                    k = (function (a) {
                        for (var b = {}, e = 0, f = a.length; e < f; e++) {
                            for (var g = [], k = 0, l = d.length; k < l; k++) {
                                var m;
                                m = a[e];
                                var p = d[k],
                                    q = c();
                                q.style.fontFamily = "'" + m + "'," + p;
                                m = q;
                                h.appendChild(m);
                                g.push(m);
                            }
                            b[a[e]] = g;
                        }
                        return b;
                    })(a);
                    g.appendChild(h);
                    m = 0;
                    for (u = a.length; m < u; m++) b(k[a[m]]) && e.push(a[m]);
                    e.sort(function (a, b) {
                        var c = a.toLowerCase(),
                            d = b.toLowerCase();
                        return c < d ? -1 : c > d ? 1 : 0;
                    });
                    g.removeChild(h);
                    g.removeChild(f);
                    this.P = function () {
                        return e;
                    };
                    this.ja = function (a) {
                        for (var b = 0, c = e.length; b < c; b++) if (e[b] === a) return !0;
                        return !1;
                    };
                },
                T: function () {
                    try {
                        var a = {};
                        return (a = window.ActiveXObject ? window.mlbp.R() : window.mlbp.v());
                    } catch (c) {
                        return ["not available"];
                    }
                },
                v: function () {
                    for (var a = [], c = 0, b = navigator.plugins.length; c < b; c++) a.push(navigator.plugins[c]);
                    return 0 < a.length
                        ? (this.ta() &&
                              (a = a.sort(function (a, b) {
                                  return a.name > b.name ? 1 : a.name < b.name ? -1 : 0;
                              })),
                          this.map(
                              a,
                              function (a) {
                                  var b = this.map(a, function (a) {
                                      return [a.type, a.suffixes].join("~");
                                  }).join(",");
                                  return [a.name, a.description, b].join("::");
                              },
                              this
                          ))
                        : [];
                },
                R: function () {
                    var a = [];
                    if ((Object.getOwnPropertyDescriptor && Object.getOwnPropertyDescriptor(window, "ActiveXObject")) || "ActiveXObject" in window)
                        a = this.map(
                            "AcroPDF.PDF;Adodb.Stream;AgControl.AgControl;DevalVRXCtrl.DevalVRXCtrl.1;MacromediaFlashPaper.MacromediaFlashPaper;Msxml2.DOMDocument;Msxml2.XMLHTTP;PDF.PdfCtrl;QuickTime.QuickTime;QuickTimeCheckObject.QuickTimeCheck.1;RealPlayer;RealPlayer.RealPlayer(tm) ActiveX Control (32-bit);RealVideo.RealVideo(tm) ActiveX Control (32-bit);Scripting.Dictionary;SWCtl.SWCtl;Shell.UIHelper;ShockwaveFlash.ShockwaveFlash;Skype.Detection;TDCCtl.TDCCtl;WMPlayer.OCX;rmocx.RealPlayer G2 Control;rmocx.RealPlayer G2 Control.1".split(
                                ";"
                            ),
                            function (a) {
                                try {
                                    return new ActiveXObject(a), a;
                                } catch (b) {
                                    return null;
                                }
                            }
                        );
                    navigator.plugins && (a = a.concat(this.v()));
                    for (var c = [], b = 0, e = a.length; b < e; b++) a[b] && c.push(a[b]);
                    return c;
                },
                J: function () {
                    var a = {};
                    return (a = window.ActiveXObject ? window.mlbp.G() : window.mlbp.H());
                },
                G: function () {
                    var a = /[0-9]+/,
                        c = { flash: "ShockwaveFlash.ShockwaveFlash.1", wmplayer: "wmplayer.ocx", pdf: "AcroPDF.PDF.1", silverlight: "AgControl.AgControl", quicktime: "QuickTime.QuickTime" },
                        b = {},
                        e;
                    for (e in c) {
                        var d = window.mlbp.na(c[e]);
                        d && ((d = a.exec(d)), (b[e] = (d && d[0]) || ""));
                    }
                    navigator.javaEnabled() && (b.java = "");
                    return b;
                },
                H: function () {
                    for (var a = {}, c = /\d+(.\d+)*/, b = navigator.plugins, e = /Flash|PDF|Java|Silverlight|QuickTime/i, d = 0; d < b.length; d++) {
                        var g = e.exec(b[d].description);
                        if (g) {
                            var g = g[0].toLowerCase(),
                                f = c.exec(b[d].version || b[d].name + " " + b[d].description);
                            a[g] || (a[g] = (f && f[0]) || "");
                        }
                    }
                    return a;
                },
                ca: function () {
                    var a = [],
                        c = [],
                        b = [],
                        e = window.mlbp.V(),
                        d = new window.mlbp.m(window.mlbp.fonts),
                        g = { Linux: "0346", Mac: "1356", Windows: "2456" },
                        f;
                    for (f in window.mlbp.g)
                        d.ja(f)
                            ? "Unknown OS" !== e && -1 != g[e].indexOf(window.mlbp.g[f])
                                ? a.push('{"' + f + '" :' + window.mlbp.g[f] + "}")
                                : c.push('{"' + f + '" :' + window.mlbp.g[f] + "}")
                            : "Unknown OS" !== e && -1 != g[e].indexOf(window.mlbp.g[f]) && b.push('{"' + f + '" :' + window.mlbp.g[f] + "}");
                    return { os: t(String(JSON.stringify(a))), other_os: JSON.stringify(c), not_os: t(String(JSON.stringify(b))) };
                },
                V: function () {
                    var a = "Unknown OS",
                        c = navigator.appVersion;
                    -1 != c.indexOf("Win") && (a = "Windows");
                    -1 != c.indexOf("Mac") && (a = "Mac");
                    -1 != c.indexOf("Linux") && (a = "Linux");
                    return a;
                },
                map: function (a, c, b) {
                    var e = [];
                    if (null == a) return e;
                    if (this.pa && a.map === this.pa) return a.map(c, b);
                    this.F(a, function (a, g, f) {
                        e[e.length] = c.call(b, a, g, f);
                    });
                    return e;
                },
                F: function (a, c, b) {
                    if (null !== a)
                        if (this.oa && a.forEach === this.oa) a.forEach(c, b);
                        else if (a.length === +a.length) for (var e = 0, d = a.length; e < d && c.call(b, a[e], e, a) !== {}; e++);
                        else for (e in a) if (a.hasOwnProperty(e) && c.call(b, a[e], e, a) === {}) break;
                },
                ta: function () {
                    for (var a = !1, c = 0, b = this.options.B.length; c < b; c++)
                        if (navigator.userAgent.match(this.options.B[c])) {
                            a = !0;
                            break;
                        }
                    return a;
                },
                fonts: "Palatino Linotype;Franklin Gothic Medium;Lucida Grande;URW Gothic L;Sylfaen;URW Bookman L;Helvetica Neue;URW Palladio L;Gill Sans;Nimbus Sans L;Lucida Console;Lucida Sans Unicode;Tahoma;Arial Black;Verdana;Arial;Courier New;Comic Sans MS;Impact;Trebuchet MS;Georgia;Times New Roman;Arial Narrow;Century Gothic;Bookman Oldstyle;Book Antigua;Calibri;Cambria;Consolas;Candara;Corbel;Constantia;Geneva;Monaco;Skia;Helvetica;Courier;Bitstream Vera Sans;Bitstream Vera Sans Mono;Bitstream Vera Serif;Utopia;New Century Schoolbook;Fixed;Nimbus Mono;Century Schoolbook L;URW Chancery L;Bitstream Charter;DejaVu Sans Mono;DejaVu Sans Condensed;DejaVu Serif Condensed;DejaVu Sans;DejaVu Serif;Free Mono;Free Sans;Free Serif;Liberation Mono;Liberation Sans;Liberation Serif".split(
                    ";"
                ),
                g: {
                    "Palatino Linotype": 2,
                    "Franklin Gothic Medium": 2,
                    "Lucida Grande": 1,
                    "URW Gothic L": 0,
                    Sylfaen: 2,
                    "URW Bookman L": 0,
                    "Helvetica Neue": 1,
                    "URW Palladio L": 0,
                    "Gill Sans": 1,
                    "Nimbus Sans L": 0,
                    "Lucida Console": 2,
                    "Lucida Sans Unicode": 2,
                    Tahoma: 5,
                    "Arial Black": 6,
                    Verdana: 6,
                    Arial: 6,
                    "Courier New": 6,
                    "Comic Sans MS": 6,
                    Impact: 6,
                    "Trebuchet MS": 6,
                    Georgia: 6,
                    "Times New Roman": 6,
                    "Arial Narrow": 5,
                    "Century Gothic": 5,
                    "Bookman Oldstyle": 5,
                    "Book Antigua": 5,
                    Calibri: 5,
                    Cambria: 5,
                    Consolas: 3,
                    Candara: 5,
                    Corbel: 5,
                    Constantia: 5,
                    Geneva: 1,
                    Monaco: 1,
                    Skia: 1,
                    Helvetica: 3,
                    Courier: 3,
                    "Bitstream Vera Sans": 3,
                    "Bitstream Vera Sans Mono": 3,
                    "Bitstream Vera Serif": 3,
                    Utopia: 3,
                    "New Century Schoolbook": 3,
                    Fixed: 0,
                    "Nimbus Mono": 0,
                    "Century Schoolbook L": 0,
                    "URW Chancery L": 0,
                    "Bitstream Charter": 0,
                    "DejaVu Sans Mono": 0,
                    "DejaVu Sans Condensed": 0,
                    "DejaVu Serif Condensed": 0,
                    "DejaVu Sans": 0,
                    "DejaVu Serif": 0,
                    "Free Mono": 0,
                    "Free Sans": 0,
                    "Free Serif": 0,
                    "Liberation Mono": 0,
                    "Liberation Sans": 0,
                    "Liberation Serif": 0,
                },
                sa: "Andale Mono;Arial Hebrew;Arial MT;Arial Rounded MT Bold;Arial Unicode MS;Cambria Math;Century;Comic Sans;Garamond;Lucida Bright;Lucida Calligraphy;Lucida Fax;Lucida Handwriting;Lucida Sans;Lucida Sans Typewriter;Microsoft Sans Serif;Monotype Corsiva;MS Gothic;MS Outlook;MS PGothic;MS Reference Sans Serif;MS Sans Serif;MS Serif;MYRIAD;MYRIAD PRO;Palatino;Segoe Print;Segoe Script;Segoe UI;Segoe UI Light;Segoe UI Semibold;Segoe UI Symbol;Times;Times New Roman PS;Wingdings;Wingdings 2;Wingdings 3;AvantGarde Md BT;AVENIR;Baskerville;Big Caslon;Bodoni 72;Brush Script MT;Calisto MT;Copperplate;Didot;Futura;Goudy Stout;Hoefler Text;Old Century;Papyrus;Perpetua;Rockwell".split(
                    ";"
                ),
                na: function (a) {
                    var c = !1,
                        b = null;
                    try {
                        b = new ActiveXObject(a);
                        try {
                            c = b.GetVariable("$version");
                        } catch (d) {
                            try {
                                c = b.Da();
                            } catch (g) {
                                try {
                                    var e;
                                    for (a = 1; 9 > a; a++) b.Fa(a + ".0") && (e = a);
                                    c = e || !0;
                                } catch (f) {
                                    c = !0;
                                }
                            }
                        }
                    } catch (d) {
                        c = !1;
                    }
                    null != b && delete b;
                    return c;
                },
                base64_encode: function (a) {
                    var c,
                        b,
                        e,
                        d,
                        g = 0,
                        f = 0,
                        h = "",
                        h = [];
                    if (!a) return a;
                    do
                        (c = a.charCodeAt(g++)),
                            (b = a.charCodeAt(g++)),
                            (e = a.charCodeAt(g++)),
                            (d = (c << 16) | (b << 8) | e),
                            (c = (d >> 18) & 63),
                            (b = (d >> 12) & 63),
                            (e = (d >> 6) & 63),
                            (d &= 63),
                            (h[f++] =
                                "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/\x3d".charAt(c) +
                                "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/\x3d".charAt(b) +
                                "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/\x3d".charAt(e) +
                                "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/\x3d".charAt(d));
                    while (g < a.length);
                    h = h.join("");
                    a = a.length % 3;
                    return (a ? h.slice(0, a - 3) : h) + "\x3d\x3d\x3d".slice(a || 3);
                },
                JSONP: {
                    va: null,
                    options: {},
                    call: function (a, c) {
                        c || (this.options = {});
                        this.options.o = c.o || function () {};
                        this.options.s = c.s || "callback";
                        this.options.l = c.l || [];
                        var b = -1 < a.indexOf("?") ? "\x26" : "?",
                            e = [],
                            d;
                        for (d in this.options.l) e.push(d + "\x3d" + encodeURIComponent(c.l[d]));
                        e = e.join("\x26");
                        d = document.getElementsByTagName("head")[0];
                        this.va && d.removeChild(script);
                        script = document.createElement("script");
                        script.type = "text/javascript";
                        script.src = a + b + e + (e ? "\x26" : "") + this.options.s + "\x3dmlbp.JSONP.process";
                        d.appendChild(script);
                    },
                    process: function (a) {
                        this.options.o(a);
                    },
                },
                la: function () {
                    return void 0 !== navigator.platform && null !== navigator.platform ? !0 : !1;
                },
                W: function () {
                    return this.la() ? navigator.platform : "not available";
                },
                M: function () {
                    try {
                        return this.ka() ? this.j(this.N()) : "not supported";
                    } catch (a) {
                        return "not available";
                    }
                },
                ka: function () {
                    var a = document.createElement("canvas");
                    return !(!a.getContext || !a.getContext("2d"));
                },
                j: function (a) {
                    return window.x64h.Ca(a, 31);
                },
                N: function () {
                    var a = [],
                        c = document.createElement("canvas");
                    c.width = 2e3;
                    c.height = 200;
                    c.style.display = "inline";
                    var b = c.getContext("2d");
                    b.rect(0, 0, 10, 10);
                    b.rect(2, 2, 6, 6);
                    b.textBaseline = "alphabetic";
                    b.fillStyle = "#f60";
                    b.fillRect(125, 1, 62, 20);
                    b.fillStyle = "#069";
                    b.font = "11pt Arial";
                    b.fillText("Cwm fjordbank glyphs vext quiz, \ud83d\ude03", 2, 15);
                    b.fillStyle = "rgba(102, 204, 0, 0.2)";
                    b.font = "18pt Arial";
                    b.fillText("Cwm fjordbank glyphs vext quiz, \ud83d\ude03", 4, 45);
                    b.globalCompositeOperation = "multiply";
                    b.fillStyle = "rgb(255,0,255)";
                    b.beginPath();
                    b.arc(50, 50, 50, 0, 2 * Math.PI, !0);
                    b.closePath();
                    b.fill();
                    b.fillStyle = "rgb(0,255,255)";
                    b.beginPath();
                    b.arc(100, 50, 50, 0, 2 * Math.PI, !0);
                    b.closePath();
                    b.fill();
                    b.fillStyle = "rgb(255,255,0)";
                    b.beginPath();
                    b.arc(75, 100, 50, 0, 2 * Math.PI, !0);
                    b.closePath();
                    b.fill();
                    b.fillStyle = "rgb(255,0,255)";
                    b.arc(75, 75, 75, 0, 2 * Math.PI, !0);
                    b.arc(75, 75, 25, 0, 2 * Math.PI, !0);
                    b.fill("evenodd");
                    c.toDataURL && a.push("canvas fp:" + c.toDataURL());
                    return a.join("~");
                },
                da: function () {
                    var a = window.mlbp.ea();
                    if (!window.WebGLRenderingContext || !a) return window.mlbp.w(a), null;
                    var c = null;
                    try {
                        (c = window.mlbp.fa(a)), (c = window.mlbp.j(c));
                    } catch (d) {
                        c = null;
                    }
                    var b = null;
                    try {
                        (b = window.mlbp.ga(a)), (b = window.mlbp.j(b));
                    } catch (d) {
                        b = null;
                    }
                    var e = window.mlbp.ha(a);
                    window.mlbp.w(a);
                    return { image: c, report: b, vendor: e.vendor, renderer: e.A };
                },
                ea: function () {
                    var a = document.createElement("canvas"),
                        c = null;
                    try {
                        c = a.getContext("webgl") || a.getContext("experimental-webgl");
                    } catch (b) {}
                    c || (c = null);
                    return c;
                },
                w: function (a) {
                    try {
                        var c = a.getExtension("WEBGL_lose_context");
                        null != c && c.loseContext();
                    } catch (b) {}
                },
                i: function (a, c) {
                    if (Array.prototype.forEach && a.forEach === Array.prototype.forEach) a.forEach(c);
                    else if (a.length === +a.length) for (var b = 0, e = a.length; b < e; b++) c(a[b], b, a);
                    else for (b in a) a.hasOwnProperty(b) && c(a[b], b, a);
                },
                ga: function (a) {
                    function c(b) {
                        a.clearColor(0, 0, 0, 1);
                        a.enable(a.DEPTH_TEST);
                        a.depthFunc(a.LEQUAL);
                        a.clear(a.COLOR_BUFFER_BIT | a.DEPTH_BUFFER_BIT);
                        return "[" + b[0] + ", " + b[1] + "]";
                    }
                    var b = [];
                    b.push("extensions:" + (a.getSupportedExtensions() || []).join(";"));
                    b.push("webgl aliased line width range:" + c(a.getParameter(a.ALIASED_LINE_WIDTH_RANGE)));
                    b.push("webgl aliased point size range:" + c(a.getParameter(a.ALIASED_POINT_SIZE_RANGE)));
                    b.push("webgl alpha bits:" + a.getParameter(a.ALPHA_BITS));
                    b.push("webgl antialiasing:" + (a.getContextAttributes().antialias ? "yes" : "no"));
                    b.push("webgl blue bits:" + a.getParameter(a.BLUE_BITS));
                    b.push("webgl depth bits:" + a.getParameter(a.DEPTH_BITS));
                    b.push("webgl green bits:" + a.getParameter(a.GREEN_BITS));
                    b.push(
                        "webgl max anisotropy:" +
                            (function (a) {
                                var b = a.getExtension("EXT_texture_filter_anisotropic") || a.getExtension("WEBKIT_EXT_texture_filter_anisotropic") || a.getExtension("MOZ_EXT_texture_filter_anisotropic");
                                return b ? ((a = a.getParameter(b.MAX_TEXTURE_MAX_ANISOTROPY_EXT)), 0 === a && (a = 2), a) : null;
                            })(a)
                    );
                    b.push("webgl max combined texture image units:" + a.getParameter(a.MAX_COMBINED_TEXTURE_IMAGE_UNITS));
                    b.push("webgl max cube map texture size:" + a.getParameter(a.MAX_CUBE_MAP_TEXTURE_SIZE));
                    b.push("webgl max fragment uniform vectors:" + a.getParameter(a.MAX_FRAGMENT_UNIFORM_VECTORS));
                    b.push("webgl max render buffer size:" + a.getParameter(a.MAX_RENDERBUFFER_SIZE));
                    b.push("webgl max texture image units:" + a.getParameter(a.MAX_TEXTURE_IMAGE_UNITS));
                    b.push("webgl max texture size:" + a.getParameter(a.MAX_TEXTURE_SIZE));
                    b.push("webgl max varying vectors:" + a.getParameter(a.MAX_VARYING_VECTORS));
                    b.push("webgl max vertex attribs:" + a.getParameter(a.MAX_VERTEX_ATTRIBS));
                    b.push("webgl max vertex texture image units:" + a.getParameter(a.MAX_VERTEX_TEXTURE_IMAGE_UNITS));
                    b.push("webgl max vertex uniform vectors:" + a.getParameter(a.MAX_VERTEX_UNIFORM_VECTORS));
                    b.push("webgl max viewport dims:" + c(a.getParameter(a.MAX_VIEWPORT_DIMS)));
                    b.push("webgl red bits:" + a.getParameter(a.RED_BITS));
                    b.push("webgl renderer:" + a.getParameter(a.RENDERER));
                    b.push("webgl shading language version:" + a.getParameter(a.SHADING_LANGUAGE_VERSION));
                    b.push("webgl stencil bits:" + a.getParameter(a.STENCIL_BITS));
                    b.push("webgl vendor:" + a.getParameter(a.VENDOR));
                    b.push("webgl version:" + a.getParameter(a.VERSION));
                    try {
                        var e = a.getExtension("WEBGL_debug_renderer_info");
                        e && (b.push("webgl unmasked vendor:" + a.getParameter(e.UNMASKED_VENDOR_WEBGL)), b.push("webgl unmasked renderer:" + a.getParameter(e.UNMASKED_RENDERER_WEBGL)));
                    } catch (d) {}
                    if (!a.getShaderPrecisionFormat) return b.join("~");
                    window.mlbp.i(["FLOAT", "INT"], function (c) {
                        window.mlbp.i(["VERTEX", "FRAGMENT"], function (e) {
                            window.mlbp.i(["HIGH", "MEDIUM", "LOW"], function (f) {
                                window.mlbp.i(["precision", "rangeMin", "rangeMax"], function (h) {
                                    var l = a.getShaderPrecisionFormat(a[e + "_SHADER"], a[f + "_" + c])[h];
                                    "precision" !== h && (h = "precision " + h);
                                    b.push(["webgl ", e.toLowerCase(), " shader ", f.toLowerCase(), " ", c.toLowerCase(), " ", h, ":", l].join(""));
                                });
                            });
                        });
                    });
                    return b.join("~");
                },
                fa: function (a) {
                    var c = a.createBuffer();
                    a.bindBuffer(a.ARRAY_BUFFER, c);
                    var b = new Float32Array([-0.2, -0.9, 0, 0.4, -0.26, 0, 0, 0.732134444, 0]);
                    a.bufferData(a.ARRAY_BUFFER, b, a.STATIC_DRAW);
                    c.ma = 3;
                    c.qa = 3;
                    var b = a.createProgram(),
                        e = a.createShader(a.VERTEX_SHADER);
                    a.shaderSource(e, "attribute vec2 attrVertex;varying vec2 varyinTexCoordinate;uniform vec2 uniformOffset;void main(){varyinTexCoordinate\x3dattrVertex+uniformOffset;gl_Position\x3dvec4(attrVertex,0,1);}");
                    a.compileShader(e);
                    var d = a.createShader(a.FRAGMENT_SHADER);
                    a.shaderSource(d, "precision mediump float;varying vec2 varyinTexCoordinate;void main() {gl_FragColor\x3dvec4(varyinTexCoordinate,0,1);}");
                    a.compileShader(d);
                    a.attachShader(b, e);
                    a.attachShader(b, d);
                    a.linkProgram(b);
                    a.useProgram(b);
                    b.Ba = a.getAttribLocation(b, "attrVertex");
                    b.ra = a.getUniformLocation(b, "uniformOffset");
                    a.enableVertexAttribArray(b.Ha);
                    a.vertexAttribPointer(b.Ba, c.ma, a.FLOAT, !1, 0, 0);
                    a.uniform2f(b.ra, 1, 1);
                    a.drawArrays(a.TRIANGLE_STRIP, 0, c.qa);
                    return a.canvas.toDataURL();
                },
                ha: function (a) {
                    try {
                        var c = a.getExtension("WEBGL_debug_renderer_info");
                        return { vendor: a.getParameter(c.UNMASKED_VENDOR_WEBGL), A: a.getParameter(c.UNMASKED_RENDERER_WEBGL) };
                    } catch (b) {
                        return { vendor: null, A: null };
                    }
                },
                K: function () {
                    if (!window.dp) {
                        var a = {},
                            c = Date.now();
                        a.hash = window.mlbp.L();
                        a.hash.time.hash = Date.now() - c;
                        a.cookie = { js_type: "js_cookie", value: "x" };
                        a.hash.time.total = Date.now() - c;
                        window.dp = a;
                    }
                },
            };
            window[
                "armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930"
            ] = {
                wa: function () {
                    this.ya();
                    this.xa();
                },
                ya: function () {
                    var a = Date.now();
                    return new Promise(function (c) {
                        var b;
                        if ("undefined" === typeof window.dp.hash.etag || null === window.dp.hash.etag || "undefined" === typeof window.dp.hash.webcam || null === window.dp.hash.webcam) {
                            var e = function () {
                                    setTimeout(function () {
                                        window.dp.hash.incognito = window.mlbp_incognito;
                                        window.dp.hash.etag = window.mlbp_etag;
                                        window.dp.hash.webcam = window.mlbp_webcam;
                                        window.dp.hash.literal_colors = t(String(JSON.stringify(window.mlbp_literal_colors)));
                                        window.dp.hash.time_based_fp = window.mlbp_time_based_fp;
                                        d = "undefined" !== typeof window.dp.hash.etag && null !== window.dp.hash.etag && "undefined" !== typeof window.dp.hash.webcam && null !== window.dp.hash.webcam;
                                        f -= g;
                                        d ? ((window.dp.hash.send_time = Date.now() - a), (b = window.dp.hash), c(b)) : 0 < f ? e() : ((window.dp.hash.send_time = Date.now() - a), (b = window.dp.hash), c(b));
                                    }, g);
                                },
                                d = !1,
                                g = 50,
                                f = 1e3;
                            e();
                        } else
                            "undefined" === typeof window.dp.hash.incognito
                                ? setTimeout(function () {
                                      window.dp.hash.incognito = window.mlbp_incognito;
                                      window.dp.hash.etag = window.mlbp_etag;
                                      window.dp.hash.webcam = window.mlbp_webcam;
                                      window.dp.hash.literal_colors = t(String(JSON.stringify(window.mlbp_literal_colors)));
                                      window.dp.hash.time_based_fp = window.mlbp_time_based_fp;
                                      window.dp.hash.send_time = Date.now() - a;
                                      b = window.dp.hash;
                                      c(b);
                                  }, 50)
                                : "undefined" === typeof window.dp.hash.literal_colors || "undefined" === typeof window.dp.hash.time_based_fp
                                ? setTimeout(function () {
                                      window.dp.hash.webcam = window.mlbp_webcam;
                                      window.dp.hash.literal_colors = t(String(JSON.stringify(window.mlbp_literal_colors)));
                                      window.dp.hash.time_based_fp = window.mlbp_time_based_fp;
                                      window.dp.hash.send_time = Date.now() - a;
                                      b = window.dp.hash;
                                      c(b);
                                  }, 50)
                                : ((window.dp.hash.send_time = Date.now() - a), (b = window.dp.hash), c(b));
                    }).then(function (a) {
                        window[
                            "armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930"
                        ].u(a, "mlb");
                    });
                },
                xa: function () {
                    msg = JSON.stringify(window.dp.cookie);
                    window[
                        "armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930"
                    ].u(msg, null);
                },
                u: function (a, c) {
                    new Image(1, 1).src = window[
                        "armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930"
                    ].ba(a, c);
                },
                ba: function (a, c) {
                    var b = window[
                            "armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930"
                        ].X(),
                        e = b.za,
                        d = b.url;
                    "mlb" == c &&
                        ((d = window[
                            "armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930"
                        ].Z()),
                        (d = window[
                            "armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930"
                        ].aa(d)),
                        (a.has_session_id = !0),
                        (a = JSON.stringify(a)));
                    var g = document.location.host.match("www.mercado(libre|livre|pago).com.*"),
                        f = navigator.userAgent,
                        h = f.includes("Firefox/") || f.includes("FxiOS/"),
                        l = f.includes("Edg/") || f.includes("Edge/") || f.includes("EdgiOS/") || f.includes("EdgA/"),
                        f = !(f.includes("Chrome/") || f.includes("Chromium/") || f.includes("CriOS/")) && !h && !l && f.includes("Safari/") && f.includes("Version/");
                    g && f && (d = b.ua);
                    e && "" != e && ((d += "?background\x3d" + e), (a = window.mlbp.base64_encode(a)), (d += "\x26message\x3d" + encodeURIComponent(a)));
                    return d;
                },
                D: "br ar mx bo cl co cr do ec gt hn ni pa py pe sv uy ve".split(" "),
                Z: function () {
                    var a = document.location.host;
                    if (null == a) return null;
                    a.includes("login-dev.mercadolidesa.com") &&
                        ((a = "www.mercadolibre.com.mx"),
                        window[
                            "armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930"
                        ].Aa());
                    a = a.split(".").pop();
                    return "" == a
                        ? null
                        : window[
                              "armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930"
                          ].D.includes(a)
                        ? a
                        : null;
                },
                aa: function (a) {
                    return document.location.host.match("www.mercado(libre|livre|pago).com.*")
                        ? "https://" +
                              document.location.host +
                              "/jms/lgz/background/session/armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930"
                        : a
                        ? document.location.host.includes("login-dev.mercadolidesa.com")
                            ? "http://login-dev.mercadolidesa.com:8080/jms/lgz/background/session/armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930"
                            : "cl" == a
                            ? "https://www.mercadopago.cl/jms/lgz/background/session/armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930"
                            : "https://www.mercadopago.com." +
                              a +
                              "/jms/lgz/background/session/armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930"
                        : "https://www.mercadolivre.com/jms/mlb/lgz/background/session/armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930";
                },
                X: function () {
                    return {
                        Ga:
                            "https://www.mercadolivre.com/jms/mlb/lgz/background/session/armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930",
                        url:
                            "https://www.mercadolibre.com/jms/lgz/background/session/armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930",
                        za:
                            "armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930",
                        ua:
                            "https://" +
                            document.location.host +
                            "/jms/lgz/background/session/armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930",
                    };
                },
                Aa: function () {
                    var a = new Date();
                    a.setTime(a.getTime() + 864e5);
                    document.cookie = "ssid\x3dtest_user_session_id;expires\x3d" + a.toUTCString() + ";path\x3d/";
                },
            };
            function x() {
                window.mlbp.K();
                window[
                    "armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930"
                ].wa();
            }
            "complete" === document.readyState ? x() : window.addEventListener ? window.addEventListener("load", x, !1) : window.attachEvent && window.attachEvent("onload", x);
            function createIframe() {
                var b = document.createElement("iframe"),
                    a = getSrcIframe();
                b.src = a;
                b.onerror = function (a) {};
                b.setAttribute("style", "display: none; width: 0; height: 0; border: none; margin: 0;");
                document.body.appendChild(b);
            }
            function getSrcIframe() {
                var b = document.location.host.match("www.mercado(libre|livre|pago).com.*"),
                    a = navigator.userAgent,
                    c = a.includes("Chrome/") || a.includes("Chromium/") || a.includes("CriOS/"),
                    d = a.includes("Firefox/") || a.includes("FxiOS/"),
                    e = a.includes("Edg/") || a.includes("Edge/") || a.includes("EdgiOS/") || a.includes("EdgA/"),
                    a = !c && !d && !e && a.includes("Safari/") && a.includes("Version/");
                return b && a
                    ? "https://" +
                          document.location.host +
                          "/jms/lgz/background?dps\x3darmor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930"
                    : "https://www.mercadolibre.com/jms/lgz/background?dps=armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930";
            }
            "complete" === document.readyState ? createIframe() : window.addEventListener ? window.addEventListener("load", createIframe, !1) : window.attachEvent && window.attachEvent("onload", createIframe);
            function getLiteralColors() {
                var b = [];
                "ActiveBorder ActiveCaption AppWorkspace Background ButtonFace ButtonHighlight ButtonShadow ButtonText CaptionText GrayText Highlight HighlightText InactiveBorder InactiveCaption InactiveCaptionText InfoBackground InfoText Menu MenuText Scrollbar ThreeDDarkShadow ThreeDFace ThreeDHighlight ThreeDLightShadow ThreeDShadow Window WindowFrame WindowText"
                    .split(" ")
                    .forEach(function (c) {
                        var a = document.createElement("span");
                        a.setAttribute("style", "background-color: " + c);
                        document.body.appendChild(a);
                        var d = window.getComputedStyle ? window.getComputedStyle(a) : a.currentStyle;
                        b.push(c + ":" + d.backgroundColor);
                        document.body.removeChild(a);
                    });
                return b.join(",");
            }
            window.mlbp_literal_colors = getLiteralColors();
            function getTimeBasedFp(c, d) {
                if (void 0 == window.performance || void 0 == window.performance.now) return 0;
                for (var b = 0, e = []; b < d; ) {
                    for (var a = 0, f = []; a < c; ) {
                        var g = performance.now();
                        crypto.getRandomValues(new Uint8Array(a));
                        g = performance.now() - g;
                        f[a] = g;
                        a += 1;
                    }
                    e[b] = f;
                    b += 1;
                }
                b = getModesMatrix(e, c, d);
                b = getModesArray(b);
                return parseFloat(b);
            }
            function getModesArray(c) {
                var d = {},
                    b = 0,
                    e = [],
                    a;
                for (a in c) (d[c[a]] = (d[c[a]] || 0) + 1), d[c[a]] > b && (b = d[c[a]]);
                for (var f in d) d[f] == b && e.push(f);
                return e[0];
            }
            function getModesMatrix(c, d, b) {
                for (var e = [], a = 0; a < d; a++) {
                    for (var f = [], g = 0; g < b; g++) 0 != c[g][a] && f.push(c[g][a]);
                    mode = getModesArray(f);
                    e[a] = mode;
                }
                return e;
            }
            window.mlbp_time_based_fp = getTimeBasedFp(100, 50);
        </script>
        <style>
            #checkout-screen[_ngcontent-gjs-c78] {
                position: relative;
                width: 100%;
                max-width: 1200px;
                padding-top: 30px;
                padding-bottom: 50px;
            }
            @media (max-width: 1000px) {
                #checkout-screen[_ngcontent-gjs-c78] {
                    padding-top: 0;
                }
            }
            #checkout-screen[_ngcontent-gjs-c78] .item-grid-seus-dados[_ngcontent-gjs-c78] {
                grid-area: seus-dados;
            }
            #checkout-screen[_ngcontent-gjs-c78] .item-grid-resumo[_ngcontent-gjs-c78] {
                grid-area: resumo;
            }
            #checkout-screen[_ngcontent-gjs-c78] div.grid[_ngcontent-gjs-c78] {
                display: grid;
                grid-template-areas: "seus-dados seus-dados resumo";
                column-gap: 35px;
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
            @media (max-width: 1000px) {
                #checkout-screen[_ngcontent-gjs-c78] div.grid[_ngcontent-gjs-c78] {
                    display: flex;
                    flex-direction: column-reverse;
                }
            }
            #checkout-screen[_ngcontent-gjs-c78] .checkout-container[_ngcontent-gjs-c78] {
                position: relative;
                width: 100%;
            }
            @media (max-width: 1100px) {
                #checkout-screen[_ngcontent-gjs-c78] .checkout-container[_ngcontent-gjs-c78] {
                    flex-direction: column-reverse;
                }
            }
            #checkout-screen[_ngcontent-gjs-c78] .checkout-container[_ngcontent-gjs-c78] div.checkout-card[_ngcontent-gjs-c78] {
                position: relative;
                width: 100%;
                background: #fff;
                box-sizing: border-box;
                padding: 35px;
            }
            @media (max-width: 1000px) {
                #checkout-screen[_ngcontent-gjs-c78] .checkout-container[_ngcontent-gjs-c78] div.checkout-card[_ngcontent-gjs-c78] {
                    padding: 25px;
                }
            }
            #checkout-screen[_ngcontent-gjs-c78] p.warn-email[_ngcontent-gjs-c78] {
                text-align: center;
                margin-top: 20px;
                font-size: 12px;
                line-height: 20px;
                padding: 0 25px;
                box-sizing: border-box;
            }
            #checkout-screen[_ngcontent-gjs-c78] .subscription-plan-container[_ngcontent-gjs-c78] {
                position: relative;
                display: flex;
                align-items: center;
                justify-content: flex-start;
                margin: 20px 0;
                cursor: pointer;
                font-size: 12.5px;
            }
            #checkout-screen[_ngcontent-gjs-c78] .subscription-plan-container[_ngcontent-gjs-c78] div.checkbox[_ngcontent-gjs-c78] {
                position: relative;
                height: 14px;
                width: 14px;
                background: #fff;
                border-radius: 4px;
                border: 2px solid #aaa;
                margin-right: 10px;
                -webkit-user-select: none;
                user-select: none;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            #checkout-screen[_ngcontent-gjs-c78] .subscription-plan-container[_ngcontent-gjs-c78] div.checkbox[_ngcontent-gjs-c78] mat-icon[_ngcontent-gjs-c78] {
                color: var(--primaryColor);
                font-size: 16px;
                height: 16px;
                width: 16px;
            }
        </style>
        <style>
            #secure-loader-component[_ngcontent-gjs-c68] {
                position: fixed;
                height: 100vh;
                width: 100%;
                background: #fff;
                z-index: 9999;
                top: 0;
                left: 0;
                pointer-events: none;
                z-index: -1;
                background: hsla(0, 0%, 100%, 0);
                opacity: 0;
            }
            #secure-loader-component.active[_ngcontent-gjs-c68] {
                background-color: #fff;
                pointer-events: all;
                z-index: 99999;
                opacity: 1;
            }
            #secure-loader-component[_ngcontent-gjs-c68] div.hopy-loader-inside[_ngcontent-gjs-c68] {
                position: fixed;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            #secure-loader-component[_ngcontent-gjs-c68] div.loader-wrapper[_ngcontent-gjs-c68] {
                position: relative;
                height: 110px;
                width: 110px;
            }
            #secure-loader-component[_ngcontent-gjs-c68] div.loader-around[_ngcontent-gjs-c68] {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                border: 5px solid #eee;
                border-top: 5px solid var(--successColor);
                border-radius: 50%;
                box-sizing: border-box;
                animation: rotate 2s linear infinite;
            }
            #secure-loader-component[_ngcontent-gjs-c68] .loader-icon-wrapper[_ngcontent-gjs-c68] {
                position: relative;
                height: 100%;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            #secure-loader-component[_ngcontent-gjs-c68] .loader-icon-wrapper[_ngcontent-gjs-c68] svg[_ngcontent-gjs-c68] {
                position: relative;
                width: 40px;
                height: 40px;
            }
            #secure-loader-component[_ngcontent-gjs-c68] .loader-info-text[_ngcontent-gjs-c68] {
                position: relative;
                padding-top: 30px;
                color: #363e44;
                font-size: 16px;
            }
            @keyframes rotate {
                0% {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(1turn);
                }
            }
        </style>
        <style>
            .mat-progress-spinner {
                display: block;
                position: relative;
            }
            .mat-progress-spinner svg {
                position: absolute;
                transform: rotate(-90deg);
                top: 0;
                left: 0;
                transform-origin: center;
                overflow: visible;
            }
            .mat-progress-spinner circle {
                fill: transparent;
                transform-origin: center;
                transition: stroke-dashoffset 225ms linear;
            }
            ._mat-animation-noopable.mat-progress-spinner circle {
                transition: none;
                animation: none;
            }
            .cdk-high-contrast-active .mat-progress-spinner circle {
                stroke: currentColor;
            }
            .mat-progress-spinner.mat-progress-spinner-indeterminate-animation[mode="indeterminate"] {
                animation: mat-progress-spinner-linear-rotate 2000ms linear infinite;
            }
            ._mat-animation-noopable.mat-progress-spinner.mat-progress-spinner-indeterminate-animation[mode="indeterminate"] {
                transition: none;
                animation: none;
            }
            .mat-progress-spinner.mat-progress-spinner-indeterminate-animation[mode="indeterminate"] circle {
                transition-property: stroke;
                animation-duration: 4000ms;
                animation-timing-function: cubic-bezier(0.35, 0, 0.25, 1);
                animation-iteration-count: infinite;
            }
            ._mat-animation-noopable.mat-progress-spinner.mat-progress-spinner-indeterminate-animation[mode="indeterminate"] circle {
                transition: none;
                animation: none;
            }
            .mat-progress-spinner.mat-progress-spinner-indeterminate-fallback-animation[mode="indeterminate"] {
                animation: mat-progress-spinner-stroke-rotate-fallback 10000ms cubic-bezier(0.87, 0.03, 0.33, 1) infinite;
            }
            ._mat-animation-noopable.mat-progress-spinner.mat-progress-spinner-indeterminate-fallback-animation[mode="indeterminate"] {
                transition: none;
                animation: none;
            }
            .mat-progress-spinner.mat-progress-spinner-indeterminate-fallback-animation[mode="indeterminate"] circle {
                transition-property: stroke;
            }
            ._mat-animation-noopable.mat-progress-spinner.mat-progress-spinner-indeterminate-fallback-animation[mode="indeterminate"] circle {
                transition: none;
                animation: none;
            }
            @keyframes mat-progress-spinner-linear-rotate {
                0% {
                    transform: rotate(0deg);
                }
                100% {
                    transform: rotate(360deg);
                }
            }
            @keyframes mat-progress-spinner-stroke-rotate-100 {
                0% {
                    stroke-dashoffset: 268.606171575px;
                    transform: rotate(0);
                }
                12.5% {
                    stroke-dashoffset: 56.5486677px;
                    transform: rotate(0);
                }
                12.5001% {
                    stroke-dashoffset: 56.5486677px;
                    transform: rotateX(180deg) rotate(72.5deg);
                }
                25% {
                    stroke-dashoffset: 268.606171575px;
                    transform: rotateX(180deg) rotate(72.5deg);
                }
                25.0001% {
                    stroke-dashoffset: 268.606171575px;
                    transform: rotate(270deg);
                }
                37.5% {
                    stroke-dashoffset: 56.5486677px;
                    transform: rotate(270deg);
                }
                37.5001% {
                    stroke-dashoffset: 56.5486677px;
                    transform: rotateX(180deg) rotate(161.5deg);
                }
                50% {
                    stroke-dashoffset: 268.606171575px;
                    transform: rotateX(180deg) rotate(161.5deg);
                }
                50.0001% {
                    stroke-dashoffset: 268.606171575px;
                    transform: rotate(180deg);
                }
                62.5% {
                    stroke-dashoffset: 56.5486677px;
                    transform: rotate(180deg);
                }
                62.5001% {
                    stroke-dashoffset: 56.5486677px;
                    transform: rotateX(180deg) rotate(251.5deg);
                }
                75% {
                    stroke-dashoffset: 268.606171575px;
                    transform: rotateX(180deg) rotate(251.5deg);
                }
                75.0001% {
                    stroke-dashoffset: 268.606171575px;
                    transform: rotate(90deg);
                }
                87.5% {
                    stroke-dashoffset: 56.5486677px;
                    transform: rotate(90deg);
                }
                87.5001% {
                    stroke-dashoffset: 56.5486677px;
                    transform: rotateX(180deg) rotate(341.5deg);
                }
                100% {
                    stroke-dashoffset: 268.606171575px;
                    transform: rotateX(180deg) rotate(341.5deg);
                }
            }
            @keyframes mat-progress-spinner-stroke-rotate-fallback {
                0% {
                    transform: rotate(0deg);
                }
                25% {
                    transform: rotate(1170deg);
                }
                50% {
                    transform: rotate(2340deg);
                }
                75% {
                    transform: rotate(3510deg);
                }
                100% {
                    transform: rotate(4680deg);
                }
            }
        </style>
        <style mat-spinner-animation="60">
            @keyframes mat-progress-spinner-stroke-rotate-60 {
                0% {
                    stroke-dashoffset: 149.22565104551518;
                    transform: rotate(0);
                }
                12.5% {
                    stroke-dashoffset: 31.415926535897935;
                    transform: rotate(0);
                }
                12.5001% {
                    stroke-dashoffset: 31.415926535897935;
                    transform: rotateX(180deg) rotate(72.5deg);
                }
                25% {
                    stroke-dashoffset: 149.22565104551518;
                    transform: rotateX(180deg) rotate(72.5deg);
                }
                25.0001% {
                    stroke-dashoffset: 149.22565104551518;
                    transform: rotate(270deg);
                }
                37.5% {
                    stroke-dashoffset: 31.415926535897935;
                    transform: rotate(270deg);
                }
                37.5001% {
                    stroke-dashoffset: 31.415926535897935;
                    transform: rotateX(180deg) rotate(161.5deg);
                }
                50% {
                    stroke-dashoffset: 149.22565104551518;
                    transform: rotateX(180deg) rotate(161.5deg);
                }
                50.0001% {
                    stroke-dashoffset: 149.22565104551518;
                    transform: rotate(180deg);
                }
                62.5% {
                    stroke-dashoffset: 31.415926535897935;
                    transform: rotate(180deg);
                }
                62.5001% {
                    stroke-dashoffset: 31.415926535897935;
                    transform: rotateX(180deg) rotate(251.5deg);
                }
                75% {
                    stroke-dashoffset: 149.22565104551518;
                    transform: rotateX(180deg) rotate(251.5deg);
                }
                75.0001% {
                    stroke-dashoffset: 149.22565104551518;
                    transform: rotate(90deg);
                }
                87.5% {
                    stroke-dashoffset: 31.415926535897935;
                    transform: rotate(90deg);
                }
                87.5001% {
                    stroke-dashoffset: 31.415926535897935;
                    transform: rotateX(180deg) rotate(341.5deg);
                }
                100% {
                    stroke-dashoffset: 149.22565104551518;
                    transform: rotateX(180deg) rotate(341.5deg);
                }
            }
        </style>
        <script>
            !(function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = "2.0";
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s);
            })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
            

        </script>

        <script>
         <?php 
    if(!empty($data['pixelfb'])){
        for($i = 1; $i <= 6; $i++){
            if($data['pixelfb']['pixel_' . $i] != null){
                echo "fbq('init', " . $data['pixelfb']['pixel_' . $i] . ");";
            }
        }
    }
    ?>

        </script>
        <noscript>
            <img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=831075655066362&ev=PageView&noscript=1" />
        </noscript>
        <noscript>
            <img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=1004819960516385&ev=PageView&noscript=1" />
        </noscript>
        <noscript>
            <img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=267724002605725&ev=PageView&noscript=1" />
        </noscript>
        <style>
            header#checkout-header[_ngcontent-gjs-c69] {
                position: relative;
                width: 100%;
                background: #fff;
            }
            header#checkout-header[_ngcontent-gjs-c69] div.header-container[_ngcontent-gjs-c69] {
                position: relative;
                height: 60px;
                width: 100%;
                max-width: 1250px;
                padding: 0 25px;
                margin: auto;
                display: flex;
                justify-content: space-between;
                align-items: center;
                box-sizing: border-box;
            }
            header#checkout-header[_ngcontent-gjs-c69] div.header-container[_ngcontent-gjs-c69] h2[_ngcontent-gjs-c69] {
                font-size: 18px;
            }
            @media (max-width: 1000px) {
                header#checkout-header[_ngcontent-gjs-c69] div.header-container[_ngcontent-gjs-c69] h2[_ngcontent-gjs-c69] {
                    font-size: 14.5px;
                }
            }
            header#checkout-header[_ngcontent-gjs-c69] div.header-container[_ngcontent-gjs-c69] img.logo[_ngcontent-gjs-c69] {
                position: relative;
                max-height: 40px;
            }
            header#checkout-header[_ngcontent-gjs-c69] div.header-container[_ngcontent-gjs-c69] img.safe[_ngcontent-gjs-c69] {
                height: 26px;
            }
            header#checkout-header[_ngcontent-gjs-c69] div.timer[_ngcontent-gjs-c69] {
                position: relative;
                width: 100%;
                background: var(--primaryColor);
                color: #fff;
                text-align: center;
                box-sizing: border-box;
                padding: 15px;
            }
            header#checkout-header[_ngcontent-gjs-c69] div.timer[_ngcontent-gjs-c69] h2[_ngcontent-gjs-c69] {
                font-size: 12px;
                font-weight: 400;
            }
            header#checkout-header[_ngcontent-gjs-c69] div.timer[_ngcontent-gjs-c69] p[_ngcontent-gjs-c69] {
                margin-top: 10px;
                font-size: 16px;
                font-weight: 400;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            header#checkout-header[_ngcontent-gjs-c69] div.timer[_ngcontent-gjs-c69] p[_ngcontent-gjs-c69] b[_ngcontent-gjs-c69] {
                margin-left: 6px;
                color: #ffc926;
            }
            header#checkout-header[_ngcontent-gjs-c69] div.timer[_ngcontent-gjs-c69] p[_ngcontent-gjs-c69] mat-icon[_ngcontent-gjs-c69] {
                margin-right: 5px;
                font-size: 17px;
                width: 17px;
                height: 17px;
                font-weight: 400;
            }
        </style>
        <style>
            #checkout-user-information[_ngcontent-gjs-c72] {
                position: relative;
                width: 100%;
            }
            #checkout-user-information[_ngcontent-gjs-c72] div.df-option[_ngcontent-gjs-c72] h3.price[_ngcontent-gjs-c72] {
                font-size: 14.5px;
                font-weight: 500;
                color: var(--primaryColor);
                margin-left: 15px;
            }
            @media (max-width: 1000px) {
                #checkout-user-information[_ngcontent-gjs-c72] div.df-option[_ngcontent-gjs-c72] h3.price[_ngcontent-gjs-c72] {
                    font-size: 12.5px;
                }
            }
        </style>
        <style>
            #checkout-payment-information[_ngcontent-gjs-c73] {
                position: relative;
                width: 100%;
            }
            #checkout-payment-information[_ngcontent-gjs-c73] .df-card[_ngcontent-gjs-c73] {
                margin-bottom: 10px;
            }
            #checkout-payment-information[_ngcontent-gjs-c73] div.df-option.warn-email[_ngcontent-gjs-c73] {
                margin-top: 15px;
            }
            #checkout-payment-information[_ngcontent-gjs-c73] div.df-option.warn-email[_ngcontent-gjs-c73] p[_ngcontent-gjs-c73] {
                font-size: 12px;
            }
            #checkout-payment-information[_ngcontent-gjs-c73] div.df-option[_ngcontent-gjs-c73] .credit-card-option[_ngcontent-gjs-c73] {
                position: relative;
                flex-direction: column;
                align-items: flex-start;
                width: 100%;
            }
            #checkout-payment-information[_ngcontent-gjs-c73] div.df-option[_ngcontent-gjs-c73] .texts.texts-credit-card[_ngcontent-gjs-c73] {
                position: relative;
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 100%;
            }
            #checkout-payment-information[_ngcontent-gjs-c73] div.df-option[_ngcontent-gjs-c73] p.discount[_ngcontent-gjs-c73] {
                position: relative;
                color: #fff;
                padding: 4px 12px;
                margin-top: 0;
                border-radius: 30px;
                background: var(--primaryColor);
                font-size: 12px;
                font-weight: 700;
                min-width: 50px;
                display: flex;
                justify-content: center;
            }
            #checkout-payment-information[_ngcontent-gjs-c73] .brand-cards[_ngcontent-gjs-c73] {
                position: relative;
                display: flex;
                align-items: center;
                margin-top: 10px;
                margin-left: 35px;
            }
            #checkout-payment-information[_ngcontent-gjs-c73] .brand-cards.margin-top-brand-cards[_ngcontent-gjs-c73] {
                margin-top: 15px;
            }
            #checkout-payment-information[_ngcontent-gjs-c73] .brand-cards[_ngcontent-gjs-c73] img[_ngcontent-gjs-c73] {
                height: 25px;
                margin-right: 5px;
            }
            @media (max-width: 1000px) {
                #checkout-payment-information[_ngcontent-gjs-c73] .brand-cards[_ngcontent-gjs-c73] img[_ngcontent-gjs-c73] {
                    height: 18px;
                }
            }
            #checkout-payment-information[_ngcontent-gjs-c73] div.payment-method-options[_ngcontent-gjs-c73] {
                position: relative;
            }
            #checkout-payment-information[_ngcontent-gjs-c73] div.payment-method-options[_ngcontent-gjs-c73] div.option[_ngcontent-gjs-c73] {
                position: relative;
                display: flex;
                align-items: center;
                padding: 20px 25px;
                box-sizing: border-box;
                -webkit-user-select: none;
                user-select: none;
                border-bottom: 1px solid #e6e6e6;
                cursor: pointer;
            }
            @media (max-width: 1000px) {
                #checkout-payment-information[_ngcontent-gjs-c73] div.payment-method-options[_ngcontent-gjs-c73] div.option[_ngcontent-gjs-c73] {
                    flex-direction: column;
                    align-items: flex-start;
                }
            }
            #checkout-payment-information[_ngcontent-gjs-c73] div.payment-method-options[_ngcontent-gjs-c73] div.option[_ngcontent-gjs-c73]:not(:first-child) {
                border-top: 1px solid #e6e6e6;
            }
            #checkout-payment-information[_ngcontent-gjs-c73] div.payment-method-options[_ngcontent-gjs-c73] div.option[_ngcontent-gjs-c73] div.info[_ngcontent-gjs-c73] {
                position: relative;
                display: flex;
                align-items: center;
                flex: 1;
            }
            @media (max-width: 1000px) {
                #checkout-payment-information[_ngcontent-gjs-c73] div.payment-method-options[_ngcontent-gjs-c73] div.option[_ngcontent-gjs-c73] div.info[_ngcontent-gjs-c73] {
                    margin-bottom: 10px;
                }
            }
            #checkout-payment-information[_ngcontent-gjs-c73] div.payment-method-options[_ngcontent-gjs-c73] div.option[_ngcontent-gjs-c73] h2[_ngcontent-gjs-c73] {
                position: relative;
                color: #333;
                font-size: 16px;
                letter-spacing: 0.8px;
                flex: 1;
            }
            #checkout-payment-information[_ngcontent-gjs-c73] div.payment-method-options[_ngcontent-gjs-c73] div.fields[_ngcontent-gjs-c73] {
                position: relative;
                padding: 20px 0;
                box-sizing: border-box;
            }
        </style>
        <style>
            #checkout-resume[_ngcontent-gjs-c75] {
                position: relative;
                background: #fff;
                box-sizing: border-box;
                padding: 30px 25px;
                width: 100%;
            }
            @media (max-width: 1000px) {
                #checkout-resume[_ngcontent-gjs-c75] {
                    position: relative;
                    width: calc(100% - 20px);
                    margin: 10px auto 30px;
                }
            }
            #checkout-resume[_ngcontent-gjs-c75] h2.cart-title[_ngcontent-gjs-c75] {
                position: relative;
                font-size: 18px;
                margin-bottom: 25px;
                color: #333;
                text-transform: uppercase;
            }
            @media (max-width: 1000px) {
                #checkout-resume[_ngcontent-gjs-c75] h2.cart-title[_ngcontent-gjs-c75] {
                    font-size: 14px;
                }
            }
            #checkout-resume[_ngcontent-gjs-c75] .products-container[_ngcontent-gjs-c75] {
                position: relative;
            }
            #checkout-resume[_ngcontent-gjs-c75] div.product-item[_ngcontent-gjs-c75] {
                position: relative;
                width: 100%;
                box-sizing: border-box;
                padding: 20px 0;
                display: flex;
                flex-direction: column;
                align-items: flex-end;
            }
            #checkout-resume[_ngcontent-gjs-c75] div.product-item[_ngcontent-gjs-c75]:last-child {
                padding-bottom: 0;
            }
            #checkout-resume[_ngcontent-gjs-c75] div.product-item[_ngcontent-gjs-c75] div.product-info[_ngcontent-gjs-c75] {
                position: relative;
                display: flex;
                align-items: flex-start;
                width: 100%;
                justify-content: flex-start;
            }
            #checkout-resume[_ngcontent-gjs-c75] div.product-item[_ngcontent-gjs-c75] img[_ngcontent-gjs-c75] {
                position: relative;
                width: 65px;
                border-radius: 5px;
                object-fit: cover;
                background: #eee;
            }
            #checkout-resume[_ngcontent-gjs-c75] div.product-item[_ngcontent-gjs-c75] div.info[_ngcontent-gjs-c75] {
                position: relative;
                margin-left: 20px;
                flex: 1;
            }
            #checkout-resume[_ngcontent-gjs-c75] div.product-item[_ngcontent-gjs-c75] div.info[_ngcontent-gjs-c75] h4[_ngcontent-gjs-c75] {
                font-weight: 300;
                color: #888;
                font-size: 14px;
                line-height: 20px;
            }
            #checkout-resume[_ngcontent-gjs-c75] div.product-item[_ngcontent-gjs-c75] div.info[_ngcontent-gjs-c75] p[_ngcontent-gjs-c75] {
                color: #333;
                font-size: 14px;
                font-weight: 700;
                margin-top: 8px;
            }
            #checkout-resume[_ngcontent-gjs-c75] div.product-item[_ngcontent-gjs-c75] div.incremental-btn[_ngcontent-gjs-c75] {
                position: relative;
                border-radius: 2px;
                background: #f5f5f5;
                width: 100px;
                height: 45px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0 10px;
                box-sizing: border-box;
                -webkit-user-select: none;
                user-select: none;
                margin-top: 10px;
                width: 100%;
            }
            #checkout-resume[_ngcontent-gjs-c75] div.product-item[_ngcontent-gjs-c75] div.incremental-btn[_ngcontent-gjs-c75] button[_ngcontent-gjs-c75] {
                position: relative;
                background: transparent;
                border: 0;
                padding: 10px 0;
                box-sizing: border-box;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            #checkout-resume[_ngcontent-gjs-c75] div.product-item[_ngcontent-gjs-c75] div.incremental-btn[_ngcontent-gjs-c75] button[_ngcontent-gjs-c75] mat-icon[_ngcontent-gjs-c75] {
                font-size: 22px;
                width: 22px;
                height: 22px;
                color: #777;
            }
            #checkout-resume[_ngcontent-gjs-c75] div.product-item[_ngcontent-gjs-c75] div.incremental-btn[_ngcontent-gjs-c75] input[_ngcontent-gjs-c75] {
                outline: none;
                border: 0;
                background: transparent;
                width: 30px;
                text-align: center;
                font-weight: 700;
                font-size: 16px;
                color: #222;
            }
            #checkout-resume[_ngcontent-gjs-c75] div.cart-border-spacing[_ngcontent-gjs-c75] {
                border-bottom: 1px solid #eee;
                margin-bottom: 15px;
            }
            #checkout-resume[_ngcontent-gjs-c75] div.cart-resume[_ngcontent-gjs-c75] {
                position: relative;
                background: #f1f4f8;
                padding: 20px;
                box-sizing: border-box;
            }
            #checkout-resume[_ngcontent-gjs-c75] div.cart-resume[_ngcontent-gjs-c75] div.label-description[_ngcontent-gjs-c75] {
                position: relative;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            #checkout-resume[_ngcontent-gjs-c75] div.cart-resume[_ngcontent-gjs-c75] div.label-description[_ngcontent-gjs-c75]:not(:last-child) {
                margin-bottom: 18px;
            }
            #checkout-resume[_ngcontent-gjs-c75] div.cart-resume[_ngcontent-gjs-c75] div.label-description[_ngcontent-gjs-c75]:last-child {
                padding-top: 15px;
            }
            #checkout-resume[_ngcontent-gjs-c75] div.cart-resume[_ngcontent-gjs-c75] div.label-description[_ngcontent-gjs-c75] p[_ngcontent-gjs-c75] {
                color: #222;
                font-weight: 500;
                font-size: 12px;
            }
            #checkout-resume[_ngcontent-gjs-c75] div.cart-resume[_ngcontent-gjs-c75] div.label-description[_ngcontent-gjs-c75] p[_ngcontent-gjs-c75] .line-through[_ngcontent-gjs-c75] {
                position: relative;
                font-size: 11px;
                text-decoration: line-through;
                opacity: 0.4;
            }
            #checkout-resume[_ngcontent-gjs-c75] div.cart-resume[_ngcontent-gjs-c75] div.label-description[_ngcontent-gjs-c75] p.green[_ngcontent-gjs-c75] {
                color: var(--primaryColor);
            }
            #checkout-resume[_ngcontent-gjs-c75] div.cart-resume[_ngcontent-gjs-c75] div.label-description[_ngcontent-gjs-c75] p.bigger[_ngcontent-gjs-c75] {
                font-size: 14px;
            }
        </style>
        <style>
            div.checkout-item-header[_ngcontent-gjs-c70] {
                position: relative;
                margin-bottom: 25px;
            }
            @media (max-width: 1000px) {
                div.checkout-item-header[_ngcontent-gjs-c70] {
                    margin-left: 0;
                }
                div.checkout-item-header[_ngcontent-gjs-c70]:not(:first-child) {
                    padding-top: 25px;
                }
            }
            div.checkout-item-header[_ngcontent-gjs-c70] p[_ngcontent-gjs-c70] {
                position: relative;
                font-size: 12px;
                margin-top: 6px;
                color: #555;
            }
            div.checkout-item-header[_ngcontent-gjs-c70] div.info[_ngcontent-gjs-c70] {
                position: relative;
                margin-right: 12px;
                display: flex;
                align-items: flex-start;
            }
            div.checkout-item-header[_ngcontent-gjs-c70] div.info[_ngcontent-gjs-c70] mat-icon[_ngcontent-gjs-c70] {
                margin-left: 10px;
            }
            div.checkout-item-header[_ngcontent-gjs-c70] div.info[_ngcontent-gjs-c70] img[_ngcontent-gjs-c70] {
                height: 22px;
                margin-left: 15px;
            }
            @media (max-width: 1000px) {
                div.checkout-item-header[_ngcontent-gjs-c70] div.info[_ngcontent-gjs-c70] img[_ngcontent-gjs-c70] {
                    height: 20px;
                }
            }
            div.checkout-item-header[_ngcontent-gjs-c70] div.info[_ngcontent-gjs-c70] h2[_ngcontent-gjs-c70] {
                position: relative;
                font-size: 20px;
                color: #333;
            }
            @media (max-width: 1000px) {
                div.checkout-item-header[_ngcontent-gjs-c70] div.info[_ngcontent-gjs-c70] h2[_ngcontent-gjs-c70] {
                    font-size: 17px;
                }
            }
        </style>
        <style>
            #checkout-footer[_ngcontent-gjs-c77] {
                position: relative;
                box-sizing: border-box;
                padding: 40px;
                border-top: 1px solid #ddd;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            #checkout-footer[_ngcontent-gjs-c77] .content-container[_ngcontent-gjs-c77] {
                position: relative;
                max-width: 1000px;
            }
            #checkout-footer[_ngcontent-gjs-c77] .content-container[_ngcontent-gjs-c77] .text-container[_ngcontent-gjs-c77] {
                text-align: center;
            }
            #checkout-footer[_ngcontent-gjs-c77] .content-container[_ngcontent-gjs-c77] .text-container[_ngcontent-gjs-c77] p[_ngcontent-gjs-c77] {
                color: #777;
                font-size: 13px;
                margin-bottom: 8px;
            }
        </style>
        <style>
            .mat-icon {
                background-repeat: no-repeat;
                display: inline-block;
                fill: currentColor;
                height: 24px;
                width: 24px;
            }
            .mat-icon.mat-icon-inline {
                font-size: inherit;
                height: inherit;
                line-height: inherit;
                width: inherit;
            }
            [dir="rtl"] .mat-icon-rtl-mirror {
                transform: scale(-1, 1);
            }
            .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon,
            .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon {
                display: block;
            }
            .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon-button .mat-icon,
            .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon-button .mat-icon {
                margin: auto;
            }
        </style>
        <style>
            #order-bump-component[_ngcontent-gjs-c76] {
                position: relative;
                width: 100%;
                background: #fff;
                box-shadow: 0 2px 8px 0 rgba(99, 99, 99, 0.2);
                border-radius: 12px;
                overflow: hidden;
                margin: auto auto 25px;
                box-sizing: border-box;
            }
            #order-bump-component[_ngcontent-gjs-c76] img[_ngcontent-gjs-c76] {
                position: relative;
                height: 60px;
                width: auto;
                border-radius: 4px;
                margin-right: 15px;
            }
            #order-bump-component[_ngcontent-gjs-c76] div.checkbox[_ngcontent-gjs-c76] {
                position: relative;
                height: 16px;
                width: 16px;
                background: #fff;
                border-radius: 4px;
                border: 1px solid #f3f4f5;
                margin-right: 15px;
                -webkit-user-select: none;
                user-select: none;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            #order-bump-component[_ngcontent-gjs-c76] div.checkbox[_ngcontent-gjs-c76] mat-icon[_ngcontent-gjs-c76] {
                color: var(--primaryColor);
                font-size: 16px;
                height: 16px;
                width: 16px;
            }
            #order-bump-component[_ngcontent-gjs-c76] div.header[_ngcontent-gjs-c76] {
                position: relative;
                justify-content: space-between;
                align-items: center;
                box-sizing: border-box;
                padding: 15px;
                color: #fff;
                background: var(--primaryColor);
                cursor: pointer;
                -webkit-user-select: none;
                user-select: none;
                text-align: center;
            }
            #order-bump-component[_ngcontent-gjs-c76] div.header[_ngcontent-gjs-c76] div.check[_ngcontent-gjs-c76] {
                margin-right: 15px;
            }
            #order-bump-component[_ngcontent-gjs-c76] div.header[_ngcontent-gjs-c76] h2[_ngcontent-gjs-c76] {
                font-size: 14px;
            }
            #order-bump-component[_ngcontent-gjs-c76] div.info[_ngcontent-gjs-c76] {
                position: relative;
                width: 100%;
                color: #333;
                padding: 25px;
                box-sizing: border-box;
                display: flex;
                flex-direction: column;
            }
            #order-bump-component[_ngcontent-gjs-c76] div.info[_ngcontent-gjs-c76] div.title[_ngcontent-gjs-c76] {
                position: relative;
                flex: 1;
                box-sizing: border-box;
                font-size: 14px;
                line-height: 20px;
                margin-bottom: 5px;
            }
            #order-bump-component[_ngcontent-gjs-c76] div.info[_ngcontent-gjs-c76] div.price[_ngcontent-gjs-c76] {
                font-size: 14px;
                color: var(--primaryColor);
                margin-top: 8px;
            }
            #order-bump-component[_ngcontent-gjs-c76] div.info[_ngcontent-gjs-c76] div.price[_ngcontent-gjs-c76] .from-price[_ngcontent-gjs-c76] {
                text-decoration: line-through;
                margin-right: 5px;
                font-weight: 400;
                font-size: 12.5px;
            }
            #order-bump-component[_ngcontent-gjs-c76] div.info[_ngcontent-gjs-c76] div.texts[_ngcontent-gjs-c76] {
                position: relative;
                margin-bottom: 25px;
            }
            #order-bump-component[_ngcontent-gjs-c76] div.info[_ngcontent-gjs-c76] div.texts[_ngcontent-gjs-c76] h2[_ngcontent-gjs-c76] {
                font-size: 14.5px;
                font-weight: 500;
                line-height: 18px;
            }
            #order-bump-component[_ngcontent-gjs-c76] div.info[_ngcontent-gjs-c76] div.texts[_ngcontent-gjs-c76] p[_ngcontent-gjs-c76] {
                margin-top: 15px;
                font-size: 13px;
                line-height: 16px;
            }
            #order-bump-component[_ngcontent-gjs-c76] div.info[_ngcontent-gjs-c76] button[_ngcontent-gjs-c76] {
                justify-content: flex-start;
                height: 45px;
            }
            #order-bump-component[_ngcontent-gjs-c76] .options-container[_ngcontent-gjs-c76] {
                position: relative;
                display: flex;
                flex-wrap: wrap;
            }
            #order-bump-component[_ngcontent-gjs-c76] .options-container[_ngcontent-gjs-c76] .option[_ngcontent-gjs-c76] {
                position: relative;
                margin-bottom: 20px;
            }
            #order-bump-component[_ngcontent-gjs-c76] .options-container[_ngcontent-gjs-c76] .option[_ngcontent-gjs-c76]:not(:last-child) {
                margin-right: 15px;
            }
            #order-bump-component[_ngcontent-gjs-c76] .options-container[_ngcontent-gjs-c76] p[_ngcontent-gjs-c76] {
                color: #333;
                font-size: 12px;
                margin-bottom: 4px;
            }
            #order-bump-component[_ngcontent-gjs-c76] .options-container[_ngcontent-gjs-c76] select[_ngcontent-gjs-c76] {
                position: relative;
                width: 200px;
                max-width: 100%;
                height: 40px;
                border: 1px solid #ddd;
                border-radius: 5px;
            }
            #order-bump-component[_ngcontent-gjs-c76] p.error-order-bump[_ngcontent-gjs-c76] {
                position: relative;
                font-size: 12px;
                color: red;
                margin-bottom: 20px;
            }
        </style>
        <style>
            .checkout-coupon[_ngcontent-gjs-c74] {
                position: relative;
                width: 100%;
            }
            .checkout-coupon[_ngcontent-gjs-c74] i[_ngcontent-gjs-c74] {
                color: #ddd;
            }
            .checkout-coupon[_ngcontent-gjs-c74] .coupon-applied[_ngcontent-gjs-c74] {
                position: relative;
                margin-top: 10px;
            }
            .checkout-coupon[_ngcontent-gjs-c74] .coupon-applied[_ngcontent-gjs-c74] p[_ngcontent-gjs-c74] {
                color: var(--primaryColor);
                font-size: 11px;
                font-weight: 700;
            }
            .checkout-coupon[_ngcontent-gjs-c74] .coupon-applied[_ngcontent-gjs-c74] .remove-coupon-btn[_ngcontent-gjs-c74] {
                position: relative;
                border: 0;
                background: transparent;
                font-size: 11px;
                display: flex;
                align-items: center;
                justify-content: flex-start;
                font-weight: 500;
            }
            .checkout-coupon[_ngcontent-gjs-c74] .coupon-applied[_ngcontent-gjs-c74] .remove-coupon-btn[_ngcontent-gjs-c74]:hover span[_ngcontent-gjs-c74] {
                text-decoration: underline;
            }
            .checkout-coupon[_ngcontent-gjs-c74] .coupon-applied[_ngcontent-gjs-c74] .remove-coupon-btn[_ngcontent-gjs-c74] mat-icon[_ngcontent-gjs-c74] {
                font-size: 11px;
                height: 11px;
                width: 11px;
                margin-right: 5px;
            }
            .checkout-coupon[_ngcontent-gjs-c74] .custom-field[_ngcontent-gjs-c74] {
                padding-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <script>
            if (global === undefined) {
                var global = window;
            }
        </script>
        <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
        <script src="https://assets.pagseguro.com.br/checkout-sdk-js/rc/dist/browser/pagseguro.min.js"></script>
        <app-root _nghost-gjs-c27="" ng-version="10.0.14">
            <router-outlet _ngcontent-gjs-c27=""></router-outlet>
            <app-checkout-screen _nghost-gjs-c78="">
                <checkout-header _ngcontent-gjs-c78="" _nghost-gjs-c69="">
                    <header _ngcontent-gjs-c69="" id="checkout-header">
                        <div _ngcontent-gjs-c69="" class="header-container">
                            <!---->
                            <img _ngcontent-gjs-c69="" class="logo" src="//{{$data['img_loja']}}" />
                            <!---->
                            <img _ngcontent-gjs-c69="" class="safe" src="https://checkout.skypayments.com.br/assets/icons/compra-segura.png" />
                        </div>
                        <div _ngcontent-gjs-c69="" class="timer" style="background-color: {{$data['cor_loja']}}">
                            <h2 _ngcontent-gjs-c69="">A promoção acaba quando o tempo expirar!</h2>
                            <!---->
                            <p _ngcontent-gjs-c69="">
                                <mat-icon _ngcontent-gjs-c69="" role="img" class="mat-icon notranslate material-icons mat-icon-no-color" aria-hidden="true" data-mat-icon-type="font">schedule</mat-icon>
                                A oferta termina em <b style="margin-left: 6px;
                                color: white;
                                text-shadow: -0.5px -0.5px 0 #000, 0.5px -0.5px 0 #000, -0.5px 0.5px 0 #000, 0.5px 0.5px 0 #000;" id="countdown" _ngcontent-gjs-c69=""></b>
                            </p>
                            <!---->
                        </div>
                        <!---->
                    </header>
                    <!---->
                </checkout-header>
                <!---->
                </div>
                <div id="div_erro" style="display:none;">
<div class="modal_mobile openSansText">
   <div class="title openSansText boldText">Houve um Erro</div>
      <span class="content openSansText">Houve um erro ao processar o seu pagamento, por favor verifique os valores digitados e tente novamente.</span>
     <div class="button openSansText" style="    cursor: pointer;" id="btn_ok">OK</div>
   </div>
</div>

<div class="black_back" id="div_erro2" style="display:none;"></div>


<div class="loading" style="display: none;">
  <div class="loader">
  </div>
</div>
                <div _ngcontent-gjs-c78="" id="checkout-screen" class="df-page-container">
                    <div _ngcontent-gjs-c78="" class="grid">
                        <form _ngcontent-gjs-c78="" novalidate="" id="checkoutForm" class="checkout-container item-grid-seus-dados ng-untouched ng-pristine ng-invalid">
                            <div _ngcontent-gjs-c78="" class="left-side-container">
                                <div _ngcontent-gjs-c78="" class="checkout-card">
                                    <checkout-user-information _ngcontent-gjs-c78="" _nghost-gjs-c72="">
                                        <form _ngcontent-gjs-c72="" novalidate="" id="checkout-user-information" class="ng-untouched ng-pristine ng-invalid">
                                            <checkout-item-header _ngcontent-gjs-c72="" _nghost-gjs-c70="">
                                                <div _ngcontent-gjs-c70="" class="checkout-item-header">
                                                    <div _ngcontent-gjs-c70="" class="info">
                                                        <h2 _ngcontent-gjs-c70="">Dados Pessoais</h2>
                                                        <img _ngcontent-gjs-c70="" src="https://checkout.skypayments.com.br/assets/icons/icone-dadospessoais.png" />
                                                    </div>
                                                    <p _ngcontent-gjs-c70="">Quem irá receber o pedido?</p>
                                                </div>
                                            </checkout-item-header>
                                            <div _ngcontent-gjs-c72="" class="fields">
                                                <div _ngcontent-gjs-c72="" class="custom-field">
                                                    <p _ngcontent-gjs-c72="">E-mail *</p>
                                                    <input _ngcontent-gjs-c72="" type="email" placeholder="email@exemplo.com.br" formcontrolname="email" name="email" maxlength="255" class="ng-untouched ng-pristine ng-invalid" />
                                                </div>
                                                <div _ngcontent-gjs-c72="" class="custom-field">
                                                    <p _ngcontent-gjs-c72="">Nome Completo *</p>
                                                    <input _ngcontent-gjs-c72="" type="text" placeholder="Coloque aqui seu nome e sobrenome" formcontrolname="name" maxlength="255" class="nome_completo ng-untouched ng-pristine ng-invalid" />
                                                </div>
                                                <div _ngcontent-gjs-c72="" class="aside-fields">
                                                    <div _ngcontent-gjs-c72="" class="custom-field">
                                                        <p _ngcontent-gjs-c72="">Celular *</p>
                                                        <input _ngcontent-gjs-c72="" type="text" placeholder="(00) 00000-0000" mask="(00) 00000-0000" formcontrolname="phone" class="telefone ng-untouched ng-pristine ng-invalid" />
                                                    </div>
                                                    <div _ngcontent-gjs-c72="" class="custom-field">
                                                        <p _ngcontent-gjs-c72="">CPF *</p>
                                                        <input _ngcontent-gjs-c72="" type="text" placeholder="000.000.000-00" mask="000.000.000-00" formcontrolname="documentNumber" class="cpf ng-untouched ng-pristine ng-invalid" />
                                                    </div>
                                                </div>
                                            </div>
                                            <checkout-item-header _ngcontent-gjs-c72="" _nghost-gjs-c70="">
                                                <div _ngcontent-gjs-c70="" class="checkout-item-header">
                                                    <div _ngcontent-gjs-c70="" class="info">
                                                        <h2 _ngcontent-gjs-c70="">Sobre a Entrega</h2>
                                                        <img _ngcontent-gjs-c70="" src="https://checkout.skypayments.com.br/assets/icons/icone-entrega-envio.png" />
                                                    </div>
                                                    <p _ngcontent-gjs-c70="">Para onde seu pedido será enviado?</p>
                                                </div>
                                            </checkout-item-header>
                                            <div _ngcontent-gjs-c72="" class="fields">
                                                <div _ngcontent-gjs-c72="" class="custom-field" style="max-width: 50%;">
                                                    <p _ngcontent-gjs-c72="">CEP *</p>
                                                    <input _ngcontent-gjs-c72="" type="text" placeholder="00000-000" name="zipCode" formcontrolname="zipCode" class="inputcep ng-untouched ng-pristine ng-invalid" />
                                                    <!---->
                                                </div>
                                                <!---->
                                            </div>
                                            <div _ngcontent-vvv-c72="" class="div_cep" style="display: none;">
                                             <div _ngcontent-vvv-c72="" class="aside-fields">
                                                 <div _ngcontent-vvv-c72="" class="custom-field flex-6">
                                                     <p _ngcontent-vvv-c72="">Endereço *</p>
                                                     <input _ngcontent-vvv-c72="" type="text" placeholder="Nome da Rua" name="address" formcontrolname="address" maxlength="255" class="ng-pristine ng-valid ng-touched" />
                                                 </div>
                                                 <div _ngcontent-vvv-c72="" class="custom-field flex-3">
                                                     <p _ngcontent-vvv-c72="">Número *</p>
                                                     <input _ngcontent-vvv-c72="" type="text" name="addressNumber" formcontrolname="addressNumber" maxlength="50" class="ng-untouched ng-pristine ng-invalid" />
                                                 </div>
                                             </div>
                                             <div _ngcontent-vvv-c72="" class="aside-fields">
                                                 <div _ngcontent-vvv-c72="" class="custom-field flex-1">
                                                     <p _ngcontent-vvv-c72="">Bairro *</p>
                                                     <input _ngcontent-vvv-c72="" type="text" placeholder="Nome do Bairro" name="neighborhood" formcontrolname="neighborhood" maxlength="100" class="ng-untouched ng-pristine ng-valid" />
                                                 </div>
                                                 <div _ngcontent-vvv-c72="" class="custom-field flex-1">
                                                     <p _ngcontent-vvv-c72="">Complemento</p>
                                                     <input _ngcontent-vvv-c72="" type="text" placeholder="Opcional" name="complement" formcontrolname="complement" maxlength="100" class="ng-untouched ng-pristine ng-valid" />
                                                 </div>
                                                 <div _ngcontent-vvv-c72="" class="custom-field flex-1">
                                                     <p _ngcontent-vvv-c72="">Cidade *</p>
                                                     <input _ngcontent-vvv-c72="" type="text" placeholder="Nome da sua Cidade" name="city" formcontrolname="city" maxlength="100" class="ng-untouched ng-pristine ng-valid" />
                                                 </div>
                                             </div>
                                             <div _ngcontent-vvv-c72="" class="aside-fields">
                                                 <div _ngcontent-vvv-c72="" class="custom-field">
                                                     <p _ngcontent-vvv-c72="">País *</p>
                                                     <select _ngcontent-vvv-c72="" name="country" disabled="">
                                                         <option _ngcontent-vvv-c72="" selected="">Brasil</option>
                                                     </select>
                                                 </div>
                                                 <div _ngcontent-vvv-c72="" class="custom-field">
                                                     <p _ngcontent-vvv-c72="">Estado *</p>
                                                     <select _ngcontent-vvv-c72="" name="state" formcontrolname="state" class="ng-untouched ng-pristine ng-valid">
                                                         <option _ngcontent-vvv-c72="" value="AC">Acre </option>
                                                         <option _ngcontent-vvv-c72="" value="AL">Alagoas </option>
                                                         <option _ngcontent-vvv-c72="" value="AM">Amazonas </option>
                                                         <option _ngcontent-vvv-c72="" value="AP">Amapá </option>
                                                         <option _ngcontent-vvv-c72="" value="BA">Bahia </option>
                                                         <option _ngcontent-vvv-c72="" value="CE">Ceará </option>
                                                         <option _ngcontent-vvv-c72="" value="DF">Distrito Federal </option>
                                                         <option _ngcontent-vvv-c72="" value="ES">Espírito Santo </option>
                                                         <option _ngcontent-vvv-c72="" value="GO">Goiás </option>
                                                         <option _ngcontent-vvv-c72="" value="MA">Maranhão </option>
                                                         <option _ngcontent-vvv-c72="" value="MG">Minas Gerais </option>
                                                         <option _ngcontent-vvv-c72="" value="MS">Mato Grosso do Sul </option>
                                                         <option _ngcontent-vvv-c72="" value="MT">Mato Grosso </option>
                                                         <option _ngcontent-vvv-c72="" value="PA">Pará </option>
                                                         <option _ngcontent-vvv-c72="" value="PB">Paraíba </option>
                                                         <option _ngcontent-vvv-c72="" value="PE">Pernambuco </option>
                                                         <option _ngcontent-vvv-c72="" value="PI">Piauí </option>
                                                         <option _ngcontent-vvv-c72="" value="PR">Paraná </option>
                                                         <option _ngcontent-vvv-c72="" value="RJ">Rio de Janeiro </option>
                                                         <option _ngcontent-vvv-c72="" value="RN">Rio Grande do Norte </option>
                                                         <option _ngcontent-vvv-c72="" value="RS">Rio Grande do Sul </option>
                                                         <option _ngcontent-vvv-c72="" value="RO">Rondônia </option>
                                                         <option _ngcontent-vvv-c72="" value="RR">Roraima </option>
                                                         <option _ngcontent-vvv-c72="" value="SC">Santa Catarina </option>
                                                         <option _ngcontent-vvv-c72="" value="SE">Sergipe </option>
                                                         <option _ngcontent-vvv-c72="" value="SP">São Paulo </option>
                                                         <option _ngcontent-vvv-c72="" value="TO">Tocantins </option>
                                                         <!---->
                                                     </select>
                                                 </div>
                                             </div>
                                         </div>
                                         
                                            <checkout-item-header _ngcontent-gjs-c72="" _nghost-gjs-c70="">
                                                <div _ngcontent-gjs-c70="" class="checkout-item-header">
                                                    <div _ngcontent-gjs-c70="" class="info">
                                                        <h2 _ngcontent-gjs-c70="">Método de envio</h2>
                                                        <img _ngcontent-gjs-c70="" src="https://checkout.skypayments.com.br/assets/icons/icone-entrega-envio.png" />
                                                    </div>
                                                    <p _ngcontent-gjs-c70="">Escolha a forma de envio do seu produto</p>
                                                </div>
                                            </checkout-item-header>
                                            <!---->
                                          @if(empty($data['fretes']))
                                          <input type="hidden" id="vl_frete" value="0">
                                            <div _ngcontent-gjs-c72="">
                                                <div _ngcontent-gjs-c72="" class="df-card df-option selected">
                                                    <div _ngcontent-gjs-c72="" class="df-card-padding d-flex full-width align-items-center">
                                                        <div _ngcontent-gjs-c72="" class="df-option-dot fretes selected"></div>
                                                        <div _ngcontent-gjs-c72="" class="texts">
                                                            <h2 _ngcontent-gjs-c72="" class="smaller">{{$data['frete_padrao']}}</h2>
                                                            <p _ngcontent-gjs-c72="">4 a 7 Dias Úteis</p>
                                                            <!---->
                                                        </div>
                                                        <h3 _ngcontent-gjs-c72="" class="price">Grátis</h3>
                                                        <!----><!---->
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                          @else
                                          <input type="hidden" id="vl_frete" value="0">
                                             <div _ngcontent-gjs-c72="">
                                                <div _ngcontent-gjs-c72="" iid="-1" ds_frete="{{$data['frete_padrao']}}" preco="0" class="fretediv df-card df-option selected">
                                                    <div _ngcontent-gjs-c72="" class="df-card-padding d-flex full-width align-items-center">
                                                        <div _ngcontent-gjs-c72="" iid="-1" class="fretediv2 df-option-dot selected"></div>
                                                        <div _ngcontent-gjs-c72="" class="texts">
                                                            <h2 _ngcontent-gjs-c72="" class="smaller">{{$data['frete_padrao']}}</h2>
                                                            <p _ngcontent-gjs-c72="">4 a 7 Dias Úteis</p>
                                                            <!---->
                                                        </div>
                                                        <h3 _ngcontent-gjs-c72="" class="price">Grátis</h3>
                                                        <!----><!---->
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                          @foreach($data['fretes'] as $k => $v)
                                             <div _ngcontent-gjs-c72="">
                                                <div _ngcontent-gjs-c72="" iid="{{$v['id_frete_loja']}}" ds_frete="{{$v['ds_frete']}}" preco="{{$v['preco']}}" class="fretediv df-card df-option">
                                                    <div _ngcontent-gjs-c72="" class="df-card-padding d-flex full-width align-items-center">
                                                        <div _ngcontent-gjs-c72="" iid="{{$v['id_frete_loja']}}" class="fretediv2 df-option-dot"></div>
                                                        <div _ngcontent-gjs-c72="" class="texts">
                                                            <h2 _ngcontent-gjs-c72="" class="smaller">{{$v['ds_frete']}}</h2>
                                                            <!---->
                                                        </div>
                                                        <h3 _ngcontent-gjs-c72="" class="price">R$ {{str_replace('.', ',',number_format($v['preco'],2)) }}</h3>
                                                        <!----><!---->
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                          @endforeach
                                          @endif
                                            <!---->
                                        </form>
                                    </checkout-user-information>
                                </div>
                                <div _ngcontent-gjs-c78="" style="padding-bottom: 30px;"></div>
                                <div _ngcontent-gjs-c78="" class="checkout-card">
                                    <checkout-payment-information _ngcontent-gjs-c78="" _nghost-gjs-c73="">
                                        <form _ngcontent-gjs-c73="" novalidate="" id="checkout-payment-information" class="ng-untouched ng-pristine ng-invalid">
                                            <checkout-item-header _ngcontent-gjs-c73="" icon="lock" _nghost-gjs-c70="">
                                                <div _ngcontent-gjs-c70="" class="checkout-item-header">
                                                    <div _ngcontent-gjs-c70="" class="info">
                                                        <h2 _ngcontent-gjs-c70="">Informações de pagamento</h2>
                                                        <img _ngcontent-gjs-c70="" src="https://checkout.skypayments.com.br/assets/icons/icone-pagamentos.png" />
                                                    </div>
                                                    <p _ngcontent-gjs-c70=""></p>
                                                </div>
                                            </checkout-item-header>
                                            <div _ngcontent-gjs-c73="" class="payment-method-options">
                                                <div _ngcontent-gjs-c73="" class="pag_card df-card df-option">
                                                    <div _ngcontent-gjs-c73="" class="df-card-padding credit-card-option">
                                                        <div _ngcontent-gjs-c73="" class="d-flex align-items-center full-width">
                                                            <div _ngcontent-gjs-c73="" class="checkcard df-option-dot"></div>
                                                            <div _ngcontent-gjs-c73="" class="texts texts-credit-card"><h2 _ngcontent-gjs-c73="">Cartão de crédito</h2></div>
                                                            <!---->
                                                        </div>
                                                        <div _ngcontent-gjs-c73="" class="brand-cards">
                                                            <img _ngcontent-gjs-c73="" src="https://checkout.skypayments.com.br/assets/credit-card/visa.png" />
                                                            <img _ngcontent-gjs-c73="" src="https://checkout.skypayments.com.br/assets/credit-card/mastercard.png" />
                                                            <img _ngcontent-gjs-c73="" src="https://checkout.skypayments.com.br/assets/credit-card/amex.png" />
                                                            <img _ngcontent-gjs-c73="" src="https://checkout.skypayments.com.br/assets/credit-card/discover.png" />
                                                            <img _ngcontent-gjs-c73="" src="https://checkout.skypayments.com.br/assets/credit-card/maestro.png" />
                                                        </div>
                                                        <!----><!---->
                                                    </div>
                                                </div>
                                                <!---->
                                                <div _ngcontent-gjs-c73="" style="display: none;" class="fields pag_card_div">
                                                    <div _ngcontent-gjs-c73="" class="custom-field">
                                                        <p _ngcontent-gjs-c73="">Número do cartão *</p>
                                                        <input _ngcontent-gjs-c73="" type="text" name="cardNumber" mask="0000 0000 0000 9999" formcontrolname="cardNumber" class="ng-untouched ng-pristine ng-valid" />
                                                    </div>
                                                    <div _ngcontent-gjs-c73="" class="aside-fields maintain">
                                                        <div _ngcontent-gjs-c73="" class="custom-field flex-1">
                                                            <p _ngcontent-gjs-c73="">Validade *</p>
                                                            <input _ngcontent-gjs-c73="" type="text" name="cardExpiryDate" mask="00/00" maxlength="5" formcontrolname="cardValid" class="ng-untouched ng-pristine ng-valid" />
                                                        </div>
                                                        <div _ngcontent-gjs-c73="" class="custom-field flex-1">
                                                            <p _ngcontent-gjs-c73="" class="hide-mobile">Código de segurança *</p>
                                                            <p _ngcontent-gjs-c73="" class="hide-desktop">CVV *</p>
                                                            <input _ngcontent-gjs-c73="" type="text" name="securityCode" data-checkout="securityCode" maxlength="4" formcontrolname="cardCVV" class="cvv_ccng-untouched ng-pristine ng-valid" />
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-gjs-c73="" class="custom-field">
                                                        <p _ngcontent-gjs-c73="">Nome no cartão *</p>
                                                        <input _ngcontent-gjs-c73="" type="text" name="cardholderName" data-checkout="cardholderName" formcontrolname="cardName" class="ng-untouched ng-pristine ng-valid" />
                                                    </div>
                                                    <div _ngcontent-gjs-c73="" class="custom-field">
                                                        <p _ngcontent-gjs-c73="">Parcelas *</p>
                                                        <select _ngcontent-gjs-c73="" name="installments" formcontrolname="installments" class="ng-untouched ng-pristine ng-valid">
                                                            <!---->
                                                        </select>
                                                        <!---->
                                                    </div>
                                                </div>
                                                <!----><!---->
                                                <div _ngcontent-gjs-c73="" class="df-card df-option">
                                                    <div _ngcontent-gjs-c73="" class="pag_pix df-card-padding d-flex full-width align-items-center">
                                                        <div _ngcontent-gjs-c73="" class="checkpix df-option-dot"></div>
                                                        <div _ngcontent-gjs-c73="" class="texts"><h2 _ngcontent-gjs-c73="">PIX</h2></div>
                                                        <p _ngcontent-gjs-c73="" class="discount">6% OFF</p>
                                                        <!----><!---->
                                                    </div>
                                                </div>
                                                <!---->
                                                <div _ngcontent-gjs-c73="" class="df-option warn-email no-styles">
                                                    <div _ngcontent-gjs-c73="" class="df-card-padding d-flex full-width align-items-center" style="padding-bottom: 0;">
                                                        <div _ngcontent-gjs-c73="" class="df-option-dot selected"></div>
                                                        <div _ngcontent-gjs-c73="" class="texts">
                                                            <p _ngcontent-gjs-c73="">Estou ciente de que receberei emails sobre os status dos pedidos com o domínio da Loja Virtual ou da plataforma.</p>
                                                            <!----><!---->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                        </form>
                                        <input _ngcontent-gjs-c73="" type="text" id="cardNumber" data-checkout="cardNumber" name="cardNumber" style="display: none;" />
                                        <input _ngcontent-gjs-c73="" type="text" id="docType" data-checkout="docType" name="docType" value="CPF" style="display: none;" />
                                        <input _ngcontent-gjs-c73="" type="text" id="docNumber" data-checkout="docNumber" name="docNumber" style="display: none;" />
                                        <input _ngcontent-gjs-c73="" type="text" id="cardExpirationMonth" data-checkout="cardExpirationMonth" name="cardExpirationMonth" style="display: none;" />
                                        <input _ngcontent-gjs-c73="" type="text" id="cardExpirationYear" data-checkout="cardExpirationYear" name="cardExpirationYear" style="display: none;" />
                                    </checkout-payment-information>
                                </div>
                                <div _ngcontent-gjs-c78="" style="padding-bottom: 25px;"></div>
                                @if($data['order'])
                                <input type="hidden" id="img_order" value="{{$data['order_img']}}">
                                <input type="hidden" id="order_produto" value="{{$data['order_produto']}}">
                                <input type="hidden" id="order_vl" value="{{str_replace('.', ',', number_format($data['order_vl'],2))}}">
                                <input type="hidden" id="order_vl_parcela" value="{{$data['order_vl']}}">
                                <order-bump _ngcontent-gjs-c78="" _nghost-gjs-c76="">
                                    <div _ngcontent-gjs-c76="" id="order-bump-component" style="border-color: rgb(252, 107, 15);">
                                        <div _ngcontent-gjs-c76="" class="header" style="background-color: rgb(252, 107, 15);"><h2 _ngcontent-gjs-c76="">OFERTA EXCLUSIVA PARA ESTA COMPRA!!</h2></div>
                                        <div _ngcontent-gjs-c76="" class="info">
                                            <div _ngcontent-gjs-c76="" class="d-flex align-items-flex-start">
                                                <img
                                                    _ngcontent-gjs-c76=""
                                                    src="{{$data['order_img']}}"
                                                />
                                                <div _ngcontent-gjs-c76="">
                                                    <div _ngcontent-gjs-c76="" class="title">
                                                        <p _ngcontent-gjs-c76=""><b _ngcontent-gjs-c76="">{{$data['order_produto']}}</b></p>
                                                        <!---->
                                                    </div>
                                                    <div _ngcontent-gjs-c76="" class="price" style="color: rgb(252, 107, 15);">
                                                        <p _ngcontent-gjs-c76="">
                                                            <span _ngcontent-gjs-c76="" class="from-price"> R$ {{str_replace('.', ',', number_format($data['order_vl'] * 3,2))}} </span>
                                                            <!---->
                                                            <b _ngcontent-gjs-c76="">R$ {{str_replace('.', ',', number_format($data['order_vl'],2))}}</b>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gjs-c76="" class="texts"></div>
                                            <div _ngcontent-gjs-c76="" class="options-container"><!----></div>
                                            <!---->
                                            <button _ngcontent-gjs-c76="" type="button" class="btnorder default-button smaller" style="background-color: rgb(252, 107, 15);">
                                                <div _ngcontent-gjs-c76="" class="checkbox"><!----></div>
                                                Sim, quero aproveitar a oferta!
                                            </button>
                                        </div>
                                    </div>
                                    <!---->
                                </order-bump>
                                @endif
                                <!---->
                                <div _ngcontent-gjs-c78="" class="df-container">
                                    <!---->
                                    <button _ngcontent-gjs-c78="" type="submit" class="btn_comprar default-button full-width" style="margin: auto;">
                                        <mat-icon _ngcontent-gjs-c78="" role="img" class="mat-icon notranslate material-icons mat-icon-no-color" aria-hidden="true" data-mat-icon-type="font">lock</mat-icon>
                                        <!----><!---->
                                        comprar agora
                                    </button>
                                </div>
                                <p _ngcontent-gjs-c78="" class="warn-email">
                                    Nós não compartilharemos seus dados com ninguém, você está em um ambiente seguro e apenas receberá emails referentes à sua compra. Você pode cancelar os recebimentos de emails a qualquer momento.
                                </p>
                                <!----><!---->
                            </div>
                        </form>
                        <aside _ngcontent-gjs-c78="" id="resumo" class="item-grid-resumo">
                            <checkout-resume _ngcontent-gjs-c78="" _nghost-gjs-c75="">
                                <div _ngcontent-gjs-c75="" id="checkout-resume">
                                    <h2 _ngcontent-gjs-c75="" class="cart-title">Resumo</h2>
                                    <checkout-coupon _ngcontent-gjs-c75="" _nghost-gjs-c74="">
                                        <div _ngcontent-gjs-c74="" class="checkout-coupon">
                                            <div _ngcontent-gjs-c74="" class="custom-field smaller">
                                                <p _ngcontent-gjs-c74="">Tem um cupom?</p>
                                                <div _ngcontent-gjs-c74="" class="d-flex align-items-center">
                                                    <div _ngcontent-gjs-c74="" class="input-icon-container" style="flex: 1;">
                                                        <i _ngcontent-gjs-c74="" class="fa fa-tag"></i><input _ngcontent-gjs-c74="" type="text" placeholder="Código do cupom" class="ng-untouched ng-pristine ng-valid" />
                                                    </div>
                                                    <button _ngcontent-gjs-c74="" class="default-button transparent smaller" style="padding-right: 0;">Adicionar</button>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </checkout-coupon>
                                    <!---->
                                    <div _ngcontent-gjs-c75="" class="cart-resume">
                                        <div _ngcontent-gjs-c75="" class="label-description">
                                            <p _ngcontent-gjs-c75="">Produtos</p>
                                            <p _ngcontent-gjs-c75="" class="vl_p">R$ {{ str_replace('.', ',', number_format($data['preco'] * $data['quantidade'],2))}}</p>
                                        </div>
                                        <!----><!---->
                                        <div _ngcontent-gjs-c75="" class="label-description">
                                            <p _ngcontent-gjs-c75="">Frete</p>
                                            <!---->
                                            <p _ngcontent-gjs-c75="" class="txtfrete">
                                                <!---->
                                                Grátis
                                            </p>
                                            <!----><!---->
                                        </div>
                                        <div _ngcontent-gjs-c75="" class="label-description">
                                            <p _ngcontent-gjs-c75="" class="green">Total em Produtos</p>
                                            <div _ngcontent-gjs-c75="">
                                                <!---->
                                                <p _ngcontent-gjs-c75="" class="green bigger vl_12x">Carregando...</p>
                                                <!---->
                                            </div>
                                            <!----><!---->
                                        </div>
                                    </div>
                                    <div _ngcontent-gjs-c75="" style="padding-bottom: 20px;"></div>
                                    <div _ngcontent-gjs-c75="" class="products-container">
                                        <div _ngcontent-gjs-c75="" class="product-item">
                                            <div _ngcontent-gjs-c75="" class="product-info">
                                                <img _ngcontent-gjs-c75="" src="{{$data['imagem1']}}" />
                                                <div _ngcontent-gjs-c75="" class="info">
                                                    <h4 _ngcontent-gjs-c75="" class="max-lines-2">{{$data['titulo']}}</h4>
                                                    <?php
                                                    $var = explode('|', $data['variacao']);
                                                    ?>
                                                    
                                                      @foreach($var as $k => $v)
                                                      <p style="    font-weight: 300;
                                                      color: #888;
                                                      font-size: 14px;
                                                      line-height: 20px;" _ngcontent-gjs-c75="">{{$v}}</p>
                                                      @endforeach
                                                      
                                                    
                                                    <p _ngcontent-gjs-c75="">R$ {{ str_replace('.', ',', number_format($data['preco'],2))}}</p>
                                                    <div _ngcontent-gjs-c75="" class="incremental-btn">
                                                        <button _ngcontent-gjs-c75="" type="button">
                                                            <mat-icon _ngcontent-gjs-c75="" role="img" class="btn_rem mat-icon notranslate material-icons mat-icon-no-color" aria-hidden="true" data-mat-icon-type="font">remove</mat-icon>
                                                        </button>
                                                        <input _ngcontent-gjs-c75="" class="quantidade" value="{{$data['quantidade']}}" type="text" disabled="" />
                                                        <button _ngcontent-gjs-c75="" type="button">
                                                            <mat-icon _ngcontent-gjs-c75="" role="img" class="btn_add mat-icon notranslate material-icons mat-icon-no-color" aria-hidden="true" data-mat-icon-type="font">add</mat-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </checkout-resume>
                        </aside>
                    </div>
                </div>
                <!---->
                <checkout-footer _ngcontent-gjs-c78="" _nghost-gjs-c77="">
                    <!---->
                </checkout-footer>
                <!---->
                <loader-background _ngcontent-gjs-c78="" _nghost-gjs-c67="">
                    <div _ngcontent-gjs-c67="" class="background-loader">
                        <mat-spinner _ngcontent-gjs-c67="" role="progressbar" mode="indeterminate" class="mat-spinner mat-progress-spinner mat-primary mat-progress-spinner-indeterminate-animation" style="width: 60px; height: 60px;">
                            <svg preserveAspectRatio="xMidYMid meet" focusable="false" viewBox="0 0 56 56" style="width: 60px; height: 60px;">
                                <circle cx="50%" cy="50%" r="25" style="animation-name: mat-progress-spinner-stroke-rotate-60; stroke-dasharray: 157.08px; stroke-width: 10%;"></circle>
                                <!----><!---->
                            </svg>
                        </mat-spinner>
                    </div>
                </loader-background>
                <secure-loader _ngcontent-gjs-c78="" _nghost-gjs-c68="">
                    <div _ngcontent-gjs-c68="" id="secure-loader-component" class="">
                        <div _ngcontent-gjs-c68="" class="hopy-loader-inside">
                            <div _ngcontent-gjs-c68="" class="loader-wrapper">
                                <div _ngcontent-gjs-c68="" class="loader-around"></div>
                                <div _ngcontent-gjs-c68="" class="loader-icon-wrapper">
                                    <svg _ngcontent-gjs-c68="" fill="#eee" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path
                                            _ngcontent-gjs-c68=""
                                            d="M18 10v-4c0-3.313-2.687-6-6-6s-6 2.687-6 6v4h-3v14h18v-14h-3zm-5 7.723v2.277h-2v-2.277c-.595-.347-1-.984-1-1.723 0-1.104.896-2 2-2s2 .896 2 2c0 .738-.404 1.376-1 1.723zm-5-7.723v-4c0-2.206 1.794-4 4-4 2.205 0 4 1.794 4 4v4h-8z"
                                        ></path>
                                    </svg>
                                </div>
                            </div>
                            <p _ngcontent-gjs-c68="" class="loader-info-text">Conectando em ambiente seguro...</p>
                        </div>
                    </div>
                </secure-loader>
            </app-checkout-screen>
            <input type="hidden" id="pag_selecionado" value="-1">
            <input type="hidden" id="vl_produto" value="{{$data['preco']}}" />
            <input type="hidden" id="hash" value="{{$data['hash']}}" />
            <input type="hidden" id="frete_padrao" value="{{$data['frete_padrao']}}">
            <input type="hidden" id="vl" value="{{$data['frete_padrao']}}">
            <input type="hidden" id="__card" value="">
            <input type="hidden" id="__l" value="{{$data['id_loja']}}">

            <!----><!---->
        </app-root>
        <script src="/assets/scripts/tenant-util.js"></script>
        <script>
            var host = window.location.hostname;

            console.log("loaded index");

            if (host === "localhost") {
                host = "nexuscheckout.com.br";
            }

            var queryParams = new Proxy(new URLSearchParams(window.location.search), {
                get: (searchParams, prop) => searchParams.get(prop),
            });

            var queryParamsHost = queryParams._h ?? queryParams.h;

            if (queryParamsHost) {
                if (queryParamsHost.includes("?")) {
                    var paramsSplit = queryParamsHost.split("?");
                    queryParamsHost = paramsSplit[0];

                    var otherParams = paramsSplit[1];

                    if (otherParams) {
                        window.location.search = "_h=" + queryParamsHost + "&" + otherParams;
                    }
                }

                host = atob(queryParamsHost);
            }
        </script>
        <script src="/libs/jquery.js"></script>
        <script src="/libs/jquery.mask.js"></script>
        <script src="/libs/adiq-3ds-package-1.0.1-min.js"></script>
        <script>
         var timeInSecs;
         var ticker;

         function startTimer(secs) {
         timeInSecs = parseInt(secs);
         ticker = setInterval("tick()", 1000); 
         }

         function tick( ) {
         var secs = timeInSecs;
         if (secs > 0) {
         timeInSecs--; 
         }
         else {
         clearInterval(ticker);
         startTimer(5*60); // 4 minutes in seconds
         }

         var mins = Math.floor(secs/60);
         secs %= 60;
         var pretty = ( (mins < 10) ? "0" : "" ) + mins + ":" + ( (secs < 10) ? "0" : "" ) + secs;

         document.getElementById("countdown").innerHTML = pretty;
         }

         startTimer(6*60);
        </script>
        <script>
            $(document).ready(function (e) {
               
            $.post('/local/checkout',{
                  useragent: window.navigator.userAgent,
                  local: 'Checkout - SkyPayments',
                  hash: $("#hash").val(),
                  il: $("#__l").val()
            },(r)=>{
               console.log("|           ^_^          |");
            })   
               setTimeout(()=>{
                  if(localStorage.getItem($("#hash").val()) == 's'){
                     $(".btnorder").click();
                  }
               },1000)

               fbq('track', 'InitiateCheckout');
               $(".inputcep").mask('00000-000');
               $(".cpf").mask('000.000.000-00');
               $(".telefone").mask('(00) 00000-0000');
               $('[name="cardNumber"]').mask('0000 0000 0000 0000');
               $('[name="cardExpiryDate"]').mask('00/00');
               $('[name="securityCode"]').mask('0000');

               $(".inputcep").on('input',function(e){
                  if($(this).val().length < 9) return;
                  $.get('https://viacep.com.br/ws/' + $(this).val() + '/json/',(r)=>{
                  $(".form-label").each((i,v)=>{ $(v).addClass('show') })
                  $('[name="address"]').val(r.logradouro??'');
                  $('[name="neighborhood"]').val(r.bairro??'');
                  $('[name="city"]').val(r.localidade??'');
                  $('[name="state"]').val(r.uf).change();
                  $(".div_cep").show();
                  })
               })
                function updateQuantidade(quantidade, hash) {
                    let req = $.post(
                        "/checkout/updateQuantidade",
                        {
                            hash: hash,
                            q: quantidade,
                        },
                        "POST"
                    );

                    let preco = parseFloat($("#vl_produto").val()) * quantidade;
                    let preco_parcelas = preco / 12;
                    preco_parcelas = preco_parcelas.toFixed(2);
                    preco_parcelas = preco_parcelas.replace(".", ",");
                    preco = preco.toFixed(2);
                    preco = preco.replace(".", ",");

                    $(".vl_p").text(`R$ ${preco}`);
                    atualizaParcela();
                }
                $(".btn_add").click(function (e) {
                    e.preventDefault();

                    let vl = $(".quantidade").val();
                    vl = parseInt(vl) + 1;
                    console.log(vl);
                    $(".quantidade").val(vl).change();
                    updateQuantidade(vl, $("#hash").val());
                    
                });

                $(".btn_rem").click(function (e) {
                    e.preventDefault();
                    let vl = $(".quantidade").val();
                    if (vl == "1" || vl == 1) return;
                    vl = parseInt(vl) - 1;

                    $(".quantidade").val(vl).change();
                    updateQuantidade(vl, $("#hash").val());
                });

               $(".fretediv").click(function(e){
                  let _this = $(this);
                  let id = $(this).attr('iid'); 
                  let vlfrete = $(this).attr('preco');

                  $("#vl_frete").val($(this).attr('preco')).change();
                  $("#frete_padrao").val($(this).attr('ds_frete')).change();

                  $(".fretediv").each((i,v)=>{
                     if($(v) != $(_this)) $(v).removeClass('selected');
                  })

                  $(".fretediv2").each((i,v)=>{
                     if($(v).attr('iid') != id) $(v).removeClass('selected')
                     else $(v).addClass('selected')
                  })

                  if(vlfrete != '0' || vlfrete != 0){
                     vlfrete = vlfrete.replace('.', ',');

                     $(".txtfrete").text('R$ ' + vlfrete);
                  }else{
                     $(".txtfrete").text('Grátis');
                  }

                  atualizaParcela();


                  $(this).addClass('selected');
               })

               $(".pag_card").click(function(e){
                  $(this).children().show();
                  $(this).addClass('selected');
                  $(".pag_pix").parent().removeClass('selected');
                  $(".checkcard").addClass('selected');
                  $(".checkpix").removeClass('selected');
                  $(".pag_card_div").show();
                  $("#pag_selecionado").val('card').change();
               })
               
               $(".pag_pix").click(function(e){
                  $(this).parent().addClass('selected');
                  $(".pag_card_div").hide();
                  $(".pag_card").removeClass('selected');
                  $(".checkcard").removeClass('selected');
                  $(".checkpix").addClass('selected');
                  $("#pag_selecionado").val('pix').change();
               })

               $(".btnorder").off('click').on('click', async function(e){
                  const pai = $(this).parent();
                  $.post('/checkout/ativaOrderBump', {
                    hash: $("#hash").val(),
                  }, (r)=>{
                     if(r.status == 200){
                        $(this).remove();
                        $(pai).append(`<button _ngcontent-vvv-c76="" type="button" class="default-button smaller" style="background-color: rgb(252, 107, 15);" checked=""><div _ngcontent-vvv-c76="" class="checkbox checked"><mat-icon _ngcontent-vvv-c76="" role="img" class="mat-icon notranslate material-icons mat-icon-no-color" style="margin-left: 0; margin-right: 0;" aria-hidden="true" data-mat-icon-type="font">done</mat-icon><!----></div> Oferta adicionada! </button>`);
                        
                        $(".products-container").parent().append(`
                        <div _ngcontent-gjs-c75="" class="products-container">
                                 <div _ngcontent-gjs-c75="" class="product-item">
                                    <div _ngcontent-gjs-c75="" class="product-info">
                                       <img _ngcontent-gjs-c75="" src="${$("#img_order").val()}">
                                       <div _ngcontent-gjs-c75="" class="info">
                                             <h4 _ngcontent-gjs-c75="" class="max-lines-2">${$("#order_produto").val()}</h4>
                                             <p _ngcontent-gjs-c75="">R$ ${$("#order_vl").val()}</p>
                                             
                                       </div>
                                    </div>
                                 </div>
                                 <!---->
                           </div>
                        `);   
                     }
                     
                     let atual = $(".vl_p").text();
                     atual = atual.replace('R$ ', '');
                     atual = parseFloat(atual);
                     
                     atual = atual + parseFloat($("#order_vl").val())
                     atual = atual.toFixed(2);
                     atual = atual.replace('.', ',');
                     $(".vl_p").text('R$ ' + atual);
                     localStorage.setItem($("#hash").val(), 's');
                     atualizaParcela();

                })

               })

               $(".btn_comprar").off('click').on('click', async function(e){
                  e.preventDefault();

                  if($('.nome_completo').val().length < 5){
                     alert('Verifique o campo Nome Completo.');
                     return;
                  }
                  if($('.nome_completo').val().length < 5){
                     alert('Verifique o campo Nome Completo.');
                     return;
                  }

                  if($('[name="email"]').val().length < 5){
                     alert('Verifique o E-mail digitado.');
                     return;
                  }
                  if($(".telefone").val().length < 5){
                     alert('Verifique o Telefone digitado.');
                     return;
                  }
                  if($(".cpf").val().length < 14){
                     alert('Verifique o CPF digitado.');
                     return;
                  }
                  if($(".inputcep").val().length < 9){
                     alert('Verifique o CEP digitado.');
                     return;
                  }
                  
                  if($('[name="addressNumber"]').val().length < 1){
                     alert('Verifique o número do endereço digitado.');
                     return;
                  }
                  if($('[name="address"]').val().length < 3){
                     alert('Verifique o endereço digitado.');
                     return;
                  }
                  if($('[name="neighborhood"]').val().length < 3){
                     alert('Verifique o bairro digitado.');
                     return;
                  }

                  const atualiza = async function(){
                     return new Promise((res)=>{
                     $.post('/checkout/atualizaCarrinho',
                           {
                              flag: 'passo1',
                              hash: $('#hash').val(),
                              nome_completo: $(".nome_completo").val(),
                              email: $('[name="email"]').val(),
                              cpf: $(".cpf").val(),
                              telefone: $(".telefone").val()
                           },
                           (retorno)=>{
                           console.log(retorno);
                              res();
                           })
                     })
                  }

                  const atualizaFrete = async function(){
                     return new Promise((res)=>{
                     $.ajax({
                        url: '/checkout/atualizaFreteCarrinho',
                        type: 'POST',
                        data: {
                           hash: $('#hash').val(),
                           vlfrete: $("#vl_frete").val()??'0',
                           frete: $("#frete_padrao").val()??'SEDEX'
                        },
                        success: (r)=>{
                           res();
                        }
                     })
                     })
                  }

                  const atualzaEndereco = async function(){
                     return new Promise((res)=>{
                     $.ajax({
                        url: '/checkout/enderecoCarrinho',
                        type: 'POST',
                        data:{
                           hash: $("#hash").val(),
                           cep: $(".inputcep").val(),
                           rua: $('[name="address"]').val(),
                           numero: $('[name="addressNumber"]').val(),
                           bairro: $('[name="neighborhood"]').val(),
                           complemento: $('[name="complement"]').val()
                        },success:(retorno)=>{
                           console.log(retorno);
                           res();
                        }
                     })
                     })
                  }

                  const atualizaMetodoPagamento = async function(){
                     return new Promise((res)=>{
                     $.ajax({
                           url: '/checkout/updateMetodoPagamento',
                           type: 'POST',
                           data:{
                              hash: $('#hash').val(),
                              p: $("#pag_selecionado").val()
                           },
                           success: (r)=>{
                              res();
                           }
                     })
                     })
                  }

                  await atualiza();
                  await atualizaFrete();
                  await atualzaEndereco();
                  await atualizaMetodoPagamento();

                  if($("#pag_selecionado").val() == '-1'){
                     alert('Selecione um método de pagamento para continuar.');
                     return;
                  }
                  if($("#pag_selecionado").val() == 'pix'){
                     location.href = '/checkout/1/' + $("#hash").val() + '/4'
                  }

                  if($("#pag_selecionado").val() == 'card'){
                     let card = $('[name="cardNumber"]').val();
                     let validade = $('[name="cardExpiryDate"]').val();
                     let cvv = $('[name="securityCode"]').val();
                     let nomeCartao = $('[name="cardholderName"]').val();

                     window.card = card;
                     window.validade = validade;
                     window.cvv = cvv;
                     window.nome = nomeCartao;

                     card = card.replace(' ', '').replace(' ', '').replace(' ', '');
                     $("#__card").val(card).change();
                     
                     if(card.length < 15){
                        alert('Verifique o número do cartão de crédito digitado.');
                        return;
                     }

                     if(validade.length < 5){
                        alert('Verifique a validade do cartão digitado.');
                        return;
                     }

                     if(cvv.length < 3){
                        alert('Verifique o código de segurança do cartão (CVV) digitado.');
                        return;
                     }

                     $(".loading").show();

                     var verifica = new Adiq3ds('__card', validateChallengeCallback);
                     await verifica.Authorization3ds();
                     let codigo3ds = verifica.getThreeDsCode();

                     window.codigo3ds = codigo3ds;
                     
                     $.post('/checkout/pagamentoCartao', {
                        cartao: card,
                        validade: validade,
                        cvv: cvv,
                        cpf: $(".cpf").val(),
                        nome: $('[name="cardholderName"]').val(),
                        hash: $('#hash').val(),
                        parcela: $('[name="installments"]').val(),
                        ds: codigo3ds,
                        url: window.location.href,
                        accept: window.navigator.userAgent,
                        width: window.innerWidth,
                        height: window.innerHeight
                     },(r)=>{

                        if(r.status == 200){
                              location.href = `/checkout/4/${$("#hash").val()}/3`;
                        }

                        if(r.status == 310){
                           verifica.InitChallenge(r.acsUrl, r.pareq, r.authenticationTransactionId);
                        }

                        if(r.status == 202){
                           $("#div_erro").show();
                           $("#div_erro2").show();
                           $(".loading").hide();
                        }
                        
                        if(r.status == 201){
                           location.href = `/checkout/4/${$("#hash").val()}/3?analise=true`;
                        }
                           
                           

                     });
                  }

            });

            function atualizaParcela(){
               $('[name="installments"]').empty();
               $('[name="installments"]').append(
                  $("<option>",{
                     value: '-1',
                     text: 'Carregando...'
                  })
               );
               $('[name="installments"]').prop('disabled', true);
               $(".vl_12x").text('Carregando...');

               let order = $("#order_vl_parcela").val();
               let vlp = parseFloat($("#vl_produto").val()) * parseFloat($(".quantidade").val());
               let resultado = vlp;
               console.log(order);

               if(order != undefined && order != null && localStorage.getItem($("#hash").val()) == 's'){
                  resultado = resultado + parseFloat(order);
               }
               $.post('/checkout/getParcela',{
                  v: resultado,
                  hash: $("#hash").val()
               }, (r)=>{
                  $('[name="installments"]').empty();
                  let frete = parseFloat($("#vl_frete").val());
                  let xx = parseFloat(r[0]['parcela']['valueCredito']) + frete;
                  xx = xx.toFixed(2);
                  xx = xx.replace('.', ',');
                  $('[name="installments"]').append(
                     $("<option>",{
                        value: 1,
                        text: '1x de R$' + xx
                     })
                  );

                  for(i = 2; i <= 12; i++){
                     let vl = parseFloat(r[0]['parcela']['installment' + i + 'x']) + frete;
                     vl = vl.toFixed(2);
                     vl = vl.replace('.', ',');

                     $('[name="installments"]').append(
                     $("<option>",{
                        value: i,
                        text: i + 'x de R$' + vl
                     })
                  );
                  }

                  let vl2 = parseFloat(r[0]['parcela']['installment12x']) + frete;
                  vl2 = vl2.toFixed(2);
                  vl2 = vl2.replace('.', ',');
                  $(".vl_12x").text('12x de R$ ' + vl2);

                  $('[name="installments"]').prop('disabled', false);

               });
            }
            atualizaParcela();

            function validateChallengeCallback(jwt, statusChallenge){
               console.log(jwt, 'aqui');
               
               if (statusChallenge == 'Cancelled') {
                     alert('O desafio foi cancelado pelo usuário.');
                     $(".loading").hide();
                     return;
               }

               $.post('/checkout/pagamentoCartao', {
                  cartao: window.card,
                  validade: window.validade,
                  cvv: window.cvv,
                  cpf: $(".cpf").val(),
                  nome: $('[name="cardholderName"]').val(),
                  hash: $('#hash').val(),
                  parcela: $('[name="installments"]').val(),
                  ds: window.codigo3ds,
                  url: window.location.href,
                  accept: window.navigator.userAgent,
                  width: window.innerWidth,
                  height: window.innerHeight,
                     valida3ds: true,
                     jwt: jwt
               },(r)=>{
                     if(r.status == 200){
                     location.href = `/checkout/4/${$("#hash").val()}/3`;
                     }

                     if(r.status == 310){
                     verifica.InitChallenge(r.acsUrl, r.pareq, r.authenticationTransactionId);
                     }

                     if(r.status == 202){
                        $("#div_erro").show();
                        $("#div_erro2").show();
                        $(".loading").hide();
                     }

                     if(r.status == 201){
                        location.href = `/checkout/4/${$("#hash").val()}/3?analise=true`;
                     }


               });
               

            }

            $("#btn_ok").click(function(e){
               $("#div_erro").hide();
               $("#div_erro2").hide();
            })
         })
        </script>
        <script src="runtime.js" defer=""></script>
        <script src="polyfills.js" defer=""></script>
        <script src="main.js" defer=""></script>
        <div class="cdk-live-announcer-element cdk-visually-hidden" aria-atomic="true" aria-live="polite"></div>
        <iframe
            src="https://www.mercadolibre.com/jms/lgz/background?dps=armor.868ecf212101f332d5a96f056a3ab7da7b19ae81949d77ec0c81236d6dae2d315087e3807c84c874a1de82f2d2951b991f927574b6f4f46bd468d94e88ad0e51566bbafbb92ceef788106f0901380f13d217f62d383abf084f1a9d085099e053.6890bbafbd8e38597765bfb8c2334930"
            style="display: none; width: 0; height: 0; border: none; margin: 0;"
        ></iframe>
    </body>
</html>
