<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PKBM Harapan Bangsa</title>
    <link rel="icon" href="/favicon.png" type="image/png">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<section class="h-full w-full relative ">

<form action="{{route('login-siswa')}}" method="POST" class=" h-screen flex flex-col justify-center">
    @csrf
    <img src="/img/logo.png" class="w-32 mt-2 mx-auto shadow-xl rounded-full mb-8" alt="">
    <div class="mx-auto w-full max-w-md bg-gray-100 shadow-xl rounded-lg px-5">
        <h1 class="text-center py-3 font-bold text-xl">Login</h1>
    
        <div>
            <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
            <div class="flex">
            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
</svg>
            </span>
            <input type="text" id="website-admin" name="username" class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-orange-500 focus:border-orange-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="masukkan username">
            </div>
        </div>

        <div class="">
            <label for="pw" class="block mt-3 mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <div class="flex">
            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"  data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z"></path>
                </svg>
            </span>
            <input type="password" id="pw" name="password" class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-orange-500 focus:border-orange-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="masukkan password">
            </div>
        </div>

        <button class="w-full mt-7 mb-3 bg-orange-500 flex text-center justify-center rounded-md border-2 border-orange-500 text-orange-100 font-bold hover:bg-orange-100 hover:text-orange-500 shadow-none hover:shadow-lg hover:scale-105 transition-all py-1">
            LOGIN
        </button>

    <div class="text-xs text-gray-400 flex justify-center mt-5 mb-2">© 2024-2025 <a href="#" class="hover:underline">PKBM Harapan Bangsa™</a>. All Rights Reserved.</div>
    </div>
    
</form>

</section>



  


        
</body>
</html>
