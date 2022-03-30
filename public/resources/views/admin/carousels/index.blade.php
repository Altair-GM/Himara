@extends('admin.layouts.index')

@section('admin')
    
<!-- component -->
<div class="flex items-center justify-center bg-amber-50 m-auto w-full" >


  <div id="test" class="grid grid-cols-6 gap-x-4 gap-y-1 max-w-2xl w-screen">

    <!-- Title -->
    <div class="col-span-full mb-3">
      <p class="text-3xl text-gray-600 font-mono font-extrabold text-center"> Caroussel </p>
    </div>
    @foreach ($carousels as $carousel)
      
    <!-- Card 1 -->
    <div class="col-span-2">
      <p class="text-xs -translate-y-6 text-white font-semibold sm:-translate-y-8 sm:text-base translate-x-3"> thick soup </p>
      <a href="">
        <img src="{{ asset('storage/'.$carousel->url) }}" class="rounded-xl brightness-75" />
      </a>
      <div class="">
        <a href="{{ route('admin.carousel.edit', $carousel->id) }}" class="mb-2 md:mb-0 bg-white px-5 py-0 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
          Edit
        </a>
        {{-- <button class="mb-2 md:mb-0 bg-red-500 border border-red-500 px-5 py-0 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600">Delete</button> --}}
      </div>
    </div>
    @endforeach


  </div>

</div>
@endsection