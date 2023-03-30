<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Add Profile Foto') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    

    <div class="w-100">
        <form method="post" action="/newFoto/{{Auth::user()->id}}" class="mt-6 space-y-6 w-100" enctype="multipart/form-data">        
            <div>
                <div class="mt-3">
                    <x-input-label for="foto" :value="__('Profile Foto')" />
                    <x-text-input id="foto" name="foto" type="file" class="mt-1 block w-full" required />
                </div> 
            </div>
            @csrf
            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>

            </div>
        </form>
        <div class="w-50 mt-4">
            @if(Auth::user()->foto == NULL)
                <img src="/images/DefaultFoto.jpg" class="rounded" alt="">

            @else
                <img src="/DB_Img/post/{{Auth::user()->foto}}" class="rounded-4" alt="">
            @endif
        </div>
    </div>
</section>
