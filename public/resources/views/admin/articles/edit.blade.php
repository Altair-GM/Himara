@extends('admin.layouts.index')

@section('admin')
    <!-- Create by joker banny -->
    <div class="bg-indigo-100 flex justify-center items-center w-screen">

        <div class="lg:w-2/5 md:w-1/2 w-2/3">
            <form class="bg-white p-10 rounded-lg shadow-lg min-w-full"
                action="{{ route('admin.article.update', $articles->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Editer un article</h1>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="title">Title</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="title"
                        id="title" placeholder="title" value="{{ $articles->title }}" />
                </div>

                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="img">Image</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="file" name="img" id="img"
                        placeholder="img" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="description">Description</label>
                    <textarea class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" name="description"
                        id="description">{{ $articles->description }}</textarea>
                </div>

                <div class="relative mt-5">
                    <select
                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-state" name="category_article_id">
                        @foreach ($category as $item)
                            <option @if ($item->id == $articles->category_article_id) selected @endif value="{{ $item->id }}">
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
                                    <input @if ($articles->tags->contains($item->id)) checked @endif type="checkbox"
                                        class="form-checkbox text-indigo-600" value="{{ $item->id }}" name="tag[]">
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
