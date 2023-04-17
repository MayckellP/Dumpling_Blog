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
            <button class="btn btn-success p-1 w-25 align-self-end" type="submit">SEND</button>
            <button>
              <div class="svg-wrapper-1">
                <div class="svg-wrapper">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                  </svg>
                </div>
              </div>
              <span>Send</span>
            </button> 
        </form>
    @endguest
</div>
