@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-3xl font-bold text-center mb-6 text-blue-600">Add Student</h1>
    
    <form action="{{ route('students.store') }}" method="POST" class="space-y-6 text-right">
        @csrf

        <!--fields-->
        <div class="mb-4">
            <label for="name" class="block text-lg font-medium text-gray-700 text-left">Name</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 focus:outline-none" 
                value="{{ old('name') }}" 
                required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-lg font-medium text-gray-700 text-left">Email</label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 focus:outline-none" 
                value="{{ old('email') }}" 
                required>
        </div>

        <div class="mb-4">
            <label for="phone" class="block text-lg font-medium text-gray-700 text-left">Phone</label>
            <input 
                type="text" 
                id="phone" 
                name="phone" 
                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 focus:outline-none" 
                value="{{ old('phone') }}" 
                required>
        </div>

        <div class="mb-4">
            <label for="dob" class="block text-lg font-medium text-gray-700 text-left">Date of Birth</label>
            <input 
                type="date" 
                id="dob" 
                name="dob" 
                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 focus:outline-none" 
                value="{{ old('dob') }}" 
                required>
        </div>

        <button 
            type="submit" 
            class="bg-blue-500 hover:bg-blue-600 text-white font-medium px-6 py-3 rounded-lg shadow-md">Save Student</button>
    </form>

    <div class="text-center mt-6">
        <a 
            href="{{ url('/welcome1') }}" 
            class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium px-6 py-3 rounded-lg shadow-md">Back</a>
    </div>
</div>
@endsection