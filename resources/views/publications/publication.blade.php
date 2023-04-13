@php
  $countComment = 0;
  $countLike = 0;
  $validationLike = 0;
@endphp


<style>
    @import url('https://fonts.cdnfonts.com/css/sen?styles=34225');
    .eventPage{
        background-color:white;
    }
    .cont-card{
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
        border-radius:10px;
        height:11em;
    }
    .cont-left{
        width:60%;
        height:100%;
        border-radius: 10px 0px 00px 10px;
        font-family: 'Sen', sans-serif;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
    }
    .cont-right{
        width:40%;
        height:100%;
        background-color:rgba(4, 151, 201, 0.5);
        border-radius: 0px 10px 10px 0px;
    }
    .user-card{
        font-family: 'Sen', sans-serif;
        color:white;
    }
    .infoCard a{
        font-family: 'Sen', sans-serif;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
    }
    .btn-more{
        background-color:black;
        border-radius:50px;
        text-decoration:none;
        color:white;
        padding:0.5em 1em 0.5em 1em;
        font-size:10px;
    }
    .toCreate {
        font-size: 7rem;
        position: absolute;
        position: fixed;
        bottom: 1rem;
        right: 1.5rem;
        color: #5496fa;
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
    }
</style>

<div class="eventPage">
    @include('publications.partials.searchPublication')

    <div class="px-2">
        @foreach($publicationsDetails as $publicationsDetail)
            @if($publicationsDetail->category === Request::path() )
                @foreach ($messages as $message)
                    @if($publicationsDetail->id_reference_publication == $message->Id_Reference_Publication)
                        @php
                          $countComment++;
                        @endphp
                    @endif
                @endforeach
                @foreach ($likes as $like)
                    @if($publicationsDetail->id_reference_publication == $like->Id_Reference_Publication)
                        @php
                          $countLike++;
                        @endphp
                    @endif
                @endforeach
                    <div class="cont-card d-flex w-100 mb-3">
                        <div class="cont-left">
                            <h3 class="fs-5 text-center m-auto" style="height:2rem">
                                {{$publicationsDetail->title}}
                            </h3>
                            <div class="imgEvent w-100">
                                @if($publicationsDetail == NULL)
                                    <img class="w-100" style="height:2em; border-radius: 10px 0px 00px 10px;" src="/images/Show_Foto.png"  alt="...">
                                @else
                                    <img class="w-100" style="height:9em; border-radius: 10px 0px 00px 10px;" src="/Publication_Img/post/{{$publicationsDetail->image}}"  alt="...">
                                @endif
                            </div>

                        </div>
                        <div class="cont-right ps-2">
                            <div class="header-card w-75 text-start">
                                <i class="bi bi-heart-fill text-danger me-1"></i>
                                    {{$countLike}}
                                <i class="bi bi-chat-left-text ms-3 me-1"></i>
                                    {{$countComment}}
                                    @php
                                      $countComment = 0;
                                      $countLike = 0;
                                    @endphp
                            </div>
                            <div class="info-card">
                                @foreach($publications as $publication)
                                    @if($publication->id === $publicationsDetail->id_reference_publication )
                                        <h3 class="user-card fs-4">{{$publication->username}}</h3>
                                    @endif
                                @endforeach
                                <i class="bi bi-calendar text-white"> {{$publicationsDetail->date}}</i><br>
                                <i class="bi bi-clock-fill text-white"> {{$publicationsDetail->hour}}</i><br>
                            </div>
                            <div class="infoCard w-100 text-center mt-1">
                                <a href="/details/{{$publicationsDetail->id}}" class="btn-more">
                                    More information  
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                            <div class="created mt-1 text-end me-2">
                                <small class="text-body-secondary">
                                    <i>{{$publicationsDetail->created_at->diffForHumans()}}</i>
                                </small>
                            </div>
                        </div>
                    </div>
            @endif
        @endforeach
    </div>
            
    @auth
        <a href="/create" class="toCreate">
            <img src="images/Button_NewEvent.png" alt="">
        </a>
    @endauth
</div>