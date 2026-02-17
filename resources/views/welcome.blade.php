<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlwaysApply - Home</title>
    
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
                            purple: '#6b21a8', // Main brand color
                            light: '#f3e8ff',  // Light backgrounds
                            dark: '#4c1d95',
                            green: '#22c55e'   // For "Part-Time" badges
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white text-gray-800 font-sans">

    <nav class="bg-white py-4 px-6 md:px-12 flex items-center justify-between sticky top-0 z-50 shadow-sm">
        <a href="#" class="flex items-center gap-2 cursor-pointer text-decoration-none">
            <i class="fa-solid fa-magnifying-glass text-brand-purple text-xl"></i>
            <span class="text-xl font-bold text-brand-purple">AlwaysApply</span>
        </a>

        <div class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-700">
            <a href="#" class="text-brand-purple font-semibold">Home</a>
            <a href="#" class="hover:text-brand-purple transition">Find Jobs</a>
            <a href="#" class="hover:text-brand-purple transition">Employers</a>
            <a href="#" class="hover:text-brand-purple transition">Admin</a>
            <a href="#" class="hover:text-brand-purple transition">About Us</a>
        </div>

        <div class="hidden md:flex items-center gap-4">
            <button class="px-5 py-2 border border-brand-purple text-brand-purple rounded font-medium hover:bg-brand-light transition">
                Contact Us
            </button>
            <button class="px-6 py-2 bg-brand-purple text-white rounded font-medium shadow-md hover:bg-brand-dark transition">
                Login
            </button>
        </div>

        <button id="mobile-menu-btn" class="md:hidden text-2xl text-gray-700 focus:outline-none">
            <i class="fa-solid fa-bars"></i>
        </button>
    </nav>

    <div id="mobile-menu" class="hidden flex-col bg-white border-t p-4 md:hidden fixed w-full z-40 shadow-lg top-[70px]">
        <a href="#" class="block py-2 text-brand-purple font-semibold">Home</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-brand-purple">Find Jobs</a>
        <div class="mt-4 flex flex-col gap-3">
            <button class="w-full px-5 py-2 border border-brand-purple text-brand-purple rounded font-medium">Contact Us</button>
            <button class="w-full px-6 py-2 bg-brand-purple text-white rounded font-medium">Login</button>
        </div>
    </div>

  <header class="relative w-full min-h-screen flex items-center bg-gradient-to-r from-purple-50 to-white px-6 md:px-16 overflow-hidden">
    
    <div class="max-w-7xl w-full mx-auto flex flex-col md:flex-row items-center gap-10">
        
        <div class="w-full md:w-1/2 z-10">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                Find a job that aligns with your interests and skills
            </h1>
            <p class="text-gray-500 text-lg mb-8">Thousands of jobs in all the leading sector are waiting for you.</p>

            <div class="bg-white p-2 rounded-lg shadow-lg flex flex-col md:flex-row items-center gap-2 border border-gray-100">
                <div class="flex items-center px-4 w-full md:w-auto flex-grow border-b md:border-b-0 md:border-r border-gray-200 py-3 md:py-0">
                    <i class="fa-solid fa-magnifying-glass text-gray-400 mr-3"></i>
                    <input type="text" placeholder="Job title, Keyword" class="w-full outline-none text-gray-600 placeholder-gray-400">
                </div>
                <div class="flex items-center px-4 w-full md:w-auto flex-grow py-3 md:py-0">
                    <i class="fa-solid fa-location-dot text-gray-400 mr-3"></i>
                    <input type="text" placeholder="Location" class="w-full outline-none text-gray-600 placeholder-gray-400">
                </div>
                <button class="w-full md:w-auto px-8 py-3 bg-brand-purple text-white font-medium rounded-md hover:bg-brand-dark transition">
                    Search
                </button>
            </div>
            
            <p class="text-sm text-gray-500 mt-6">
                Suggestion: <span class="text-gray-700">UI/UX Designer, Programming, <span class="text-brand-purple font-medium">Digital Marketing</span>, Video, Animation.</span>
            </p>
        </div>

        <div class="w-full md:w-1/2 flex justify-center relative">
            <div class="absolute top-0 right-0 w-64 h-64 bg-purple-200 rounded-full filter blur-3xl opacity-30"></div>
            <img src="{{ asset('images/hero.png') }}" 
                 alt="Job Search Illustration" 
                 class="relative z-10 w-full max-w-lg object-contain drop-shadow-lg">
        </div>
    </div>
