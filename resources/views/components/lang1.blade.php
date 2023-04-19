 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!---->
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
    dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.changeLang {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.changeLang a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.changeLang a:hover {backgroundz-color: #ddd;}

.dropdown:hover .changeLang {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style> 
      
      
      <div class="btn-translate dropend d-flex justify-content-start  text-white m-3">
              <button type="button" class="btn-translate text-end"data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="/images/translate.svg">
              </button>
              <ul class="dropdown-menu ps-3">
                <li >German</li><x-flag-country-de class="w-6 h-6" />
                <li><hr class="dropdown-divider"></li>
                <li>English</li><x-flag-country-us class="w-6 h-6"/>
                <li><hr class="dropdown-divider"></li>
                <li>Spanish</li><x-flag-country-es class="w-6 h-6"/>
                <li><hr class="dropdown-divider"></li>
                <li>French</li><x-flag-country-fr class="w-6 h-6"/>
                <li><hr class="dropdown-divider"></li>
                <li>Ukranian</li><x-flag-country-fr class="w-6 h-6"/>
              </ul>
          </div>
 <div>
  
 </div>

           

</body>


