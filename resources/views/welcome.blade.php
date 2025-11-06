@extends('layouts.app')

@section('content')

    <!-- Header Section -->
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-3xl font-bold text-gray-900">Hello, {{ $currentCompany->name ?? 'Guest' }}</h1>

        <div class="flex items-center border border-gray-200 rounded-lg overflow-hidden shadow-sm">

            <!-- Left Section -->
            <div class="bg-blue-50 px-5 py-3 font-semibold text-[#0C3183] text-sm border-r border-gray-200">
                DEADLINES
            </div>

            <!-- Status -->
            <div class="px-6 py-3 text-sm font-semibold text-gray-900 border-r border-gray-200">
                TO BE SCHEDULED
            </div>

            <!-- From Date -->
            <div class="px-6 py-3 flex items-center space-x-2 border-r border-gray-200 text-sm">
                <span class="text-gray-600 font-medium">From:</span>
                <input type="date" value="2025-10-23"
                    class="bg-transparent border border-gray-300 rounded-md px-2 py-1 text-gray-800 font-medium focus:outline-none focus:ring-1 focus:ring-indigo-500" />
            </div>

            <!-- To Date -->
            <div class="px-6 py-3 flex items-center space-x-2 border-r border-gray-200 text-sm">
                <span class="text-gray-600 font-medium">To:</span>
                <input type="date" value="2025-10-23"
                    class="bg-transparent border border-gray-300 rounded-md px-2 py-1 text-gray-800 font-medium focus:outline-none focus:ring-1 focus:ring-indigo-500" />
            </div>

            <!-- Dropdown -->
            <div class="px-6 py-3 border-r border-gray-200 text-sm">
                <select class="bg-transparent focus:outline-none text-gray-800 font-medium">
                    <option>Deadlines</option>
                </select>
            </div>

            <!-- Reset Filter -->
            <div
                class="flex items-center px-5 py-3 text-red-600 cursor-pointer hover:text-red-700 text-sm font-medium space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.5 12a7.5 7.5 0 1113.41 4.59M4.5 12H9m-4.5 0H3m1.5 0a7.5 7.5 0 0113.41-4.59" />
                </svg>
                <span>Reset Filter</span>
            </div>

        </div>
    </div>

    <!-- Table Section -->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 bg-white">
            <thead class="text-xs text-gray-900 uppercase bg-white border-b">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        COMPANY NAME
                    </th>
                    <th scope="col" class="px-6 py-3">
                        COURSE NAME
                    </th>
                    <th scope="col" class="px-6 py-3">
                        EMPLOYEE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        EXPIRY DATE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ACTIONS
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($companies as $company)
                    @foreach ($company->users as $user)
                        <tr class="bg-white border-b border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">
                                {{ $company->name }}
                            </th>
                            <td class="px-6 py-4">
                                Course Name
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ \Carbon\Carbon::now()->addDays(rand(30, 180))->format('d M Y') }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-gray-500 p-2 hover:bg-blue-50 border border-gray-200 rounded-[10px]">
                                    <i class="fa-regular fa-eye ml-[2px]"></i>
                                </a>
                                <a href="#" class="font-medium text-red-500 p-2 ml-2 hover:bg-blue-50 border border-gray-200 rounded-[10px]">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @empty
                    <tr class="bg-white border-b border-gray-200">
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                            No data available
                        </td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>

@endsection
