@extends('admin.layouts.index')

@section('admin')
    
<!-- component -->
<div class="h-screen flex items-center justify-center bg-amber-50 m-auto w-full" >

  <div id="test" class="grid grid-cols-6 gap-x-4 gap-y-1 max-w-2xl w-screen">

    <!-- Title -->
    <div class="col-span-full mb-3">
      <p class="text-3xl text-gray-600 font-mono font-extrabold text-center"> Caroussel </p>
    </div>

    <!-- Card 1 -->
    <div class="col-span-2">
      <p class="text-xs -translate-y-6 text-white font-semibold sm:-translate-y-8 sm:text-base translate-x-3"> thick soup </p>
      <a href="">
        <img src="https://picsum.photos/seed/1/2000/1000" class="rounded-xl brightness-75" />
      </a>
      <div class="">
        <button class="mb-2 md:mb-0 bg-white px-5 py-0 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
            Edit
        </button>
        {{-- <button class="mb-2 md:mb-0 bg-red-500 border border-red-500 px-5 py-0 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600">Delete</button> --}}
    </div>
    </div>

    <!-- Card 2 -->
    <div class="col-span-2">
      <p class="text-xs -translate-y-6 text-white font-semibold sm:-translate-y-8 sm:text-base translate-x-3"> egg </p>
      <a href="">
        <img src="https://picsum.photos/seed/2/2000/1000" class="rounded-xl brightness-75" />
      </a>
      <div class="">
        <button class="mb-2 md:mb-0 bg-white px-5 py-0 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
            Edit
        </button>
        {{-- <button class="mb-2 md:mb-0 bg-red-500 border border-red-500 px-5 py-0 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600">Delete</button> --}}
    </div>
    </div>

    <!-- Card 3 -->
    <div class="col-span-2">
      <p class="text-xs -translate-y-6 text-white font-semibold sm:-translate-y-8 sm:text-base translate-x-3"> french toast </p>
      <a href="">
        <img src="https://picsum.photos/seed/3/2000/1000" class="rounded-xl brightness-75" />
      </a>
      <div class="">
        <button class="mb-2 md:mb-0 bg-white px-5 py-0 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
            Edit
        </button>
        {{-- <button class="mb-2 md:mb-0 bg-red-500 border border-red-500 px-5 py-0 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600">Delete</button> --}}
    </div>
    </div>

    <!-- Card 4 -->
    <div class="col-span-2">
      <p class="text-xs -translate-y-6 text-white font-semibold sm:-translate-y-8 sm:text-base translate-x-3"> bread </p>
      <a href="">
        <img src="https://picsum.photos/seed/4/2000/1000" class="rounded-xl brightness-75" />
      </a>
      <div class="">
        <button class="mb-2 md:mb-0 bg-white px-5 py-0 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
            Edit
        </button>
        {{-- <button class="mb-2 md:mb-0 bg-red-500 border border-red-500 px-5 py-0 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600">Delete</button> --}}
    </div>
    </div>

    <!-- Card 5 -->
    <div class="col-span-2">
      <p class="text-xs -translate-y-6 text-white font-semibold sm:-translate-y-8 sm:text-base translate-x-3"> pasta </p>
      <a href="">
        <img src="https://picsum.photos/seed/5/2000/1000" class="rounded-xl brightness-75" />
      </a>
      <div class="">
        <button class="mb-2 md:mb-0 bg-white px-5 py-0 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
            Edit
        </button>
        {{-- <button class="mb-2 md:mb-0 bg-red-500 border border-red-500 px-5 py-0 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600">Delete</button> --}}
    </div>
    </div>
    <!-- Card 6 -->
    <div class="col-span-2">
      <p class="text-xs -translate-y-6 text-white font-semibold sm:-translate-y-8 sm:text-base translate-x-3"> pasta </p>
      <a href="">
        <img src="https://picsum.photos/seed/5/2000/1000" class="rounded-xl brightness-75" />
      </a>
      <div class="">
        <button class="mb-2 md:mb-0 bg-white px-5 py-0 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
            Edit
        </button>
        {{-- <button class="mb-2 md:mb-0 bg-red-500 border border-red-500 px-5 py-0 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600">Delete</button> --}}
    </div>
    </div>

  </div>

</div>
@endsection