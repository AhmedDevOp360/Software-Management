@extends('layouts.app')

@section('content')


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
                @for ($i = 0; $i < 10; $i++)

                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">
                            Company name
                        </th>
                        <td class="px-6 py-4">
                            Cource name
                        </td>
                        <td class="px-6 py-4">
                            Employee
                        </td>
                        <td class="px-6 py-4">
                            {{ date('d M Y') }}
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
                @endfor

            </tbody>
        </table>
    </div>

@endsection
