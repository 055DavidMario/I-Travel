<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Admin Template</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
<<<<<<< HEAD
        .bg-sidebar { background: #475a5e; }
        .cta-btn { color: #25a0f2; }
        .upgrade-btn { background: #2ba4e1; }
        .upgrade-btn:hover { background: #43ccf1; }
=======
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }
    </style>
</head>
<body class="flex bg-gray-100 font-family-karla">
<<<<<<< HEAD

    <aside class="relative hidden w-64 h-screen shadow-xl bg-sidebar sm:block">
        <div class="p-6">
            <a href="index.html" class="text-3xl font-semibold text-white uppercase hover:text-gray-300">Admin Page</a>
            <img type="logo" class="w-24 mt-6 ml-8 rounded" src="/img/logo2.png" alt="logo I-Travel" title="Logo I-Travel" >
=======
    <aside class="relative hidden w-64 h-screen shadow-xl bg-sidebar sm:block">
        <div class="p-6">
            <a href="index.html" class="text-3xl font-semibold text-white uppercase hover:text-gray-300">Admin</a>
            <button class="flex items-center justify-center w-full py-2 mt-5 font-semibold bg-white rounded-tr-lg rounded-bl-lg rounded-br-lg shadow-lg cta-btn hover:shadow-xl hover:bg-gray-300">
                <i class="mr-3 fas fa-plus"></i> New Report
            </button>
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
        </div>
        <nav class="pt-3 text-base font-semibold text-white">
            <h2 class="ml-6 font-serif text-lg font-semibold text-white underline shadow">MENU</h2>
            <div>
                <a href="admin" class="flex items-center py-4 pl-6 text-white nav-item">
                    <i class="mr-3 fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
                <a href="/" class="flex items-center py-4 pl-6 text-white opacity-75 hover:opacity-100 nav-item">
                    <i class="mr-3 fas fa-home"></i>
                    Home
                </a>
            </div>

            <h2 class="mt-6 ml-6 font-serif text-lg font-semibold text-white underline">INPUT DATA</h2>
            <div>
            <a href="/tabledata" class="flex items-center py-4 pl-6 text-white opacity-75 active-nav-link hover:opacity-100 nav-item">
                <i class="mr-3 fas fa-table"></i>
                Table Data
            </a>
            <a href="/formwisata" class="flex items-center py-4 pl-6 text-white opacity-75 hover:opacity-100 nav-item">
                <i class="mr-3 fas fa-table"></i>
                Wisata
            </a>
            <a href="/formtiket" class="flex items-center py-4 pl-6 text-white opacity-75 hover:opacity-100 nav-item">
                <i class="mr-3 fas fa-table"></i>
                Tiket
            </a>
            </div>


            <h2 class="mt-6 ml-6 font-serif text-lg font-semibold text-white underline">OTHERS</h2>
            <div>
            <a href="/calendar" class="flex items-center py-4 pl-6 text-white opacity-75 hover:opacity-100 nav-item">
                <i class="mr-3 fas fa-calendar"></i>
                Calendar
            </a>
            </div>
        </nav>
    </aside>



    <div class="flex flex-col w-full h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="items-center hidden w-full px-6 py-2 bg-white sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative flex justify-end w-1/2">
                <button @click="isOpen = !isOpen" class="z-10 w-12 h-12 overflow-hidden border-4 border-gray-400 rounded-full realtive hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
                </button>
                <button x-show="isOpen" @click="isOpen = false" class="fixed inset-0 w-full h-full cursor-default"></button>
                <div x-show="isOpen" class="absolute w-32 py-2 mt-16 bg-white rounded-lg shadow-lg">
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                        @if (Route::has('login'))
                            <div class="font-bold text-gray-800 transition duration-300 ease-in-out transform">
                                @auth
                                <!-- <button id="navAction" class="px-8 py-4 mx-auto mt-4 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow opacity-75 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105"> -->
                                <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-bla">LOG IN</a>

                                    @if (Route::has('register'))
                                    <!-- <button id="navAction" class="px-8 py-4 mx-auto mt-4 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow opacity-75 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105"> -->
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">REGISTER</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                </div>
            </div>
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full px-6 py-5 bg-sidebar sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.html" class="text-3xl font-semibold text-white uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-3xl text-white focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="/admin" class="flex items-center py-2 pl-4 text-white active-nav-link nav-item">
                    <i class="mr-3 fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
                <a href="/" class="flex items-center py-2 pl-4 text-white active-nav-link nav-item">
                    <i class="mr-3 fas fa-home"></i>
                    Home
                </a>
                <a href="/tabledata" class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 nav-item">
                    <i class="mr-3 fas fa-table"></i>
                    Table Data
                </a>
                <a href="/formwisata" class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 nav-item">
                    <i class="mr-3 fas fa-table"></i>
                    Wisata
                </a>
                <a href="/formtiket" class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 nav-item">
                    <i class="mr-3 fas fa-table"></i>
                    Tiket
                </a>
                <a href="/calendar" class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 nav-item">
                    <i class="mr-3 fas fa-calendar"></i>
                    Calendar
                </a>
                <a href="#" class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 nav-item">
                    <i class="mr-3 fas fa-user"></i>
                    My Account
                </a>
                <a href="#" class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 nav-item">
                    <i class="mr-3 fas fa-sign-out-alt"></i>
                    Sign Out
                </a>
                <button class="flex items-center justify-center w-full py-2 mt-3 font-semibold bg-white rounded-lg shadow-lg cta-btn hover:shadow-xl hover:bg-gray-300">
                    <i class="mr-3 fas fa-arrow-circle-up"></i> Upgrade to Pro!
                </button>
            </nav>
            <!-- <button class="flex items-center justify-center w-full py-2 mt-5 font-semibold bg-white rounded-tr-lg rounded-bl-lg rounded-br-lg shadow-lg cta-btn hover:shadow-xl hover:bg-gray-300">
                <i class="mr-3 fas fa-plus"></i> New Report
            </button> -->
        </header>

        <div class="flex flex-col w-full h-screen overflow-x-hidden border-t">
        <main class="h-full pb-16 overflow-y-auto">
          <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              INPUT DATA
            </h2>
            <!-- CTA -->
<<<<<<< HEAD
            <!--<form>
            <div class="flex flex-wrap">
            <input type="text" class="form-control relative flex-row min-w-0 block w-1/4 rounded-md px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
				<button type="submit"  class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded" id="search">
					<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
					<path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
					</svg>
                </button>
                </form>
            </div> -->
            <form class="flex items-center mb-3" method="GET">
          <label for="simple-search" class="sr-only">Search</label>
          <div class="relative w-96">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <input type="text" name="nama_wisata" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full pl-10 p-2.5" placeholder="Search" required>
          </div>
          <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-teal-700 rounded-lg border border-teal-700 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <span class="sr-only">Search</span>
          </button>
        </form>
            {{-- start data 1 --}}
            <!-- General elements -->
            <h4
              class="mb-4 my-6 text-lg font-semibold text-gray-600 dark:text-gray-300">
=======

            {{-- start data 1 --}}
            <!-- General elements -->
            <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
              Wisata
            </h4>
            <div class="px-4 py-3 mb-8 rounded-lg shadow-md bg-slate-400 dark:bg-gray-800">
            <div class="w-24 p-2 text-xl text-center text-black border-2 bg-white/50 hover:bg-blue-600 rounded-xl hover:text-white">
                <a href="/formwisata" class="justify-center text-center">Create</a>
            </div>

                {{-- Table Data --}}
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                <thead class="bg-blue-600 border-b">
                                    <tr>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        id
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Transportasi
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Nama Wisata
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Gambar
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Deskripsi
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Lokasi
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Date
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                    </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100">
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">1000</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Bus</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">🌊 Pantai Dreamland</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">/img/Pantai Dreamland.png</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Pantai Dreamland berada di Bukit Ungasan Desa Pecatu, dan masih berada di satu jalur untuk menuju ke</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Bukit Ungasan Desa Pecatu, Bali</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">2022-12-17</td>
                                        <td><button class="text-slate-800 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border-y border-slate-200 font-medium px-4 py-2 inline-flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>                      
                </span>
                <span>View</span>
            </button></td>
                                        <td><button class="text-slate-800 mr-2 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border border-slate-200 rounded-r-lg font-medium px-4 py-2 inline-flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>
                  </span>
                <span>Delete</span>
            </button></td>
                                    </tr>

                                    <tr class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100">
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">1000</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Bus</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">🌊 Pantai Dreamland</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">/img/Pantai Dreamland.png</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Pantai Dreamland berada di Bukit Ungasan Desa Pecatu, dan masih berada di satu jalur untuk menuju ke</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Bukit Ungasan Desa Pecatu, Bali</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">2022-12-17</td>
                                        <td><button class="text-slate-800 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border-y border-slate-200 font-medium px-4 py-2 inline-flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>                      
                </span>
                <span>View</span>
            </button></td>
                                        <td><button class="text-slate-800 mr-2 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border border-slate-200 rounded-r-lg font-medium px-4 py-2 inline-flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>
                  </span>
                <span>Delete</span>
            </button></td>
                                    </tr>

                                    <tr class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100">
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">1000</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Bus</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">🌊 Pantai Dreamland</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">/img/Pantai Dreamland.png</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Pantai Dreamland berada di Bukit Ungasan Desa Pecatu, dan masih berada di satu jalur untuk menuju ke</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Bukit Ungasan Desa Pecatu, Bali</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">2022-12-17</td>
                                        <td><button class="text-slate-800 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border-y border-slate-200 font-medium px-4 py-2 inline-flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>                      
                </span>
                <span>View</span>
            </button></td>
                                        <td><button class="text-slate-800 mr-2 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border border-slate-200 rounded-r-lg font-medium px-4 py-2 inline-flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>
                  </span>
                <span>Delete</span>
            </button></td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Table Data --}}
            </div>
            {{-- end data 1 --}}

            {{-- start data 2 --}}
            <!-- General elements -->
            <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
              Tiket
            </h4>
            <div class="px-4 py-3 mb-8 rounded-lg shadow-md bg-slate-400 dark:bg-gray-800">
            <div class="w-24 p-2 text-xl text-center text-black border-2 bg-white/50 hover:bg-blue-600 rounded-xl hover:text-white">
<<<<<<< HEAD
                <a href="/formtiket" class="justify-center text-center">Create</a>
=======
                <a href="/formwisata" class="justify-center text-center">Create</a>
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
            </div>

                {{-- Table Data --}}
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                <thead class="bg-blue-600 border-b">
                                    <tr>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        id
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Transportasi
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Nama Destinasi
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
<<<<<<< HEAD
                                        Harga
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
=======
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
                                        Tanggal Tiket
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Waktu Perjalanan
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Transit
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Makan
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                    </th>
                                    </tr>
                                </thead>
                                <tbody>
<<<<<<< HEAD
                                    @foreach ($data as $tiket)
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">{{$tiket->id}}</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Pesawat</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{$tiket->nama_destinasi}}</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{$tiket->harga->harga}}</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{$tiket->tanggal_tiket}}</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{$tiket->waktu_perjalanan}}</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{$tiket->transit}}x</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{$tiket->makan}}x</td>
                                        <td><a href="/tabledata/edit/{{$tiket->id}}" class="text-slate-800 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border-y border-slate-200 font-medium px-4 py-2 inline-flex space-x-1 items-center">

                                        <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>
                </span>
                <span>Edit</span>
</a></td>
                                        <td>
                                            <form action="tabledata/delete/{{$tiket->id}}" method="post" >
                                            @csrf
                                            @method('DELETE')
                                                <button type="submit"class="text-slate-800 mr-2  hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border border-slate-200 rounded-r-lg font-medium px-4 py-2 inline-flex space-x-1 items-center">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                      </svg>
                      </span>
                    <span>Delete</span>
                </button>
                                            </form>
        </td>
                                    </tr>
                                    @endforeach


=======
                                    <tr class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100">
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">10000</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Pesawat</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Bali -> Jakarta</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">2023-01-15</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">01:45:00</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">0x</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">0x</td>
                                        <td><button class="text-slate-800 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border-y border-slate-200 font-medium px-4 py-2 inline-flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>                      
                </span>
                <span>View</span>
            </button></td>
                                        <td><button class="text-slate-800 mr-2 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border border-slate-200 rounded-r-lg font-medium px-4 py-2 inline-flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>
                  </span>
                <span>Delete</span>
            </button></td>
                                    </tr>

                                    <tr class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">10001</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Pesawat</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Bali -> Medan</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">2023-01-15</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">01:55:00</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">0x</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">1x</td>
                                        <td><button class="text-slate-800 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border-y border-slate-200 font-medium px-4 py-2 inline-flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>                      
                </span>
                <span>View</span>
            </button></td>
                                        <td><button class="text-slate-800 mr-2 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border border-slate-200 rounded-r-lg font-medium px-4 py-2 inline-flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>
                  </span>
                <span>Delete</span>
            </button></td>
                </tr>
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Table Data --}}
            </div>
            {{-- end data 1 --}}
