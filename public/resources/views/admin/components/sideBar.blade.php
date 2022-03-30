    <!-- Side bar-->
    <div id="sidebar" class="h-screen w-16 menu bg-white text-white px-4 flex items-center nunito static fixed shadow">

        <ul class="list-reset ">
            {{-- <h2 class=" text-gray-600" >Modiffications</h2> --}}
            <li class="my-2 md:my-0">
                <a href="{{ route('dashboard') }}"
                    class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fas fa-edit fa-fw mr-3 @if (\Request::route()->getName() == 'dashboard') text-indigo-400 @endif"></i><span
                        class="w-full inline-block pb-1 md:pb-0 text-sm">Home</span>
                </a>
            </li>
            @editor
            <li class="my-2 md:my-0 ">
                <a href="{{ route('admin.chambres') }}"
                    class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fas fa-edit fa-fw mr-3 @if (\Request::route()->getName() == 'admin.chambres') text-indigo-400 @endif"></i><span
                        class="w-full inline-block pb-1 md:pb-0 text-sm">Rooms</span>
                </a>
            </li>
            @endeditor
            <li class="my-2 md:my-0 ">
                <a href="{{ route('admin.reservation') }}"
                    class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fas fa-edit fa-fw mr-3 @if (\Request::route()->getName() == 'admin.reservation') text-indigo-400 @endif"></i><span
                        class="w-full inline-block pb-1 md:pb-0 text-sm">Reservations</span>
                </a>
            </li>
            @admin
            <li class="my-2 md:my-0">
                <a href="{{ route('admin.gallery') }}"
                    class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fa fa-edit fa-fw mr-3 @if (\Request::route()->getName() == 'admin.gallery') text-indigo-400 @endif"></i><span
                        class="w-full inline-block pb-1 md:pb-0 text-sm">Gallery</span>
                </a>
            </li>
            @endadmin
            @admin
            <li class="my-2 md:my-0">
                <a href="{{ route('caroussel') }}"
                    class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fas fa-edit fa-fw mr-3 @if (\Request::route()->getName() == 'carousel') text-indigo-400 @endif"></i><span
                        class="w-full inline-block pb-1 md:pb-0 text-sm">Caroussel</span>
                </a>
            </li>
            @endadmin

            @webmaster
            <li class="my-2 md:my-0">
                <a href="{{ route('admin.article') }}"
                    class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fas fa-edit fa-fw mr-3 @if (\Request::route()->getName() == 'admin.article') text-indigo-400 @endif"></i><span
                        class="w-full inline-block pb-1 md:pb-0 text-sm">Article</span>
                </a>
            </li>
            @endwebmaster
            @admin
            <li class="my-2 md:my-0">
                <a href="{{ route('admin.contact') }}"
                    class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fas fa-edit fa-fw mr-3 @if (\Request::route()->getName() == 'admin.contact') text-indigo-400 @endif"></i><span
                        class="w-full inline-block pb-1 md:pb-0 text-sm">Contact</span>
                </a>
            </li>
            @endadmin
            @admin
            <li class="my-2 md:my-0">
                <a href="{{ route('mailbox.index') }}"
                    class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fa fa-edit fa-fw mr-3 @if (\Request::route()->getName() == 'mailbox.index') text-indigo-400 @endif"></i><span
                        class="w-full inline-block pb-1 md:pb-0 text-sm">Mailing</span>
                </a>
            </li>
            @endadmin
            @webmaster
            <li class="my-2 md:my-0">
                <a href="{{ route('admin.comment') }}"
                    class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fa fa-edit fa-fw mr-3 @if (\Request::route()->getName() == 'admin.comment') text-indigo-400 @endif"></i><span
                        class="w-full inline-block pb-1 md:pb-0 text-sm">Comentaires</span>
                </a>
            </li>
            @endwebmaster
        </ul>

    </div>
