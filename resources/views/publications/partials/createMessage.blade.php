<div class="py-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                @auth
                    <form action="/create_message/{{$publicationsDetails->id_reference_publication}}" method="post" >
                        <i class="bi bi-person-badge"></i>
                        <div class="comment">
                            <input class="invisible d-none" type="text" name="username" id="username" placeholder="Username" value="{{Auth::user()->name}}">
                            <h2>{{Auth::user()->name}}</h2>
                            <input class="w-75" type="text" name="content" id="content" placeholder="Write what do you think...">
                            <input  type="hidden" name="Id_Reference_Publication" id="Id_Reference_Publication" value="{{$publicationsDetails->id_reference_publication}}">
                        </div>
                        @csrf
                        <button class="btn btn-success my-2 w-25" type="submit">SENDEN</button>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</div>