@php
    $countComment = 0;
@endphp
<style>
    .background{
        background-color:#EAEAEA;
        width:96%;
    }
    .bg-message{
        background-color:#D9D9D9;
    }
</style>
<div class="background mt-2 py-1 m-auto">
    @foreach ($messages as $message)
        @if($publicationsDetails->id_reference_publication == $message->Id_Reference_Publication)
            @php
                $countComment++;
            @endphp
            <div class="d-flex w-90 align-items-start mt-4 px-2" >     
                <div class="cont-imgProfile">
                    <img src="/DB_Img/post/{{Auth::user()->foto}}" alt="">
                </div>
                <div class="ms-2 w-100">
                    <div class="bg-message rounded-3 pt-2" style="width:95%;">
                        <h5 class="ms-2 mb-0 fw-bold">{{Auth::user()->name}}</h5>
                        <input class="bg-message border-none ps-2 fs-6 w-100" disabled type="text" value="{{$message->content}}"><br>
                    </div>
                    <i style="font-size:12px;">{{$message->created_at->diffForHumans()}}</i>
                </div>
            </div>
        @endif
    @endforeach
</div>

