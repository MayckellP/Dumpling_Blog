<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('YOUR EVENTS') }}
        </h2>
    </x-slot>
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">


                <!-- CARD (SHOW --------------------- EVENTS GROUP) -->
                <div class="row row-cols-1 row-cols-md-1 g-4">
                    @foreach($publications as $publication)
                        @foreach($publicationsDetails as $publicationsDetail)
                            @if($publication->Id_Reference_User === Auth::user()->id )
                                @if($publicationsDetail->id_reference_publication === $publication->id)
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

                                        <div class="cont-card d-flex w-100 mb-3">
                                            <div class="cont-left">
                                                <h3 class="fs-5 text-center m-auto" style="height:2rem">
                                                    {{$publicationsDetail->title}}
                                                </h3>
                                                <div class="imgEvent w-100">
                                                    @if($publicationsDetail == NULL)
                                                        <img class="w-100" style="height:2em; border-radius: 10px 0px 00px 10px;" src="/images/Show_Foto.png"  alt="...">
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
                                @endif
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
            @auth
                <a href="/create">
                    <button type="button" class="btn btn-success m-3">Create Event</button>
                </a>
            @endauth
        </div>
    </div>
</div>
</x-app-layout>