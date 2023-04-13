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