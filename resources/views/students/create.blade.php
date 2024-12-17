@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-4">Add Student</h1>
    
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block">Name</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded" value="{{ old('name') }}" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block">Email</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded" value="{{ old('email') }}" required>
        </div>

        <div class="mb-4">
            <label for="phone" class="block">Phone</label>
            <input type="text" id="phone" name="phone" class="w-full px-4 py-2 border rounded" value="{{ old('phone') }}" required>
        </div>

        <div class="mb-4">
            <label for="dob" class="block">Date of Birth</label>
            <input type="date" id="dob" name="dob" class="w-full px-4 py-2 border rounded" value="{{ old('dob') }}" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save Student</button>
    </form>

    <br><br>
    <a href="{{ url('/welcome1') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4">Back</a>
</div>
@endsection
