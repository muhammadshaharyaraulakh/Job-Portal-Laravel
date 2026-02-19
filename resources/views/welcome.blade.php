<x-navigationbar title="AlwaysApply" />

<header class="relative w-full min-h-screen flex items-center bg-gradient-to-r from-purple-50 to-white px-6 md:px-16 overflow-hidden">
    
    <div class="max-w-5xl w-full mx-auto flex flex-col lg:flex-row items-center gap-10">
      
        <div class="w-full lg:w-1/2 z-10 flex flex-col">
            <h1 class="text-3xl md:text-5xl lg:text-5xl font-semibold text-brand-purple leading-tight mb-6 mt-6">
                Find a job that aligns with your interests and skills
            </h1>

            <p class="text-gray-500 text-lg mb-8">
                Thousands of jobs in all the leading sector are waiting for you.
            </p>
            <div class="bg-white p-2 rounded-lg shadow-lg flex flex-col md:flex-col lg:flex-row items-center gap-2 border border-gray-100 w-full">

                <div class="flex items-center px-4 w-full lg:w-auto flex-grow border-b md:border-b-0 lg:border-b-0 lg:border-r border-gray-200 py-3 md:py-0">
                    <i class="fa-solid fa-magnifying-glass text-gray-400 mr-3"></i>
                    <input type="text" placeholder="Job title, Keyword" class="w-full outline-none text-gray-600 placeholder-gray-400">
                </div>
                <div class="flex items-center px-4 w-full lg:w-auto flex-grow py-3 md:py-0">
                    <i class="fa-solid fa-location-dot text-gray-400 mr-3"></i>
                    <input type="text" placeholder="Location" class="w-full outline-none text-gray-600 placeholder-gray-400">
                </div>
                <button class="w-full lg:w-auto px-8 py-3 bg-brand-purple text-white font-medium rounded-md hover:bg-brand-dark transition">
                    Search
                </button>
            </div>
            <p class="text-sm text-gray-500 mt-6">
                Suggestion:
                <span class="text-gray-700">
                    UI/UX Designer, Programming,
                    <span class="text-brand-purple font-medium">
                        Digital Marketing.
                    </span>
                    
                </span>
            </p>
            

        </div>
        <div class="w-full lg:w-1/2 flex justify-center relative mt-10 lg:mt-0">
            <div class="absolute top-0 right-0 w-64 h-64 bg-purple-200 rounded-full filter blur-3xl opacity-30"></div>

            <img src="{{ asset('images/hero.png') }}" 
                 alt="Job Search Illustration" 
                 class="relative z-10 w-full max-w-md object-contain drop-shadow-lg">
        </div>

    </div>
</header>

<section class="py-16 px-6 md:px-16 bg-white w-full overflow-hidden">
    <div class="max-w-5xl w-full mx-auto flex flex-col lg:flex-row items-center gap-10">
        
        <div class="w-full lg:w-1/2 flex justify-center relative mt-10 lg:mt-0 order-2 lg:order-1">
            <div class="absolute top-0 left-0 w-64 h-64 bg-purple-100 rounded-full filter blur-3xl opacity-40"></div>
            
            <img src="{{asset('images/About.png')}}" 
                 alt="About Us Illustration" 
                 class="relative z-10 w-full max-w-md object-contain drop-shadow-sm">
        </div>

        <div class="w-full lg:w-1/2 z-10 flex flex-col order-1 lg:order-2">
            
            <span class="text-brand-purple font-medium text-sm uppercase tracking-wider mb-2">
                Know More About Us
            </span>
            
            <h2 class="text-3xl md:text-4xl lg:text-4xl font-semibold text-gray-900 leading-tight mb-6">
                Bridging the gap between <span class="text-brand-purple">Talent</span> and <span class="text-brand-purple">Opportunity</span>
            </h2>
            
            <p class="text-gray-500 text-lg mb-6 leading-relaxed">
                At AlwaysApply, we believe that finding the right job or the perfect candidate shouldn't be a struggle. Our platform is designed to make the hiring process seamless, transparent, and efficient for both job seekers and top-tier employers.
            </p>

            <div class="flex items-center gap-8 mt-2 mb-8">
                <div class="flex flex-col">
                    <span class="text-3xl font-semibold text-brand-purple">10k+</span>
                    <span class="text-sm text-gray-500 font-medium mt-1">Active Jobs</span>
                </div>
                <div class="w-px h-12 bg-gray-200"></div>
                <div class="flex flex-col">
                    <span class="text-3xl font-semibold text-brand-purple">2k+</span>
                    <span class="text-sm text-gray-500 font-medium mt-1">Internships</span>
                </div>
                <div class="w-px h-12 bg-gray-200"></div>
                <div class="flex flex-col">
                    <span class="text-3xl font-semibold text-brand-purple">5k+</span>
                    <span class="text-sm text-gray-500 font-medium mt-1">Companies</span>
                </div>
            </div>
            
            <div>
                <a href="{{route('jobs')}}" class="inline-block px-8 py-3 border border-brand-purple text-brand-purple font-medium rounded-md hover:bg-brand-purple hover:text-white transition">
                    Looking For Job
                </a>
            </div>

        </div>

    </div>
