@extends('components.main', ['title' => 'inquiry'])
@section('content')
    <!-- Hero Banner Section with Parallax Effect -->
    <div
        class="relative w-full h-[24vh] md:h-[56vh]
            bg-[url('/assets/img/front/feedback.jpg')] bg-no-repeat bg-cover bg-fixed bg-center
            flex items-center justify-center overflow-hidden transition-all duration-700">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/50 flex items-center justify-center">
            <div class="text-center transform transition-all duration-500 ease-in-out">
                <h1 class="text-white text-4xl md:text-5xl lg:text-6xl font-extrabold uppercase tracking-wider mb-2">Inqury
                </h1>
                <div class="h-1 w-24 md:w-32 bg-gradient-to-r from-gray-500 to-white mx-auto rounded-full"></div>
            </div>
        </div>
    </div>

    <!-- Enhanced Breadcrumb Navigation -->
    <nav class="bg-white border-b border-gray-800 text-black py-4 px-6 md:px-12">
        <div class="container mx-auto">
            <ol class="flex items-center space-x-2 text-sm md:text-base">
                <li>
                    <a href="#" class="text-black hover:text-black transition-colors duration-300 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-black" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </li>
                <li class="text-black font-semibold">Inqury</li>
            </ol>
        </div>
    </nav>

    <div class="min-h-screen flex items-center justify-center p-4 sm:p-6 bg-white my-12">

        <div class="max-w-6xl my-12  w-full p-8 md:p-10
                   bg-gray-200 backdrop-blur-xl
                   border border-gray-700 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.3)]
                   hover:shadow-[0_8px_40px_rgba(60,60,60,0.2)] overflow-hidden">

            <!-- Form Section -->

            @if (session('success'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: "{{ session('success') }}",
                        timer: 5000,
                        showConfirmButton: false
                    });
                </script>
            @endif

            <div class="space-y-6">
                <div class="text-center">
                    <h2 class="text-3xl font-bold text-black mb-2 uppercase tracking-wider">Submit an Inquiry</h2>
                    <p class="text-gray-500 text-opacity-80">We'll get back to you within 24 hours</p>
                </div>

                <form action="{{route('userregister.store')}}" method="post" enctype="multipart/form-data" class="space-y-5">
                    @csrf

                    <!-- Name and Email -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label for="name" class="block text-black font-medium mb-2">Full Name </label>
                            <input type="text" id="name" name="name" value="{{old('name')}}"
                                class="w-full px-4 py-3 rounded-lg bg-gray-400 bg-opacity-20 text-black border border-black border-opacity-30
                                      focus:outline-none focus:ring-2 focus:ring-gray-300 placeholder-gray-500 transition-all duration-200"
                                placeholder="Enter Your Name">
                            @error('name')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-black font-medium mb-2">Email Address </label>
                            <input type="email" id="email" name="email" value="{{old('email')}}"
                                class="w-full px-4 py-3 rounded-lg bg-gray-400 bg-opacity-20 text-black border border-black border-opacity-30
                                      focus:outline-none focus:ring-2 focus:ring-gray-300 placeholder-gray-500 transition-all duration-200"
                                placeholder="Enter Your Email">
                            @error('email')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Phone and City -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label for="mobile" class="block text-black font-medium mb-2">Phone Number </label>
                            <input type="tel" id="mobile" name="mobile" value="{{old('mobile')}}"
                                class="w-full px-4 py-3 rounded-lg bg-gray-400 bg-opacity-20 text-black border border-black border-opacity-30
                                      focus:outline-none focus:ring-2 focus:ring-gray-300 placeholder-gray-500 transition-all duration-200"
                                placeholder="Enter Your Number">
                            @error('mobile')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="city" class="block text-black font-medium mb-2">City </label>
                            <input type="text" id="city" name="city" value="{{old('city')}}"
                                class="w-full px-4 py-3 rounded-lg bg-gray-400 bg-opacity-20 text-black border border-black border-opacity-30
                                      focus:outline-none focus:ring-2 focus:ring-gray-300 placeholder-gray-500 transition-all duration-200"
                                placeholder="Enter Your City">
                            @error('city')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- State and Address -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label for="state" class="block text-black font-medium mb-2">State </label>
                            <input type="text" id="state" name="state" value="{{old('state')}}"
                                class="w-full px-4 py-3 rounded-lg bg-gray-400 bg-opacity-20 text-black border border-black border-opacity-30
                                      focus:outline-none focus:ring-2 focus:ring-gray-300 placeholder-gray-500 transition-all duration-200"
                                placeholder="Enter Your State">
                            @error('state')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="address" class="block text-black font-medium mb-2">Address</label>
                            <textarea id="address" name="address" rows="2"
                                class="w-full px-4 py-3 rounded-lg bg-gray-400 bg-opacity-20 text-black border border-black border-opacity-30
                                      focus:outline-none focus:ring-2 focus:ring-gray-300 placeholder-gray-500 transition-all duration-200"
                                placeholder="Enter Your Address"></textarea>
                            @error('address')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Dealer Selection -->
                    <div>
                        <label for="dealer_and_distributor" class="block text-black font-medium mb-2">Business Type </label>
                        <select id="dealer_and_distributor" name="dealer_and_distributor"
                            class="w-full px-4 py-3 rounded-lg bg-gray-400 bg-opacity-20 text-black border border-black border-opacity-30
                                      focus:outline-none focus:ring-2 focus:ring-gray-300 placeholder-gray-500 transition-all duration-200">
                            <option value="" selected>Select your business type</option>
                            <option value="Dealer">Dealer</option>
                            <option value="Distributor">Distributor</option>
                        </select>
                        @error('dealer_and_distributor')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-2">
                        <button type="submit"
                            class="w-full p-4 rounded-lg bg-black text-white font-semibold uppercase tracking-wide
                               transition-all duration-300 ease-in-out shadow-lg hover:shadow-xl hover:scale-[1.02] active:scale-95">
                            <span class="flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                Submit Inquiry
                            </span>
                        </button>
                    </div>
                </form>
            </div>


        </div>

    </div>

    @include('frontend.marquee')
@endsection
