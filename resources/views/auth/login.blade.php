{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

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
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('frontend.layouts.app')
@section('frontend_content')
    <!-- inner banner -->
    <div class="header-inner bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-primary">Login</h2>
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('web.home') }}"> Home </a></li>
                        <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Login </span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- inner banner -->

    <!-- Signin -->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-12">
                    <div class="login-register">
                        <div class="section-title">
                            <h4 class="text-center">Login to Your Account</h4>
                        </div>
                        <fieldset>
                            <legend class="px-2">Choose your Account Type</legend>
                            <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
                                <li class="nav-item me-4">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#candidate" role="tab"
                                        aria-selected="false">
                                        <div class="d-flex">
                                            <div class="tab-icon">
                                                <i class="flaticon-users"></i>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0">Candidate</h6>
                                                <p class="mb-0">Log in as Candidate</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#employer" role="tab"
                                        aria-selected="false">
                                        <div class="d-flex">
                                            <div class="tab-icon">
                                                <i class="flaticon-suitcase"></i>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0">Employer</h6>
                                                <p class="mb-0">Log in as Employer</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </fieldset>
                        <div class="tab-content">
                            <div class="tab-pane active" id="candidate" role="tabpanel">
                                <form class="mt-4" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 col-12">
                                            <label class="form-label" for="Email2">Username / Email Address</label>
                                            <input name="email" type="text" class="form-control" id="Email22">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label" for="password2">Password*</label>
                                            <input name="password" type="password" class="form-control" id="password32">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn btn-primary d-grid" type="submit">Sign In</button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-3 mt-md-0 forgot-pass">
                                                <a href="#">Forgot Password?</a>
                                                <p class="mt-1">Don't have account? <a href="{{ route('register') }}">Sign
                                                        Up
                                                        here</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="employer" role="tabpanel">
                                <form class="mt-4">
                                    <div class="row">
                                        <div class="mb-3 col-12">
                                            <label class="form-label" for="Email2">Username / Email Address</label>
                                            <input type="text" class="form-control" id="Email2">
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label" for="password2">Password *</label>
                                            <input type="password" class="form-control" id="password2">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn btn-primary d-grid">Sign In</button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ms-md-3 mt-3 mt-md-0">
                                                <a href="#">Forgot Password?</a>
                                                <div class="form-check mt-2">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="Remember-02">
                                                    <label class="form-check-label" for="Remember-02">Remember
                                                        Password</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-4">
                            <fieldset>
                                <legend class="px-2">Login or Sign up with</legend>
                                <div class="social-login">
                                    <ul class="list-unstyled d-flex mb-0">
                                        <li class="google text-center">
                                            <a href="#"> <i class="fab fa-google me-4"></i>Login with Google</a>
                                        </li>
                                    </ul>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signin -->
@endsection
