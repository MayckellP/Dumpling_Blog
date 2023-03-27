

<x-app-layout>
<<<<<<< HEAD
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
    
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
=======
    @if(Request::path() === "General_Events")
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('General Events') }}
            </h2>
        </x-slot>
        
    
    @elseif(Request::path() === "Food_Events")
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Food Events') }}
            </h2>
        </x-slot>
         

    @elseif(Request::path() === "Pub_Events")
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Pub Events') }}
            </h2>
        </x-slot>
        

    @elseif(Request::path() === "Smalls_Events")
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('General Events') }}
            </h2>
        </x-slot>
        



    @elseif(Request::path() == "details/{$publicationsDetails->id}")
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
    @include('publications.publication') 
>>>>>>> da57728 (Fuktionen (Users / Besucher))
</x-app-layout>

