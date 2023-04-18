@php
  $countComment = 0;
  $countLike = 0;
  $validationLike = 0;
  $_SESSION['event'] =  Request::path();
@endphp


<div class="eventPage w-100">

    <!-- DESIGN MOBILE VERSION -->
    @include('publications.partials.searchPublication')

    <div class="px-2">
        @foreach($publicationsDetails as $publicationsDetail)
            @if($publicationsDetail->category === Request::path())
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
                @if($publicationsDetail->category !== "Smalls_Events")

                    @include('components.cardEvents')

                @elseif($publicationsDetail->category === "Smalls_Events")

                    @include('components.cardBlog')

                @endif
            @endif
        @endforeach
    </div>
            
    @auth
        <a href="/create" class="toCreate">
            <img src="images/Button_NewEvent.png" alt="">
        </a>
    @endauth

    <!-- DESIGN DESKTOP VERSION -->
    <div class="calendar-left mt-2">

    </div>
    <div class="event-center mt-2">
        <div class="logo-event w-50 m-auto mb-5">
            <img src="images/signWithLogo.svg" alt="" class="w-75">
        </div>
        <div class="eventCard-pc d-flex flex-column align-items-center p-3">
            <h3 class="titleEvent-pc text-center">IBIZA NIGHT @ HIVE ZÜRICH</h3>
            <div class="infoEvent-pc d-flex ">
                <img src="images/events.jpg" alt="" class="w-25">
                <div class="detailsEvent-card ps-3 w-25">
                    <i class="bi bi-calendar fw-bold"> 12-05-2023</i><br>
                    <i class="bi bi-clock-fill fw-bold"> 21:00</i><br>
                    <i class="bi bi-geo-fill fw-bold"> Zürich</i><br>
                    <i class="bi bi-geo-fill fw-bold"> Enlace de Pagina Web</i>
                </div>
                <textarea id="" cols="25" rows="5" class="textarea-content w-50">Event Description Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</textarea>
            </div>
        </div>
    </div>
    <div class="filter-right mt-2 d-flex justify-content-center">
        <div class="filter-pc w-75 d-flex flex-column justify-content-center">
            <div class="allMonth-pc w-100 mb-3">
                @include('components.allMonth')
            </div>
            <div class="mostPopular-pc w-100 mb-3 ">
                @include('components.mostPopular')
            </div>
            <div class="search-pc w-100 mb-3">
                @include('components.search')
            </div>
        </div>
    </div>
    <div class="buttons-footer">
        <a href=""></a><buton class="" id=""></buton>
        <a href=""></a><buton class="" id=""></buton>
        <a href=""></a><buton class="" id=""></buton>
    </div>
</div>










