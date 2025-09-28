<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnHub - Members Area & Video Tutorials</title>
    <script src="https://cdn.tailwindcss.com"></script>
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
    <link rel="stylesheet" href="css/all.min.css">
    <style>
        /* Custom CSS for video player and animations */
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }
        
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .member-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .progress-ring__circle {
            transition: stroke-dashoffset 0.35s;
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Login Modal -->
    <div id="loginModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Member Login</h3>
                <form action="login.php" method="POST" class="mt-2 px-7 py-3">
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700 text-left">Email</label>
                        <input type="email" name="email" required class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700 text-left">Password</label>
                        <input type="password" name="password" required class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <div class="items-center px-4 py-3">
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            Login
                        </button>
                    </div>
                    <p class="text-sm text-gray-500 mt-3">Don't have an account? <a href="#" class="text-indigo-600 hover:text-indigo-500">Sign up</a></p>
                </form>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-graduation-cap text-indigo-600 text-2xl mr-2"></i>
                        <span class="text-xl font-bold text-gray-900">LearnHub</span>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="#" class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Home</a>
                        <a href="#tutorials" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Tutorials</a>
                        <a href="#membership" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Membership</a>
                        <a href="#features" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Features</a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">Sign In</button>
                    <button class="ml-4 bg-white hover:bg-gray-100 text-indigo-600 px-4 py-2 rounded-md text-sm font-medium border border-indigo-600 transition duration-300">Sign Up</button>
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <button id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <span class="sr-only">Open main menu</span>
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <a href="#" class="bg-indigo-50 border-indigo-500 text-indigo-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Home</a>
                <a href="#tutorials" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Tutorials</a>
                <a href="#membership" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Membership</a>
                <a href="#features" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Features</a>
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-base font-medium transition duration-300">Sign In</button>
                    <button class="w-full mt-3 bg-white hover:bg-gray-100 text-indigo-600 px-4 py-2 rounded-md text-base font-medium border border-indigo-600 transition duration-300">Sign Up</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-indigo-700">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8 lg:flex lg:justify-between">
            <div class="text-center lg:text-left lg:w-1/2">
                <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl sm:tracking-tight lg:text-6xl lg:tracking-tight">
                    Master New Skills With Our Video Tutorials
                </h1>
                <p class="mt-3 max-w-md mx-auto text-lg text-indigo-200 sm:text-xl md:mt-5 md:max-w-3xl">
                    Join thousands of members learning from our expert instructors. Access premium content, community support, and personalized learning paths.
                </p>
                <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow">
                        <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                            Start Learning Free
                        </a>
                    </div>
                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                        <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-500 bg-opacity-60 hover:bg-opacity-70 md:py-4 md:text-lg md:px-10">
                            Explore Membership
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-12 lg:mt-0 lg:w-1/2 flex justify-center">
                <div class="w-full max-w-md bg-white rounded-lg shadow-xl overflow-hidden">
                    <div class="p-4 bg-indigo-600">
                        <h3 class="text-lg font-medium text-white">Featured Tutorial Preview</h3>
                    </div>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/9No-FiEInLA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-4">
                        <h4 class="text-lg font-semibold text-gray-900">Getting Started with JavaScript</h4>
                        <p class="mt-1 text-gray-600">Learn the fundamentals of JavaScript in this beginner-friendly tutorial.</p>
                        <div class="mt-3 flex items-center text-sm text-gray-500">
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <span>4.8 (1,245 reviews)</span>
                            <span class="mx-2">•</span>
                            <span>45 min</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div id="features" class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Features</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    A better way to learn online
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Our platform combines high-quality video tutorials with a supportive community and powerful learning tools.
                </p>
            </div>

            <div class="mt-10">
                <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                            <i class="fas fa-video text-xl"></i>
                        </div>
                        <div class="ml-16">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">High-Quality Video Tutorials</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Professionally produced courses with clear explanations and practical examples.
                            </p>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                            <i class="fas fa-users text-xl"></i>
                        </div>
                        <div class="ml-16">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Exclusive Members Community</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Connect with other learners, ask questions, and share knowledge in our private forums.
                            </p>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                            <i class="fas fa-chart-line text-xl"></i>
                        </div>
                        <div class="ml-16">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Progress Tracking</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Monitor your learning journey with detailed progress reports and personalized recommendations.
                            </p>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                            <i class="fas fa-mobile-alt text-xl"></i>
                        </div>
                        <div class="ml-16">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Mobile Friendly</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Learn on the go with our mobile-optimized platform that works on all devices.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Tutorials Section -->
    <div id="tutorials" class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Popular Video Tutorials
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                    Browse our most popular courses across all categories
                </p>
            </div>
            
            <div class="mt-12 grid gap-8 lg:grid-cols-3">
                <!-- Tutorial Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/PkZNo7MFNFg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center">
                            <span class="inline-block px-2 py-1 text-xs font-semibold text-indigo-800 bg-indigo-100 rounded-full">Beginner</span>
                            <span class="ml-2 text-xs text-gray-500">JavaScript</span>
                        </div>
                        <h3 class="mt-2 text-xl font-semibold text-gray-900">JavaScript Crash Course</h3>
                        <p class="mt-3 text-base text-gray-500">
                            Learn JavaScript fundamentals in this comprehensive crash course for beginners.
                        </p>
                        <div class="mt-4 flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/women/12.jpg" alt="Instructor">
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Sarah Johnson</p>
                                <div class="flex text-sm text-gray-500">
                                    <time datetime="2020-03-16">Mar 16, 2023</time>
                                    <span class="mx-1">•</span>
                                    <span>1h 15m</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tutorial Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/1Rs2ND1ryYc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center">
                            <span class="inline-block px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">Intermediate</span>
                            <span class="ml-2 text-xs text-gray-500">CSS</span>
                        </div>
                        <h3 class="mt-2 text-xl font-semibold text-gray-900">CSS Grid & Flexbox Mastery</h3>
                        <p class="mt-3 text-base text-gray-500">
                            Master modern CSS layout techniques with Grid and Flexbox through practical examples.
                        </p>
                        <div class="mt-4 flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Instructor">
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Michael Chen</p>
                                <div class="flex text-sm text-gray-500">
                                    <time datetime="2020-03-10">Feb 28, 2023</time>
                                    <span class="mx-1">•</span>
                                    <span>2h 10m</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tutorial Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/jfKfPfyJRdk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center">
                            <span class="inline-block px-2 py-1 text-xs font-semibold text-red-800 bg-red-100 rounded-full">Advanced</span>
                            <span class="ml-2 text-xs text-gray-500">React</span>
                        </div>
                        <h3 class="mt-2 text-xl font-semibold text-gray-900">React Hooks Deep Dive</h3>
                        <p class="mt-3 text-base text-gray-500">
                            Explore React Hooks in depth and learn how to build efficient functional components.
                        </p>
                        <div class="mt-4 flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/women/44.jpg" alt="Instructor">
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Emily Rodriguez</p>
                                <div class="flex text-sm text-gray-500">
                                    <time datetime="2020-02-12">Jan 15, 2023</time>
                                    <span class="mx-1">•</span>
                                    <span>3h 25m</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-10 text-center">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700">
                    Browse All Tutorials
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Membership Section -->
    <div id="membership" class="py-12 bg-indigo-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-300 font-semibold tracking-wide uppercase">Membership</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                    Choose Your Learning Plan
                </p>
                <p class="mt-4 max-w-2xl text-xl text-indigo-200 lg:mx-auto">
                    Whether you're just starting or ready to go pro, we have a plan that fits your needs.
                </p>
            </div>
            
            <div class="mt-16 space-y-8 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-8">
                <!-- Free Tier -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="px-6 py-8 sm:p-10 sm:pb-6">
                        <div>
                            <h3 class="inline-flex px-4 py-1 rounded-full text-sm font-semibold tracking-wide uppercase bg-indigo-100 text-indigo-600">
                                Free
                            </h3>
                        </div>
                        <div class="mt-4 flex items-baseline text-6xl font-extrabold">
                            $0
                            <span class="ml-1 text-2xl font-medium text-gray-500">/month</span>
                        </div>
                        <p class="mt-5 text-lg text-gray-500">
                            Perfect for beginners who want to try our platform.
                        </p>
                    </div>
                    <div class="px-6 pt-6 pb-8 bg-gray-50 sm:p-10 sm:pt-6">
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                </div>
                                <p class="ml-3 text-base text-gray-700">Access to free tutorials</p>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                </div>
                                <p class="ml-3 text-base text-gray-700">Community forum access</p>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                </div>
                                <p class="ml-3 text-base text-gray-700">Basic progress tracking</p>
                            </li>
                        </ul>
                        <div class="mt-8">
                            <div class="rounded-md shadow">
                                <a href="#" class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50">
                                    Get started
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Pro Tier -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform scale-105 z-10">
                    <div class="px-6 py-8 sm:p-10 sm:pb-6">
                        <div>
                            <h3 class="inline-flex px-4 py-1 rounded-full text-sm font-semibold tracking-wide uppercase bg-indigo-600 text-white">
                                Pro
                            </h3>
                        </div>
                        <div class="mt-4 flex items-baseline text-6xl font-extrabold">
                            $19
                            <span class="ml-1 text-2xl font-medium text-gray-500">/month</span>
                        </div>
                        <p class="mt-5 text-lg text-gray-500">
                            For serious learners who want full access.
                        </p>
                    </div>
                    <div class="px-6 pt-6 pb-8 bg-gray-50 sm:p-10 sm:pt-6">
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                </div>
                                <p class="ml-3 text-base text-gray-700">All free tier features</p>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                </div>
                                <p class="ml-3 text-base text-gray-700">Full access to all premium tutorials</p>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                </div>
                                <p class="ml-3 text-base text-gray-700">Downloadable resources</p>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                </div>
                                <p class="ml-3 text-base text-gray-700">Certificate of completion</p>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                </div>
                                <p class="ml-3 text-base text-gray-700">Priority support</p>
                            </li>
                        </ul>
                        <div class="mt-8">
                            <div class="rounded-md shadow">
                                <a href="#" class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                                    Get started
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Team Tier -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="px-6 py-8 sm:p-10 sm:pb-6">
                        <div>
                            <h3 class="inline-flex px-4 py-1 rounded-full text-sm font-semibold tracking-wide uppercase bg-indigo-100 text-indigo-600">
                                Team
                            </h3>
                        </div>
                        <div class="mt-4 flex items-baseline text-6xl font-extrabold">
                            $49
                            <span class="ml-1 text-2xl font-medium text-gray-500">/month</span>
                        </div>
                        <p class="mt-5 text-lg text-gray-500">
                            For teams and organizations with 3+ members.
                        </p>
                    </div>
                    <div class="px-6 pt-6 pb-8 bg-gray-50 sm:p-10 sm:pt-6">
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                </div>
                                <p class="ml-3 text-base text-gray-700">All pro tier features</p>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                </div>
                                <p class="ml-3 text-base text-gray-700">Up to 5 team members</p>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                </div>
                                <p class="ml-3 text-base text-gray-700">Team progress dashboard</p>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                </div>
                                <p class="ml-3 text-base text-gray-700">Team learning paths</p>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-check h-5 w-5 text-green-500"></i>
                                </div>
                                <p class="ml-3 text-base text-gray-700">Dedicated account manager</p>
                            </li>
                        </ul>
                        <div class="mt-8">
                            <div class="rounded-md shadow">
                                <a href="#" class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50">
                                    Get started
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Members Testimonials -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Testimonials</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    What Our Members Say
                </p>
            </div>
            
            <div class="mt-10">
                <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/women/32.jpg" alt="User">
                            </div>
                            <div class="ml-4">
                                <div class="text-lg font-medium text-gray-900">Jessica Thompson</div>
                                <div class="text-indigo-600">Web Developer</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <p class="text-gray-600">
                                "The video tutorials are incredibly well-produced and easy to follow. I went from knowing nothing about JavaScript to building my first web app in just two months!"
                            </p>
                            <div class="mt-3 flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/men/45.jpg" alt="User">
                            </div>
                            <div class="ml-4">
                                <div class="text-lg font-medium text-gray-900">David Rodriguez</div>
                                <div class="text-indigo-600">UX Designer</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <p class="text-gray-600">
                                "The members community is incredibly supportive. Whenever I get stuck, there's always someone willing to help. The CSS Grid course completely transformed how I approach layouts."
                            </p>
                            <div class="mt-3 flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Members Dashboard Section (visible when logged in) -->
    <div id="membersDashboard" class="hidden bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Welcome Back, <span id="userName" class="text-indigo-600">Member</span>
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500">
                    Continue your learning journey or explore new tutorials
                </p>
            </div>

            <div class="mt-12 grid gap-8 lg:grid-cols-3">
                <!-- Progress Card -->
                <div class="bg-indigo-50 rounded-lg p-6">
                    <h3 class="text-lg font-medium text-indigo-800">Your Progress</h3>
                    <div class="mt-4 flex items-center">
                        <div class="relative w-20 h-20">
                            <svg class="w-full h-full" viewBox="0 0 36 36">
                                <path class="text-indigo-200" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-width="3" stroke-dasharray="100, 100"/>
                                <path class="text-indigo-600" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-width="3" stroke-dasharray="65, 100" stroke-linecap="round"/>
                            </svg>
                            <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-lg font-bold text-indigo-600">65%</span>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm text-gray-600">Completed 13 of 20 courses</p>
                            <a href="#" class="mt-2 inline-flex items-center text-sm font-medium text-indigo-600 hover:text-indigo-500">
                                View all courses
                                <i class="fas fa-chevron-right ml-1 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Continue Learning Card -->
                <div class="bg-white border rounded-lg p-6 shadow-sm">
                    <h3 class="text-lg font-medium text-gray-900">Continue Learning</h3>
                    <div class="mt-4">
                        <h4 class="text-md font-medium text-gray-800">PHP & MySQL Complete Course</h4>
                        <div class="mt-2 w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 45%"></div>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">Lesson 6 of 12 • 45% complete</p>
                        <button class="mt-4 w-full bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                            Continue Course
                        </button>
                    </div>
                </div>

                <!-- Recommended Tutorials Card -->
                <div class="bg-white border rounded-lg p-6 shadow-sm">
                    <h3 class="text-lg font-medium text-gray-900">Recommended For You</h3>
                    <div class="mt-4 space-y-3">
                        <a href="#" class="block p-3 hover:bg-gray-50 rounded-md">
                            <h4 class="text-md font-medium text-gray-800">PHP Security Best Practices</h4>
                            <p class="mt-1 text-sm text-gray-500">Advanced • 1h 20m</p>
                        </a>
                        <a href="#" class="block p-3 hover:bg-gray-50 rounded-md">
                            <h4 class="text-md font-medium text-gray-800">Building REST APIs with PHP</h4>
                            <p class="mt-1 text-sm text-gray-500">Intermediate • 2h 15m</p>
                        </a>
                        <a href="#" class="block p-3 hover:bg-gray-50 rounded-md">
                            <h4 class="text-md font-medium text-gray-800">Laravel for Beginners</h4>
                            <p class="mt-1 text-sm text-gray-500">Beginner • 3h 40m</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-indigo-700">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                <span class="block">Ready to start learning?</span>
                <span class="block">Join LearnHub today.</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-indigo-200">
                Choose from hundreds of video tutorials and join our growing community of learners.
            </p>
            <a href="#" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 sm:w-auto">
                Sign up for free
            </a>
        </div>
    </div>

<?php
// login.php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // In a real app, you would:
    // 1. Validate inputs
    // 2. Check against database
    // 3. Set session variables
    // 4. Redirect to members area
    
    // For demo purposes, we'll simulate a successful login
    if (!empty($email) && !empty($password)) {
        $_SESSION['logged_in'] = true;
        $_SESSION['user_email'] = $email;
        $_SESSION['user_name'] = 'PHP Developer';
        
        header('Location: members.php');
        exit;
    } else {
        header('Location: index.php?error=invalid_credentials');
        exit;
    }
}

