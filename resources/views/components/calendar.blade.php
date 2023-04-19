<div class="cont-calendarFilter">
    <div class="back-calendar" id="back-calendar">
    	<button id="btn-month">
    		<img src='/images/calendar.svg' alt="Calendar">
            <form action="/events" method="post" class="form-start">
        	    <input type="date" id="month" name="month" onchange="getObjects(this) , this.form.submit();" hidden />
                @csrf
            </form> 
    	</button>   
    </div>
    <img src="/images/Calendar_2.png" alt="" id="all_ok">
</div>
