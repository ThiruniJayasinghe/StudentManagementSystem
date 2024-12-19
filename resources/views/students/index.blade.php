@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4 bg-cover bg-center">
    <h1 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Student List</h1>
    <div class="flex justify-center items-center mb-6 space-x-4">
        <a href="{{ route('students.create') }}" 
           class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded shadow-md transition-all duration-200">Add Student</a>
        <a href="{{ url('/welcome1') }}" 
           class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2 rounded shadow-md transition-all duration-200">Back</a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full table-auto border-collapse border border-gray-300 text-center bg-cover bg-center" style="background-image: url('{{ asset('images/table-background.jpg') }}');">
            <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="px-6 py-3 text-center border border-gray-300">Name</th>
                    <th class="px-6 py-3 text-center border border-gray-300">Email</th>
                    <th class="px-6 py-3 text-center border border-gray-300">Phone</th>
                    <th class="px-6 py-3 text-center border border-gray-300">Date of Birth</th>
                    <th class="px-6 py-3 text-center border border-gray-300">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-3 border border-gray-300 text-gray-800">{{ $student->name }}</td>
                        <td class="px-6 py-3 border border-gray-300 text-gray-800">{{ $student->email }}</td>
                        <td class="px-6 py-3 border border-gray-300 text-gray-800">{{ $student->phone }}</td>
                        <td class="px-6 py-3 border border-gray-300 text-gray-800">{{ $student->dob }}</td>
                        <td class="px-6 py-3 border border-gray-300 text-gray-800">
                            <div class="flex justify-center space-x-4">
                                <a href="{{ route('students.edit', $student->id) }}" 
                                   class="text-blue-500 hover:text-blue-700">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="text-red-500 hover:text-red-700">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-6 p-4 bg-cover bg-center" style="background-image: url('{{ asset('images/after-table-background.jpg') }}');">
        <p class="text-center text-gray-800">Thank you for visiting the student list page!</p>
    </div>
</div>
@endsection