<<<<<<< HEAD

<style>
    .btn-group {
      width:50px;
      height:50px;
      filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, 0.5));
    }
    .btn-group img{
        width:100%;
    }
    .dropdown-menu{
        background-color: #2980B9;
        color:white;
        filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.5));
    }
</style> 
<div class="btn-group dropend d-flex justify-content-start  text-white m-3">
    <button type="button" class="btn-group text-end" data-bs-toggle="dropdown" aria-expanded="false">
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
=======
<style>
   /* Dropdown Button */
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #3498DB;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;} 
</style>

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Translate</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#">English</a>
    <a href="#">Deutsch</a>
    <a href="#">français</a>
    <a href="#">Spanish</a>
    <a href="#">Ukranien</a>
  </div>
</div>
<script>
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
>>>>>>> 2339bf0 (commit 11:13 hours)
