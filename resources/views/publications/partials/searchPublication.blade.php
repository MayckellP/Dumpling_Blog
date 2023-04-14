<style>
    .cont-filter{
        padding-top:1rem;
        width:100%;
        background-color:#F8F5F5;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }
    
    .accordion {
        width: 99%;
        max-width: 1000px;
        margin:auto;
    }
    .accordion-item {
        background-color: #fff;
        color: #111;
        margin-bottom:0.5rem;
        border-radius: 0.5rem;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.25);
    }
    .accordion-item-header {
        padding: 0.5rem 3rem 0.5rem 1rem;
        min-height: 3.5rem;
        line-height: 1.25rem;
        font-weight: bold;
        display: flex;
        align-items: center;
        position: relative;
        cursor: pointer;
    }
    .accordion-item-header::after {
        content: "\002B";
        font-size: 2rem;
        position: absolute;
        right: 1rem;
    }
    .accordion-item-header.active::after {
        content: "\2212";
    }
    .accordion-item-body {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }
    .accordion-item-body-content {
        line-height: 1.5rem;
        border-top: 1px solid;
        border-image: linear-gradient(to right, transparent, #34495e, transparent) 1;
    }
</style>

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