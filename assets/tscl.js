define(["xm/dfp-fp2","xm/localip"],function(n,t){function r(){return new Promise(function(t,r){var e=new n;e.get(function(n,r){for(var e,o={},e=0;e<r.length;e++)o[r[e].key]=r[e].value;t({fp2_hash:n,fp2_keys:o})})})}function e(){return navigator.hardwareConcurrency}function o(){return window.localStorage?window.localStorage.getItem(f):null}function i(n){p=n}function c(n,t){if(!(t instanceof Promise)){var r=t;t=new Promise(function(n,t){try{n(r())}catch(n){t(n)}})}return t.then(function(t){var r={};return null!=t&&(r[n]=t),r},function(t){var r={};return r[n]={__err__:t},r})}function u(n){var t={};return Object.assign.apply(null,[t].concat(n)),t}function a(n){if(n.setBindingId)try{window.localStorage.setItem(f,n.setBindingId)}catch(n){}}function l(){var n=Object.keys(p).map(function(n){return c(n,p[n])}),t=d.concat(n);return Promise.all(t).then(function(n){return u(n)})}var f="ts.fp.binding_id",s="1.0.0",p={},d=[c("binding_id",o),c("collector_version",function(){return s}),c("local_ip",t.promiseLocalIp()),c("cpu_cores",e),r()];return{promiseCollection:l,evaluateDfpServerInstructions:a,setUserCollectors:i}});