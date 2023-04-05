@extends('layout')       
@section('content')



        <div class="max-w-6xl mxauto sm:px-6 lg:px-8">
           <div class="flex justify-center pt-8">
              <h1>ABOUT ME</h1>
                        
           </div>
           <div class="mt-8">
            THIS IS ABOUT PAGE
           </div>
        </div>
        @yield('content')
@endsection
@include('layouts.navigation')
@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])


