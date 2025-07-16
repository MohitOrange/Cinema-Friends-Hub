@include('components/header')

<div class="m-20 group relative w-[300px] h-[400px] p-4 rounded-xl flex flex-col items-center text-center bg-[rgba(113,113,113,0.6)] backdrop-blur-xl border border-white overflow-hidden">
  <!-- Background blur effect -->
  <div class="absolute -top-[5%] -left-[5%] -z-10 h-[110%] w-[110%] bg-gradient-to-r from-[#0f0c29] via-[#302b63] to-[#24243e] blur-[30px]"></div>
  
  <!-- Hover text -->
  <div class="scale-100 transition-transform duration-500 group-hover:scale-0 group-hover:hidden">
  <div class="group relative p-6 rounded-xl bg-[rgba(113,113,113,0.6)] backdrop-blur-xl border border-white overflow-hidden">
    
    <!-- Background blur effect -->
    <div class="absolute -top-[5%] -left-[5%] -z-10 h-[110%] w-[110%] bg-gradient-to-r from-[#0f0c29] via-[#302b63] to-[#24243e] blur-[30px]"></div>
    
    <!-- Info Table -->
    <table class="w-full text-white font-mono">
      <tr class="border-b border-white/20">
        <td class="py-3 pr-4 opacity-70">Name:</td>
        <td class="py-3 font-medium">Mohit</td>
      </tr>
      <tr class="border-b border-white/20">
        <td class="py-3 pr-4 opacity-70">Age:</td>
        <td class="py-3 font-medium">20</td>
      </tr>
      <tr class="border-b border-white/20">
        <td class="py-3 pr-4 opacity-70">Gender:</td>
        <td class="py-3 font-medium">Male</td>
      </tr>
      <tr>
        <td class="pt-3 pr-4 opacity-70">To Become A:</td>
        <td class="pt-3 font-medium text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-300">Director</td>
      </tr>
    </table>
  </div>

  <!-- About Section -->
  <div class="mt-4">
    <p class="flex justify-start text-sm font-bold">About Me</p>
    <p class="text-left text-sm font-semibold text-yellow-400">
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo in alias
    </p>
  </div>
</div>

  
  <!-- Profile image/svg -->
  <figure class="w-full h-[65%] rounded-xl overflow-hidden transform rotate-[45deg] scale-0 transition-transform duration-600 ease-in-out delay-100 group-hover:rotate-0 group-hover:scale-100">
    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" class="fill-white drop-shadow-[0_0_2px_#0f0c29]">
      <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8 0-1.168.258-2.275.709-3.276.154.09.308.182.456.276.396.25.791.5 1.286.688.494.187 1.088.312 1.879.312.792 0 1.386-.125 1.881-.313s.891-.437 1.287-.687.792-.5 1.287-.688c.494-.187 1.088-.312 1.88-.312s1.386.125 1.88.313c.495.187.891.437 1.287.687s.792.5 1.287.688c.178.067.374.122.581.171.191.682.3 1.398.3 2.141 0 4.411-3.589 8-8 8z"></path>
      <circle cx="8.5" cy="12.5" r="1.5"></circle>
      <circle cx="15.5" cy="12.5" r="1.5"></circle>
    </svg> --}}
    <img src="/images/mohit1.jpeg" alt="My image">
  </figure>
  
  <!-- Profile info -->
  <div class="pt-6 flex flex-col transform scale-0 transition-transform duration-600 ease-in-out delay-100 group-hover:scale-100">
    <span class="text-white text-2xl tracking-wider">
      Mohit
    </span>
    <span class="font-semibold text-red-600 uppercase text-lg tracking-wider">Director</span>
    
    <!-- Social links -->
    <div class="w-full flex items-center justify-center gap-4 mt-4">
      <!-- Facebook -->
      <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 24 24" class="fill-white p-3 bg-[rgba(128,128,128,0.211)] rounded-xl cursor-pointer transition-all duration-300 hover:bg-blue-500 hover:-translate-y-2 hover:shadow-lg">
        <path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"></path>
      </svg>
      
      <!-- Instagram -->
      <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 24 24" class="fill-white p-3 bg-[rgba(128,128,128,0.211)] rounded-xl cursor-pointer transition-all duration-300 hover:bg-gradient-to-r hover:from-[#8a2387] hover:via-[#e94057] hover:to-[#f27121] hover:-translate-y-2 hover:shadow-lg">
        <path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path>
        <circle cx="16.806" cy="7.207" r="1.078"></circle>
        <path d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"></path>
      </svg>
      
      <!-- Twitter -->
      <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 24 24" class="fill-white p-3 bg-[rgba(128,128,128,0.211)] rounded-xl cursor-pointer transition-all duration-300 hover:bg-[rgb(25,173,206)] hover:-translate-y-2 hover:shadow-lg">
        <path d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z"></path>
      </svg>
      
      <!-- LinkedIn -->
      <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 24 24" class="fill-white p-3 bg-[rgba(128,128,128,0.211)] rounded-xl cursor-pointer transition-all duration-300 hover:bg-[rgb(30,48,131)] hover:-translate-y-2 hover:shadow-lg">
        <circle cx="4.983" cy="5.009" r="2.188"></circle>
        <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
      </svg>
    </div>
  </div>
</div>