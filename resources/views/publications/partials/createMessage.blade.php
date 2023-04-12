<style>
    .cont-message{
        background-color:#D9D9D9;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        z-index: 2;
    }
    .input-message{
        width:100%;
        height:2rem;
        font-size:15px;
        border-radius:20px;
        border:none;
        box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.25);
    }
</style>
<div class="cont-message p-2 w-100">
    @auth
        <form action="/create_message/{{$publicationsDetails->id_reference_publication}}" method="post" class="d-flex w-100 align-items-center" >     
            <div class="cont-imgProfile">
                <img src="/DB_Img/post/{{Auth::user()->foto}}" alt="">
            </div>
            <div class="message ms-3" style="width:60%;">
                <input class="invisible d-none" type="text" name="username" id="username" placeholder="Username" value="{{Auth::user()->name}}">
                <h5>{{Auth::user()->name}}</h5>
                <input class="input-message" type="text" name="content" id="content" placeholder="Write what do you think...">
                <input  type="hidden" name="Id_Reference_Publication" id="Id_Reference_Publication" value="{{$publicationsDetails->id_reference_publication}}">
            </div>
            @csrf 
            <button class="btn btn-success p-1 w-25 align-self-end" type="submit">SEND</button> 
        </form>
    @endauth
</div>







<!-- <div class="py-3">
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
</div> -->