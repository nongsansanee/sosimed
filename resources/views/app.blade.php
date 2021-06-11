<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>SOSIMED</title>

    <style>
        @font-face {
           font-family: 'Sarabun';
           src: url("{{ asset('fonts/Sarabun-Regular.ttf') }}");
         }
         body {
           font-family: 'Sarabun';
           background-color: #FCFCFC;
          
         }
    </style>
</head>
<body>
    <div class="">
        @yield('content')
    </div>

    @yield('extra-script')
</body>
</html>