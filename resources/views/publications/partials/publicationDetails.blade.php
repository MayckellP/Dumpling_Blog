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


@include('components.headerEvents')

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
                                @csrf
                                <button type="submit">
                                    <label for="checklike" class="bi-heart-fill me-1" id="heart"></label>
                                </button>
                            </form>
                          @endif
                          <form action="/message/{{$publicationsDetails->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit"><i class="bi bi-trash3-fill"></i>Delete</button>
                        </form>
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

