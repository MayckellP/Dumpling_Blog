<div class="accordion">
    <div class="accordion-item">
            <div class="accordion-item-header">
                Filter
            </div>
        <div class="accordion-item-body">
            <div class="accordion-item-body-content">          
                <div class="cont-filter">
                    <div class="date-row pb-2">
                        <form >
                            <div class="cont-dateFilter d-flex w-100 justify-content-around mb-2">
                                @include('components.date')
                                @include('components.allMonth')
                            </div>
                            <div class="cont-searchFilter d-flex w-100 justify-content-around mb-2">
                                @include('components.search')
                                @include('components.mostPopular')
                            </div>
                            <div class="d-flex w-100 justify-content-end pe-3">
                                @include('components.buttonSendFIlter')
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>