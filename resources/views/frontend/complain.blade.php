@extends('components.main',['title' =>'complain'])
@section('content')

<!-- Hero Banner Section with Improved Parallax Effect -->
<div class="relative w-full h-[24vh] md:h-[65vh]
            bg-[url('/assets/img/front/complain.jpg')] bg-no-repeat bg-cover bg-fixed bg-center
            flex items-center justify-center overflow-hidden transition-all duration-700">
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/80 flex items-center justify-center">
        <div class="text-center transform transition-all duration-500 ease-in-out hover:scale-105">
            <h1 class="text-white text-3xl md:text-5xl lg:text-6xl font-extrabold uppercase tracking-wider mb-4">We're Here to Help</h1>
            <p class="text-gray-300 text-xl md:text-2xl max-w-2xl mx-auto mb-6">Your satisfaction is our priority</p>
            <div class="h-1 w-32 md:w-48 bg-gradient-to-r from-gray-500 via-white to-gray-500 mx-auto rounded-full"></div>
        </div>
    </div>
</div>

<!-- Enhanced Breadcrumb Navigation with Animation -->
<nav class="bg-white border-b  border-black text-black py-4 px-6 md:px-12 shadow-sm">
    <div class="container mx-auto">
        <ol class="flex items-center space-x-2 text-sm md:text-base">
            <li>
                <a href="#" class="text-gray-700 hover:text-black transition-colors duration-300 flex items-center group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </li>
            <li class="text-gray-900 font-semibold">Complaint Form</li>
        </ol>
    </div>
</nav>

