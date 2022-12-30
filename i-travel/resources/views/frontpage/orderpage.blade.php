<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Order ticket</title>
</head>
<body>
    <!-- component -->
    <!-- component -->
<!-- Code on GiHub: https://github.com/vitalikda/form-floating-labels-tailwindcss -->
<style>
  .-z-1 {
    z-index: -1;
  }

  .origin-0 {
    transform-origin: 0%;
  }

  input:focus ~ label,
  input:not(:placeholder-shown) ~ label,
  textarea:focus ~ label,
  textarea:not(:placeholder-shown) ~ label,
  select:focus ~ label,
  select:not([value='']):valid ~ label {
    /* @apply transform; scale-75; -translate-y-6; */
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate))
      skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    --tw-scale-x: 0.75;
    --tw-scale-y: 0.75;
    --tw-translate-y: -1.5rem;
  }

  input:focus ~ label,
  select:focus ~ label {
    /* @apply text-black; left-0; */
    --tw-text-opacity: 1;
    color: rgba(0, 0, 0, var(--tw-text-opacity));
    left: 0px;
  }
</style>
<!-- navbar -->
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
                        <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline" href="#">About</a></li>
                    </ul>
<<<<<<< HEAD

=======
                    
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
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
<<<<<<< HEAD

        </div>

=======
            
        </div>
        
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
    </nav>
<!-- start order form -->
  <div class="min-h-screen p-0 bg-gray-100 sm:p-12">
    <div class="max-w-md px-6 py-12 mx-auto bg-white border-0 shadow-lg sm:rounded-3xl">
      <h1 class="mb-8 text-2xl font-bold">Form With Floating Labels</h1>
      <form id="form" novalidate>
        <div class="relative z-0 w-full mb-5">
          <input
            type="text"
            name="name"
            placeholder=" "
            required
            class="block w-full px-0 pt-3 pb-2 mt-0 bg-transparent border-0 border-b-2 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-black"
          />
          <label for="name" class="absolute text-gray-500 duration-300 top-3 -z-1 origin-0">Enter name</label>
          <span class="hidden text-sm text-red-600" id="error">Name is required</span>
        </div>

        <div class="relative z-0 w-full mb-5">
          <input
            type="email"
            name="email"
            placeholder=" "
            class="block w-full px-0 pt-3 pb-2 mt-0 bg-transparent border-0 border-b-2 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-black"
          />
          <label for="email" class="absolute text-gray-500 duration-300 top-3 -z-1 origin-0">Enter email address</label>
          <span class="hidden text-sm text-red-600" id="error">Email address is required</span>
        </div>

        <div class="relative z-0 w-full mb-5">
          <input
            type="password"
            name="password"
            placeholder=" "
            class="block w-full px-0 pt-3 pb-2 mt-0 bg-transparent border-0 border-b-2 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-black"
          />
          <label for="password" class="absolute text-gray-500 duration-300 top-3 -z-1 origin-0">Enter password</label>
          <span class="hidden text-sm text-red-600" id="error">Password is required</span>
        </div>

        <fieldset class="relative z-0 w-full p-px mb-5">
          <legend class="absolute text-gray-500 transform scale-75 -top-3 origin-0">Choose an option</legend>
          <div class="block pt-3 pb-2 space-x-4">
            <label>
              <input
                type="radio"
                name="radio"
                value="1"
                class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black"
              />
              Option 1
            </label>
            <label>
              <input
                type="radio"
                name="radio"
                value="2"
                class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black"
              />
              Option 2
            </label>
          </div>
          <span class="hidden text-sm text-red-600" id="error">Option has to be selected</span>
        </fieldset>

        <div class="relative z-0 w-full mb-5">
          <select
            name="select"
            value=""
            onclick="this.setAttribute('value', this.value);"
            class="block w-full px-0 pt-3 pb-2 mt-0 bg-transparent border-0 border-b-2 border-gray-200 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black"
          >
            <option value="" selected disabled hidden></option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
            <option value="4">Option 4</option>
            <option value="5">Option 5</option>
          </select>
          <label for="select" class="absolute text-gray-500 duration-300 top-3 -z-1 origin-0">Select an option</label>
          <span class="hidden text-sm text-red-600" id="error">Option has to be selected</span>
        </div>

        <div class="flex flex-row space-x-4">
          <div class="relative z-0 w-full mb-5">
            <input
              type="text"
              name="date"
              placeholder=" "
              onclick="this.setAttribute('type', 'date');"
              class="block w-full px-0 pt-3 pb-2 mt-0 bg-transparent border-0 border-b-2 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-black"
            />
            <label for="date" class="absolute text-gray-500 duration-300 top-3 -z-1 origin-0">Date</label>
            <span class="hidden text-sm text-red-600" id="error">Date is required</span>
          </div>
          <div class="relative z-0 w-full">
            <input
              type="text"
              name="time"
              placeholder=" "
              onclick="this.setAttribute('type', 'time');"
              class="block w-full px-0 pt-3 pb-2 mt-0 bg-transparent border-0 border-b-2 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-black"
            />
            <label for="time" class="absolute text-gray-500 duration-300 top-3 -z-1 origin-0">Time</label>
            <span class="hidden text-sm text-red-600" id="error">Time is required</span>
          </div>
        </div>

        <div class="relative z-0 w-full mb-5">
          <input
            type="number"
            name="money"
            placeholder=" "
            class="block w-full px-0 pt-3 pb-2 pl-5 mt-0 bg-transparent border-0 border-b-2 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-black"
          />
          <div class="absolute top-0 left-0 mt-3 ml-1 text-gray-400">$</div>
          <label for="money" class="absolute text-gray-500 duration-300 top-3 left-5 -z-1 origin-0">Amount</label>
          <span class="hidden text-sm text-red-600" id="error">Amount is required</span>
        </div>

        <div class="relative z-0 w-full mb-5">
          <input
            type="text"
            name="duration"
            placeholder=" "
            class="block w-full px-0 pt-3 pb-2 pr-12 mt-0 bg-transparent border-0 border-b-2 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-black"
          />
          <div class="absolute top-0 right-0 mt-3 mr-4 text-gray-400">min</div>
          <label for="duration" class="absolute text-gray-500 duration-300 top-3 -z-1 origin-0">Duration</label>
          <span class="hidden text-sm text-red-600" id="error">Duration is required</span>
        </div>

        <button
          id="button"
          type="button"
          class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear bg-pink-500 rounded-lg shadow outline-none hover:bg-pink-600 hover:shadow-lg focus:outline-none"
        >
          Toggle Error
        </button>
      </form>
    </div>
  </div>
  <!-- end order form -->

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


<script>
  'use strict'

  document.getElementById('button').addEventListener('click', toggleError)
  const errMessages = document.querySelectorAll('#error')

  function toggleError() {
    // Show error message
    errMessages.forEach((el) => {
      el.classList.toggle('hidden')
    })

    // Highlight input and label with red
    const allBorders = document.querySelectorAll('.border-gray-200')
    const allTexts = document.querySelectorAll('.text-gray-500')
    allBorders.forEach((el) => {
      el.classList.toggle('border-red-600')
    })
    allTexts.forEach((el) => {
      el.classList.toggle('text-red-600')
    })
  }
</script>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
