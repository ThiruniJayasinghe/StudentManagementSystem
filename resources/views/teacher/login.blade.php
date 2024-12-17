<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <div class="flex items-center justify-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold text-center mb-6">Teacher Login</h2>

            @if (session('success'))
                <div class="text-green-500 mb-4">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="text-red-500 mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('teacher.login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="w-full border-gray-300 rounded-lg p-2" required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="w-full border-gray-300 rounded-lg p-2" required>
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Log In</button>
            </form>

            <p class="text-center mt-4 text-gray-600">Don't have an account? 
                <a href="{{ route('teacher.signup') }}" class="text-blue-600 hover:underline">Sign up</a>
            </p>
        </div>
    </div>

</body>
</html>
