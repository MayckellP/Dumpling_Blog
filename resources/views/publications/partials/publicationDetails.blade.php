@php
  $countComment = 0;
  $countLike = 0;
  $validationLike = 0;
@endphp
@foreach ($messages as $message)
    @if($publicationsDetails->id_reference_publication == $message->Id_Reference_Publication)
        @php
          $countComment++;
        @endphp
    @endif
@endforeach
@foreach ($likes as $like)
    @if($publicationsDetails->id_reference_publication == $like->Id_Reference_Publication)
        @php
          $countLike++;
        @endphp
    @endif
@endforeach

<div class="body-detailsEvent">
    @include('components.headerEvents')

    <!-- DESIGN MOBILE VERSION -->
    <div class="cont-publication m-2 p-2">
       <div class="topEvent d-flex align-items-center mb-2">
           <div class="cont-imgProfile">
               <img src="/DB_Img/post/{{$user->foto}}" alt="">
           </div>
           <h2 class="user-publi">{{$user->name}}</h2>
           <small><i class="text-body-secondary">{{$user->email}}</i></small>
           @auth
               @if($publications->Id_Reference_User == Auth::user()->id)
                   <div class="option-event">
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
       <div class="detailsEvent w-100">
           <h2>{{$publicationsDetails->title}}</h2>
           <p class="mb-0">{{$publicationsDetails->content}}</p><br>
           <div class="time-publi w-100 text-end mt-2">
               <small class="d-flex justify-content-between">
                   <div>
                   <i class="bi bi-geo-fill text-white px-4 py-2 bg-dark rounded-3 fw-bold"> {{$publicationsDetails->place}}</i>
                   </div>
                   <div class="w-50">
                       <i class="bi bi-calendar text-white me-4 fw-bold"> {{$publicationsDetails->date}}</i>
                       <i class="bi bi-clock-fill text-white p-2 bg-dark rounded-3 fw-bold"> {{$publicationsDetails->hour}}</i>
                   </div>
               </small>
           </div>
       </div>
       <div class="imageEvent my-2">
           <img src="/Publication_Img/post/{{$publicationsDetails->image}}" alt="">
       </div>
       <div class="likesEvent d-flex justify-content-around">
           <div class="likes d-flex align-items-center">
               @auth
                   @if($likes->isEmpty())
                       <form action="/like" method="post">
                           <input type="hidden" id="checkValue" value="{{$publicationsDetails->id_reference_publication}}">
                           <input type="hidden" id="checkValue" name="id_reference_user" value="{{Auth::user()->id}}">
                           <input type="checkbox" name="Id_Reference_Publication" id="checklike" onclick="like()" class="d-none">
                           @csrf 
                           <button type="submit" >
                               <label for="checklike" class="bi-heart-fill me-1" id="heart"></label>
                           </button>
                       </form>
                   @else
                       @foreach($likes as $like)
                           @if($like->id_reference_user == Auth::user()->id && $like->Id_Reference_Publication == $publicationsDetails->id)
                               @php
                                   $validationLike++;
                               @endphp            

                           @endif
                       @endforeach
                       @if($validationLike == 1)     
                           <i class="bi bi-heart-fill text-danger" id="heart"></i>      
                       @else
                               <form action="/like" method="post">
                                   <input type="hidden" id="checkValue" value="{{$publicationsDetails->id_reference_publication}}">
                                   <input type="hidden" id="checkValue" name="id_reference_user" value="{{Auth::user()->id}}">
                                   <input type="checkbox" name="Id_Reference_Publication" id="checklike" onclick="like()" class="d-none">
                                   @csrf 
                                   <button type="submit">
                                       <label for="checklike" class="bi-heart-fill me-1" id="heart"></label>
                                   </button>
                               </form>  
                       @endif
                   @endif
               @endauth
               @guest
                   <i class="bi bi-heart-fill text-danger" id="heart"></i>
               @endguest
               <small class="ms-1">{{$countLike}}</small>
           </div>
           <div class="Comments d-flex align-items-center">
               <i class="bi bi-chat-left-text me-1"></i>
               <small>{{$countComment}}</small>
               <i class="bi bi-share-fill ms-5"></i>
           </div>
           <div class="cont-created">
               <p class="text-body-secondary m-auto">created at {{$publicationsDetails->created_at->diffForHumans()}}</p>
           </div>
       </div>
    </div>
    @include('publications.partials.createMessage')

    @include('publications.partials.message')
