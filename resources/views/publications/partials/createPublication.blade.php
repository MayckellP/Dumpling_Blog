<x-app-layout>

  @include('components.headerEvents')
  <style>
    @import url('https://fonts.cdnfonts.com/css/sen?styles=34225');
    .cont-formular{
      background-color:rgba(4, 151, 201, 0.5);
      padding:0.5rem;
    }
    .title-form{
      font-family: 'Sen', sans-serif;
      width:75%;
      margin:auto;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
      font-weight:bold;
      margin-top:1.5rem;
      margin-bottom:1.5rem;
      font-size:22px;
      text-align:center;
    }
    .form-multimedia {
      border-radius: 12px;
      width: 35%;
      display: flex;
      justify-content: space-between;
      filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, 0.25));
      background-color:white;
    }
    .label-multi {
      padding: 0.5rem 0.5rem 0.5rem 0.5rem;
      width: 100%;
    }
    .label-image {
      font-size: 40px;
      align-self: center;
      margin-right: 1rem;
    }
    .form-multimedia input {
      width: 100%;
      z-index: 1;
      display: none;
    }
  </style>

  <div class="cont-formular">
    <h2 class="title-form text-white">YOUR NEW EVENT WILL BE SOON READY!</h2>
    <form action="/create_event" method="post" enctype="multipart/form-data">
        <!-- Value hidden -->
        <input type="text" class="form-control d-none" id="username" name="username" value="{{Auth::user()->name}}">
        <input type="text" class="form-control d-none" id="Id_Reference_User" name="Id_Reference_User" value="{{Auth::user()->id}}">
  
      <div class="d-flex justify-content-between mb-3">
        <div class="form-floating w-50">
          <input type="text" class="form-control" id="title" placeholder="Title here" name="title">
          <label for="title">Title</label>
        </div>
        <select class="form-select" style="width:45%;" aria-label="Default select example" name="category">
          <option value="General_Events">General Event</option>
          <option value="Food_Events">Restaurant Event</option>
          <option value="Pub_Events">Pub Event</option>
          <option value="Smalls_Events">Blog</option>
          <option selected disabled>Category</option>
        </select>
      </div>
      <div class="form-floating mb-2">
        <textarea class="form-control" id="content" placeholder="Content here" name="content"></textarea>
        <label for="content">Content</label>
      </div>
      <div class="d-flex justify-content-between mb-3">
        <div class="form-floating w-50">
          <input type="date" class="form-control" id="date" name="date">
          <label for="date">Date</label>
        </div>
        <div class="form-floating" style="width:45%;">
          <input type="time" class="form-control" id="hour" name="hour">
          <label for="date">Hour</label>
        </div>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="place" placeholder="Place here" name="place">
        <label for="place">Place</label>
      </div>
      <div class="form-multimedia">
          <label for="image" class="label-multi">Image</label>
          <label for="image" class="label-image">
              <i class="bi bi-card-image">
                  <input type="file" name="image" id="image">
              </i>
          </label>
      </div>
      @csrf
      <div class="w-100 my-3">
        <img src="images/Show_Foto.png" class="m-auto" alt="">
      </div>
      <div class="cont-buttons d-flex justify-content-around">
        <button type="submit" class="btn btn-success mb-3 m-auto w-50 fw-bold">Create Event</button>  
          <button type="button" class="btn btn-danger mb-3 m-auto w-25 fw-bold" onclick="return backPage()">Cancel</button> 
      </div>              
    </form>
  </div>
</x-app-layout>

