<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('HOME') }}
        </h2>
    </x-slot>
    <div class="w-75 m-auto my-3">
        <div class="row">
            <div class="col-sm-3 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">GENERAL EVENTS</h5>
                        <a href="/General_Events" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">RESTAURANTS EVENT</h5>
                        <a href="/Food_Events" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">PUBS EVENTS</h5>
                        <a href="/Pub_Events" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">SMALLS EVENTS</h5>
                        <a href="/Smalls_Events" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>
<style>

::-webkit-calendar-picker-indicator { 
    display: inline-block;
  position: relative;
  top: 25px;
    width: 100px;
    height: 100px;
    background: url('/images/cal_bg.svg');
    background-repeat: no-repeat;
}

    .datepicker-toggle {
  display: inline-block;
  position: relative;
  width: 75px;
  height: 75px;
}
.datepicker-toggle-button {
  position: absolute;
  z-index: 1;
  left: 0px;
  top: 0;
  width: 100%;
  height: 100%;
  /* background-image: url('/images/cal_bg.svg');
  background-repeat: no-repeat; */
  
}
    </style>

        <div class="row">
            <div class="col-sm-3 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">CALENDAR</h5>
                        <div class="">
        <label for="">Simple Date & Time</label>
                            <div class='' id=''>
                            <span class="datepicker-toggle">
  <span class=""></span>
              <input type='month' class="datepicker-toggle-button" />
</span>
              <!-- <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
              </span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>