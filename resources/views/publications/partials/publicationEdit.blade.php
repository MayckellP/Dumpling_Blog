<div class="body-detailsEvent-PC w-100 pt-2" style="padding-bottom:10rem">
<div class="bodyEdit">
    <div class="contHeader-PC">
      @include('components.headerEvents') 
    </div>
    <div class="logo-event w-100 mb-5">
        <img src="/images/signWithLogo.svg" alt="" class="m-auto" style="width:35%">
    </div>
  <div class="cont-publication p-2">


    <form class="form-edit" action="/edit_event/{{$publicationsDetails->id}}" method="post" enctype="multipart/form-data">
        @if($publicationsDetails->category !== "Smalls_Events")
          <div class="topEvent d-flex align-items-center mb-2">
              <div class="cont-imgProfile">
                  <img src="/DB_Img/post/{{$user->foto}}" alt="">
              </div>
              <h2 class="user-publi">{{$user->name}}</h2>
              <small><i class="text-body-secondary">{{$user->email}}</i></small>
              <button type="submit" class="buttonSave py-1">Save</button>
          </div>

          <div class="detailsEvent w-100">
              <div class="top-title d-flex">
                <input type="text" class="form-control mb-1 w-50" id="title" placeholder="Title here" name="title" value="{{$publicationsDetails->title}}">
                <div class="category_select ms-1"  style="width:40%;">
                    <select class="form-select py-1" aria-label="Default select example" name="category">
                      <option value="General_Events">General Events</option>
                      <option value="Food_Events">Food & Drink</option>
                      <option value="Pub_Events">Clubs</option>
                      <option value="Smalls_Events">Blogs</option>
                      <option selected value="{{$publicationsDetails->category}}">New Category</option>
                    </select>
                </div>          
              </div>
              <textarea rows="4" type="text" class="form-control mb-1" id="content" placeholder="Content here" name="content">{{$publicationsDetails->content}}
              </textarea>
              <div class="time-publi w-100 ">
                <small class="d-flex justify-content-between">
                    <div class="form-control cont-place bg-white ps-2 d-flex align-items-center" style="width:40%">
                      <i class="bi bi-geo-fill fs-6"></i>
                      <input type="text" class="border-none w-100" id="place" name="place" value="{{$publicationsDetails->place}}">
                    </div>
                    <input type="date" class="form-control" style="width:30%" id="date" name="date" value="{{$publicationsDetails->date}}">
                    <input type="time" class="form-control w-25" id="hour" name="hour" value="{{$publicationsDetails->hour}}">
                </small>
              </div>
          </div>
          <div class="imageEvent my-2">
            <div class="form-multimedia">
                <label for="image" class="label-multi">Image</label>
                <label for="image" class="label-image">
                    <i class="bi bi-card-image">
                    <input type="file" class="form-control" id="image" name="image" value="{{$publicationsDetails->image}}">
                    </i>
                </label>
            </div>
            @if($publicationsDetails->image == NULL)
              <img src="/images/Show_Foto.png" alt="">
            @else
              <img src="/Publication_Img/post/{{$publicationsDetails->image}}" alt="">
            @endif
          </div>
          <div class="Comments d-flex align-items-center justify-content-between w-100">
                <i class="bi bi-heart-fill text-danger" style="width:15%"></i> 
                <i class="bi bi-chat-left-text" style="width:15%"></i>
                <i class="bi bi-share-fill" style="width:15%"></i>
                <div class="cont-created w-50 ms-5">
                    <p class="text-body-secondary m-auto">created at {{$publicationsDetails->created_at->diffForHumans()}}</p>
                </div>
          </div>

        @else

          <div class="topEvent d-flex align-items-center mb-2">
            <div class="cont-imgProfile">
                <img src="/DB_Img/post/{{$user->foto}}" alt="">
            </div>
            <h2 class="user-publi">{{$user->name}}</h2>
            <small><i class="text-body-secondary">{{$user->email}}</i></small>
            <button type="submit" class="buttonSave py-1">Save</button>
          </div>

          <div class="detailsEvent w-100">
              <div class="top-title d-flex">
                <input type="text" class="form-control mb-1 w-100" id="title" placeholder="Title here" name="title" value="{{$publicationsDetails->title}}">
                <div class="category_select ms-1" style="width:40%;">
                    <input type="hidden" value="Smalls_Events" name="category">
                </div>          
              </div>
              <textarea rows="4" type="text" class="form-control mb-1" id="content" placeholder="Content here" name="content">{{$publicationsDetails->content}}
              </textarea>
          </div>
          <div class="imageEvent my-2">
            <div class="form-multimedia">
              <label for="image" class="label-multi">Image</label>
              <label for="image" class="label-image">
                  <i class="bi bi-card-image">
                  <input type="file" class="form-control" id="image" name="image" value="{{$publicationsDetails->image}}">
                  </i>
              </label>
            </div>
            @if($publicationsDetails->image == NULL)
              <img src="/images/Show_Foto.png" alt="">
            @else
              <img src="/Publication_Img/post/{{$publicationsDetails->image}}" alt="">
            @endif
          </div>
          <div class="Comments d-flex align-items-center justify-content-between w-100">
            <i class="bi bi-heart-fill text-danger" style="width:15%"></i> 
            <i class="bi bi-chat-left-text" style="width:15%"></i>
            <i class="bi bi-share-fill" style="width:15%"></i>
            <div class="cont-created w-50 ms-5">
                <p class="text-body-secondary m-auto">created at {{$publicationsDetails->created_at->diffForHumans()}}</p>
            </div>
          </div>
        @endif
        @csrf
    </form>
  </div>
</div>
@include('components.sectionFooter')
</div>

