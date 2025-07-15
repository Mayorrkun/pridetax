<nav class="nav-bar hidden lg:flex" id="navbar">
    <a href="{{route('home')}}" class="h-[50px] flex">
        <img src="{{url('media/logo4.png')}}" alt="" class="h-[60px] mx-auto translate-y-[-10px]">
    </a>

    <ul>
        <li><a  id="home" href="{{route('home')}}">Home</a></li>
        <li ><a id="about" href="{{route('about')}}">About</a></li>
        <li ><a id="services" href="{{route('services')}}">Services</a></li>
        <li ><a id="resources" href="{{route('resources')}}">Resources</a></li>
        <li ><a id="contact" href="{{route('contact')}}">Contact</a></li>
    </ul>


</nav>

<nav class="flex flex-col md:hidden z-[10] pt-[10px] top-0 fixed w-full transition-all duration-300" id="mobile-nav">
<div class="flex">
    <a href="{{route('home')}}"><img src="{{url('media/logo4.png')}}" alt="" class="h-[50px]"></a>

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
