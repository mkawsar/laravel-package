<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-white">
<!-- url('/img/hero-pattern.svg') -->
<div class="min-h-screen bg-no-repeat bg-cover bg-center"
     style="background-image: url('https://images.unsplash.com/photo-1486520299386-6d106b22014b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80')">
    <div class="flex justify-end">
        <div class="bg-white min-h-screen w-1/2 flex justify-center items-center">
            <div>
                <form method="post" action="{{ route('post.login') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div>
                        <span class="text-sm text-gray-900">Welcome back</span>
                        <h1 class="text-2xl font-bold">Login to your account</h1>
                    </div>
                    <div class="my-3">
                        <label class="block text-md mb-2" for="email">Email</label>
                        <input class="px-4 w-full border-2 py-2 rounded-md text-sm outline-none @if($errors->has('email')) border-red-500 @endif" type="email"
                               name="email" placeholder="email" value="{{ old('email') }}">
                        @if($errors->has('email'))
                            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                    </div>
                    <div class="mt-5">
                        <label class="block text-md mb-2" for="password">Password</label>
                        <input class="px-4 w-full border-2 py-2 rounded-md text-sm outline-none @if($errors->has('password')) border-red-500 @endif" type="password"
                               name="password" placeholder="password">
                        @if($errors->has('password'))
                            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                {{ $errors->first('password') }}
                            </span>
                        @endif
                    </div>
                    <div class="flex justify-between">
                        <div>
                            <input class="cursor-pointer" type="radio" name="rememberme">
                            <span class="text-sm">Remember Me</span>
                        </div>
                        <span class="text-sm text-blue-700 hover:underline cursor-pointer">Forgot password?</span>
                    </div>
                    <div class="">
                        <button
                            class="mt-4 mb-3 w-full bg-green-500 hover:bg-green-400 text-white py-2 rounded-md transition duration-100">
                            Login now
                        </button>
                        <p class="mt-8"> Dont have an account? <span
                                class="cursor-pointer text-sm text-blue-600"> <a href="{{ route('registration') }}">Join free today</a></span></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
