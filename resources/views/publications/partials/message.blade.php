@php
    $countComment = 0;
@endphp
<div class="background mt-2 py-1 m-auto">
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

