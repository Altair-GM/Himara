@extends('admin.layouts.index')
@section('admin')
    <!-- This is an example component -->


    <style>
        .table {
            border-spacing: 0 15px;
        }

        i {
            font-size: 1rem !important;
        }

        .table tr {
            border-radius: 20px;
        }

        tr td:nth-child(n + 6),
        tr th:nth-child(n + 6) {
            border-radius: 0 0.625rem 0.625rem 0;
        }

        tr td:nth-child(1),
        tr th:nth-child(1) {
            border-radius: 0.625rem 0 0 0.625rem;
        }

    </style>


    <!-- component -->
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet" />
    <div class="flex items-center justify-center min-h-screen bg-white w-full">


        <div class="col-span-12">
            <div class="overflow-auto lg:overflow-visible">

                <table class="table text-gray-400 border-separate space-y-6 text-sm">
                    <thead class="bg-blue-500 text-white">
                        <tr>
                            <th class="p-3">Name</th>
                            <th class="p-3 text-left">Email</th>
                            <th class="p-3 text-left">Website</th>
                            <th class="p-3 text-left">Telephone</th>
                            <th class="p-3 text-left">Commentaire</th>
                            <th class="p-3 text-center">Photo Profil</th>
                            <th class="p-3 text-left">Article</th>
                            <th class="p-3 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $item)
                        <tr class="bg-blue-200 lg:text-black">
                            <td class="p-3 font-medium capitalize">{{ $item->name }}</td>
                            <td class="p-3">{{ $item->email }}</td>
                            <td class="p-3">{{ $item->telephone ? $item->telephone : '/' }}</td>
                            <td class="p-3 uppercase">{{ $item->website ? $item->website : '/' }}</td>
                            <td class="p-3">{{ $item->commentaire }}</td>
                            <td class="p-3"><img class="mx-auto" width="50%" src="{{ asset('storage/'.$item->photoProfil) }}" alt=""></td>
                            <td class="p-3">{{ $item->article->title }}</td>
                            <td class="p-3">
                                @if(!$item->validate)
                                <a href="{{route('comment.validate', $item->id)}}" class="text-yellow-400 hover:text-gray-100 mx-2">
                                    <i class="material-icons-outlined text-base">Valider</i>
                                </a>
                                @else
                                Validé
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
