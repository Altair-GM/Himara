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
                            <th class="p-3">Name</th>
                            <th class="p-3 text-left">Mail</th>
                            <th class="p-3 text-left">Phone</th>
                            <th class="p-3 text-left">Sujet</th>

                            <th class="p-3 text-left">Message</th>
                            <th class="p-3 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr class="bg-blue-200 lg:text-black">
                                <td class="p-3 font-medium capitalize">{{ $contact->nom }}</td>
                                <td class="p-3">{{ $contact->email }}</td>
                                <td class="p-3">{{ $contact->phone }}</td>
                                <td class="p-3 uppercase">{{ $contact->sujet }}</td>
                                <td class="p-3 uppercase">{{ $contact->msg }}</td>

                                <td class="p-3">
                                    <a href="#" class="text-gray-500 hover:text-gray-100 mr-2">
                                        <i class="material-icons-outlined text-base">visibility</i>
                                    </a>
                                    <a href="#" class="text-yellow-400 hover:text-gray-100 mx-2">
                                        <i class="material-icons-outlined text-base">edit</i>
                                    </a>
                                    <a href="#" class="text-red-400 hover:text-gray-100 ml-2">
                                        <i class="material-icons-round text-base">delete_outline</i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
