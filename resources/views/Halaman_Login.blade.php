<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body class="flex flex-col h-screen bg-white">
    <div class="flex flex-wrap lg:flex-nowrap h-full">
        <!-- Left Side -->
        <div class="hidden lg:flex flex-1 justify-center items-center bg-purple-800 rounded-r-[50px] p-6">
            <div>
                <img src="image/logo.png" alt="Logo" class="w-40">
            </div>
        </div>

        <!-- Right Side -->
        <div class="flex flex-col flex-1 justify-center items-center p-6 bg-white">
            <!-- Logo (Responsive for small screens) -->
            <div class="lg:hidden mb-8">
                <img src="image/logo.png" alt="Logo" class="w-20 mx-auto">
            </div>

            <div class="w-full max-w-sm">
                <h2 class="text-2xl font-bold text-center mb-6">Log in</h2>

                <!-- Login Form -->
                <form id="loginForm" method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf <!-- CSRF Token -->
                    <div>
                        <label for="email" class="block text-sm font-medium mb-1">Email</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-purple-500 focus:outline-none">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium mb-1">Password</label>
                        <input type="password" id="password" name="password" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-purple-500 focus:outline-none">
                    </div>
                    <a href="#" class="text-blue-600 text-sm block text-right hover:underline">
                        Belum Punya Akun?
                    </a>
                    <button type="submit"
                        class="w-full bg-purple-800 hover:bg-blue-800 text-white py-2 rounded-md font-medium">
                        Log In
                    </button>
                </form>

                <p class="text-xs text-gray-500 text-center mt-4">
                    Dengan membuat akun kamu menyetujui Syarat & Ketentuan dan Kebijakan privasi kami.
                </p>
            </div>
        </div>
    </div>
</body>

</html>
