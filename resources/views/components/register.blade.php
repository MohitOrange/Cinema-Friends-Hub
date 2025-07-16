@include('components/header')

<!-- Innovative Registration Section -->
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-900 via-purple-900 to-gray-900 p-4">
  <div class="w-full max-w-md">
    <div class="bg-gray-800 bg-opacity-70 backdrop-blur-lg rounded-2xl overflow-hidden shadow-2xl border border-purple-500 border-opacity-30">
      <!-- Animated gradient header -->
      <div class="h-2 bg-gradient-to-r from-purple-500 via-blue-400 to-pink-500 animate-gradient-x"></div>
      
      <div class="px-8 py-6">
        <div class="flex justify-center mb-6">
          <div class="relative">
            <svg class="h-12 w-12 text-purple-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 17L12 12L17 17M12 12V22M19 14V7C19 5.11438 19 4.17157 18.4142 3.58579C17.8284 3 16.8856 3 15 3H9C7.11438 3 6.17157 3 5.58579 3.58579C5 4.17157 5 5.11438 5 7V14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="absolute -bottom-1 -right-1 bg-pink-500 text-xs px-1 py-0.5 rounded-full">join</span>
          </div>
        </div>

        <form method="post" action="/addUser" class="space-y-4">
          @csrf

          <!-- Floating Label Inputs -->
          <div class="relative pb-4">
            <input 
              type="text" 
              id="name" 
              name="name" 
              value="{{ old('name') }}"
              class="peer w-full px-4 py-2 bg-gray-700 rounded-xl  border-b-2 border-gray-600 text-white placeholder-transparent focus:outline-none focus:border-purple-500 transition-colors"
              placeholder=" "
              required
              autofocus
            >
            <label for="name" class="absolute pl-4 left-0 -top-3.5 text-xs text-purple-300 transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-xs peer-focus:text-purple-300">Full Name</label>
            @error('name')
              <p class="mt-1 text-xs text-pink-400 animate-pulse">{{ $message }}</p>
            @enderror
          </div>

          <div class="relative pb-4">
            <input 
              type="text" 
              id="username" 
              name="username" 
              value="{{ old('username') }}"
              class="peer w-full px-4 py-2 bg-gray-700 rounded-xl  border-b-2 border-gray-600 text-white placeholder-transparent focus:outline-none focus:border-blue-400 transition-colors"
              placeholder=" "
              required
            >
            <label for="username" class="absolute pl-4 left-0 -top-3.5 text-xs text-blue-300 transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-xs peer-focus:text-blue-300">Username</label>
            @error('username')
              <p class="mt-1 text-xs text-pink-400 animate-pulse">{{ $message }}</p>
            @enderror
          </div>

          <div class="relative pb-4">
            <input 
              type="email" 
              id="email" 
              name="email" 
              value="{{ old('email') }}"
              class="peer w-full px-4 py-2 bg-gray-700 rounded-xl  border-b-2 border-gray-600 text-white placeholder-transparent focus:outline-none focus:border-pink-400 transition-colors"
              placeholder=" "
              required
            >
            <label for="email" class="absolute pl-4 left-0 -top-3.5 text-xs text-pink-300 transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-xs peer-focus:text-pink-300">Email</label>
            @error('email')
              <p class="mt-1 text-xs text-pink-400 animate-pulse">{{ $message }}</p>
            @enderror
          </div>

          <div class="relative pb-4">
            <input 
              type="password" 
              id="password" 
              name="password" 
              class="peer w-full px-4 py-2 bg-gray-700 rounded-xl  border-b-2 border-gray-600 text-white placeholder-transparent focus:outline-none focus:border-purple-500 transition-colors"
              placeholder=" "
              required
            >
            <label for="password" class="absolute pl-4 left-0 -top-3.5 text-xs text-purple-300 transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-xs peer-focus:text-purple-300">Password</label>
            @error('password')
              <p class="mt-1 text-xs text-pink-400 animate-pulse">{{ $message }}</p>
            @enderror
          </div>

          <div class="relative pb-4">
            <input 
              type="password" 
              id="password_confirmation" 
              name="password_confirmation" 
              class="peer w-full px-4 py-2 bg-gray-700 rounded-xl  border-b-2 border-gray-600 text-white placeholder-transparent focus:outline-none focus:border-blue-400 transition-colors"
              placeholder=" "
              required
            >
            <label for="password_confirmation" class="absolute pl-4 left-0 -top-3.5 text-xs text-blue-300 transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-xs peer-focus:text-blue-300">Confirm Password</label>
          </div>

          <!-- Animated Submit Button -->
          <button 
            type="submit" 
            class="w-full mt-6 px-6 py-2.5 bg-gradient-to-r from-purple-600 to-blue-500 text-white font-medium rounded-full relative overflow-hidden group"
          >
            <span class="relative z-10">Get Started</span>
            <span class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
          </button>

          <!-- Social Login -->
          <div class="text-center text-xs text-gray-400 mt-4">
            or join with
          </div>
          <div class="flex justify-center space-x-4">
            <button type="button" class="p-2 rounded-full bg-gray-700 hover:bg-gray-600 transition-colors">
              <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
              </svg>
            </button>
            <button type="button" class="p-2 rounded-full bg-gray-700 hover:bg-gray-600 transition-colors">
              <svg class="w-5 h-5 text-red-400" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"></path>
              </svg>
            </button>
          </div>

          <p class="text-center text-xs text-gray-400 mt-4">
            Already registered? 
            <a href="{{ route('login') }}" class="text-purple-300 hover:text-pink-300 transition-colors font-medium">Sign in</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</section>

<style>
  .animate-gradient-x {
    background-size: 300% 300%;
    animation: gradient-x 3s ease infinite;
  }
  @keyframes gradient-x {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }
</style>