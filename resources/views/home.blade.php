<<<<<<< HEAD
@section('content')

         <div class="max-w-6xl mxauto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8">
               <h1>HOME</h1>
            </div>
            <div class="mt-8">
               THIS IS HOME PAGE
            </div>
         </div>

@endsection
@include('layouts.navigation')
@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
    



</body>
</html>
=======
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
<<<<<<< HEAD
@endsection
>>>>>>> f64d6a9 (commit-05-April-23)
=======
        @yield('content')
@endsection
@include('layouts.navigation')
@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])


>>>>>>> 2339bf0 (commit 11:13 hours)
