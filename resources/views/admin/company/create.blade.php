@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-8">
        <!-- Page Header -->
        <div class="mb-6 flex items-center justify-between">
            <h1 class="text-3xl font-bold text-gray-900">Companies</h1>
        </div>

        <form action="{{ route('admin.companies.store') }}" method="POST">
            @csrf
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">

                <!-- Row 1 -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                        <input type="text" name="company_name" placeholder="Lorem ipsum"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">VAT Number</label>
                        <input type="text" name="vat_number" placeholder="Lorem ipsum"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tax Code</label>
                        <input type="text" name="tax_code" placeholder="Lorem ipsum"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Ateco</label>
                        <input type="text" name="ateco" placeholder="Lorem ipsum"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">SDI</label>
                        <input type="text" name="sdi" placeholder="Lorem ipsum"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Registered office</label>
                        <input type="text" name="registered_office" placeholder="Lorem ipsum"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Operating office</label>
                        <input type="text" name="operating_office" placeholder="Lorem ipsum"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Main email</label>
                        <input type="email" name="main_email" placeholder="Lorem ipsum"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                    </div>
                </div>

                <!-- Row 3 -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">PEC (certified email)</label>
                        <input type="email" name="pec_email" placeholder="Lorem ipsum"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                        <input type="tel" name="phone" placeholder="Lorem ipsum"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Phone 2</label>
                        <input type="tel" name="phone_2" placeholder="Lorem ipsum"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Company contact person</label>
                        <input type="text" name="company_contact_person" placeholder="Lorem ipsum"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                    </div>
                </div>

                <!-- Row 4 -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Employer</label>
                        <input type="text" name="employer" placeholder="Lorem ipsum"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Head of the Prevention and Protection
                            Service</label>
                        <input type="text" name="head_of_prevention" placeholder="Lorem ipsum"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Workers' Safety Representative</label>
                        <input type="text" name="workers_safety_representative" placeholder="Lorem ipsum"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Company doctor</label>
                        <input type="text" name="company_doctor" placeholder="Lorem ipsum"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                    </div>
                </div>

                <!-- Row 5 - Toggles/Radio/Dropdown -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                    <div>
                        <label
                            class="border border-gray-300 rounded-lg px-4 py-3 flex items-center justify-between cursor-pointer hover:bg-gray-50 has-[:checked]:border-[#0C3183] has-[:checked]:bg-blue-50">
                            <span class="text-sm font-medium text-gray-800">Workplace Safety Risk</span>
                            <input type="checkbox" name="workplace_safety_risk" value="1"
                                class="w-6 h-6 appearance-none bg-white border-2 border-gray-400 rounded-full cursor-pointer checked:border-[5px] checked:border-[#0C3183] focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:ring-offset-2">
                        </label>
                    </div>
                    <div>
                        <label
                            class="border border-gray-300 rounded-lg px-4 py-3 flex items-center justify-between cursor-pointer hover:bg-gray-50 has-[:checked]:border-[#0C3183] has-[:checked]:bg-blue-50">
                            <span class="text-sm font-medium text-gray-800">Subject to CPI:</span>
                            <input type="checkbox" name="subject_to_cpi" value="1"
                                class="w-6 h-6 appearance-none bg-white border-2 border-gray-400 rounded-full cursor-pointer checked:border-[5px] checked:border-[#0C3183] focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:ring-offset-2">
                        </label>
                    </div>
                    <div>
                        <select name="rischio_antincendio"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent appearance-none bg-white cursor-pointer">
                            <option>Rischio Antincendio</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                </div>

                <!-- External Professional Contacts -->
                <div class="mb-6">
                    <h3 class="text-sm font-semibold text-gray-800 mb-4">External Professional Contacts*</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <input type="text" name="accountant_name" placeholder="Accountant: name"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                        </div>
                        <div>
                            <input type="tel" name="accountant_phone" placeholder="Phone"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                        </div>
                        <div>
                            <input type="email" name="accountant_email" placeholder="Email"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                        </div>
                    </div>
                </div>

                <!-- Labor Consultant -->
                <div class="mb-6">
                    <h3 class="text-sm font-semibold text-gray-800 mb-4">Labor Consultant</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <input type="text" name="labor_consultant_name" placeholder="Name"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                        </div>
                        <div>
                            <input type="tel" name="labor_consultant_phone" placeholder="Phone"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                        </div>
                        <div>
                            <input type="email" name="labor_consultant_email" placeholder="Email"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent">
                        </div>
                    </div>
                </div>

                <!-- Notes -->
                <div class="mb-6">
                    <h3 class="text-sm font-semibold text-gray-800 mb-4">Notes</h3>
                    <textarea name="notes" rows="4" placeholder="Lorem ipsum"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent resize-none"></textarea>
                </div>

                <!-- Notification and Freeze Options -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div>
                        <label
                            class="border border-gray-300 rounded-lg px-4 py-3 flex items-center justify-between cursor-pointer hover:bg-gray-50 has-[:checked]:border-[#0C3183] has-[:checked]:bg-blue-50">
                            <span class="text-sm font-medium text-gray-800">Send Deadline Notification</span>
                            <input type="checkbox" name="send_deadline_notification" value="1"
                                class="w-6 h-6 appearance-none bg-white border-2 border-gray-400 rounded-full cursor-pointer checked:border-[5px] checked:border-[#0C3183] focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:ring-offset-2">
                        </label>
                    </div>
                    <div>
                        <label
                            class="border border-gray-300 rounded-lg px-4 py-3 flex items-center justify-between cursor-pointer hover:bg-gray-50 has-[:checked]:border-[#0C3183] has-[:checked]:bg-blue-50">
                            <span class="text-sm font-medium text-gray-800">Freeze Company</span>
                            <input type="checkbox" name="freeze_company" value="1"
                                class="w-6 h-6 appearance-none bg-white border-2 border-gray-400 rounded-full cursor-pointer checked:border-[5px] checked:border-[#0C3183] focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:ring-offset-2">
                        </label>
                    </div>
                </div>

                <!-- Contacts Selection -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-800 mb-4">Contacts Select at least one</h3>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        @foreach($userEmails as $email)
                            <div>
                                <label
                                    class="border border-gray-300 rounded-lg px-4 py-3 flex items-center justify-between cursor-pointer hover:bg-gray-50 has-[:checked]:border-[#0C3183] has-[:checked]:bg-blue-50">
                                    <span class="text-sm text-gray-800">{{ $email->email }}</span>
                                    <input type="checkbox" name="contacts[]" value="{{ $email->email }}"
                                        class="w-6 h-6 appearance-none bg-white border-2 border-gray-400 rounded-full cursor-pointer checked:border-[5px] checked:border-[#0C3183] focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:ring-offset-2">
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-6">
                    <div class="text-end">
                        <button type="submit" class="bg-[#0C3183] text-white px-6 py-3 rounded-lg mt-6">Save</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection
