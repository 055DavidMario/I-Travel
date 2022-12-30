<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,100&display=swap"
	rel="stylesheet" />

<style>
    html,
    body {
        font-family: Poppins, Helvetica, sans-serif;
    }
</style>
    <title>Document</title>
</head>
<style>
			.carousel-open:checked + .carousel-item {
				position: static;
				opacity: 100;
			}
			.carousel-item {
				-webkit-transition: opacity 0.6s ease-out;
				transition: opacity 0.6s ease-out;
			}
			#carousel-1:checked ~ .control-1,
			#carousel-2:checked ~ .control-2,
			#carousel-3:checked ~ .control-3 {
				display: block;
			}
			.carousel-indicators {
				list-style: none;
				margin: 0;
				padding: 0;
				position: absolute;
				bottom: 2%;
				left: 0;
				right: 0;
				text-align: center;
				z-index: 10;
			}
			#carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
			#carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
			#carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
				color: #2b6cb0;  /*Set to match the Tailwind colour you want the active one to be */
			}
		</style>
<body>
    <!--navbar-->
<<<<<<< HEAD

=======
		
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
 <!--Nav-->
 <nav id="header" class="top-0 z-30 w-full py-1">
        <div class="container flex flex-wrap items-center justify-between w-full px-6 py-3 mx-auto mt-0">

            <label for="menu-toggle" class="block cursor-pointer md:hidden">
                <svg class="text-gray-900 fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="order-3 hidden w-full md:flex md:items-center md:w-auto md:order-1" id="menu">
                <nav>
                    <ul class="items-center justify-between pt-4 text-base text-gray-700 md:flex md:pt-0">
                        <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline" href="#">Shop</a></li>
                        <li><a href="/" class="inline-block px-4 py-2 no-underline hover:text-black hover:underline" href="#">Home</a></li>
                        <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline" href="/aboutus">About</a></li>
                    </ul>
                </nav>
            </div>

            <div class="order-1 md:order-2">
                <a class="flex items-center text-xl font-bold tracking-wide text-gray-800 no-underline hover:no-underline " href="#">
                    <svg class="mr-2 text-gray-800 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z" />
                    </svg>
                    I-TRAVEL SHOP
                </a>
<<<<<<< HEAD
            </div>
=======
            </div>		
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1

            <div class="flex items-center order-2 md:order-3" id="nav-content">

			<input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
				<span class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded" id="basic-addon2">
					<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
					<path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
					</svg>
				</span>

                <a class="inline-block no-underline hover:text-black" href="#">
                    <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <circle fill="none" cx="12" cy="7" r="3" />
                        <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                    </svg>
                </a>

                <a class="inline-block pl-3 no-underline hover:text-black" href="#">
                    <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z" />
                        <circle cx="10.5" cy="18.5" r="1.5" />
                        <circle cx="17.5" cy="18.5" r="1.5" />
                    </svg>
                </a>
            </div>
            @if (Route::has('login'))
                <div class="px-4 py-2 mx-auto mt-4 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow opacity-75 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105 hover:bg-teal-400">
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
    </nav>
<<<<<<< HEAD

=======
    
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
    <div class="relative bg-white shadow-2xl carousel">
	<div class="relative w-full] overflow-hidden carousel-inner">
	  <!--Slide 1-->
		<input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
		<div class="absolute opacity-0 carousel-item" style="height:80vh;">
			<!-- <div class="block w-full h-full text-5xl text-center text-white">Slide 1</div> -->
			<img src="/img/pesawat.png" alt="" class="w-full">
		</div>
		<label for="carousel-3" class="absolute inset-y-0 left-0 z-10 hidden w-10 h-10 my-auto ml-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer prev control-1 md:ml-10 hover:text-white hover:bg-blue-700">‹</label>
		<label for="carousel-2" class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer next control-1 md:mr-10 hover:text-white hover:bg-blue-700">›</label>
<<<<<<< HEAD

=======
		
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
		<!--Slide 2-->
		<input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
		<div class="absolute opacity-0 carousel-item" style="height:80vh;">
        <img src="" alt="">
			<!-- <div class="block w-full h-full text-5xl text-center text-white">Slide 2</div> -->
			<img src="/img/bus.png" alt="" class="w-full ">
		</div>
		<label for="carousel-1" class="absolute inset-y-0 left-0 z-10 hidden w-10 h-10 my-auto ml-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer prev control-2 md:ml-10 hover:text-white hover:bg-blue-700">‹</label>
<<<<<<< HEAD
		<label for="carousel-3" class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer next control-2 md:mr-10 hover:text-white hover:bg-blue-700">›</label>

