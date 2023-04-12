

</script>
<!DOCTYPE html>
<html lang="en-US">
 
<head>
    <title>
        How To Add Google Translate
        Button On Your Webpage ?
    </title>
    <style>
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
    .dropdown-menu{
        background-color: rgba(54, 130, 165, 0.75);
        color:white;
        filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.5));
    }
</style> 
</head>
 
<body>
    <p>Hello everyone!</p>
    <p>Welcome to GeeksforGeeks</p>
 
    <p>
        Translate this page in
        your preferred language:
    </p>
    
<div class="btn-translate dropend d-flex justify-content-start  text-white m-3">
    <button type="button" class="btn-translate text-end" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="/images/translate.svg">
    </button>
    <ul class="dropdown-menu ps-3">
      <li>German</li>
      <li><hr class="dropdown-divider"></li>
      <li>English</li>
      <li><hr class="dropdown-divider"></li>
      <li>Spanish</li>
      <li><hr class="dropdown-divider"></li>
      <li>French</li>
      <li><hr class="dropdown-divider"></li>
      <li>Ukranian</li>
      <li><hr class="dropdown-divider"></li>
    </ul>
</div>




    <div id="google_translate_element"></div>
 
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en'},
                'google_translate_element'
            );
        }
    </script>
 
    <script type="text/javascript"
            src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
 
    <p>
        You can translate the content of this
        page by selecting a language in the
        select box.
    </p>
</body>
 
</html>