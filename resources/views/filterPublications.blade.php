@php
    $countComment = 0;
    $countLike = 0;
    $validationLike = 0;
@endphp


<div class="eventPage">
    @include('publications.partials.searchPublication')

    <div class="px-2">
        <div class="alert alert-primary" role="alert">
            The results are: 
        </div>
        @if(count($filtersDate) < 1)
           <div class="text-center my-3 py-5 d-flex align-items-center w-100 justify-content-center bg-opacity-10">
                <h2>
                    <i class="bi bi-funnel-fill"></i>
                    No events to show
                </h2>
           </div>
        @else
            @foreach($filtersDate as $filterDate)
                    @foreach ($messages as $message)
                @if($filterDate->id_reference_publication == $message->Id_Reference_Publication)
                    @php
                      $countComment++;
                    @endphp
                @endif
            @endforeach
            @foreach ($likes as $like)
                @if($filterDate->id_reference_publication == $like->Id_Reference_Publication)
                    @php
                      $countLike++;
                    @endphp
                @endif
            @endforeach
                <div class="cont-card d-flex w-100 mb-3">
                    <div class="cont-left">
                        <h3 class="fs-5 text-center m-auto" style="height:2rem">
                            {{$filterDate->title}}
                        </h3>
                        <div class="imgEvent w-100">  
                        @if($filterDate == NULL)
                                <img class="w-100" style="height:2em; border-radius: 10px 0px 00px 10px;" src="/images/Show_Foto.png"  alt="...">
                            @else
                                <img class="w-100" style="height:9em; border-radius: 10px 0px 00px 10px;" src="/Publication_Img/post/{{$filterDate->image}}"  alt="...">
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
                                @if($publication->id === $filterDate->id_reference_publication )
                                    <h3 class="user-card fs-4">{{$publication->username}}</h3>
                                @endif
                            @endforeach
                            <i class="bi bi-calendar text-white"> {{$filterDate->date}}</i><br>
                            <i class="bi bi-clock-fill text-white"> {{$filterDate->hour}}</i><br>
                        </div>
                        <div class="infoCard w-100 text-center mt-1">
                            <a href="/details/{{$filterDate->id}}" class="btn-more">
                                More information  
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="created mt-1 text-end me-2">
                            <small class="text-body-secondary">
                                <i>{{$filterDate->created_at->diffForHumans()}}</i>
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
            
    @auth
        <a href="/create" class="toCreate">
            <img src="images/Button_NewEvent.png" alt="">
        </a>
    @endauth
</div>