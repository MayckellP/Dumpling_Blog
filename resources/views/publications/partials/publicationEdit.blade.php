<div class="bodyEdit-PC">
  @include('components.headerEvents')

  <div class="cont-publication m-2 p-2">
    <form action="/edit_event/{{$publicationsDetails->id}}" method="post" enctype="multipart/form-data">
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
                <div class="category_select ms-1" style="width:40%;">
                    <select class="form-select py-0" aria-label="Default select example" name="category">
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



<!-- DESIGN DESKTOP VERSION -->
<div class="body-detailsEvent-PC w-100 " style="padding-bottom:10rem">
    <div class="logo-event w-100">
        <img src="/images/signWithLogo.svg" alt="" class="w-25 m-auto">
    </div>

    <form action="/edit_event/{{$publicationsDetails->id}}" method="post" enctype="multipart/form-data">
        <div class="body-publication">
            <div class="calendar-left mt-2">
                
            </div>

            <div class="event-center mt-2 ">
                @if($publicationsDetails->category !== "Smalls_Events")          

                    <div class="eventCard-pc d-flex flex-row p-3 mb-3 align-items-center">
                        <div class="infoEvent-pc d-flex w-50 flex-column">
                          
                            <div class="form-multimedia opacity-bg-50 w-25 mt-3 ms-4">
                                <label for="image" class="label-multi">Image</label>
                                <label for="image" class="label-image">
                                    <i class="bi bi-card-image">
                                    <input type="file" class="form-control" id="image" name="image" value="{{$publicationsDetails->image}}">
                                    </i>
                                </label>
                            </div>

                            @if($publicationsDetails->image == NULL)
                                <img class="w-100 rounded-5 border-1 border-black"
                                    style="box-shadow: -3px 3px 4px rgba(0, 0, 0, 0.25);" src="/images/Show_Foto.png"  alt="...">
                            @else
                                <img class="w-100 rounded-5 border-1 border-black" 
                                style="box-shadow: 3px 3px 2px rgba(0, 0, 0, 0.25);" src="/Publication_Img/post/{{$publicationsDetails->image}}"  alt="...">
                            @endif
                            <div class="header-card w-75 text-start fs-4 mt-2 ms-3">
                                <i class="bi bi-heart-fill text-danger me-1"></i>
                                    0
                                <i class="bi bi-chat-left-text ms-5 me-1"></i>
                                    0
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center w-50 ps-3">
                                <input type="text" class="titleEvent-pc text-center fs-1 rounded-5" name="title" value="{{$publicationsDetails->title}}"/>
                            
                            <div class="d-flex w-100 justify-content-between mt-3">
                                <input type="date" class="rounded-5 text-center" name="date" style="width:45%;" value="{{$publicationsDetails->date}}"/>
                                <input type="time" class="rounded-5 text-center" name="hour" style="width:45%;" value="{{$publicationsDetails->hour}}"/>
                            </div>
                            <div class="d-flex w-100 justify-content-between mt-3">
                                <div style="width:45%;" class="bg-white rounded-5">
                                  <i class="bi bi-geo-fill fw-bold text-center ms-3"></i>
                                  <input type="text" name="place" class="rounded-5 border-none text-center" style="width:70%;"  value="{{$publicationsDetails->place}}"/>
                                </div>
                                <div style="width:45%;" class="bg-white rounded-5">
                                  <i class="bi bi-geo-fill fw-bold text-center ms-3"></i>
                                  <input type="text" class="rounded-5 border-none text-center" style="width:70%;"  value="Enlace de Pagina Web"/>
                                </div>
                            </div>
                              <select class="form-select mt-3 rounded-5 border-none" aria-label="Default select example" name="category">
                                <option value="General_Events">General Events</option>
                                <option value="Food_Events">Food & Drink</option>
                                <option value="Pub_Events">Clubs</option>
                                <option value="Smalls_Events">Blogs</option>
                                <option selected value="{{$publicationsDetails->category}}">New Category</option>
                              </select>
                            <textarea id="" cols="30" rows="8" name="content" class="textarea-content w-75 mb-3 mt-3 fs-5 bg-white">{{$publicationsDetails->content}}</textarea>
                            @auth
                                @if($publications->Id_Reference_User == Auth::user()->id)
                                    <div class="d-grid gap-2 d-md-block w-100 text-end">
                                            <button class="btn btn-danger me-5 w-25" type="button">Cancel</button>
                                            <button class="buttonSave w-25" type="submit">Save Changes</button>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    </div>

                @elseif($publicationsDetails->category === "Smalls_Events")

                    @include('components.cardBlog')

                @endif
                
                    @include('components.sectionFooter')
            </div>

            <div class="filter-right d-flex justify-content-center z-2">
                
            </div>
        </div>
      @csrf 
    </form>
</div>