<<<<<<< HEAD
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                INPUT DATA
              </h2>
              <!-- CTA -->
              <!--<form>
              <div class="flex flex-wrap">
              <input type="text" class="form-control relative flex-row min-w-0 block w-1/4 rounded-md px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                  <button type="submit"  class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded" id="search">
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                      </svg>
                  </button>
                  </form>
              </div> -->
              <form class="flex items-center mb-3" method="GET">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-96">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <input type="text" name="nama_wisata" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full pl-10 p-2.5" placeholder="Search" required>
            </div>
            <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-teal-700 rounded-lg border border-teal-700 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
              <span class="sr-only">Search</span>
            </button>
          </form>
              {{-- start data 1 --}}
              <!-- General elements -->
              <h4
                class="mb-4 my-6 text-lg font-semibold text-gray-600 dark:text-gray-300">
                Wisata
              </h4>
              <div class="px-4 py-3 mb-8 rounded-lg shadow-md bg-slate-400 dark:bg-gray-800">
              <div class="w-24 p-2 text-xl text-center text-black border-2 bg-white/50 hover:bg-blue-600 rounded-xl hover:text-white">
                  <a href="/formwisata/" class="justify-center text-center">Create</a>
              </div>

                  {{-- Table Data --}}
                  <div class="flex flex-col">
                      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                              <div class="overflow-hidden">
                                  <table class="min-w-full">
                                  <thead class="bg-blue-600 border-b">
                                      <tr>
                                      <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                          id
                                      </th>
                                      <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                          Transportasi
                                      </th>
                                      <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                          Nama Wisata
                                      </th>
                                      <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                          Gambar
                                      </th>
                                      <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                          Deskripsi
                                      </th>
                                      <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                          Lokasi
                                      </th>
                                      <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                          Date
                                      </th>
                                      <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                      </th>
                                      <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                      </th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($set as $wisata)
                                      <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">{{$wisata->id}}</td>
                                          <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Pesawat</td>
                                          <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{$wisata->nama_wisata}}</td>
                                          <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{$wisata->gambar}}</td>
                                          <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{$wisata->deskripsi}}</td>
                                          <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{$wisata->lokasi}}</td>
                                          <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{$wisata->date}}</td>
                                          <td><a href="/tabledata/wisata/edit/{{$wisata->id}}" class="text-slate-800 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border-y border-slate-200 font-medium px-4 py-2 inline-flex space-x-1 items-center">

                                          <span>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                  </span>
                  <span>Edit</span>
  </a></td>
                                          <td>
                                              <form action="tabledata/wisata/delete/{{$wisata->id}}" method="post" >
                                              @csrf
                                              @method('DELETE')
                                                  <button type="submit"class="text-slate-800 mr-2  hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border border-slate-200 rounded-r-lg font-medium px-4 py-2 inline-flex space-x-1 items-center">
                      <span>
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                        </span>
                      <span>Delete</span>
                  </button>
                                              </form>
          </td>
                                      </tr>
                                      @endforeach


                                  </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
            {{-- start data 2 --}}

            <!-- General elements -->

        </main>

            <!-- start footer -->
            <!-- <footer class="flex w-auto space-x-2 text-white bg-gray-900">
                <div class="w-1/3 h-full mt-10 ml-24 mr-32 item">
                    <img src="/img/logo2.png" alt="logo I-Travel">
                </div>

                <div class="w-full h-full item ">
                    <h5 class="mt-8 ml-24 mr-32 font-semibold tracking-wider text-gray-500 uppercase">Featured</h5>
                    <ul class="mt-4 ml-24 mr-32">
                        <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Wisata</a></li>
                        <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Transportasi</a></li>
                        <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Tiket</a></li>
                    </ul>
                </div>

                <div class="w-full h-full mb-8 item ">
                    <h5 class="mt-8 ml-8 mr-32 font-semibold tracking-wider text-gray-500 uppercase">Our Company</h5>
                    <ul class="mt-4 ml-8 mr-32">
                        <li>
                        <a href="#" title="" class="flex items-center  opacity-75 hover:opacity-100">
                            <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                class="fill-current">
                                <path
                                d="M12,2C7.589,2,4,5.589,4,9.995C3.971,16.44,11.696,21.784,12,22c0,0,8.029-5.56,8-12C20,5.589,16.411,2,12,2z M12,14 c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S14.21,14,12,14z" />
                            </svg>
                            </span>
                            <span class="ml-3">
                            Jl. Udayana, Singaraja, Bali
                            </span>
                        </a>
                        </li>
                        <li class="mt-4">
                        <a href="#" title="" class="flex items-center  opacity-75 hover:opacity-100">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                class="fill-current">
                                <path
                                d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10c5.514,0,10-4.486,10-10S17.514,2,12,2z M12,20c-4.411,0-8-3.589-8-8 s3.589-8,8-8s8,3.589,8,8S16.411,20,12,20z" />
                                <path d="M13 7L11 7 11 13 17 13 17 11 13 11z" /></svg>
                            </span>
                            <span class="ml-3">
                            Mon - Fri : 8:00 - 16:00<br>
                            Sat - Sun : 8:00 - 13:00
                            </span>
                        </a>
                        </li>
                        <li class="mt-4">
                        <a href="#" title="" class="flex items-center opacity-75 hover:opacity-100">
                            <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                class="fill-current">
                                <path
                                d="M14.594,13.994l-1.66,1.66c-0.577-0.109-1.734-0.471-2.926-1.66c-1.193-1.193-1.553-2.354-1.661-2.926l1.661-1.66 l0.701-0.701L5.295,3.293L4.594,3.994l-1,1C3.42,5.168,3.316,5.398,3.303,5.643c-0.015,0.25-0.302,6.172,4.291,10.766 C11.6,20.414,16.618,20.707,18,20.707c0.202,0,0.326-0.006,0.358-0.008c0.245-0.014,0.476-0.117,0.649-0.291l1-1l0.697-0.697 l-5.414-5.414L14.594,13.994z" />
                            </svg>
                            </span>
                            <span class="ml-3">
                            021 0001 2345
                            </span>
                        </a>
                        </li>
                        <li class="mt-4">
                        <a href="#" title="" class="flex items-center opacity-75 hover:opacity-100">
                            <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                class="fill-current">
                                <path
                                d="M20,4H4C2.896,4,2,4.896,2,6v12c0,1.104,0.896,2,2,2h16c1.104,0,2-0.896,2-2V6C22,4.896,21.104,4,20,4z M20,8.7l-8,5.334 L4,8.7V6.297l8,5.333l8-5.333V8.7z" />
                            </svg>
                            </span>
                            <span class="ml-3">
                            I-Travel@gmail.com
                            </span>
                        </a>
                        </li>
                    </ul>
                </div>

                <div class="h-full item w-full96 ">
                    <h5 class="mt-8 ml-24 mr-32 font-semibold tracking-wider text-gray-500 uppercase">Social Media</h5>
                    <ul class="flex mt-4 ml-24 mr-32">
                        <li>
                        <a href="#" target="_blank" title="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                            <path
                                d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592	c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20	c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z" />
                            </svg>
                        </a>
                        </li>

                        <li class="ml-6">
                        <a href="#" target="_blank" title="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                            <path
                                d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809	c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793	c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05	c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032	c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028	c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22	c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z" />
                            </svg>
                        </a>
                        </li>

                        <li class="ml-6">
                        <a href="#" target="_blank" title="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                            <path
                                d="M20.947,8.305c-0.011-0.757-0.151-1.508-0.419-2.216c-0.469-1.209-1.424-2.165-2.633-2.633 c-0.699-0.263-1.438-0.404-2.186-0.42C14.747,2.993,14.442,2.981,12,2.981s-2.755,0-3.71,0.055 c-0.747,0.016-1.486,0.157-2.185,0.42C4.896,3.924,3.94,4.88,3.472,6.089C3.209,6.788,3.067,7.527,3.053,8.274 c-0.043,0.963-0.056,1.268-0.056,3.71s0,2.754,0.056,3.71c0.015,0.748,0.156,1.486,0.419,2.187 c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45c0.963,0.043,1.268,0.056,3.71,0.056s2.755,0,3.71-0.056 c0.747-0.015,1.486-0.156,2.186-0.419c1.209-0.469,2.164-1.425,2.633-2.633c0.263-0.7,0.404-1.438,0.419-2.187 c0.043-0.962,0.056-1.267,0.056-3.71C21.003,9.572,21.003,9.262,20.947,8.305z M11.994,16.602c-2.554,0-4.623-2.069-4.623-4.623 s2.069-4.623,4.623-4.623c2.552,0,4.623,2.069,4.623,4.623S14.546,16.602,11.994,16.602z M16.801,8.263 c-0.597,0-1.078-0.482-1.078-1.078s0.481-1.078,1.078-1.078c0.595,0,1.077,0.482,1.077,1.078S17.396,8.263,16.801,8.263z" />
                            <circle cx="11.994" cy="11.979" r="3.003" /></svg>
                        </a>
                        </li>

                        <li class="ml-6">
                        <a href="#" target="_blank" title="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                            <path
                                d="M21.593,7.203c-0.23-0.858-0.905-1.535-1.762-1.766C18.265,5.007,12,5,12,5S5.736,4.993,4.169,5.404	c-0.84,0.229-1.534,0.921-1.766,1.778c-0.413,1.566-0.417,4.814-0.417,4.814s-0.004,3.264,0.406,4.814	c0.23,0.857,0.905,1.534,1.763,1.765c1.582,0.43,7.83,0.437,7.83,0.437s6.265,0.007,7.831-0.403c0.856-0.23,1.534-0.906,1.767-1.763	C21.997,15.281,22,12.034,22,12.034S22.02,8.769,21.593,7.203z M9.996,15.005l0.005-6l5.207,3.005L9.996,15.005z" />
                            </svg>
                        </a>
                        </li>
                    </ul>

                    <p class="mt-12 ml-24 mr-32 text-sm text-gray-400">2022 © I-Travel<br class="hidden lg:block">All Rights Reserved.
                    </p>
                </div>
            </footer> -->
            <!-- end footer -->
            <footer class="w-full p-4 text-right text-white border-white/50 bg-gray-900">
                Built by <a target="_blank" href="/aboutus" class="underline">055 056 070</a>.
=======

          </div>
        </main>

            <footer class="w-full p-4 text-right bg-white">
                Built by <a target="_blank" href="https://davidgrzyb.com" class="underline">David Grzyb</a>.
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
            </footer>
        </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>