=======
		<label for="carousel-3" class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer next control-2 md:mr-10 hover:text-white hover:bg-blue-700">›</label> 
		
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
		<!--Slide 3-->
		<input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
		<div class="absolute opacity-0 carousel-item" style="height:80vh;">

			<!-- <div class="block w-full h-full text-5xl text-center text-white">Slide 3</div> -->
			<img src="/img/kapal.png" alt="" class="w-full ">
		</div>
		<label for="carousel-2" class="absolute inset-y-0 left-0 z-10 hidden w-10 h-10 my-auto ml-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer prev control-3 md:ml-10 hover:text-white hover:bg-blue-700">‹</label>
		<label for="carousel-1" class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer next control-3 md:mr-10 hover:text-white hover:bg-blue-700">›</label>

		<!-- Add additional indicators for each slide-->
		<ol class="carousel-indicators">
			<li class="inline-block mr-3">
				<label for="carousel-1" class="block text-4xl text-white cursor-pointer carousel-bullet hover:text-blue-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-2" class="block text-4xl text-white cursor-pointer carousel-bullet hover:text-blue-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-3" class="block text-4xl text-white cursor-pointer carousel-bullet hover:text-blue-700">•</label>
			</li>
		</ol>
<<<<<<< HEAD

=======
		
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
	</div>
</div>
<!--Category-->

<div class="flex flex-col mb-auto">
  <h2 class="mb-20 text-2xl font-bold">Feature Cards</h2>
  <div class="grid grid-cols-1 gap-4 mt-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    <div class="flex items-start p-4 bg-white shadow-lg rounded-xl">
      <div class="flex items-center justify-center w-12 h-12 border border-blue-100 rounded-full bg-blue-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
        </svg>
      </div>

      <div class="ml-4">
        <h2 class="font-semibold">574 Messages</h2>
        <p class="mt-2 text-sm text-gray-500">Last opened 4 days ago</p>
      </div>
    </div>

    <div class="flex items-start p-4 bg-white shadow-lg rounded-xl">
      <div class="flex items-center justify-center w-12 h-12 border border-orange-100 rounded-full bg-orange-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
        </svg>
      </div>

      <div class="ml-4">
        <h2 class="font-semibold">1823 Users</h2>
        <p class="mt-2 text-sm text-gray-500">Last checked 3 days ago</p>
      </div>
    </div>
    <div class="flex items-start p-4 bg-white shadow-lg rounded-xl">
      <div class="flex items-center justify-center w-12 h-12 border border-red-100 rounded-full bg-red-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
        </svg>
      </div>

      <div class="ml-4">
        <h2 class="font-semibold">548 Posts</h2>
        <p class="mt-2 text-sm text-gray-500">Last authored 1 day ago</p>
      </div>
    </div>
    <div class="flex items-start p-4 bg-white shadow-lg rounded-xl">
      <div class="flex items-center justify-center w-12 h-12 border border-indigo-100 rounded-full bg-indigo-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
        </svg>
      </div>

      <div class="ml-4">
        <h2 class="font-semibold">129 Comments</h2>
        <p class="mt-2 text-sm text-gray-500">Last commented 8 days ago</p>
      </div>
    </div>
  </div>
</div>

<div class="grid mx-20">
  <div class="flex">
    <span class="mx-auto my-10 font-bold text-center">
      <a href="https://egoistdeveloper.github.io/twcss-to-sass-playground/" target="_blank" class="text-blue-600">
        Convetert to SASS </a>
    </span>
  </div>

  <!-- User Profile Tab Card -->
  @foreach($Tiket as $t)
  <div class="flex flex-row p-6 mb-20 bg-white border rounded-lg border-gray-400/80">
    <!-- Avaar Container -->
    <div class="relative">
      <!-- User Avatar -->
      <img class="object-cover w-40 h-40 rounded-md" src="/img/pesawat1.png"
        alt="User" />

      <!-- Online Status Dot -->
      <div
        class="absolute w-5 h-5 bg-green-400 border-4 border-white rounded-full -right-3 bottom-5 sm:top-2 sm:invisible md:visible"
        title="User is online"></div>
    </div>

    <!-- Meta Body -->
    <div class="flex flex-col px-6">
      <!-- Username Container -->
      <div class="flex flex-row h-8">
        <!-- Username -->
        <a href="https://github.com/EgoistDeveloper/" target="_blank">
<<<<<<< HEAD
          <h2 class="text-lg font-semibold">{{$t->nama_destinasi}}</h2>
