<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts (Inter) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>

    <title>{{ $title ?? 'Job Board' }}</title>
</head>
<body class="bg-gray-100 font-sans antialiased text-gray-800">

    <div class="flex h-screen overflow-hidden">

        <!-- ==================== SIDEBAR ==================== -->
        <aside class="w-64 bg-slate-900 text-white flex flex-col justify-between shadow-xl z-20">
            <div>
                <!-- User Profile Section -->
                <div class="p-6 text-center border-b border-slate-800">
                    <div class="relative inline-block">
                        <img class="w-20 h-20 rounded-full object-cover border-4 border-indigo-500 shadow-md mx-auto" 
                             src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=256" 
                             alt="User Avatar">
                        <span class="bottom-0 right-1 absolute w-4 h-4 bg-green-500 border-2 border-slate-900 rounded-full"></span>
                    </div>
                    <h2 class="mt-3 font-bold text-lg text-white">Sarah Ahmed</h2>
                    <p class="text-xs text-indigo-400">System Administrator</p>
                </div>

                <!-- Navigation Links -->
                <nav class="mt-6 px-4 space-y-2">
                    @php
                        $active = "bg-indigo-600 text-white shadow-lg shadow-indigo-600/30";
                        $normal = "text-slate-400 hover:text-white hover:bg-slate-800";
                    @endphp

                    <!-- Dashboard Link -->
                    <a href="/" class="flex items-center gap-3 px-4 py-3 {{ request()->is('/') ? $active : $normal }} rounded-xl transition duration-200 font-medium">
                        <i class="fa-solid fa-chart-pie text-lg"></i>
                        <span>Dashboard</span>
                    </a>

                    <!-- About Link -->
                    <a href="/about" class="flex items-center gap-3 px-4 py-3 {{ request()->is('about') ? $active : $normal }} rounded-xl transition duration-200 font-medium">
                        <i class="fa-solid fa-circle-info text-lg"></i>
                        <span>About</span>
                    </a>

                    <!-- Contact Us Link -->
                    <a href="/contact" class="flex items-center gap-3 px-4 py-3 {{ request()->is('contact') ? $active : $normal }} rounded-xl transition duration-200 font-medium">
                        <i class="fa-solid fa-envelope text-lg"></i>
                        <span>Contact Us</span>
                    </a>

                    <!-- Blog Link -->
                    <a href="/blog" class="flex items-center gap-3 px-4 py-3 {{ request()->is('blog') ? $active : $normal }} rounded-xl transition duration-200 font-medium">
                        <i class="fa-solid fa-blog text-lg"></i>
                        <span>Blog</span>
                    </a>

                    <!-- Comments Link -->
                    <a href="/comments" class="flex items-center gap-3 px-4 py-3 {{ request()->is('comments') ? $active : $normal }} rounded-xl transition duration-200 font-medium">
                        <i class="fa-solid fa-comments text-lg"></i>
                        <span>Comments</span>
                    </a>
                </nav>
            </div>

            <!-- Footer / Logout -->
            <div class="p-4 border-t border-slate-800">
                <a href="#logout" class="flex items-center justify-center gap-2 px-4 py-2.5 text-sm text-red-400 hover:bg-red-500/10 rounded-xl transition duration-200">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Log Out</span>
                </a>
            </div>
        </aside>

        <!-- ==================== MAIN CONTENT ==================== -->
        <main class="flex-1 flex flex-col overflow-y-auto">

            <!-- Top Header -->
            <header class="bg-white border-b border-gray-200 px-8 py-4 flex items-center justify-between sticky top-0 z-10">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">{{ $title ?? 'Dashboard' }}</h1>
                    <p class="text-xs text-gray-500 mt-0.5">Welcome back! Here is your daily overview.</p>
                </div>
                <div class="flex items-center gap-4">
                    <button class="p-2 text-gray-400 hover:text-indigo-600 relative">
                        <i class="fa-regular fa-bell text-xl"></i>
                        <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full"></span>
                    </button>
                    <div class="h-8 w-px bg-gray-200"></div>
                    <span class="text-sm font-medium text-gray-600">Monday, Oct 5, 2026</span>
                </div>
            </header>

            <!-- Main Content Area -->
            <div class="p-6">
                {{ $slot }}
            </div>

        </main>

    </div>

</body>
</html>