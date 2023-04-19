

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <style>
   .fixed-con {
    z-index: 9724790009779558!important;
    background-color: #f7f8fc;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    overflow-y: auto;
  }
  .VIpgJd-ZVi9od-aZ2wEe-wOHMyf{
   z-index: 9724790009779!important;
   top:0;
   left:unset;
   right:-5px;
   display:none!important;
   border-radius:50%;
   border:2px solid gold;
  }
  .VIpgJd-ZVi9od-aZ2wEe-OiiCO{
    width:80px;
    height:80px;
  }
  /*hide google translate link | logo | banner-frame */
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
   
 /*google translate Dropdown */
 
 #google_translate_element select{
 background:#f6edfd;
 color:#383ffa;
 border: none;
 border-radius:3px;
 padding:6px 8px
 }
 .goog-logo-link{
    display:none !important;
   }
 .goog-te-gadget{
  color:transparent!important;
  }  
  .goog-te-banner-frame{
 display:none !important;
 }
 #google_translate_element select{
   background-color:#f6edfd;
   color:#383ffa;
   border: none;
   border-radius:3px;
   padding:6px 8px
 }
 #goog-gt-tt, .goog-te-balloon-frame
{
display: none !important;
}
.goog-text-highlight 
{ 
background: none !important;
box-shadow: none !important;
}

  </style>
 
        <div id="google_translate_element"></div>


          <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
          
          <script type="text/javascript">
               function googleTranslateElementInit() {
               new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
               
               var $googleDiv = $("#google_translate_element .skiptranslate");
               var $googleDivChild = $("#google_translate_element .skiptranslate div");
               $googleDivChild.next().remove();
               
               $googleDiv.contents().filter(function(){
               return this.nodeType === 3 && $.trim(this.nodeValue) !== '';
               }).remove();
               
               }
           </script>

<script>

 function googleTranslateElementInit() {

 new google.translate.TranslateElement({

 pageLanguage: 'en',

 autoDisplay: 'true',

 includedLanguages:'fr,en,es,de,uk,it', 

 layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL

 }, 'google_translate_element');

 }

 </script>

    <!-- </head>
<style>
    .changeLang1 {
        margin:10px;
    }
    
    .btn-translate {
      width:50px;
      height:50px;
      filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, 0.5));
      position:absolute;
      top:3rem;
      z-index: 3;
    }
    .btn-translate img{
      width:100%;
    }
    .changeLang{
      color:white;
      background-Color:rgba(54, 130, 165, 0.75);
      background-image: url(/images/translate.svg);
      filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.5));
      width: 120px;
    }
    
    
</style> 
<body>


<div class="changeLang1">
<form action="" >
      

    <select class="changeLang" id="translate">
      <option value="en" {{ session()->get('locale') == 'en' ? 'selected' :''}}>English</option>
      <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' :''}}>France</option>
      <option value="es" {{ session()->get('locale') == 'es' ? 'selected' :''}}>Spanish</option>
      <option value="it" {{ session()->get('locale') == 'it' ? 'selected' :''}}>Italiano</option>
      <option value="uk" {{ session()->get('locale') == 'uk' ? 'selected' :''}}>Ukranian</option>
      <option value="de" {{ session()->get('locale') == 'de' ? 'selected' :''}}>Deutsh</option>
    </select>

    <div class="container">
  
        <div class="card">
          <div class="card-header">
            <h1>Laravel Google Translate Example - ItSolutionStuff.com</h1>
          </div>
          <div class="card-body">
                
              
                <h3>{{ GoogleTranslate::trans('Welcome to ItSolutionStuff.com', app()->getLocale()) }}</h3>
                <h3>{{ GoogleTranslate::trans('Hello World', app()->getLocale()) }}</h3>
          </div>
        </div>
      
    </div>
    
</form>
</div>

 
<br><br><br><br>
<h3>{{ GoogleTranslate::trans('Google translate in different language ', app()->getLocale())  }}</h3>

<script type="text/javascript">
    
    var url = "{{ route('changeLang') }}";
    
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    }); 
  
</script>  -->