=======
          <h2 class="text-lg font-semibold">{{$t->Nama_Destinasi}}</h2>
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
        </a>

        <!-- User Verified -->
        <svg class="h-5 my-auto ml-2 fill-blue-400" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
          <path
            d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
          </svg>
      </div>

      <!-- Meta Badges -->
      <div class="flex flex-row my-2 space-x-2">
        <!-- Badge Role -->
        <div class="flex flex-row">
          <svg class="w-4 h-4 mr-2 fill-gray-500/80" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
            <path
              d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M7.07,18.28C7.5,17.38 10.12,16.5 12,16.5C13.88,16.5 16.5,17.38 16.93,18.28C15.57,19.36 13.86,20 12,20C10.14,20 8.43,19.36 7.07,18.28M18.36,16.83C16.93,15.09 13.46,14.5 12,14.5C10.54,14.5 7.07,15.09 5.64,16.83C4.62,15.5 4,13.82 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,13.82 19.38,15.5 18.36,16.83M12,6C10.06,6 8.5,7.56 8.5,9.5C8.5,11.44 10.06,13 12,13C13.94,13 15.5,11.44 15.5,9.5C15.5,7.56 13.94,6 12,6M12,11A1.5,1.5 0 0,1 10.5,9.5A1.5,1.5 0 0,1 12,8A1.5,1.5 0 0,1 13.5,9.5A1.5,1.5 0 0,1 12,11Z" />
            </svg>

<<<<<<< HEAD
          <div class="text-xs text-gray-400/80 hover:text-gray-400">{{$t->waktu_perjalanan}}</div>
=======
          <div class="text-xs text-gray-400/80 hover:text-gray-400">{{$t->Waktu_Perjalanan}}</div>
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
        </div>

        <!-- Badge Location -->
        <div class="flex flex-row">
<<<<<<< HEAD

=======
          
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
        </div>

        <!-- Badge Email-->
        <div class="flex flex-row">
<<<<<<< HEAD

=======
         
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
        </div>
      </div>

      <!-- Mini Cards -->
      <div class="flex flex-row h-auto items-center mt-2 space-x-5">
        <!-- Comments -->
        <a href="#"
          class="flex flex-col items-center justify-center w-40 h-20 transition-colors duration-100 ease-in-out border border-gray-200 border-dashed rounded-md hover:border-gray-400/80">
          <div class="flex flex-row items-center justify-center">
            <svg class="mr-3 fill-gray-500/95" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
              <path
                d="M12,23A1,1 0 0,1 11,22V19H7A2,2 0 0,1 5,17V7A2,2 0 0,1 7,5H21A2,2 0 0,1 23,7V17A2,2 0 0,1 21,19H16.9L13.2,22.71C13,22.89 12.76,23 12.5,23H12M13,17V20.08L16.08,17H21V7H7V17H13M3,15H1V3A2,2 0 0,1 3,1H19V3H3V15M9,9H19V11H9V9M9,13H17V15H9V13Z" />
              </svg>

<<<<<<< HEAD
            <span class="font-bold text-gray-600"> Rp {{$t->id_harga}} </span>
=======
            <span class="font-bold text-gray-600"> Rp {{$t->ID_Harga}} </span>
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
          </div>

          <div class="mt-2 text-sm text-gray-400">Harga</div>
        </a>

        <!-- Projects -->
        <a href="#"
          class="flex flex-col items-center justify-center w-40 h-20 transition-colors duration-100 ease-in-out border border-gray-200 border-dashed rounded-md hover:border-gray-400/80">
          <div class="flex flex-row items-center justify-center">
            <svg class="mr-3 fill-gray-500/95" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
              <path
                d="M2.5 19.6L3.8 20.2V11.2L1.4 17C1 18.1 1.5 19.2 2.5 19.6M15.2 4.8L20.2 16.8L12.9 19.8L7.9 7.9V7.8L15.2 4.8M15.3 2.8C15 2.8 14.8 2.8 14.5 2.9L7.1 6C6.4 6.3 5.9 7 5.9 7.8C5.9 8 5.9 8.3 6 8.6L11 20.5C11.3 21.3 12 21.7 12.8 21.7C13.1 21.7 13.3 21.7 13.6 21.6L21 18.5C22 18.1 22.5 16.9 22.1 15.9L17.1 4C16.8 3.2 16 2.8 15.3 2.8M10.5 9.9C9.9 9.9 9.5 9.5 9.5 8.9S9.9 7.9 10.5 7.9C11.1 7.9 11.5 8.4 11.5 8.9S11.1 9.9 10.5 9.9M5.9 19.8C5.9 20.9 6.8 21.8 7.9 21.8H9.3L5.9 13.5V19.8Z" />
              </svg>

<<<<<<< HEAD
            <span class="font-bold text-gray-600"> {{$t->makan}} </span>
