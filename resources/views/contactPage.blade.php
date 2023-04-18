<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('CONTACT US') }}
            </h2>
        </x-slot>
        @include('publications.partials.searchPublication')
        <div class="cont-search" style="width:70%;">
    <input class="form-control me-1 rounded-5" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success m-auto" type="submit">
        <i class="bi bi-search"></i>
    </button>
</div>
</x-app-layout>