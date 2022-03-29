@extends('admin.layouts.index')

@section('admin')
    <div class="bg-indigo-100 flex justify-center items-center w-screen">


        <div class="lg:w-2/5 md:w-1/2 w-2/3">
            <form class="bg-white p-10 rounded-lg shadow-lg min-w-full"
                action="{{ route('admin.carousel.update', $carousel->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Changer l'image </h1>
                


                    <div>
                        <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Image url</label>
                        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="file" name="url"
                            id="confirm" placeholder="Url" value="{{$carousel->url}}"/>
                    </div>
                    
                        <button type="submit"
                            class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Enregistrer</button>
            </form>
        </div>
    </div>
@endsection
