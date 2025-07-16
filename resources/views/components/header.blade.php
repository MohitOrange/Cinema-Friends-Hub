<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cinema Departments & Roles</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" type="image/svg+xml" href="/images/favicon_logoo.png">
    {{-- <link rel="icon" href="/public/images/favicon.png" type="image/svg+xml"> --}}
    {{-- <link rel="alternate icon" href="/public/svg/favicon.svg" type="image/x-icon"> --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        :root {
            --glow-purple: rgba(168, 85, 247, 0.6);
            --glow-blue: rgba(59, 130, 246, 0.6);
            --glow-pink: rgba(236, 72, 153, 0.6);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #0a0a0a;
            color: #f3f4f6;
        }

        .glow-purple {
            box-shadow: 0 0 15px var(--glow-purple);
        }

        .glow-blue {
            box-shadow: 0 0 15px var(--glow-blue);
        }

        .glow-pink {
            box-shadow: 0 0 15px var(--glow-pink);
        }

        .gradient-text {
            background: linear-gradient(90deg, #a855f7, #3b82f6, #ec4899);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .section-card {
            background: rgba(20, 20, 20, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .section-card:hover {
            transform: translateY(-5px);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .input-field {
            background: rgba(30, 30, 30, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .input-field:focus {
            border-color: #a855f7;
            box-shadow: 0 0 0 3px rgba(168, 85, 247, 0.3);
        }

        .role-chip {
            background: linear-gradient(135deg, rgba(30, 30, 30, 0.8), rgba(50, 50, 50, 0.6));
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .role-chip:hover {
            transform: scale(1.05);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .modal-overlay {
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(5px);
        }

        .modal-content {
            background: linear-gradient(145deg, #111, #1a1a1a);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .scroll-indicator {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-15px);
            }

            60% {
                transform: translateY(-7px);
            }
        }

        .pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }
        }
    </style>
</head>

<body>

    <!-- Main Content -->
   
        <!-- Hero Section -->
        <header class="relative overflow-hidden" role="banner" aria-label="Cinema Friends Hub header">
          <!-- Background gradient -->
          <div class="absolute inset-0 bg-gradient-to-br from-purple-900 via-black to-blue-900 z-0"></div>
                
          <!-- Background image with overlay -->
          <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?q=80&w=2070&auto=format&fit=crop')] bg-cover bg-center mix-blend-overlay opacity-30 z-0"></div>
           

<script>
  // Mobile menu toggle
  document.getElementById('mobile-menu-button').addEventListener('click', function() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
  });
</script>
          <!-- Content -->
          <div class="relative z-10 py-10 sm:px-6 md:px-10 text-center">
            <!-- NEW SVG: Camera + Film Reel + Gradient Sparks -->
            <svg width="300"  viewBox="0 0 300 250" xmlns="http://www.w3.org/2000/svg" class="mx-auto">
              <defs>
                <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="#6B46C1"/>
                  <stop offset="50%" stop-color="#3B82F6"/>
                  <stop offset="100%" stop-color="#EC4899"/>
                </linearGradient>
                <filter id="sparkle">
                  <feGaussianBlur stdDeviation="1.5"/>
                  <feMerge>
                    <feMergeNode/>
                    <feMergeNode in="SourceGraphic"/>
                  </feMerge>
                </filter>
              </defs>

              <!-- Rotated group (45 degrees clockwise around center) -->
              <g transform="rotate(180 150 150)">
                <!-- Camera body -->
                <rect x="70" y="100" width="160" height="100" rx="12" ry="12" fill="url(#grad1)" opacity="0.9"/>

                <!-- Lens -->
                <circle cx="150" cy="150" r="30" fill="black" stroke="white" stroke-width="4"/>
                <circle cx="150" cy="150" r="18" fill="url(#grad1)"/>

                <!-- Film reels (friends) -->
                <circle cx="100" cy="80" r="15" fill="white"/>
                <circle cx="200" cy="80" r="15" fill="white"/>
                <path d="M100 80 Q150 60 200 80" stroke="white" stroke-width="3" fill="none"/>
              </g>

              <!-- Sparkles (positioned in original coordinates) -->
              {{-- <circle cx="60" cy="60" r="3" fill="white" filter="url(#sparkle)"/>
              <circle cx="240" cy="60" r="2" fill="white" filter="url(#sparkle)"/>
              <circle cx="150" cy="40" r="2.5" fill="white" filter="url(#sparkle)"/> --}}

              <!-- Title text (commented out as in original) -->
            </svg>
        
            <!-- Heading -->
            <h1 class="text-5xl md:text-7xl font-bold mb-6">
              <span class="gradient-text animate__animated animate__fadeIn">Cinema Friends</span>
              <span class="text-white animate__animated animate__fadeIn animate__delay-1s">Hub</span>
            </h1>
        
            <!-- Subheading -->
            <p class="text-xl text-gray-300 max-w-3xl mx-auto animate__animated animate__fadeIn animate__delay-2s">
              The definitive guide to film production roles and departments. Discover your path in the movie industry.
            </p>
        
            <!-- Scroll button -->
            {{-- <div class="mt-12 flex justify-center animate__animated animate__fadeIn animate__delay-3s">
              <a href="#departments" class="scroll-indicator flex flex-col items-center text-gray-400 hover:text-white transition-colors">
                <span class="mb-2">Explore</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
              </a>
            </div> --}}
          </div>
      
          <!-- Bottom border -->
          <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-500 via-blue-500 to-pink-500"></div>
        </header>