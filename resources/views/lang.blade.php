

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  
 
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



