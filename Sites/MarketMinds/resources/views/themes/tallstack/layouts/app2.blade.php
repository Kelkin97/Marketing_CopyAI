<html lang="en"><div id="twoseven-scripts" data-info="Scripts added by TwoSeven extension" style="display: none !important; position: static !important; top: 0px !important; left: 0px !important; width: 0px !important; height: 0px !important;"><script type="text/javascript" id="__tmpScript-17516545" data-added-by-two-seven="1">(function() {
        window.twoseven = {};
      })();</script><script type="text/javascript" id="__tmpScript-748614958" data-added-by-two-seven="1">(function() {
        window.twoseven.waitForDOMNode = async function t(e,t=document){e=e||{};const{type:n,value:o}=e;if(!n||!o)throw new Error("Must specify identifier");let s=o;switch(n){case"tag":s=o.toUpperCase()}if("check"!==n){const e=await i({type:"selector",value:s},[],t);if(e)return new Promise(t=>t(e))}async function i({type:e,value:t},n,o){let s;switch(e){case"tag":s=n.find(e=>e.tagName===t);break;case"selector":s=o.querySelector(t);break;case"check":for(const e of n){if(await t(e))return e}}return s}return new Promise((e,o)=>{const a=new MutationObserver(async o=>{for(const r of o)if("childList"===r.type){const o=Array.from(r.addedNodes),w=await i({type:n,value:s},o,t);if(w)return a.disconnect(),e(w)}});a.observe(t,{childList:!0,subtree:!0})})};
      })();</script><script type="text/javascript" id="__tmpScript-14587845" data-added-by-two-seven="1">(function() {
        
    window.twoseven.reportError = function n(e,t,n){"string"==typeof(n=n||{})&&(n={message:n});const{message:o,stack:s}=t;Object.assign(n,{tag:e,error:{message:o,stack:s}}),window.tsExtGetPostToParent()({name:name,tag:e,action:"report-error",json:n}),console.error(JSON.stringify(n.error))}
  ;
      })();</script><script type="text/javascript" id="__tmpScript-353680121" data-added-by-two-seven="1">(function() {
        
    window.twosevenHmsToSecondsOnly = function(str) {
        var p = str.split(':'),
            s = 0, m = 1;

        while (p.length > 0) {
            s += m * parseInt(p.pop(), 10);
            m *= 60;
        }

        return s;
    }
  ;
      })();</script><script type="text/javascript" id="__tmpScript-329720145" data-added-by-two-seven="1">(function() {
        window.twosevenExtLog = function(e,o,c){o||(o=e,e=void 0);let n=c||"black";if(c)switch(c){case"success":n="Green";break;case"info":n="DodgerBlue";break;case"error":n="Red";break;case"warning":n="Orange";break;default:n=c}e?console.log("%c"+e+": "+o,`color:${n}`):console.log("%c"+o,`color:${n}`)};
      })();</script><script type="text/javascript" id="__tmpScript-633361181" data-added-by-two-seven="1">(function() {
        
    document.twosevenGET = function(url, callback) {
      var xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE ) {
          if (xmlhttp.status == 200) {
            callback(null, xmlhttp.responseText);
          } else {
            callback('something else other than 200 was returned', '');
          }
        }
      };
      xmlhttp.open("GET", url, true);
      xmlhttp.send();
    };
  ;
      })();</script><script type="text/javascript" id="__tmpScript-633582154" data-added-by-two-seven="1">(function() {
        
    window.triggerEvent = function(e,t,n,o=!1){let s;o?(n&&"string"!=typeof n&&(n=JSON.stringify(n)),s=n):s={data:n},window.twosevenScriptsDiv&&n&&"object"==typeof n&&(console.warn(`WARNING: Attempting to send an object via event.detail from CS->Page does not work on Firefox: ${JSON.stringify(n)}`),console.error((new Error).stack));var i=new CustomEvent(t,{bubbles:!0,composed:!0,detail:s});e.dispatchEvent(i)}
  ;
      })();</script><script type="text/javascript" id="__tmpScript-263873370" data-added-by-two-seven="1">(function() {
        window.twoseven.postTo = async function o(e,t,n=!1){let o;return t.name=t.name||name,o=n?new Promise(e=>{const n=`ack-${t.action}-${1e9*Math.random()|0}`;t.ack={event:n};window.debug&&["play","pause","currentTime"].some(e=>t.action.includes(e)),window.addEventListener("message",function t({data:o={}}){o.action===n&&(window.removeEventListener("message",t),e(o.json))})}):new Promise(e=>e()),e.postMessage(t,"*"),o};
      })();</script><script type="text/javascript" id="__tmpScript-92341418" data-added-by-two-seven="1">(function() {
        window.tsExtGetPostTo = function s(){return window.twoseven&&window.twoseven.postTo||window.postTo};
      })();</script><script type="text/javascript" id="__tmpScript-52550357" data-added-by-two-seven="1">(function() {
        window.tsExtGetPostToParent = function i(){return window.twoseven&&window.twoseven.postToParent||window.postToParent};
      })();</script><script type="text/javascript" id="__tmpScript-836093640" data-added-by-two-seven="1">(function() {
        window.twoseven.postResponse = async function a(e,t){const{source:n,data:{ack:{event:o}}}=e;window.tsExtGetPostTo()(n,{action:o,json:t})};
      })();</script><script type="text/javascript" id="__tmpScript-295301504" data-added-by-two-seven="1">(function() {
        window.twoseven.postToParent = async function r(e,t=!1){return window.tsExtGetPostTo()(window.parent,e,t)};
      })();</script><script type="text/javascript" id="__tmpScript-823348916" data-added-by-two-seven="1">(function() {
        window.twoseven.postToTop = async function w(e,t=!1){return window.tsExtGetPostTo()(window.top,e,t)};
      })();</script><script type="text/javascript" id="__tmpScript-765455765" data-added-by-two-seven="1">(function() {
        
    window.twoseven.getFromStorage = e=>new Promise((t,n)=>{const o="get-from-storage-"+(1e9*Math.random()|0);window.addEventListener(o,e=>{window.removeEventListener(o,this);const{detail:{data:{value:n}}}=e;t(n)}),triggerEvent(window,"get-from-storage",{key:e,evt:o})})
    window.twoseven.saveToStorage = e=>{triggerEvent(window,"save-to-storage",e)}
  ;
      })();</script><script type="text/javascript" id="__tmpScript-175559191" data-added-by-two-seven="1">(function() {
        
    window.attachHistoryListeners = function d(){var e=history.pushState;history.pushState=function(t,n,o){return"function"==typeof history.onpushstate&&history.onpushstate({state:t}),triggerEvent(window,"pushstate",{uri:o}),e.apply(history,arguments)};var t=history.replaceState;history.replaceState=function(e){return"function"==typeof history.onreplacestate&&history.onreplacestate({state:e}),t.apply(history,arguments)}}
    window.attachHistoryListeners()
  ;
      })();</script><script type="text/javascript" id="__tmpScript-234558442" data-added-by-two-seven="1">(function() {
        window.twoseven.once = function c(e,t,n){e.addEventListener(t,function o(s){e.removeEventListener(t,o),n(s)})};
      })();</script><script type="text/javascript" id="__tmpScript-85732462" data-added-by-two-seven="1">(function() {
        
    window.twoseven.isOnTwoSevenTab = async () => {
      const result = await window.twoseven.postTo(window, { action: 'is-on-twoseven-tab' }, true)
      return result
    }
  ;
      })();</script><script type="text/javascript" id="__tmpScript-905655003" data-added-by-two-seven="1">(function() {
        
    window.twoseven.isPaused = async () => {
      const result = await window.twoseven.postTo(window, { action: 'twoseven:pause-state' }, true)
      return result
    }
  ;
      })();</script><script type="text/javascript" id="__tmpScript-345348233" data-added-by-two-seven="1">(function() {
        window.twoseven = {};
      })();</script><script type="text/javascript" id="__tmpScript-561848713" data-added-by-two-seven="1">(function() {
        window.twoseven.waitForDOMNode = async function t(e,t=document){e=e||{};const{type:n,value:o}=e;if(!n||!o)throw new Error("Must specify identifier");let s=o;switch(n){case"tag":s=o.toUpperCase()}if("check"!==n){const e=await i({type:"selector",value:s},[],t);if(e)return new Promise(t=>t(e))}async function i({type:e,value:t},n,o){let s;switch(e){case"tag":s=n.find(e=>e.tagName===t);break;case"selector":s=o.querySelector(t);break;case"check":for(const e of n){if(await t(e))return e}}return s}return new Promise((e,o)=>{const a=new MutationObserver(async o=>{for(const r of o)if("childList"===r.type){const o=Array.from(r.addedNodes),w=await i({type:n,value:s},o,t);if(w)return a.disconnect(),e(w)}});a.observe(t,{childList:!0,subtree:!0})})};
      })();</script><script type="text/javascript" id="__tmpScript-290342881" data-added-by-two-seven="1">(function() {
        
    window.twoseven.reportError = function n(e,t,n){"string"==typeof(n=n||{})&&(n={message:n});const{message:o,stack:s}=t;Object.assign(n,{tag:e,error:{message:o,stack:s}}),window.tsExtGetPostToParent()({name:name,tag:e,action:"report-error",json:n}),console.error(JSON.stringify(n.error))}
  ;
      })();</script><script type="text/javascript" id="__tmpScript-371979785" data-added-by-two-seven="1">(function() {
        
    window.twosevenHmsToSecondsOnly = function(str) {
        var p = str.split(':'),
            s = 0, m = 1;

        while (p.length > 0) {
            s += m * parseInt(p.pop(), 10);
            m *= 60;
        }

        return s;
    }
  ;
      })();</script><script type="text/javascript" id="__tmpScript-107242471" data-added-by-two-seven="1">(function() {
        window.twosevenExtLog = function(e,o,c){o||(o=e,e=void 0);let n=c||"black";if(c)switch(c){case"success":n="Green";break;case"info":n="DodgerBlue";break;case"error":n="Red";break;case"warning":n="Orange";break;default:n=c}e?console.log("%c"+e+": "+o,`color:${n}`):console.log("%c"+o,`color:${n}`)};
      })();</script><script type="text/javascript" id="__tmpScript-595890982" data-added-by-two-seven="1">(function() {
        
    document.twosevenGET = function(url, callback) {
      var xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE ) {
          if (xmlhttp.status == 200) {
            callback(null, xmlhttp.responseText);
          } else {
            callback('something else other than 200 was returned', '');
          }
        }
      };
      xmlhttp.open("GET", url, true);
      xmlhttp.send();
    };
  ;
      })();</script><script type="text/javascript" id="__tmpScript-716772580" data-added-by-two-seven="1">(function() {
        
    window.triggerEvent = function(e,t,n,o=!1){let s;o?(n&&"string"!=typeof n&&(n=JSON.stringify(n)),s=n):s={data:n},window.twosevenScriptsDiv&&n&&"object"==typeof n&&(console.warn(`WARNING: Attempting to send an object via event.detail from CS->Page does not work on Firefox: ${JSON.stringify(n)}`),console.error((new Error).stack));var i=new CustomEvent(t,{bubbles:!0,composed:!0,detail:s});e.dispatchEvent(i)}
  ;
      })();</script><script type="text/javascript" id="__tmpScript-443273945" data-added-by-two-seven="1">(function() {
        window.twoseven.postTo = async function o(e,t,n=!1){let o;return t.name=t.name||name,o=n?new Promise(e=>{const n=`ack-${t.action}-${1e9*Math.random()|0}`;t.ack={event:n};window.debug&&["play","pause","currentTime"].some(e=>t.action.includes(e)),window.addEventListener("message",function t({data:o={}}){o.action===n&&(window.removeEventListener("message",t),e(o.json))})}):new Promise(e=>e()),e.postMessage(t,"*"),o};
      })();</script><script type="text/javascript" id="__tmpScript-318490814" data-added-by-two-seven="1">(function() {
        window.tsExtGetPostTo = function s(){return window.twoseven&&window.twoseven.postTo||window.postTo};
      })();</script><script type="text/javascript" id="__tmpScript-751096830" data-added-by-two-seven="1">(function() {
        window.tsExtGetPostToParent = function i(){return window.twoseven&&window.twoseven.postToParent||window.postToParent};
      })();</script><script type="text/javascript" id="__tmpScript-764331617" data-added-by-two-seven="1">(function() {
        window.twoseven.postResponse = async function a(e,t){const{source:n,data:{ack:{event:o}}}=e;window.tsExtGetPostTo()(n,{action:o,json:t})};
      })();</script><script type="text/javascript" id="__tmpScript-676789365" data-added-by-two-seven="1">(function() {
        window.twoseven.postToParent = async function r(e,t=!1){return window.tsExtGetPostTo()(window.parent,e,t)};
      })();</script><script type="text/javascript" id="__tmpScript-315291672" data-added-by-two-seven="1">(function() {
        window.twoseven.postToTop = async function w(e,t=!1){return window.tsExtGetPostTo()(window.top,e,t)};
      })();</script><script type="text/javascript" id="__tmpScript-249932617" data-added-by-two-seven="1">(function() {
        
    window.twoseven.getFromStorage = e=>new Promise((t,n)=>{const o="get-from-storage-"+(1e9*Math.random()|0);window.addEventListener(o,e=>{window.removeEventListener(o,this);const{detail:{data:{value:n}}}=e;t(n)}),triggerEvent(window,"get-from-storage",{key:e,evt:o})})
    window.twoseven.saveToStorage = e=>{triggerEvent(window,"save-to-storage",e)}
  ;
      })();</script><script type="text/javascript" id="__tmpScript-413128855" data-added-by-two-seven="1">(function() {
        
    window.attachHistoryListeners = function d(){var e=history.pushState;history.pushState=function(t,n,o){return"function"==typeof history.onpushstate&&history.onpushstate({state:t}),triggerEvent(window,"pushstate",{uri:o}),e.apply(history,arguments)};var t=history.replaceState;history.replaceState=function(e){return"function"==typeof history.onreplacestate&&history.onreplacestate({state:e}),t.apply(history,arguments)}}
    window.attachHistoryListeners()
  ;
      })();</script><script type="text/javascript" id="__tmpScript-884462321" data-added-by-two-seven="1">(function() {
        window.twoseven.once = function c(e,t,n){e.addEventListener(t,function o(s){e.removeEventListener(t,o),n(s)})};
      })();</script><script type="text/javascript" id="__tmpScript-658811347" data-added-by-two-seven="1">(function() {
        
    window.twoseven.isOnTwoSevenTab = async () => {
      const result = await window.twoseven.postTo(window, { action: 'is-on-twoseven-tab' }, true)
      return result
    }
  ;
      })();</script><script type="text/javascript" id="__tmpScript-30275499" data-added-by-two-seven="1">(function() {
        
    window.twoseven.isPaused = async () => {
      const result = await window.twoseven.postTo(window, { action: 'twoseven:pause-state' }, true)
      return result
    }
  ;
      })();</script><script type="text/javascript" id="__tmpScript-931204110" data-added-by-two-seven="1">(function() {
        
      const modal = document.querySelector('.twoseven-ext-tab-media-modal')
      const modalCloseBtn = modal.querySelector('.close')
      function closeModal () {
        modal.style.display = 'none'
        const frame = document.querySelector('#twoseven-ext-tab-media-iframe').contentWindow
        frame.postMessage({
          __evt_name: 'modal-hide'
        }, '*')
      }
      modalCloseBtn.onclick = closeModal

      window.onmessage = function (e) {
        if (e.data.__evt_name === 'modal-hide') {
          closeModal()
        }
      }

      window.twoseven.closeTabMediaModal = closeModal

      window.onclick = function (e) {
        if (e.target.id === 'twoseven-ext-tab-media-modal' && modal.style.display === 'block') {
            closeModal()
        }
      }
    ;
      })();</script></div><head>

            <title>Wave - The Software as a Service Starter Kit built on Laravel &amp; Voyager</title>
    
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"> <!-- † -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="2jWZyp7FuIhechHhoNDww6K4Tc24KzzYN7Uoa5rK">
    <meta name="url" content="http://marketminds.test">

    <link rel="icon" href="/wave/favicon.png" type="image/x-icon">

    
    
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">

    
    <!-- Styles -->
    <link href="http://marketminds.test/themes/tallstack/css/app.css" rel="stylesheet">
    <style>[wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid] {display: none;}[wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {animation-duration: 50000s;animation-name: livewireautofill;}@keyframes livewireautofill { from {} }</style>
<link href="chrome-extension://cjdnfmjmdligcpfcekfmenlhiopehjkd/web_resources/modal/modal.css" rel="stylesheet" id="__tmpStyle"></head>
<body class="flex flex-col min-h-screen bg-gray-50 " data-new-gr-c-s-check-loaded="14.1036.0" data-gr-ext-installed="">



    <!-- Start of new dashboard temp: https://blocks.wickedtemplates.com/sidebars-->

    <div class="flex h-screen overflow-hidden bg-white rounded-lg">
            <div class="hidden md:flex md:flex-shrink-0">
              <div class="flex flex-col w-64">
                <div class="
              flex flex-col flex-grow
              pt-5
              overflow-y-auto
              bg-gray
              border-r border-gray-50
            ">
                  <div class="flex flex-col items-center flex-shrink-0 px-4">
                    
                      <h2 class="
                    block
                    p-2
                    text-xl
                    font-medium
                    tracking-tighter
                    text-gray-900
                    transition
                    duration-500
                    ease-in-out
                    transform
                    cursor-pointer
                    hover:text-gray-900
                  "> MarketMind.AI </h2>
                    
                    <button class="hidden rounded-lg focus:outline-none focus:shadow-outline">
                      <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                      </svg>
                    </button>
                  </div>
                  <div class="flex flex-col flex-grow px-4 mt-5">
                    <nav class="flex-1 space-y-1 bg-white">
                      <ul>
                        <li>
                          <a class="
                        inline-flex
                        items-center
                        w-full
                        px-4
                        py-2
                        mt-1
                        text-base text-gray-900
                        transition
                        duration-500
                        ease-in-out
                        transform
                        rounded-lg
                        bg-gray-50
                        focus:shadow-outline
                      " white="" 70="" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            <span class="ml-4"> Overview</span>
                          </a>
                        </li>
                        <li>
                          <a class="
                        inline-flex
                        items-center
                        w-full
                        px-4
                        py-2
                        mt-1
                        text-base text-gray-900
                        transition
                        duration-500
                        ease-in-out
                        transform
                        rounded-lg
                        focus:shadow-outline
                        hover:bg-gray-50
                      " href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                            <span class="ml-4">Chat</span>
                          </a>
                        </li>
                        <li>
                          <a class="
                        inline-flex
                        items-center
                        w-full
                        px-4
                        py-2
                        mt-1
                        text-base text-gray-900
                        transition
                        duration-500
                        ease-in-out
                        transform
                        rounded-lg
                        focus:shadow-outline
                        hover:bg-gray-50
                      " href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span class="ml-4">User</span>
                          </a>
                        </li>
                        <li>
                          <a class="
                        inline-flex
                        items-center
                        w-full
                        px-4
                        py-2
                        mt-1
                        text-base text-gray-900
                        transition
                        duration-500
                        ease-in-out
                        transform
                        rounded-lg
                        focus:shadow-outline
                        hover:bg-gray-50
                      " href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="ml-4">Settings</span></a>
                        </li>
                      </ul>
                      <p class="px-4 pt-4 font-medium text-gray-900 uppercase"> Shortcuts </p>
                      <ul>
                        <li>
                          <a class="
                        inline-flex
                        items-center
                        w-full
                        px-4
                        py-2
                        mt-1
                        text-base text-gray-900
                        transition
                        duration-500
                        ease-in-out
                        transform
                        rounded-lg
                        focus:shadow-outline
                        hover:bg-gray-50
                      " white="" 70="" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            <span class="ml-4"> Tasks</span>
                          </a>
                        </li>
                        <li>
                          <a class="
                        inline-flex
                        items-center
                        w-full
                        px-4
                        py-2
                        mt-1
                        text-base text-gray-900
                        transition
                        duration-500
                        ease-in-out
                        transform
                        rounded-lg
                        focus:shadow-outline
                        hover:bg-gray-50
                      " white="" 70="" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <span class="ml-4"> Reports</span>
                          </a>
                        </li>
                        <li>
                          <a class="
                        inline-flex
                        items-center
                        w-full
                        px-4
                        py-2
                        mt-1
                        text-base text-gray-900
                        transition
                        duration-500
                        ease-in-out
                        transform
                        rounded-lg
                        focus:shadow-outline
                        hover:bg-gray-50
                      " white="" 70="" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                            </svg>
                            <span class="ml-4"> Dashboard</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </div>

                </div>
              </div>
            </div>
            <div class="flex flex-col flex-1 w-0 overflow-hidden">
              <main class="relative flex-1 overflow-y-auto focus:outline-none">
                <div class="py-6">
                  <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
                    <h1 class="text-lg text-neutral-600"> Here is where you put your stuff </h1>
                  </div>
                  <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
                    <!-- Put your content here -->
                    

	<div class="flex flex-col px-8 mx-auto my-6 lg:flex-row max-w-7xl xl:px-5">
	    <div class="flex flex-col justify-start flex-1 mb-5 overflow-hidden bg-white border rounded-lg lg:mr-3 lg:mb-0 border-gray-150">
	        <div class="flex flex-wrap items-center justify-between p-5 bg-white border-b border-gray-150 sm:flex-no-wrap">
				<div class="flex items-center justify-center w-12 h-12 mr-5 rounded-lg bg-wave-100">
					<svg class="w-6 h-6 text-wave-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
				</div>
				<div class="relative flex-1">
	                <h3 class="text-lg font-medium leading-6 text-gray-700">
	                    Welcome to your Dashboard
	                </h3>
	                <p class="text-sm leading-5 text-gray-500 mt">
	                    Learn More Below
	                </p>
				</div>

	        </div>
	        <div class="relative p-5">
	            <p class="text-base leading-loose text-gray-500">This is your application <a href="http://marketminds.test/dashboard" class="underline text-wave-500">dashboard</a>, you can customize this view inside of <code class="px-2 py-1 font-mono text-base font-medium text-gray-600 bg-gray-100 rounded-md">themes/tallstack/dashboard/index.blade.php</code><br><br> (Themes are located inside the <code>resources/views/themes</code> folder)</p>
				<span class="inline-flex mt-5 rounded-md shadow-sm">
	                <a href="http://marketminds.test/docs" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50">
	                    Read The Docs
	                </a>
				</span>
			</div>
		</div>
		<div class="flex flex-col justify-start flex-1 overflow-hidden bg-white border rounded-lg lg:ml-3 border-gray-150">
	        <div class="flex flex-wrap items-center justify-between p-5 bg-white border-b border-gray-150 sm:flex-no-wrap">
				<div class="flex items-center justify-center w-12 h-12 mr-5 rounded-lg bg-wave-100">
					<svg class="w-6 h-6 text-wave-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path></svg>
				</div>
				<div class="relative flex-1">
	                <h3 class="text-lg font-medium leading-6 text-gray-700">
						Learn more about Wave
	                </h3>
	                <p class="text-sm leading-5 text-gray-500 mt">
						Are you more of a visual learner?
	                </p>
				</div>

	        </div>
	        <div class="relative p-5">
				<p class="text-base leading-loose text-gray-500">Make sure to head on over to the Wave Video Tutorials to learn more how to use and customize Wave.<br><br>Click on the button below to checkout the video tutorials.</p>
				<span class="inline-flex mt-5 rounded-md shadow-sm">
	                <a href="https://devdojo.com/course/wave" target="_blank" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50">
						Watch The Videos
	                </a>
				</span>
			</div>
	    </div>

	</div>

                    <!-- Do not cross the closing tag underneath this coment-->
                  </div>
                </div>
              </main>
            </div>
          </div>

    <!-- End of new dashboard  -->

    <script src="/livewire/livewire.js?id=ef0c4e092e24439bb958" data-turbo-eval="false" data-turbolinks-eval="false"></script><script data-turbo-eval="false" data-turbolinks-eval="false">window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '';window.livewire_token = '2jWZyp7FuIhechHhoNDww6K4Tc24KzzYN7Uoa5rK';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};document.addEventListener("DOMContentLoaded", function () {window.livewire.start();});</script>



    <!-- Full Screen Loader -->
    <div id="fullscreenLoader" class="fixed inset-0 top-0 left-0 z-50 flex flex-col items-center justify-center hidden w-full h-full bg-gray-900 opacity-50">
        <svg class="w-5 h-5 mr-3 -ml-1 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        <p id="fullscreenLoaderMessage" class="mt-4 text-sm font-medium text-white uppercase"></p>
    </div>
    <!-- End Full Loader -->


    <div class="fixed inset-0 z-40 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
    <div id="toast" x-data="{ show: false, 'type' : '', 'message': '' }" @click="show=false" x-show="show" x-transition:enter="transform ease-out duration-300 transition" x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2" x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg cursor-pointer pointer-events-auto hover:-translate-1" x-cloak="">
        <div class="relative overflow-hidden rounded-lg shadow-xs">
            <div class="px-4 py-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 pr-0.5">
                        <template x-if="type == 'info'">
                            <div class="w-10 h-10">
                                <svg class="w-10 h-10 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                        </template>
                        <template x-if="type == 'warning'">
                            <div class="w-10 h-10">
                                <svg class="w-10 h-10 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                            </div>
                        </template>
                        <template x-if="type == 'success'">
                            <div class="w-10 h-10">
                                <svg class="w-10 h-10 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                        </template>
                        <template x-if="type == 'danger'">
                            <div class="w-10 h-10">
                                <svg class="w-10 h-10 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                        </template>
                    </div>
                    <div class="flex-1 w-0 pl-3.5 ml-1 border-l border-gray-100">
                        <p class="text-sm font-medium leading-5 text-gray-900">
                            <template x-if="type == 'info'"><span>Notice</span></template>
                            <template x-if="type == 'warning'"><span>Warning</span></template>
                            <template x-if="type == 'success'"><span>Success</span></template>
                            <template x-if="type == 'danger'"><span>Something went wrong</span></template>
                        </p>
                        <p class="text-sm leading-5 text-gray-500" x-text="message"></p>
                    </div>
                    <div class="flex self-start flex-shrink-0 ml-4">
                        <button @click="show = false;" class="inline-flex -mt-1 text-gray-400 transition duration-150 ease-in-out rounded-full focus:outline-none focus:text-gray-500">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div id="toast_bar" class="absolute bottom-0 left-0 w-full h-1 transition-all ease-out" :class="{ 'bg-indigo-400' : type == 'info', 'bg-yellow-400' : type == 'warning', 'bg-green-400' : type == 'success', 'bg-red-400' : type == 'danger' }" style="transition-duration: 3950ms;"></div>
        </div>
    </div>
