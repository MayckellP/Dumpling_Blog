<div class="cont-card w-100 mb-3">
                        <div class="cont-left">
                            <h3 class="fs-5 text-center m-auto" style="height:2rem">
                                {{$publicationsDetail->title}}
                            </h3>
                            <div class="imgEvent w-100">
                                @if($publicationsDetail->image == NULL)
                                    <img class="w-100" style="height:9em; border-radius: 10px 0px 00px 10px;" src="/images/Show_Foto.png"  alt="...">
                                @else
                                    <img class="w-100" style="height:9em; border-radius: 10px 0px 00px 10px;" src="/Publication_Img/post/{{$publicationsDetail->image}}"  alt="...">
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
                                    @if($publication->id === $publicationsDetail->id_reference_publication )
                                        <h3 class="user-card fs-4">{{$publication->username}}</h3>
                                    @endif
                                @endforeach
                                <i class="bi bi-calendar text-white"> {{$publicationsDetail->date}}</i><br>
                                <i class="bi bi-clock-fill text-white"> {{$publicationsDetail->hour}}</i><br>
                            </div>
                            <div class="infoCard w-100 text-center mt-1">
                                <a href="/details/{{$publicationsDetail->id}}" class="btn-more">
                                    More information  
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                            <div class="created mt-1 text-end me-2">
                                <small class="text-body-secondary">
                                    <i>{{$publicationsDetail->created_at->diffForHumans()}}</i>
                                </small>
                            </div>
                        </div>
                    </div>