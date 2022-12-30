<!-- component -->
<!-- Dark mode not enabled -->
<html>
    <head>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login I-Travel</title>
        <meta name="author" content="name">
        <meta name="description" content="description here">
        <meta name="keywords" content="keywords,here">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      
        <!--Replace with your tailwind.css once created-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        
        
        <!-- Shortcut Web Icon -->
        <link rel="shortcut icon" href="/img/logo2.png">
        </head>
        
    <body>
            <!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ]
  }
  ```
-->

<!-- <div class="fb-login-button" >Login with Facebook</div> -->
<div class="flex items-center justify-center min-h-screen px-4 py-12 bg-blue-100 sm:px-6 lg:px-8">
 
   
 
    <img  style="border:20px;margin:50px;float:left;width:500px;height: 500px;" class="object-cover" src="/img/login.png">
     <hr>

    <div class="w-full max-w-md space-y-8">
        
      <div>

        <img class="w-auto h-12 mx-auto" src="/img/logo2.png" alt="I-Travel">
        <h2 class="mt-6 text-3xl font-bold text-center text-gray-900">
          Register your account
        </h2>
        <p class="mt-2 text-sm text-center text-gray-600">
          Or
          <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500">
          Already Register
          </a>
        </p>
      </div>

      
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

      <form class="mt-8 space-y-6" method="POST" action="{{ route('register') }}">
      @csrf
      <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
        <div class="gap-4">
          <div class="form-group mb-6">
            <label for="name" :value="__('Name')"></label>
            <input type="text" class="form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="name"
              aria-describedby="emailHelp123" placeholder="Name" name="name" :value="old('name')" required autofocus>
          </div>
        </div>
        <div class="form-group mb-6">
          <label for="email" :value="__('Email')"></label>
          <input type="email" class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email" type="email" name="email" :value="old('email')" required
            placeholder="Email address">
        </div>
        <div class="form-group mb-6">
          <label for="password" :value="__('Password')"></label>
          <input type="password" class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="password"
            placeholder="Password"
            type="password"
            name="password"
            required autocomplete="new-password">
        </div>
        <div class="form-group mb-6">
          <label for="password_confirmation" :value="__('Confirm Password')"></label>
          <input type="password" class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="password_confirmation" placeholder="Password Confirmation"
            name="password_confirmation" required>
        </div>
        
        <button type="submit" class="
          w-full
          px-6
          py-2.5
          bg-blue-600
          text-white
          font-medium
          text-xs
          leading-tight
          uppercase
          rounded
          shadow-md
          hover:bg-blue-700 hover:shadow-lg
          focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
          active:bg-blue-800 active:shadow-lg
          transition
          duration-150
          ease-in-out">Sign up</button>

    </div>
      </form>
    </div>
  </div>

  <footer class="text-gray-600 body-font">
    <div class="container flex flex-col items-center px-5 py-8 mx-auto sm:flex-row">
      <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/1200px-Facebook_f_logo_%282019%29.svg.png" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 p-2 text-white rounded-full bg-white-500" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Facebook</span>
      </a>
      <p class="mt-4 text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0">© 2021 Facebook —
        <a href="https://www.instagram.com/aliraza.ramzan2005/" class="ml-1 text-gray-600" rel="noopener noreferrer" target="_blank">@aliraza.ramzan2005</a>
      </p>
      <span class="inline-flex justify-center mt-4 sm:ml-auto sm:mt-0 sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
       
        </body>
</html>