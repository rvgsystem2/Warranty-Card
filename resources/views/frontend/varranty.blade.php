@extends('components.main', ['title' => 'warrenty'])
@section('content')
    <!-- Hero Banner Section with Parallax Effect -->
    <div
        class="relative w-full h-[24vh] md:h-[56vh]
      bg-[url('/assets/img/front/bg-img.jpg')] bg-no-repeat bg-cover bg-center
  flex items-center justify-center overflow-hidden transition-all duration-700">
        <div class="absolute
         inset-0 bg-gradient-to-b from-black/30 to-black/40 flex items-center justify-center">
            <div class="text-center transform transition-all duration-500 ease-in-out">
                <h1 class="text-white text-4xl md:text-5xl lg:text-6xl font-extrabold uppercase tracking-wider mb-2">Warranty
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
                <li class="text-black font-semibold">Warranty Cards</li>
            </ol>
        </div>
    </nav>


    <section class="bg-white min-h-full flex items-center justify-center p-4 sm:p-6 mt-12 ">
        <div class="max-w-6xl w-full bg-gray-200  backdrop-blur-md shadow-xl rounded-2xl p-6 sm:p-8 border border-black">

            <!-- Left Section (Form) -->

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
                <!-- Form Header -->
                <div class="text-center">
                    <h1 class="text-2xl sm:text-3xl font-bold text-black mb-2">Warranty Registration</h1>
                    <p class="text-black text-opacity-80 text-sm sm:text-base">Register your product to activate your
                        warranty coverage</p>
                </div>

                <!-- Registration Form -->
                <form action="{{ route('warentycard.store') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-4">
                    @csrf

                    <!-- Personal Information Section -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Full Name -->
                        <div>
                            <label for="name" class="block text-black font-medium mb-1">Full Name
                            </label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                class="w-full px-4 py-3 rounded-lg bg-gray-100 text-black border border-black
                                      focus:outline-none focus:ring-2 focus:ring-gray-300 placeholder-black placeholder-opacity-50 transition-all"
                                placeholder="Enter Your Name">
                            @error('name')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-black font-medium mb-1">Email Address
                            </label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                class="w-full px-4 py-3 rounded-lg bg-gray-100 text-black border border-black
                                      focus:outline-none focus:ring-2 focus:ring-gray-300 placeholder-black placeholder-opacity-50 transition-all"
                                placeholder="Enter Your Email">
                            @error('email')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Contact Information Section -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-black font-medium mb-1">Phone Number</label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                class="w-full px-4 py-3 rounded-lg bg-gray-100 text-black border border-black
                                      focus:outline-none focus:ring-2 focus:ring-gray-300 placeholder-black placeholder-opacity-50 transition-all"
                                placeholder="Enter Your Number">
                            @error('phone')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- City -->
                        <div>
                            <label for="city" class="block text-black font-medium mb-1">City</label>
                            <input type="text" id="city" name="city" value="{{ old('city') }}"
                                class="w-full px-4 py-3 rounded-lg bg-gray-100 text-black border border-black
                                      focus:outline-none focus:ring-2 focus:ring-gray-300 placeholder-black placeholder-opacity-50 transition-all"
                                placeholder="Enter Your City">
                            @error('city')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Product Information Section -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- State -->
                        <div>
                            <label for="state" class="block text-black font-medium mb-1">State/Province</label>
                            <input type="text" id="state" name="state" value="{{ old('state') }}"
                                class="w-full px-4 py-3 rounded-lg bg-gray-100 text-black border border-black
                                      focus:outline-none focus:ring-2 focus:ring-gray-300 placeholder-black placeholder-opacity-50 transition-all"
                                placeholder="Enter Your State">
                            @error('state')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Serial Number -->
                        <div>
                            <label for="productsln" class="block text-black font-medium mb-1">Product Serial Number</label>
                            <input type="text" id="productsln" name="productsln" value="{{ old('productsln') }}"
                                class="w-full px-4 py-3 rounded-lg bg-gray-100 text-black border border-black
                                      focus:outline-none focus:ring-2 focus:ring-gray-300 placeholder-black placeholder-opacity-50 transition-all"
                                placeholder="Enter Your Product No.">
                            @error('productsln')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Purchase Information Section -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Date of Purchase -->
                        <div>
                            <label for="purchase_date" class="block text-black font-medium mb-1">Purchase Date</label>
                            <input type="date" id="purchase_date" name="purchase_date"
                                class="w-full px-4 py-3 rounded-lg bg-gray-100 text-black border border-black
                                      focus:outline-none focus:ring-2 focus:ring-gray-300 placeholder-black placeholder-opacity-50 transition-all">
                            @error('purchase_date')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Purchase From -->
                        <div>
                            <label for="purchaseform" class="block text-black font-medium mb-1">Purchased From</label>
                            <input type="text" id="purchaseform" name="purchaseform"
                                value="{{ old('purchaseform') }}"
                                class="w-full px-4 py-3 rounded-lg bg-gray-100 text-black border border-black
                                      focus:outline-none focus:ring-2 focus:ring-gray-300 placeholder-black placeholder-opacity-50 transition-all"
                                placeholder="Purchase Form">
                            @error('purchaseform')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Terms & Conditions -->
                    <div class="pt-2">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" name="terms" type="checkbox"
                                    class="w-4 h-4 rounded bg-white bg-opacity-30 border border-white border-opacity-50 focus:ring-teal-300 focus:ring-2">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-medium text-black text-opacity-90">I agree to the <a
                                        href="#" class="text-gray-800 hover:underline">terms and
                                        conditions</a></label>
                                @error('terms')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full mt-6 px-6 py-3 rounded-lg bg-gray-800 hover:bg-gray-900 text-white font-semibold
                               transition-all duration-300 shadow-md hover:shadow-lg flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4">
                            </path>
                        </svg>
                        Register Warranty
                    </button>
                </form>
            </div>


        </div>
    </section>

    @include('frontend.marquee')


@endsection
