@extends('admin.layouts.index')

@section('admin')
    <!-- Create by joker banny -->
    <div class="bg-indigo-100 flex justify-center items-center w-screen">


        <div class="lg:w-2/5 md:w-1/2 w-2/3">
            <form class="bg-white p-10 rounded-lg shadow-lg min-w-full" action="{{ route('admin.gallery.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Ajouter Image </h1>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="username">Nom</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="nom" id="nom"
                        placeholder="Nom" />
                </div>
                <div>


                    <div>
                        <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Image url</label>
                        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="file" name="url"
                            id="confirm" placeholder="Url" />
                    </div>
                    <div class="relative mt-5">
                        <select
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state" name="category_image_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->nom }}</option>
                            @endforeach

                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                        <button type="submit"
                            class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Register</button>
            </form>
        </div>
    </div>
@endsection
