@extends('layouts.app')

@section('content')
    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 10px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #e5e7eb;
            width: 50px;
            /* gray-200 */
            border-radius: 9999px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: #0a2c82;
            /* dark blue */
            border-radius: 9999px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background-color: #001b5c;
            /* darker blue */
        }
    </style>

    <div class="container mx-auto px-6 py-8">
        <!-- Page Header -->
        <div class="mb-6 flex items-center justify-between">
            <h1 class="text-2xl font-semibold text-gray-900">Company Information</h1>
            <a href="{{ route('admin.users.index') }}" class="text-[#0C3183] text-sm flex items-center gap-2">
                <i class="fa fa-edit"></i>
                Edit Details
            </a>
        </div>

        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">

                @if ($errors->any())
                    <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                        <strong class="font-bold">Please fix the following errors:</strong>
                        <ul class="mt-2 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Email and Role -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div>
                        <label class="block text-sm font-semibold text-gray-900 mb-2">Email Address</label>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Lorem ipsum"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent @error('email') border-red-500 @enderror">
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-900 mb-2">Role</label>
                        <select type="text" name="role" placeholder="Supervisor"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#0C3183] focus:border-transparent @error('role') border-red-500 @enderror">
                            <option value=""> Select Role </option>
                            <option value="supervisor" {{ old('role') == 'supervisor' ? 'selected' : '' }}> Supervisor </option>
                        </select>
                        @error('role')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Functions Section -->
                <div class="mb-8">
                    <h3 class="text-sm font-semibold text-gray-900 mb-4">Functions</h3>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <!-- Company & RSVP -->
                        <div>
                            <label
                                class="border border-gray-300 rounded-lg px-4 py-3 flex items-start justify-between cursor-pointer hover:bg-gray-50 has-[:checked]:border-[#0C3183] has-[:checked]:bg-blue-50 h-full">
                                <div class="flex-1">
                                    <span class="text-sm font-medium text-gray-900 block">Company & RSVP</span>
                                    <span class="text-xs text-gray-500 mt-1 block">Permission to modify the company profile
                                        and RSVP data</span>
                                </div>
                                <input type="checkbox" name="functions[]" value="company_rsvp"
                                    {{ in_array('company_rsvp', old('functions', [])) ? 'checked' : '' }}
                                    class="w-6 h-6 appearance-none bg-white border-2 border-gray-400 rounded-full cursor-pointer checked:border-[5px] checked:border-[#0C3183]  flex-shrink-0 mt-1">
                            </label>
                        </div>

                        <!-- PPE -->
                        <div>
                            <label
                                class="border border-gray-300 rounded-lg px-4 py-3 flex items-start justify-between cursor-pointer hover:bg-gray-50 has-[:checked]:border-[#0C3183] has-[:checked]:bg-blue-50 h-full">
                                <div class="flex-1">
                                    <span class="text-sm font-medium text-gray-900 block">PPE</span>
                                    <span class="text-xs text-gray-500 mt-1 block">To access PPE, it is also necessary to
                                        grant the Workers' right</span>
                                </div>
                                <input type="checkbox" name="functions[]" value="ppe"
                                    {{ in_array('ppe', old('functions', [])) ? 'checked' : '' }}
                                    class="w-6 h-6 appearance-none bg-white border-2 border-gray-400 rounded-full cursor-pointer checked:border-[5px] checked:border-[#0C3183]  flex-shrink-0 mt-1">
                            </label>
                        </div>

                        <!-- Training Plan -->
                        <div>
                            <label
                                class="border border-gray-300 rounded-lg px-4 py-3 flex items-start justify-between cursor-pointer hover:bg-gray-50 has-[:checked]:border-[#0C3183] has-[:checked]:bg-blue-50 h-full">
                                <div class="flex-1">
                                    <span class="text-sm font-medium text-gray-900 block">Training Plan</span>
                                    <span class="text-xs text-gray-500 mt-1 block">To access the training plan</span>
                                </div>
                                <input type="checkbox" name="functions[]" value="training_plan"
                                    {{ in_array('training_plan', old('functions', [])) ? 'checked' : '' }}
                                    class="w-6 h-6 appearance-none bg-white border-2 border-gray-400 rounded-full cursor-pointer checked:border-[5px] checked:border-[#0C3183]  flex-shrink-0 mt-1">
                            </label>
                        </div>

                        <!-- Health Surveillance -->
                        <div>
                            <label
                                class="border border-gray-300 rounded-lg px-4 py-3 flex items-start justify-between cursor-pointer hover:bg-gray-50 has-[:checked]:border-[#0C3183] has-[:checked]:bg-blue-50 h-full">
                                <div class="flex-1">
                                    <span class="text-sm font-medium text-gray-900 block">Health Surveillance</span>
                                    <span class="text-xs text-gray-500 mt-1 block">To access health surveillance</span>
                                </div>
                                <input type="checkbox" name="functions[]" value="health_surveillance"
                                    {{ in_array('health_surveillance', old('functions', [])) ? 'checked' : '' }}
                                    class="w-6 h-6 appearance-none bg-white border-2 border-gray-400 rounded-full cursor-pointer checked:border-[5px] checked:border-[#0C3183]  flex-shrink-0 mt-1">
                            </label>
                        </div>

                        <!-- Inspections -->
                        <div>
                            <label
                                class="border border-gray-300 rounded-lg px-4 py-3 flex items-center justify-between cursor-pointer hover:bg-gray-50 has-[:checked]:border-[#0C3183] has-[:checked]:bg-blue-50 h-full">
                                <span class="text-sm font-medium text-gray-900">Inspections</span>
                                <input type="checkbox" name="functions[]" value="inspections"
                                    {{ in_array('inspections', old('functions', [])) ? 'checked' : '' }}
                                    class="w-6 h-6 appearance-none bg-white border-2 border-gray-400 rounded-full cursor-pointer checked:border-[5px] checked:border-[#0C3183] ">
                            </label>
                        </div>

                        <!-- Workers -->
                        <div>
                            <label
                                class="border border-gray-300 rounded-lg px-4 py-3 flex items-center justify-between cursor-pointer hover:bg-gray-50 has-[:checked]:border-[#0C3183] has-[:checked]:bg-blue-50 h-full">
                                <span class="text-sm font-medium text-gray-900">Workers</span>
                                <input type="checkbox" name="functions[]" value="workers"
                                    {{ in_array('workers', old('functions', [])) ? 'checked' : '' }}
                                    class="w-6 h-6 appearance-none bg-white border-2 border-gray-400 rounded-full cursor-pointer checked:border-[5px] checked:border-[#0C3183] ">
                            </label>
                        </div>

                        <!-- Documents -->
                        <div>
                            <label
                                class="border border-gray-300 rounded-lg px-4 py-3 flex items-center justify-between cursor-pointer hover:bg-gray-50 has-[:checked]:border-[#0C3183] has-[:checked]:bg-blue-50 h-full">
                                <span class="text-sm font-medium text-gray-900">Documents</span>
                                <input type="checkbox" name="functions[]" value="documents"
                                    {{ in_array('documents', old('functions', [])) ? 'checked' : '' }}
                                    class="w-6 h-6 appearance-none bg-white border-2 border-gray-400 rounded-full cursor-pointer checked:border-[5px] checked:border-[#0C3183] ">
                            </label>
                        </div>

                        <!-- Maintenance -->
                        <div>
                            <label
                                class="border border-gray-300 rounded-lg px-4 py-3 flex items-center justify-between cursor-pointer hover:bg-gray-50 has-[:checked]:border-[#0C3183] has-[:checked]:bg-blue-50 h-full">
                                <span class="text-sm font-medium text-gray-900">Maintenance</span>
                                <input type="checkbox" name="functions[]" value="maintenance"
                                    {{ in_array('maintenance', old('functions', [])) ? 'checked' : '' }}
                                    class="w-6 h-6 appearance-none bg-white border-2 border-gray-400 rounded-full cursor-pointer checked:border-[5px] checked:border-[#0C3183] ">
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Visible Companies and Administration Functions Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Visible Companies -->
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900 mb-4">Visible Companies</h3>
                        <div class="border border-gray-300 rounded-lg p-4">
                            <div class="mb-3">
                                <p class="w-full px-3 py-2 text-sm ">
                                    Near
                                </p>
                            </div>
                            <div class="h-[10rem] overflow-y-auto space-y-3 px-2 custom-scrollbar">
                                @foreach ($companies as $company)
                                    <label class="flex items-center gap-3 cursor-pointer">
                                        <input type="checkbox" name="visible_company[]" value="{{ $company->id }}"
                                            {{ in_array($company->id, old('visible_company', [])) ? 'checked' : '' }}
                                            class="w-6 h-6 appearance-none bg-white border-2 border-gray-400 rounded-full cursor-pointer checked:border-[5px] checked:border-[#0C3183] ">
                                        <span class="text-sm text-gray-900">{{ $company->name }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Administration Functions -->
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900 mb-4">Administration Functions</h3>
                        <div class="space-y-4">
                            <label
                                class="border border-gray-300 rounded-lg px-4 py-3 flex items-center justify-between cursor-pointer hover:bg-gray-50 has-[:checked]:border-[#0C3183] has-[:checked]:bg-blue-50">
                                <span class="text-sm font-medium text-gray-900">Content Management</span>
                                <input type="checkbox" name="admin_functions[]" value="content_management"
                                    {{ in_array('content_management', old('admin_functions', [])) ? 'checked' : '' }}
                                    class="w-6 h-6 appearance-none bg-white border-2 border-gray-400 rounded-full cursor-pointer checked:border-[5px] checked:border-[#0C3183] ">
                            </label>
                            <label
                                class="border border-gray-300 rounded-lg px-4 py-3 flex items-center justify-between cursor-pointer hover:bg-gray-50 has-[:checked]:border-[#0C3183] has-[:checked]:bg-blue-50">
                                <span class="text-sm font-medium text-gray-900">Users</span>
                                <input type="checkbox" name="admin_functions[]" value="users"
                                    {{ in_array('users', old('admin_functions', [])) ? 'checked' : '' }}
                                    class="w-6 h-6 appearance-none bg-white border-2 border-gray-400 rounded-full cursor-pointer checked:border-[5px] checked:border-[#0C3183] ">
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-end">
                    <button type="submit"
                        class="bg-[#0C3183] text-white px-8 py-3 rounded-lg hover:bg-[#0a2766] transition-colors">
                        Save
                    </button>
                </div>

            </div>
        </form>
    </div>
@endsection
