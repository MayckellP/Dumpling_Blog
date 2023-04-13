@include('components.headerEvents')

<style>
    @import url('https://fonts.cdnfonts.com/css/sen?styles=34225');
    .cont-publication{
        background-color:rgba(4, 151, 201, 0.5);
        border-radius:10px;
        box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.25);
    }
    .cont-imgProfile{
        width:10%;
    }
    .cont-imgProfile img{
        border-radius:50%;
        box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.25);
    }
    .user-publi{
        font-family: 'Sen', sans-serif;
        margin:0px 5px 0px 5px;
        color:white;
    }
    .topEvent small{
        margin-left:0.5rem;
        font-size:10px;
    }
    .detailsEvent #title{
        font-family: 'Sen', sans-serif;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
    }
    .imageEvent{
        background-color:black;
    }
    .imageEvent img{
        width:75%;
        margin:auto;
    }
    .likesEvent i, .likesEvent small, .likesEvent label {
        font-size:18px;
    }
    .option-event{
        position:absolute;
        right:1rem;
    }
    .option-event img{
        width:100%;
    }
    .option-event ul{
        background-color:rgba(255, 255, 255, 0.85);
    }
    .form-multimedia {
      border-radius: 12px;
      width: 35%;
      display: flex;
      justify-content: space-between;
      filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, 0.25));
      background-color:white;
      position:absolute;
      margin-top:0.5rem;
      margin-left:0.5rem;
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
      color:black;
    }
    .buttonSave{
      background-color:#04B500;
      box-shadow: -3px 3px 4px rgba(0, 0, 0, 0.25); 
      border-radius: 10px;
      font-size:13px;
      width:20%;
      display:flex;
      align-items:center;
      justify-content:center;
      color:white;
      font-weight:bold;
      margin-left: 1rem;
      animation: hello 0.8s 1 linear;
    }
        @keyframes hello {
      0% {
        transform: scale(0.7, 1.3);
      }
    
      25% {
        transform: scale(1.3, 0.7);
      }
    
      50% {
        transform: scale(0.7, 1.3);
      }
    
      75% {
        transform: scale(1.3, 0.7);
      }
    
      100% {
        transform: scale(1, 1);
      }
    }
</style>

<div class="cont-publication m-2 p-2">
  <form action="/edit_event/{{$publicationsDetails->id}}" method="post" enctype="multipart/form-data">
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
      </div>
      @csrf
  </form>

    @include('publications.partials.message')
</div>