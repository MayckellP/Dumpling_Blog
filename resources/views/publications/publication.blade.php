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
        @auth
            @include('components.buttonCreateEvent')
        @endauth
    </div>

    <!-- DESIGN DESKTOP VERSION -->
    <div class="logo-event w-100">
        <img src="images/signWithLogo.svg" alt="" class="w-25 m-auto">
    </div>

    <form action="/filter" method="post">
        <div class="body-publication">
            <div class="calendar-left mt-2">
                @include('components.calendarLeftSide')
            </div>

            <div class="event-center mt-2 ">
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

                            @include('components.cardEvents-PC')

                        @elseif($publicationsDetail->category === "Smalls_Events")

                            @include('components.cardBlog')

                        @endif
                    @endif
                @endforeach

                @include('components.sectionFooter')
            </div>

            <div class="filter-right d-flex justify-content-center">
                @include('components.FilterRight-PC')
                @csrf 
                @method('get')
            </div>
        </div>
    </form>
</div>










