{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
</h2>
</x-slot> --}}
@extends('admin.layouts.index')
@section('admin')
    <!--This template is based on: https://dribbble.com/shots/6531694-Marketing-Dashboard by Gregoire Vella -->

    <div class="mx-auto my-5 ">
        <h1 class="font-extrabold  text-3xl text-gray-500">Bienvenue a Votre Dashboard {{ Auth::user()->name }}</h1>
        

            <img class="w-full rounded-full w-0.5" src="{{ asset("storage/cjZmQY8.gif") }}" alt="">
        

        
    </div>
@endsection