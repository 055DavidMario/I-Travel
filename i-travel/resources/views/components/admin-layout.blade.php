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
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }
    </style>
</head>
<body class="flex bg-gray-100 font-family-karla">
    <aside class="relative hidden w-64 h-screen shadow-xl bg-sidebar sm:block">
        <div class="p-6">
            <a href="index.html" class="text-3xl font-semibold text-white uppercase hover:text-gray-300">Admin</a>
            <button class="flex items-center justify-center w-full py-2 mt-5 font-semibold bg-white rounded-tr-lg rounded-bl-lg rounded-br-lg shadow-lg cta-btn hover:shadow-xl hover:bg-gray-300">
                <i class="mr-3 fas fa-plus"></i> New Report
            </button>
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
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                    <a href="{{ route('logout') }}" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
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
            {{ $slot }}
        </main>

            <footer class="w-full p-4 text-right bg-white">
                Built by <a target="_blank" href="https://davidgrzyb.com" class="underline">David Grzyb</a>.
            </footer>
        </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>