</section>

    <section class="py-16 px-6 md:px-12 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-brand-purple">Featured Jobs</h2>
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
                <a href="{{route('jobs')}}" class="text-brand-purple font-bold text-lg hover:underline decoration-2 underline-offset-4">View all</a>
            </div>
        </div>
    </section>
<section class="relative w-full py-20 flex items-center bg-gradient-to-l from-purple-50 to-white px-6 md:px-16 overflow-hidden">
    
    <div class="max-w-5xl w-full mx-auto flex flex-col lg:flex-row items-center gap-10">
        
        <div class="w-full lg:w-1/2 z-10 flex flex-col">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-brand-purple leading-tight mb-6">
                Register Your Company
            </h2>
            <p class="text-gray-500 text-lg mb-8">
                Hire the best talent from our pool of thousands of qualified candidates. Post jobs, manage applications, and build your dream team with ease.
            </p>
            <div>
                <a href="{{route('apply')}}">

                <button class="w-full lg:w-auto px-8 py-3 bg-brand-purple text-white font-medium rounded-md hover:bg-brand-dark transition cursor-pointer">
                    Register Now
                </button>
                </a>
                
            </div>
        </div>

        <div class="w-full lg:w-1/2 relative mt-10 lg:mt-0 flex flex-col gap-8">
            
            <div class="flex items-start gap-5">
                <div class="w-14 h-14 rounded-full bg-white shadow-sm border border-purple-100 flex items-center justify-center flex-shrink-0">
                    <i class="fa-solid fa-user-group text-brand-purple text-xl"></i>
                </div>
                <div class="flex flex-col justify-center mt-1">
                    <h4 class="font-semibold text-brand-purple text-xl mb-1">Access Top Talent</h4>
                    <p class="text-gray-500 text-base">Connect with thousands of skilled professionals actively looking for their next opportunity.</p>
                </div>
            </div>

            <div class="flex items-start gap-5">
                <div class="w-14 h-14 rounded-full bg-white shadow-sm border border-purple-100 flex items-center justify-center flex-shrink-0">
                    <i class="fa-solid fa-bolt-lightning text-brand-purple text-xl"></i>
                </div>
                <div class="flex flex-col justify-center mt-1">
                    <h4 class="font-semibold text-brand-purple text-xl mb-1">Fast & Easy Posting</h4>
                    <p class="text-gray-500 text-base">Publish your job requirements in minutes and start receiving applications instantly.</p>
                </div>
            </div>

            <div class="flex items-start gap-5">
                <div class="w-14 h-14 rounded-full bg-white shadow-sm border border-purple-100 flex items-center justify-center flex-shrink-0">
                    <i class="fa-solid fa-table-cells-large text-brand-purple text-xl"></i>
                </div>
                <div class="flex flex-col justify-center mt-1">
                    <h4 class="font-semibold text-brand-purple text-xl mb-1">Advanced Dashboard</h4>
                    <p class="text-gray-500 text-base">Track applicants, shortlist candidates, and manage your entire hiring pipeline in one place.</p>
                </div>
            </div>

        </div>

    </div>
</section>


<x-footer />