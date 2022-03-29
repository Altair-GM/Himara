@extends('admin.layouts.index')

@section('admin')
    <div class="bg-indigo-100 flex justify-center items-center w-screen">
        {{-- Alert --}}

        <div class="lg:w-2/5 md:w-1/2 w-2/3">
            <form class="bg-white p-10 rounded-lg shadow-lg min-w-full" action="{{ route('admin.info.update') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Changer les infos de contact</h1>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="username">Email</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="email" name="email"
                        id="nom" placeholder="Nom" value="{{ $info->email }}" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Adresse</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="adresse"
                        id="confirm" placeholder="Url" value="{{ $info->adresse }}" />
                </div>

                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Numéro de Téléphone</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="number" name="phone"
                        id="confirm" placeholder="Number" value="{{ $info->phone }}" />
                </div>

                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Numéro de GSM</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="number" name="gsm"
                        id="confirm" placeholder="Number" value="{{ $info->gsm }}" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Site Web</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="site"
                        id="confirm" placeholder="Url" value="{{ $info->site }}" />
                </div>
                    <button type="submit"
                        class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Register</button>
            </form>
        </div>
    </div>
@endsection
