<!DOCTYPE html>
<html lang="en">
<head>
  <meta id="bb-bootstrap" data-current-user="{&quot;username&quot;: &quot;jaospina28&quot;, &quot;displayName&quot;: &quot;Jhonny Andres Ospina Loaiza&quot;, &quot;uuid&quot;: &quot;{854b30f1-ea48-4875-846c-414d6493907c}&quot;, &quot;firstName&quot;: &quot;Jhonny Andres Ospina Loaiza&quot;, &quot;hasPremium&quot;: false, &quot;lastName&quot;: &quot;&quot;, &quot;avatarUrl&quot;: &quot;https://bitbucket.org/account/jaospina28/avatar/32/?ts=1517936248&quot;, &quot;isTeam&quot;: false, &quot;isSshEnabled&quot;: false, &quot;isKbdShortcutsEnabled&quot;: true, &quot;id&quot;: 8443865, &quot;isAuthenticated&quot;: true}"
data-atlassian-id="557058:87d28f5a-788c-4664-877e-e7aae2899f22" />
  
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta charset="utf-8">
  <title>
  jaospina28 / Portal_Web 
  / source  / js / sweetalert.js
 &mdash; Bitbucket
</title>
  <script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VwMGVVZSGwIIUFBQDwU="};window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o||n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({1:[function(t,n,e){function r(t){try{s.console&&console.log(t)}catch(n){}}var o,i=t("ee"),a=t(15),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,n,e){r(e.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,n){return t}).join(", ")))},{}],2:[function(t,n,e){function r(t,n,e,r,s){try{p?p-=1:o(s||new UncaughtException(t,n,e),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,n,e){this.message=t||"Uncaught error with no additional information",this.sourceURL=n,this.line=e}function o(t,n){var e=n?null:c.now();i("err",[t,e])}var i=t("handle"),a=t(16),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(8),t(7),"addEventListener"in window&&t(5),c.xhrWrappable&&t(9),d=!0)}s.on("fn-start",function(t,n,e){d&&(p+=1)}),s.on("fn-err",function(t,n,e){d&&!e[l]&&(f(e,l,function(){return!0}),this.thrown=!0,o(e))}),s.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,n,e){t("loader").features.ins=!0},{}],4:[function(t,n,e){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),s=t(7),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState",g=t("loader");g.features.stn=!0,t(6);var b=NREUM.o.EV;o.on(m,function(t,n){var e=t[0];e instanceof b&&(this.bstStart=g.now())}),o.on(w,function(t,n){var e=t[0];e instanceof b&&i("bst",[e,n,this.bstStart,g.now()])}),a.on(m,function(t,n,e){this.bstStart=g.now(),this.bstType=e}),a.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),this.bstType])}),s.on(m,function(){this.bstStart=g.now()}),s.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=g.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,n,e){function r(t){for(var n=t;n&&!n.hasOwnProperty(u);)n=Object.getPrototypeOf(n);n&&o(n)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,n){return t[1]}var a=t("ee").get("events"),s=t(18)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";n.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,n){var e=t[1],r=c(e,"nr@wrapped",function(){function t(){if("function"==typeof e.handleEvent)return e.handleEvent.apply(e,arguments)}var n={object:t,"function":e}[typeof e];return n?s(n,"fn-",null,n.name||"anonymous"):e});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,n,e){var r=t("ee").get("history"),o=t(18)(r);n.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,n,e){var r=t("ee").get("raf"),o=t(18)(r),i="equestAnimationFrame";n.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,n,e){function r(t,n,e){t[0]=a(t[0],"fn-",null,e)}function o(t,n,e){this.method=e,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,e)}var i=t("ee").get("timer"),a=t(18)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";n.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,n,e){function r(t,n){d.inPlace(n,["onreadystatechange"],"fn-",s)}function o(){var t=this,n=u.context(t);t.readyState>3&&!n.resolved&&(n.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){g.push(t),h&&(x?x.then(a):w?w(a):(E=-E,O.data=E))}function a(){for(var t=0;t<g.length;t++)r([],g[t]);g.length&&(g=[])}function s(t,n){return n}function c(t,n){for(var e in t)n[e]=t[e];return n}t(5);var f=t("ee"),u=f.get("xhr"),d=t(18)(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],g=[];n.exports=u;var b=window.XMLHttpRequest=function(t){var n=new p(t);try{u.emit("new-xhr",[n],n),n.addEventListener(v,o,!1)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}return n};if(c(p,b),b.prototype=p.prototype,d.inPlace(b.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,n){r(t,n),i(n)}),u.on("open-xhr-start",r),h){var x=m&&m.resolve();if(!w&&!m){var E=1,O=document.createTextNode(E);new h(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],10:[function(t,n,e){function r(t){var n=this.params,e=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!n.aborted){if(e.duration=a.now()-this.startTime,4===t.readyState){n.status=t.status;var i=o(t,this.lastSize);if(i&&(e.rxSize=i),this.sameOrigin){var c=t.getResponseHeader("X-NewRelic-App-Data");c&&(n.cat=c.split(", ").pop())}}else n.status=0;e.cbTime=this.cbTime,f.emit("xhr-done",[t],t),s("xhr",[n,e,this.startTime])}}}function o(t,n){var e=t.responseType;if("json"===e&&null!==n)return n;var r="arraybuffer"===e||"blob"===e||"json"===e?t.response:t.responseText;return h(r)}function i(t,n){var e=c(n),r=t.params;r.host=e.hostname+":"+e.port,r.pathname=e.pathname,t.sameOrigin=e.sameOrigin}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=r,n.ended=!1,n.xhrGuids={},n.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){n.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,n){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&n.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,n){var e=this.metrics,r=t[0],o=this;if(e&&r){var i=h(r);i&&(e.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof n.onload))&&o.end(n)}catch(e){try{f.emit("internal-error",[e])}catch(r){}}};for(var s=0;s<d;s++)n.addEventListener(u[s],this.listener,!1)}),f.on("xhr-cb-time",function(t,n,e){this.cbTime+=t,n?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof e.onload||this.end(e)}),f.on("xhr-load-added",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&!this.xhrGuids[e]&&(this.xhrGuids[e]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&this.xhrGuids[e]&&(delete this.xhrGuids[e],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],n)}),f.on("removeEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],n)}),f.on("fn-start",function(t,n,e){n instanceof m&&("onload"===e&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),f.on("fn-end",function(t,n){this.xhrCbStart&&f.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,n],n)})}},{}],11:[function(t,n,e){n.exports=function(t){var n=document.createElement("a"),e=window.location,r={};n.href=t,r.port=n.port;var o=n.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=n.hostname||e.hostname,r.pathname=n.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!n.protocol||":"===n.protocol||n.protocol===e.protocol,a=n.hostname===document.domain&&n.port===e.port;return r.sameOrigin=i&&(!n.hostname||a),r}},{}],12:[function(t,n,e){function r(){}function o(t,n,e){return function(){return i(t,[f.now()].concat(s(arguments)),n?null:this,e),n?void 0:this}}var i=t("handle"),a=t(15),s=t(16),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,n){u[n]=o(l+n,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),n.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,n){var e={},r=this,o="function"==typeof n;return i(p+"tracer",[f.now(),t,e],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],e),o)try{return n.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],e),t}finally{c.emit("fn-end",[f.now()],e)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,n){h[n]=o(p+n)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now()])}},{}],13:[function(t,n,e){n.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(n){return}}}},{}],14:[function(t,n,e){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),n.exports=r},{}],15:[function(t,n,e){function r(t,n){var e=[],r="",i=0;for(r in t)o.call(t,r)&&(e[i]=n(r,t[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],16:[function(t,n,e){function r(t,n,e){n||(n=0),"undefined"==typeof e&&(e=t?t.length:0);for(var r=-1,o=e-n||0,i=Array(o<0?0:o);++r<o;)i[r]=t[n+r];return i}n.exports=r},{}],17:[function(t,n,e){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],18:[function(t,n,e){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;n.exports=function(t,n){function e(t,n,e,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof e?e(r,a):e||{}}catch(f){l([f,"",[r,a,o],s])}u(n+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(n+"err",[r,a,d],s),d}finally{u(n+"end",[r,a,c],s)}}return r(t)?t:(n||(n=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function u(e,r,o){if(!c||n){var i=c;c=!0;try{t.emit(e,r,o,n)}catch(a){l([a,e,r,o])}c=i}}function d(t,n){if(Object.defineProperty&&Object.keys)try{var e=Object.keys(t);return e.forEach(function(e){Object.defineProperty(n,e,{get:function(){return t[e]},set:function(n){return t[e]=n,n}})}),n}catch(r){l([r])}for(var o in t)s.call(t,o)&&(n[o]=t[o]);return n}function l(n){try{t.emit("internal-error",n)}catch(e){}}return t||(t=o),e.inPlace=f,e.flag=a,e}},{}],ee:[function(t,n,e){function r(){}function o(t){function n(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function e(e,r,o,i){if(!l.aborted||i){t&&t(e,r,o);for(var a=n(o),s=h(e),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[y[e]];return d&&d.push([g,e,r,a]),a}}function p(t,n){v[t]=h(t).concat(n)}function h(t){return v[t]||[]}function m(t){return d[t]=d[t]||o(e)}function w(t,n){f(t,function(t,e){n=n||"feature",y[e]=n,n in u||(u[n]=[])})}var v={},y={},g={on:p,emit:e,get:m,listeners:h,context:n,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s="nr@context",c=t("gos"),f=t(15),u={},d={},l=n.exports=o();l.backlog=u},{}],gos:[function(t,n,e){function r(t,n,e){if(o.call(t,n))return t[n];var r=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(t,n,e){function r(t,n,e,r){o.buffer([t],r),o.emit(t,n,e)}var o=t("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(t,n,e){function r(t){var n=typeof t;return!t||"object"!==n&&"function"!==n?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");n.exports=r},{}],loader:[function(t,n,e){function r(){if(!x++){var t=b.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&n))return u.abort();f(y,function(n,e){t[n]||(t[n]=e)}),c("mark",["onload",a()+b.offset],null,"api");var e=l.createElement("script");e.src="https://"+t.agent,n.parentNode.insertBefore(e,n)}}function o(){"complete"===l.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(15),u=t("ee"),d=window,l=d.document,p="addEventListener",h="attachEvent",m=d.XMLHttpRequest,w=m&&m.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:m,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1071.min.js"},g=m&&w&&w[p]&&!/CriOS/.test(navigator.userAgent),b=n.exports={offset:s,now:a,origin:v,features:{},xhrWrappable:g};t(12),l[p]?(l[p]("DOMContentLoaded",i,!1),d[p]("load",r,!1)):(l[h]("onreadystatechange",o),d[h]("onload",r)),c("mark",["firstbyte",s],null,"api");var x=0,E=t(17)},{}]},{},["loader",2,10,4,3]);</script>
  


<meta id="bb-canon-url" name="bb-canon-url" content="https://bitbucket.org">
<meta name="bb-api-canon-url" content="https://api.bitbucket.org">
<meta name="apitoken" content="{&quot;token&quot;: &quot;pLm5CNK4wEEJJlJhaUP3jb-dIPw8z6QtZEdvmXHhcq9z9kxl9bwgZzdTk_RJz21suzKmCKgJS_kTVokRxH4iffJ72cQSmNYmmohTcLi3VT6VCXY=&quot;, &quot;expiration&quot;: 1517936640.168114}">

<meta name="bb-commit-hash" content="06e6aed05468">
<meta name="bb-app-node" content="app-167">
<meta name="bb-view-name" content="bitbucket.apps.repo2.views.filebrowse">
<meta name="ignore-whitespace" content="False">
<meta name="tab-size" content="None">
<meta name="locale" content="en">

<meta name="application-name" content="Bitbucket">
<meta name="apple-mobile-web-app-title" content="Bitbucket">


<meta name="theme-color" content="#0049B0">
<meta name="msapplication-TileColor" content="#0052CC">
<meta name="msapplication-TileImage" content="https://d301sr5gafysq2.cloudfront.net/06e6aed05468/img/logos/bitbucket/mstile-150x150.png">
<link rel="apple-touch-icon" sizes="180x180" type="image/png" href="https://d301sr5gafysq2.cloudfront.net/06e6aed05468/img/logos/bitbucket/apple-touch-icon.png">
<link rel="icon" sizes="192x192" type="image/png" href="https://d301sr5gafysq2.cloudfront.net/06e6aed05468/img/logos/bitbucket/android-chrome-192x192.png">

<link rel="icon" sizes="16x16 24x24 32x32 64x64" type="image/x-icon" href="/favicon.ico?v=2">
<link rel="mask-icon" href="https://d301sr5gafysq2.cloudfront.net/06e6aed05468/img/logos/bitbucket/safari-pinned-tab.svg" color="#0052CC">

<link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="Bitbucket">

  <meta name="description" content="">
  
  
    
  



  <link rel="stylesheet" href="https://d301sr5gafysq2.cloudfront.net/06e6aed05468/css/entry/vendor.css" />
<link rel="stylesheet" href="https://d301sr5gafysq2.cloudfront.net/06e6aed05468/css/entry/app.css" />



  <link rel="stylesheet" href="https://d301sr5gafysq2.cloudfront.net/06e6aed05468/css/entry/adg3.css">
  
  <script nonce="TpWhephoCu4IX31D">
  window.__sentry__ = {"dsn": "https://ea49358f525d4019945839a3d7a8292a@sentry.io/159509", "release": "06e6aed05468 (production)", "tags": {"project": "bitbucket-core"}, "environment": "production"};
</script>
<script src="https://d301sr5gafysq2.cloudfront.net/06e6aed05468/dist/webpack/sentry.js" nonce="TpWhephoCu4IX31D"></script>
  <script src="https://d301sr5gafysq2.cloudfront.net/06e6aed05468/dist/webpack/early.js" nonce="TpWhephoCu4IX31D"></script>
  
  
  
    <link href="/jaospina28/portal_web/rss?token=5b58fb49767e7210aead1497f71c3724" rel="alternate nofollow" type="application/rss+xml" title="RSS feed for Portal_Web" />

</head>
<body class="production adg3  "
    data-static-url="https://d301sr5gafysq2.cloudfront.net/06e6aed05468/"
data-base-url="https://bitbucket.org"
data-no-avatar-image="https://d301sr5gafysq2.cloudfront.net/06e6aed05468/img/default_avatar/user_blue.svg"
data-current-user="{&quot;username&quot;: &quot;jaospina28&quot;, &quot;displayName&quot;: &quot;Jhonny Andres Ospina Loaiza&quot;, &quot;uuid&quot;: &quot;{854b30f1-ea48-4875-846c-414d6493907c}&quot;, &quot;firstName&quot;: &quot;Jhonny Andres Ospina Loaiza&quot;, &quot;hasPremium&quot;: false, &quot;lastName&quot;: &quot;&quot;, &quot;avatarUrl&quot;: &quot;https://bitbucket.org/account/jaospina28/avatar/32/?ts=1517936248&quot;, &quot;isTeam&quot;: false, &quot;isSshEnabled&quot;: false, &quot;isKbdShortcutsEnabled&quot;: true, &quot;id&quot;: 8443865, &quot;isAuthenticated&quot;: true}"
data-atlassian-id="{&quot;loginStatusUrl&quot;: &quot;https://id.atlassian.com/profile/rest/profile&quot;}"
data-settings="{&quot;MENTIONS_MIN_QUERY_LENGTH&quot;: 3}"

data-current-repo="{&quot;scm&quot;: &quot;git&quot;, &quot;readOnly&quot;: false, &quot;mainbranch&quot;: {&quot;name&quot;: &quot;master&quot;}, &quot;uuid&quot;: &quot;65a6f3db-1282-419e-9e8d-f1d116ec3dae&quot;, &quot;language&quot;: &quot;&quot;, &quot;owner&quot;: {&quot;username&quot;: &quot;jaospina28&quot;, &quot;uuid&quot;: &quot;854b30f1-ea48-4875-846c-414d6493907c&quot;, &quot;isTeam&quot;: false}, &quot;fullslug&quot;: &quot;jaospina28/portal_web&quot;, &quot;slug&quot;: &quot;portal_web&quot;, &quot;id&quot;: 24569326, &quot;pygmentsLanguage&quot;: null}"
data-current-cset="7e033726378897a38219afca9750ee1301297377"





data-browser-monitoring="true"
data-switch-create-pullrequest-commit-status="true"




>
<div id="page">
  
    <div id="adg3-navigation"
  
  
  
  >
  <nav class="skeleton-nav">
    <div class="skeleton-nav--left">
      <div class="skeleton-nav--left-top">
        <ul class="skeleton-nav--items">
          <li></li>
          <li></li>
          <li></li>
          <li class="skeleton--icon"></li>
          <li class="skeleton--icon-sub"></li>
          <li class="skeleton--icon-sub"></li>
          <li class="skeleton--icon-sub"></li>
          <li class="skeleton--icon-sub"></li>
          <li class="skeleton--icon-sub"></li>
          <li class="skeleton--icon-sub"></li>
        </ul>
      </div>
      <div class="skeleton-nav--left-bottom">
        <div class="skeleton-nav--left-bottom-wrapper">
          <div class="skeleton-nav--item-help"></div>
          <div class="skeleton-nav--item-profile"></div>
        </div>
      </div>
    </div>
    <div class="skeleton-nav--right">
      <ul class="skeleton-nav--items-wide">
        <li class="skeleton--icon-logo-container">
          <div class="skeleton--icon-container"></div>
          <div class="skeleton--icon-description"></div>
          <div class="skeleton--icon-logo"></div>
        </li>
        <li>
          <div class="skeleton--icon-small"></div>
          <div class="skeleton-nav--item-wide-content"></div>
        </li>
        <li>
          <div class="skeleton--icon-small"></div>
          <div class="skeleton-nav--item-wide-content"></div>
        </li>
        <li>
          <div class="skeleton--icon-small"></div>
          <div class="skeleton-nav--item-wide-content"></div>
        </li>
        <li>
          <div class="skeleton--icon-small"></div>
          <div class="skeleton-nav--item-wide-content"></div>
        </li>
        <li>
          <div class="skeleton--icon-small"></div>
          <div class="skeleton-nav--item-wide-content"></div>
        </li>
        <li>
          <div class="skeleton--icon-small"></div>
          <div class="skeleton-nav--item-wide-content"></div>
        </li>
      </ul>
    </div>
  </nav>
</div>

    <div id="wrapper">
      
  


      
  <div id="nps-survey-container"></div>

 

      
  

<div id="account-warning" data-module="header/account-warning"
  data-unconfirmed-addresses="false"
  data-no-addresses="false"
  
></div>



      
  
<header id="aui-message-bar">
  
</header>


      <div id="content" role="main">

        
          <header class="app-header">
            <div class="app-header--primary">
              
                <div class="app-header--context">
                  <div class="app-header--breadcrumbs">
                    
  <ol class="aui-nav aui-nav-breadcrumbs">
    <li>
  <a href="/jaospina28/">Jhonny Andres Ospina Loaiza</a>
</li>

<li>
  <a href="/jaospina28/portal_web">Portal_Web</a>
</li>
    
  <li>
    <a href="/jaospina28/portal_web/src">
      Source
    </a>
  </li>

  </ol>

                  </div>
                  <h1 class="app-header--heading">
                    <span class="file-path">sweetalert.js</span>
                  </h1>
                </div>
              
            </div>

            <div class="app-header--secondary">
              
                
              
            </div>
          </header>
        

        
        
  <div class="aui-page-panel ">
    <div class="hidden">
  
  
  </div>
    <div class="aui-page-panel-inner">

      <div
        id="repo-content"
        class="aui-page-panel-content forks-enabled can-create"
        data-module="repo/index"
        
      >
        
        
  <div id="source-container" class="maskable" data-module="repo/source/index">
    



<header id="source-path">
  
    <div class="labels labels-csv">
      <div class="aui-buttons">
        <button data-branches-tags-url="/api/1.0/repositories/jaospina28/portal_web/branches-tags"
                data-module="components/branch-dialog"
                
                class="aui-button branch-dialog-trigger" title="master">
          
            
              <span class="aui-icon aui-icon-small aui-iconfont-devtools-branch">Branch</span>
            
            <span class="name">master</span>
          
          <span class="aui-icon-dropdown"></span>
        </button>
        <button class="aui-button" id="checkout-branch-button"
                title="Check out this branch">
          <span class="aui-icon aui-icon-small aui-iconfont-devtools-clone">Check out branch</span>
          <span class="aui-icon-dropdown"></span>
        </button>
      </div>
      
    
    
  
    </div>
  
  
    <div class="secondary-actions">
      <div class="aui-buttons">
        
          <a href="/jaospina28/portal_web/src/7e0337263788/js/sweetalert.js?at=master"
            class="aui-button pjax-trigger source-toggle" aria-pressed="true">
            Source
          </a>
          <a href="/jaospina28/portal_web/diff/js/sweetalert.js?diff2=7e0337263788&at=master"
            class="aui-button pjax-trigger diff-toggle"
            title="Diff to previous change">
            Diff
          </a>
          <a href="/jaospina28/portal_web/history-node/7e0337263788/js/sweetalert.js?at=master"
            class="aui-button pjax-trigger history-toggle">
            History
          </a>
        
      </div>

      
      

    </div>
  
  <h1>
    
      
        <a href="/jaospina28/portal_web/src/7e0337263788?at=master"
          class="pjax-trigger root" title="jaospina28/portal_web at 7e0337263788">Portal_Web</a> /
      
      
        
          
            <a href="/jaospina28/portal_web/src/7e0337263788/js/?at=master"
              class="pjax-trigger directory-name">js</a> /
          
        
      
        
          
            <span class="file-name">sweetalert.js</span>
          
        
      
    
  </h1>
  
    
    
  
  <div class="clearfix"></div>
</header>


  
    
  

  <div id="editor-container" class="maskable"
       data-module="repo/source/editor"
       data-owner="jaospina28"
       data-slug="portal_web"
       data-is-writer="true"
       data-has-push-access="true"
       data-hash="7e033726378897a38219afca9750ee1301297377"
       data-branch="master"
       data-path="js/sweetalert.js"
       data-source-url="/api/internal/repositories/jaospina28/portal_web/src/7e033726378897a38219afca9750ee1301297377/js/sweetalert.js">
    <div id="source-view" class="file-source-container" data-module="repo/source/view-file" data-is-lfs="false">
      <div class="toolbar">
        <div class="primary">
          <div class="aui-buttons">
            
              <button id="file-history-trigger" class="aui-button aui-button-light changeset-info"
                      data-changeset="7e033726378897a38219afca9750ee1301297377"
                      data-path="js/sweetalert.js"
                      data-current="7e033726378897a38219afca9750ee1301297377">
                 

  <div class="aui-avatar aui-avatar-xsmall">
    <div class="aui-avatar-inner">
      <img src="https://d301sr5gafysq2.cloudfront.net/06e6aed05468/img/default_avatar/user_blue.svg">
    </div>
  </div>
  <span class="changeset-hash">7e03372</span>
  <time datetime="2017-05-09T20:54:58+00:00" class="timestamp"></time>
  <span class="aui-icon-dropdown"></span>

              </button>
            
          </div>
          
          <a href="/jaospina28/portal_web/full-commit/7e0337263788/js/sweetalert.js" id="full-commit-link"
             title="View full commit 7e03372">Full commit</a>
        </div>
        <div class="secondary">
          
          <div class="aui-buttons">
            
              <a href="/jaospina28/portal_web/annotate/7e033726378897a38219afca9750ee1301297377/js/sweetalert.js?at=master"
                 class="aui-button aui-button-light pjax-trigger blame-link">Blame</a>
              
            
            <a href="/jaospina28/portal_web/raw/7e033726378897a38219afca9750ee1301297377/js/sweetalert.js" class="aui-button aui-button-light raw-link">Raw</a>
          </div>
          
            

            <div class="aui-buttons">
              
              <button id="file-edit-button" class="edit-button aui-button aui-button-light aui-button-split-main"
                  

                  >
                Edit
                
              </button>
              <button id="file-more-actions-button" class="aui-button aui-button-light aui-dropdown2-trigger aui-button-split-more" aria-owns="split-container-dropdown" aria-haspopup="true"
                  >
                More file actions
              </button>
            </div>
            <div id="split-container-dropdown" class="aui-dropdown2 aui-style-default" data-container="#editor-container">
              <ul class="aui-list-truncate">
                <li><a href="#" data-module="repo/source/rename-file" class="rename-link">Rename</a></li>
                <li><a href="#" data-module="repo/source/delete-file" class="delete-link">Delete</a></li>
              </ul>
            </div>
          
        </div>

        <div id="fileview-dropdown"
            class="aui-dropdown2 aui-style-default"
            data-fileview-container="#fileview-container"
            
            
            data-fileview-button="#fileview-trigger"
            data-module="connect/fileview">
          <div class="aui-dropdown2-section">
            <ul>
              <li>
                <a class="aui-dropdown2-radio aui-dropdown2-checked"
                    data-fileview-id="-1"
                    data-fileview-loaded="true"
                    data-fileview-target="#fileview-original"
                    data-fileview-connection-key=""
                    data-fileview-module-key="file-view-default">
                  Default File Viewer
                </a>
              </li>
              
            </ul>
          </div>
        </div>

        <div class="clearfix"></div>
      </div>
      <div id="fileview-container">
        <div id="fileview-original"
            class="fileview"
            data-module="repo/source/highlight-lines"
            data-fileview-loaded="true">
          


  
    <div class="file-source">
      <table class="codehilite highlighttable"><tr><td class="linenos"><div class="linenodiv"><pre><a href="#sweetalert.js-1">  1</a>
<a href="#sweetalert.js-2">  2</a>
<a href="#sweetalert.js-3">  3</a>
<a href="#sweetalert.js-4">  4</a>
<a href="#sweetalert.js-5">  5</a>
<a href="#sweetalert.js-6">  6</a>
<a href="#sweetalert.js-7">  7</a>
<a href="#sweetalert.js-8">  8</a>
<a href="#sweetalert.js-9">  9</a>
<a href="#sweetalert.js-10"> 10</a>
<a href="#sweetalert.js-11"> 11</a>
<a href="#sweetalert.js-12"> 12</a>
<a href="#sweetalert.js-13"> 13</a>
<a href="#sweetalert.js-14"> 14</a>
<a href="#sweetalert.js-15"> 15</a>
<a href="#sweetalert.js-16"> 16</a>
<a href="#sweetalert.js-17"> 17</a>
<a href="#sweetalert.js-18"> 18</a>
<a href="#sweetalert.js-19"> 19</a>
<a href="#sweetalert.js-20"> 20</a>
<a href="#sweetalert.js-21"> 21</a>
<a href="#sweetalert.js-22"> 22</a>
<a href="#sweetalert.js-23"> 23</a>
<a href="#sweetalert.js-24"> 24</a>
<a href="#sweetalert.js-25"> 25</a>
<a href="#sweetalert.js-26"> 26</a>
<a href="#sweetalert.js-27"> 27</a>
<a href="#sweetalert.js-28"> 28</a>
<a href="#sweetalert.js-29"> 29</a>
<a href="#sweetalert.js-30"> 30</a>
<a href="#sweetalert.js-31"> 31</a>
<a href="#sweetalert.js-32"> 32</a>
<a href="#sweetalert.js-33"> 33</a>
<a href="#sweetalert.js-34"> 34</a>
<a href="#sweetalert.js-35"> 35</a>
<a href="#sweetalert.js-36"> 36</a>
<a href="#sweetalert.js-37"> 37</a>
<a href="#sweetalert.js-38"> 38</a>
<a href="#sweetalert.js-39"> 39</a>
<a href="#sweetalert.js-40"> 40</a>
<a href="#sweetalert.js-41"> 41</a>
<a href="#sweetalert.js-42"> 42</a>
<a href="#sweetalert.js-43"> 43</a>
<a href="#sweetalert.js-44"> 44</a>
<a href="#sweetalert.js-45"> 45</a>
<a href="#sweetalert.js-46"> 46</a>
<a href="#sweetalert.js-47"> 47</a>
<a href="#sweetalert.js-48"> 48</a>
<a href="#sweetalert.js-49"> 49</a>
<a href="#sweetalert.js-50"> 50</a>
<a href="#sweetalert.js-51"> 51</a>
<a href="#sweetalert.js-52"> 52</a>
<a href="#sweetalert.js-53"> 53</a>
<a href="#sweetalert.js-54"> 54</a>
<a href="#sweetalert.js-55"> 55</a>
<a href="#sweetalert.js-56"> 56</a>
<a href="#sweetalert.js-57"> 57</a>
<a href="#sweetalert.js-58"> 58</a>
<a href="#sweetalert.js-59"> 59</a>
<a href="#sweetalert.js-60"> 60</a>
<a href="#sweetalert.js-61"> 61</a>
<a href="#sweetalert.js-62"> 62</a>
<a href="#sweetalert.js-63"> 63</a>
<a href="#sweetalert.js-64"> 64</a>
<a href="#sweetalert.js-65"> 65</a>
<a href="#sweetalert.js-66"> 66</a>
<a href="#sweetalert.js-67"> 67</a>
<a href="#sweetalert.js-68"> 68</a>
<a href="#sweetalert.js-69"> 69</a>
<a href="#sweetalert.js-70"> 70</a>
<a href="#sweetalert.js-71"> 71</a>
<a href="#sweetalert.js-72"> 72</a>
<a href="#sweetalert.js-73"> 73</a>
<a href="#sweetalert.js-74"> 74</a>
<a href="#sweetalert.js-75"> 75</a>
<a href="#sweetalert.js-76"> 76</a>
<a href="#sweetalert.js-77"> 77</a>
<a href="#sweetalert.js-78"> 78</a>
<a href="#sweetalert.js-79"> 79</a>
<a href="#sweetalert.js-80"> 80</a>
<a href="#sweetalert.js-81"> 81</a>
<a href="#sweetalert.js-82"> 82</a>
<a href="#sweetalert.js-83"> 83</a>
<a href="#sweetalert.js-84"> 84</a>
<a href="#sweetalert.js-85"> 85</a>
<a href="#sweetalert.js-86"> 86</a>
<a href="#sweetalert.js-87"> 87</a>
<a href="#sweetalert.js-88"> 88</a>
<a href="#sweetalert.js-89"> 89</a>
<a href="#sweetalert.js-90"> 90</a>
<a href="#sweetalert.js-91"> 91</a>
<a href="#sweetalert.js-92"> 92</a>
<a href="#sweetalert.js-93"> 93</a>
<a href="#sweetalert.js-94"> 94</a>
<a href="#sweetalert.js-95"> 95</a>
<a href="#sweetalert.js-96"> 96</a>
<a href="#sweetalert.js-97"> 97</a>
<a href="#sweetalert.js-98"> 98</a>
<a href="#sweetalert.js-99"> 99</a>
<a href="#sweetalert.js-100">100</a>
<a href="#sweetalert.js-101">101</a>
<a href="#sweetalert.js-102">102</a>
<a href="#sweetalert.js-103">103</a>
<a href="#sweetalert.js-104">104</a>
<a href="#sweetalert.js-105">105</a>
<a href="#sweetalert.js-106">106</a>
<a href="#sweetalert.js-107">107</a>
<a href="#sweetalert.js-108">108</a>
<a href="#sweetalert.js-109">109</a>
<a href="#sweetalert.js-110">110</a>
<a href="#sweetalert.js-111">111</a>
<a href="#sweetalert.js-112">112</a>
<a href="#sweetalert.js-113">113</a>
<a href="#sweetalert.js-114">114</a>
<a href="#sweetalert.js-115">115</a>
<a href="#sweetalert.js-116">116</a>
<a href="#sweetalert.js-117">117</a>
<a href="#sweetalert.js-118">118</a>
<a href="#sweetalert.js-119">119</a>
<a href="#sweetalert.js-120">120</a>
<a href="#sweetalert.js-121">121</a>
<a href="#sweetalert.js-122">122</a>
<a href="#sweetalert.js-123">123</a>
<a href="#sweetalert.js-124">124</a>
<a href="#sweetalert.js-125">125</a>
<a href="#sweetalert.js-126">126</a>
<a href="#sweetalert.js-127">127</a>
<a href="#sweetalert.js-128">128</a>
<a href="#sweetalert.js-129">129</a>
<a href="#sweetalert.js-130">130</a>
<a href="#sweetalert.js-131">131</a>
<a href="#sweetalert.js-132">132</a>
<a href="#sweetalert.js-133">133</a>
<a href="#sweetalert.js-134">134</a>
<a href="#sweetalert.js-135">135</a>
<a href="#sweetalert.js-136">136</a>
<a href="#sweetalert.js-137">137</a>
<a href="#sweetalert.js-138">138</a>
<a href="#sweetalert.js-139">139</a>
<a href="#sweetalert.js-140">140</a>
<a href="#sweetalert.js-141">141</a>
<a href="#sweetalert.js-142">142</a>
<a href="#sweetalert.js-143">143</a>
<a href="#sweetalert.js-144">144</a>
<a href="#sweetalert.js-145">145</a>
<a href="#sweetalert.js-146">146</a>
<a href="#sweetalert.js-147">147</a>
<a href="#sweetalert.js-148">148</a>
<a href="#sweetalert.js-149">149</a>
<a href="#sweetalert.js-150">150</a>
<a href="#sweetalert.js-151">151</a>
<a href="#sweetalert.js-152">152</a>
<a href="#sweetalert.js-153">153</a>
<a href="#sweetalert.js-154">154</a>
<a href="#sweetalert.js-155">155</a>
<a href="#sweetalert.js-156">156</a>
<a href="#sweetalert.js-157">157</a>
<a href="#sweetalert.js-158">158</a>
<a href="#sweetalert.js-159">159</a>
<a href="#sweetalert.js-160">160</a>
<a href="#sweetalert.js-161">161</a>
<a href="#sweetalert.js-162">162</a>
<a href="#sweetalert.js-163">163</a>
<a href="#sweetalert.js-164">164</a>
<a href="#sweetalert.js-165">165</a>
<a href="#sweetalert.js-166">166</a>
<a href="#sweetalert.js-167">167</a>
<a href="#sweetalert.js-168">168</a>
<a href="#sweetalert.js-169">169</a>
<a href="#sweetalert.js-170">170</a>
<a href="#sweetalert.js-171">171</a>
<a href="#sweetalert.js-172">172</a>
<a href="#sweetalert.js-173">173</a>
<a href="#sweetalert.js-174">174</a>
<a href="#sweetalert.js-175">175</a>
<a href="#sweetalert.js-176">176</a>
<a href="#sweetalert.js-177">177</a>
<a href="#sweetalert.js-178">178</a>
<a href="#sweetalert.js-179">179</a>
<a href="#sweetalert.js-180">180</a>
<a href="#sweetalert.js-181">181</a>
<a href="#sweetalert.js-182">182</a>
<a href="#sweetalert.js-183">183</a>
<a href="#sweetalert.js-184">184</a>
<a href="#sweetalert.js-185">185</a>
<a href="#sweetalert.js-186">186</a>
<a href="#sweetalert.js-187">187</a>
<a href="#sweetalert.js-188">188</a>
<a href="#sweetalert.js-189">189</a>
<a href="#sweetalert.js-190">190</a>
<a href="#sweetalert.js-191">191</a>
<a href="#sweetalert.js-192">192</a>
<a href="#sweetalert.js-193">193</a>
<a href="#sweetalert.js-194">194</a>
<a href="#sweetalert.js-195">195</a>
<a href="#sweetalert.js-196">196</a>
<a href="#sweetalert.js-197">197</a>
<a href="#sweetalert.js-198">198</a>
<a href="#sweetalert.js-199">199</a>
<a href="#sweetalert.js-200">200</a>
<a href="#sweetalert.js-201">201</a>
<a href="#sweetalert.js-202">202</a>
<a href="#sweetalert.js-203">203</a>
<a href="#sweetalert.js-204">204</a>
<a href="#sweetalert.js-205">205</a>
<a href="#sweetalert.js-206">206</a>
<a href="#sweetalert.js-207">207</a>
<a href="#sweetalert.js-208">208</a>
<a href="#sweetalert.js-209">209</a>
<a href="#sweetalert.js-210">210</a>
<a href="#sweetalert.js-211">211</a>
<a href="#sweetalert.js-212">212</a>
<a href="#sweetalert.js-213">213</a>
<a href="#sweetalert.js-214">214</a>
<a href="#sweetalert.js-215">215</a>
<a href="#sweetalert.js-216">216</a>
<a href="#sweetalert.js-217">217</a>
<a href="#sweetalert.js-218">218</a>
<a href="#sweetalert.js-219">219</a>
<a href="#sweetalert.js-220">220</a>
<a href="#sweetalert.js-221">221</a>
<a href="#sweetalert.js-222">222</a>
<a href="#sweetalert.js-223">223</a>
<a href="#sweetalert.js-224">224</a>
<a href="#sweetalert.js-225">225</a>
<a href="#sweetalert.js-226">226</a>
<a href="#sweetalert.js-227">227</a>
<a href="#sweetalert.js-228">228</a>
<a href="#sweetalert.js-229">229</a>
<a href="#sweetalert.js-230">230</a>
<a href="#sweetalert.js-231">231</a>
<a href="#sweetalert.js-232">232</a>
<a href="#sweetalert.js-233">233</a>
<a href="#sweetalert.js-234">234</a>
<a href="#sweetalert.js-235">235</a>
<a href="#sweetalert.js-236">236</a>
<a href="#sweetalert.js-237">237</a>
<a href="#sweetalert.js-238">238</a>
<a href="#sweetalert.js-239">239</a>
<a href="#sweetalert.js-240">240</a>
<a href="#sweetalert.js-241">241</a>
<a href="#sweetalert.js-242">242</a>
<a href="#sweetalert.js-243">243</a>
<a href="#sweetalert.js-244">244</a>
<a href="#sweetalert.js-245">245</a>
<a href="#sweetalert.js-246">246</a>
<a href="#sweetalert.js-247">247</a>
<a href="#sweetalert.js-248">248</a>
<a href="#sweetalert.js-249">249</a>
<a href="#sweetalert.js-250">250</a>
<a href="#sweetalert.js-251">251</a>
<a href="#sweetalert.js-252">252</a>
<a href="#sweetalert.js-253">253</a>
<a href="#sweetalert.js-254">254</a>
<a href="#sweetalert.js-255">255</a>
<a href="#sweetalert.js-256">256</a>
<a href="#sweetalert.js-257">257</a>
<a href="#sweetalert.js-258">258</a>
<a href="#sweetalert.js-259">259</a>
<a href="#sweetalert.js-260">260</a>
<a href="#sweetalert.js-261">261</a>
<a href="#sweetalert.js-262">262</a>
<a href="#sweetalert.js-263">263</a>
<a href="#sweetalert.js-264">264</a>
<a href="#sweetalert.js-265">265</a>
<a href="#sweetalert.js-266">266</a>
<a href="#sweetalert.js-267">267</a>
<a href="#sweetalert.js-268">268</a>
<a href="#sweetalert.js-269">269</a>
<a href="#sweetalert.js-270">270</a>
<a href="#sweetalert.js-271">271</a>
<a href="#sweetalert.js-272">272</a>
<a href="#sweetalert.js-273">273</a>
<a href="#sweetalert.js-274">274</a>
<a href="#sweetalert.js-275">275</a>
<a href="#sweetalert.js-276">276</a>
<a href="#sweetalert.js-277">277</a>
<a href="#sweetalert.js-278">278</a>
<a href="#sweetalert.js-279">279</a>
<a href="#sweetalert.js-280">280</a>
<a href="#sweetalert.js-281">281</a>
<a href="#sweetalert.js-282">282</a>
<a href="#sweetalert.js-283">283</a>
<a href="#sweetalert.js-284">284</a>
<a href="#sweetalert.js-285">285</a>
<a href="#sweetalert.js-286">286</a>
<a href="#sweetalert.js-287">287</a>
<a href="#sweetalert.js-288">288</a>
<a href="#sweetalert.js-289">289</a>
<a href="#sweetalert.js-290">290</a>
<a href="#sweetalert.js-291">291</a>
<a href="#sweetalert.js-292">292</a>
<a href="#sweetalert.js-293">293</a>
<a href="#sweetalert.js-294">294</a>
<a href="#sweetalert.js-295">295</a>
<a href="#sweetalert.js-296">296</a>
<a href="#sweetalert.js-297">297</a>
<a href="#sweetalert.js-298">298</a>
<a href="#sweetalert.js-299">299</a>
<a href="#sweetalert.js-300">300</a>
<a href="#sweetalert.js-301">301</a>
<a href="#sweetalert.js-302">302</a>
<a href="#sweetalert.js-303">303</a></pre></div></td><td class="code"><div class="codehilite highlight"><pre><span></span><a name="sweetalert.js-1"></a><span class="s1">&#39;use strict&#39;</span><span class="p">;</span>
<a name="sweetalert.js-2"></a>
<a name="sweetalert.js-3"></a><span class="kd">var</span> <span class="nx">_interopRequireWildcard</span> <span class="o">=</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">obj</span><span class="p">)</span> <span class="p">{</span> <span class="k">return</span> <span class="nx">obj</span> <span class="o">&amp;&amp;</span> <span class="nx">obj</span><span class="p">.</span><span class="nx">__esModule</span> <span class="o">?</span> <span class="nx">obj</span> <span class="o">:</span> <span class="p">{</span> <span class="s1">&#39;default&#39;</span><span class="o">:</span> <span class="nx">obj</span> <span class="p">};</span> <span class="p">};</span>
<a name="sweetalert.js-4"></a>
<a name="sweetalert.js-5"></a><span class="nb">Object</span><span class="p">.</span><span class="nx">defineProperty</span><span class="p">(</span><span class="nx">exports</span><span class="p">,</span> <span class="s1">&#39;__esModule&#39;</span><span class="p">,</span> <span class="p">{</span>
<a name="sweetalert.js-6"></a>  <span class="nx">value</span><span class="o">:</span> <span class="kc">true</span>
<a name="sweetalert.js-7"></a><span class="p">});</span>
<a name="sweetalert.js-8"></a><span class="c1">// SweetAlert</span>
<a name="sweetalert.js-9"></a><span class="c1">// 2014-2015 (c) - Tristan Edwards</span>
<a name="sweetalert.js-10"></a><span class="c1">// github.com/t4t5/sweetalert</span>
<a name="sweetalert.js-11"></a>
<a name="sweetalert.js-12"></a><span class="cm">/*</span>
<a name="sweetalert.js-13"></a><span class="cm"> * jQuery-like functions for manipulating the DOM</span>
<a name="sweetalert.js-14"></a><span class="cm"> */</span>
<a name="sweetalert.js-15"></a>
<a name="sweetalert.js-16"></a><span class="kd">var</span> <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span> <span class="o">=</span> <span class="nx">require</span><span class="p">(</span><span class="s1">&#39;./modules/handle-dom&#39;</span><span class="p">);</span>
<a name="sweetalert.js-17"></a>
<a name="sweetalert.js-18"></a><span class="cm">/*</span>
<a name="sweetalert.js-19"></a><span class="cm"> * Handy utilities</span>
<a name="sweetalert.js-20"></a><span class="cm"> */</span>
<a name="sweetalert.js-21"></a>
<a name="sweetalert.js-22"></a><span class="kd">var</span> <span class="nx">_extend$hexToRgb$isIE8$logStr$colorLuminance</span> <span class="o">=</span> <span class="nx">require</span><span class="p">(</span><span class="s1">&#39;./modules/utils&#39;</span><span class="p">);</span>
<a name="sweetalert.js-23"></a>
<a name="sweetalert.js-24"></a><span class="cm">/*</span>
<a name="sweetalert.js-25"></a><span class="cm"> *  Handle sweetAlert&#39;s DOM elements</span>
<a name="sweetalert.js-26"></a><span class="cm"> */</span>
<a name="sweetalert.js-27"></a>
<a name="sweetalert.js-28"></a><span class="kd">var</span> <span class="nx">_sweetAlertInitialize$getModal$getOverlay$getInput$setFocusStyle$openModal$resetInput$fixVerticalPosition</span> <span class="o">=</span> <span class="nx">require</span><span class="p">(</span><span class="s1">&#39;./modules/handle-swal-dom&#39;</span><span class="p">);</span>
<a name="sweetalert.js-29"></a>
<a name="sweetalert.js-30"></a><span class="c1">// Handle button events and keyboard events</span>
<a name="sweetalert.js-31"></a>
<a name="sweetalert.js-32"></a><span class="kd">var</span> <span class="nx">_handleButton$handleConfirm$handleCancel</span> <span class="o">=</span> <span class="nx">require</span><span class="p">(</span><span class="s1">&#39;./modules/handle-click&#39;</span><span class="p">);</span>
<a name="sweetalert.js-33"></a>
<a name="sweetalert.js-34"></a><span class="kd">var</span> <span class="nx">_handleKeyDown</span> <span class="o">=</span> <span class="nx">require</span><span class="p">(</span><span class="s1">&#39;./modules/handle-key&#39;</span><span class="p">);</span>
<a name="sweetalert.js-35"></a>
<a name="sweetalert.js-36"></a><span class="kd">var</span> <span class="nx">_handleKeyDown2</span> <span class="o">=</span> <span class="nx">_interopRequireWildcard</span><span class="p">(</span><span class="nx">_handleKeyDown</span><span class="p">);</span>
<a name="sweetalert.js-37"></a>
<a name="sweetalert.js-38"></a><span class="c1">// Default values</span>
<a name="sweetalert.js-39"></a>
<a name="sweetalert.js-40"></a><span class="kd">var</span> <span class="nx">_defaultParams</span> <span class="o">=</span> <span class="nx">require</span><span class="p">(</span><span class="s1">&#39;./modules/default-params&#39;</span><span class="p">);</span>
<a name="sweetalert.js-41"></a>
<a name="sweetalert.js-42"></a><span class="kd">var</span> <span class="nx">_defaultParams2</span> <span class="o">=</span> <span class="nx">_interopRequireWildcard</span><span class="p">(</span><span class="nx">_defaultParams</span><span class="p">);</span>
<a name="sweetalert.js-43"></a>
<a name="sweetalert.js-44"></a><span class="kd">var</span> <span class="nx">_setParameters</span> <span class="o">=</span> <span class="nx">require</span><span class="p">(</span><span class="s1">&#39;./modules/set-params&#39;</span><span class="p">);</span>
<a name="sweetalert.js-45"></a>
<a name="sweetalert.js-46"></a><span class="kd">var</span> <span class="nx">_setParameters2</span> <span class="o">=</span> <span class="nx">_interopRequireWildcard</span><span class="p">(</span><span class="nx">_setParameters</span><span class="p">);</span>
<a name="sweetalert.js-47"></a>
<a name="sweetalert.js-48"></a><span class="cm">/*</span>
<a name="sweetalert.js-49"></a><span class="cm"> * Remember state in cases where opening and handling a modal will fiddle with it.</span>
<a name="sweetalert.js-50"></a><span class="cm"> * (We also use window.previousActiveElement as a global variable)</span>
<a name="sweetalert.js-51"></a><span class="cm"> */</span>
<a name="sweetalert.js-52"></a><span class="kd">var</span> <span class="nx">previousWindowKeyDown</span><span class="p">;</span>
<a name="sweetalert.js-53"></a><span class="kd">var</span> <span class="nx">lastFocusedButton</span><span class="p">;</span>
<a name="sweetalert.js-54"></a>
<a name="sweetalert.js-55"></a><span class="cm">/*</span>
<a name="sweetalert.js-56"></a><span class="cm"> * Global sweetAlert function</span>
<a name="sweetalert.js-57"></a><span class="cm"> * (this is what the user calls)</span>
<a name="sweetalert.js-58"></a><span class="cm"> */</span>
<a name="sweetalert.js-59"></a><span class="kd">var</span> <span class="nx">sweetAlert</span><span class="p">,</span> <span class="nx">swal</span><span class="p">;</span>
<a name="sweetalert.js-60"></a>
<a name="sweetalert.js-61"></a><span class="nx">exports</span><span class="p">[</span><span class="s1">&#39;default&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nx">sweetAlert</span> <span class="o">=</span> <span class="nx">swal</span> <span class="o">=</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
<a name="sweetalert.js-62"></a>  <span class="kd">var</span> <span class="nx">customizations</span> <span class="o">=</span> <span class="nx">arguments</span><span class="p">[</span><span class="mi">0</span><span class="p">];</span>
<a name="sweetalert.js-63"></a>
<a name="sweetalert.js-64"></a>  <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span><span class="p">.</span><span class="nx">addClass</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">body</span><span class="p">,</span> <span class="s1">&#39;stop-scrolling&#39;</span><span class="p">);</span>
<a name="sweetalert.js-65"></a>  <span class="nx">_sweetAlertInitialize$getModal$getOverlay$getInput$setFocusStyle$openModal$resetInput$fixVerticalPosition</span><span class="p">.</span><span class="nx">resetInput</span><span class="p">();</span>
<a name="sweetalert.js-66"></a>
<a name="sweetalert.js-67"></a>  <span class="cm">/*</span>
<a name="sweetalert.js-68"></a><span class="cm">   * Use argument if defined or default value from params object otherwise.</span>
<a name="sweetalert.js-69"></a><span class="cm">   * Supports the case where a default value is boolean true and should be</span>
<a name="sweetalert.js-70"></a><span class="cm">   * overridden by a corresponding explicit argument which is boolean false.</span>
<a name="sweetalert.js-71"></a><span class="cm">   */</span>
<a name="sweetalert.js-72"></a>  <span class="kd">function</span> <span class="nx">argumentOrDefault</span><span class="p">(</span><span class="nx">key</span><span class="p">)</span> <span class="p">{</span>
<a name="sweetalert.js-73"></a>    <span class="kd">var</span> <span class="nx">args</span> <span class="o">=</span> <span class="nx">customizations</span><span class="p">;</span>
<a name="sweetalert.js-74"></a>    <span class="k">return</span> <span class="nx">args</span><span class="p">[</span><span class="nx">key</span><span class="p">]</span> <span class="o">===</span> <span class="kc">undefined</span> <span class="o">?</span> <span class="nx">_defaultParams2</span><span class="p">[</span><span class="s1">&#39;default&#39;</span><span class="p">][</span><span class="nx">key</span><span class="p">]</span> <span class="o">:</span> <span class="nx">args</span><span class="p">[</span><span class="nx">key</span><span class="p">];</span>
<a name="sweetalert.js-75"></a>  <span class="p">}</span>
<a name="sweetalert.js-76"></a>
<a name="sweetalert.js-77"></a>  <span class="k">if</span> <span class="p">(</span><span class="nx">customizations</span> <span class="o">===</span> <span class="kc">undefined</span><span class="p">)</span> <span class="p">{</span>
<a name="sweetalert.js-78"></a>    <span class="nx">_extend$hexToRgb$isIE8$logStr$colorLuminance</span><span class="p">.</span><span class="nx">logStr</span><span class="p">(</span><span class="s1">&#39;SweetAlert expects at least 1 attribute!&#39;</span><span class="p">);</span>
<a name="sweetalert.js-79"></a>    <span class="k">return</span> <span class="kc">false</span><span class="p">;</span>
<a name="sweetalert.js-80"></a>  <span class="p">}</span>
<a name="sweetalert.js-81"></a>
<a name="sweetalert.js-82"></a>  <span class="kd">var</span> <span class="nx">params</span> <span class="o">=</span> <span class="nx">_extend$hexToRgb$isIE8$logStr$colorLuminance</span><span class="p">.</span><span class="nx">extend</span><span class="p">({},</span> <span class="nx">_defaultParams2</span><span class="p">[</span><span class="s1">&#39;default&#39;</span><span class="p">]);</span>
<a name="sweetalert.js-83"></a>
<a name="sweetalert.js-84"></a>  <span class="k">switch</span> <span class="p">(</span><span class="k">typeof</span> <span class="nx">customizations</span><span class="p">)</span> <span class="p">{</span>
<a name="sweetalert.js-85"></a>
<a name="sweetalert.js-86"></a>    <span class="c1">// Ex: swal(&quot;Hello&quot;, &quot;Just testing&quot;, &quot;info&quot;);</span>
<a name="sweetalert.js-87"></a>    <span class="k">case</span> <span class="s1">&#39;string&#39;</span><span class="o">:</span>
<a name="sweetalert.js-88"></a>      <span class="nx">params</span><span class="p">.</span><span class="nx">title</span> <span class="o">=</span> <span class="nx">customizations</span><span class="p">;</span>
<a name="sweetalert.js-89"></a>      <span class="nx">params</span><span class="p">.</span><span class="nx">text</span> <span class="o">=</span> <span class="nx">arguments</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="o">||</span> <span class="s1">&#39;&#39;</span><span class="p">;</span>
<a name="sweetalert.js-90"></a>      <span class="nx">params</span><span class="p">.</span><span class="nx">type</span> <span class="o">=</span> <span class="nx">arguments</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span> <span class="o">||</span> <span class="s1">&#39;&#39;</span><span class="p">;</span>
<a name="sweetalert.js-91"></a>      <span class="k">break</span><span class="p">;</span>
<a name="sweetalert.js-92"></a>
<a name="sweetalert.js-93"></a>    <span class="c1">// Ex: swal({ title:&quot;Hello&quot;, text: &quot;Just testing&quot;, type: &quot;info&quot; });</span>
<a name="sweetalert.js-94"></a>    <span class="k">case</span> <span class="s1">&#39;object&#39;</span><span class="o">:</span>
<a name="sweetalert.js-95"></a>      <span class="k">if</span> <span class="p">(</span><span class="nx">customizations</span><span class="p">.</span><span class="nx">title</span> <span class="o">===</span> <span class="kc">undefined</span><span class="p">)</span> <span class="p">{</span>
<a name="sweetalert.js-96"></a>        <span class="nx">_extend$hexToRgb$isIE8$logStr$colorLuminance</span><span class="p">.</span><span class="nx">logStr</span><span class="p">(</span><span class="s1">&#39;Missing &quot;title&quot; argument!&#39;</span><span class="p">);</span>
<a name="sweetalert.js-97"></a>        <span class="k">return</span> <span class="kc">false</span><span class="p">;</span>
<a name="sweetalert.js-98"></a>      <span class="p">}</span>
<a name="sweetalert.js-99"></a>
<a name="sweetalert.js-100"></a>      <span class="nx">params</span><span class="p">.</span><span class="nx">title</span> <span class="o">=</span> <span class="nx">customizations</span><span class="p">.</span><span class="nx">title</span><span class="p">;</span>
<a name="sweetalert.js-101"></a>
<a name="sweetalert.js-102"></a>      <span class="k">for</span> <span class="p">(</span><span class="kd">var</span> <span class="nx">customName</span> <span class="k">in</span> <span class="nx">_defaultParams2</span><span class="p">[</span><span class="s1">&#39;default&#39;</span><span class="p">])</span> <span class="p">{</span>
<a name="sweetalert.js-103"></a>        <span class="nx">params</span><span class="p">[</span><span class="nx">customName</span><span class="p">]</span> <span class="o">=</span> <span class="nx">argumentOrDefault</span><span class="p">(</span><span class="nx">customName</span><span class="p">);</span>
<a name="sweetalert.js-104"></a>      <span class="p">}</span>
<a name="sweetalert.js-105"></a>
<a name="sweetalert.js-106"></a>      <span class="c1">// Show &quot;Confirm&quot; instead of &quot;OK&quot; if cancel button is visible</span>
<a name="sweetalert.js-107"></a>      <span class="nx">params</span><span class="p">.</span><span class="nx">confirmButtonText</span> <span class="o">=</span> <span class="nx">params</span><span class="p">.</span><span class="nx">showCancelButton</span> <span class="o">?</span> <span class="s1">&#39;Confirm&#39;</span> <span class="o">:</span> <span class="nx">_defaultParams2</span><span class="p">[</span><span class="s1">&#39;default&#39;</span><span class="p">].</span><span class="nx">confirmButtonText</span><span class="p">;</span>
<a name="sweetalert.js-108"></a>      <span class="nx">params</span><span class="p">.</span><span class="nx">confirmButtonText</span> <span class="o">=</span> <span class="nx">argumentOrDefault</span><span class="p">(</span><span class="s1">&#39;confirmButtonText&#39;</span><span class="p">);</span>
<a name="sweetalert.js-109"></a>
<a name="sweetalert.js-110"></a>      <span class="c1">// Callback function when clicking on &quot;OK&quot;/&quot;Cancel&quot;</span>
<a name="sweetalert.js-111"></a>      <span class="nx">params</span><span class="p">.</span><span class="nx">doneFunction</span> <span class="o">=</span> <span class="nx">arguments</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="o">||</span> <span class="kc">null</span><span class="p">;</span>
<a name="sweetalert.js-112"></a>
<a name="sweetalert.js-113"></a>      <span class="k">break</span><span class="p">;</span>
<a name="sweetalert.js-114"></a>
<a name="sweetalert.js-115"></a>    <span class="k">default</span><span class="o">:</span>
<a name="sweetalert.js-116"></a>      <span class="nx">_extend$hexToRgb$isIE8$logStr$colorLuminance</span><span class="p">.</span><span class="nx">logStr</span><span class="p">(</span><span class="s1">&#39;Unexpected type of argument! Expected &quot;string&quot; or &quot;object&quot;, got &#39;</span> <span class="o">+</span> <span class="k">typeof</span> <span class="nx">customizations</span><span class="p">);</span>
<a name="sweetalert.js-117"></a>      <span class="k">return</span> <span class="kc">false</span><span class="p">;</span>
<a name="sweetalert.js-118"></a>
<a name="sweetalert.js-119"></a>  <span class="p">}</span>
<a name="sweetalert.js-120"></a>
<a name="sweetalert.js-121"></a>  <span class="nx">_setParameters2</span><span class="p">[</span><span class="s1">&#39;default&#39;</span><span class="p">](</span><span class="nx">params</span><span class="p">);</span>
<a name="sweetalert.js-122"></a>  <span class="nx">_sweetAlertInitialize$getModal$getOverlay$getInput$setFocusStyle$openModal$resetInput$fixVerticalPosition</span><span class="p">.</span><span class="nx">fixVerticalPosition</span><span class="p">();</span>
<a name="sweetalert.js-123"></a>  <span class="nx">_sweetAlertInitialize$getModal$getOverlay$getInput$setFocusStyle$openModal$resetInput$fixVerticalPosition</span><span class="p">.</span><span class="nx">openModal</span><span class="p">(</span><span class="nx">arguments</span><span class="p">[</span><span class="mi">1</span><span class="p">]);</span>
<a name="sweetalert.js-124"></a>
<a name="sweetalert.js-125"></a>  <span class="c1">// Modal interactions</span>
<a name="sweetalert.js-126"></a>  <span class="kd">var</span> <span class="nx">modal</span> <span class="o">=</span> <span class="nx">_sweetAlertInitialize$getModal$getOverlay$getInput$setFocusStyle$openModal$resetInput$fixVerticalPosition</span><span class="p">.</span><span class="nx">getModal</span><span class="p">();</span>
<a name="sweetalert.js-127"></a>
<a name="sweetalert.js-128"></a>  <span class="cm">/*</span>
<a name="sweetalert.js-129"></a><span class="cm">   * Make sure all modal buttons respond to all events</span>
<a name="sweetalert.js-130"></a><span class="cm">   */</span>
<a name="sweetalert.js-131"></a>  <span class="kd">var</span> <span class="nx">$buttons</span> <span class="o">=</span> <span class="nx">modal</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="s1">&#39;button&#39;</span><span class="p">);</span>
<a name="sweetalert.js-132"></a>  <span class="kd">var</span> <span class="nx">buttonEvents</span> <span class="o">=</span> <span class="p">[</span><span class="s1">&#39;onclick&#39;</span><span class="p">,</span> <span class="s1">&#39;onmouseover&#39;</span><span class="p">,</span> <span class="s1">&#39;onmouseout&#39;</span><span class="p">,</span> <span class="s1">&#39;onmousedown&#39;</span><span class="p">,</span> <span class="s1">&#39;onmouseup&#39;</span><span class="p">,</span> <span class="s1">&#39;onfocus&#39;</span><span class="p">];</span>
<a name="sweetalert.js-133"></a>  <span class="kd">var</span> <span class="nx">onButtonEvent</span> <span class="o">=</span> <span class="kd">function</span> <span class="nx">onButtonEvent</span><span class="p">(</span><span class="nx">e</span><span class="p">)</span> <span class="p">{</span>
<a name="sweetalert.js-134"></a>    <span class="k">return</span> <span class="nx">_handleButton$handleConfirm$handleCancel</span><span class="p">.</span><span class="nx">handleButton</span><span class="p">(</span><span class="nx">e</span><span class="p">,</span> <span class="nx">params</span><span class="p">,</span> <span class="nx">modal</span><span class="p">);</span>
<a name="sweetalert.js-135"></a>  <span class="p">};</span>
<a name="sweetalert.js-136"></a>
<a name="sweetalert.js-137"></a>  <span class="k">for</span> <span class="p">(</span><span class="kd">var</span> <span class="nx">btnIndex</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nx">btnIndex</span> <span class="o">&lt;</span> <span class="nx">$buttons</span><span class="p">.</span><span class="nx">length</span><span class="p">;</span> <span class="nx">btnIndex</span><span class="o">++</span><span class="p">)</span> <span class="p">{</span>
<a name="sweetalert.js-138"></a>    <span class="k">for</span> <span class="p">(</span><span class="kd">var</span> <span class="nx">evtIndex</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nx">evtIndex</span> <span class="o">&lt;</span> <span class="nx">buttonEvents</span><span class="p">.</span><span class="nx">length</span><span class="p">;</span> <span class="nx">evtIndex</span><span class="o">++</span><span class="p">)</span> <span class="p">{</span>
<a name="sweetalert.js-139"></a>      <span class="kd">var</span> <span class="nx">btnEvt</span> <span class="o">=</span> <span class="nx">buttonEvents</span><span class="p">[</span><span class="nx">evtIndex</span><span class="p">];</span>
<a name="sweetalert.js-140"></a>      <span class="nx">$buttons</span><span class="p">[</span><span class="nx">btnIndex</span><span class="p">][</span><span class="nx">btnEvt</span><span class="p">]</span> <span class="o">=</span> <span class="nx">onButtonEvent</span><span class="p">;</span>
<a name="sweetalert.js-141"></a>    <span class="p">}</span>
<a name="sweetalert.js-142"></a>  <span class="p">}</span>
<a name="sweetalert.js-143"></a>
<a name="sweetalert.js-144"></a>  <span class="c1">// Clicking outside the modal dismisses it (if allowed by user)</span>
<a name="sweetalert.js-145"></a>  <span class="nx">_sweetAlertInitialize$getModal$getOverlay$getInput$setFocusStyle$openModal$resetInput$fixVerticalPosition</span><span class="p">.</span><span class="nx">getOverlay</span><span class="p">().</span><span class="nx">onclick</span> <span class="o">=</span> <span class="nx">onButtonEvent</span><span class="p">;</span>
<a name="sweetalert.js-146"></a>
<a name="sweetalert.js-147"></a>  <span class="nx">previousWindowKeyDown</span> <span class="o">=</span> <span class="nb">window</span><span class="p">.</span><span class="nx">onkeydown</span><span class="p">;</span>
<a name="sweetalert.js-148"></a>
<a name="sweetalert.js-149"></a>  <span class="kd">var</span> <span class="nx">onKeyEvent</span> <span class="o">=</span> <span class="kd">function</span> <span class="nx">onKeyEvent</span><span class="p">(</span><span class="nx">e</span><span class="p">)</span> <span class="p">{</span>
<a name="sweetalert.js-150"></a>    <span class="k">return</span> <span class="nx">_handleKeyDown2</span><span class="p">[</span><span class="s1">&#39;default&#39;</span><span class="p">](</span><span class="nx">e</span><span class="p">,</span> <span class="nx">params</span><span class="p">,</span> <span class="nx">modal</span><span class="p">);</span>
<a name="sweetalert.js-151"></a>  <span class="p">};</span>
<a name="sweetalert.js-152"></a>  <span class="nb">window</span><span class="p">.</span><span class="nx">onkeydown</span> <span class="o">=</span> <span class="nx">onKeyEvent</span><span class="p">;</span>
<a name="sweetalert.js-153"></a>
<a name="sweetalert.js-154"></a>  <span class="nb">window</span><span class="p">.</span><span class="nx">onfocus</span> <span class="o">=</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
<a name="sweetalert.js-155"></a>    <span class="c1">// When the user has focused away and focused back from the whole window.</span>
<a name="sweetalert.js-156"></a>    <span class="nx">setTimeout</span><span class="p">(</span><span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
<a name="sweetalert.js-157"></a>      <span class="c1">// Put in a timeout to jump out of the event sequence.</span>
<a name="sweetalert.js-158"></a>      <span class="c1">// Calling focus() in the event sequence confuses things.</span>
<a name="sweetalert.js-159"></a>      <span class="k">if</span> <span class="p">(</span><span class="nx">lastFocusedButton</span> <span class="o">!==</span> <span class="kc">undefined</span><span class="p">)</span> <span class="p">{</span>
<a name="sweetalert.js-160"></a>        <span class="nx">lastFocusedButton</span><span class="p">.</span><span class="nx">focus</span><span class="p">();</span>
<a name="sweetalert.js-161"></a>        <span class="nx">lastFocusedButton</span> <span class="o">=</span> <span class="kc">undefined</span><span class="p">;</span>
<a name="sweetalert.js-162"></a>      <span class="p">}</span>
<a name="sweetalert.js-163"></a>    <span class="p">},</span> <span class="mi">0</span><span class="p">);</span>
<a name="sweetalert.js-164"></a>  <span class="p">};</span>
<a name="sweetalert.js-165"></a>
<a name="sweetalert.js-166"></a>  <span class="c1">// Show alert with enabled buttons always</span>
<a name="sweetalert.js-167"></a>  <span class="nx">swal</span><span class="p">.</span><span class="nx">enableButtons</span><span class="p">();</span>
<a name="sweetalert.js-168"></a><span class="p">};</span>
<a name="sweetalert.js-169"></a>
<a name="sweetalert.js-170"></a><span class="cm">/*</span>
<a name="sweetalert.js-171"></a><span class="cm"> * Set default params for each popup</span>
<a name="sweetalert.js-172"></a><span class="cm"> * @param {Object} userParams</span>
<a name="sweetalert.js-173"></a><span class="cm"> */</span>
<a name="sweetalert.js-174"></a><span class="nx">sweetAlert</span><span class="p">.</span><span class="nx">setDefaults</span> <span class="o">=</span> <span class="nx">swal</span><span class="p">.</span><span class="nx">setDefaults</span> <span class="o">=</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">userParams</span><span class="p">)</span> <span class="p">{</span>
<a name="sweetalert.js-175"></a>  <span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">userParams</span><span class="p">)</span> <span class="p">{</span>
<a name="sweetalert.js-176"></a>    <span class="k">throw</span> <span class="k">new</span> <span class="nb">Error</span><span class="p">(</span><span class="s1">&#39;userParams is required&#39;</span><span class="p">);</span>
<a name="sweetalert.js-177"></a>  <span class="p">}</span>
<a name="sweetalert.js-178"></a>  <span class="k">if</span> <span class="p">(</span><span class="k">typeof</span> <span class="nx">userParams</span> <span class="o">!==</span> <span class="s1">&#39;object&#39;</span><span class="p">)</span> <span class="p">{</span>
<a name="sweetalert.js-179"></a>    <span class="k">throw</span> <span class="k">new</span> <span class="nb">Error</span><span class="p">(</span><span class="s1">&#39;userParams has to be a object&#39;</span><span class="p">);</span>
<a name="sweetalert.js-180"></a>  <span class="p">}</span>
<a name="sweetalert.js-181"></a>
<a name="sweetalert.js-182"></a>  <span class="nx">_extend$hexToRgb$isIE8$logStr$colorLuminance</span><span class="p">.</span><span class="nx">extend</span><span class="p">(</span><span class="nx">_defaultParams2</span><span class="p">[</span><span class="s1">&#39;default&#39;</span><span class="p">],</span> <span class="nx">userParams</span><span class="p">);</span>
<a name="sweetalert.js-183"></a><span class="p">};</span>
<a name="sweetalert.js-184"></a>
<a name="sweetalert.js-185"></a><span class="cm">/*</span>
<a name="sweetalert.js-186"></a><span class="cm"> * Animation when closing modal</span>
<a name="sweetalert.js-187"></a><span class="cm"> */</span>
<a name="sweetalert.js-188"></a><span class="nx">sweetAlert</span><span class="p">.</span><span class="nx">close</span> <span class="o">=</span> <span class="nx">swal</span><span class="p">.</span><span class="nx">close</span> <span class="o">=</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
<a name="sweetalert.js-189"></a>  <span class="kd">var</span> <span class="nx">modal</span> <span class="o">=</span> <span class="nx">_sweetAlertInitialize$getModal$getOverlay$getInput$setFocusStyle$openModal$resetInput$fixVerticalPosition</span><span class="p">.</span><span class="nx">getModal</span><span class="p">();</span>
<a name="sweetalert.js-190"></a>
<a name="sweetalert.js-191"></a>  <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span><span class="p">.</span><span class="nx">fadeOut</span><span class="p">(</span><span class="nx">_sweetAlertInitialize$getModal$getOverlay$getInput$setFocusStyle$openModal$resetInput$fixVerticalPosition</span><span class="p">.</span><span class="nx">getOverlay</span><span class="p">(),</span> <span class="mi">5</span><span class="p">);</span>
<a name="sweetalert.js-192"></a>  <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span><span class="p">.</span><span class="nx">fadeOut</span><span class="p">(</span><span class="nx">modal</span><span class="p">,</span> <span class="mi">5</span><span class="p">);</span>
<a name="sweetalert.js-193"></a>  <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span><span class="p">.</span><span class="nx">removeClass</span><span class="p">(</span><span class="nx">modal</span><span class="p">,</span> <span class="s1">&#39;showSweetAlert&#39;</span><span class="p">);</span>
<a name="sweetalert.js-194"></a>  <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span><span class="p">.</span><span class="nx">addClass</span><span class="p">(</span><span class="nx">modal</span><span class="p">,</span> <span class="s1">&#39;hideSweetAlert&#39;</span><span class="p">);</span>
<a name="sweetalert.js-195"></a>  <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span><span class="p">.</span><span class="nx">removeClass</span><span class="p">(</span><span class="nx">modal</span><span class="p">,</span> <span class="s1">&#39;visible&#39;</span><span class="p">);</span>
<a name="sweetalert.js-196"></a>
<a name="sweetalert.js-197"></a>  <span class="cm">/*</span>
<a name="sweetalert.js-198"></a><span class="cm">   * Reset icon animations</span>
<a name="sweetalert.js-199"></a><span class="cm">   */</span>
<a name="sweetalert.js-200"></a>  <span class="kd">var</span> <span class="nx">$successIcon</span> <span class="o">=</span> <span class="nx">modal</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;.sa-icon.sa-success&#39;</span><span class="p">);</span>
<a name="sweetalert.js-201"></a>  <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span><span class="p">.</span><span class="nx">removeClass</span><span class="p">(</span><span class="nx">$successIcon</span><span class="p">,</span> <span class="s1">&#39;animate&#39;</span><span class="p">);</span>
<a name="sweetalert.js-202"></a>  <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span><span class="p">.</span><span class="nx">removeClass</span><span class="p">(</span><span class="nx">$successIcon</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;.sa-tip&#39;</span><span class="p">),</span> <span class="s1">&#39;animateSuccessTip&#39;</span><span class="p">);</span>
<a name="sweetalert.js-203"></a>  <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span><span class="p">.</span><span class="nx">removeClass</span><span class="p">(</span><span class="nx">$successIcon</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;.sa-long&#39;</span><span class="p">),</span> <span class="s1">&#39;animateSuccessLong&#39;</span><span class="p">);</span>
<a name="sweetalert.js-204"></a>
<a name="sweetalert.js-205"></a>  <span class="kd">var</span> <span class="nx">$errorIcon</span> <span class="o">=</span> <span class="nx">modal</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;.sa-icon.sa-error&#39;</span><span class="p">);</span>
<a name="sweetalert.js-206"></a>  <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span><span class="p">.</span><span class="nx">removeClass</span><span class="p">(</span><span class="nx">$errorIcon</span><span class="p">,</span> <span class="s1">&#39;animateErrorIcon&#39;</span><span class="p">);</span>
<a name="sweetalert.js-207"></a>  <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span><span class="p">.</span><span class="nx">removeClass</span><span class="p">(</span><span class="nx">$errorIcon</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;.sa-x-mark&#39;</span><span class="p">),</span> <span class="s1">&#39;animateXMark&#39;</span><span class="p">);</span>
<a name="sweetalert.js-208"></a>
<a name="sweetalert.js-209"></a>  <span class="kd">var</span> <span class="nx">$warningIcon</span> <span class="o">=</span> <span class="nx">modal</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;.sa-icon.sa-warning&#39;</span><span class="p">);</span>
<a name="sweetalert.js-210"></a>  <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span><span class="p">.</span><span class="nx">removeClass</span><span class="p">(</span><span class="nx">$warningIcon</span><span class="p">,</span> <span class="s1">&#39;pulseWarning&#39;</span><span class="p">);</span>
<a name="sweetalert.js-211"></a>  <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span><span class="p">.</span><span class="nx">removeClass</span><span class="p">(</span><span class="nx">$warningIcon</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;.sa-body&#39;</span><span class="p">),</span> <span class="s1">&#39;pulseWarningIns&#39;</span><span class="p">);</span>
<a name="sweetalert.js-212"></a>  <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span><span class="p">.</span><span class="nx">removeClass</span><span class="p">(</span><span class="nx">$warningIcon</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;.sa-dot&#39;</span><span class="p">),</span> <span class="s1">&#39;pulseWarningIns&#39;</span><span class="p">);</span>
<a name="sweetalert.js-213"></a>
<a name="sweetalert.js-214"></a>  <span class="c1">// Reset custom class (delay so that UI changes aren&#39;t visible)</span>
<a name="sweetalert.js-215"></a>  <span class="nx">setTimeout</span><span class="p">(</span><span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
<a name="sweetalert.js-216"></a>    <span class="kd">var</span> <span class="nx">customClass</span> <span class="o">=</span> <span class="nx">modal</span><span class="p">.</span><span class="nx">getAttribute</span><span class="p">(</span><span class="s1">&#39;data-custom-class&#39;</span><span class="p">);</span>
<a name="sweetalert.js-217"></a>    <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span><span class="p">.</span><span class="nx">removeClass</span><span class="p">(</span><span class="nx">modal</span><span class="p">,</span> <span class="nx">customClass</span><span class="p">);</span>
<a name="sweetalert.js-218"></a>  <span class="p">},</span> <span class="mi">300</span><span class="p">);</span>
<a name="sweetalert.js-219"></a>
<a name="sweetalert.js-220"></a>  <span class="c1">// Make page scrollable again</span>
<a name="sweetalert.js-221"></a>  <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span><span class="p">.</span><span class="nx">removeClass</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">body</span><span class="p">,</span> <span class="s1">&#39;stop-scrolling&#39;</span><span class="p">);</span>
<a name="sweetalert.js-222"></a>
<a name="sweetalert.js-223"></a>  <span class="c1">// Reset the page to its previous state</span>
<a name="sweetalert.js-224"></a>  <span class="nb">window</span><span class="p">.</span><span class="nx">onkeydown</span> <span class="o">=</span> <span class="nx">previousWindowKeyDown</span><span class="p">;</span>
<a name="sweetalert.js-225"></a>  <span class="k">if</span> <span class="p">(</span><span class="nb">window</span><span class="p">.</span><span class="nx">previousActiveElement</span><span class="p">)</span> <span class="p">{</span>
<a name="sweetalert.js-226"></a>    <span class="nb">window</span><span class="p">.</span><span class="nx">previousActiveElement</span><span class="p">.</span><span class="nx">focus</span><span class="p">();</span>
<a name="sweetalert.js-227"></a>  <span class="p">}</span>
<a name="sweetalert.js-228"></a>  <span class="nx">lastFocusedButton</span> <span class="o">=</span> <span class="kc">undefined</span><span class="p">;</span>
<a name="sweetalert.js-229"></a>  <span class="nx">clearTimeout</span><span class="p">(</span><span class="nx">modal</span><span class="p">.</span><span class="nx">timeout</span><span class="p">);</span>
<a name="sweetalert.js-230"></a>
<a name="sweetalert.js-231"></a>  <span class="k">return</span> <span class="kc">true</span><span class="p">;</span>
<a name="sweetalert.js-232"></a><span class="p">};</span>
<a name="sweetalert.js-233"></a>
<a name="sweetalert.js-234"></a><span class="cm">/*</span>
<a name="sweetalert.js-235"></a><span class="cm"> * Validation of the input field is done by user</span>
<a name="sweetalert.js-236"></a><span class="cm"> * If something is wrong =&gt; call showInputError with errorMessage</span>
<a name="sweetalert.js-237"></a><span class="cm"> */</span>
<a name="sweetalert.js-238"></a><span class="nx">sweetAlert</span><span class="p">.</span><span class="nx">showInputError</span> <span class="o">=</span> <span class="nx">swal</span><span class="p">.</span><span class="nx">showInputError</span> <span class="o">=</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">errorMessage</span><span class="p">)</span> <span class="p">{</span>
<a name="sweetalert.js-239"></a>  <span class="kd">var</span> <span class="nx">modal</span> <span class="o">=</span> <span class="nx">_sweetAlertInitialize$getModal$getOverlay$getInput$setFocusStyle$openModal$resetInput$fixVerticalPosition</span><span class="p">.</span><span class="nx">getModal</span><span class="p">();</span>
<a name="sweetalert.js-240"></a>
<a name="sweetalert.js-241"></a>  <span class="kd">var</span> <span class="nx">$errorIcon</span> <span class="o">=</span> <span class="nx">modal</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;.sa-input-error&#39;</span><span class="p">);</span>
<a name="sweetalert.js-242"></a>  <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span><span class="p">.</span><span class="nx">addClass</span><span class="p">(</span><span class="nx">$errorIcon</span><span class="p">,</span> <span class="s1">&#39;show&#39;</span><span class="p">);</span>
<a name="sweetalert.js-243"></a>
<a name="sweetalert.js-244"></a>  <span class="kd">var</span> <span class="nx">$errorContainer</span> <span class="o">=</span> <span class="nx">modal</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;.sa-error-container&#39;</span><span class="p">);</span>
<a name="sweetalert.js-245"></a>  <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span><span class="p">.</span><span class="nx">addClass</span><span class="p">(</span><span class="nx">$errorContainer</span><span class="p">,</span> <span class="s1">&#39;show&#39;</span><span class="p">);</span>
<a name="sweetalert.js-246"></a>
<a name="sweetalert.js-247"></a>  <span class="nx">$errorContainer</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;p&#39;</span><span class="p">).</span><span class="nx">innerHTML</span> <span class="o">=</span> <span class="nx">errorMessage</span><span class="p">;</span>
<a name="sweetalert.js-248"></a>
<a name="sweetalert.js-249"></a>  <span class="nx">setTimeout</span><span class="p">(</span><span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
<a name="sweetalert.js-250"></a>    <span class="nx">sweetAlert</span><span class="p">.</span><span class="nx">enableButtons</span><span class="p">();</span>
<a name="sweetalert.js-251"></a>  <span class="p">},</span> <span class="mi">1</span><span class="p">);</span>
<a name="sweetalert.js-252"></a>
<a name="sweetalert.js-253"></a>  <span class="nx">modal</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;input&#39;</span><span class="p">).</span><span class="nx">focus</span><span class="p">();</span>
<a name="sweetalert.js-254"></a><span class="p">};</span>
<a name="sweetalert.js-255"></a>
<a name="sweetalert.js-256"></a><span class="cm">/*</span>
<a name="sweetalert.js-257"></a><span class="cm"> * Reset input error DOM elements</span>
<a name="sweetalert.js-258"></a><span class="cm"> */</span>
<a name="sweetalert.js-259"></a><span class="nx">sweetAlert</span><span class="p">.</span><span class="nx">resetInputError</span> <span class="o">=</span> <span class="nx">swal</span><span class="p">.</span><span class="nx">resetInputError</span> <span class="o">=</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">event</span><span class="p">)</span> <span class="p">{</span>
<a name="sweetalert.js-260"></a>  <span class="c1">// If press enter =&gt; ignore</span>
<a name="sweetalert.js-261"></a>  <span class="k">if</span> <span class="p">(</span><span class="nx">event</span> <span class="o">&amp;&amp;</span> <span class="nx">event</span><span class="p">.</span><span class="nx">keyCode</span> <span class="o">===</span> <span class="mi">13</span><span class="p">)</span> <span class="p">{</span>
<a name="sweetalert.js-262"></a>    <span class="k">return</span> <span class="kc">false</span><span class="p">;</span>
<a name="sweetalert.js-263"></a>  <span class="p">}</span>
<a name="sweetalert.js-264"></a>
<a name="sweetalert.js-265"></a>  <span class="kd">var</span> <span class="nx">$modal</span> <span class="o">=</span> <span class="nx">_sweetAlertInitialize$getModal$getOverlay$getInput$setFocusStyle$openModal$resetInput$fixVerticalPosition</span><span class="p">.</span><span class="nx">getModal</span><span class="p">();</span>
<a name="sweetalert.js-266"></a>
<a name="sweetalert.js-267"></a>  <span class="kd">var</span> <span class="nx">$errorIcon</span> <span class="o">=</span> <span class="nx">$modal</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;.sa-input-error&#39;</span><span class="p">);</span>
<a name="sweetalert.js-268"></a>  <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span><span class="p">.</span><span class="nx">removeClass</span><span class="p">(</span><span class="nx">$errorIcon</span><span class="p">,</span> <span class="s1">&#39;show&#39;</span><span class="p">);</span>
<a name="sweetalert.js-269"></a>
<a name="sweetalert.js-270"></a>  <span class="kd">var</span> <span class="nx">$errorContainer</span> <span class="o">=</span> <span class="nx">$modal</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;.sa-error-container&#39;</span><span class="p">);</span>
<a name="sweetalert.js-271"></a>  <span class="nx">_hasClass$addClass$removeClass$escapeHtml$_show$show$_hide$hide$isDescendant$getTopMargin$fadeIn$fadeOut$fireClick$stopEventPropagation</span><span class="p">.</span><span class="nx">removeClass</span><span class="p">(</span><span class="nx">$errorContainer</span><span class="p">,</span> <span class="s1">&#39;show&#39;</span><span class="p">);</span>
<a name="sweetalert.js-272"></a><span class="p">};</span>
<a name="sweetalert.js-273"></a>
<a name="sweetalert.js-274"></a><span class="cm">/*</span>
<a name="sweetalert.js-275"></a><span class="cm"> * Disable confirm and cancel buttons</span>
<a name="sweetalert.js-276"></a><span class="cm"> */</span>
<a name="sweetalert.js-277"></a><span class="nx">sweetAlert</span><span class="p">.</span><span class="nx">disableButtons</span> <span class="o">=</span> <span class="nx">swal</span><span class="p">.</span><span class="nx">disableButtons</span> <span class="o">=</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">event</span><span class="p">)</span> <span class="p">{</span>
<a name="sweetalert.js-278"></a>  <span class="kd">var</span> <span class="nx">modal</span> <span class="o">=</span> <span class="nx">_sweetAlertInitialize$getModal$getOverlay$getInput$setFocusStyle$openModal$resetInput$fixVerticalPosition</span><span class="p">.</span><span class="nx">getModal</span><span class="p">();</span>
<a name="sweetalert.js-279"></a>  <span class="kd">var</span> <span class="nx">$confirmButton</span> <span class="o">=</span> <span class="nx">modal</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;button.confirm&#39;</span><span class="p">);</span>
<a name="sweetalert.js-280"></a>  <span class="kd">var</span> <span class="nx">$cancelButton</span> <span class="o">=</span> <span class="nx">modal</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;button.cancel&#39;</span><span class="p">);</span>
<a name="sweetalert.js-281"></a>  <span class="nx">$confirmButton</span><span class="p">.</span><span class="nx">disabled</span> <span class="o">=</span> <span class="kc">true</span><span class="p">;</span>
<a name="sweetalert.js-282"></a>  <span class="nx">$cancelButton</span><span class="p">.</span><span class="nx">disabled</span> <span class="o">=</span> <span class="kc">true</span><span class="p">;</span>
<a name="sweetalert.js-283"></a><span class="p">};</span>
<a name="sweetalert.js-284"></a>
<a name="sweetalert.js-285"></a><span class="cm">/*</span>
<a name="sweetalert.js-286"></a><span class="cm"> * Enable confirm and cancel buttons</span>
<a name="sweetalert.js-287"></a><span class="cm"> */</span>
<a name="sweetalert.js-288"></a><span class="nx">sweetAlert</span><span class="p">.</span><span class="nx">enableButtons</span> <span class="o">=</span> <span class="nx">swal</span><span class="p">.</span><span class="nx">enableButtons</span> <span class="o">=</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">event</span><span class="p">)</span> <span class="p">{</span>
<a name="sweetalert.js-289"></a>  <span class="kd">var</span> <span class="nx">modal</span> <span class="o">=</span> <span class="nx">_sweetAlertInitialize$getModal$getOverlay$getInput$setFocusStyle$openModal$resetInput$fixVerticalPosition</span><span class="p">.</span><span class="nx">getModal</span><span class="p">();</span>
<a name="sweetalert.js-290"></a>  <span class="kd">var</span> <span class="nx">$confirmButton</span> <span class="o">=</span> <span class="nx">modal</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;button.confirm&#39;</span><span class="p">);</span>
<a name="sweetalert.js-291"></a>  <span class="kd">var</span> <span class="nx">$cancelButton</span> <span class="o">=</span> <span class="nx">modal</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;button.cancel&#39;</span><span class="p">);</span>
<a name="sweetalert.js-292"></a>  <span class="nx">$confirmButton</span><span class="p">.</span><span class="nx">disabled</span> <span class="o">=</span> <span class="kc">false</span><span class="p">;</span>
<a name="sweetalert.js-293"></a>  <span class="nx">$cancelButton</span><span class="p">.</span><span class="nx">disabled</span> <span class="o">=</span> <span class="kc">false</span><span class="p">;</span>
<a name="sweetalert.js-294"></a><span class="p">};</span>
<a name="sweetalert.js-295"></a>
<a name="sweetalert.js-296"></a><span class="k">if</span> <span class="p">(</span><span class="k">typeof</span> <span class="nb">window</span> <span class="o">!==</span> <span class="s1">&#39;undefined&#39;</span><span class="p">)</span> <span class="p">{</span>
<a name="sweetalert.js-297"></a>  <span class="c1">// The &#39;handle-click&#39; module requires</span>
<a name="sweetalert.js-298"></a>  <span class="c1">// that &#39;sweetAlert&#39; was set as global.</span>
<a name="sweetalert.js-299"></a>  <span class="nb">window</span><span class="p">.</span><span class="nx">sweetAlert</span> <span class="o">=</span> <span class="nb">window</span><span class="p">.</span><span class="nx">swal</span> <span class="o">=</span> <span class="nx">sweetAlert</span><span class="p">;</span>
<a name="sweetalert.js-300"></a><span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
<a name="sweetalert.js-301"></a>  <span class="nx">_extend$hexToRgb$isIE8$logStr$colorLuminance</span><span class="p">.</span><span class="nx">logStr</span><span class="p">(</span><span class="s1">&#39;SweetAlert is a frontend module!&#39;</span><span class="p">);</span>
<a name="sweetalert.js-302"></a><span class="p">}</span>
<a name="sweetalert.js-303"></a><span class="nx">module</span><span class="p">.</span><span class="nx">exports</span> <span class="o">=</span> <span class="nx">exports</span><span class="p">[</span><span class="s1">&#39;default&#39;</span><span class="p">];</span>
</pre></div>
</td></tr></table>
    </div>
  


        </div>
        
      </div>
    </div>
  </div>
  
  <div data-module="source/set-changeset" data-hash="7e033726378897a38219afca9750ee1301297377"></div>



  
    
    
    
  
  

  </div>

        
        
        
          
    
    
  
        
      </div>
    </div>
  </div>

      </div>
    </div>
  
</div>

<div id="adg3-dialog"></div>


  

<div data-module="components/mentions/index">
  
    
    
  
  
    
    
  
  
    
    
  
</div>
<div data-module="components/typeahead/emoji/index">
  
    
    
  
</div>

<div data-module="components/repo-typeahead/index">
  
    
    
  
</div>

    
    
  

    
    
  

    
    
  

    
    
  


  


    
    
  

    
    
  


  
    
    
  
  
    
    
  
  
    
    
  
  
    
    
  
  
    
    
  
  
    
    
  
  
    
    
  


  
  
  <aui-inline-dialog
    id="help-menu-dialog"
    data-aui-alignment="bottom right"

    
    data-aui-alignment-static="true"
    data-module="header/help-menu"
    responds-to="toggle"
    aria-hidden="true">

  <div id="help-menu-section">
    <h1 class="help-menu-heading">Help</h1>

    <form id="help-menu-search-form" class="aui" target="_blank" method="get"
        action="https://support.atlassian.com/customer/search">
      <span id="help-menu-search-icon" class="aui-icon aui-icon-large aui-iconfont-search"></span>
      <input id="help-menu-search-form-input" name="q" class="text" type="text" placeholder="Ask a question">
    </form>

    <ul id="help-menu-links">
      <li>
        <a class="support-ga" data-support-gaq-page="DocumentationHome"
            href="https://confluence.atlassian.com/x/bgozDQ" target="_blank">
          Online help
        </a>
      </li>
      <li>
        <a class="support-ga" data-support-gaq-page="GitTutorials"
            href="https://www.atlassian.com/git?utm_source=bitbucket&amp;utm_medium=link&amp;utm_campaign=help_dropdown&amp;utm_content=learn_git"
            target="_blank">
          Learn Git
        </a>
      </li>
      <li>
        <a id="keyboard-shortcuts-link"
           href="#">Keyboard shortcuts</a>
      </li>
      <li>
        <a class="support-ga" data-support-gaq-page="DocumentationTutorials"
            href="https://confluence.atlassian.com/x/Q4sFLQ" target="_blank">
          Bitbucket tutorials
        </a>
      </li>
      <li>
        <a class="support-ga" data-support-gaq-page="SiteStatus"
            href="https://status.bitbucket.org/" target="_blank">
          Site status
        </a>
      </li>
      <li>
        <a class="support-ga" data-support-gaq-page="Home"
            href="https://support.atlassian.com/bitbucket-cloud/" target="_blank">
          Support
        </a>
      </li>
    </ul>
  </div>
</aui-inline-dialog>
  


  <div class="omnibar" data-module="components/omnibar/index">
    <form class="omnibar-form aui"></form>
  </div>
  
    
    
  
  
    
    
  
  
    
    
  
  
    
    
  





  

  <div class="_mustache-templates">
    
      <script id="branch-checkout-template" type="text/html">
        

<div id="checkout-branch-contents">
  <div class="command-line">
    <p>
      Check out this branch on your local machine to begin working on it.
    </p>
    <input type="text" class="checkout-command" readonly="readonly"
        
           value="git fetch && git checkout [[branchName]]"
        
        >
  </div>
  
    <div class="sourcetree-callout clone-in-sourcetree"
  data-module="components/clone/clone-in-sourcetree"
  data-https-url="https://jaospina28@bitbucket.org/jaospina28/portal_web.git"
  data-ssh-url="git@bitbucket.org:jaospina28/portal_web.git">

  <div>
    <button class="aui-button aui-button-primary">
      
        Check out in Sourcetree
      
    </button>
  </div>

  <p class="windows-text">
    
      <a href="http://www.sourcetreeapp.com/?utm_source=internal&amp;utm_medium=link&amp;utm_campaign=clone_repo_win" target="_blank">Atlassian Sourcetree</a>
      is a free Git and Mercurial client for Windows.
    
  </p>
  <p class="mac-text">
    
      <a href="http://www.sourcetreeapp.com/?utm_source=internal&amp;utm_medium=link&amp;utm_campaign=clone_repo_mac" target="_blank">Atlassian Sourcetree</a>
      is a free Git and Mercurial client for Mac.
    
  </p>
</div>
  
</div>

      </script>
    
      <script id="branch-dialog-template" type="text/html">
        

<div class="tabbed-filter-widget branch-dialog">
  <div class="tabbed-filter">
    <input placeholder="Filter branches" class="filter-box" autosave="branch-dropdown-24569326" type="text">
    [[^ignoreTags]]
      <div class="aui-tabs horizontal-tabs aui-tabs-disabled filter-tabs">
        <ul class="tabs-menu">
          <li class="menu-item active-tab"><a href="#branches">Branches</a></li>
          <li class="menu-item"><a href="#tags">Tags</a></li>
        </ul>
      </div>
    [[/ignoreTags]]
  </div>
  
    <div class="tab-pane active-pane" id="branches" data-filter-placeholder="Filter branches">
      <ol class="filter-list">
        <li class="empty-msg">No matching branches</li>
        [[#branches]]
          
            [[#hasMultipleHeads]]
              [[#heads]]
                <li class="comprev filter-item">
                  <a class="pjax-trigger filter-item-link" href="/jaospina28/portal_web/src/[[changeset]]/js/sweetalert.js?at=[[safeName]]"
                     title="[[name]]">
                    [[name]] ([[shortChangeset]])
                  </a>
                </li>
              [[/heads]]
            [[/hasMultipleHeads]]
            [[^hasMultipleHeads]]
              <li class="comprev filter-item">
                <a class="pjax-trigger filter-item-link" href="/jaospina28/portal_web/src/[[changeset]]/js/sweetalert.js?at=[[safeName]]" title="[[name]]">
                  [[name]]
                </a>
              </li>
            [[/hasMultipleHeads]]
          
        [[/branches]]
      </ol>
    </div>
    <div class="tab-pane" id="tags" data-filter-placeholder="Filter tags">
      <ol class="filter-list">
        <li class="empty-msg">No matching tags</li>
        [[#tags]]
          <li class="comprev filter-item">
            <a class="pjax-trigger filter-item-link" href="/jaospina28/portal_web/src/[[changeset]]/js/sweetalert.js?at=[[safeName]]" title="[[name]]">
              [[name]]
            </a>
          </li>
        [[/tags]]
      </ol>
    </div>
  
</div>

      </script>
    
      <script id="image-upload-template" type="text/html">
        

<form id="upload-image" method="POST"
    
      action="/xhr/jaospina28/portal_web/image-upload/"
    >
  <input type='hidden' name='csrfmiddlewaretoken' value='qC2D4Yt5kqzOZt0r33kO2mU3HVD1mLaloqPfKdSk2yPkAeXTcruWYrMLAAMlkAKj' />

  <div class="drop-target">
    <p class="centered">Drag image here</p>
  </div>

  
  <div>
    <button class="aui-button click-target">Select an image</button>
    <input name="file" type="file" class="hidden file-target"
           accept="image/jpeg, image/gif, image/png" />
    <input type="submit" class="hidden">
  </div>
</form>


      </script>
    
      <script id="mention-result" type="text/html">
        
<span class="mention-result">
  <span class="aui-avatar aui-avatar-small mention-result--avatar">
    <span class="aui-avatar-inner">
      <img src="[[avatar_url]]">
    </span>
  </span>
  [[#display_name]]
    <span class="display-name mention-result--display-name">[[&display_name]]</span> <small class="username mention-result--username">[[&username]]</small>
  [[/display_name]]
  [[^display_name]]
    <span class="username mention-result--username">[[&username]]</span>
  [[/display_name]]
  [[#is_teammate]][[^is_team]]
    <span class="aui-lozenge aui-lozenge-complete aui-lozenge-subtle mention-result--lozenge">teammate</span>
  [[/is_team]][[/is_teammate]]
</span>
      </script>
    
      <script id="mention-call-to-action" type="text/html">
        
[[^query]]
<li class="bb-typeahead-item">Begin typing to search for a user</li>
[[/query]]
[[#query]]
<li class="bb-typeahead-item">Continue typing to search for a user</li>
[[/query]]

      </script>
    
      <script id="mention-no-results" type="text/html">
        
[[^searching]]
<li class="bb-typeahead-item">Found no matching users for <em>[[query]]</em>.</li>
[[/searching]]
[[#searching]]
<li class="bb-typeahead-item bb-typeahead-searching">Searching for <em>[[query]]</em>.</li>
[[/searching]]

      </script>
    
      <script id="emoji-result" type="text/html">
        
<span class="emoji-result">
  <span class="emoji-result--avatar">
    <img class="emoji" src="[[src]]">
  </span>
  <span class="name emoji-result--name">[[&name]]</span>
</span>

      </script>
    
      <script id="repo-typeahead-result" type="text/html">
        <span class="aui-avatar aui-avatar-project aui-avatar-xsmall">
  <span class="aui-avatar-inner">
    <img src="[[avatar]]">
  </span>
</span>
<span class="owner">[[&owner]]</span>/<span class="slug">[[&slug]]</span>

      </script>
    
      <script id="share-form-template" type="text/html">
        

<div class="error aui-message hidden">
  <span class="aui-icon icon-error"></span>
  <div class="message"></div>
</div>
<form class="aui">
  <table class="widget bb-list aui">
    <thead>
    <tr class="assistive">
      <th class="user">User</th>
      <th class="role">Role</th>
      <th class="actions">Actions</th>
    </tr>
    </thead>
    <tbody>
      <tr class="form">
        <td colspan="2">
          <input type="text" class="text bb-user-typeahead user-or-email"
                 placeholder="Username or email address"
                 autocomplete="off"
                 data-bb-typeahead-focus="false"
                 [[#disabled]]disabled[[/disabled]]>
        </td>
        <td class="actions">
          <button type="submit" class="aui-button aui-button-light" disabled>Add</button>
        </td>
      </tr>
    </tbody>
  </table>
</form>

      </script>
    
      <script id="share-detail-template" type="text/html">
        

[[#username]]
<td class="user
    [[#hasCustomGroups]]custom-groups[[/hasCustomGroups]]"
    [[#error]]data-error="[[error]]"[[/error]]>
  <div title="[[displayName]]">
    <a href="/[[username]]/" class="user">
      <span class="aui-avatar aui-avatar-xsmall">
        <span class="aui-avatar-inner">
          <img src="[[avatar]]">
        </span>
      </span>
      <span>[[displayName]]</span>
    </a>
  </div>
</td>
[[/username]]
[[^username]]
<td class="email
    [[#hasCustomGroups]]custom-groups[[/hasCustomGroups]]"
    [[#error]]data-error="[[error]]"[[/error]]>
  <div title="[[email]]">
    <span class="aui-icon aui-icon-small aui-iconfont-email"></span>
    [[email]]
  </div>
</td>
[[/username]]
<td class="role
    [[#hasCustomGroups]]custom-groups[[/hasCustomGroups]]">
  <div>
    [[#group]]
      [[#hasCustomGroups]]
        <select class="group [[#noGroupChoices]]hidden[[/noGroupChoices]]">
          [[#groups]]
            <option value="[[slug]]"
                [[#isSelected]]selected[[/isSelected]]>
              [[name]]
            </option>
          [[/groups]]
        </select>
      [[/hasCustomGroups]]
      [[^hasCustomGroups]]
      <label>
        <input type="checkbox" class="admin"
            [[#isAdmin]]checked[[/isAdmin]]>
        Administrator
      </label>
      [[/hasCustomGroups]]
    [[/group]]
    [[^group]]
      <ul>
        <li class="permission aui-lozenge aui-lozenge-complete
            [[^read]]aui-lozenge-subtle[[/read]]"
            data-permission="read">
          read
        </li>
        <li class="permission aui-lozenge aui-lozenge-complete
            [[^write]]aui-lozenge-subtle[[/write]]"
            data-permission="write">
          write
        </li>
        <li class="permission aui-lozenge aui-lozenge-complete
            [[^admin]]aui-lozenge-subtle[[/admin]]"
            data-permission="admin">
          admin
        </li>
      </ul>
    [[/group]]
  </div>
</td>
<td class="actions
    [[#hasCustomGroups]]custom-groups[[/hasCustomGroups]]">
  <div>
    <a href="#" class="delete">
      <span class="aui-icon aui-icon-small aui-iconfont-remove">Delete</span>
    </a>
  </div>
</td>

      </script>
    
      <script id="share-team-template" type="text/html">
        

<div class="clearfix">
  <span class="team-avatar-container">
    <span class="aui-avatar aui-avatar-medium">
      <span class="aui-avatar-inner">
        <img src="[[avatar]]">
      </span>
    </span>
  </span>
  <span class="team-name-container">
    [[display_name]]
  </span>
</div>
<p class="helptext">
  
    Existing users are granted access to this team immediately.
    New users will be sent an invitation.
  
</p>
<div class="share-form"></div>

      </script>
    
      <script id="scope-list-template" type="text/html">
        <ul class="scope-list">
  [[#scopes]]
    <li class="scope-list--item">
      <span class="scope-list--icon aui-icon aui-icon-small [[icon]]"></span>
      <span class="scope-list--description">[[description]]</span>
    </li>
  [[/scopes]]
</ul>

      </script>
    
      <script id="source-changeset" type="text/html">
        

<a href="/jaospina28/portal_web/src/[[raw_node]]/[[path]]?at=master"
    class="[[#selected]]highlight[[/selected]]"
    data-hash="[[node]]">
  [[#author.username]]
    <span class="aui-avatar aui-avatar-xsmall">
      <span class="aui-avatar-inner">
        <img src="[[author.avatar]]">
      </span>
    </span>
    <span class="author" title="[[raw_author]]">[[author.display_name]]</span>
  [[/author.username]]
  [[^author.username]]
    <span class="aui-avatar aui-avatar-xsmall">
      <span class="aui-avatar-inner">
        <img src="https://d301sr5gafysq2.cloudfront.net/06e6aed05468/img/default_avatar/user_blue.svg">
      </span>
    </span>
    <span class="author unmapped" title="[[raw_author]]">[[author]]</span>
  [[/author.username]]
  <time datetime="[[utctimestamp]]" data-title="true">[[utctimestamp]]</time>
  <span class="message">[[message]]</span>
</a>

      </script>
    
      <script id="embed-template" type="text/html">
        

<form class="aui inline-dialog-embed-dialog">
  <label for="embed-code-[[dialogId]]">Embed this source in another page:</label>
  <input type="text" readonly="true" value="&lt;script src=&quot;[[url]]&quot;&gt;&lt;/script&gt;" id="embed-code-[[dialogId]]" class="embed-code">
</form>

      </script>
    
      <script id="edit-form-template" type="text/html">
        


<form class="bb-content-container online-edit-form aui"
      data-repository="[[owner]]/[[slug]]"
      data-destination-repository="[[destinationOwner]]/[[destinationSlug]]"
      data-local-id="[[localID]]"
      [[#isWriter]]data-is-writer="true"[[/isWriter]]
      [[#hasPushAccess]]data-has-push-access="true"[[/hasPushAccess]]
      [[#isPullRequest]]data-is-pull-request="true"[[/isPullRequest]]
      [[#hideCreatePullRequest]]data-hide-create-pull-request="true"[[/hideCreatePullRequest]]
      data-hash="[[hash]]"
      data-branch="[[branch]]"
      data-path="[[path]]"
      data-is-create="[[isCreate]]"
      data-preview-url="/xhr/[[owner]]/[[slug]]/preview/[[hash]]/[[encodedPath]]"
      data-preview-error="We had trouble generating your preview."
      data-unsaved-changes-error="Your changes will be lost. Are you sure you want to leave?">
  <div class="bb-content-container-header">
    <div class="bb-content-container-header-primary">
      <span class="bb-content-container-heading">
        [[#isCreate]]
          [[#branch]]
            
              Creating <span class="edit-path">[[path]]</span> on branch: <strong>[[branch]]</strong>
            
          [[/branch]]
          [[^branch]]
            [[#path]]
              
                Creating <span class="edit-path">[[path]]</span>
              
            [[/path]]
            [[^path]]
              
                Creating <span class="edit-path">unnamed file</span>
              
            [[/path]]
          [[/branch]]
        [[/isCreate]]
        [[^isCreate]]
          
            Editing <span class="edit-path">[[path]]</span> on branch: <strong>[[branch]]</strong>
          
        [[/isCreate]]
      </span>
    </div>
    <div class="bb-content-container-header-secondary">
      <div class="hunk-nav aui-buttons">
        <button class="prev-hunk-button aui-button aui-button-light"
            disabled="disabled" aria-disabled="true"
            title="Previous change">
          <span class="aui-icon aui-icon-small aui-iconfont-up">Previous change</span>
        </button>
        <button class="next-hunk-button aui-button aui-button-light"
            disabled="disabled" aria-disabled="true"
            title="Next change">
          <span class="aui-icon aui-icon-small aui-iconfont-down">Next change</span>
        </button>
      </div>
    </div>
  </div>
  <div class="bb-content-container-body has-header has-footer file-editor">
    <textarea id="id_source"></textarea>
  </div>
  <div class="preview-pane"></div>
  <div class="bb-content-container-footer">
    <div class="bb-content-container-footer-primary">
      <div id="syntax-mode" class="bb-content-container-item field">
        <label for="id_syntax-mode" class="online-edit-form--label">Syntax mode:</label>
        <select id="id_syntax-mode">
          [[#syntaxes]]
            <option value="[[#mime]][[mime]][[/mime]][[^mime]][[mode]][[/mime]]">[[name]]</option>
          [[/syntaxes]]
        </select>
      </div>
      <div id="indent-mode" class="bb-content-container-item field">
        <label for="id_indent-mode" class="online-edit-form--label">Indent mode:</label>
        <select id="id_indent-mode">
          <option value="tabs">Tabs</option>
          <option value="spaces">Spaces</option>
        </select>
      </div>
      <div id="indent-size" class="bb-content-container-item field">
        <label for="id_indent-size" class="online-edit-form--label">Indent size:</label>
        <select id="id_indent-size">
          <option value="2">2</option>
          <option value="4">4</option>
          <option value="8">8</option>
        </select>
      </div>
      <div id="wrap-mode" class="bb-content-container-item field">
        <label for="id_wrap-mode" class="online-edit-form--label">Line wrap:</label>
        <select id="id_wrap-mode">
          <option value="">Off</option>
          <option value="soft">On</option>
        </select>
      </div>
    </div>
    <div class="bb-content-container-footer-secondary">
      [[^isCreate]]
        <button class="preview-button aui-button aui-button-light"
                disabled="disabled" aria-disabled="true"
                data-preview-label="View diff"
                data-edit-label="Edit file">View diff</button>
      [[/isCreate]]
      <button class="save-button aui-button aui-button-primary"
              disabled="disabled" aria-disabled="true">Commit</button>
      [[^isCreate]]
        <a class="aui-button aui-button-link cancel-link" href="#">Cancel</a>
      [[/isCreate]]
    </div>
  </div>
</form>

      </script>
    
      <script id="commit-form-template" type="text/html">
        

<form class="aui commit-form"
      data-title="Commit changes"
      [[#isDelete]]
        data-default-message="[[filename]] deleted online with Bitbucket"
      [[/isDelete]]
      [[#isCreate]]
        data-default-message="[[filename]] created online with Bitbucket"
      [[/isCreate]]
      [[^isDelete]]
        [[^isCreate]]
          data-default-message="[[filename]] edited online with Bitbucket"
        [[/isCreate]]
      [[/isDelete]]
      data-fork-error="We had trouble creating your fork."
      data-commit-error="We had trouble committing your changes."
      data-pull-request-error="We had trouble creating your pull request."
      data-update-error="We had trouble updating your pull request."
      data-branch-conflict-error="A branch with that name already exists."
      data-forking-message="Forking repository"
      data-committing-message="Committing changes"
      data-merging-message="Branching and merging changes"
      data-creating-pr-message="Creating pull request"
      data-updating-pr-message="Updating pull request"
      data-cta-label="Commit"
      data-cancel-label="Cancel">
  [[#isDelete]]
    <div class="aui-message info">
      <span class="aui-icon icon-info"></span>
      <span class="message">
        
          Committing this change will delete [[filename]] from your repository.
        
      </span>
    </div>
  [[/isDelete]]
  <div class="aui-message error hidden">
    <span class="aui-icon icon-error"></span>
    <span class="message"></span>
  </div>
  [[^isWriter]]
    <div class="aui-message info">
      <span class="aui-icon icon-info"></span>
      <p class="title">
        
          You don't have write access to this repository.
        
      </p>
      <span class="message">
        
          We'll create a fork for your changes and submit a
          pull request back to this repository.
        
      </span>
    </div>
  [[/isWriter]]
  [[#isRename]]
    <div class="field-group">
      <label for="id_path">New path</label>
      <input type="text" id="id_path" class="text" value="[[path]]"/>
    </div>
  [[/isRename]]
  <div class="field-group">
    <label for="id_message">Commit message</label>
    <textarea id="id_message" class="long-field textarea"></textarea>
  </div>
  [[^isPullRequest]]
    [[#isWriter]]
      <fieldset class="group">
        <div class="checkbox">
          [[#hasPushAccess]]
            [[^hideCreatePullRequest]]
              <input id="id_create-pullrequest" class="checkbox" type="checkbox">
              <label for="id_create-pullrequest">Create a pull request for this change</label>
            [[/hideCreatePullRequest]]
          [[/hasPushAccess]]
          [[^hasPushAccess]]
            <input id="id_create-pullrequest" class="checkbox" type="checkbox" checked="checked" aria-disabled="true" disabled="true">
            <label for="id_create-pullrequest" title="Branch restrictions do not allow you to update this branch.">Create a pull request for this change</label>
          [[/hasPushAccess]]
        </div>
      </fieldset>
      <div id="pr-fields">
        <div id="branch-name-group" class="field-group">
          <label for="id_branch-name">Branch name</label>
          <input type="text" id="id_branch-name" class="text long-field">
        </div>
        

<div class="field-group" id="id_reviewers_group">
  <label for="reviewers">Reviewers</label>

  
  <input id="reviewers" name="reviewers" type="hidden"
          value=""
          data-mention-url="/xhr/mentions/repositories/:dest_username/:dest_slug"
          data-reviewers="[]"
          data-suggested="[]"
          data-locked="[]">

  <div class="error"></div>
  <div class="suggested-reviewers"></div>

</div>

      </div>
    [[/isWriter]]
  [[/isPullRequest]]
  <button type="submit" id="id_submit">Commit</button>
</form>

      </script>
    
      <script id="merge-message-template" type="text/html">
        Merged [[hash]] into [[branch]]

[[message]]

      </script>
    
      <script id="commit-merge-error-template" type="text/html">
        



  We had trouble merging your changes. We stored them on the <strong>[[branch]]</strong> branch, so feel free to
  <a href="/[[owner]]/[[slug]]/full-commit/[[hash]]/[[path]]?at=[[encodedBranch]]">view them</a> or
  <a href="#" class="create-pull-request-link">create a pull request</a>.


      </script>
    
      <script id="selected-reviewer-template" type="text/html">
        <div class="aui-avatar aui-avatar-xsmall">
  <div class="aui-avatar-inner">
    <img src="[[avatar_url]]">
  </div>
</div>
[[display_name]]

      </script>
    
      <script id="suggested-reviewer-template" type="text/html">
        <button class="aui-button aui-button-link" type="button" tabindex="-1">[[display_name]]</button>

      </script>
    
      <script id="suggested-reviewers-template" type="text/html">
        

<span class="suggested-reviewer-list-label">Recent:</span>
<ul class="suggested-reviewer-list unstyled-list"></ul>

      </script>
    
      <script id="omnibar-form-template" type="text/html">
        <div class="omnibar-input-container">
  <input class="omnibar-input" type="text" [[#placeholder]]placeholder="[[placeholder]]"[[/placeholder]]>
</div>
<ul class="omnibar-result-group-list"></ul>

      </script>
    
      <script id="omnibar-blank-slate-template" type="text/html">
        

<div class="omnibar-blank-slate">No results found</div>

      </script>
    
      <script id="omnibar-result-group-list-item-template" type="text/html">
        <div class="omnibar-result-group-header clearfix">
  <h2 class="omnibar-result-group-label" title="[[label]]">[[label]]</h2>
  <span class="omnibar-result-group-context" title="[[context]]">[[context]]</span>
</div>
<ul class="omnibar-result-list unstyled-list"></ul>

      </script>
    
      <script id="omnibar-result-list-item-template" type="text/html">
        [[#url]]
  <a href="[[&url]]" class="omnibar-result-label">[[&label]]</a>
[[/url]]
[[^url]]
  <span class="omnibar-result-label">[[&label]]</span>
[[/url]]
[[#context]]
  <span class="omnibar-result-context">[[context]]</span>
[[/context]]

      </script>
    
  </div>




  
  


<script nonce="TpWhephoCu4IX31D">
  window.__initial_state__ = {"global": {"features": {"cache-ref-adverts": true, "evolution": false, "diff-renames-public": true, "app-passwords": true, "diff-renames-internal": true, "search-syntax-highlighting": true, "code-search-cta-launch": true, "fe_word_diff": true, "trello-boards": true, "atlassian-editor": false, "use-moneybucket": true, "show-guidance-message": true, "code-search-cta": true, "clonebundles": true, "lfs_post_beta": true}, "locale": "en", "geoip_country": "CO", "targetFeatures": {"cache-ref-adverts": true, "evolution": false, "diff-renames-public": true, "app-passwords": true, "diff-renames-internal": true, "search-syntax-highlighting": true, "code-search-cta-launch": true, "fe_word_diff": true, "trello-boards": true, "atlassian-editor": false, "use-moneybucket": true, "show-guidance-message": true, "code-search-cta": true, "clonebundles": true, "lfs_post_beta": true}, "isFocusedTask": false, "teams": [], "bitbucketActions": [{"analytics_label": null, "is_client_link": false, "icon_class": "", "badge_label": null, "weight": 100, "url": "/repo/create?owner=jaospina28", "tab_name": null, "can_display": true, "label": "<strong>Repository<\/strong>", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repository-create-drawer-item", "icon": ""}, {"analytics_label": null, "is_client_link": false, "icon_class": "", "badge_label": null, "weight": 110, "url": "/account/create-team/", "tab_name": null, "can_display": true, "label": "<strong>Team<\/strong>", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "team-create-drawer-item", "icon": ""}, {"analytics_label": null, "is_client_link": false, "icon_class": "", "badge_label": null, "weight": 120, "url": "/account/projects/create?owner=jaospina28", "tab_name": null, "can_display": true, "label": "<strong>Project<\/strong>", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "project-create-drawer-item", "icon": ""}, {"analytics_label": null, "is_client_link": false, "icon_class": "", "badge_label": null, "weight": 130, "url": "/snippets/new?owner=jaospina28", "tab_name": null, "can_display": true, "label": "<strong>Snippet<\/strong>", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "snippet-create-drawer-item", "icon": ""}], "targetUser": {"username": "jaospina28", "website": null, "display_name": "Jhonny Andres Ospina Loaiza", "account_id": "557058:87d28f5a-788c-4664-877e-e7aae2899f22", "links": {"self": {"href": "https://bitbucket.org/!api/2.0/users/jaospina28"}, "html": {"href": "https://bitbucket.org/jaospina28/"}, "avatar": {"href": "https://bitbucket.org/account/jaospina28/avatar/32/"}}, "created_on": "2017-01-20T21:14:43.029970+00:00", "is_staff": false, "location": null, "type": "user", "uuid": "{854b30f1-ea48-4875-846c-414d6493907c}"}, "isNavigationOpen": true, "path": "/jaospina28/portal_web/src/7e033726378897a38219afca9750ee1301297377/js/sweetalert.js", "focusedTaskBackButtonUrl": "https://bitbucket.org/jaospina28/portal_web/src/7e033726378897a38219afca9750ee1301297377/js/?at=master", "currentUser": {"username": "jaospina28", "website": null, "display_name": "Jhonny Andres Ospina Loaiza", "account_id": "557058:87d28f5a-788c-4664-877e-e7aae2899f22", "links": {"self": {"href": "https://bitbucket.org/!api/2.0/users/jaospina28"}, "html": {"href": "https://bitbucket.org/jaospina28/"}, "avatar": {"href": "https://bitbucket.org/account/jaospina28/avatar/32/"}}, "extra": {"has_ssh_key": false, "has_atlassian_account": true}, "created_on": "2017-01-20T21:14:43.029970+00:00", "is_staff": false, "location": null, "type": "user", "uuid": "{854b30f1-ea48-4875-846c-414d6493907c}"}}, "connect": {}, "repository": {"section": {"connectActions": [], "cloneProtocol": "https", "currentRepository": {"scm": "git", "website": "", "name": "Portal_Web", "language": "", "description": "", "links": {"clone": [{"href": "https://jaospina28@bitbucket.org/jaospina28/portal_web.git", "name": "https"}, {"href": "git@bitbucket.org:jaospina28/portal_web.git", "name": "ssh"}], "self": {"href": "https://bitbucket.org/!api/2.0/repositories/jaospina28/portal_web"}, "html": {"href": "https://bitbucket.org/jaospina28/portal_web"}, "avatar": {"href": "https://bitbucket.org/jaospina28/portal_web/avatar/32/"}}, "full_name": "jaospina28/portal_web", "owner": {"username": "jaospina28", "website": null, "display_name": "Jhonny Andres Ospina Loaiza", "account_id": "557058:87d28f5a-788c-4664-877e-e7aae2899f22", "links": {"self": {"href": "https://bitbucket.org/!api/2.0/users/jaospina28"}, "html": {"href": "https://bitbucket.org/jaospina28/"}, "avatar": {"href": "https://bitbucket.org/account/jaospina28/avatar/32/"}}, "created_on": "2017-01-20T21:14:43.029970+00:00", "is_staff": false, "location": null, "type": "user", "uuid": "{854b30f1-ea48-4875-846c-414d6493907c}"}, "type": "repository", "slug": "portal_web", "is_private": true, "uuid": "{65a6f3db-1282-419e-9e8d-f1d116ec3dae}"}, "menuItems": [{"analytics_label": "repository.overview", "is_client_link": false, "icon_class": "icon-overview", "badge_label": null, "weight": 100, "url": "/jaospina28/portal_web/overview", "tab_name": "overview", "can_display": true, "label": "Overview", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-overview-link", "icon": "icon-overview"}, {"analytics_label": "repository.source", "is_client_link": false, "icon_class": "icon-source", "badge_label": null, "weight": 200, "url": "/jaospina28/portal_web/src", "tab_name": "source", "can_display": true, "label": "Source", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-source-link", "icon": "icon-source"}, {"analytics_label": "repository.commits", "is_client_link": false, "icon_class": "icon-commits", "badge_label": null, "weight": 300, "url": "/jaospina28/portal_web/commits/", "tab_name": "commits", "can_display": true, "label": "Commits", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-commits-link", "icon": "icon-commits"}, {"analytics_label": "repository.branches", "is_client_link": false, "icon_class": "icon-branches", "badge_label": null, "weight": 400, "url": "/jaospina28/portal_web/branches/", "tab_name": "branches", "can_display": true, "label": "Branches", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-branches-link", "icon": "icon-branches"}, {"analytics_label": "repository.pullrequests", "is_client_link": false, "icon_class": "icon-pull-requests", "badge_label": "0 open pull requests", "weight": 500, "url": "/jaospina28/portal_web/pull-requests/", "tab_name": "pullrequests", "can_display": true, "label": "Pull requests", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-pullrequests-link", "icon": "icon-pull-requests"}, {"analytics_label": "user.addon", "is_client_link": false, "icon_class": "aui-iconfont-build", "badge_label": null, "weight": 550, "url": "/jaospina28/portal_web/addon/pipelines/home", "tab_name": "repopage-dG9aoB-add-on-link", "can_display": true, "label": "Pipelines", "anchor": true, "analytics_payload": {}, "icon_url": null, "type": "connect_menu_item", "id": "repopage-dG9aoB-add-on-link", "target": "_self"}, {"analytics_label": "repository.downloads", "is_client_link": false, "icon_class": "icon-downloads", "badge_label": null, "weight": 800, "url": "/jaospina28/portal_web/downloads/", "tab_name": "downloads", "can_display": true, "label": "Downloads", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-downloads-link", "icon": "icon-downloads"}, {"analytics_label": "site.addon", "is_client_link": false, "icon_class": "aui-iconfont-unfocus", "badge_label": null, "weight": 100, "url": "/jaospina28/portal_web/addon/bitbucket-trello-integration-installer/trello-board", "tab_name": "repopage-74Mgx6-add-on-link", "can_display": true, "label": "Boards", "anchor": false, "analytics_payload": {}, "icon_url": "https://bitbucket-assetroot.s3.amazonaws.com/add-on/icons/35ceae0c-17b1-443c-a6e8-d9de1d7cccdb.svg?Signature=NANsgibCMyn4fM%2FYgY7mTex%2BrGg%3D&Expires=1517938141&AWSAccessKeyId=AKIAIQWXW6WLXMB5QZAQ&versionId=3oqdrZZjT.HijZ3kHTPsXE6IcSjhCG.P", "type": "connect_menu_item", "id": "repopage-74Mgx6-add-on-link", "target": "_self"}, {"analytics_label": "repository.settings", "is_client_link": false, "icon_class": "icon-settings", "badge_label": null, "weight": 100, "url": "/jaospina28/portal_web/admin", "tab_name": "admin", "can_display": true, "label": "Settings", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-settings-link", "icon": "icon-settings"}], "bitbucketActions": [{"analytics_label": "repository.clone", "is_client_link": false, "icon_class": "icon-clone", "badge_label": null, "weight": 100, "url": "#clone", "tab_name": "clone", "can_display": true, "label": "<strong>Clone<\/strong> this repository", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-clone-button", "icon": "icon-clone"}, {"analytics_label": "repository.create_branch", "is_client_link": false, "icon_class": "icon-create-branch", "badge_label": null, "weight": 200, "url": "/jaospina28/portal_web/branch", "tab_name": "create-branch", "can_display": true, "label": "Create a <strong>branch<\/strong>", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-create-branch-link", "icon": "icon-create-branch"}, {"analytics_label": "create_pullrequest", "is_client_link": false, "icon_class": "icon-create-pull-request", "badge_label": null, "weight": 300, "url": "/jaospina28/portal_web/pull-requests/new", "tab_name": "create-pullreqs", "can_display": true, "label": "Create a <strong>pull request<\/strong>", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-create-pull-request-link", "icon": "icon-create-pull-request"}, {"analytics_label": "repository.compare", "is_client_link": false, "icon_class": "aui-icon-small aui-iconfont-devtools-compare", "badge_label": null, "weight": 400, "url": "/jaospina28/portal_web/branches/compare", "tab_name": "compare", "can_display": true, "label": "<strong>Compare<\/strong> branches or tags", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-compare-link", "icon": "aui-icon-small aui-iconfont-devtools-compare"}, {"analytics_label": "repository.fork", "is_client_link": false, "icon_class": "icon-fork", "badge_label": null, "weight": 500, "url": "/jaospina28/portal_web/fork", "tab_name": "fork", "can_display": true, "label": "<strong>Fork<\/strong> this repository", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-fork-link", "icon": "icon-fork"}], "activeMenuItem": "source"}}};
  window.__settings__ = {"SOCIAL_AUTH_ATLASSIANID_LOGOUT_URL": "https://id.atlassian.com/logout", "CANON_URL": "https://bitbucket.org", "API_CANON_URL": "https://api.bitbucket.org"};
</script>

<script src="https://d301sr5gafysq2.cloudfront.net/06e6aed05468/jsi18n/en/djangojs.js" nonce="TpWhephoCu4IX31D"></script>

  <script src="https://d301sr5gafysq2.cloudfront.net/06e6aed05468/dist/webpack/locales/en.js"></script>

<script src="https://d301sr5gafysq2.cloudfront.net/06e6aed05468/dist/webpack/vendor.js" nonce="TpWhephoCu4IX31D"></script>
<script src="https://d301sr5gafysq2.cloudfront.net/06e6aed05468/dist/webpack/app.js" nonce="TpWhephoCu4IX31D"></script>


<script async src="https://www.google-analytics.com/analytics.js" nonce="TpWhephoCu4IX31D"></script>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","queueTime":0,"licenseKey":"a2cef8c3d3","agent":"","transactionName":"Z11RZxdWW0cEVkYLDV4XdUYLVEFdClsdAAtEWkZQDlJBGgRFQhFMQl1DXFcZQ10AQkFYBFlUVlEXWEJHAA==","applicationID":"1841284","errorBeacon":"bam.nr-data.net","applicationTime":1246}</script>
</body>
</html>