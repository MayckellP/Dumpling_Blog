<x-app-layout>
  <div class="bodyEventCreate">
    @include('components.headerEvents')

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
          <div style="width:45%">
            <select class="form-select" id="selectForm" style="width:100%; height:50%;" aria-label="Default select example" name="category">
              <option value="General_Events">General Event</option>
              <option value="Food_Events">Restaurant Event</option>
              <option value="Pub_Events">Pub Event</option>
              <option selected disabled>Category</option>
            </select>
            <label class="material-checkbox mt-2">
              <input type="checkbox" name="category" onclick="changeFormBlog()" value="Smalls_Events" id="category-blog">
              <span class="checkmarks"></span>
              Es un Blog?
            </label>
          </div>
        </div>
        <div class="form-floating mb-2">
          <textarea class="form-control" id="content" placeholder="Content here" name="content"></textarea>
          <label for="content">Content</label>
        </div>
        <div id="blogNone">
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
        </div>
        <p class="w-100 text-center text-danger fw-bold" id="text-blog">*Blog dont need "Date" and "Place".</p>
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
  </div>

  <div class="body-detailsEvent-PC w-100 " style="padding-bottom:10rem">
      <div class="logo-event w-100">
          <img src="/images/signWithLogo.svg" alt="" class="w-25 m-auto">
      </div>
  
      <div class="body-publication">
        <div class="calendar-left mt-2"></div>
  
        <div class="event-center mt-2 ">
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
                <div style="width:45%">
                  <select class="form-select" id="selectForm" style="width:100%; height:100%;" aria-label="Default select example" name="category">
                    <option value="General_Events">General Event</option>
                    <option value="Food_Events">Restaurant Event</option>
                    <option value="Pub_Events">Pub Event</option>
                    <option value="Smalls_Events">Blog</option>
                    <option selected disabled>Category</option>
                  </select>
                </div>
              </div>
              <div class="form-floating mb-2">
                <textarea class="form-control" id="content" placeholder="Content here" name="content"></textarea>
                <label for="content">Content</label>
              </div>
              <div id="blogNone">
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
              </div>
              @csrf
              <div class="w-100 my-3">
                <div class="form-multimedia" style="width:15%;">
                    <label for="image" class="label-multi ">Image</label>
                    <label for="image" class="label-image">
                        <i class="bi bi-card-image">
                            <input type="file" name="image" id="image">
                        </i>
                    </label>
                </div>
                <img src="images/Show_Foto.png" class="m-auto" alt="" id="showFoto">
              </div>
              <div class="cont-buttons d-flex justify-content-around">
                <button type="submit" class="btn btn-success mb-3 m-auto w-50 fw-bold">Create Event</button>  
                  <button type="button" class="btn btn-danger mb-3 m-auto w-25 fw-bold" onclick="return backPage()">Cancel</button> 
              </div>              
            </form>
          </div>            
        </div>
  
              <div class="filter-right d-flex justify-content-center z-2"></div>
      </div>
  </div>
</x-app-layout>

