{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
</h2>
</x-slot> --}}
@extends('admin.layouts.index')
@section('admin')

<!--This template is based on: https://dribbble.com/shots/6531694-Marketing-Dashboard by Gregoire Vella -->

<div class="flex flex-row flex-wrap flex-1 flex-grow content-start pl-16">

    <div class="h-40 lg:h-20 w-full flex flex-wrap">
        {{-- <nav id="header"
            class="bg-gray-200 w-full lg:max-w-sm flex items-center border-b-1 border-gray-300 order-2 lg:order-1">

            <div class="px-2 w-full">
                <select name=""
                    class="bg-gray-300 border-2 border-gray-200 rounded-full w-full py-3 px-4 text-gray-500 font-bold leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                    id="form-field2">
                    <option value="Default">default</option>
                    <option value="A">report a</option>
                    <option value="B">report b</option>
                    <option value="C">report c</option>
                </select>
            </div>

        </nav> --}}
        <nav id="header1" class="bg-gray-100 w-auto flex-1 border-b-1 border-gray-300 order-1 lg:order-2">

            <div class="flex h-full justify-between items-center ">

                <!--Menu-->

                <div class="flex justify-end relative inline-block pr-6 w-full">

                    <div class="relative text-sm">
                        <button id="userButton" class="flex items-center focus:outline-none mr-3">
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

    <!--Dash Content -->
    <div id="dash-content" class="bg-gray-200 py-6 lg:py-0 w-full lg:max-w-sm flex flex-wrap content-start">


{{-- {{ {{ {{ {{ {{ {{ Card }} }} }} }} }} }} --}}

        {{-- 
        <div class="w-1/2 lg:w-full">
            <div
                class="border-2 border-gray-400 border-dashed hover:border-transparent hover:bg-white hover:shadow-xl rounded p-6 m-2 md:mx-10 md:my-6">
                <div class="flex flex-col items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full p-3 bg-gray-300"><i
                                class="fa fa-wallet fa-fw fa-inverse text-indigo-500"></i></div>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-3xl">$3249 <span class="text-green-500"><i
                                    class="fas fa-caret-up"></i></span></h3>
                        <h5 class="font-bold text-gray-500">Total Revenue</h5>
                    </div>
                </div>
            </div>
        </div> --}}







    </div>



</div>





@endsection


{{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}
{{-- </x-app-layout> --}}