</header>

    <section class="py-16 px-6 md:px-12 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Featured Jobs</h2>
                <p class="text-gray-500 mt-2">Choose jobs from the top employers and apply for the same.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <div class="bg-purple-50 p-6 rounded-xl border border-purple-100 hover:shadow-lg transition">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="font-bold text-gray-900">Technical Support Specialist</h3>
                            <span class="text-green-600 text-xs font-bold uppercase">Part-Time</span>
                            <span class="text-gray-500 text-xs ml-2">Salary: 20,000 INR - 25,000 INR</span>
                        </div>
                        <i class="fa-regular fa-bookmark text-gray-400 cursor-pointer hover:text-brand-purple"></i>
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

                    <div class="flex justify-between items-center mt-6">
                        <div class="flex -space-x-2">
                            <img class="w-7 h-7 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=1" alt="">
                            <img class="w-7 h-7 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=2" alt="">
                            <img class="w-7 h-7 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=3" alt="">
                            <span class="text-xs text-gray-500 self-center ml-2 pl-1">10+ applicants</span>
                        </div>
                    </div>

                    <div class="flex gap-3 mt-6">
                        <button class="flex-1 py-2 border border-gray-300 rounded text-sm font-medium hover:border-brand-purple hover:text-brand-purple transition">View details</button>
                        <button class="flex-1 py-2 bg-brand-purple text-white rounded text-sm font-medium hover:bg-brand-dark transition">Apply now</button>
                    </div>
                </div>

                <div class="bg-purple-50 p-6 rounded-xl border border-purple-100 hover:shadow-lg transition">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="font-bold text-gray-900">Senior UI/UX Designer</h3>
                            <span class="text-brand-purple text-xs font-bold uppercase">Full-Time</span>
                            <span class="text-gray-500 text-xs ml-2">Salary: $30,000 - $55,000</span>
                        </div>
                        <i class="fa-regular fa-bookmark text-gray-400 cursor-pointer hover:text-brand-purple"></i>
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

                    <div class="flex justify-between items-center mt-6">
                        <div class="flex -space-x-2">
                            <img class="w-7 h-7 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=4" alt="">
                            <img class="w-7 h-7 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=5" alt="">
                            <span class="text-xs text-gray-500 self-center ml-2 pl-1">5+ applicants</span>
                        </div>
                    </div>

                    <div class="flex gap-3 mt-6">
                        <button class="flex-1 py-2 border border-gray-300 rounded text-sm font-medium hover:border-brand-purple hover:text-brand-purple transition">View details</button>
                        <button class="flex-1 py-2 bg-brand-purple text-white rounded text-sm font-medium hover:bg-brand-dark transition">Apply now</button>
                    </div>
                </div>

                <div class="bg-purple-50 p-6 rounded-xl border border-purple-100 hover:shadow-lg transition">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="font-bold text-gray-900">Marketing Officer</h3>
                            <span class="text-brand-purple text-xs font-bold uppercase">Part-Time</span>
                            <span class="text-gray-500 text-xs ml-2">Salary: 15,000 INR - 35,000 INR</span>
                        </div>
                        <i class="fa-regular fa-bookmark text-gray-400 cursor-pointer hover:text-brand-purple"></i>
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

                    <div class="flex justify-between items-center mt-6">
                        <div class="flex -space-x-2">
                            <img class="w-7 h-7 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=8" alt="">
                            <img class="w-7 h-7 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=9" alt="">
                            <span class="text-xs text-gray-500 self-center ml-2 pl-1">30+ applicants</span>
                        </div>
                    </div>

                    <div class="flex gap-3 mt-6">
                        <button class="flex-1 py-2 border border-gray-300 rounded text-sm font-medium hover:border-brand-purple hover:text-brand-purple transition">View details</button>
                        <button class="flex-1 py-2 bg-brand-purple text-white rounded text-sm font-medium hover:bg-brand-dark transition">Apply now</button>
                    </div>
                </div>

            </div>

            <div class="text-center mt-10">
                <a href="#" class="text-brand-purple font-bold text-lg hover:underline decoration-2 underline-offset-4">View all</a>
            </div>
        </div>
    </section>

    <section class="py-12 bg-white border-t border-gray-50">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h3 class="text-xl text-gray-500 mb-10">Top companies hiring now</h3>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-70 grayscale hover:grayscale-0 transition-all duration-500">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" class="h-8 md:h-10" alt="Google">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Microsoft_logo_%282012%29.svg" class="h-8 md:h-10" alt="Microsoft">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/7a/Flipkart_logo.svg/1200px-Flipkart_logo.svg.png" class="h-8 md:h-10 object-contain" alt="Flipkart">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/YouTube_Logo_2017.svg" class="h-6 md:h-8" alt="YouTube">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" class="h-6 md:h-8" alt="IBM">
            </div>
        </div>
    </section>

    <footer class="bg-purple-50 pt-16 pb-8 px-6 md:px-12 border-t border-purple-100">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
                
                <div>
                    <div class="flex items-center gap-2 mb-6">
                        <i class="fa-solid fa-magnifying-glass text-brand-purple text-xl"></i>
                        <span class="text-xl font-bold text-brand-purple">AlwaysApply</span>
                    </div>
                    <div class="text-sm text-gray-500 space-y-2">
                        <p>Call now: <span class="font-semibold text-brand-purple">+91 9591776078</span></p>
                        <p class="leading-relaxed mt-2">456 Chandni Chowk Street, Near Red Fort, Old Delhi, New Delhi, Delhi 110006, India</p>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold text-brand-purple mb-4">Quick Link</h4>
                    <ul class="space-y-2 text-sm text-gray-500">
                        <li><a href="#" class="hover:text-brand-purple">About</a></li>
                        <li><a href="#" class="hover:text-brand-purple">Contact</a></li>
                        <li><a href="#" class="hover:text-brand-purple">Admin</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-brand-purple mb-4">Candidate</h4>
                    <ul class="space-y-2 text-sm text-gray-500">
                        <li><a href="#" class="hover:text-brand-purple">Browse Jobs</a></li>
                        <li><a href="#" class="hover:text-brand-purple">Browse Employers</a></li>
                        <li><a href="#" class="hover:text-brand-purple">Candidate Dashboard</a></li>
                        <li><a href="#" class="hover:text-brand-purple">Saved Jobs</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-brand-purple mb-4">Employers</h4>
                    <ul class="space-y-2 text-sm text-gray-500">
                        <li><a href="#" class="hover:text-brand-purple">Post a Job</a></li>
                        <li><a href="#" class="hover:text-brand-purple">Browse Candidates</a></li>
                        <li><a href="#" class="hover:text-brand-purple">Employers Dashboard</a></li>
                        <li><a href="#" class="hover:text-brand-purple">Applications</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-purple-200 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-xs text-gray-500">@ 2022 AlwaysApply - Job Portal. All rights Reserved</p>
                <div class="flex gap-4 text-brand-purple/70">
                    <a href="#" class="hover:text-brand-purple"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-brand-purple"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" class="hover:text-brand-purple"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="hover:text-brand-purple"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>