<style>
     #google_translate_element select{
          border-radius:50px;
          background-color:#464545;
          color:white;
          font-weight:bold;
          border:none;
          width:85%;
     } 

  /hide google translate link | logo | banner-frame/
  .goog-logo-link,.gskiptranslate,.goog-te-gadget span,.goog-te-banner-frame,#goog-gt-tt, .goog-te-balloon-frame,div#goog-gt-{
    display: none!important;
  }
  .goog-te-gadget {
    color: transparent!important;
    font-size:0px;
  }

  .goog-text-highlight {
    background: none !important;
    box-shadow: none !important;
  }

 /google translate Dropdown/

</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div id="google_translate_element"></div>


  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <script type="text/javascript">
       function googleTranslateElementInit() {
          new google.translate.TranslateElement({
               pageLanguage: 'en',
               autoDisplay: 'false',
               includedLanguages:'fr,en,es,de,uk,it', 
               layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
          }, 'google_translate_element');

          var $googleDiv = $("#google_translate_element .skiptranslate");
          var $googleDivChild = $("#google_translate_element .skiptranslate div");
          $googleDivChild.next().remove();

          $googleDiv.contents().filter(function(){
               return this.nodeType === 3 && $.trim(this.nodeValue) !== '';
          }).remove();

       }
  </script>

