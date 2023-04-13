<style>
    .cont-header{
      background-color:white;
      width:98%;
      height:5rem;
      display:flex;
      justify-content:space-between;
      align-items:center;
      margin:auto;
    }
    .button_back{
      width:12%;
      cursor: pointer;
    }
    .button_back img{
      width:100%;
    }
    .logo_center{
      width:40%;
    }
    .button_back img{
      width:100%;
    }
    .cont_translate{
      width:18%;
    }
</style>

<div class="cont-header">
    <a class="button_back" onclick="return backPage()">
      <img src="/images/button_back.svg" alt="">
    </a>
    <div class="logo_center">
      <img src="/images/justDumplingLogo.svg" alt="">
    </div>
    <div class="cont_translate">
      @include('components.translateButton')
    </div>
</div>