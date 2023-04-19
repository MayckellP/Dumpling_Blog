@php
    $countComment = 0;
    $countLike = 0;
    $validationLike = 0;
    $countCommentPC = 0;
    $countLikePC = 0;
    $validationLikePC = 0;
@endphp


<div class="eventPage">
    <div class="filter-Mobile">
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





    <!-- DESIGN DESKTOP VERSION -->
    <div class="filter-PC">
    <div class="alert alert-primary" role="alert">
        The results are: 
    </div>
    <div class="logo-event w-100">
        <img src="images/signWithLogo.svg" alt="" class="w-25 m-auto">
    </div>

    @if(count($filtersDate) < 1)
       <div class="text-center my-3 py-5 d-flex align-items-center w-100 justify-content-center bg-opacity-10">
            <h2>
                <i class="bi bi-funnel-fill"></i>
                No events to show
            </h2>
       </div>
    @else
        <div class="d-flex flex-column">    
            <form action="/filter" method="post">
                <div class="body-publication">
                    <div class="calendar-left mt-2">
                        @include('components.calendarLeftSide')
                    </div>

                    <div class="event-center mt-2 ">
                    @foreach($filtersDate as $filterDate)
                        @foreach ($messages as $message)
                            @if($filterDate->id_reference_publication == $message->Id_Reference_Publication)
                                @php
                                    $countCommentPC++;
                                @endphp
                            @endif
                        @endforeach
                        @foreach ($likes as $like)
                            @if($filterDate->id_reference_publication == $like->Id_Reference_Publication)
                                @php
                                    $countLikePC++;
                                @endphp
                            @endif
                        @endforeach

                        <a href="/details/{{$filterDate->id_reference_publication}}" class="text-decoration-none text-black">
                            <div class="eventCard-pc d-flex flex-column align-items-center p-3 mb-3">
                                <h3 class="titleEvent-pc text-center">{{$filterDate->title}}</h3>


                                <div class="infoEvent-pc d-flex justify-content-between w-100">
                                    <div class="w-25 text-center">
                                        @if($filterDate->image == NULL)
                                            <img class="w-100" src="/images/Show_Foto.png"  alt="...">
                                        @else
                                            <img class="w-100" src="/Publication_Img/post/{{$filterDate->image}}"  alt="...">
                                        @endif
                                    </div>
                                    <div class="detailsEvent-card ps-3 w-25 m-auto">
                                        <i class="bi bi-calendar fw-bold fs-5"> {{$filterDate->date}}</i><br>
                                        <i class="bi bi-clock-fill fw-bold fs-5"> {{$filterDate->hour}}</i><br>
                                        <i class="bi bi-geo-fill fw-bold fs-5"> {{$filterDate->place}}</i><br>
                                        <i class="bi bi-geo-fill fw-bold fs-5"> Enlace de Pagina Web</i>
                                    </div>
                                    <div class="w-50 d-flex justify-content-center">
                                        <textarea class="textarea-content w-100 h-100 fs-5" disabled>{{$filterDate->content}}</textarea>
                                    </div>
                                </div>

                                <div class="w-100 d-flex justify-content-between align-items-center mt-2">
                                    <div class="header-card w-25 text-start fs-4 mt-2 ms-5">
                                        <i class="bi bi-heart-fill text-danger me-1"></i>
                                            {{$countLikePC}}
                                        <i class="bi bi-chat-left-text ms-5 me-1"></i>
                                            {{$countCommentPC}}
                                            @php
                                              $countCommentPC = 0;
                                              $countLikePC = 0;
                                            @endphp
                                    </div>
                                    <small class="text-body-secondary fs-4 ">
                                        <i>{{$filterDate->created_at->diffForHumans()}}</i>
                                    </small>
                                </div>
                            </div>
                        </a>
                    @endforeach
        
                    @include('components.sectionFooter')
                    <ul class="pagination m-auto mb-5">
                      <li class="page-item">
                        <a class="page-link text-black" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link text-black" href="#">1</a></li>
                      <li class="page-item"><a class="page-link text-black " href="#">2</a></li>
                      <li class="page-item"><a class="page-link text-black " href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link text-black" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul> 
                </div>

                <div class="filter-right">
                    @include('components.FilterRight-PC')
                </div>
                @csrf 
                @method('get')
            </form>
        </div>
    @endif
    </div>
</div>