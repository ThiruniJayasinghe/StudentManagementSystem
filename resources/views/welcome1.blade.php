<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management System</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans antialiased">

    <!-- Navbar -->
    <nav class="bg-blue-900 p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-white text-3xl font-semibold">Student Management</a>
            <div class="space-x-4">
                <a href="{{ route('students.index') }}" class="text-white hover:bg-blue-700 px-4 py-2 rounded">Students</a>
                <a href="{{ route('students.create') }}" class="text-white hover:bg-blue-700 px-4 py-2 rounded">Add Student</a>
                <a href="#" class="text-white hover:bg-blue-700 px-4 py-2 rounded">Other Link</a>
                <a href="{{ url('/') }}" class="text-white hover:bg-blue-700 px-4 py-2 rounded">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-blue-700 text-white text-center py-16">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between">
        
        <!-- Left Side - Title and Text -->
        <div class="text-center md:text-left md:w-1/2">
            <h1 class="text-4xl font-bold">Welcome to the Student Management System</h1>
            <p class="mt-4 text-lg">Manage your students efficiently and effortlessly with our system.</p>
            <a href="{{ route('students.index') }}" class="mt-8 inline-block bg-green-600 text-white py-2 px-6 rounded hover:bg-green-700">Get Started</a>
        </div>

        <!-- Right Side - Image Collage -->
        <div class="grid grid-cols-3 gap-4 mt-8 md:mt-0 md:w-1/2">

            <!-- First Row - 3 Columns -->
            <div class="flex justify-center">
                <img src="{{ asset('images/university-building-1.jpg') }}" alt="Image 1" class="w-48 h-48 object-cover rounded-lg shadow-lg">
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/development.jpg') }}" alt="Image 2" class="w-48 h-48 object-cover rounded-lg shadow-lg">
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/pexels-rdne-6936013.jpg') }}" alt="Image 3" class="w-48 h-48 object-cover rounded-lg shadow-lg">
            </div>

            <!-- Second Row - 2 Columns -->
            <div class="flex justify-center">
                <img src="{{ asset('images/pexels-max-fischer-5212683.jpg') }}" alt="Image 4" class="w-64 h-64 object-cover rounded-lg shadow-lg">
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/pexels-anastasia-shuraeva-8466166.jpg') }}" alt="Image 5" class="w-64 h-64 object-cover rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>


    <!-- Features Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold">Manage Students</h2>
                <p class="mt-4">View, update, and delete student records easily.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold">Add New Students</h2>
                <p class="mt-4">Quickly add new students to the system with necessary details.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold">Student Performance</h2>
                <p class="mt-4">Track student progress and academic performance.</p>
            </div>
        </div>
    </section>

    <!-- About Us Section -->

    <section class="bg-blue-300 py-16">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-4">About Us</h2>
            <p class="text-lg text-black">Our Student Management System is designed to simplify academic record-keeping and enhance student administration. Join hundreds of schools and universities that trust our platform.</p>
        </div>
    </section>

    <!-- Testimonial Section -->

    <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-8">What Our Users Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <p class="italic text-gray-600">"This system has revolutionized how we manage student data. It's so easy to use!"</p>
                    <p class="mt-4 font-semibold">- John Doe</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <p class="italic text-gray-600">"Thanks to this system, our staff is more efficient, and our students are happier!"</p>
                    <p class="mt-4 font-semibold">- Jane Smith</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <p class="italic text-gray-600">"I highly recommend this to anyone looking to streamline student management."</p>
                    <p class="mt-4 font-semibold">- Emily Davis</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->

    <section class="bg-blue-700 text-white py-16">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Get Started?</h2>
            <p class="text-lg mb-8">Sign up today and transform how you manage your students.</p>
            <a href="{{ route('students.create') }}" class="bg-green-600 text-white py-3 px-8 rounded hover:bg-green-700">Get Started</a>
        </div>
    </section>

    <!-- FAQ Section -->

    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-8">Frequently Asked Questions</h2>
            <div class="space-y-6">
                <div>
                    <h3 class="text-xl font-semibold">How secure is the Student Management System?</h3>
                    <p class="text-gray-700">Our platform uses state-of-the-art encryption and security measures to protect your data.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold">Can I customize the system for my institution?</h3>
                    <p class="text-gray-700">Yes, the system is highly customizable to fit your specific needs.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold">Do you offer support?</h3>
                    <p class="text-gray-700">We provide 24/7 support to ensure a smooth experience for all users.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->

    <footer class="bg-gray-800 text-white py-6">
        <div class="max-w-7xl mx-auto text-center">
            <p>&copy; 2024 Student Management System. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
