<section class="font-raleway relative bg-cover bg-center bg-no-repeat py-16 px-6 text-center"
    style="background-image: url('/assets/hotel-rooms-bg.png');">

    {{-- Overlay Filter --}}
    <div class="absolute inset-0 bg-[#7C6A46] opacity-70"></div>

    {{-- Content (Ensures text is on top) --}}
    <div class="relative z-10 max-w-7xl mx-auto">

        {{-- Section Header --}}
        <div class="mb-12">
            <h2 class="font-medium text-[50px] text-white relative inline-block pb-4">
                Luxurious Room
                <span class="absolute left-1/2 -translate-x-1/2 bottom-0 w-[140px] h-[6px] bg-white"></span>
            </h2>
            <p class="text-lg text-white mt-4">
                All rooms are designed for your comfort.
            </p>
        </div>

        {{-- Section Body (3 Room Cards) --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- Card 1 --}}
            <div class="bg-white shadow-lg rounded-md overflow-hidden">
                <img src="{{ asset('assets/deluxe-suite.jpg') }}" alt="Luxury Room"
                    class="w-full h-[250px] object-cover">
                <div class="p-6 text-left">
                    <h3 class="font-poppins text-xl font-semibold text-[#7C6A46]">Deluxe Suite</h3>
                    <p class="text-gray-600 mt-2">King-size bed, private balcony, and stunning views.</p>
                    <ul class="mt-4 text-gray-700 space-y-2">
                        <li><i class="fa-solid fa-bed text-[#7C6A46] mr-2"></i>King-size Bed</li>
                        <li><i class="fa-solid fa-tv text-[#7C6A46] mr-2"></i>Smart TV</li>
                        <li><i class="fa-solid fa-wifi text-[#7C6A46] mr-2"></i>Free Wi-Fi</li>
                    </ul>

                </div>
            </div>

            {{-- Card 2 --}}
            <div class="bg-white shadow-lg rounded-md overflow-hidden">
                <img src="{{ asset('assets/executive-suite.jpg') }}" alt="Luxury Room"
                    class="w-full h-[250px] object-cover">
                <div class="p-6 text-left">
                    <h3 class="font-poppins text-xl font-semibold text-[#7C6A46]">Executive Suite</h3>
                    <p class="text-gray-600 mt-2">Spacious luxury with modern amenities.</p>
                    <ul class="mt-4 text-gray-700 space-y-2">
                        <li><i class="fa-solid fa-bath text-[#7C6A46] mr-2"></i>Private Jacuzzi</li>
                        <li><i class="fa-solid fa-coffee text-[#7C6A46] mr-2"></i>Complimentary Coffee</li>
                        <li><i class="fa-solid fa-concierge-bell text-[#7C6A46] mr-2"></i>24/7 Room Service</li>
                    </ul>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="bg-white shadow-lg rounded-md overflow-hidden">
                <img src="{{ asset('assets/presidential-suite.jpg') }}" alt="Luxury Room"
                    class="w-full h-[250px] object-cover">
                <div class="p-6 text-left">
                    <h3 class="font-poppins text-xl font-semibold text-[#7C6A46]">Presidential Suite</h3>
                    <p class="text-gray-600 mt-2">The ultimate luxury experience.</p>
                    <ul class="mt-4 text-gray-700 space-y-2">
                        <li><i class="fa-solid fa-couch text-[#7C6A46] mr-2"></i>Private Lounge</li>
                        <li><i class="fa-solid fa-swimming-pool text-[#7C6A46] mr-2"></i>Private Pool</li>
                        <li><i class="fa-solid fa-spa text-[#7C6A46] mr-2"></i>Exclusive Spa Access</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

</section>
