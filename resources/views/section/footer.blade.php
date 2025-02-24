<footer class="bg-[#7C6A46] py-4">
    <div
        class="max-w-[1400px] mx-auto flex flex-col md:flex-row justify-between items-start md:items-center px-6 gap-y-8 md:gap-y-0">

        <div class="w-full md:w-1/4"> {{-- Reduced width --}}
            {{-- Company Name and Description --}}
            <span class="font-dancing-script font-semibold text-5xl text-white">Paradise View</span>
            <p class="text-gray-300 mt-2">
                At Paradise View, we strive to provide an unforgettable experience with exceptional service and
                luxurious accommodations. Join us for a serene getaway and let us take care of your every need.
            </p>
        </div>

        <div class="flex flex-col md:flex-row gap-20"> {{-- Keeping original width for links --}}
            {{-- Quick Links --}}
            <div class="flex flex-col gap-2">
                <h3 class="text-white font-semibold">Quick Links</h3>
                <ul class="text-gray-300 space-y-2">
                    <li><a href="#" class="hover:text-white transition-colors">Room Booking</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Rooms</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Explore</a></li>
                </ul>
            </div>

            {{-- Company Links --}}
            <div class="flex flex-col gap-2">
                <h3 class="text-white font-semibold">Company Links</h3>
                <ul class="text-gray-300 space-y-2">
                    <li><a href="#" class="hover:text-white transition-colors">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Refund Policy</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">F.A.Q</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">About</a></li>
                </ul>
            </div>

            {{-- Social Links --}}
            <div class="flex flex-col gap-2">
                <h3 class="text-white font-semibold">Social Links</h3>
                <ul class="text-gray-300 space-y-2">
                    <li><a href="#" class="hover:text-white transition-colors">Facebook</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Instagram</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Twitter</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">LinkedIn</a></li>
                </ul>
            </div>
        </div>

        <div class="w-full md:w-1/4 gap-2"> {{-- Reduced width --}}
            <span class="text-white font-semibold">Newsletter</span>
            <p class="text-gray-300 mt-2">
                Kindly subscribe to our newsletter to get the latest deals on our rooms and vacation discounts.
            </p>
            <form action="#" method="post" class="flex gap-x-2 mt-4">
                @csrf
                <input type="email" name="newsletter" class="flex-grow p-2 rounded-md" placeholder="Enter your email"
                    required>
                <button type="submit"
                    class="bg-white text-[#7C6A46] font-semibold px-4 py-2 rounded-md hover:bg-gray-200 transition-colors">Subscribe</button>
            </form>
        </div>
    </div>

    <div class="mt-8">
        <div class="border-t border-gray-300 my-4"></div>
        <p class="text-center text-gray-300">© Paradise View {{ \Carbon\Carbon::now()->year }}</p>

    </div>
</footer>
