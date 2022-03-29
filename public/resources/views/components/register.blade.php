@if (Route::has('login'))

@auth
<li class="menu-item menu-btn">

    <a class="btn" href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> Dashboard</a>
</li>
@else
<li class="menu-item menu-btn">

    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><i class="fa fa-user"></i> Log in</a>
</li> 

@if (Route::has('register'))
<li class="menu-item menu-btn">
    <a  href="{{ route('register') }}" class=" text-sm text-gray-700 dark:text-gray-500 underline btn"  ><i class="fa fa-user"></i> Register</a>
</li>
@endif
@endauth

@endif
