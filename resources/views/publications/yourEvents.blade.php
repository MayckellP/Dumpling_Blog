@php
  $countComment = 0;
  $countLike = 0;
  $validationLike = 0;
@endphp


<div class="eventPage">
    @include('publications.partials.searchPublication')

    <div class="px-2">
    @foreach($publications as $publication)
        @foreach($publicationsDetails as $publicationsDetail)
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
            @if($publication->Id_Reference_User === Auth::user()->id )
                @if($publicationsDetail->id_reference_publication === $publication->id)
                    @if($publicationsDetail->category !== "Smalls_Events")
                        @include('components.cardEvents')
                    @endif
                    @if($publicationsDetail->category === "Smalls_Events")
                            @include('components.cardBlog')
                        @endif
                @endif
            @endif
        @endforeach
    @endforeach
    </div>
</div>

@auth
    <a href="/create" class="toCreate">
        <img src="images/Button_NewEvent.png" alt="">
    </a>
@endauth

 