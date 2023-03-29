<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">


                <!-- CARD (SHOW --------------------- EVENTS GROUP) -->
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach($publicationsDetails as $publicationsDetail)
                        @if($publicationsDetail->category === Request::path() )
                            <a href="/details/{{$publicationsDetail->id}}" class="text-decoration-none list-unstyled text-black">
                                <div class="col">
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">{{$publicationsDetail->title}}</h5>
                                          <p class="card-text">
                                              {{$publicationsDetail->title}}<br>
                                              {{$publicationsDetail->category}}
                                          </p>
                                        </div>
                                        <div class="card-footer">
                                          <small class="text-body-secondary">{{$publicationsDetail->created_at->diffForHumans()}}</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endif
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