<section class="min-h-screen flex items-center justify-center p-4 bg-gradient-to-br from-white to-gray-100 py-16 ">
    <!-- Main Container with Enhanced Visual Appeal -->
    <div class=" w-full md:p-8 md:p-10
                 overflow-hidden max-w-4xl">

        <!-- Success Message Handling -->
        @if (session('success'))
            <div id="success-message" class="mb-6">
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Thank You!',
                            text: "{{ session('success') }}",
                            timer: 5000,
                            timerProgressBar: true,
                            showConfirmButton: true,
                            confirmButtonText: 'Great!',
                            confirmButtonColor: '#4B5563',
                            backdrop: 'rgba(0,0,0,0.7)'
                        });
                    });
                </script>
            </div>
        @endif

        <!-- Form Section -->
        <div class="max-w-4xl p-8 bg-gradient-to-br from-gray-200/80 to-black/10 backdrop-blur-xl
                   border border-gray-700 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.3)]
                   hover:shadow-[0_8px_40px_rgba(60,60,60,0.2)] overflow-hidden">
            <!-- Form Header with Visual Appeal -->
            <header class="text-center mb-10" autofocus>
                <div class="inline-block p-3 rounded-full bg-gray-100 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Share Your Complain</h1>
                <p class="text-gray-600 max-w-xl mx-auto">We value your feedback and are committed to resolving any issues you may be experiencing. Please fill in the details below so we can assist you promptly.</p>
            </header>

            <!-- Complaint Form with Improved Styling -->
            <form action="{{route('complain.store')}}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <!-- Two-column layout for personal information -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Name Field -->
                    <div class="form-group">
                        <label for="name" class="block text-gray-700 font-medium mb-2">
                            Full Name <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input type="text" id="name" name="name" placeholder="Enter Your Name" value="{{old('name')}}"
                                class="w-full pl-10 px-4 py-3 rounded-lg bg-gray-50 text-gray-800 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent transition-colors"
                            >
                        </div>
                        @error('name')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Phone Field -->
                    <div class="form-group">
                        <label for="phone" class="block text-gray-700 font-medium mb-2">
                            Phone Number <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <input type="tel" id="phone" name="mobile" placeholder="Enter Your Number"  value="{{old('mobile')}}"
                                class="w-full pl-10 px-4 py-3 rounded-lg bg-gray-50 text-gray-800 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent transition-colors"
                               >
                        </div>
                        @error('mobile')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Email Field -->
                <div class="form-group">
                    <label for="email" class="block text-gray-700 font-medium mb-2">
                        Email Address <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <input type="email" id="email" name="email" placeholder="your.email@example.com" value="{{old('email')}}"
                            class="w-full pl-10 px-4 py-3 rounded-lg bg-gray-50 text-gray-800 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent transition-colors"
                            >
                    </div>
                    @error('email')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Warranty Card with Improved Layout -->
                <div class="form-group">
                    <label for="warranty" class="block text-gray-700 font-medium mb-2">
                        Warranty Card Number <span class="text-gray-500 text-sm font-normal">(if applicable)</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <input type="text" id="warranty" name="warentycard_n" placeholder="Enter Warranty Card Number" value="{{old('warentycard_n')}}"
                            class="w-full pl-10 px-4 py-3 rounded-lg bg-gray-50 text-gray-800 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent transition-colors"
                            >
                    </div>
                    @error('warentycard_n')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Complaint Message with Enhanced Styling -->
                <div class="form-group">
                    <label for="complain" class="block text-gray-700 font-medium mb-2">
                        Complaint Details <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <textarea id="complain" name="complain_m" value="{{old('complain_m')}}" rows="6" placeholder="Please describe your issue in detail. Include any relevant information such as product details, date of purchase, and specific problems you're experiencing..."
                            class="w-full px-4 py-3 rounded-lg bg-gray-50 text-gray-800 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent transition-colors">{{ old('complain_m') }}</textarea>
                    </div>
                    {{-- <p class="mt-1 text-sm text-gray-500">Be as specific as possible to help us resolve your issue quickly.</p> --}}
                    @error('complain_m')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- File Attachments with Drop Zone -->
                <div class="form-group">
                    <label class="block text-gray-700 font-medium mb-2">
                        Attachments
                    </label>
                    <div class="relative">
                        <input type="file" name="image" id="file-upload" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" />

                        <div class="flex flex-col items-center justify-center px-4 py-6 rounded-lg bg-gray-50 border-2 border-gray-300 border-dashed hover:bg-gray-100 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <span id="file-name" class="text-gray-500 text-center mb-1 text-sm sm:text-base">Drag files here or click to browse</span>
                        </div>
                    </div>
                    @error('image')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button with Enhanced Animation -->
                <div class="pt-6">
                    <button type="submit"
                        class="w-full px-6 py-4 rounded-lg bg-gray-800 hover:bg-gray-900 text-white font-semibold shadow-md hover:shadow-lg transition-all duration-300 ease-in-out transform hover:translate-y-[-2px] focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 focus:ring-offset-gray-50 relative overflow-hidden group">
                        <span class="relative z-10 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                            Submit Complaint
                        </span>
                        <span class="absolute bottom-0 left-0 w-full h-1 bg-gray-700 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300"></span>
                    </button>
                </div>

                <!-- Privacy Notice -->
                <div class="text-center text-sm text-gray-500 mt-4">
                    By submitting this form, you agree to our
                    <a href="#" class="text-gray-700 hover:underline">Privacy Policy</a> and
                    <a href="#" class="text-gray-700 hover:underline">Terms of Service</a>.
                </div>
            </form>
        </div>
    </div>




    <!-- Enhanced JavaScript for File Upload with Preview -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileUpload = document.getElementById('file-upload');
            const fileName = document.getElementById('file-name');
            const dropZone = fileName.parentElement;

            // File selection handling
            fileUpload.addEventListener('change', function(e) {
                if (e.target.files[0]) {
                    fileName.textContent = e.target.files[0].name;
                    dropZone.classList.add('border-gray-500');
                } else {
                    fileName.textContent = 'Drag files here or click to browse';
                    dropZone.classList.remove('border-gray-500');
                }
            });

            // Drag and drop styling
            ['dragenter', 'dragover'].forEach(eventName => {
                dropZone.addEventListener(eventName, function(e) {
                    e.preventDefault();
                    dropZone.classList.add('bg-gray-200', 'border-gray-500');
                });
            });

            ['dragleave', 'drop'].forEach(eventName => {
                dropZone.addEventListener(eventName, function(e) {
                    e.preventDefault();
                    dropZone.classList.remove('bg-gray-200');
                    if (!fileUpload.files.length) {
                        dropZone.classList.remove('border-gray-500');
                    }
                });
            });
        });
    </script>
</section>

@include('frontend.marquee')

@endsection
