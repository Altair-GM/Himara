@extends('admin.layouts.index')

@section('admin')
    <!-- Create by joker banny -->
    <div class="bg-indigo-100 flex justify-center items-center w-screen">
        {{-- Alert --}}

        <div class="lg:w-2/5 md:w-1/2 w-2/3">
            <form class="bg-white p-10 rounded-lg shadow-lg min-w-full" action="{{ route('admin.chambres.store') }}"
                method="post" enctype="multipart/form-data">
                @csrf

                <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Ajouter une chambre</h1>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="nom">Nom</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="nom" id="nom"
                        placeholder="nom" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="prix">Prix</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="number" name="prix"
                        id="prix" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="image">Image</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="file" name="image"
                        id="image" placeholder="image" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="description">Description</label>
                    <textarea class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" name="description"
                        id="description"></textarea>
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="max">Max de personnes</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="number" name="max"
                        id="max" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="lit">Nombre de lits</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="number" name="lit"
                        id="lit" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="sofa">Nombre de sofas</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="number" name="sofa"
                        id="sofa" />
                </div>
                <div class="relative mt-5">
                    <select
                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-state" name="category_chambre_id">
                        @foreach ($category as $item)
                            <option value="{{ $item->id }}">
                                {{ $item->nom }}</option>
                        @endforeach

                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>
                </div>

                <div class="block">
                    <span class="text-gray-700">Tags</span>
                    <div class="mt-2">
                        @foreach ($tags as $item)
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox text-indigo-600" value="{{ $item->id }}"
                                        name="tag[]">
                                    <span class="ml-2">{{ $item->nom }}</span>
                                </label>
                            </div>
                        @endforeach

                    </div>
                </div>
                <button type="submit"
                    class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Enregistrer</button>
            </form>
        </div>
    </div>
@endsection
