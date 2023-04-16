
<x-app-layout>
<head>
    <title>How to Create Multi Language Website in Laravel </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
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

        <!-- <div class="card">
            <<div class="row">
                <div class="col-md-2">
                   <select class=" changeLang" id="translate">
                      <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                      <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' :''}}>France</option>
                      <option value="es" {{ session()->get('locale') == 'es' ? 'selected' :''}}>Spanish</option>
                      <option value="it" {{ session()->get('locale') == 'it' ? 'selected' :''}}>Italiano</option>
                      <option value="uk" {{ session()->get('locale') == 'uk' ? 'selected' :''}}>Ukranian</option>
                      <option value="de" {{ session()->get('locale') == 'de' ? 'selected' :''}}>Deutsh</option>
                    </select>
                </div>
                 <h3>{{ GoogleTranslate::trans('Google translate in different language ', app()->getLocale())  }}</h3>
            </div>
        </div>
   -->     

    
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
    
</form>
</div>

 
<br><br><br><br>
<h3>{{ GoogleTranslate::trans('Google translate in different language ', app()->getLocale())  }}</h3>

<script type="text/javascript">
    
    var url = "{{ route('changeLang') }}";
    
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    }); 
  
</script> 
</x-app-layout>
</body>
</html>	

