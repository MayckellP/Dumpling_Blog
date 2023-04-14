<x-app-layout>      
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

        <div class="cont-sections">

            <!-- CALENDAR  -->
            @include('components.calendar') 

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