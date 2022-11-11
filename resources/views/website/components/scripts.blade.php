     <script src="/assets/handlebars.min.js" type="text/javascript"></script>
     <script src="/assets/dt-theme.js" type="text/javascript"></script>     
     <script src="/assets/lazysizes.js" async="async"></script>



</div>     
    <div id="shopify-section-gdpr-cookies" class="shopify-section gdpr-section">
<div class="cookie-disclaimer bottom" > 
  <p>Please click on the cookies to move to the website acess/</p>
  <button type="button" class="accept-cookie">Accept</button>
  <button type="button" class="decline-cookie">Decline</button>  
</div>
<style>
  .cookie-disclaimer{
    position: fixed;
    max-width: 500px;
    bottom: 15px;
    padding: 15px;
    z-index: 2;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    text-align: center;
    border-radius:var(--DTRadius);
      color: ;
      background-color: var(--DTBodyBGColor); 
      background-color: ;
       
      box-shadow: var(--DTboxShadow);
         
      }
  .cookie-disclaimer.bottom{
    bottom: 0;
    left: 0;
    right: 0;
    padding:10px 0;
    max-width: 100%;
    border-radius:0;
  }
  .cookie-disclaimer.left{
    left: 15px;
    right: auto;
  }
  .cookie-disclaimer.right{

    left: auto;
    right: 15px;

  }
  
  .cookie-disclaimer.bottom > * { margin: 5px; }

  .cookie-disclaimer button{
    padding:5px 15px 5px 15px;
    color: ;
    background-color:;
  }
  .cookie-disclaimer button:hover{
    color: ;
    background-color:;
  }

</style>

<script type="text/javascript">

  jQuery(document).ready(function() { 
    var cookie = false;
    var cookieContent = $('.cookie-disclaimer');

    checkCookie();

    if (cookie === true) {
      cookieContent.hide();
    }

    function setCookie(dt_gdpr_name, cookie_value, exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
      var expires = "expires=" + d.toGMTString();
      document.cookie = dt_gdpr_name + "=" + cookie_value + "; " + expires;
    }

    function getCookie(dt_gdpr_name) {
      var name = dt_gdpr_name + "=";
      var ca = document.cookie.split(';');
      for (var i = 0; i < ca.length; i++) {
        var c = ca[i].trim();
        if (c.indexOf(name) === 0) return c.substring(name.length, c.length);
      }
      return "";
    }

    function checkCookie() {
      var user = getCookie("dt_gdpr_name");
      if (user !== "") {        
        cookie = true;
      } else {        
        if (user !== "" && user !== null) {
          setCookie("cookie_value", "cookie_value", 365);
        }
      }
    }

    function deleteCookie() {
      setCookie('dt_gdpr_name', '', -1);
    }
    $('.accept-cookie').click(function () {
      setCookie("dt_gdpr_name", "cookie_value", 365);     
      cookieContent.hide();
    });

    $('.decline-cookie').click(function () {        
      deleteCookie();
      cookieContent.hide();
    });
  });

</script>

</div>     
   
    <div class="dT_LoadingOverlay"></div>
<div class="dT_collectionOverlay"></div>
<style>
  .dT_LoadingOverlay{
    display: none;
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 2000;
    background: rgba(255,255,255,0.8) url("//cdn.shopify.com/s/files/1/0433/5232/6300/t/4/assets/dT_loader.gif?v=92312792613007481631619160933") center no-repeat;
      }
  body.loadingdT{
    overflow: hidden;   
  }
  body.loadingdT .dT_LoadingOverlay{
    display: block;
  }
  .dT_collectionOverlay{
    display: none;
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 2000;
    background: rgba(255,255,255,0.8) url("//cdn.shopify.com/s/files/1/0433/5232/6300/t/4/assets/loading.gif?v=83854287350844700871620388509") center no-repeat;
      }
  body.collectionPreloading{
    overflow: hidden;   
  }
  body.collectionPreloading .dT_collectionOverlay{
    display: block;
  }
  .collectionListPreload{
    position: relative;
  }

  .collectionListPreload:after{
    content:'';
    position: fixed;
    top:0;
    bottom:0;
    left:0;
    right:0;
    z-index: 2000;
    background: rgba(255,255,255,0.8) url("//cdn.shopify.com/s/files/1/0433/5232/6300/t/4/assets/loading.gif?v=83854287350844700871620388509") center no-repeat;
      }
</style>    

    <!-- /snippets/ajax-cart-template.liquid -->

  

      
     
      <a id="to-top" href="#savon-theme" class="dt-sc-to-top">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
          <path d="M263.432,3.136c-4.16-4.171-10.914-4.179-15.085-0.019c-0.006,0.006-0.013,0.013-0.019,0.019
                   l-192,192c-4.093,4.237-3.975,10.99,0.262,15.083c4.134,3.992,10.687,3.992,14.82,0L245.213,36.416v464.917
                   c0,5.891,4.776,10.667,10.667,10.667c5.891,0,10.667-4.776,10.667-10.667V36.416l173.781,173.781
                   c4.093,4.237,10.845,4.355,15.083,0.262c4.237-4.093,4.354-10.845,0.262-15.083c-0.086-0.089-0.173-0.176-0.262-0.262L263.432,3.136
                   z"/>
          <path d="M447.88,213.333c-2.831,0.005-5.548-1.115-7.552-3.115L255.88,25.749L71.432,210.219c-4.237,4.093-10.99,3.975-15.083-0.262
                   c-3.992-4.134-3.992-10.687,0-14.82l192-192c4.165-4.164,10.917-4.164,15.083,0l192,192c4.159,4.172,4.149,10.926-0.024,15.085
                   C453.409,212.214,450.702,213.333,447.88,213.333z"/>
          <path d="M255.88,512c-5.891,0-10.667-4.776-10.667-10.667V10.667C245.213,4.776,249.989,0,255.88,0
                   c5.891,0,10.667,4.776,10.667,10.667v490.667C266.546,507.224,261.771,512,255.88,512z"/>
        </svg>
      </a>
     
  </body>