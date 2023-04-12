<!-- ARBEIT MIT "SWITCH" UND NICHT "IF-ELSE-IF" -->

<x-app-layout>
    @if(Request::path() === "General_Events")
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('General Events') }}
            </h2>
        </x-slot>
        @include('publications.publication')
        
    
    @elseif(Request::path() === "Food_Events")
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Food Events') }}
            </h2>
        </x-slot>
        @include('publications.publication')
         

    @elseif(Request::path() === "Pub_Events")
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Pub Events') }}
            </h2>
        </x-slot>
        @include('publications.publication')
        

    @elseif(Request::path() === "Smalls_Events")
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('General Events') }}
            </h2>
        </x-slot>
        @include('publications.publication')
        
        



    @elseif(Request::path() === "details/{$publicationsDetails->id}")
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Details') }}
            </h2>
        </x-slot>
        @include('publications.partials.publicationDetails')

    @else
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Edit Event') }}
            </h2>
        </x-slot>
        @include('publications.partials.publicationEdit')
    @endif
    
</x-app-layout>
