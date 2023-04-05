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
        </div>
    </div>
</x-app-layout>
