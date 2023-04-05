<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('ABOUT US') }}
            </h2>
        </x-slot>

        <style>
            .cont-home{
                width:100%;
                background-color:black;
                position:absolute;
                bottom:0px;
                left:0px;
                display:flex;
                flex-direction:column-reverse;
                padding: 0.5rem;
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
                background-color: #ABDD85;
            }
            .foods{
                background-color: #EADE71;
            }
            .clubs{
                background-color: #F47373;
            }
            .blogs{
                background-color: #B9B6C0;
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
            
            input:checked + .general_events {
             background-color: #ABDD85;
            }
            input:checked + .foods {
             background-color: #EADE71;
            }
            input:checked + .clubs {
             background-color: #F47373;
            }
            input:checked + .blogs {
             background-color: #B9B6C0;
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
             transform: translateX(10rem);
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
            }
            .cont-calendar{
                display:flex;
                flex-direction:column;
                align-items:center;               
            }
            .cont-calendar img {
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
            .btn-day{
                width: 45%;
                background-color:#0497C9;
                color:white;
                text-decoration:none;
                font-weight:bold;
                text-align:center;
                border-radius:10px;
            }
        </style>
        <script>
            /* document.querySelectorAll("button").forEach((button) => {
  button.addEventListener("click", (event) => {
    const input = event.srcElement.previousElementSibling;
    try {
      input.showPicker();
    } catch (error) {
      window.alert(error);
    }
  });
}); */
const button = document.querySelector("button");
const dateInput = document.querySelector("input");
button.addEventListener("click", async () => {
  try {
    await dateInput.showPicker();
    // A date picker is shown.
  } catch (error) {
    // Use external library when this fails.
  }
});
            </script>


    <div class="cont-home">
        <section class="events-group">  
            <label class="switch mb-3">
              <input type="checkbox">
              <span class="general_events">
              </span>
            </label>

            <label class="switch mb-3">
              <input type="checkbox">
              <span class="foods">
              </span>
            </label>

            <label class="switch mb-3">
              <input type="checkbox">
              <span class="clubs">
              </span>
            </label>

            <label class="switch mb-3">
              <input type="checkbox">
              <span class="blogs">
              </span>
            </label>
        </section>
        <div class="cont-calendarFilter">
            <div class="cont-calendar">
                <img src="/images/Up.svg" alt="" class="mt-3">
                <div class="back-calendar">
                    <form action="" class="form-start">
                    <!-- <input type="month" hidden/> -->
  <!-- <button id="month">     -->
                    <p>01</p>
                    
                    <p class="month-name">January
         <!-- </button> -->
                    </p>
                    </form>
                </div>
                <img src="/images/Down.svg" alt="" class="mt-2">
            </div>
            <a href="" class="btn-day">
                DAYS
            </a>
        </div>
    </div>
        
</x-app-layout>