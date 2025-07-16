        @include('components/navbar')
        @include('components/header')

        <!-- About Us Section -->
         @include('components/about')

        <!-- Departments Section - Vertical Timeline Layout -->
         @include('components/department')

        <!-- CTA Section -->
        {{-- <section class="py-20 bg-black">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <div class="bg-black/40 backdrop-blur-sm rounded-2xl p-8 md:p-12 border border-gray-800/50">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ready to <span
                            class="gradient-text">Start Your Journey</span> in Film?</h2>
                    <p class="text-gray-300 mb-8 max-w-2xl mx-auto">
                        Join our community of filmmakers and get access to exclusive resources, job opportunities, and
                        networking events.
                    </p>
                    <button
                        class="bg-gradient-to-r from-purple-600 to-blue-500 text-white py-3 px-8 rounded-lg hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-900 transition-all duration-300 transform hover:scale-[1.02]">
                        Join Now
                    </button>
                </div>
            </div>
        </section> --}}

        <!-- Footer -->
       @include('components/footer')