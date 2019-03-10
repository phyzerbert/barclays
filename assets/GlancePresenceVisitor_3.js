(function() {/*
 Copyright 2017 Glance Networks, Inc.
*/
var aa=["3","8","1","50"].slice(0,3).join(".");function f(a){for(a=a.toString();2>a.length;)a="0"+a;return a}Uint8Array.prototype.slice||(Uint8Array.prototype.slice=function(a,c){return new Uint8Array(this.subarray(a,c))});var g=navigator.userAgent.toLowerCase(),h=g.match(/(edge)[\s\/:]([\w\d\.]+)?/)||g.match(/(opera|ie|firefox|chrome|version)[\s\/:]([\w\d\.]+)?.*?(safari|version[\s\/:]([\w\d\.]+)|$)/)||g.match(/(rv):([\w\d\.]+)/)||[null,"unknown",0];"rv"===h[1]&&(h[1]="ie");function ba(a){for(var c=new Date,c=c.getUTCFullYear()+"/"+(c.getUTCMonth()+1)+"/"+c.getUTCDate()+" "+f(c.getUTCHours())+":"+f(c.getUTCMinutes())+":"+f(c.getUTCSeconds())+" ",b=0;b<a.length;b++)c+=("object"===typeof a[b]?JSON.stringify(a[b]):a[b])+" ";return c}function k(a){window.console&&window.console.log&&window.console.log(ba(arguments))};/*
 Copyright (c) 2017 Glance Networks, Inc.
*/
var l=l||{};window.GLANCE=window.GLANCE||{};window.GLANCE.VERSION="3.8.1.50";window.GLANCE.PATCH="";var m=navigator.userAgent.toLowerCase(),ca=navigator.platform.toLowerCase(),p=m.match(/(edge)[\s\/:]([\w\d\.]+)?/)||m.match(/(opera|ie|firefox|chrome|version)[\s\/:]([\w\d\.]+)?.*?(safari|version[\s\/:]([\w\d\.]+)|$)/)||m.match(/(rv):([\w\d\.]+)/)||[null,"unknown",0];"rv"===p[1]&&(p[1]="ie");
var q={extend:Function.prototype.extend,name:"version"==p[1]?p[3]:p[1],version:"ie"==p[1]&&document.documentMode||parseFloat("opera"==p[1]&&p[4]?p[4]:p[2]),m:{name:m.match(/ip(?:ad|od|hone)/)?"ios":(m.match(/(?:webos|android)/)||ca.match(/mac|win|linux/)||["other"])[0]},V:{Z:!!document.evaluate,X:!!window.runtime,query:!!document.querySelector,json:!!window.JSON},W:{}};
document.documentMode&&window.XDomainRequest?(q.name="ie",q.version=document.documentMode):window.navigator&&navigator.appVersion&&-1!=navigator.appVersion.indexOf("MSIE 7.")&&(q.name="ie",q.version="7");q[q.name]=!0;q[q.name+parseInt(q.version,10)]=!0;q.m[q.m.name]=!0;
if("undefined"!==typeof Prototype&&1.7>parseFloat(Prototype.Version.substr(0,3))&&"undefined"!==typeof Array.prototype.toJSON)var r=function(a){var c=Array.prototype.toJSON;delete Array.prototype.toJSON;a=JSON.stringify(a);Array.prototype.toJSON=c;return a};void 0===r&&(r=function(a){return JSON.stringify(a)});function t(a){a.onmessage=function(c){c=JSON.parse(c.data);a.D&&a.D(c)};a.l=function(c){a.send(r(c))};a.J=function(a){return a&&a.code||0};a.K=function(a){return a&&a.reason||""}}
function da(a){var c={},b;l.T?b=new u(a):(q.ie9&&"http:"===window.location.protocol&&(c.protocols_whitelist=["iframe-eventsource","iframe-htmlfile"]),b=new SockJS(a,"",c));b.i=0;b.G=function(){b.A();b.transport&&!b.transport.match(/^iframe-/)&&(b.B=window.setInterval(function(){b.i++;b.P&&b.P({i:b.i})},15E3))};b.A=function(){b.B&&window.clearInterval(b.B)};t(b);b.onclose=function(a){b.A();b.N&&b.N(a)};b.onheartbeat=function(){b.i=0;b.G();b.O&&b.O()};return b}
function v(a,c){window.setTimeout(function(){v(a,c)},100)}function u(a){this.readyState=SockJS.CONNECTING;this.a=Math.round(1E6*Math.random());w=w||{};w[this.a]=this;v({from:"GSockJSProxy",sockid:this.a,cmd:"open",url:a},"*")}var w;u.prototype.send=function(a){v({from:"GSockJSProxy",sockid:this.a,cmd:"send",data:a},"*")};u.prototype.close=function(){this.readyState=SockJS.CLOSING;v({from:"GSockJSProxy",sockid:this.a,cmd:"close"},"*")};
function y(a,c,b){void 0!==a&&(b=b||Object.keys(a),b.forEach(function(b){void 0!==a[b]&&(c[b]=a[b])}))}function ea(a){var c=a.func.split(".");if("GLANCE"!==c[0])z("ERR_BADINVOKE:"+c[0]);else{for(var b=window.GLANCE,d=1;d<c.length;d++)if(b=b[c[d]],!b){z("ERR_UNDEFINVOKE:"+c[d]);return}a.args=a.args||{};a.args.remote=!0;b(a.args)}}function A(a,c,b){window.addEventListener(a,c,b)}function B(a){l.T?this.f=new C(a):this.a=this.g();this.response=null;this.type=a}
B.prototype.g=function(){var a;if(window.XMLHttpRequest&&(a=new window.XMLHttpRequest,void 0!==a.withCredentials))return a;if(window.XDomainRequest)return"https:"===location.protocol.toLowerCase()||""===location.hostname&&"https:"===window.parent.location.protocol.toLowerCase()?(a=new XDomainRequest,a.onload=function(){a.readyState=4;a.status=200;a.onreadystatechange()},a.onerror=function(){a.readyState=4;a.status=0;a.onreadystatechange()},a.ontimeout=function(){a.readyState=4;a.status=0;a.onreadystatechange()},
a.onprogress=function(){D("p")},a):new E;throw Error("Can't get xmlhttp request");};window.Sarissa&&Sarissa._SARISSA_IS_IE&&!(new window.XMLHttpRequest).withCredentials&&!window.XDomainRequest&&(B.prototype.g=function(){D("Sarissa");return new Sarissa.originalXMLHttpRequest});B.prototype.abort=function(){this.f?this.f.abort():this.a.abort()};
B.prototype.onreadystatechange=function(){if(4==this.a.readyState){var a="error";if(0==this.a.status)D(this.method+" to "+this.url+" failed: network"),this.b(!0,"connection");else if(200!==this.a.status){z(this.method+" to "+this.url+" failed with status: "+this.a.status);null!==this.a.responseText&&D(this.a.responseText);if(401===this.a.status||403===this.a.status)a="authorization",this.c&&this.c.Y();this.b(!1,a)}else{if(""!==this.a.response){"XML"===this.accept?(this.response=this.a.responseXML&&
this.a.responseXML.documentElement,null===this.response&&z("Invalid XML response: "+this.a.responseText)):this.response=this.a.responseXML?F(this.a.responseXML.childNodes[0].childNodes[0].nodeValue):"HTML"===this.accept?this.a.responseText:F(this.a.responseText);if(null===this.response){D(this.method+" to "+this.url+" failed - can't parse response "+this.a.responseText);this.b(!1,a);return}if(void 0!==this.response.H&&void 0!==this.response.M){D(this.method+" to "+this.url+" failed with error:"+this.response.H+
" "+this.response.M);this.b(!1,a);return}}this.onsuccess(this.response)}}};function F(a){var c=null;try{c=JSON.parse(a)}catch(b){return D("JSON parse failed with error: "+b.toString()+" parsing: "+a),null}return c}B.prototype.get=function(a,c,b,d,e){this.method="GET";G(this,a,null,c,b,d,e)};
function G(a,c,b,d,e,n,x){a.url=c;a.onsuccess=void 0!==n?n:function(){};a.b=void 0!==x?x:function(){};a.method=a.method||"POST";if(a.f)fa(a.f,c,b,d,e,n,x);else{var N;"string"===typeof b?N=b:b&&(N="JSON"===a.type?r(b):"data="+r(b));b="JSON"===a.type?"application/json; charset=utf-8":"application/x-www-form-urlencoded; charset=utf-8";a.a.onreadystatechange=function(){a.onreadystatechange()};try{a.a.open(a.method,c,d),void 0!==a.h&&a.a.setRequestHeader("Accept",a.h),void 0!==a.a.setRequestHeader&&"GET"!==
a.method&&a.a.setRequestHeader("Content-type",b),a.c&&a.c.L()&&a.a.setRequestHeader("Authorization","Bearer "+a.c.L()),e&&void 0!==a.a.withCredentials&&(a.a.withCredentials=e),a.a.send(N)}catch(sa){D(a.method+" to "+c+" failed with: "+sa.toString()),a.b()}}}
function E(){H||D("ERR_INITNOTCALLED");if(!document.getElementById(I)){var a=document.createElement("iframe");a.id=I;a.width="0px";a.height="0px";a.src="https://"+H+"/IEXDRProxy2.htm";document.body.appendChild(a)}this.b=document.getElementById(I).contentWindow;for(a=String(Math.round(Math.random()*Math.pow(10,4)));4>a.length;)a="0"+a;this.a=a;J[this.a]=this;this.j=[]}var I,H,ga,J={};E.prototype.postMessage=function(a){ga?this.b.postMessage(this.a+a,"*"):this.j.push(a)};
E.prototype.open=function(a,c){this.postMessage(c)};E.prototype.send=function(a){this.postMessage(a)};E.prototype.abort=function(){this.postMessage("abrt")};function ha(a){window.XMLHttpRequest&&void 0!==(new window.XMLHttpRequest).withCredentials||(H=a,I="glance_ie_xdr_proxy_"+K(a).replace(/\./g,"_"),A("message",ia,!1))}
function ia(a){if(K(a.origin)===K(H)){var c;try{c=JSON.parse(a.data)}catch(e){return}if(c.proxy_ready){ga=!0;for(var b in J){a=J[b];for(var d=0;d<a.j.length;d++)a.postMessage(a.j[d]);a.j=[]}}c.status&&c.responseText&&(b=c.requestid,a=J[b])&&(a.readyState=4,a.status=c.status,a.responseText=c.responseText,a.response=c.responseText,a.onreadystatechange(),delete J[b])}}function C(a){this.type=a}
function fa(a,c,b,d,e,n,x){a.onsuccess=n;a.b=x;v({from:"IFrameProxyRequest",type:a.type,url:c,obj:b,async:d,withcred:e},"*")}C.prototype.abort=function(){C.postMessage({from:"IFrameProxyRequest",abort:!0},"*")};function ja(a){this.name=a}ja.prototype.get=function(){return ka(this)?localStorage.getItem(this.name):null};
function ka(a){var c=localStorage.getItem(a.name+"_exp");if(!c)return!1;c=new Date(c);return c<new Date?(localStorage.removeItem(a.name),localStorage.removeItem(a.name+"_exp"),!1):!0}function L(a){this.a=a.document;this.c=a;var c=[["hidden","visibilitychange"],["mozHidden","mozvisibilitychange"],["webkitHidden","webkitvisibilitychange"],["msHidden","msvisibilitychange"],["oHidden","ovisibilitychange"]];for(a=0;a<c.length;a++)if(c[a][0]in document){this.b=c[a][0];this.f=c[a][1];break}}
function K(a){var c=new RegExp(/^(?:[a-z]{1,5}:\/\/|)([^\:\?\/]*)/),b=a.match(/^\d+\.\d+.\d+.\d+$/),c=c.exec(a);if(b)return a;if(null===c||2!==c.length)return"about:"!==a&&D("ERR_DOMAINPARSE: "+a),null;b=c[1].split(".");return 1===b.length?(D("ERR_DOMAINPARSE: "+a),null):2===b.length?b.join("."):3===b.length?b.slice(1).join("."):4>=b[b.length-2].length?b.slice(b.length-3).join("."):b.slice(b.length-2).join(".")}L.prototype.getElementsByTagName=function(a){return this.a.getElementsByTagName(a)};
function la(a,c){var b=[["src","//www.glancecdn.net/cobrowse/js/sockjs1.0.2.min.js"]],d=a.a.createElement("script");c&&d.addEventListener("load",c);d.setAttribute("type","text/javascript");d.setAttribute("charset","UTF-8");for(var e=0;e<b.length;e++)d.setAttribute(b[e][0],b[e][1]);a.a.head.appendChild(d)}function M(a){return void 0===a.b?!1:a.a[a.b]}function ma(a,c){a.addEventListener(a.f,c)}L.prototype.head=function(){return void 0!==this.a.head?this.a.head:this.getElementsByTagName("head")[0]};
L.prototype.addEventListener=function(a,c,b){this.a.addEventListener(a,c,b)};L.prototype.removeEventListener=function(a,c,b){this.a.removeEventListener(a,c,b)};function z(a){window.console&&window.console.error&&window.console.error(a)}function D(a){window.console&&window.console.log&&window.console.log(a)};function na(a,c){var b;a&&(b=b||Object.keys(a),b.forEach(function(b){void 0!==a[b]&&(c[b]=a[b])}))}function oa(a){var c={};if(!a)return c;var b=0;for(a=a.attributes;b<a.length;b++){var d=a[b].nodeName.match(/data-(.*)/);d&&2===d.length&&(c[d[1]]=a[b].nodeValue)}return c}function pa(){var a=window.GLANCE_COBROWSE?window.GLANCE_COBROWSE:{},c=document.getElementById("glance-cobrowse"),b=oa(document.getElementById("cobrowsescript")),c=oa(c);na(b,a);na(c,a);return a};function O(){}function qa(a,c){a.u="undefined"===typeof WebSocket;a.b={};a.b.presenceserver="presence.glance.net";a.b.ws="www.glance.net";a.g=new L(window);y(pa(),a.b);y(c,a.b);a.s=[];a.f=P;a.v=new ja("glance_presence");var b;b=a.v;ka(b)?(b=localStorage.getItem(b.name),b=JSON.parse(b)):b=null;b&&(a.c=b.direct)}var P=1;O.prototype.C=function(){};
function Q(a,c,b,d,e){if(c&&!a.c)k("ERR_NODIRECTSERVER");else{var n=(e||"https")+"://"+(c?a.c:a.b.presenceserver)+"/"+b;d&&(n+="?",["groupid","visitorid"].forEach(function(b){n+=b+"="+a.b[b]+"&"}));return n}}O.prototype.F=function(a){ra(this,"findvisitor","GET",a)};
function R(a){k("connecting to "+a.c);var c=!1;a.u&&!window.SockJS?la(a.g,function(){c||(c=!0,window.SockJS?R(a):k("ERR_NOSOCKJS"))}):(a.a&&a.a.close(),a.a=ta(a),a.a.R=a.c,a.a.onopen=function(){a.a.l({type:"connect",authorization:void 0,groupid:a.b.groupid,visitorid:a.b.visitorid,version:aa});a.s.forEach(function(b){a.a.l(b)});a.s=[];a.f=3},a.a.D=function(b){k("received:"+r(b));var c=b.mtype||b.type,e=b.data;switch(c){case "connected":a.h||(a.h=window.setInterval(function(){a.a.l({type:"k"})},1E3*
b.keepalive));break;case "invoke":"visitor"===a.U&&ea(e);break;default:if(a["on"+c])a["on"+c](e)}},a.a.onclose=function(b){a.a===this&&(k("Connection closed, reconnecting",this.J(b),this.K(b)),ua(a),window.setTimeout(function(){a.connect()},2E3))},a.a.onerror=function(b){a.a===this&&(a.u=!0,a.a.onclose(b))})}
function ra(a,c,b,d){var e=new B("JSON");e.c=void 0;e.method=b;k(c,JSON.stringify(d));G(e,Q(a,!1,c,!0),d.data?d.data:{},!0,!0,function(b){b.direct&&(a.c=b.direct,a.C());a.a&&a.c!=a.a.R&&R(a);if(d&&d.onsuccess)d.onsuccess(b)},function(b,e){k(c,"failed");if(d.onfail)d.onfail(e);else va(a,{error:"connfail",detail:e})})}function S(a){a.a&&a.a.close();ua(a)}function ua(a){a.h&&(window.clearInterval(a.h),delete a.h);a.f=P;delete a.a;delete a.c}
function T(a,c){k("sending",c.type,a.f);3===a.f?a.a.l(c):(a.s.push(c),a.connect())}O.prototype.connect=function(){if(!this.b.visitorid)k("CONN_NOVISITORID");else if(this.f===P){this.f=2;var a=this;this.onscaledown=function(){a.disconnect();a.connect()};this.c?R(this):this.F({onsuccess:function(){k("found visitor, connect");R(a)},onfail:function(c){va(a,{error:"connfail",detail:c});a.f=P}})}};O.prototype.connect=O.prototype.connect;O.prototype.disconnect=function(){S(this)};
O.prototype.disconnect=O.prototype.disconnect;function va(a,c){k("Error: ",JSON.stringify(c));if(a.onerror)a.onerror(c)}O.prototype.I=function(a,c){T(this,{type:a,data:c})};O.prototype.fire=O.prototype.I;function U(a){qa(this,a);this.U="visitor";this.g=new L(window);var c=this;A("focus",function(){c.o=!1;c.S&&c.w()});ma(this.g,function(){k("visibility:",M(c.g)?"hidden":"visible");if(3===c.f&&!c.o){var a={type:"visibility"};a.data={visibility:M(c.g)?"hidden":"visible"};T(c,a);M(c.g)&&S(c)}});ha(this.b.presenceserver+"/static");U.instance=this}var wa=U,V=["GLANCE","Presence","Visitor"],W=this;V[0]in W||!W.execScript||W.execScript("var "+V[0]);
for(var X;V.length&&(X=V.shift());)V.length||void 0===wa?W[X]?W=W[X]:W=W[X]={}:W[X]=wa;U.prototype=new O;U.prototype.C=function(){var a={};a.direct=this.c;var c=this.v,b=new Date;b.setUTCHours(b.getUTCHours()+8);localStorage.setItem(c.name,r(a));localStorage.setItem(c.name+"_exp",b.toGMTString());a=this.v;c=new Date;c.setUTCMinutes(c.getUTCMinutes()+20);localStorage.setItem(a.name+"_exp",c.toGMTString())};
U.prototype.w=function(a){if(this.b.visitorid){var c={};y(this.b,c,["groupid","visitorid"]);var b={},d;for(d in this.b)d.indexOf("user-")||(b[d.substring(5)]=this.b[d]);b.url=window.location.href;b.browser=q.name;b.browserver=q.version;b.platform=q.m.name;(a=a&&a.data)&&y(a,b);c.data=b;this.o||(b={type:"presence"},b.data=c.data,T(this,b),this.S=!0)}else k("PRES_NOVISITORID")};U.prototype.presence=U.prototype.w;
function ta(a){a.u?a=da(Q(a,!0,"visitor")):(a=Q(a,!0,"visitorws",!1,"wss"),a=new WebSocket(a),t(a));return a}U.prototype.F=function(a){a.data={};ra(this,"presence","POST",a)};U.prototype.onblur=function(){k("BLURRED");this.o=!0;S(this)};var xa=!1;function Y(){if(!xa){xa=!0;var a=pa();if(a.presence&&(ha((a.ws||"www.glance.net")+"/cobrowse"),"api"!==a.presence)){var c=new U;c.onerror=function(a){"connfail"===a.error&&window.setTimeout(function(){c.connect()},5E3)};c.w()}}}var Z=new L(window);
Z.c.addEventListener&&(document.readyState.match(/complete/)?Y():(Z.c.addEventListener("load",Y),Z.a.addEventListener("DOMContentLoaded",Y,!1)));}).call(window);