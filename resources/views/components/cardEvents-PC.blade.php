<a href="/details/{{$publicationsDetail->id}}" class="text-decoration-none text-black">
    <div class="eventCard-pc d-flex flex-column align-items-center p-3 mb-3">
        <h3 class="titleEvent-pc text-center">{{$publicationsDetail->title}}</h3>
        <div class="infoEvent-pc d-flex justify-content-between">
            <div class="w-25 text-center">
                @if($publicationsDetail->image == NULL)
                    <img class="w-100" src="/images/Show_Foto.png"  alt="...">
                @else
                    <img class="w-100" src="/Publication_Img/post/{{$publicationsDetail->image}}"  alt="...">
                @endif
            </div>
            <div class="detailsEvent-card ps-3 w-25 bg-white">
                <i class="bi bi-calendar fw-bold"> {{$publicationsDetail->date}}</i><br>
                <i class="bi bi-clock-fill fw-bold"> {{$publicationsDetail->hour}}</i><br>
                <i class="bi bi-geo-fill fw-bold"> {{$publicationsDetail->place}}</i><br>
                <i class="bi bi-geo-fill fw-bold"> Enlace de Pagina Web</i>
            </div>
            <div class="w-50 d-flex justify-content-center">
                <textarea class="textarea-content w-100 h-100 " disabled>{{$publicationsDetail->content}}</textarea>
            </div>
        </div>
    </div>
</a>