</div>


 <!-- DESIGN DESKTOP VERSION -->
<div class="body-detailsEvent-PC w-100">
    <div class="logo-event w-100">
        <img src="/images/signWithLogo.svg" alt="" class="w-25 m-auto">
    </div>

    <form action="/filter" method="post">
        <div class="body-publication">
            <div class="calendar-left mt-2">
                @include('components.calendarLeftSide')
            </div>

            <div class="event-center mt-2 ">
                @if($publicationsDetails->category !== "Smalls_Events")

                    <div class="eventCard-pc d-flex flex-row p-3 mb-3 align-items-center">
                        <div class="infoEvent-pc d-flex w-50 flex-column">
                            @if($publicationsDetails->image == NULL)
                                <img class="w-100 rounded-5 border-1 border-black"
                                    style="box-shadow: -3px 3px 4px rgba(0, 0, 0, 0.25);" src="/images/Show_Foto.png"  alt="...">
                            @else
                                <img class="w-100 rounded-5 border-1 border-black" 
                                style="box-shadow: 3px 3px 2px rgba(0, 0, 0, 0.25);" src="/Publication_Img/post/{{$publicationsDetails->image}}"  alt="...">
                            @endif
                            <div class="header-card w-75 text-start fs-4 mt-2 ms-3">
                                <i class="bi bi-heart-fill text-danger me-1"></i>
                                    {{$countLike}}
                                <i class="bi bi-chat-left-text ms-5 me-1"></i>
                                    {{$countComment}}
                                    @php
                                      $countComment = 0;
                                      $countLike = 0;
                                    @endphp
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center w-50 ps-3">
                                <h3 class="titleEvent-pc text-center fs-1">{{$publicationsDetails->title}}</h3>
                            
                            <div class="d-flex w-100 justify-content-between mt-3">
                                <i class="bi bi-calendar fw-bold w-50 text-center fs-6"> {{$publicationsDetails->date}}</i><br>
                                <i class="bi bi-clock-fill fw-bold w-50 text-center fs-6"> {{$publicationsDetails->hour}}</i><br>
                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <i class="bi bi-geo-fill fw-bold w-50 text-center fs-6"> {{$publicationsDetails->place}}</i><br>
                                <i class="bi bi-geo-fill fw-bold w-50 text-center fs-6"> Enlace de Pagina Web</i>
                            </div>
                            <textarea id="" cols="30" rows="8" class="textarea-content w-75 mb-3 mt-5 fs-5" disabled>{{$publicationsDetails->content}}</textarea>
                            @auth
                                @if($publications->Id_Reference_User == Auth::user()->id)
                                    <div class="d-grid gap-2 d-md-block w-100 text-end">
                                        <a href="/edit/{{$publicationsDetails->id}}">
                                            <button class="btn btn-success me-5 w-25" type="button">Edit</button>
                                        </a>
                                        <form action="delete" method="post">
                                            @method('get')
                                            <button class="btn btn-danger w-25" type="button">Delete</button>
                                        </form>
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
                @include('components.FilterRight-PC')
                @csrf 
                @method('get')
            </div>
        </div>
    </form>

    <div class="d-flex mt-0 pt-0 m-auto justify-content-between align-items-start" style="width:90%">
        <div class="cont-message p-2 mt-0 rounded-5" style="width:45%">
            @auth
                <form action="/create_message/{{$publicationsDetails->id_reference_publication}}" method="post">     
                    <div class="d-flex w-100 align-items-center">
                        <div class="cont-imgProfile">
                            <img src="/DB_Img/post/{{Auth::user()->foto}}" alt="">
                        </div>
                        <div class="message ms-3" style="width:72%;">
                            <input class="invisible d-none" type="text" name="username" id="username" placeholder="Username" value="{{Auth::user()->name}}">
                            <h5 class="fs-4">{{Auth::user()->name}}</h5>
                            <input class="input-message h-100 py-3 fs-5 w-100" type="text" name="content" id="content" placeholder="Write what do you think...">
                            <input  type="hidden" name="Id_Reference_Publication" id="Id_Reference_Publication" value="{{$publicationsDetails->id_reference_publication}}">
                            <input type="text" class="form-control d-none" id="id_reference_user" name="id_reference_user" value="{{Auth::user()->id}}">
                        </div>
                    </div>
                    @csrf 
                    <button class="btn-message fs-4 px-4 mt-3 " type="submit"> 
                        Send
                        <i class="bi bi-caret-right-fill"></i>
                    </button>
                </form>
            @endauth

            @guest
                <form action="/create_message/{{$publicationsDetails->id_reference_publication}}" method="post" >
                    <div class="d-flex w-100 align-items-center">     
                        <div class="cont-imgProfile">
                            <img src="/images/DefaultFoto.jpg" alt="">
                        </div>
                        <div class="message ms-3" style="width:72%;">
                            <input class="invisible d-none" type="text" name="username" id="username" placeholder="Username" value="Anonymus">
                            <h5 class="fs-4">Anonymus</h5>
                            <input class="input-message h-100 py-3 fs-5 w-100" type="text" name="content" id="content" placeholder="Write what do you think...">
                            <input  type="hidden" name="Id_Reference_Publication" id="Id_Reference_Publication" value="{{$publicationsDetails->id_reference_publication}}">
                            <input type="text" class="form-control d-none" id="id_reference_user" name="id_reference_user">
                        </div>
                    </div>
                    @csrf
                    <button class="btn-message fs-4 px-4 mt-3 " type="submit"> 
                        Send
                        <i class="bi bi-caret-right-fill"></i>
                    </button> 
                </form>
            @endguest
        </div>

        <div class="background  py-1 w-50 rounded-5 pe-3 mb-5">
            <div  class="w-100 mb-3 fs-5 overflow-y-auto" style="height:25rem;">
                <h2 class="text-center">Tus comentarios aqui</h2>
                <hr class="w-75 m-auto">
                @foreach ($messages as $message)
                    @if($publicationsDetails->id_reference_publication == $message->Id_Reference_Publication)
                        @php
                            $countComment++;
                        @endphp
                        @foreach($totalUsers as $totalUser)
                            @if($totalUser->id == $message->id_reference_user)
                                <div class="d-flex w-90 align-items-start mt-4 px-2" >     
                                    <div class="cont-imgProfile">
                                        <img src="/DB_Img/post/{{$totalUser->foto}}" alt="">
                                    </div>
                                    <div class="ms-2 w-100">
                                        <div class="bg-message rounded-3 pt-2" style="width:95%;">
                                            <h5 class="ms-2 mb-0 fw-bold">{{$message->username}}</h5>
                                            <input class="bg-message border-none ps-2 fs-6 w-100" disabled type="text" value="{{$message->content}}"><br>
                                        </div>
                                        <i style="font-size:12px;">{{$message->created_at->diffForHumans()}}</i>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                        @if($message->id_reference_user == NULL)

                            <div class="d-flex w-90 align-items-start mt-4 px-2" >     
                                <div class="cont-imgProfile">
                                    <img src="/images/DefaultFoto.jpg" alt="">
                                </div>
                                <div class="ms-2 w-100">
                                    <div class="bg-message rounded-3 pt-2" style="width:95%;">
                                        <h5 class="ms-2 mb-0 fw-bold">Anonymus</h5>
                                        <input class="bg-message border-none ps-2 fs-6 w-100" disabled type="text" value="{{$message->content}}"><br>
                                    </div>
                                    <i style="font-size:12px;">{{$message->created_at->diffForHumans()}}</i>
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
