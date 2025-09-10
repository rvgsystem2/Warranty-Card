@extends('components.main',['title' =>'feedback'])
@section('content')
<!-- Hero Banner Section with Parallax Effect -->
<div class="relative w-full h-[24vh] md:h-[56vh]
            bg-[url('/assets/img/front/feedback.jpg')] bg-no-repeat bg-cover bg-fixed bg-center
            flex items-center justify-center overflow-hidden transition-all duration-700">
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/50 flex items-center justify-center">
        <div class="text-center transform transition-all duration-500 ease-in-out">
            <h1 class="text-white text-4xl md:text-5xl lg:text-6xl font-extrabold uppercase tracking-wider mb-2">Feedback</h1>
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </li>
            <li class="text-black font-semibold">Feedback</li>
        </ol>
    </div>
</nav>

<!-- Main Feedback Section with Glass Morphism -->
<section class="bg-white min-h-screen py-16 px-4 md:px-0">


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

    <div class="container mx-auto max-w-4xl">
        <!-- Form Card with Glass Morphism Effect -->
        <div class=" w-full p-8 md:p-10
                   bg-gradient-to-br from-gray-200/80 to-black/10 backdrop-blur-xl
                   border border-gray-700 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.3)]
                   hover:shadow-[0_8px_40px_rgba(60,60,60,0.2)] overflow-hidden">

            <!-- Form Header -->
            <div class="text-center mb-8 relative">
                <div class="absolute -top-6 -left-6 w-20 h-20 bg-gradient-to-br from-gray-500 to-white to-gray-600 rounded-full opacity-20 blur-xl"></div>

                <h2 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-white to-gray-300 bg-clip-text text-black mb-2">We Value Your Feedback</h2>
                <p class="text-gray-800">Your insights help us deliver an exceptional experience</p>
                <div class="h-1 w-16 md:w-24 bg-gradient-to-r from-gray-500 to-blue-50 mx-auto mt-4 rounded-full"></div>
            </div>

            <!-- Feedback Form with Enhanced UI -->
            <form action="{{route('feedback.store')}}" method="post" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Name Field -->
                    <div class="group">
                        <label for="name" class="block text-gray-900 text-sm font-medium mb-2 transition-all duration-300 group-focus-within:text-black">
                            Full Name
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 group-focus-within:text-gray-900 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input type="text" id="name" name="name"  value="{{old('name')}}"
                                  class="w-full py-3 pl-10 pr-4 rounded-lg bg-gray-100/70 text-black border border-gray-700
                                        focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent
                                        transition-all duration-300 placeholder-gray-500"
                                  placeholder="Your name">
                                  @error('name')
                                    <p><span class="mt-1 text-sm text-red-500">{{$message}}</span></p>
                                  @enderror
                        </div>
                    </div>

                    <!-- Email Field -->
                    <div class="group">
                        <label for="email" class="block text-black text-sm font-medium mb-2 transition-all duration-300 group-focus-within:text-black">
                            Email Address
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 group-focus-within:text-gray-400 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <input type="email" id="email" name="email"  value="{{old('email')}}"
                                  class="w-full py-3 pl-10 pr-4 rounded-lg bg-gray-100/70 text-black border border-gray-700
                                        focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent
                                        transition-all duration-300 placeholder-gray-500"
                                  placeholder="your.email@example.com">
                                  @error('email')
                                  <p><span class=" mt-1 text-sm text-red-500">{{$message}}</span></p>
                                @enderror
                        </div>
                    </div>
                </div>

                <!-- Rating Field with Interactive Stars -->
                <div>
                    <label for="rating" class="block text-gray-900 text-sm font-medium mb-2">Your Rating</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                        <select id="rating" name="rating"  value="{{old('rating')}}"
                                class="w-full appearance-none py-3 pl-10 pr-8 rounded-lg bg-gray-200/70 text-black border border-gray-700
                                      focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent
                                      transition-all duration-300">
                            <option value="excellent">Select your rating</option>
                            <option value="excellent">★★★★★ Excellent</option>
                            <option value="very good">★★★★☆ - Very Good</option>
                            <option value="good">★★★☆☆ - Good</option>
                            <option value="fair">★★☆☆☆ - Fair</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Comments Field -->
                <div>
                    <label for="comments" class="block text-gray-900 text-sm font-medium mb-2">Your Feedback</label>
                    <div class="relative">
                        <textarea id="comments" name="comments" value="{{old('comments')}}"
                                 class="w-full py-3 px-4 rounded-lg bg-gray-100/70 text-black border border-gray-700
                                       focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent
                                       transition-all duration-300 resize-none h-32 placeholder-gray-600"
                                 placeholder="Please share your thoughts with us..."></textarea>
                                 @error('comments')
                                 <p><span class="mt-1 text-sm text-red-500">{{ $message}}</span></p>
                             @enderror
                    </div>

                </div>

                <!-- Submit Button with Hover Effect -->
                <div class="pt-4">
                    <button type="submit"
                            class="w-full py-4 px-6 rounded-lg bg-black hover:to-black
                                  text-white font-semibold text-sm md:text-base tracking-wide
                                  transform hover:-translate-y-1 transition-all duration-300
                                  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 focus:ring-offset-gray-900
                                  shadow-lg hover:shadow-xl hover:shadow-blue-500/20">
                        <span class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                            Submit Feedback
                        </span>
                    </button>
                </div>

                <!-- Privacy Notice -->
                <div class="text-center text-xs text-gray-500 mt-6">
                    <p>Your feedback is confidential and will only be used to improve our services.</p>
                </div>
            </form>
        </div>
    </div>
</section>


@include('frontend.marquee')

@endsection
