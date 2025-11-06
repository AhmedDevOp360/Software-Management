@extends('layouts.auth')

@section('title', 'Registration - Management Software')

@section('content')
    <div class="w-full max-w-2xl">
        <h1 class="text-5xl font-bold text-[#0C3183] mb-2 text-center">Management Software</h1>
        <div class="bg-white rounded-2xl shadow-lg px-12 py-4">
            <h2 class="text-4xl font-bold text-gray-900 mb-2 text-center">Register your company</h2>
            <p class="text-gray-600 text-sm text-center mb-8">Enter your company details to register!</p>

            @if ($errors->any())
                <div class="mb-4 p-4 bg-red-50 border border-red-200 rounded-lg">
                    <ul class="text-sm text-red-600 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}" class="space-y-2">
                @csrf

                <!-- Company Name and VAT Number -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <input type="text" name="company_name" value="{{ old('company_name') }}"
                            placeholder="Company Name"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('company_name') border-red-500 @enderror"
                            required>
                    </div>
                    <div>
                        <input type="text" name="vat_number" value="{{ old('vat_number') }}" placeholder="VAT Number"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('vat_number') border-red-500 @enderror"
                            required>
                    </div>
                </div>

                <!-- Email and Phone Number -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email Address"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('email') border-red-500 @enderror"
                            required>
                    </div>
                    <div>
                        <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="Phone Number"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('phone') border-red-500 @enderror"
                            required>
                    </div>
                </div>

                <!-- Legal Headquarters Section -->
                <div>
                    <label class="block text-gray-600 font-medium mb-3">Legal Headquarters</label>
                    <div class="grid grid-cols-4 gap-4">
                        <div>
                            <input type="text" name="legal_address_street" value="{{ old('legal_address_street') }}"
                                placeholder="Street"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('legal_address_street') border-red-500 @enderror"
                                required>
                        </div>
                        <div>
                            <input type="text" name="legal_address_number" value="{{ old('legal_address_number') }}"
                                placeholder="No"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('legal_address_number') border-red-500 @enderror"
                                required>
                        </div>
                        <div>
                            <input type="text" name="legal_address_postal" value="{{ old('legal_address_postal') }}"
                                placeholder="Postal Code"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('legal_address_postal') border-red-500 @enderror"
                                required>
                        </div>
                        <div>
                            <input type="text" name="legal_address_city" value="{{ old('legal_address_city') }}"
                                placeholder="City"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('legal_address_city') border-red-500 @enderror"
                                required>
                        </div>
                    </div>
                </div>

                <!-- Operating Headquarters Section -->
                <div>
                    <label class="block text-gray-600 font-medium mb-3">Operating Headquarters</label>
                    <div class="grid grid-cols-4 gap-4">
                        <div>
                            <input type="text" name="operating_address_street" value="{{ old('operating_address_street') }}"
                                placeholder="Street"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('operating_address_street') border-red-500 @enderror"
                                required>
                        </div>
                        <div>
                            <input type="text" name="operating_address_number" value="{{ old('operating_address_number') }}"
                                placeholder="No"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('operating_address_number') border-red-500 @enderror"
                                required>
                        </div>
                        <div>
                            <input type="text" name="operating_address_postal" value="{{ old('operating_address_postal') }}"
                                placeholder="Postal Code"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('operating_address_postal') border-red-500 @enderror"
                                required>
                        </div>
                        <div>
                            <input type="text" name="operating_address_city" value="{{ old('operating_address_city') }}"
                                placeholder="City"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('operating_address_city') border-red-500 @enderror"
                                required>
                        </div>
                    </div>
                </div>

                <!-- Owner Name -->
                <div>
                    <input type="text" name="owner_name" value="{{ old('owner_name') }}" placeholder="Owner Name"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('owner_name') border-red-500 @enderror"
                        required>
                </div>

                <!-- Password Fields -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <input type="password" name="password" placeholder="Password"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('password') border-red-500 @enderror"
                            required>
                    </div>
                    <div>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required>
                    </div>
                </div>

                <!-- Terms and Conditions Checkbox -->
                <div class="flex items-center mt-4">
                    <input type="checkbox" id="terms" name="terms"
                        class="w-4 h-4 text-blue-600 border border-gray-300 rounded focus:ring-blue-500 @error('terms') border-red-500 @enderror"
                        required>
                    <label for="terms" class="ml-2 text-sm text-gray-700">
                        I accept the <a href="#" class="text-red-500 hover:text-red-700 font-medium">License Terms</a>
                    </label>
                </div>

                <!-- Action Buttons -->
                <div class="flex gap-4 mt-6">
                    <a href="{{ route('login') }}"
                        class="px-12 py-3 border-2 border-red-500 text-red-500 rounded-lg font-semibold hover:bg-red-50 transition duration-200 text-center">
                        Cancel
                    </a>
                    <button type="submit"
                        class="flex-1 px-12 py-3 bg-[#0C3183] text-white rounded-lg font-semibold hover:bg-blue-800 transition duration-200">
                        Submit Registration
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
