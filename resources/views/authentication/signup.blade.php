<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlwaysApply - Registration</title>
    
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
                            purple: '#6b21a8', // Adjust this hex to match exact design if needed
                            light: '#f3e8ff',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <nav class="bg-white py-4 px-6 md:px-12 flex items-center justify-between relative z-50">
        <div class="flex items-center gap-2 cursor-pointer">
            <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.5149 11.9536H11.5206M13.8081 8.36752V7.17216C13.8081 6.85513 13.6873 6.55109 13.4723 6.32692C13.2572 6.10275 12.9656 5.97681 12.6615 5.97681H10.3682C10.0641 5.97681 9.77248 6.10275 9.55745 6.32692C9.34241 6.55109 9.22161 6.85513 9.22161 7.17216V8.36752M17.248 12.5513C15.5468 13.7221 13.5533 14.3463 11.5149 14.3463C9.47642 14.3463 7.48287 13.7221 5.78174 12.5513M6.92836 8.36752H16.1013C16.7346 8.36752 17.248 8.9027 17.248 9.56287V15.5396C17.248 16.1998 16.7346 16.735 16.1013 16.735H6.92836C6.2951 16.735 5.78174 16.1998 5.78174 15.5396V9.56287C5.78174 8.9027 6.2951 8.36752 6.92836 8.36752Z" stroke="#6300B3" stroke-width="1.00962" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M24.1278 25.1025L18.6495 19.3913M21.5797 11.8208C21.5797 17.689 17.0165 22.4461 11.3875 22.4461C5.75852 22.4461 1.19531 17.689 1.19531 11.8208C1.19531 5.95252 5.75852 1.19537 11.3875 1.19537C17.0165 1.19537 21.5797 5.95252 21.5797 11.8208Z" stroke="#6300B3" stroke-width="2.39071" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

            <span class="text-xl font-bold text-brand-purple">AlwaysApply</span>
        </div>

        <div class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-700">
            <a href="#" class="hover:text-brand-purple transition">Home</a>
            <a href="#" class="hover:text-brand-purple transition">Find Jobs</a>
            <a href="#" class="hover:text-brand-purple transition">Employers</a>
            <a href="#" class="hover:text-brand-purple transition">Admin</a>
            <a href="#" class="hover:text-brand-purple transition">About Us</a>
        </div>

        <div class="hidden md:flex items-center gap-4">
            <button class="px-5 py-2 border border-brand-purple text-brand-purple rounded font-medium hover:bg-brand-light transition">
                Contact Us
            </button>
            <button class="px-6 py-2 bg-brand-purple text-white rounded font-medium shadow-md hover:bg-purple-800 transition">
                Login
            </button>
        </div>

        <button id="mobile-menu-btn" class="md:hidden text-2xl text-gray-700 focus:outline-none">
            <i class="fa-solid fa-bars"></i>
        </button>
    </nav>

    <div id="mobile-menu" class="hidden flex-col bg-white border-t p-4 md:hidden absolute w-full z-40 shadow-lg">
        <a href="#" class="block py-2 text-gray-700 hover:text-brand-purple">Home</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-brand-purple">Find Jobs</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-brand-purple">Employers</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-brand-purple">Admin</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-brand-purple">About Us</a>
        <div class="mt-4 flex flex-col gap-3">
            <button class="w-full px-5 py-2 border border-brand-purple text-brand-purple rounded font-medium">
                Contact Us
            </button>
            <button class="w-full px-6 py-2 bg-brand-purple text-white rounded font-medium">
                Login
            </button>
        </div>
    </div>

    <main class="py-10 px-4 flex flex-col items-center justify-center min-h-[calc(100vh-80px)]">
        
        <div class="w-full max-w-2xl">
            <div class="text-center md:text-left mb-6">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Registration form</h1>
                <p class="text-gray-500 text-sm md:text-base">Register to apply for jobs of your choice all over the world</p>
            </div>

            <div class="bg-white rounded-2xl shadow-xl p-6 md:p-10 border border-gray-100">
                <form action="#" class="space-y-6">
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Full name<span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Enter your full name" 
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-brand-purple focus:border-transparent placeholder-gray-400">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email ID<span class="text-red-500">*</span></label>
                        <input type="email" placeholder="Enter your email id" 
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-brand-purple focus:border-transparent placeholder-gray-400">
                        <p class="text-xs text-gray-500 mt-1">Job notifications will be sent to this email id</p>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Password<span class="text-red-500">*</span></label>
                        <input type="password" placeholder="(Minimum 6 characters)" 
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-brand-purple focus:border-transparent placeholder-gray-400">
                        <p class="text-xs text-gray-500 mt-1">Remember your password</p>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Mobile number<span class="text-red-500">*</span></label>
                        <input type="tel" placeholder="Enter your mobile number" 
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-brand-purple focus:border-transparent placeholder-gray-400">
                        <p class="text-xs text-gray-500 mt-1">Recruiters will contact you on this number</p>
                    </div>

                    <div class="flex items-start gap-3 mt-4">
                        <div class="flex items-center h-5">
                            <input id="updates" type="checkbox" checked class="w-5 h-5 text-brand-purple border-gray-300 rounded focus:ring-brand-purple accent-purple-700">
                        </div>
                        <label for="updates" class="text-sm text-gray-500 leading-snug">
                            Send me important updates & promotions via SMS, email, and 
                            <span class="inline-flex items-center gap-1 font-medium text-green-600">
                                <i class="fa-brands fa-whatsapp text-lg"></i> WhatsApp
                            </span>
                        </label>
                    </div>

                    <p class="text-sm text-gray-500 mt-2">
                        By clicking Register, you agree to the <a href="#" class="text-blue-600 font-medium">Terms and Conditions</a> & <a href="#" class="text-blue-600 font-medium">Privacy Policy</a> of AlwaysApply.com
                    </p>

                    <button type="submit" class="w-fit px-10 py-3 bg-brand-purple text-white text-lg font-bold rounded-lg shadow-lg hover:bg-purple-800 transition transform active:scale-95 mt-4">
                        Register now
                    </button>

                    <div class="relative flex py-5 items-center">
                        <div class="flex-grow border-t border-gray-300"></div>
                        <span class="flex-shrink-0 mx-4 text-gray-500 text-sm">or signup with</span>
                        <div class="flex-grow border-t border-gray-300"></div>
                    </div>

                    <div class="flex justify-center gap-6">
                        <button type="button" class="p-3 bg-white border border-gray-200 rounded-full shadow-sm hover:shadow-md transition">
                            <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google" class="w-8 h-8">
                        </button>
                        
                        <button type="button" class="p-3 bg-white border border-gray-200 rounded-full shadow-sm hover:shadow-md transition">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/2021_Facebook_icon.svg" alt="Facebook" class="w-8 h-8">
                        </button>
                        
                        <button type="button" class="p-3 bg-white border border-gray-200 rounded-full shadow-sm hover:shadow-md transition">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn" class="w-8 h-8">
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </main>

    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>