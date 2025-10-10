@extends('base')
@section('title', 'Registration')
@section('content')
    <!-- Header -->
    <header class="text-center mb-8">
        <img src="{{ asset('img/base-logo.svg') }}" alt="Unique & Connected logo">
        <p class="mt-2 text-sm text-gray-500">
            <b>Welcome!</b>
            <p>To register a new account, please fill in the form below.
            We will contact you on your registration when your account has been approved</p>
        </p>
    </header>

    <!-- Registration Form -->
    <form method="POST" action="{{ route('registration.post') }}">
        @csrf <!-- CSRF protection token -->

        <!-- Email Input -->
        <div class="mb-5">
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
            <input
                type="email"
                name="email"
                id="email"
                value="{{ old('email') }}"
                required
                autofocus
                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out"
                placeholder="unique@connected.com"
            >
            @error('email')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Gender Input -->
        <div class="mb-5">
            <span class="block text-sm font-medium text-gray-700 mb-2">Gender</span>
            <div class="flex flex-col gap-2">
            <label class="inline-flex items-center">
                <input
                type="radio"
                name="gender"
                id="male"
                value="male"
                {{ old('gender') == 'male' ? 'checked' : '' }}
                required
                class="form-radio text-indigo-600"
                >
                <span class="ml-2">Male</span>
            </label>
            <label class="inline-flex items-center">
                <input
                type="radio"
                name="gender"
                id="female"
                value="female"
                {{ old('gender') == 'female' ? 'checked' : '' }}
                required
                class="form-radio text-indigo-600"
                >
                <span class="ml-2">Female</span>
            </label>
            <label class="inline-flex items-center">
                <input
                type="radio"
                name="gender"
                id="rathernotsay"
                value="rathernotsay"
                {{ old('gender') == 'rathernotsay' ? 'checked' : '' }}
                required
                class="form-radio text-indigo-600"
                >
                <span class="ml-2">I'd rather not say</span>
            </label>
            </div>
            @error('gender')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password Input -->
        <div class="mb-5">
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input
                type="password"
                name="password"
                id="password"
                required
                autocomplete="current-password"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out"
                placeholder="••••••••"
            >
            @error('password')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Repeat Password Input -->
        <div class="mb-5">
            <label for="password_repeat" class="block text-sm font-medium text-gray-700 mb-1">Repeat password</label>
            <input
                type="password"
                name="password_repeat"
                id="password_repeat"
                required
                autocomplete="current-password"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out"
                placeholder="••••••••"
            >
            @error('password_repeat')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <div>
            <button
                type="submit"
                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out transform hover:scale-[1.01]"
            >
                Log In
            </button>
        </div>
    </form>
@endsection