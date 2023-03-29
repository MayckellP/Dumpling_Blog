@php
    $countComment = 0;
@endphp
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <div class="cont-comments py-4">
                <ul>
                    @foreach ($messages as $message)
                        @if($publicationsDetails->id_reference_publication == $message->Id_Reference_Publication)
                        @php
                            $countComment++;
                        @endphp
                            <li>
                                <div class="list-comment">
                                    <i class="bi bi-person-badge"></i>
                                    <div class="body-comment">
                                        <div class="cont-name-hour">
                                            <h4>{{$message->username}}</h4>
                                            <p><i>{{$message->created_at->diffForHumans()}}.</i></p>
                                        </div>
                                        <p class="comment-text py-3">
                                        {{$message->content}}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    </div>
