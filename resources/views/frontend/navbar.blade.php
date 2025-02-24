<nav class="max-w-[1512px] h-[120px] mx-auto flex items-center justify-between bg-white px-6">
    <!-- Logo -->
    <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-10">

    <!-- Nav Links -->
    <div class="flex flex-col sm:flex-row justify-between items-center w-full sm:w-auto gap-8">
        <ul class="hidden md:flex space-x-[60px]">
            <li>
                <a href="#"
                    class="text-gray-700 text-[16px] font-semibold hover:font-bold hover:text-[#7C6A46] hover:border-b-2 hover:border-[#7C6A46] transition">
                    Home
                </a>
            </li>
            <li>
                <a href="#"
                    class="text-gray-700 text-[16px] font-semibold hover:font-bold hover:text-[#7C6A46] hover:border-b-2 hover:border-[#7C6A46] transition">
                    Explore
                </a>
            </li>
            <li>
                <a href="#"
                    class="text-gray-700 text-[16px] font-semibold hover:font-bold hover:text-[#7C6A46] hover:border-b-2 hover:border-[#7C6A46] transition">
                    About
                </a>
            </li>
            <li>
                <a href="#"
                    class="text-gray-700 text-[16px] font-semibold hover:font-bold hover:text-[#7C6A46] hover:border-b-2 hover:border-[#7C6A46] transition">
                    Contact
                </a>
            </li>
        </ul>
    </div>


    <!-- Book Now Button -->
    <div class="hidden md:block">
        <a href="#"
            class="bg-[#A38C5D] text-[16px] text-white px-8 py-2 rounded-md hover:bg-[#7C6A46] transition">Book
            Now</a>
    </div>

    <!-- Mobile Menu Button -->
    <button class="md:hidden block text-[#7C6A46] focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
    </button>
</nav>
