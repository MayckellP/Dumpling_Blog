<div class="filter-pc w-75">
    <div class="search-pc w-100 mb-5">
        @include('components.search')
    </div>
    <div class="allMonth-pc w-100 mb-3">
        <div class="cont-allMonth">
            <label class="container-month">
              <input type="checkbox" id="checkMonthPC" onclick="changeDate()" name="checkMonth">
                All Month
              <div class="checkmark"></div>
            </label>
        </div>
    </div>
    <div class="mostPopular-pc w-100 mb-3">

        <div class="cont-rating">
            <input type="checkbox" id="mostPopular" name="mostPopular" value="favorite-button" class="d-none">
            <label for="mostPopular" class="container">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
              <div class="action">
                <span class="option-1">Rating</span>
                <span class="option-2">Most Popular</span>
              </div>
            </label>
        </div>
    </div>
    <div class="filter-btn-pc">
        <input type="hidden" value="{{$_SESSION['event']}}" name="url"> 
        <button type="submit"> Show search</button>
    </div>
</div>