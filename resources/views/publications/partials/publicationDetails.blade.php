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
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                <!-- CARD (SHOW --------------------- EVENTS GROUP) -->
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">{{$publicationsDetails->title}}</h5>
                              <p class="card-text">
                                  {{$publicationsDetails->title}}
                              </p>
                            </div>
                            <div class="card-footer">
                              <small class="text-body-secondary">{{$publicationsDetails->created_at->diffForHumans()}}</small><br>
                              <small>Comments: {{$countComment}}</small><br>
                              <small>Likes: {{$countLike}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @auth
                @if($publications->Id_Reference_User == Auth::user()->id)
                    <a href="/edit/{{$publicationsDetails->id}}">
                        <button type="button" class="btn btn-warning m-3">Edit Event</button>
                    </a>
                    @endif
            
                @if($likes->isEmpty())
                    <form action="/like" method="post">
                        <input type="hidden" id="checkValue" value="{{$publicationsDetails->id_reference_publication}}">
                        <input type="hidden" id="checkValue" name="id_reference_user" value="{{Auth::user()->id}}">
                        <input type="checkbox" name="Id_Reference_Publication" id="checklike" onclick="like()" class="d-none">
                        @csrf 
                        <button type="submit" >
                            <label for="checklike" class="bi-heart-fill" id="heart"></label>
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
                                    <label for="checklike" class="bi-heart-fill" id="heart"></label>
                                </button>
                            </form>  
                    @endif
                @endif
            @endauth
        </div>
    </div>
    @include('publications.partials.createMessage')

    @include('publications.partials.message')
</div>