=======
            <span class="font-bold text-gray-600"> {{$t->Makan}} </span>
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
          </div>

          <div class="mt-2 text-sm text-gray-400">Makan</div>
        </a>

        <!-- Projects -->
        <a href="#"
          class="flex flex-col items-center justify-center w-40 h-20 transition-colors duration-100 ease-in-out border border-gray-200 border-dashed rounded-md hover:border-gray-400/80">
          <div class="flex flex-row items-center justify-center">
            <svg class="mr-3 fill-gray-500/95" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
              <path
                d="M5.68,19.74C7.16,20.95 9,21.75 11,21.95V19.93C9.54,19.75 8.21,19.17 7.1,18.31M13,19.93V21.95C15,21.75 16.84,20.95 18.32,19.74L16.89,18.31C15.79,19.17 14.46,19.75 13,19.93M18.31,16.9L19.74,18.33C20.95,16.85 21.75,15 21.95,13H19.93C19.75,14.46 19.17,15.79 18.31,16.9M15,12A3,3 0 0,0 12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12M4.07,13H2.05C2.25,15 3.05,16.84 4.26,18.32L5.69,16.89C4.83,15.79 4.25,14.46 4.07,13M5.69,7.1L4.26,5.68C3.05,7.16 2.25,9 2.05,11H4.07C4.25,9.54 4.83,8.21 5.69,7.1M19.93,11H21.95C21.75,9 20.95,7.16 19.74,5.68L18.31,7.1C19.17,8.21 19.75,9.54 19.93,11M18.32,4.26C16.84,3.05 15,2.25 13,2.05V4.07C14.46,4.25 15.79,4.83 16.9,5.69M11,4.07V2.05C9,2.25 7.16,3.05 5.68,4.26L7.1,5.69C8.21,4.83 9.54,4.25 11,4.07Z" />
              </svg>

<<<<<<< HEAD
            <span class="font-bold text-gray-600"> {{$t->transit}} </span>
=======
            <span class="font-bold text-gray-600"> {{$t->Transit}} </span>
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
          </div>

          <div class="mt-2 text-sm text-gray-400">Transit</div>
        </a>
      </div>
    </div>
<<<<<<< HEAD

=======
    
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
    <!-- Right Actions Container -->
    <div class="flex flex-col items-end justify-start flex-grow w-100">
      <div class="flex flex-row space-x-3">
        <!-- Follow Button -->
        <button
          class="flex px-4 py-2 text-white transition-all duration-150 ease-in-out bg-blue-500 rounded-md hover:bg-blue-600">
          <svg class="mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            version="1.1" width="24" height="24" viewBox="0 0 24 24">
            <path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" /></svg>

          Buy
        </button>

        <!-- More Actions Button -->
        <!-- <button class="flex px-1 py-2 text-white transition-all duration-150 ease-in-out bg-gray-100 rounded-md hover:bg-gray-200">
          <svg class="fill-gray-500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            version="1.1" width="24" height="24" viewBox="0 0 24 24">
            <path
              d="M12,16A2,2 0 0,1 14,18A2,2 0 0,1 12,20A2,2 0 0,1 10,18A2,2 0 0,1 12,16M12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12A2,2 0 0,1 12,10M12,4A2,2 0 0,1 14,6A2,2 0 0,1 12,8A2,2 0 0,1 10,6A2,2 0 0,1 12,4Z" />
            </svg>
        </button> -->
      </div>
    </div>
  </div>
  @endforeach
</div>

<!-- start footer -->
<footer class="flex w-auto space-x-2 text-white bg-gray-900">
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
              <a href="#" title="" class="flex items-center block opacity-75 hover:opacity-100">
                  <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      class="fill-current">
                      <path
                      d="M12,2C7.589,2,4,5.589,4,9.995C3.971,16.44,11.696,21.784,12,22c0,0,8.029-5.56,8-12C20,5.589,16.411,2,12,2z M12,14 c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S14.21,14,12,14z" />
                  </svg>
                  </span>
                  <span class="ml-3">
<<<<<<< HEAD
                  Jl. Udayana, Singaraja, Bali
=======
                  Jl. Udayana, Singaraja, Bali 
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
                  </span>
              </a>
              </li>
              <li class="mt-4">
              <a href="#" title="" class="flex items-center block opacity-75 hover:opacity-100">
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
              <a href="#" title="" class="flex items-center block opacity-75 hover:opacity-100">
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
              <a href="#" title="" class="flex items-center block opacity-75 hover:opacity-100">
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
  </footer>
  <!-- end footer -->


<<<<<<< HEAD




</body>
</html>
=======
    

    
    
</body>
</html>
    
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
