document.addEventListener("DOMContentLoaded",function(){const r=document.getElementById("main-nav");if(!r)return;const e=r.offsetTop;function t(){window.pageYOffset>=e?r.classList.add("sticky-nav"):r.classList.remove("sticky-nav")}window.addEventListener("scroll",t);const s=document.querySelector(".mobile-menu-toggle");s&&s.addEventListener("click",function(){document.querySelector(".primary-menu-container").classList.toggle("active");const a=this.getAttribute("aria-expanded")==="true";this.setAttribute("aria-expanded",a?"false":"true")}),document.querySelectorAll(".menu-item-has-children > a").forEach(function(a){a.addEventListener("click",function(l){if(window.innerWidth<390){l.preventDefault();const c=this.parentNode;c.classList.toggle("submenu-open"),c.querySelectorAll(".sub-menu, .mega-menu").forEach(function(o){if(o.style.display==="none"||!o.style.display){let g=function(f){const y=f-h,u=Math.min(y/p,1);d=u*m,o.style.height=d+"px",o.style.overflow="hidden",u<1?requestAnimationFrame(g):(o.style.height="",o.style.overflow="")};var v=g;o.style.display="block";let d=0;const m=o.scrollHeight,p=200,h=performance.now();requestAnimationFrame(g)}else{let h=function(f){const y=f-m,u=Math.min(y/p,1),b=d-u*d;o.style.height=b+"px",u<1?requestAnimationFrame(h):(o.style.display="none",o.style.height="",o.style.overflow="")};var v=h;const d=o.scrollHeight;o.style.height=d+"px",o.style.overflow="hidden";const m=performance.now(),p=200;requestAnimationFrame(h)}})}})});function i(){const a=document.querySelectorAll(".sub-menu, .mega-menu");window.innerWidth<390?(a.forEach(function(c){c.style.display="none"}),document.querySelectorAll(".submenu-open > .sub-menu, .submenu-open > .mega-menu").forEach(function(c){c.style.display="block"})):a.forEach(function(l){l.removeAttribute("style")})}i(),window.addEventListener("resize",i)});document.addEventListener("DOMContentLoaded",function(){window.location.pathname==="/"&&w()});function w(){const r=document.querySelectorAll(".slide")??null;let e=0;function t(i){r.forEach(a=>{a.classList.remove("active")}),r[i].classList.add("active"),e=i}function s(){e=(e+1)%r.length,t(e)}function n(){setInterval(s,5e3)}n()}document.addEventListener("DOMContentLoaded",function(){const r=window.location.pathname,e=document.getElementById("top-information-bar");r==="/"?window.addEventListener("scroll",function(){(window.pageYOffset||document.documentElement.scrollTop)>150?e.style.display="none":e.style.display="block"}):r!="/"&&(e.style.display="none")});document.addEventListener("DOMContentLoaded",function(){new Swiper(".swiper",{loop:!0,speed:1e3,spaceBetween:30,autoplay:{delay:4e3,disableOnInteraction:!1},pagination:{el:".swiper-pagination",clickable:!0},grapCursor:!0,breakpoints:{640:{slidesPerView:1},768:{slidesPerView:2}}})});document.addEventListener("DOMContentLoaded",function(){console.log("ok, en carga");const r={init(){this.bindEvents(),this.setupAccessibility()},bindEvents(){var e,t;document.querySelectorAll(".category-btn").forEach(s=>{s.addEventListener("click",n=>{n.preventDefault();const i=n.currentTarget.dataset.category;this.switchCategory(i)})}),document.querySelectorAll(".carousel-btn").forEach(s=>{s.addEventListener("click",n=>{n.preventDefault();const i=n.currentTarget.dataset.direction,l=n.currentTarget.closest(".images-carousel").dataset.category;this.scrollCarousel(l,i)})}),document.querySelectorAll(".image-item img").forEach(s=>{s.addEventListener("click",n=>{this.openModal(n.target.dataset.full||n.target.src,n.target.alt)})}),(e=document.getElementById("close-modal"))==null||e.addEventListener("click",()=>{this.closeModal()}),(t=document.getElementById("image-modal"))==null||t.addEventListener("click",s=>{s.target.id==="image-modal"&&this.closeModal()}),document.addEventListener("keydown",s=>{s.key==="Escape"&&this.closeModal()})},switchCategory(e){var t;document.querySelectorAll(".category-btn").forEach((s,n)=>{n==e?(s.classList.add("active","bg-blue-600","text-white","shadow-lg","transform","scale-105"),s.classList.remove("bg-gray-100","text-gray-700")):(s.classList.remove("active","bg-blue-600","text-white","shadow-lg","transform","scale-105"),s.classList.add("bg-gray-100","text-gray-700"))}),document.querySelectorAll(".category-content").forEach((s,n)=>{n==e?(s.classList.remove("opacity-0","hidden"),s.classList.add("opacity-100","block")):(s.classList.add("opacity-0","hidden"),s.classList.remove("opacity-100","block"))}),(t=document.getElementById("installations-gallery"))==null||t.scrollIntoView({behavior:"smooth",block:"start"})},scrollCarousel(e,t){const s=document.querySelector(`.images-carousel[data-category="${e}"] .images-container`);if(!s)return;const n=340,i=t==="next"?s.scrollLeft+n:s.scrollLeft-n;s.scrollTo({left:i,behavior:"smooth"})},openModal(e,t){const s=document.getElementById("image-modal"),n=document.getElementById("modal-image");s&&n&&(n.src=e,n.alt=t,s.classList.remove("hidden"),document.body.style.overflow="hidden",s.focus())},closeModal(){const e=document.getElementById("image-modal");e&&(e.classList.add("hidden"),document.body.style.overflow="")},setupAccessibility(){document.querySelectorAll(".category-btn").forEach((e,t)=>{e.setAttribute("aria-label",`Ver categoría ${e.textContent.trim()}`),e.setAttribute("role","tab")}),document.querySelectorAll(".carousel-btn").forEach(e=>{const t=e.dataset.direction;e.setAttribute("aria-label",t==="next"?"Siguiente imagen":"Imagen anterior")})}};document.getElementById("installations-gallery")&&r.init()});class E{constructor(){this.scroller=document.querySelector(".scroller"),this.scrollerInner=document.querySelector(".scroller__inner"),this.controls=document.querySelectorAll(".control-btn"),this.reducedMotion=window.matchMedia("(prefers-reduced-motion: reduce)").matches,this.isPlaying=!0,this.currentDirection="left",this.currentSpeed="normal",this.init()}init(){this.reducedMotion||this.addAnimation(),this.bindEvents(),this.addHoverPause(),this.addIntersectionObserver()}addAnimation(){if(this.scroller.hasAttribute("data-animated"))return;this.scroller.setAttribute("data-animated","true");const e=Array.from(this.scrollerInner.children),t=document.createDocumentFragment();e.forEach(s=>{const n=s.cloneNode(!0);n.setAttribute("aria-hidden","true"),n.classList.add("duplicated"),t.appendChild(n)}),this.scrollerInner.appendChild(t)}bindEvents(){this.controls.forEach(e=>{e.addEventListener("click",()=>{const t=e.dataset.action;this.handleControl(t,e)})}),window.matchMedia("(prefers-reduced-motion: reduce)").addEventListener("change",e=>{this.reducedMotion=e.matches,this.toggleAnimations()})}handleControl(e,t){switch(this.updateActiveState(t,e),e){case"play":this.play();break;case"pause":this.pause();break;case"direction":this.toggleDirection();break;case"speed-slow":this.setSpeed("slow");break;case"speed-normal":this.setSpeed("normal");break;case"speed-fast":this.setSpeed("fast");break}}updateActiveState(e,t){if(t.includes("speed")||t==="play"||t==="pause"){const s=t.includes("speed")?"speed":"playback";this.controls.forEach(n=>{const i=n.dataset.action;(s==="speed"&&i.includes("speed")||s==="playback"&&(i==="play"||i==="pause"))&&n.classList.remove("active")})}e.classList.add("active")}play(){this.isPlaying=!0,this.scrollerInner.style.animationPlayState="running"}pause(){this.isPlaying=!1,this.scrollerInner.style.animationPlayState="paused"}toggleDirection(){this.currentDirection=this.currentDirection==="left"?"right":"left",this.scroller.setAttribute("data-direction",this.currentDirection);const t=document.querySelector('[data-action="direction"]').querySelector("i");t.className=this.currentDirection==="left"?"fas fa-arrow-left":"fas fa-arrow-right"}setSpeed(e){this.currentSpeed=e,this.scroller.setAttribute("data-speed",e)}addHoverPause(){this.scroller.hasAttribute("data-pause-on-hover")&&(this.scroller.addEventListener("mouseenter",()=>{this.isPlaying&&(this.scrollerInner.style.animationPlayState="paused")}),this.scroller.addEventListener("mouseleave",()=>{this.isPlaying&&(this.scrollerInner.style.animationPlayState="running")}))}addIntersectionObserver(){"IntersectionObserver"in window&&new IntersectionObserver(t=>{t.forEach(s=>{s.isIntersecting&&this.isPlaying?this.scrollerInner.style.animationPlayState="running":this.scrollerInner.style.animationPlayState="paused"})},{threshold:.1}).observe(this.scroller)}toggleAnimations(){this.reducedMotion?(this.scroller.removeAttribute("data-animated"),this.scroller.querySelectorAll(".duplicated").forEach(t=>t.remove())):this.addAnimation()}}const L=window.location.pathname;L==="/"&&document.addEventListener("DOMContentLoaded",()=>{window.medicalScroller=new E;const r={threshold:.1,rootMargin:"0px 0px -50px 0px"},e=new IntersectionObserver(t=>{t.forEach(s=>{s.isIntersecting&&(s.target.style.animationDelay="0.2s",s.target.classList.add("fade-in-up"))})},r);document.querySelectorAll(".fade-in-up").forEach(t=>{e.observe(t)})});class S{constructor(){this.overlay=document.getElementById("searchOverlay"),this.openBtn=document.getElementById("openSearchBtn"),this.closeBtn=document.getElementById("closeSearchBtn"),this.searchForm=document.getElementById("searchForm"),this.searchInput=document.getElementById("searchInput"),this.resultsDiv=document.getElementById("search-overlay__results"),this.typingTimer,this.isSpinnerVisible=!1,this.previousValue="",this.currentController=null,this.minSearchLength=2,this.open=this.open.bind(this),this.close=this.close.bind(this),this.handleKeyPress=this.handleKeyPress.bind(this),this.handleFormSubmit=this.handleFormSubmit.bind(this),this.handleOutsideClick=this.handleOutsideClick.bind(this),this.searchInputLogic=this.searchInputLogic.bind(this),this.getResults=this.getResults.bind(this),this.initEvents()}initEvents(){this.openBtn.addEventListener("click",this.open),this.closeBtn.addEventListener("click",this.close),document.addEventListener("keydown",this.handleKeyPress),this.searchForm.addEventListener("submit",this.handleFormSubmit),this.overlay.addEventListener("click",this.handleOutsideClick),this.searchInput.addEventListener("input",this.searchInputLogic)}open(){this.overlay.classList.add("active"),this.searchInput.value="",this.resultsDiv.innerHTML="",setTimeout(()=>this.searchInput.focus(),100),document.body.classList.add("body-no-scroll")}close(){this.overlay.classList.remove("active"),document.body.classList.remove("body-no-scroll"),this.cancelCurrentRequest(),this.resultsDiv.innerHTML=""}handleKeyPress(e){e.key==="Escape"&&this.overlay.classList.contains("active")&&this.close(),(e.ctrlKey||e.metaKey)&&e.key==="k"&&(e.preventDefault(),this.open())}handleFormSubmit(e){e.preventDefault();const t=this.searchInput.value.trim();console.log("enviado"),t&&t.length>=this.minSearchLength&&console.log(`Búsqueda de: ${t}`)}handleOutsideClick(e){e.target===this.overlay&&!this.searchForm.contains(e.target)&&this.close()}cancelCurrentRequest(){this.currentController&&(this.currentController.abort(),this.currentController=null)}searchInputLogic(e){const t=this.searchInput.value.trim();if(clearTimeout(this.typingTimer),t.length===0){this.resultsDiv.innerHTML="",this.isSpinnerVisible=!1,this.cancelCurrentRequest();return}t.length>=this.minSearchLength?(this.cancelCurrentRequest(),!this.isSpinnerVisible&&t!==this.previousValue&&(this.resultsDiv.innerHTML='<div class="spinner-loader"></div>',this.isSpinnerVisible=!0),this.typingTimer=setTimeout(()=>this.getResults(t),500)):(this.resultsDiv.innerHTML=`
                <div class="text-center py-4">
                    <p class="text-gray-500">Escribe al menos ${this.minSearchLength} caracteres para buscar</p>
                </div>
            `,this.isSpinnerVisible=!1),this.previousValue=t}validateKzData(){if(typeof kzData>"u"||!kzData.root_url)throw new Error("kzData.root_url no está definido")}async getResults(e=null){try{const t=e||this.searchInput.value.trim();if(t.length<this.minSearchLength)return;this.validateKzData(),this.currentController=new AbortController;const{signal:s}=this.currentController,n=encodeURIComponent(t);console.log("Buscando:",n);const i=`${kzData.root_url}/wp-json/kz/v1/search?term=${n}`;console.log("URL de búsqueda:",i);const l=await fetch(i,{signal:s,headers:{Accept:"application/json","Content-Type":"application/json"}});if(!l.ok)throw new Error(`Error en la búsqueda: ${l.status} - ${l.statusText}`);const c=await l.json();if(s.aborted)return;this.isSpinnerVisible=!1,this.currentController=null,console.log("Datos recibidos:",c),this.processResults(c)}catch(t){if(console.error("Error al realizar la búsqueda:",t),t.name==="AbortError")return;this.isSpinnerVisible=!1,this.currentController=null,this.renderError(t)}}processResults(e){var s,n,i,a;const t=(((s=e.generalInfo)==null?void 0:s.length)||0)+(((n=e.doctor)==null?void 0:n.length)||0)+(((i=e.evento)==null?void 0:i.length)||0)+(((a=e.tratamiento)==null?void 0:a.length)||0);t>0?this.renderCategorizedResults(e,t):this.renderNoResults()}renderCategorizedResults(e,t){let s=`
            <div class="search-results">
                <h2 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    Resultados Encontrados (${t})
                </h2>
        `;e.generalInfo&&e.generalInfo.length>0&&(s+=this.renderCategorySection("Información General",e.generalInfo,"blue",'<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 15c-2.34 0-4.29.82-5.17 2.09C8.83 17.09 10.78 18 12 18s3.17-.91 4.17-2.09"></path>')),e.doctor&&e.doctor.length>0&&(s+=this.renderCategorySection("Doctores",e.doctor,"green",'<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>')),e.evento&&e.evento.length>0&&(s+=this.renderCategorySection("Eventos",e.evento,"purple",'<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>')),e.tratamiento&&e.tratamiento.length>0&&(s+=this.renderCategorySection("Tratamientos",e.tratamiento,"red",'<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>')),s+="</div>",this.resultsDiv.innerHTML=s}renderCategorySection(e,t,s,n){return`
            <div class="mb-6">
                <h3 class="text-lg font-medium text-gray-700 mb-3 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-${s}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        ${n}
                    </svg>
                    ${e} (${t.length})
                </h3>
                <ul class="space-y-2 ml-4">
                    ${t.map(i=>`
                        <li class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-${s}-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <a href="${i.permalink||"#"}" class="text-blue-600 hover:text-blue-800 hover:underline transition-colors duration-200 leading-relaxed">
                                ${i.title||"Sin título"}
                            </a>
                        </li>
                    `).join("")}
                </ul>
            </div>
        `}renderNoResults(){this.resultsDiv.innerHTML=`
            <div class="text-center py-8">
                <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <p class="text-gray-500 text-lg">No se encontraron resultados</p>
                <p class="text-gray-400 text-sm mt-2">No hay contenido que coincida con tu búsqueda</p>
            </div>
        `}renderError(e){this.resultsDiv.innerHTML=`
            <div class="text-center py-8">
                <svg class="mx-auto h-12 w-12 text-red-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <p class="text-red-500 text-lg">Error al buscar</p>
                <p class="text-gray-400 text-sm mt-2">${e.message}</p>
                <button onclick="location.reload()" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors">
                    Reintentar
                </button>
            </div>
        `}}new S;
