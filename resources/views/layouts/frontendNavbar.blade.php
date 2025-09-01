<nav class="bg-[#fcfcfc] shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)]">
    <div class="container flex items-center justify-between py-3 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Logo -->
        <!-- Logo -->
        <div class="flex items-center">
            <a href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-[70px] w-[100px] object-contain">
            </a>
        </div>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex space-x-8 text-[#111111] font-semibold font-heading text-sm">
            <a href="{{ route('home') }}"
                class="relative {{ request()->routeIs('home') ? 'text-pink-500 after:w-full' : 'text-black hover:text-pink-500 after:w-0 hover:after:w-full' }} after:content-[''] after:absolute after:h-[1.5px] after:bg-pink-500 after:left-0 after:-bottom-1 after:transition-all after:duration-300 font-heading m-0">
                Home
            </a>
            <a href="{{ route('about') }}"
                class="relative {{ request()->routeIs('about') ? 'text-pink-500 after:w-full' : 'text-black hover:text-pink-500 after:w-0 hover:after:w-full' }} after:content-[''] after:absolute after:h-[1.5px] after:bg-pink-500 after:left-0 after:-bottom-1 after:transition-all after:duration-300 font-heading">
                About us
            </a>
            <a href="{{ route('services') }}"
                class="relative {{ request()->routeIs('services') ? 'text-pink-500 after:w-full' : 'text-black hover:text-pink-500 after:w-0 hover:after:w-full' }} after:content-[''] after:absolute after:h-[1.5px] after:bg-pink-500 after:left-0 after:-bottom-1 after:transition-all after:duration-300 font-heading">
                Services
            </a>
            <a href="{{ route('clients') }}"
                class="relative {{ request()->routeIs('clients') ? 'text-pink-500 after:w-full' : 'text-black hover:text-pink-500 after:w-0 hover:after:w-full' }} after:content-[''] after:absolute after:h-[1.5px] after:bg-pink-500 after:left-0 after:-bottom-1 after:transition-all after:duration-300 font-heading">
                Clients
            </a>
            <a href="{{ route('portfolio') }}"
                class="relative {{ request()->routeIs('portfolio') ? 'text-pink-500 after:w-full' : 'text-black hover:text-pink-500 after:w-0 hover:after:w-full' }} after:content-[''] after:absolute after:h-[1.5px] after:bg-pink-500 after:left-0 after:-bottom-1 after:transition-all after:duration-300 font-heading">
                Portfolio
            </a>
            <a href="{{ route('teams') }}"
                class="relative {{ request()->routeIs('teams') ? 'text-pink-500 after:w-full' : 'text-black hover:text-pink-500 after:w-0 hover:after:w-full' }} after:content-[''] after:absolute after:h-[1.5px] after:bg-pink-500 after:left-0 after:-bottom-1 after:transition-all after:duration-300 font-heading">
                Our Teams
            </a>
            <a href="{{ route('blog') }}"
                class="relative {{ request()->routeIs('blog') ? 'text-pink-500 after:w-full' : 'text-black hover:text-pink-500 after:w-0 hover:after:w-full' }} after:content-[''] after:absolute after:h-[1.5px] after:bg-pink-500 after:left-0 after:-bottom-1 after:transition-all after:duration-300 font-heading">
                Blogs
            </a>
            <a href="{{ route('contact') }}"
                class="relative {{ request()->routeIs('contact') ? 'text-pink-500 after:w-full' : 'text-black hover:text-pink-500 after:w-0 hover:after:w-full' }} after:content-[''] after:absolute after:h-[1.5px] after:bg-pink-500 after:left-0 after:-bottom-1 after:transition-all after:duration-300 font-heading">
                Contact Us
            </a>
        </ul>

        <!-- Request Quote Button -->
        <div class="md:block">
            <a href="#quoteForm"
                class="bg-pink-500 hover:bg-pink-600 text-white font-semibold px-4 py-3 rounded-sm font-heading text-sm hidde">
                Request a Quote
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="menu-btn" class="text-gray-700 focus:outline-none">
                <!-- Hamburger Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white px-4 pb-4">
        <ul class="space-y-4 font-semibold">
            <li><a href="#" class="text-pink-600">Home</a></li>
            <li><a href="{{route('about')}}">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Clients</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Teams</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact us</a></li>
            <li>
                <a href="#" class="block bg-pink-500 text-white text-center py-2 rounded-md">
                    Request a Quote
                </a>
            </li>
        </ul>
    </div>
</nav>

<script>
// Toggle Mobile Menu
document.getElementById('menu-btn').addEventListener('click', function() {
    document.getElementById('mobile-menu').classList.toggle('hidden');
});
</script>