<style>
    .cont-filter{
        margin:1rem 0rem;
        width:100%;
        background-color:#F8F5F5;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }
</style>

<div class="cont-filter">
    <div class="date-row pb-2">
        <div class="cont-dateFilter d-flex w-100 justify-content-around mb-2">
            @include('components.date')
            @include('components.allMonth')
        </div>
        <div class="cont-searchFilter d-flex w-100 justify-content-around mb-2">
        @include('components.category')
        @include('components.mostPopular')
        </div>
        @include('components.search')
    </div>
</div>
