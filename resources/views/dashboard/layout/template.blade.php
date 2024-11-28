<!DOCTYPE html>
<html lang="en">
@include('dashboard.layout.head')

<body class="font-poppins">

    <div class="flex wrapper">

    @include('dashboard.layout.sidebar')

    <div class="page-content">

    @include('dashboard.layout.header')

    @yield('content')

    


    <!-- Plugin Js -->
  <script src="{{ asset ('assets/libs/simplebar/simplebar.min.js')}}"></script>
  <script src="{{ asset ('assets/libs/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset ('assets/libs/iconify-icon/iconify-icon.min.js')}}"></script>
  <script src="{{ asset ('assets/libs/node-waves/waves.min.js')}}"></script>
  <script src="{{ asset ('assets/libs/preline/preline.js')}}"></script>

  <!-- App Js -->
  <script src="{{ asset ('assets/js/app.js')}}"></script>

    </div>
    
</body>
</html>
