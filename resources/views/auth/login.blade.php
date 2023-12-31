@extends('auth.layout')

@section('authcontent')
    <div class="border-slate-300 border p-3 rounded shadow-lg bg-slate-100">
        <div class="flex mb-3 border-b pb-3">
            <h2 class="text-xl font-semibold font-sans text-slate-800">Student Login</h2>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4 flex justify-between">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
            </div>

            <div class="flex items-center justify-between mt-4">
                @if (Route::has('register'))
                    <a class="inline-flex items-center px-4 py-2 bg-teal-800 border border-transparent rounded-md font-semibold text-md text-white uppercase tracking-widest hover:bg-teal-700 focus:bg-teal-700 active:bg-teal-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" href="{{ route('register') }}">
                        {{ __('New Student?') }}
                    </a>
                @endif
                <div class="flex items-center">
                   

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
                </div>
            </div>
        </form>
    </div>
@endsection
