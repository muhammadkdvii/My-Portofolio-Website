<!DOCTYPE html>
<html lang="en">
@include('layout.head')

<body class="bg-custom-dark-1 font-poppins">
    @include('layout.header')

    @yield('content')

    

    @include('layout.footer')

    <script src="{{ asset ('assets1/js/cutomApp.js')}}"></script>
    
</body>
</html>
