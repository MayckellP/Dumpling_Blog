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
                <input type="text" class="form-control d-none" id="id_reference_user" name="id_reference_user" value="{{Auth::user()->id}}">
            </div>
            @csrf 
            <button class="btn-message" type="submit"> 
                Send
                <i class="bi bi-caret-right-fill"></i>
            </button>
        </form>
    @endauth

    @guest
        <form action="/create_message/{{$publicationsDetails->id_reference_publication}}" method="post" class="d-flex w-100 align-items-center" >     
            <div class="cont-imgProfile">
                <img src="/images/DefaultFoto.jpg" alt="">
            </div>
            <div class="message ms-3" style="width:60%;">
                <input class="invisible d-none" type="text" name="username" id="username" placeholder="Username" value="Anonymus">
                <h5>Anonymus</h5>
                <input class="input-message" type="text" name="content" id="content" placeholder="Write what do you think...">
                <input  type="hidden" name="Id_Reference_Publication" id="Id_Reference_Publication" value="{{$publicationsDetails->id_reference_publication}}">
                <input type="text" class="form-control d-none" id="id_reference_user" name="id_reference_user">
            </div>
            @csrf 
            <button class="btn-message" type="submit"> 
                Send
                <i class="bi bi-caret-right-fill"></i>
            </button>
        </form>
    @endguest
</div>
