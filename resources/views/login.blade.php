<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>
<body class="relative bg-custom-dark-2 font-poppins min-h-screen flex items-center justify-center">

    <!-- Backdrop Blur Circles -->
    <div class="absolute w-[400px] h-[400px] bg-custom-teal/15 rounded-full blur-[200px] top-10 left-10"></div>
    <div class="absolute w-[500px] h-[500px] bg-custom-teal/10 rounded-full blur-[250px] bottom-20 right-10"></div>
    <div class="absolute w-[300px] h-[300px] bg-custom-teal/20 rounded-full blur-[150px] top-40 right-40"></div>

    <!-- Login Card -->
    <div class="relative bg-white border border-gray-300 rounded-lg p-8 w-96 transition-all duration-300 ease-in-out focus-within:border-custom-teal focus-within:shadow-glow-teal1 z-10">
        <!-- Centered Content -->
        <a href="{{ route('home')}}">
        <div class="flex items-center justify-center space-x-3 mb-6">
            <!-- Icon with Initial -->
            <div class="bg-green-500 text-white rounded-full h-10 w-10 flex items-center justify-center text-lg font-bold">
                K
            </div>
            <!-- Title -->
            <p class="font-semibold text-xl"><span class="text-custom-teal">KDVII</span> <span class="text-gray-300">- Dashboard</span></p>
        
        </div>
    </a>

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-custom-teal focus:ring-custom-teal sm:text-sm" placeholder="Enter your username" value="{{ old('username') }}" required>
                @error('username')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-custom-teal focus:ring-custom-teal sm:text-sm" placeholder="Enter your password" required>
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            @if (session('loginError'))
                <p class="text-red-500 text-sm mb-4">{{ session('loginError') }}</p>
            @endif
            <button type="submit" class="w-full bg-custom-teal text-white py-2 px-4 rounded-md hover:bg-gradient-custom focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Login</button>
        </form>
        
    </div>
</body>
</html>
