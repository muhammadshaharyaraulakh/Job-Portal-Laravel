<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlwaysApply - Job Search</title>
    
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
                            bg: '#f8f9fc'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .custom-checkbox {
            appearance: none;
            background-color: #fff;
            margin: 0;
            font: inherit;
            color: currentColor;
            width: 1.15em;
            height: 1.15em;
            border: 1px solid #d1d5db;
            border-radius: 0.25em;
            display: grid;
            place-content: center;
            transition: 0.2s all;
        }

        .custom-checkbox::before {
            content: "";
            width: 0.65em;
            height: 0.65em;
            transform: scale(0);
            transition: 120ms transform ease-in-out;
            box-shadow: inset 1em 1em white;
            transform-origin: center;
            clip-path: polygon(14% 44%, 0 65%, 50% 100%, 100% 16%, 80% 0%, 43% 62%);
        }

        .custom-checkbox:checked {
            background-color: #6b21a8;
            border-color: #6b21a8;
        }

        .custom-checkbox:checked::before {
            transform: scale(1);
        }

        /* Smooth transition for height changes */
        .filter-content {
            transition: all 0.3s ease-in-out;
            overflow: hidden;
        }
        .filter-content.collapsed {
            max-height: 0;
            opacity: 0;
            margin-top: 0;
        }
        .filter-content.expanded {
            max-height: 500px; /* Arbitrary large height */
            opacity: 1;
            margin-top: 0.75rem; /* mt-3 equivalent */
        }
        
        .rotate-icon {
            transition: transform 0.3s ease;
        }
        .rotate-180 {
            transform: rotate(180deg);
        }
    </style>
