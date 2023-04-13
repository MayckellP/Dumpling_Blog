<style>
    .btn-translate {
      width:60%;
      z-index: 2;
    }
    .btn-translate img{
        width:100%;
        filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, 0.5));
    }
    .dropdown-menu{
        background-color: rgba(54, 130, 165, 0.75);
        color:white;
        filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.5));
    }
</style> 
<div class="btn-translate dropend d-flex justify-content-end text-white ms-3">
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