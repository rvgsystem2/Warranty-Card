
<div class="bg-graient-to-br from-blue-50 to-indigo-100d min-h-full flex flex-col items-center justify-center p-6">
    <div class="max-w-6xl w-full">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Trusted by Industry Leaders</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Our partners include some of the most innovative companies in the industry. Hover over the logos to pause the animation.</p>
        </div>

        <div class="marquee-container max-w-full overflow-hidden bg-gray-400 rounded-xl shadow-lg p-6 flex justify-center items-center mb-8 border border-gray-200">
            <div class="marquee-track">
                <!-- First set of images -->
                <div class="flex gap-12 items-center px-6">
                    <div class="flex flex-col items-center group">
                        <div class="h-24 w-48 rounded-lg flex items-center justify-center  transition-all duration-300">
                            <img src="{{asset('assets/img/front/SPINE CRAFT LOGO2.png')}}" alt="">
                        </div>
                        {{-- <p class="text-gray-600 text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity">Ergonomic Solutions</p> --}}
                    </div>
                    <div class="flex flex-col items-center group">
                        <div class="h-24 w-48  rounded-lg flex items-center justify-center  transition-all duration-300">
                           <img src="{{asset('assets/img/front/Royal Signature logo.2.png')}}" alt="">
                        </div>
                        {{-- <p class="text-gray-600 text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity">Luxury Designs</p> --}}
                    </div>
                    <div class="flex flex-col items-center group">
                        <div class="h-24 w-48 rounded-lg flex items-center justify-center  transition-all duration-300">
                            <img src="{{asset('assets/img/front/wakefit logo 2.png')}}" alt="">
                        </div>
                        {{-- <p class="text-gray-600 text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity">Sleep Solutions</p> --}}
                    </div>

                </div>

                <!-- Duplicate set for seamless loop -->
                <div class="flex gap-12 items-center px-6" aria-hidden="true">
                    <div class="flex flex-col items-center group">
                        <div class="h-24 w-48 rounded-lg flex items-center justify-center  transition-all duration-300">
                            <img src="{{asset('assets/img/front/SPINE CRAFT LOGO2.png')}}" alt="">
                        </div>
                        {{-- <p class="text-gray-600 text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity">Sleep Solutions</p> --}}
                    </div>
                    <div class="flex flex-col items-center group">
                        <div class="h-24 w-48 rounded-lg flex items-center justify-center  transition-all duration-300">
                            <img src="{{asset('assets/img/front/Royal Signature logo.2.png')}}" alt="">
                        </div>
                        {{-- <p class="text-gray-600 text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity">Sleep Solutions</p> --}}
                    </div>
                    <div class="flex flex-col items-center group">
                        <div class="h-24 w-48 rounded-lg flex items-center justify-center  transition-all duration-300">
                            <img src="{{asset('assets/img/front/wakefit logo 2.png')}}" alt="">
                        </div>
                        {{-- <p class="text-gray-600 text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity">Sleep Solutions</p> --}}
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const marqueeTrack = document.querySelector('.marquee-track');
            const pauseBtn = document.getElementById('pauseBtn');
            const playBtn = document.getElementById('playBtn');
            const slowBtn = document.getElementById('slowBtn');
            const fastBtn = document.getElementById('fastBtn');

            // Set initial animation
            marqueeTrack.style.animation = 'marquee 20s linear infinite';

            // Pause button functionality
            pauseBtn.addEventListener('click', function() {
                marqueeTrack.style.animationPlayState = 'paused';
            });

            // Play button functionality
            playBtn.addEventListener('click', function() {
                marqueeTrack.style.animationPlayState = 'running';
            });

            // Slow speed button functionality
            slowBtn.addEventListener('click', function() {
                marqueeTrack.style.animationDuration = '30s';
            });

            // Fast speed button functionality
            fastBtn.addEventListener('click', function() {
                marqueeTrack.style.animationDuration = '10s';
            });

            // Touch support for mobile devices
            let touchStartX = 0;
            const marqueeContainer = document.querySelector('.marquee-container');

            marqueeContainer.addEventListener('touchstart', function(e) {
                touchStartX = e.changedTouches[0].screenX;
                marqueeTrack.style.animationPlayState = 'paused';
            });

            marqueeContainer.addEventListener('touchend', function(e) {
                const touchEndX = e.changedTouches[0].screenX;
                // If swipe is greater than 50px, keep paused, else resume
                if (Math.abs(touchEndX - touchStartX) < 50) {
                    setTimeout(() => {
                        marqueeTrack.style.animationPlayState = 'running';
                    }, 1000);
                }
            });
        });
    </script>
</div>
