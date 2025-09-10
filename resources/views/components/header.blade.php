<!-- Topbar -->
{{-- <div class=" bg-gradient-to-b from-gray-900 to-gray-200 py-3 px-4">
    <!-- Desktop View -->
    <div class="hidden md:flex justify-center md:justify-between items-center space-x-8">
        <img src="{{ asset('assets/img/front/SpineKraft.png') }}" alt="Weakerock Logo"
            class="h-12 object-contain max-w-sm">
        <img src="{{ asset('assets/img/front/Royal Signature logo..png') }}" alt="Royal Signature Logo"
            class="h-12 object-contain max-w-lg">
        <img src="{{ asset('assets/img/front/weakerock.png') }}" alt="SpineKraft Logo"
            class="h-12 object-contain  max-w-sm">
    </div>

    <!-- Mobile View (only visible on small screens) -->
    <div class="flex md:hidden justify-center items-center gap-6 flex-wrap pb-2">
        <img src="{{ asset('assets/img/front/SPINE CRAFT LOGO2.png') }}" alt="SpineKraft Logo"
            class="h-14 object-contain max-w-[90px] rounded-lg hover:scale-105 transition-transform duration-300">

        <img src="{{ asset('Roy') }}" alt="Royal Signature Logo"
            class="h-14 object-contain max-w-[90px] rounded-lg hover:scale-105 transition-transform duration-300">

        <img src="{{ asset('assets/img/front/weakerock.png') }}" alt="Weakerock Logo"
            class="h-14 object-contain max-w-[90px] rounded-lg hover:scale-105 transition-transform duration-300">
    </div>


</div> --}}


<!-- Navbar -->
{{-- <nav class="bg-black bg-opacity-80 backdrop-blur-md shadow-lg border-b border-white border-opacity-30">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="lg:hidden text-white focus:outline-none" aria-label="Toggle menu">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex flex-1 justify-center">
            <ul class="flex space-x-6 text-white text-lg">
                <li><a href="{{ route('feedback') }}" class="hover:text-yellow-300 transition">Feedback</a></li>
                <li><a href="{{ route('complain') }}" class="hover:text-yellow-300 transition">Complain</a></li>
                <li><a href="{{ route('user_rec') }}" class="hover:text-yellow-300 transition">User Requirement</a></li>
                <li><a href="{{ route('inqury') }}" class="hover:text-yellow-300 transition">Inquiry</a></li>
                <li><a href="{{ route('varranty') }}" class="hover:text-yellow-300 transition">Warranty</a></li>
            </ul>
        </div>
    </div>

   <!-- Mobile Menu -->
<div id="mobile-menu" class="hidden lg:hidden absolute inset-x-0 top-full bg-black bg-opacity-90 p-4 rounded-lg text-white text-lg shadow-lg z-50">
    <ul class="space-y-2">
        <li><a href="{{ route('feedback') }}" class="block py-2 hover:text-yellow-300 transition">Feedback</a></li>
        <li><a href="{{ route('complain') }}" class="block py-2 hover:text-yellow-300 transition">Complain</a></li>
        <li><a href="{{ route('user_rec') }}" class="block py-2 hover:text-yellow-300 transition">User Requirement</a></li>
        <li><a href="{{ route('inqury') }}" class="block py-2 hover:text-yellow-300 transition">Inquiry</a></li>
        <li><a href="{{ route('varranty') }}" class="block py-2 hover:text-yellow-300 transition">Warranty</a></li>
    </ul>
</div>

</nav>

<!-- JavaScript for Mobile Menu Toggle -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const menuBtn = document.getElementById("menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");

        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
    });
</script> --}}


