@extends('admin.layouts.index')

@section('admin')
<!-- This is an example component -->


@include('components.styleContact')

  

<div class="flex items-center justify-center min-h-screen bg-white w-full ">
  {{-- Alert --}}
  @include('components.Alert')

  <div class="col-span-12 w-full mx-28">
    <div class="overflow-auto lg:overflow-visible">
      <div class="flex lg:justify-between border-b-2 border-fuchsia-90 pb-1 ">
        <h2 class="text-2xl text-gray-500 font-bold m-auto">Mail-Box
            @if(\Request::route()->getName() == "mailbox.archive")
            <a href="{{ route("mailbox.index") }}">
                <button
                  class="
                    bg-blue-500
                    hover:bg-blue-700
                    text-white
                    text-sm
                    py-1
                    px-3
                    sm
                    rounded-full
                  "
                >
                  Back
                </button>
              </a>
            @else
            <a href="{{ route("mailbox.archive") }}">
                         <button
                           class="
                             bg-blue-500
                             hover:bg-blue-700
                             text-white
                             text-sm
                             py-1
                             px-3
                             sm
                             rounded-full
                           "
                         >
                           Archives
                         </button>
                       </a>
@endif 
        </h2>
        

        <div>
          {{-- <a href="#">
            <button
              class="
                bg-blue-500
                hover:bg-blue-700
                text-white
                py-1
                px-3
                sm
                rounded-full
              "
            >
              All
            </button>
          </a> --}}
          {{-- <a href="#">
            <button
              class="
                bg-blue-500
                hover:bg-blue-700
                text-white
                py-1
                px-3
                sm
                rounded-full
              "
            >
              User
            </button></a
          > --}}
        </div>
      </div>
      <table class="table text-gray-400 border-separate space-y-6 text-sm m-auto">
        <thead class="bg-blue-500 text-white w-full">
          <tr>
            <th class="p-3">Name</th>
            <th class="p-3 text-center">Mail</th>
            <th class="p-3 text-center">Phone</th>
            <th class="p-3 text-center">Sujet</th>
            <th class="p-3 text-center">Message</th>
            <th class="p-3 text-center">Action</th>
          </tr>
        </thead>
        <tbody>
      
       
            @foreach ($contacts as $contact)
            <tr>
                <td >{{ $contact->nom }}</td>
                <td>{{ $contact->email }}</td>
                <td >{{ $contact->phone }}</td>
                <td>{{ $contact->sujet }}</td>
                <td>{{ $contact->msg }}</td>

                <td>
                    @if (!$contact->deleted_at)
                    <a
                    href="{{ route('mailbox.destroy', $contact->id) }}"
                     class="text-red-400 hover:text-gray-100 ml-2"
                   >
                     <i class="material-icons-round text-base">delete_outline</i>
                   </a>
                    @else
                    <button
                    class="
                          bg-blue-500
                          hover:bg-gray-500-700
                          text-white
                          py-1
                          px-3
                          sm
                          rounded-full
                        "><a href="{{ route('mailbox.restore', $contact->id) }}">Restore <i class="fas fa-undo"></i></a></button>
                    
                    @endif
                </td>
               
                <td class="p-3">
                  {{-- <a href="#" class="text-gray-500 hover:text-gray-100 mr-2">
                    <i class="material-icons-outlined text-base">visibility</i>
                  </a> --}}
                  {{-- <a href="#" class="text-yellow-400 hover:text-gray-100 mx-2">
                    <i class="material-icons-outlined text-base">edit</i>
                  </a> --}}
                  
                </td>
            </tr>
        @endforeach

          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
    {{-- <h1>mail box</h1>

    <div class="col-12">
        @if (\Request::route()->getName() != 'mailbox.archive')
            <a href="{{ route('mailbox.archive') }}" class="btn btn-danger">Archives</a>
        @else
            <a href="{{ route('mailbox.index') }}" class="btn btn-primary">Mailbox</a>
        @endif
        <div class="card">

            <div class="card-content">

                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>FULL NAME</th>
                                <th>EMAIL</th>
                                <th>TELEPHONE</th>
                                <th>SUBJECT</th>
                                <th>MESSAGE</th>
                                @if(\Request::route()->getName() != 'mailbox.archive')
                                <th>ACTION</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td class="text-bold-500">{{ $contact->nom }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td class="text-bold-500">{{ $contact->phone }}</td>
                                    <td>{{ $contact->sujet }}</td>
                                    <td>{{ $contact->msg }}</td>

                                    <td>
                                        @if (!$contact->deleted_at)
                                        <a class="btn mt30"href="{{ route('mailbox.destroy', $contact->id) }}"
                                        class="btn btn-warning m-1">Archive</a>
                                        @else
                                        <button class="btn mt30"><a href="{{ route('mailbox.restore', $contact->id) }}">Restore</a></button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
@endsection