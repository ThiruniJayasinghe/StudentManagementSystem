@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-4">Student List</h1>
    <a href="{{ route('students.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4">Add Student</a>
    <br><br>
    <table class="min-w-full table-auto">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Phone</th>
                <th class="px-4 py-2">Date of Birth</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($students as $student)
                <tr>
                    <td class="border px-4 py-2">{{ $student->name }}</td>
                    <td class="border px-4 py-2">{{ $student->email }}</td>
                    <td class="border px-4 py-2">{{ $student->phone }}</td>
                    <td class="border px-4 py-2">{{ $student->dob }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('students.edit', $student->id) }}" class="text-blue-500">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br><br>
    <a href="{{ url('/welcome1') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4">Back</a>

</div>
@endsection
