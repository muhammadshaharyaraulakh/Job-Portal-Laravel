<x-navigationbar title="Register Company" />

<main class="max-w-5xl mx-auto px-6 py-12">
    
    <div class="mb-10 text-center md:text-left">
        <h1 class="text-3xl text-gray-900 mt-2">Register Your Company</h1>
        <p class="text-gray-500 mt-2 text-lg">Create your employer profile to start posting jobs and hiring top talent.</p>
    </div>

    <form action="#" method="POST" enctype="multipart/form-data" class="space-y-10 bg-white p-6 md:p-10 rounded-2xl shadow-sm border border-gray-100">
        @csrf
        
        <div>
            <h3 class="text-xl text-brand-purple border-b border-gray-100 pb-3 mb-6 flex items-center gap-3">
               1 - Company Details
            </h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="font-medium text-gray-700 text-sm">Company Name <span class="text-red-500">*</span></label>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter company name" required
                        class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple placeholder-gray-400">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="font-medium text-gray-700 text-sm">Company Logo <span class="text-gray-400 text-xs">(PNG, JPG)</span></label>
                    <div class="file-upload-wrapper">
                        <span class="file-custom-text">Choose logo</span>
                        <input type="file" name="logo" accept=".jpg,.png,.jpeg" class="file-input">
                        <i class="fa-solid fa-cloud-arrow-up upload-icon"></i>
                    </div>
                    @error('logo')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="font-medium text-gray-700 text-sm">Official Email <span class="text-red-500">*</span></label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="contact@company.com" required
                        class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple placeholder-gray-400">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="font-medium text-gray-700 text-sm">Official Phone Number <span class="text-red-500">*</span></label>
                    <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="+923232133120" required
                        class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple placeholder-gray-400">
                    @error('phone')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2 md:col-span-2">
                    <label class="font-medium text-gray-700 text-sm">Description</label>
                    <textarea name="description" rows="4" placeholder="Briefly describe what your company does..."
                        class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple placeholder-gray-400 resize-none">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div>
             <h3 class="text-xl text-brand-purple border-b border-gray-100 pb-3 mb-6 flex items-center gap-3">
               2 - Legal and Location
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="font-medium text-gray-700 text-sm">National Tax Number (NTN)</label>
                    <input type="text" name="ntn" value="{{ old('ntn') }}" placeholder="1234567-8"
                        class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple placeholder-gray-400">
                    @error('ntn')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="font-medium text-gray-700 text-sm">SECP Registration Number</label>
                    <input type="text" name="secp_number" value="{{ old('secp_number') }}" placeholder="1234567"
                        class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple placeholder-gray-400">
                    @error('secp_number')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2 md:col-span-2">
                    <label class="font-medium text-gray-700 text-sm">Complete Address <span class="text-red-500">*</span></label>
                    <input type="text" name="address" value="{{ old('address') }}" placeholder="Exact Location" 
                        class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple placeholder-gray-400">
                    @error('address')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="font-medium text-gray-700 text-sm">City</label>
                    <input type="text" name="city" value="{{ old('city') }}" placeholder="e.g. Lahore"
                        class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple placeholder-gray-400">
                    @error('city')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="font-medium text-gray-700 text-sm">Province</label>
                    <input type="text" name="province" value="{{ old('province') }}" placeholder="e.g. Punjab"
                        class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple placeholder-gray-400">
                    @error('province')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="font-medium text-gray-700 text-sm">Postal Code</label>
                    <input type="text" name="postal_code" value="{{ old('postal_code') }}" placeholder="e.g. 54000"
                        class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple placeholder-gray-400">
                    @error('postal_code')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="font-medium text-gray-700 text-sm">Latitude (Map)</label>
                    <input type="number" step="0.00000001" name="location_lat" value="{{ old('location_lat') }}" placeholder="e.g. 31.5204"
                        class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple placeholder-gray-400">
                    @error('location_lat')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="font-medium text-gray-700 text-sm">Longitude (Map)</label>
                    <input type="number" step="0.00000001" name="location_lng" value="{{ old('location_lng') }}" placeholder="e.g. 74.3587"
                        class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple placeholder-gray-400">
                    @error('location_lng')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div>
            <h3 class="text-xl text-brand-purple border-b border-gray-100 pb-3 mb-6 flex items-center gap-3">
               3 - Website and Social Links
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <div class="flex border border-gray-200 rounded-lg overflow-hidden focus-within:border-brand-purple focus-within:ring-1 focus-within:ring-brand-purple transition-all">
                        <span class="bg-gray-50 text-gray-500 px-4 py-3 border-r border-gray-200 flex items-center justify-center w-14"><i class="fa-solid fa-globe"></i></span>
                        <input type="url" name="website" value="{{ old('website') }}" placeholder="Website URL" class="w-full px-4 py-3 text-gray-700 focus:outline-none placeholder-gray-400 text-sm">
                    </div>
                    @error('website')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="space-y-2">
                    <div class="flex border border-gray-200 rounded-lg overflow-hidden focus-within:border-brand-purple focus-within:ring-1 focus-within:ring-brand-purple transition-all">
                        <span class="bg-gray-50 text-gray-500 px-4 py-3 border-r border-gray-200 flex items-center justify-center w-14"><i class="fa-brands fa-linkedin text-lg"></i></span>
                        <input type="url" name="linkedin" value="{{ old('linkedin') }}" placeholder="LinkedIn URL" class="w-full px-4 py-3 text-gray-700 focus:outline-none placeholder-gray-400 text-sm">
                    </div>
                    @error('linkedin')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="space-y-2">
                    <div class="flex border border-gray-200 rounded-lg overflow-hidden focus-within:border-brand-purple focus-within:ring-1 focus-within:ring-brand-purple transition-all">
                        <span class="bg-gray-50 text-gray-500 px-4 py-3 border-r border-gray-200 flex items-center justify-center w-14"><i class="fa-brands fa-facebook text-lg"></i></span>
                        <input type="url" name="facebook" value="{{ old('facebook') }}" placeholder="Facebook URL" class="w-full px-4 py-3 text-gray-700 focus:outline-none placeholder-gray-400 text-sm">
                    </div>
                    @error('facebook')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <div class="flex border border-gray-200 rounded-lg overflow-hidden focus-within:border-brand-purple focus-within:ring-1 focus-within:ring-brand-purple transition-all">
                        <span class="bg-gray-50 text-gray-500 px-4 py-3 border-r border-gray-200 flex items-center justify-center w-14"><i class="fa-brands fa-twitter text-lg"></i></span>
                        <input type="url" name="twitter" value="{{ old('twitter') }}" placeholder="Twitter URL" class="w-full px-4 py-3 text-gray-700 focus:outline-none placeholder-gray-400 text-sm">
                    </div>
                    @error('twitter')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <div class="flex border border-gray-200 rounded-lg overflow-hidden focus-within:border-brand-purple focus-within:ring-1 focus-within:ring-brand-purple transition-all">
                        <span class="bg-gray-50 text-gray-500 px-4 py-3 border-r border-gray-200 flex items-center justify-center w-14"><i class="fa-brands fa-github text-lg"></i></span>
                        <input type="url" name="github" value="{{ old('github') }}" placeholder="GitHub URL" class="w-full px-4 py-3 text-gray-700 focus:outline-none placeholder-gray-400 text-sm">
                    </div>
                    @error('github')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div>
            <h3 class="text-xl text-brand-purple border-b border-gray-100 pb-3 mb-6 flex items-center gap-3">
               4 - HR Manager for Job Posting
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="font-medium text-gray-700 text-sm">Full Name <span class="text-red-500">*</span></label>
                    <input type="text" name="hr_name" value="{{ old('hr_name') }}" placeholder="Enter name" required
                        class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple placeholder-gray-400">
                    @error('hr_name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="font-medium text-gray-700 text-sm">Official Email <span class="text-red-500">*</span></label>
                    <input type="email" name="hr_email" value="{{ old('hr_email') }}" placeholder="hr@company.com" required
                        class="w-full border border-gray-200 rounded-lg px-4 py-3 text-gray-700 focus:outline-none focus:border-brand-purple focus:ring-1 focus:ring-brand-purple placeholder-gray-400">
                    @error('hr_email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2 md:col-span-2 lg:col-span-1">
                    <label class="font-medium text-gray-700 text-sm"> WhatsApp <span class="text-red-500">*</span></label>
                    <div class="flex border border-gray-200 rounded-lg overflow-hidden focus-within:border-brand-purple focus-within:ring-1 focus-within:ring-brand-purple">
                        <span class="bg-gray-50 text-gray-500 font-medium px-4 py-3 border-r border-gray-200 flex items-center"><i class="fa-brands fa-whatsapp text-green-500 text-lg mr-1"></i></span>
                        <input type="tel" name="hr_phone" value="{{ old('hr_phone') }}" placeholder="Enter mobile number" required class="w-full px-4 py-3 text-gray-700 focus:outline-none placeholder-gray-400">
                    </div>
                    @error('hr_phone')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="hidden lg:block"></div>

                <div class="space-y-2">
                    <label class="font-medium text-gray-700 text-sm">Upload CNIC <span class="text-gray-400 text-xs">(Front)</span></label>
                    <div class="file-upload-wrapper">
                        <span class="file-custom-text">Choose Front Image</span>
                        <input type="file" name="hr_cnic_front" class="file-input">
                        <i class="fa-solid fa-cloud-arrow-up upload-icon"></i>
                    </div>
                    @error('hr_cnic_front')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                 <div class="space-y-2">
                    <label class="font-medium text-gray-700 text-sm">Upload CNIC <span class="text-gray-400 text-xs">(Back)</span></label>
                    <div class="file-upload-wrapper">
                        <span class="file-custom-text">Choose Back Image</span>
                        <input type="file" name="hr_cnic_back" class="file-input">
                        <i class="fa-solid fa-cloud-arrow-up upload-icon"></i>
                    </div>
                    @error('hr_cnic_back')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="font-medium text-gray-700 text-sm">Upload Employee Card</label>
                    <div class="file-upload-wrapper">
                        <span class="file-custom-text">Choose file </span>
                        <input type="file" name="hr_card_path" class="file-input">
                        <i class="fa-solid fa-cloud-arrow-up upload-icon"></i>
                    </div>
                    @error('hr_card_path')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="pt-8 border-t border-gray-100 flex items-center justify-end">
            <button type="submit" class="bg-brand-purple text-white font-semibold text-lg px-10 py-3.5 rounded-lg shadow-md hover:bg-brand-dark transition transform active:scale-95 w-full md:w-auto flex items-center justify-center gap-2">
                Complete Registration 
            </button>
        </div>

    </form>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select all inputs with the class 'file-input'
        const fileInputs = document.querySelectorAll('.file-input');
        
        fileInputs.forEach(input => {
            input.addEventListener('change', function(e) {
                const wrapper = this.parentElement;
                const textSpan = wrapper.querySelector('.file-custom-text');
                
                if (this.files && this.files.length > 0) {
                    textSpan.textContent = this.files[0].name;
                    textSpan.classList.add('text-gray-800');
                    textSpan.classList.remove('text-gray-400');
                } else {
                    // Fallback text if the user cancels file selection
                    textSpan.textContent = "Choose file...";
                    textSpan.classList.remove('text-gray-800');
                    textSpan.classList.add('text-gray-400');
                }
            });
        });
    });
</script>
</body>
</html>