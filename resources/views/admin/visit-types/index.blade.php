@extends('layouts.app')

@section('content')

    @if (session('success'))
        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative flash-message-box" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    @if (session('error'))
        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative flash-message-box" role="alert">
            <span class="block sm:inline">{!! session('error') !!}</span>
        </div>
    @endif

    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-3xl font-bold text-gray-900">Types of Visit</h1>

        <div class="flex items-center border border-gray-200 rounded-lg overflow-hidden shadow-sm">
            <a href="{{ route('admin.visit-types.create') }}"
                class="px-5 py-3 font-semibold text-gray-500 hover:text-[#0C3183] hover:bg-blue-50 text-sm flex" title="Create Visit Type">
                <i class="text-gray-500 fa fa-plus"></i>
            </a>
        </div>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 bg-white">
            <thead class="text-xs text-gray-900 uppercase bg-white border-b">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        VISIT TYPE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        YEARS OF VALIDITY
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ACTIONS
                    </th>
                </tr>
            </thead>
            <tbody>
                @if ($visitTypes->count() > 0)
                    @foreach ($visitTypes as $visitType)
                        <tr class="bg-white border-b border-gray-200">
                            <td class="px-6 py-4">
                                {{ $visitType->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $visitType->validity_year }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('admin.visit-types.show', $visitType->id) }}"
                                    class="font-medium text-gray-500 p-2 hover:bg-blue-50 border border-gray-200 rounded-[10px]"
                                    title="View">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.visit-types.edit', $visitType->id) }}"
                                    class="font-medium text-gray-500 p-2 ml-2 hover:bg-blue-50 border border-gray-200 rounded-[10px]"
                                    title="Edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.visit-types.destroy', $visitType->id) }}" method="POST" class="inline-block ml-2" onsubmit="return confirm('Are you sure you want to delete this visit type?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="font-medium text-red-500 p-2 hover:bg-red-50 border border-gray-200 rounded-[10px]"
                                        title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="bg-white border-b border-gray-200">
                        <td colspan="3" class="px-6 py-4 text-center text-gray-500">
                            No data available
                        </td>
                    </tr>
                @endif

            </tbody>
        </table>
    </div>

    <div class="mt-6 flex justify-end">
        {{ $visitTypes->onEachSide(1)->links('pagination::tailwind') }}
    </div>

@endsection
