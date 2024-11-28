<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    

   <!-- Icons css -->
   <link href="{{ asset ('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.47.0/tabler-icons.min.css">

   <!-- Google Font Family (Mandatory in All Pages)-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

   <!-- App css -->
   <link href="{{asset ('assets/css/app.min.css')}}" rel="stylesheet" type="text/css">

   <!-- Head Js -->
   <script src="{{ asset ('assets/js/head.js')}}"></script>

    @vite('resources/css/app.css')

</head>
