<x-app-layout>

        <style>
            .cont-home{
                height:85vh;
                display:flex;
                flex-direction:column;
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
                margin:auto;
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
              min-height:110%;
              min-width:100%;
              z-index: 1;
            }
            .logo-back{
                z-index: 2;
                margin-bottom:10rem;
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
        </style>

        
        <div class="cont-home">
            <video src="/images/background_mobile.mp4" 
                autoplay="true" 
                muted="true" 
                loop="true" 
                poster="https://carontestudio.com/img/contacto.jpg">
            </video>
            <img src="/images/signWithLogo.svg" alt="" class="logo-back w-50 m-auto">

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

        <section class="events-group">  
            <label class="switch mb-3">
              <input type="checkbox" id="event" onclick=" return selectEvent()">
              <span class="general_events">
              </span>
            </label>

            <label class="switch mb-3">
              <input type="checkbox" id="food" onclick=" return selectEvent()">
              <span class="foods">
              </span>
            </label>

            <label class="switch mb-3">
              <input type="checkbox" id="club" onclick=" return selectEvent()">
              <span class="clubs">
              </span>
            </label>

            <label class="switch mb-3">
              <input type="checkbox" id="blog" onclick=" return selectEvent()">
              <span class="blogs">
              </span>
            </label>
        </section>
    </div>
        
</x-app-layout>