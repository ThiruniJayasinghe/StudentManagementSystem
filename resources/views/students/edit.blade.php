@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-4">Edit Student</h1>
    
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block">Name</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded" value="{{ old('name', $student->name) }}" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block">Email</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded" value="{{ old('email', $student->email) }}" required>
        </div>

        <div class="mb-4">
            <label for="phone" class="block">Phone</label>
            <input type="text" id="phone" name="phone" class="w-full px-4 py-2 border rounded" value="{{ old('phone', $student->phone) }}" required>
        </div>

        <div class="mb-4">
            <label for="dob" class="block">Date of Birth</label>
            <input type="date" id="dob" name="dob" class="w-full px-4 py-2 border rounded" value="{{ old('dob', $student->dob) }}" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Student</button>
    </form>
</div>
@endsection
