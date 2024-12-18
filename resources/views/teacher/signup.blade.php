<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Sign Up</title>
    @vite('resources/css/app.css')

    <style>
        .background-image {
            background-image: url('/images/R.jpg'); /* Ensure the correct relative path */
            background-size: cover;
            background-position: center;
            height: 100%; /* Ensure it covers the full height */
        }

    </style>
</head>
<body class="bg-blue-100">

    <div class="flex h-screen">
        
        <!-- Left Section -->
        <div class="hidden md:flex w-1/2 background-image">
            <!-- Overlay with text -->
            <div class="flex items-center justify-center bg-black bg-opacity-50 w-full">
                <h1 class="text-white text-4xl font-bold text-center px-4">Welcome to the Teacher Portal</h1>
            </div>
        </div>

        <!-- Right Section -->
        <div class="w-full md:w-1/2 flex items-center justify-center">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
                <h2 class="text-2xl font-bold text-center mb-6">Teacher Sign Up</h2>

                @if ($errors->any())
                    <div class="text-red-500 mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('teacher.signup') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Name</label>
                        <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-lg p-2" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" name="email" id="email" class="w-full border-gray-300 rounded-lg p-2" required>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-gray-700">Password</label>
                        <input type="password" name="password" id="password" class="w-full border-gray-300 rounded-lg p-2" required>
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="w-full border-gray-300 rounded-lg p-2" required>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Sign Up</button>
                </form>

                <p class="text-center mt-4 text-gray-600">Already have an account? 
                    <a href="{{ route('teacher.login') }}" class="text-blue-600 hover:underline">Log in</a>
                </p>
            </div>
        </div>
    </div>

</body>
</html>
