<a href="/details/{{$publicationsDetail->id}}" class="text-decoration-none text-black">
    <div class="eventCard-pc d-flex flex-column align-items-center p-3 mb-3">
        <h3 class="titleEvent-pc text-center">{{$publicationsDetail->title}}</h3>


        <div class="infoEvent-pc d-flex justify-content-between w-100">
            <div class="w-25 text-center">
                @if($publicationsDetail->image == NULL)
                    <img class="w-100" src="/images/Show_Foto.png"  alt="...">
                @else
                    <img class="w-100" src="/Publication_Img/post/{{$publicationsDetail->image}}"  alt="...">
                @endif
            </div>
            <div class="detailsEvent-card ps-3 w-25 m-auto">
                <i class="bi bi-calendar fw-bold fs-5"> {{$publicationsDetail->date}}</i><br>
                <i class="bi bi-clock-fill fw-bold fs-5"> {{$publicationsDetail->hour}}</i><br>
                <i class="bi bi-geo-fill fw-bold fs-5"> {{$publicationsDetail->place}}</i><br>
                <i class="bi bi-geo-fill fw-bold fs-5"> Enlace de Pagina Web</i>
            </div>
            <div class="w-50 d-flex justify-content-center">
                <textarea class="textarea-content w-100 h-100 fs-5" disabled>{{$publicationsDetail->content}}</textarea>
            </div>
        </div>

        <div class="w-100 d-flex justify-content-between align-items-center mt-2">
            <div class="header-card w-25 text-start fs-4 mt-2 ms-5">
                <i class="bi bi-heart-fill text-danger me-1"></i>
                    @if(isset($countLikePC))
                        {{$countLikePC}}
                    @endif
                <i class="bi bi-chat-left-text ms-5 me-1"></i>
                    @if(isset($countCommentPC))
                        {{$countCommentPC}}
                    @endif
                    @php
                      $countCommentPC = 0;
                      $countLikePC = 0;
                    @endphp
            </div>
            <small class="text-body-secondary fs-4 ">
                <i>{{$publicationsDetail->created_at->diffForHumans()}}</i>
            </small>
        </div>
    </div>
</a>