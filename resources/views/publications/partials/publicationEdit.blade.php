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
      margin-top:4.5rem;
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
</style>

<div class="cont-publication m-2 p-2">
    <div class="topEvent d-flex align-items-center mb-2">
        <div class="cont-imgProfile">
            <img src="/DB_Img/post/{{$user->foto}}" alt="">
        </div>
        <h2 class="user-publi">{{$user->name}}</h2>
        <small><i class="text-body-secondary">{{$user->email}}</i></small>
        @auth
            @if($publications->Id_Reference_User == Auth::user()->id)
                <div class="option-event dropend d-flex justify-content-start text-white m-3 ">
                        <img src="/images/Option_Event.png" data-bs-toggle="dropdown" aria-expanded="false">
                    <ul class="dropdown-menu ps-3">
                        <li class="mb-2">
                            <a href="/edit/{{$publicationsDetails->id}}" class="text-decoration-none text-black fs-5">
                            <i class="bi bi-pencil-square text-success fw-bold"></i> Edit
                            </a>
                        </li>
                        <li>
                            <a href="" class="text-decoration-none text-black fs-5">
                                <i class="bi bi-trash-fill text-danger fw-bold"></i> Delete
                            </a> 
                        </li>
                    </ul>
                </div>
            @endif
        @endauth
    </div>
    <form action="/edit_event/{{$publicationsDetails->id}}" method="post">
      <div class="detailsEvent w-100">
          <div class="top-title d-flex">
            <input type="text" class="form-control mb-1 w-50" id="title" placeholder="Title here" name="title" value="{{$publicationsDetails->title}}">
            <div class="category_select ms-1" style="width:40%;">
                <select class="form-select py-0" aria-label="Default select example">
                  <option value="General_Events">General Events</option>
                  <option value="Food_Events">Food & Drink</option>
                  <option value="Pub_Events">Clubs</option>
                  <option value="Smalls_Events">Blogs</option>
                  <option selected disabled value="{{$publicationsDetails->category}}">New Category</option>
                </select>
            </div>          
          </div>
          <textarea rows="4" type="text" class="form-control mb-1" id="content" placeholder="Content here" name="content">{{$publicationsDetails->content}}
          </textarea>
          <div class="time-publi w-100 text-end">
            <small class="d-flex justify-content-end">
                <input type="date" class="form-control me-1" style="width:30%" id="date" name="date" value="{{$publicationsDetails->date}}">
                <input type="time" class="form-control w-25" id="date" name="date" value="{{$publicationsDetails->hour}}">
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
        <img src="/Publication_Img/post/{{$publicationsDetails->image}}" alt="">
      </div>
          <div class="Comments d-flex align-items-center">
              <i class="bi bi-chat-left-text me-1"></i>
              <small>0</small>
              <i class="bi bi-share-fill ms-5"></i>
          </div>
          <div class="cont-created">
              <p class="text-body-secondary m-auto">created at {{$publicationsDetails->created_at->diffForHumans()}}</p>
          </div>
      </div>
  </form>
</div>




<div class="w-75 mt-5 m-auto">
  <form action="/edit_event/{{$publicationsDetails->id}}" method="post">
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="title" placeholder="Title here" name="title" value="{{$publicationsDetails->title}}">
      <label for="title">Title</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="content" placeholder="Content here" name="content" value="{{$publicationsDetails->content}}">
      <label for="content">Content</label>
    </div>
    <div class="form-floating">
      <input type="file" class="form-control" id="image" name="image" value="{{$publicationsDetails->image}}">
      <label for="image">Image</label>
    </div>
    <div class="form-floating">
      <input type="date" class="form-control" id="date" name="date" value="{{$publicationsDetails->date}}">
      <label for="date">Date</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="place" placeholder="Place here" name="place" value="{{$publicationsDetails->place}}">
      <label for="place">Place</label>
    </div>
    @csrf
    <button type="submit" class="btn btn-info my-3 m-auto w-50">Save Changes</button>                
  </form>
</div>