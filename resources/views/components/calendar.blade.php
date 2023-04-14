<div class="cont-calendarFilter">
    <div class="cont-calendar" id="cont-calendar" >
    	<div class="back-calendar">
    		<button id="btn-month">
    			<img src='/images/calendar.svg' alt="Calendar"> 
    		</button> 
            <form action="/events" method="post" class="form-start">
            	<input type="date" id="month" name="month" onchange="getObject(this) , this.form.submit();" hidden />
            @csrf
            </form>
            <img src="/images/Calendar_2.png" alt="" id="all_ok">
    	</div>
    </div>
</div>