<!-- Navbar -->
<nav class="bg-white bg-opacity-80 backdrop-blur-md shadow-lg border-b border-black border-opacity-30 relative z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="lg:hidden text-black focus:outline-none" aria-label="Toggle menu">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex flex-1 justify-center">
            <ul class="flex space-x-6 text-black text-lg">
                <li><a href="{{ route('varranty') }}" class="hover:text-red-300 transition">Warranty</a></li>
                <li><a href="{{ route('inqury') }}" class="hover:text-red-300 transition">Distributor/dealer inquiry</a>
                </li>
                <li><a href="{{ route('feedback') }}" class="hover:text-red-300 transition">Feedback</a></li>
                <li><a href="{{ route('complain') }}" class="hover:text-red-300 transition">Complains</a></li>
                <li><a href="https://www.guptagaddasamrat.com/" class="hover:text-red-300 transition">Products</a></li>

            </ul>


        </div>


        @if (session('error'))
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: "{{ session('error') }}",
                        timer: 5000,
                        showConfirmButton: false
                    });
                });
            </script>
        @endif

        {{-- <div class="flex justify-end mx-4">
            <form action="{{route('search')}}" method="GET" class="w-full max-w-sm">
                <div class="flex border border-gray-300 rounded-lg overflow-hidden">
                    <input type="text" name="search" placeholder="Search..."
                        class="w-full px-4 py-2 outline-none border-none">
                    <button type="submit" class="bg-blue-500 text-white px-2 py-2 hover:bg-blue-600">
                        Search
                    </button>
                </div>
            </form>
        </div> --}}
        <!-- Button to Open Modal -->
        <button onclick="openModal()" type="button" class="bg-blue-600 text-white font-semibold py-2 px-4 rounded">
            Check Your Warranty Status
        </button>

        <!-- Modal Overlay -->
        <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden mt-24">
            <!-- Modal Content -->
            <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md relative">

                <!-- Close Button -->
                <button onclick="closeModal()"
                    class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-xl font-bold">x</button>

                <!-- The Form -->
                <form action="{{ route('search') }}" id="searchForm" method="GET">
                    <h2 class="text-xl font-semibold mb-4 text-center">Search Warranty Status</h2>
                    <div class="flex border border-gray-300 rounded-lg overflow-hidden">
                        <input type="text" name="search" placeholder=" search your warenty_card_no..."
                            class="w-full px-4 py-2 outline-none border-none">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 hover:bg-blue-600">
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- JavaScript -->
        <script>
            function openModal() {
                document.getElementById('modal').classList.remove('hidden');
            }

            function closeModal() {
                document.getElementById('modal').classList.add('hidden');
            }
        </script>



    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="hidden absolute left-0 top-full w-full bg-black bg-opacity-90 p-4 rounded-lg text-white text-lg shadow-lg z-50 transition-transform transform scale-95 opacity-0">
        <ul class="space-y-2">
            <li><a href="{{ route('varranty') }}" class="block py-2 hover:text-yellow-300 transition">Warranty</a></li>
            <li><a href="{{ route('inqury') }}" class="block py-2 hover:text-yellow-300 transition">Distributor/dealer
                    inquiry</a></li>
            <li><a href="{{ route('feedback') }}" class="block py-2 hover:text-yellow-300 transition">Feedback</a></li>
            <li><a href="{{ route('complain') }}" class="block py-2 hover:text-yellow-300 transition">Complains</a>
            </li>
            <li><a href="https://www.guptagaddasamrat.com/"
                    class="block py-2 hover:text-yellow-300 transition">Products</a></li>



        </ul>
    </div>
</nav>

<!-- JavaScript for Mobile Menu -->

{{-- <script>
    function openForm(){
        let serchForm = document.getElementById('serchForm');
        serchForm.classList.remove('hidden');
    }
</script> --}}
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const menuBtn = document.getElementById("menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");

        menuBtn.addEventListener("click", () => {
            const isOpen = !mobileMenu.classList.contains("hidden");
            if (isOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        document.addEventListener("click", (event) => {
            if (!mobileMenu.contains(event.target) && !menuBtn.contains(event.target)) {
                closeMenu();
            }
        });

        function openMenu() {
            mobileMenu.classList.remove("hidden", "scale-95", "opacity-0");
            mobileMenu.classList.add("scale-100", "opacity-100");
        }

        function closeMenu() {
            mobileMenu.classList.add("scale-95", "opacity-0");
            setTimeout(() => {
                mobileMenu.classList.add("hidden");
            }, 200); // Delay to allow transition
        }
    });
</script>
