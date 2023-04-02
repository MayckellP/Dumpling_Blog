<x-app-layout>
    <style>
        .cont-general{
            height:91vh;
            display: flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
        video {
          position: fixed;
          right: 0;
          bottom: 0;
          min-width: 105%;
          min-height: 100%;
          transform: translateX(calc((100% - 100vw) / 2));
          z-index: 0;
        }
        .cont-img{
            width:30%;
            margin-bottom:25%;
            z-index: 2;
        }
        .cont-img img{
            width:100%;
            opacity:50%;
        }
        .events{
            position: absolute;
            bottom:0px;
            width:75%;
        }
        .card{
            height:35vh;
            text-align:center;
            background:none;
            width:23%;
            margin:10px;
            padding:0;

        }
        .cont-gen{
            height:100%;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/clubSlide.png') no-repeat ;
            background-size:cover;
        }
        .cont-food{
            height:100%;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/foodslide.png') no-repeat ;
            background-size:cover;
        }
        .cont-pub{
            height:100%;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/foodslide.png') no-repeat ;
            background-size:cover;
        }
        .cont-small{
            height:100%;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/smallEventSlide.png') no-repeat center;
            background-size:cover;
        }
    </style>
    <div class="cont-general">
        <video src="/images/background.mp4" 
            autoplay="true" 
            muted="true" 
            loop="true" 
            poster="https://carontestudio.com/img/contacto.jpg">
        </video>
        <div class="cont-img">
            <img src="/images/signWithLogo.svg" alt="">
        </div>
        <section class="events">
            <div class="row">
                <div class="card col-sm-3 mb-3 mb-sm-0">
                    <a href="/General_Events" class="h-100 text-decoration-none">
                        <div class="cont-gen">
                            <div class="card-body">
                                <h5 class="card-title text-white fw-bold fs-3">GENERAL EVENTS</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="card col-sm-3 mb-3 mb-sm-0">
                    <a href="Food_Events" class="h-100 text-decoration-none">
                        <div class="cont-food">
                            <div class="card-body">
                                <h5 class="card-title text-white fw-bold fs-3">EAT & DRINK</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="card col-sm-3 mb-3 mb-sm-0">
                    <a href="Pub_Events" class="h-100 text-decoration-none">
                        <div class="cont-pub">
                            <div class="card-body">
                                <h5 class="card-title text-white fw-bold fs-3">CLUBs</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="card col-sm-3 mb-3 mb-sm-0">
                    <a href="Smalls_Events" class="h-100 text-decoration-none">
                        <div class="cont-small">
                            <div class="card-body">
                                <h5 class="card-title text-white fw-bold fs-3">NEWS</h5>
                            </div>
                        </div>
                    </a>
                </div> 
            </div>
        </section>
    </div>
</x-app-layout>