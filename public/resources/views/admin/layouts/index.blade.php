<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tailwind Starter Template - Minimal Admin Template: Tailwind Toolbox</title>
        <meta name="description" content="description here">
        <meta name="keywords" content="keywords,here">
    
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
    
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
        <!--Replace with your tailwind.css once created-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
        @include('admin.components.style')
    </head>
<body  class="flex h-screen bg-gray-100 font-sans">
     @include('admin.components.sideBar')
     <div class="flex flex-row flex-wrap flex-1 flex-grow content-start pl-16 ">
{{-- Alert --}}
@include('components.Alert')

        <div class="h-40 lg:h-20 w-full flex flex-wrap">
    
            <nav id="header1" class="bg-gray-100 w-auto flex-1 border-b-1 border-gray-300 order-1 lg:order-2">
    
                <div class="flex justify-center m-auto items-center h-full">
                    <a href="{{ route("home") }}">
                        <img src="{{ asset('storage/'.$navLogo->url) }}" alt="Hotel Himara" >
                    </a>
    
                </div>
                <div class="flex h-full justify-between items-center ">
    
                    <!--Menu-->
    
                    <div class="flex justify-end relative inline-block pr-6 w-full">
    
                        <div class="relative text-sm">
                            <button id="userButton" class="flex items-center focus:outline-none mr-3 w-full">
                                <img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of User">
                                <span class="hidden md:inline-block">Hi, User </span>
                                <svg class="pl-2 h-2" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                                    <g>
                                        <path
                                            d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z">
                                        </path>
                                    </g>
                                </svg>
                            </button>
                            <div id="userMenu"
                                class="bg-white nunito rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                                <ul class="list-reset">
                                    <li><a href="#"
                                            class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 hover:text-white no-underline hover:no-underline">My
                                            account</a></li>
                                    <li><a href="#"
                                            class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 hover:text-white no-underline hover:no-underline">Notifications</a>
                                    </li>
                                    <li>
                                        <hr class="border-t mx-2 border-gray-400">
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
    
                                            <button type="submit"
                                                class=" w-full px-4 py-2 block text-gray-900 hover:bg-indigo-400 hover:text-white no-underline hover:no-underline ">
                                                {{ __('Log Out') }}
                                            </button>
                                        </form>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- / Menu -->
                    
                </div>
                
            </nav>
        </div>
        @yield('admin')
        
        <!--Dash Content -->
        {{-- <div id="dash-content" class="bg-gray-200 py-6 lg:py-0 w-full lg:max-w-sm flex flex-wrap content-start">
  
    
        </div> --}}
    
    
    
    </div>
    
    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    @include('admin.components.script')
</body>
</html>