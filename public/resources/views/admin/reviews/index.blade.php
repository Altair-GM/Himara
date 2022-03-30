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
        {{-- Alert --}}

        <div class="col-span-12">
            <div class="overflow-auto lg:overflow-visible">

                <table class="table text-gray-400 border-separate space-y-6 text-sm">
                    <thead class="bg-blue-500 text-white">
                        <tr>
                            <th class="p-3 text-left">Nom</th>
                            <th class="p-3 text-left">Image</th>
                            <th class="p-3 text-left">Location</th>
                            <th class="p-3 text-left">Description</th>
                            <th class="p-3 text-left">Note</th>
                            <th class="p-3 text-left">Chambre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($staffs as $item)
                        <tr class="bg-blue-200 lg:text-black">
                            <td class="p-3 font-medium capitalize">{{ $item->nom }}</td>
                            <td class="p-3">{{ $item->image }}</td>
                            <td class="p-3">{{ $item->location }}</td>
                            <td class="p-3 uppercase">{{ $item->descritpion }}-{{ $item->fin}}</td>
                            <td class="p-3 uppercase">{{ $item->note }} adulte(s)/ {{ $item->enfant}} enfant(s)</td>
                            <td class="p-3">{{ $item->chambre->nom }}</td>
                            

                            <td class="p-3">
                                @if(!$item->valide)
                                <a href="{{route('admin.reservation.valide', $item->id)}}" class="text-yellow-400 hover:text-gray-100 mx-2">
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