// members.php would contain the protected members area content
?>

    <!-- Footer -->
    <footer class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Learn</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">All Courses</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Popular Topics</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Learning Paths</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Skill Assessments</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Community</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Forums</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Events</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Chapters</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Meetups</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Company</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">About</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Careers</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Instructors</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Support</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Help Center</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Contact Us</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8 md:flex md:items-center md:justify-between">
                <div class="flex space-x-6 md:order-2">
                    <a href="#" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">Facebook</span>
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">Twitter</span>
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">Instagram</span>
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">YouTube</span>
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
                <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">
                    &copy; 2023 LearnHub. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Login/Logout functionality
        let isLoggedIn = false; // This would come from PHP session in real implementation
        
        function toggleLoginModal() {
            document.getElementById('loginModal').classList.toggle('hidden');
        }
        
        function login() {
            // In a real app, this would be handled by PHP form submission
            isLoggedIn = true;
            document.getElementById('membersDashboard').classList.remove('hidden');
            document.getElementById('loginModal').classList.add('hidden');
            document.getElementById('userName').textContent = 'PHP Developer'; // Would come from DB
        }
        
        function logout() {
            isLoggedIn = false;
            document.getElementById('membersDashboard').classList.add('hidden');
        }
        
        // Update all login buttons to open modal
        document.querySelectorAll('button, a').forEach(el => {
            if (el.textContent.includes('Sign In') || el.textContent.includes('Sign Up')) {
                el.addEventListener('click', function(e) {
                    e.preventDefault();
                    toggleLoginModal();
                });
            }
        });

        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Animation on scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.fade-in');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.3;
                
                if (elementPosition < screenPosition) {
                    element.style.opacity = '1';
                }
            });
        }
        
        // Set initial state for fade-in elements
        document.querySelectorAll('.fade-in').forEach(el => {
            el.style.opacity = '0';
        });
        
        // Add scroll event listener
        window.addEventListener('scroll', animateOnScroll);
        // Trigger once on load in case elements are already in view
        window.addEventListener('load', animateOnScroll);
    </script>
</body>
</html>