</div>
        <script src="https://cdn.paddle.com/paddle/paddle.js"></script>
<script>

    window.vendor_id = parseInt('');

    if(vendor_id){
        Paddle.Environment.set('sandbox');
        Paddle.Setup({ vendor: vendor_id });
    }

    let checkoutBtns = document.getElementsByClassName("checkout");
    for( var i=0; i < checkoutBtns.length; i++ ){
        checkoutBtns[i].addEventListener('click', function(){
            waveCheckout(this.dataset.plan)
        }, false);
    }

    let updateBtns = document.getElementsByClassName("checkout-update");
    for( var i=0; i < updateBtns.length; i++ ){
        updateBtns[i].addEventListener('click', waveUpdate, false);
    }

    let cancelBtns = document.getElementsByClassName("checkout-cancel");
    for( var i=0; i < cancelBtns.length; i++ ){
        cancelBtns[i].addEventListener('click', waveCancel, false);
    }


    function waveCheckout(plan_id) {
        if(vendor_id){
            let product = parseInt(plan_id);
            Paddle.Checkout.open({
                product: product,
                email: 'admin@admin.com',
                successCallback: "checkoutComplete",
            });
        } else {
            alert('Paddle Vendor ID is not set, please see the docs and learn how to setup billing.');
        }
    }

    function waveUpdate(){
        Paddle.Checkout.open({
            override: this.dataset.url,
            successCallback: "checkoutUpdate",
        });
    }

    function waveCancel(){
        Paddle.Checkout.open({
            override: this.dataset.url,
            successCallback: "checkoutCancel",
        });
    }

</script>





<div>
    <div id="twoseven-ext-tab-media-modal" class="twoseven-ext-tab-media-modal" style="display: none;">
      <!-- Modal content -->
      <div class="twoseven-ext-tab-media-modal-content">
        <div class="iframe-container" style="height: 100%; width: 100%;">
          <span class="close">×</span>
        </div>
      </div>
    </div></div></body></html>