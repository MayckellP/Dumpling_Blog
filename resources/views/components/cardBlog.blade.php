<div class="cont-blog w-100 mb-3">
    <div class="title-blog">
        <h3 class="fs-5 text-center m-auto">
            {{$publicationsDetail->title}}
        </h3>
    </div>
    <div class="body-blog">
        <div class="blog-left">
            <div class="imgBlog">
                @if($publicationsDetail->image == NULL)
                    <img src="/images/Show_Foto.png"  alt="...">
                @else
                    <img src="/Publication_Img/post/{{$publicationsDetail->image}}"  alt="...">
                @endif
                <div class="likes-comment">
                    <i class="bi bi-heart-fill text-danger "></i>
                        {{$countLike}}
                    <i class="bi bi-chat-left-dots-fill ms-3 "></i>
                        {{$countComment}}
                        @php
                          $countComment = 0;
                          $countLike = 0;
                        @endphp
                </div>
            </div>
        </div>
        <div class="blog-right">
            <div class="content-blog ps-2">
                @foreach($publications as $publication)
                    @if($publication->id === $publicationsDetail->id_reference_publication )
                        <h3 class="username-blog fs-4">{{$publication->username}}</h3>
                    @endif
                @endforeach
                <textarea class="content-blog ps-0" cols="22" rows="3" disabled>{{$publicationsDetail->content}}</textarea><br>
            </div>
            <div class="infoCard w-100 text-center mt-1 mb-2">
                <a href="/details/{{$publicationsDetail->id}}" class="btn-more py-2">
                    More information  
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="mt-1 text-end me-2">
                <small class="text-body-secondary">
                    <i>{{$publicationsDetail->created_at->diffForHumans()}}</i>
                </small>
            </div>
        </div>
    </div>
</div>