</head>
<body class="bg-brand-bg text-gray-800 font-sans">

    <nav class="bg-white py-4 px-6 md:px-12 flex items-center justify-between sticky top-0 z-50 shadow-sm">
        <a href="home.html" class="flex items-center gap-2 cursor-pointer">
            <i class="fa-solid fa-magnifying-glass text-brand-purple text-xl"></i>
            <span class="text-xl font-bold text-brand-purple">AlwaysApply</span>
        </a>
        <div class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-700">
            <a href="#" class="hover:text-brand-purple transition">Home</a>
            <a href="#" class="text-brand-purple font-semibold">Find Jobs</a>
            <a href="#" class="hover:text-brand-purple transition">Employers</a>
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

    <div class="max-w-7xl mx-auto px-4 md:px-8 pt-10 pb-6">
        <h1 class="text-3xl font-bold text-gray-900">Job Search</h1>
        <p class="text-gray-500 mt-1 mb-8">Search for your desired job matching your skills</p>

        <div class="bg-white p-2 rounded-lg shadow-sm border border-gray-200 flex flex-col md:flex-row items-center">
            <div class="flex-1 w-full px-4 py-3 border-b md:border-b-0 md:border-r border-gray-100 flex items-center gap-3">
                <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                <input type="text" placeholder="Enter Job title" class="w-full outline-none text-gray-600 text-sm placeholder-gray-400">
            </div>
            <div class="flex-1 w-full px-4 py-3 border-b md:border-b-0 md:border-r border-gray-100 flex items-center gap-3">
                <i class="fa-solid fa-location-dot text-gray-400"></i>
                <input type="text" placeholder="Enter location" class="w-full outline-none text-gray-600 text-sm placeholder-gray-400">
            </div>
            <div class="flex-1 w-full px-4 py-3 flex items-center gap-3">
                <i class="fa-solid fa-briefcase text-gray-400"></i>
                <input type="text" placeholder="Years of experience" class="w-full outline-none text-gray-600 text-sm placeholder-gray-400">
            </div>
            <button class="w-full md:w-auto px-10 py-3 bg-brand-purple text-white font-medium rounded hover:bg-brand-dark transition m-1">Search</button>
        </div>
    </div>

    <main class="max-w-7xl mx-auto px-4 md:px-8 py-6 flex flex-col lg:flex-row gap-8">
        
        <aside class="w-full lg:w-1/4 flex-shrink-0">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-bold text-lg text-gray-900">Filter</h3>
                <button class="text-xs text-red-500 font-medium hover:underline">Clear all</button>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 space-y-6">
                
                <div class="filter-section">
                    <div class="flex justify-between items-center cursor-pointer" onclick="toggleFilter('salary-content', this)">
                        <h4 class="font-semibold text-sm text-gray-800">Salary Range</h4>
                        <i class="fa-solid fa-chevron-up text-xs text-gray-400 rotate-icon"></i>
                    </div>
                    <div id="salary-content" class="filter-content expanded">
                        <div class="flex items-center gap-2">
                            <input type="text" placeholder="Min" class="w-full border border-gray-200 rounded px-3 py-2 text-sm outline-none focus:border-brand-purple">
                            <input type="text" placeholder="Max" class="w-full border border-gray-200 rounded px-3 py-2 text-sm outline-none focus:border-brand-purple">
                        </div>
                    </div>
                </div>
                <hr class="border-gray-100">

                <div class="filter-section">
                    <div class="flex justify-between items-center cursor-pointer" onclick="toggleFilter('jobtype-content', this)">
                        <h4 class="font-semibold text-sm text-gray-800">Job Type</h4>
                        <i class="fa-solid fa-chevron-up text-xs text-gray-400 rotate-icon"></i>
                    </div>
                    <div id="jobtype-content" class="filter-content expanded space-y-3">
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" checked class="custom-checkbox">
                            <span class="text-sm text-gray-600 group-hover:text-brand-purple">All (2567)</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" class="custom-checkbox">
                            <span class="text-sm text-gray-600 group-hover:text-brand-purple">Full-Time (450)</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" class="custom-checkbox">
                            <span class="text-sm text-gray-600 group-hover:text-brand-purple">Part-Time (145)</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" class="custom-checkbox">
                            <span class="text-sm text-gray-600 group-hover:text-brand-purple">Internship (55)</span>
                        </label>
                    </div>
                </div>
                <hr class="border-gray-100">

                <div class="filter-section">
                    <div class="flex justify-between items-center cursor-pointer" onclick="toggleFilter('workmode-content', this)">
                        <h4 class="font-semibold text-sm text-gray-800">Work Mode</h4>
                        <i class="fa-solid fa-chevron-up text-xs text-gray-400 rotate-icon"></i>
                    </div>
                    <div id="workmode-content" class="filter-content expanded space-y-3">
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" class="custom-checkbox">
                            <span class="text-sm text-gray-600 group-hover:text-brand-purple">On-Site</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" class="custom-checkbox">
                            <span class="text-sm text-gray-600 group-hover:text-brand-purple">Remote (180)</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" class="custom-checkbox">
                            <span class="text-sm text-gray-600 group-hover:text-brand-purple">Hybrid (200)</span>
                        </label>
                    </div>
                </div>
                <hr class="border-gray-100">

                <div class="filter-section">
                    <div class="flex justify-between items-center cursor-pointer" onclick="toggleFilter('jobfunc-content', this)">
                        <h4 class="font-semibold text-sm text-gray-800">Job Functions</h4>
                        <i class="fa-solid fa-chevron-up text-xs text-gray-400 rotate-icon"></i>
                    </div>
                    <div id="jobfunc-content" class="filter-content expanded space-y-3">
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" class="custom-checkbox">
                            <span class="text-sm text-gray-600 group-hover:text-brand-purple">Marketing (21)</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" class="custom-checkbox">
                            <span class="text-sm text-gray-600 group-hover:text-brand-purple">Engineering (45)</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" class="custom-checkbox">
                            <span class="text-sm text-gray-600 group-hover:text-brand-purple">Design (71)</span>
                        </label>
                    </div>
                </div>

                <div class="pt-2 flex flex-col gap-3">
                    <button onclick="expandAll()" class="text-brand-purple font-medium text-sm flex items-center justify-center gap-2 w-full hover:underline">
                        <i class="fa-solid fa-up-right-and-down-left-from-center"></i> Expand all
                    </button>
                    
                    <button class="w-full bg-brand-purple text-white font-semibold py-2.5 rounded shadow-md hover:bg-brand-dark transition text-sm">
                        Apply Filters
                    </button>
                </div>
            </div>
        </aside>

        <div class="w-full lg:w-3/4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold text-gray-900">All Jobs (2310)</h2>
                
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="bg-purple-50 p-6 rounded-xl border border-purple-100 hover:shadow-md transition relative group">
                    <i class="fa-regular fa-bookmark absolute top-6 right-6 text-gray-400 cursor-pointer hover:text-brand-purple"></i>
                    
                    <h3 class="font-bold text-gray-900 text-lg">Technical Support Specialist</h3>
                    <div class="mt-1 mb-4 flex items-center gap-2">
                        <span class="text-green-600 text-xs font-bold uppercase">Part-Time</span>
                        <span class="text-gray-400 text-xs">•</span>
                        <span class="text-gray-500 text-xs">Salary: 20,000 INR - 25,000 INR</span>
                    </div>
                    
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-sm">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" class="w-6 h-6" alt="Google">
                        </div>
                        <div>
                            <p class="font-semibold text-sm">Google Inc.</p>
                            <p class="text-xs text-gray-500"><i class="fa-solid fa-location-dot mr-1"></i> New Delhi, India</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 mb-6">
                        <div class="flex -space-x-2">
                            <img class="w-6 h-6 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=1" alt="">
                            <img class="w-6 h-6 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=2" alt="">
                            <img class="w-6 h-6 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=3" alt="">
                        </div>
                        <span class="text-xs text-gray-500">10+ applicants</span>
                    </div>

                    <div class="flex gap-3">
                        <button class="flex-1 py-2 border border-brand-purple text-brand-purple rounded text-sm font-medium hover:bg-brand-light transition">View details</button>
                        <button class="flex-1 py-2 bg-brand-purple text-white rounded text-sm font-medium hover:bg-brand-dark transition">Apply now</button>
                    </div>
                </div>

                <div class="bg-purple-50 p-6 rounded-xl border border-purple-100 hover:shadow-md transition relative">
                    <i class="fa-regular fa-bookmark absolute top-6 right-6 text-gray-400 cursor-pointer hover:text-brand-purple"></i>
                    
                    <h3 class="font-bold text-gray-900 text-lg">Senior UI/UX Designer</h3>
                    <div class="mt-1 mb-4 flex items-center gap-2">
                        <span class="text-brand-purple text-xs font-bold uppercase">Full-Time</span>
                        <span class="text-gray-400 text-xs">•</span>
                        <span class="text-gray-500 text-xs">Salary: $30,000 - $55,000</span>
                    </div>
                    
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-sm">
                            <i class="fa-brands fa-apple text-xl text-black"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-sm">Apple</p>
                            <p class="text-xs text-gray-500"><i class="fa-solid fa-location-dot mr-1"></i> Boston, USA</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 mb-6">
                        <div class="flex -space-x-2">
                            <img class="w-6 h-6 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=4" alt="">
                            <img class="w-6 h-6 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=5" alt="">
                        </div>
                        <span class="text-xs text-gray-500">9+ applicants</span>
                    </div>

                    <div class="flex gap-3">
                        <button class="flex-1 py-2 border border-brand-purple text-brand-purple rounded text-sm font-medium hover:bg-brand-light transition">View details</button>
                        <button class="flex-1 py-2 bg-brand-purple text-white rounded text-sm font-medium hover:bg-brand-dark transition">Apply now</button>
                    </div>
                </div>

                <div class="bg-purple-50 p-6 rounded-xl border border-purple-100 hover:shadow-md transition relative">
                    <i class="fa-solid fa-bookmark absolute top-6 right-6 text-brand-purple cursor-pointer"></i>
                    
                    <h3 class="font-bold text-gray-900 text-lg">Marketing Officer</h3>
                    <div class="mt-1 mb-4 flex items-center gap-2">
                        <span class="text-green-600 text-xs font-bold uppercase">Part-Time</span>
                        <span class="text-gray-400 text-xs">•</span>
                        <span class="text-gray-500 text-xs">Salary: 15,000 INR - 35,000 INR</span>
                    </div>
                    
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-sm">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c9/Intel-logo.svg" class="w-6 h-6" alt="Intel">
                        </div>
                        <div>
                            <p class="font-semibold text-sm">Intel Corp</p>
                            <p class="text-xs text-gray-500"><i class="fa-solid fa-location-dot mr-1"></i> Bangalore, India</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 mb-6">
                        <div class="flex -space-x-2">
                            <img class="w-6 h-6 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=8" alt="">
                            <img class="w-6 h-6 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=9" alt="">
                            <img class="w-6 h-6 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=7" alt="">
                        </div>
                        <span class="text-xs text-gray-500">30+ applicants</span>
                    </div>

                    <div class="flex gap-3">
                        <button class="flex-1 py-2 border border-brand-purple text-brand-purple rounded text-sm font-medium hover:bg-brand-light transition">View details</button>
                        <button class="flex-1 py-2 bg-brand-purple text-white rounded text-sm font-medium hover:bg-brand-dark transition">Apply now</button>
                    </div>
                </div>

                <div class="bg-purple-50 p-6 rounded-xl border border-purple-100 hover:shadow-md transition relative">
                    <i class="fa-regular fa-bookmark absolute top-6 right-6 text-gray-400 cursor-pointer hover:text-brand-purple"></i>
                    
                    <h3 class="font-bold text-gray-900 text-lg">Senior UI/UX Designer</h3>
                    <div class="mt-1 mb-4 flex items-center gap-2">
                        <span class="text-brand-purple text-xs font-bold uppercase">Full-Time</span>
                        <span class="text-gray-400 text-xs">•</span>
                        <span class="text-gray-500 text-xs">Salary: $30,000 - $55,000</span>
                    </div>
                    
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-sm">
                            <i class="fa-brands fa-apple text-xl text-black"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-sm">Apple</p>
                            <p class="text-xs text-gray-500"><i class="fa-solid fa-location-dot mr-1"></i> Boston, USA</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 mb-6">
                        <div class="flex -space-x-2">
                            <img class="w-6 h-6 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=11" alt="">
                            <img class="w-6 h-6 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=12" alt="">
                        </div>
                        <span class="text-xs text-gray-500">9+ applicants</span>
                    </div>

                    <div class="flex gap-3">
                        <button class="flex-1 py-2 border border-brand-purple text-brand-purple rounded text-sm font-medium hover:bg-brand-light transition">View details</button>
                        <button class="flex-1 py-2 bg-brand-purple text-white rounded text-sm font-medium hover:bg-brand-dark transition">Apply now</button>
                    </div>
                </div>

            </div>

            <div class="text-center mt-12">
                <a href="#" class="text-brand-purple font-bold text-lg hover:underline decoration-2 underline-offset-4">View more</a>
            </div>
        </div>
    </main>

    <script>
        // 1. Individual Section Toggle
        function toggleFilter(contentId, headerElement) {
            const content = document.getElementById(contentId);
            const icon = headerElement.querySelector('.rotate-icon');

            // Toggle Classes
            if (content.classList.contains('expanded')) {
                // Collapse
                content.classList.remove('expanded');
                content.classList.add('collapsed');
                icon.classList.add('rotate-180'); // Rotate arrow down
            } else {
                // Expand
                content.classList.remove('collapsed');
                content.classList.add('expanded');
                icon.classList.remove('rotate-180'); // Rotate arrow up
            }
        }

        // 2. Expand All Functionality
        function expandAll() {
            const allContents = document.querySelectorAll('.filter-content');
            const allIcons = document.querySelectorAll('.rotate-icon');

            allContents.forEach(content => {
                content.classList.remove('collapsed');
                content.classList.add('expanded');
            });

            allIcons.forEach(icon => {
                icon.classList.remove('rotate-180');
            });
        }
    </script>
</body>
</html>