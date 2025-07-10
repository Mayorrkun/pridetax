<nav class="nav-bar hidden lg:flex" id="navbar">
    <div></div>

    <ul>
        <li id="home"><a href="{{route('home')}}">Home</a></li>
        <li id="about"><a href="{{route('about')}}">About</a></li>
        <li id="services"><a href="{{route('services')}}">Services</a></li>
        <li id="resources"><a href="{{route('resources')}}">Resources</a></li>
        <li id="contact"><a href="{{route('contact')}}">Contact</a></li>
    </ul>


</nav>

<nav class="flex flex-col md:hidden z-[10] pt-[10px] top-0 fixed w-full transition-all duration-300" id="mobile-nav">
<div class="flex">
    <button class="ml-auto" id="nav-menu-btn"><i class="bx-menu bx text-white text-[40px]"></i></button>
</div>
    <ul class="nav-list bg-white overflow-hidden" id="nav-list">
        <li ><a class="py-[10px] px-[10px] border-b-[2px] border-b-[#c1b513] block font-[600]  text-[#000]" href="{{route('home')}}">Home</a></li>
        <li ><a class="py-[10px] px-[10px] border-b-[2px] border-b-[#c1b513] block font-[600]  text-[#000]" href="{{route('about')}}">About</a></li>
        <li ><a class="py-[10px] px-[10px] border-b-[2px] border-b-[#c1b513] block font-[600]  text-[#000]" href="{{route('services')}}">Service</a></li>
        <li ><a class="py-[10px] px-[10px] border-b-[2px] border-b-[#c1b513] block font-[600]  text-[#000]" href="{{route('resources')}}">Resources</a></li>
        <li ><a class="py-[10px] px-[10px] border-b-[2px] border-b-[#c1b513] block font-[600]  text-[#000]" href="{{route('contact')}}">Contact</a></li>
    </ul>
</nav>
