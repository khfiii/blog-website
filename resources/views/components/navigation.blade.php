<div class="navbar bg-primary">
    <div class="navbar-start lg:px-16">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-white rounded-box w-52 text-coklat">
                <li><a href="{{route('blog')}}" class="{{ request()->is('blog') ? 'bg-hijau text-kuning' : '' }}">BLOG</a></li>
                <li><a>JOURNAL</a></li>
                <li><a>BOOK REVIEWS</a></li>
                <li><a>NEWSLETTER</a></li>
                <li><a>COURSES</a></li>
            </ul>
        </div>
        <a href="{{ route('home')}}" class="btn btn-xs text-hijau bg-primary border-none text-sm font-normal">AKHSAN ZIDAN</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1 text-hijau">
            <li><a href="{{route('blog')}}" class="{{ request()->is('blog') ? 'bg-hijau text-kuning' : '' }}">BLOG</a></li>
            <li><a>JOURNAL</a></li>
            <li><a>BOOK REVIEWS</a></li>
            <li><a>NEWSLETTER</a></li>
            <li><a>COURSES</a></li>
        </ul>
    </div>
    <div class="navbar-end lg:px-16">
        <a class="btn btn-xs text-hijau bg-primary border-none text-sm font-normal">ABOUT ME</a>
    </div>
</div>
