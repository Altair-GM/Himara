    <!-- Side bar-->
    <div id="sidebar" class="h-screen w-16 menu bg-white text-white px-4 flex items-center nunito static fixed shadow">
        
        <ul class="list-reset ">
            {{-- <h2 class=" text-gray-600" >Modiffications</h2> --}}
            <li class="my-2 md:my-0">
                <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fas fa-edit fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Home</span>
                </a>
            </li>
            <li class="my-2 md:my-0 ">
                <a href="{{ route('admin.chambres') }}" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fas fa-edit fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Rooms</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="{{ route("admin.gallery") }}" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fa fa-edit fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Gallery</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="{{ route("caroussel") }}" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fas fa-edit fa-fw mr-3 text-indigo-400"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Caroussel</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="{{ route("admin.article") }}" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fas fa-edit fa-fw mr-3 text-indigo-400"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Article</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="{{ route('admin.contact') }}" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fas fa-edit fa-fw mr-3 text-indigo-400"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Contact</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="{{ route("mailbox.index") }}" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fa fa-edit fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Mailing</span>
                </a>
            </li>
        </ul> 

    </div>
