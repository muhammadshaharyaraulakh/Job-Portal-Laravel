<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlwaysApply - Post a Job</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            purple: '#6b21a8', 
                            light: '#f3e8ff',
                            dark: '#4c1d95',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom Select Arrow Styling */
        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3E%3Cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3E%3C/svg%3E");
            background-position: right 0.75rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
        }
    </style>
</head>
<body class="bg-white text-gray-800 font-sans">

    <nav class="bg-white py-4 px-6 md:px-12 flex items-center justify-between sticky top-0 z-50 shadow-sm border-b border-gray-100">
        <a href="home.html" class="flex items-center gap-2 cursor-pointer">
            <i class="fa-solid fa-magnifying-glass text-brand-purple text-xl"></i>
            <span class="text-xl font-bold text-brand-purple">AlwaysApply</span>
        </a>

        <div class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-700">
            <a href="#" class="hover:text-brand-purple transition">Home</a>
            <a href="#" class="hover:text-brand-purple transition">Find Jobs</a>
            <a href="#" class="text-brand-purple font-semibold">Employers</a>
            <a href="#" class="hover:text-brand-purple transition">Admin</a>
            <a href="#" class="hover:text-brand-purple transition">About Us</a>
        </div>

        <div class="hidden md:flex items-center gap-4">
            <button class="px-5 py-2 border border-brand-purple text-brand-purple rounded font-medium hover:bg-brand-light transition">Contact Us</button>
            <button class="px-6 py-2 bg-brand-purple text-white rounded font-medium shadow-md hover:bg-brand-dark transition">Login</button>
        </div>

        <button id="mobile-menu-btn" class="md:hidden text-2xl text-gray-700 focus:outline-none">
            <i class="fa-solid fa-bars"></i>
        </button>
    </nav>

    <div id="mobile-menu" class="hidden md:hidden bg-white border-t p-4 fixed w-full z-40 shadow-lg top-[73px]">
        <a href="#" class="block py-2 text-gray-700 hover:text-brand-purple">Home</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-brand-purple">Find Jobs</a>
        <a href="#" class="block py-2 text-brand-purple font-semibold">Employers</a>
        <div class="mt-4 flex flex-col gap-3">
            <button class="w-full px-5 py-2 border border-brand-purple text-brand-purple rounded font-medium">Contact Us</button>
            <button class="w-full px-6 py-2 bg-brand-purple text-white rounded font-medium">Login</button>
        </div>
    </div>

    <main class="max-w-4xl mx-auto px-6 py-12">
        
        <div class="mb-10">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Post a job</h1>
            <p class="text-gray-500">Find the best talent for your company</p>
        </div>

        <form action="#" class="space-y-8">
            
            <div class="space-y-2">
                <label class="font-semibold text-gray-800">Job Title</label>
                <input type="text" placeholder="Add job title, role vacancies etc" 
                    class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple placeholder-gray-400">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <label class="font-semibold text-gray-800">Tags</label>
                    <input type="text" placeholder="Job keyword, tags etc.." 
                        class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple placeholder-gray-400">
                </div>

                <div class="space-y-2">
                    <label class="font-semibold text-gray-800">Job Role</label>
                    <select class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-500 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple bg-white cursor-pointer">
                        <option>Select...</option>
                        <option>Developer</option>
                        <option>Designer</option>
                        <option>Manager</option>
                    </select>
                </div>
            </div>

            <div class="space-y-2">
                <label class="font-semibold text-gray-800">Salary</label>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <div>
                        <label class="text-sm text-gray-600 mb-1 block">Min Salary</label>
                        <div class="flex border border-gray-200 rounded-lg overflow-hidden focus-within:border-brand-purple focus-within:ring-1 focus-within:ring-brand-purple">
                            <input type="number" placeholder="Minimum Salary..." class="w-full px-4 py-3 text-gray-700 focus:outline-none placeholder-gray-400">
                            <span class="bg-gray-100 text-gray-500 font-medium px-4 py-3 border-l border-gray-200 flex items-center">INR</span>
                        </div>
                    </div>

                    <div>
                        <label class="text-sm text-gray-600 mb-1 block">Max Salary</label>
                        <div class="flex border border-gray-200 rounded-lg overflow-hidden focus-within:border-brand-purple focus-within:ring-1 focus-within:ring-brand-purple">
                            <input type="number" placeholder="Maximum Salary..." class="w-full px-4 py-3 text-gray-700 focus:outline-none placeholder-gray-400">
                            <span class="bg-gray-100 text-gray-500 font-medium px-4 py-3 border-l border-gray-200 flex items-center">INR</span>
                        </div>
                    </div>

                    <div class="flex flex-col justify-end">
                        <select class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-500 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple bg-white cursor-pointer h-[50px]">
                            <option>Select...</option>
                            <option>Monthly</option>
                            <option>Yearly</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <label class="font-semibold text-gray-800">Vacancies</label>
                    <select class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-500 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple bg-white cursor-pointer">
                        <option>Select...</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3+</option>
                        <option>10+</option>
                    </select>
                </div>

                <div class="space-y-2">
                    <label class="font-semibold text-gray-800">Job Level</label>
                    <select class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-500 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple bg-white cursor-pointer">
                        <option>Select...</option>
                        <option>Entry Level</option>
                        <option>Mid Level</option>
                        <option>Senior Level</option>
                    </select>
                </div>
            </div>

            <div class="space-y-2">
                <label class="font-semibold text-gray-800">Location</label>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label class="text-sm text-gray-600 mb-1 block">Country</label>
                        <select class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-500 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple bg-white cursor-pointer">
                            <option>Select...</option>
                            <option>India</option>
                            <option>USA</option>
                            <option>Remote</option>
                        </select>
                    </div>

                    <div>
                        <label class="text-sm text-gray-600 mb-1 block">City</label>
                        <select class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-500 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple bg-white cursor-pointer">
                            <option>Select...</option>
                            <option>New Delhi</option>
                            <option>Bangalore</option>
                            <option>Mumbai</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="space-y-2">
                <label class="font-semibold text-gray-800">Job Description</label>
                <div class="border border-gray-200 rounded-lg overflow-hidden focus-within:border-brand-purple focus-within:ring-1 focus-within:ring-brand-purple transition-all">
                    
                    <textarea rows="8" class="w-full p-4 text-gray-700 outline-none resize-none placeholder-gray-400" placeholder="Add your description..."></textarea>
                    
                    <div class="bg-gray-50 border-t border-gray-200 px-4 py-2 flex items-center justify-between flex-wrap gap-2">
                        
                        <div class="flex items-center gap-1 md:gap-4 text-gray-600">
                            <div class="flex items-center gap-1 cursor-pointer hover:bg-gray-200 px-2 py-1 rounded">
                                <span class="text-sm font-medium">14</span>
                                <i class="fa-solid fa-chevron-down text-xs"></i>
                            </div>
                            <div class="h-4 w-px bg-gray-300"></div>

                            <button type="button" class="hover:bg-gray-200 p-1.5 rounded"><i class="fa-solid fa-bold"></i></button>
                            <button type="button" class="hover:bg-gray-200 p-1.5 rounded"><div class="w-4 h-4 bg-gray-800 rounded-full border border-gray-300"></div></button>
                            <button type="button" class="hover:bg-gray-200 p-1.5 rounded"><i class="fa-solid fa-bold"></i></button>
                            <button type="button" class="hover:bg-gray-200 p-1.5 rounded"><i class="fa-solid fa-italic"></i></button>
                            <button type="button" class="hover:bg-gray-200 p-1.5 rounded"><i class="fa-solid fa-underline"></i></button>
                            <button type="button" class="hover:bg-gray-200 p-1.5 rounded"><i class="fa-solid fa-strikethrough"></i></button>

                            <div class="h-4 w-px bg-gray-300 hidden md:block"></div>

                            <button type="button" class="hover:bg-gray-200 p-1.5 rounded hidden md:block"><i class="fa-solid fa-align-left"></i></button>
                            <button type="button" class="hover:bg-gray-200 p-1.5 rounded hidden md:block"><i class="fa-solid fa-align-center"></i></button>
                            <button type="button" class="hover:bg-gray-200 p-1.5 rounded hidden md:block"><i class="fa-solid fa-align-right"></i></button>
                        </div>

                        <div class="flex items-center gap-2 text-gray-500">
                            <button type="button" class="hover:bg-gray-200 p-1.5 rounded"><i class="fa-solid fa-quote-right"></i></button>
                            <button type="button" class="hover:bg-gray-200 p-1.5 rounded"><i class="fa-solid fa-list-ul"></i></button>
                            <button type="button" class="hover:bg-gray-200 p-1.5 rounded"><i class="fa-regular fa-image"></i></button>
                            <button type="button" class="hover:bg-gray-200 p-1.5 rounded"><i class="fa-solid fa-link"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-4">
                <button type="submit" class="bg-brand-purple text-white font-bold text-lg px-10 py-3 rounded-lg shadow-lg hover:bg-brand-dark transition transform active:scale-95 w-full md:w-auto">
                    Post Job
                </button>
            </div>

        </form>
    </main>

    <script>
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>