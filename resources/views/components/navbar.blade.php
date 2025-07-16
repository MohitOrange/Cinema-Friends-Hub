<nav class="bg-black border-b border-gray-800/50 backdrop-blur-sm sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <a href="/" class="flex items-center">
          <svg class="h-8 w-8" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <linearGradient id="navGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#6B46C1"/>
                <stop offset="50%" stop-color="#3B82F6"/>
                <stop offset="100%" stop-color="#EC4899"/>
              </linearGradient>
            </defs>
            <rect x="6" y="10" width="20" height="12" rx="2" fill="url(#navGradient)"/>
            <circle cx="16" cy="16" r="6" fill="black" stroke="white" stroke-width="1"/>
            <circle cx="16" cy="16" r="3" fill="url(#navGradient)"/>
          </svg>
          <span class="ml-2 text-xl font-bold bg-gradient-to-r from-purple-400 via-blue-400 to-pink-400 bg-clip-text text-transparent">CinemaFriends</span>
        </a>
      </div>
  
      <!-- Desktop Menu -->
      <div class="hidden md:block">
        <div class="ml-10 flex items-center space-x-8">
          <a href="/" class="px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300 {{ request()->is('/') ? 'text-purple-300 underline underline-offset-4 decoration-2' : 'text-white hover:text-purple-300' }}">
            Home
          </a>
          <a href="#about" class="px-3 py-2 rounded-md text-sm font-medium text-white hover:text-blue-300 transition-colors duration-300">
            About Us
          </a>
          <a href="#departments" class="px-3 py-2 rounded-md text-sm font-medium text-white hover:text-pink-300 transition-colors duration-300">
            Departments
          </a>
          <a href="/login" class="px-3 py-2 rounded-md text-sm font-medium text-white hover:text-blue-300 transition-colors duration-300">
            Login
          </a>
          <a href="/register" class="ml-4 px-4 py-2 rounded-md text-sm font-medium text-white bg-gradient-to-r from-purple-600 to-blue-500 hover:from-purple-700 hover:to-blue-600 transition-all duration-300 shadow-lg hover:shadow-purple-500/20">
            Register
          </a>
        </div>
      </div>
  
      <!-- Mobile menu button -->
      <div class="md:hidden">
        <button class="text-gray-300 hover:text-white focus:outline-none" id="mobile-menu-button">
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu (hidden by default) -->
  <div class="md:hidden hidden" id="mobile-menu">
    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-gray-900/80 backdrop-blur-lg">
      <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-purple-300 hover:bg-gray-800/50 transition-colors duration-300">
        Home
      </a>
      <a href="/about" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-blue-300 hover:bg-gray-800/50 transition-colors duration-300">
        About Us
      </a>
      <a href="/departments" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-pink-300 hover:bg-gray-800/50 transition-colors duration-300">
        Departments
      </a>
      <a href="/login" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-blue-300 hover:bg-gray-800/50 transition-colors duration-300">
        Login
      </a>
      <a href="/register" class="block px-3 py-2 mt-2 rounded-md text-base font-medium text-center text-white bg-gradient-to-r from-purple-600 to-blue-500 hover:from-purple-700 hover:to-blue-600 transition-all duration-300">
        Register
      </a>
    </div>
  </div>
</nav>