<x-app-layout>
    <style>
        @import url("https://fonts.cdnfonts.com/css/sen?styles=34225");
        .cont-home{
            height:85vh;
            display:flex;
            flex-direction:column;
        }
        .cont-sections{
            display:flex;
            flex-direction:column;
            align-items:center;
            margin-bottom:2rem;
        }
        .events-group{
            width:14rem;
            margin:auto;
        }
        .switch {
         position: relative;
         display: inline-block;
         width: 100%;
         height: 3rem;
        }
        
        .switch input {
         display: none;
        }
        
        .general_events, .foods, .clubs, .blogs {
         position: absolute;
         cursor: pointer;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), inset -4px -4px 4px rgba(0, 0, 0, 0.25);
         -webkit-transition: .6s;
         transition: .6s;
         border-radius: 34px;
         z-index: 2;
        }
        .general_events{
            background-color: #0497C9;
        }
        .foods{
            background-color: #A5FFD6;
        }
        .clubs{
            background-color: #DBB1BC;
        }
        .blogs{
            background-color: #D3C4E3;
        }
        
        .general_events:before, .foods:before, .clubs:before, .blogs:before {
         position: absolute;
         content:"";
         height: 3rem;
         width: 3rem;
         left: 0;
         bottom: 0;
         -webkit-transition: .4s;
         transition: .4s;
         border-radius: 50%;
         box-shadow: 0px 0px 4px 2px rgba(0, 0, 0, 0.25);
         z-index: 2;
        }
        .general_events:before{
            background:url("/images/bxs-party.svg") white center no-repeat;
        }
        .foods:before{
            background:url("/images/bx-restaurant.svg") white center no-repeat;
        }
        .clubs:before{
            background:url("/images/bxs-drink.svg") white center no-repeat;
        }
        .blogs:before{
            background:url("/images/bxs-news.svg") white center no-repeat;
        }
        
        input:focus + .general_events, 
        input:focus + .foods,
        input:focus + .clubs,
        input:focus + .blogs {
         box-shadow: 0 0 1px #2196F3;
        }
        
        input:checked + .general_events:before,
        input:checked + .foods:before,
        input:checked + .clubs:before,
        input:checked + .blogs:before {
         -webkit-transform: translateX(26px);
         -ms-transform: translateX(26px);
         transform: translateX(11.5rem);
        }
        
        /*------ ADDED CSS ---------*/
        .general_events:after, .foods:after, .clubs:after, .blogs:after{
         color: black;
         display: block;
         position: absolute;
         transform: translate(0%,-50%);
         top: 50%;
         left: 28%;
         font-size: 15px;
         font-weight:bold;
         font-family: Verdana, sans-serif;
         z-index: 1;
        }
        .general_events:after{
            content: 'General Events';
        }
        .foods:after{
            content: 'Food & Drink';
        }
        .clubs:after{
            content: 'Clubs';
        }
        .blogs:after{
            content: 'Blogs';
        }
        input:checked + .general_events:after,
        input:checked + .foods:after,
        input:checked + .clubs:after,
        input:checked + .blogs:after{
         color:#3400A1;
         transform: translate(-50%,-50%);
         top: 50%;
         left: 50%;
         -webkit-transition: .2s;
         transition: .2s;
        }
        input:checked + .general_events:after {
         content: 'You Know!';
        }
        input:checked + .foods:after{
         content: 'Bon Apetit!';
        }
        input:checked + .clubs:after{
         content: 'Enjoy!';
        }
        input:checked + .blogs:after{
         content: "Let's go!";
        }
        
        /*--------- END --------*/
        .cont-calendarFilter{
            width:50%;
            margin-bottom:3rem;
            display:flex;
            justify-content:space-around;
            align-items:center;
            z-index: 2;
        }
        #cont-calendar{
            display:flex;
            flex-direction:column;
            align-items:center;         
        }
        #cont-calendar img {
            width:35%;
        }
        .back-calendar{
            background-color:#D9D9D9;
            border-radius:10%;
            width: 5rem;
            height:5rem;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            padding:10px 0px 6px 0px;
        }
        .form-start{
            width:65%;
            height:65%;
            background: url('/images/calendar.svg') no-repeat ;
            background-size:100% 100%;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .form-start p{
            font-size:20px;
            margin-top: 2rem;
            color:white;
            font-weight:bold;
        } 
        .month-name {
            height:35%;
            font-size:20px;
            margin:0;
        }
        #link-calendar{
            width: 45%;
            background-color:#0497C9;
            color:white;
            text-decoration:none;
            font-weight:bold;
            text-align:center;
            border-radius:10px;
            transition:1s;  
        }
        .cont-home video {
          position: fixed;
          right: 0;
          bottom: 0;
          min-height:90%;
          min-width:100%;
          z-index: 1;
        }
        .logo-back{
            z-index: 2;
            margin-bottom:10rem;
            width:50%;
        }
        #all_ok{
            display:none;
        }
        .hidden{
            animation: moveBot 0.5s ease 0s 1 normal forwards;
        }
        @keyframes moveBot {
        	0% {
        		opacity: 1;
        		transform: translateY(0);
        	}
        
        	100% {
        		opacity: 0;
        		transform: translateY(25px);
        	}
        }
        .visible{
            animation: moveTop 0.5s ease 0s 1 normal forwards;
        }
        @keyframes moveTop {
        	0% {
        		opacity: 0;
        		transform: translateY(-25px);
        	}
        
        	100% {
        		opacity: 1;
        		transform: translateY(0);
        	}
        }
        .events-group-desktop{
            display:none;
        }
        @media (min-width: 800px){
            .cont-sections{
                display:flex;
                flex-direction:row-reverse;
                align-items:center;
            }
        }
        @media (min-width: 1000px) {
            
            .logo-back{
                width:45%;
                margin-bottom: 5rem;
            }
            .cont-calendarFilter{
                display:none;
            }
            .events-group{
                display:none;
            }
            .events-group-desktop{
                display:block;
                display:flex;
                justify-content:space-around;
                margin:auto;
                width:90%;
                z-index: 2;
            }
            .g_event{
                height:42vh;
                width:22%;
                margin:auto;
                padding:0; 
                margin:0;
                background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/g_event.png') center no-repeat;
                background-size:100%;
                border-radius:20px;
                filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.5));
            }
            .shadow{
                width:100%;
                height:100%;
                background-color:black;
                opacity:50%;
                border-radius:20px;
                
            }
            .card-body{
                text-align:center;
                padding:3rem 1rem;
                height:100%;
            }
            .card-body {
                color:white;
                font-weight:bold;
                font-size:35px;
                
            }
            
            .food_event{
                height:42vh;
                width:22%;
                margin:auto;
                padding:0; 
                margin:0;
                background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/food_event.png') center no-repeat;
                background-size:100%;
                border-radius:20px;
                filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.5));
                
            }

            .club_event{
                height:42vh;
                width:22%;
                margin:auto;
                padding:0; 
                margin:0;
                background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/club_event.png') center no-repeat;
                background-size:100%;
                border-radius:20px;
                filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.5));
            }

            .blog_event{
                height:42vh;
                width:22%;
                margin:auto;
                padding:0; 
                margin:0;
                background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/blog_event.png') center no-repeat;
                background-size:100%;
                border-radius:20px;
                filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.5));
            }

            /* EVENTS : HOVER */
            .g_event:hover {
                background: linear-gradient(rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.0)), url('/images/g_event.png') center no-repeat;
                background-size:100%;
                border-radius:20px;
                color:black;
            }
            .food_event:hover {
                background: linear-gradient(rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.0)), url('/images/food_event.png') center no-repeat;
                background-size:100%;
                border-radius:20px;
                color:black;
            }
            .club_event:hover {
                background: linear-gradient(rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.0)), url('/images/club_event.png') center no-repeat;
                background-size:100%;
                border-radius:20px;
                color:black;
            }
            .blog_event:hover {
                background: linear-gradient(rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.0)), url('/images/blog_event.png') center no-repeat;
                background-size:100%;
                border-radius:20px;
                color:black;
            }
            .card-body:hover{
                color:black
            }
        }
        @media (min-width: 1200px) {
            .logo-back{
                width:45%;
            }
            .events-group-desktop{
                width:80%;
            }
            .g_event, .food_event, .club_event, .blog_event{
                height:45vh;
            }
        }
        @media (min-width: 1500px) {
            .logo-back{
                width:30%;
            }
            .events-group-desktop{
                width:85%;
                margin-bottom:2rem;
            }
            .g_event, .food_event, .club_event, .blog_event{
                height:57vh;
                width:20%;
            }
        }
        @media (min-width: 1900px) {
            .logo-back{
                width:20%;
            }
            .events-group-desktop{
                width:65%;
                margin-bottom:1rem;
            }
            .g_event, .food_event, .club_event, .blog_event{
                height:60vh;
                width:20%;
            }
            .card-body{
                font-size:50px;
            }
        }

    </style>

        
    <div class="cont-home">

        <!-- VIDEO BACKGROUND  -->
        <video src="/images/background_mobile.mp4" 
            autoplay="true" 
            muted="true" 
            loop="true" 
            poster="https://carontestudio.com/img/contacto.jpg">
        </video>

        <!-- MAIN LOGO -->
        <img src="/images/signWithLogo.svg" alt="" class="logo-back m-auto">

        <!-- CALENDAR  -->
        <div class="cont-sections">
            <div class="cont-calendarFilter">
                <div class="cont-calendar" id="cont-calendar">
                    <img src="/images/Up.svg" alt="" class="mb-2">
                    <div class="back-calendar">
                        <form action="" class="form-start">
                            <p>01</p>
                        </form>
                        <p class="month-name">January</p>
                    </div>
                    <img src="/images/Down.svg" alt="" class="mt-3">
                </div>
                <a href="" class="btn-day" id="link-calendar">
                    DAYS
                </a>
                <img src="/images/Calendar_2.png" alt="" id="all_ok">
            </div>

            <!-- EVENTS SECTION MOBILE -->
            <section class="events-group">  
                <label class="switch mb-3">
                    <a href="/General_Events" id="eventLink" class="d-none"></a>
                    <input type="checkbox" id="event" onclick=" return selectEvent()">
                    <span class="general_events">
                  </span>
                </label>

                <label class="switch mb-3">
                    <a href="/Food_Events" id="foodLink" class="d-none"></a>
                  <input type="checkbox" id="food" onclick=" return selectEvent()">
                  <span class="foods">
                  </span>
                </label>

                <label class="switch mb-3">
                    <a href="/Pub_Events" id="clubLink" class="d-none"></a>
                  <input type="checkbox" id="club" onclick=" return selectEvent()">
                  <span class="clubs">
                  </span>
                </label>

                <label class="switch mb-3">
                    <a href="/Smalls_Events" id="blogLink" class="d-none"></a>
                  <input type="checkbox" id="blog" onclick=" return selectEvent()">
                  <span class="blogs">
                  </span>
                </label>
            </section>
        </div>

        <!-- EVENTS SECTION DESKTOP -->
        <section class="events-group-desktop">
            <div class="g_event">
                <a href="/General_Events" class="h-100 text-decoration-none">
                    <div class="card-body">
                        General Events
                    </div>
                </a>
            </div>

            <div class="food_event">
                <a href="/Food_Events" class="h-100 text-decoration-none">
                    <div class="card-body">
                        Food & Drink
                    </div>
                </a>
            </div>

            <div class="club_event">
                <a href="/Pub_Events" class="h-100 text-decoration-none">
                    <div class="card-body">
                       Clubs
                    </div>
                </a>
            </div>

            <div class="blog_event">
                <a href="/Smalls_Events" class="h-100 text-decoration-none">
                    <div class="card-body">
                        Blogs
                    </div>
                </a>
            </div>
        </section>
    </div>
</x-app-layout>