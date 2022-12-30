<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <div>
    <nav class="p-5 bg-white md:flex md:items-center md:justify-between">
      <div>
        <span class="font-mono text-3xl text-slate-500">
          I-TRAVEL
        </span>
      </div>
      <ul class="md:flex md:items-center">
<<<<<<< HEAD
        
=======
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
        <li class="mx-5 my-6 md:my-0">
          <a href="#" class="duration-500 text-x1 hover:text-slate-100">HOME</a>
        </li>
        <li class="mx-5 my-6 md:my-0">
          <a href="#" class="duration-500 text-x1 hover:text-slate-100">VIEWS</a>
        </li>
        <li class="mx-5 my-6 md:my-0">
          <a href="#" class="duration-500 text-x1 hover:text-slate-100">CONTACT US</a>
        </li>
        <button class="py-2 mx-4 font-mono text-white duration-500 rounded px-9 bg-slate-600 hover:bg-slate-300 hover:text-slate-800">
          SIGN UP
        </button>
<<<<<<< HEAD

=======
        
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
      </ul>
    </nav>
  </div>
  <main>
    {{$slot}}
  </main>
</html>
