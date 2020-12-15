<!doctype html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css1/olsop.css">
        <title>Home</title>
        
        <script type='text/javascript'>
            /* <![CDATA[ */
            const instaorder = {
                "site_url": "http://localhost/kp-fazzweb/home/baru",
                "instagram_url": "https://www.instagram.com/azam_putra22/",
                "ajax_url": "",
                "currency": new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    minimumFractionDigits: 0
                }),
                "nonce": "c6116f3d69",
                "font_uri": "false",
                "link_wa": "https://web.whatsapp.com/send?phone=6285325656274&",
                "admin_phone": "6285325656274",
                "main_script": "",
                "ongkir": "on",
                "ongkir_provider": "rajaongkir",
                "ongkir_flatongkir_cost": "0",
                "regions_source": ""
            };
            /* ]]> */
        </script>
    </head>

    <body data-rsssl=1 class="home blog hfeed no-sidebar elementor-default">
    <div class="container">
        <main id="primary" class="site-main">
	    <div id="splide1" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="<?php echo base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo base_url('assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo base_url('assets/img/slider3.jpg') ?>" class="d-block w-100" alt="...">
                    </li>
                </ul>
            </div>
        </div>

	    <div class="store-box clear">
            <div class="store-box-left">
                <div class="logo">
                    <img class="lazy" data-src="<?php echo base_url('assets/img/logo.png') ?>"/>
                </div>
            </div>
            <div class="store-box-right">
                <div class="store">
                    <div class="store-name">
                        <h1>JADI Store</h1>
                        <div class="verified-badge lazy" data-bg="url('<?php echo base_url('assets/img/verified.png') ?>')"></div>
                    </div>
                    <div class="store-description">
                        Website Aplikasi Toko Online Menggunakan Codeigniter 3, Yang Dibuat Oleh Mahasiswa Magang Politeknik Harapan Bersama Tegal di Fazzweb, Jika ada pertanyaan silakan hub.
                    </div>
                    <div class="store-contact">
                        <button id="admin-contact-wa" type="button"><i class="lni lni-whatsapp"></i>Hubungi Kami</button>
                    </div>
                    <div class="store-mp">
                        <a target="_blank" rel="nofollow" href="https://tokopedia.com/" class="lazy" data-bg="url('<?php echo base_url('assets/img/tokopedia-16.png') ?>">Tokopedia</a>
                        <a target="_blank" rel="nofollow" href="https://bukalapak.com" class="lazy" data-bg="url('<?php echo base_url('assets/img/bukalapak-16.png') ?>">Bukalapak</a>
                        <a target="_blank" rel="nofollow" href="http://lazada.co.id/" class="lazy" data-bg="url('<?php echo base_url('assets/img/lazada-16.png') ?>">Lazada</a>
                        <a target="_blank" rel="nofollow" href="https://shopee.co.id/" class="lazy" data-bg="url('<?php echo base_url('assets/img/shoppe-16.png') ?>">Shoppe</a>
                    </div>
                </div>
            </div>
        </div>

	    <div id="category-slide" class="slide-categorybox">
            <div class="slide-category">
                <div class="categorybox" >
                    <a href="">
                        <div class="category-icon lazy" data-bg="url('https://bukubiz.etalase.co/wp-content/uploads/2020/08/100ribuan.png)"></div>
                        <div class="category-text">Buku 100ribuan</div>
                    </a>
                </div>
                <div class="categorybox" >
                    <a href="">
                        <div class="category-icon lazy" data-bg="url('https://bukubiz.etalase.co/wp-content/uploads/2020/08/200ribuan.png)"></div>
                        <div class="category-text">Buku 200ribuan</div>
                    </a>
                </div>
                <div class="categorybox" >
                    <a href="">
                        <div class="category-icon lazy" data-bg="url('https://bukubiz.etalase.co/wp-content/uploads/2020/08/promo.png)"></div>
                        <div class="category-text">Lagi Promo</div>
                    </a>
                </div>
                <div class="categorybox" >
                    <a href="">
                        <div class="category-icon lazy" data-bg="url('https://bukubiz.etalase.co/wp-content/uploads/2020/08/promo.png)"></div>
                        <div class="category-text">Lagi Promo</div>
                    </a>
                </div>
                <div class="categorybox" >
                    <a href="">
                        <div class="category-icon lazy" data-bg="url('https://bukubiz.etalase.co/wp-content/uploads/2020/08/promo.png)"></div>
                        <div class="category-text">Lagi Promo</div>
                    </a>
                </div>
            </div>
        </div>

        <div class="loopbox">
            <div class="loop clear">

                <article class="productbox-shop productbox">
            <div class="row">

              <?php foreach ($produk as $pdk) : ?>

                <div class="content">
                <div class="card ml-3 mt-4" style="width: 200px; ">
                <div class="thumb product-image">
                    <img class="lazy" data-src="<?php echo base_url().'/uploads/'.$pdk->gambar ?>">
                  </div>
                  <div class="card-body title">
                    <h5 class="card-title mb-1"><?php echo $pdk->produk ?></h5>              
                    <?php echo anchor('home/detail/'.$pdk->id_produk,'<div class="cart-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="16px" height="16px"><path fill="#444" d="M352 160v-32C352 57.42 294.579 0 224 0 153.42 0 96 57.42 96 128v32H0v272c0 44.183 35.817 80 80 80h288c44.183 0 80-35.817 80-80V160h-96zm-192-32c0-35.29 28.71-64 64-64s64 28.71 64 64v32H160v-32zm160 120c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zm-192 0c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24z"></path></svg>
                                </div>') ?>
                  </div>
                  <div class="pricing">
                  <span class="price">Rp. <?php echo number_format($pdk->harga, 0,',','.') ?></span></div>
                </div> 
                </div> 

              <?php endforeach; ?>
          </div>
                </article>

            </div>
        </div>

        <footer>
            <div class="site-info">
                <div class="address">Politeknik Harapan Bersama Tegal</div>
                <div class="copyright">Copyright @ 2020 Magang Fazzweb</div>
            </div>
        </footer>
    </div>
        
        <div class="bottom-bar">
            <div class="container">
                <div class="bottom-bar-inner">
                    <div class="column">
                        <div class="column-icon" id="goToHome">
                            <svg class="_8-yf5 " fill="#262626" height="20" viewBox="0 0 48 48" width="20">
                                <path
                                    d="M45.5 48H30.1c-.8 0-1.5-.7-1.5-1.5V34.2c0-2.6-2.1-4.6-4.6-4.6s-4.6 2.1-4.6 4.6v12.3c0 .8-.7 1.5-1.5 1.5H2.5c-.8 0-1.5-.7-1.5-1.5V23c0-.4.2-.8.4-1.1L22.9.4c.6-.6 1.6-.6 2.1 0l21.5 21.5c.3.3.4.7.4 1.1v23.5c.1.8-.6 1.5-1.4 1.5z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <div class="column">
                        <div class="column-icon" id="goToInstagram">
                            <svg enable-background="new 0 0 24 24" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#262626" d="m4.75 24h14.5c2.619 0 4.75-2.131 4.75-4.75v-14.5c0-2.619-2.131-4.75-4.75-4.75h-14.5c-2.619 0-4.75 2.131-4.75 4.75v14.5c0 2.619 2.131 4.75 4.75 4.75zm-3.25-19.25c0-1.792 1.458-3.25 3.25-3.25h14.5c1.792 0 3.25 1.458 3.25 3.25v14.5c0 1.792-1.458 3.25-3.25 3.25h-14.5c-1.792 0-3.25-1.458-3.25-3.25z" />
                                <path fill="#262626" d="m12 18.13c3.38 0 6.13-2.75 6.13-6.13s-2.75-6.13-6.13-6.13-6.13 2.75-6.13 6.13 2.75 6.13 6.13 6.13zm0-10.76c2.553 0 4.63 2.077 4.63 4.63s-2.077 4.63-4.63 4.63-4.63-2.077-4.63-4.63 2.077-4.63 4.63-4.63z" />
                                <path fill="#262626" d="m18.358 7.362c.986 0 1.729-.74 1.729-1.721 0-1.023-.782-1.721-1.728-1.721-.986 0-1.729.74-1.729 1.721 0 1.021.778 1.721 1.728 1.721zm.177-1.886c.316.279-.405.618-.405.166 0-.27.367-.2.405-.166z" />
                            </svg>
                        </div>
                    </div>

                    <div class="column">
                        <div class="column-icon" id="openSearchBox">
                            <svg class="_8-yf5 " fill="#262626" height="20" viewBox="0 0 48 48" width="20">
                                <path d="M20 40C9 40 0 31 0 20S9 0 20 0s20 9 20 20-9 20-20 20zm0-37C10.6 3 3 10.6 3 20s7.6 17 17 17 17-7.6 17-17S29.4 3 20 3z"></path>
                                <path d="M46.6 48.1c-.4 0-.8-.1-1.1-.4L32 34.2c-.6-.6-.6-1.5 0-2.1s1.5-.6 2.1 0l13.5 13.5c.6.6.6 1.5 0 2.1-.2.3-.6.4-1 .4z"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="column">
                        <div class="column-icon" id="openCartBox">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20">
                                <path fill="#444" d="M352 160v-32C352 57.42 294.579 0 224 0 153.42 0 96 57.42 96 128v32H0v272c0 44.183 35.817 80 80 80h288c44.183 0 80-35.817 80-80V160h-96zm-192-32c0-35.29 28.71-64 64-64s64 28.71 64 64v32H160v-32zm160 120c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zm-192 0c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24z"></path>
                            </svg>
                            <div class="cart-item-counter cart-counter">0</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script type="text/javascript">(function(e,t){let n=t.getElementsByTagName("body")[0],l=t.documentElement;e.innerWidth||l.clientWidth||n.clientWidth,e.innerHeight||l.clientHeight||n.clientHeight;if("false"!=instaorder.font_uri){let e=t.createElement("link");e.async=!0,e.type="text/css",e.rel="stylesheet",e.href=instaorder.font_uri,n.appendChild(e)}let o=t.createElement("link");o.async=!0,o.type="text/css",o.rel="stylesheet",o.href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css",n.appendChild(o);let r=t.createElement("script"),i="IntersectionObserver"in e?"10.19.0":"8.17.0";r.async=!0,r.src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@"+i+"/dist/lazyload.min.js",e.lazyLoadOptions={elements_selector:".lazy"},n.appendChild(r);let a=t.createElement("script");a.async=!0,a.src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@7.2.0/dist/js/autoComplete.min.js",n.appendChild(a);let d=t.createElement("script");d.async=!0,d.src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js",n.appendChild(d),d.onload=function(){let e=t.querySelector("#splide1");if(void 0!==e&&null!=e){new Splide("#splide1",{arrows:!1,type:"loop",autoplay:!0,pauseOnHover:!0,pauseOnFocus:!0,lazyLoad:"sequential",interval:3e3}).mount()}};let s=t.createElement("script");s.async=!0,s.src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js",n.appendChild(s),s.onload=function(){let n=t.querySelector(".loop");if(void 0!==n&&null!=n){let l=function(){let e=n.querySelectorAll(".product-image"),l=t.querySelector(".loopbox");for(var o=0,r=e.length;o<r;o++)e[o].style.height=e[o].offsetWidth+"px";new LazyLoad({elements_selector:".lazy"}),new Masonry(n,{itemSelector:".productbox"}),void 0!==l&&null!=l&&(l.style.height="auto",t.querySelector(".loader").style.display="none")};l();let o=!1;e.onscroll=function(){if(!o&&e.pageYOffset+e.innerHeight>t.body.scrollHeight-250){o=!0;let e=t.querySelector(".loop-navigation .next");if(e){let n=e.getAttribute("href");t.querySelector(".loader").style.display="block";let r=new XMLHttpRequest;r.open("GET",n,!0),r.onload=function(){if(200===r.status){let e=(new DOMParser).parseFromString(r.responseText,"text/html"),n=e.querySelectorAll(".loop .productbox");n.forEach(function(e,n){t.querySelector(".loop").appendChild(e)}),l();let i=e.querySelector(".loop-navigation .next");if(t.querySelector(".loader").style.display="none",null!=i){let e=i.getAttribute("href");t.querySelector(".loop-navigation .next").setAttribute("href",e),new LazyLoad({elements_selector:".lazy"})}else{let e=t.querySelector(".loop-navigation");e.parentNode.removeChild(e)}o=!1}},r.send()}}}}};let c=t.createElement("script");c.async=!0,c.src=instaorder.main_script,n.appendChild(c),c.onload=function(){InstaOrder.init()}})(window,document),window.addComment=function(e){function t(){n(),i()}function n(e){if(S&&(m=s(v.cancelReplyId),u=s(v.commentFormId),m)){m.addEventListener("touchstart",o),m.addEventListener("click",o);for(var t,n=l(e),i=0,a=n.length;i<a;i++)t=n[i],t.addEventListener("touchstart",r),t.addEventListener("click",r)}}function l(e){var t=v.commentReplyClass;return e&&e.childNodes||(e=h),h.getElementsByClassName?e.getElementsByClassName(t):e.querySelectorAll("."+t)}function o(e){var t=this,n=v.temporaryFormId,l=s(n);l&&y&&(s(v.parentIdFieldId).value="0",l.parentNode.replaceChild(y,l),t.style.display="none",e.preventDefault())}function r(t){var n,l=this,o=d(l,"belowelement"),r=d(l,"commentid"),i=d(l,"respondelement"),a=d(l,"postid");o&&r&&i&&a&&(n=e.addComment.moveForm(o,r,i,a),!1===n&&t.preventDefault())}function i(){if(g){var e={childList:!0,subTree:!0};f=new g(a),f.observe(h.body,e)}}function a(e){for(var t=e.length;t--;)if(e[t].addedNodes.length)return void n()}function d(e,t){return b?e.dataset[t]:e.getAttribute("data-"+t)}function s(e){return h.getElementById(e)}function c(t,n,l,o){var r=s(t);y=s(l);var i,a,d,c=s(v.parentIdFieldId),f=s(v.postIdFieldId);if(r&&y&&c){p(y),o&&f&&(f.value=o),c.value=n,m.style.display="",r.parentNode.insertBefore(y,r.nextSibling),m.onclick=function(){return!1};try{for(var g=0;g<u.elements.length;g++)if(i=u.elements[g],a=!1,"getComputedStyle"in e?d=e.getComputedStyle(i):h.documentElement.currentStyle&&(d=i.currentStyle),(i.offsetWidth<=0&&i.offsetHeight<=0||"hidden"===d.visibility)&&(a=!0),"hidden"!==i.type&&!i.disabled&&!a){i.focus();break}}catch(e){}return!1}}function p(e){var t=v.temporaryFormId,n=s(t);n||(n=h.createElement("div"),n.id=t,n.style.display="none",e.parentNode.insertBefore(n,e))}var m,u,y,f,h=e.document,v={commentReplyClass:"comment-reply-link",cancelReplyId:"cancel-comment-reply-link",commentFormId:"commentform",temporaryFormId:"wp-temp-form-div",parentIdFieldId:"comment_parent",postIdFieldId:"comment_post_ID"},g=e.MutationObserver||e.WebKitMutationObserver||e.MozMutationObserver,S="querySelector"in h&&"addEventListener"in e,b=!!h.documentElement.dataset;return S&&"loading"!==h.readyState?t():S&&e.addEventListener("DOMContentLoaded",t,!1),{init:n,moveForm:c}}(window);</script></body>

</html>