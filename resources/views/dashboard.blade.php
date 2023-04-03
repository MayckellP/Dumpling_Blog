<x-app-layout>
<<<<<<< HEAD
<<<<<<< HEAD
=======
    <x-slot name="header">
            </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    
                    <form action="{{ route('add-comment') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <textarea class="form-control" id="title" name="title" rows="1" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="comment" class="form-label">Comment</label>
                            <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
=======
>>>>>>> 2ed55092b83137ed830b0b8fb0e41dab09763fcc
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
<<<<<<< HEAD
=======
    <x-slot name="header">
            </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    
                    <form action="{{ route('add-comment') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <textarea class="form-control" id="title" name="title" rows="1" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="comment" class="form-label">Comment</label>
                            <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
>>>>>>> fa66b06 (title)
=======
>>>>>>> FuktionenProbe
>>>>>>> 2ed55092b83137ed830b0b8fb0e41dab09763fcc
</x-app-layout>
