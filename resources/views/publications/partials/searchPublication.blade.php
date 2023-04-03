
<div class="py-2">
    <div class="w-100">
        <div class="p-1">
            <div class="cont-dateFilter d-flex w-100 justify-content-around mb-2">
                @include('components.date')
                @include('components.allMonth')
            </div>
            <div class="cont-searchFilter d-flex w-100 justify-content-around">
            @include('components.search')
            @include('components.mostPopular')
            </div>
        </div>
    </div>
</div>