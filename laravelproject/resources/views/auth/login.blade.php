<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="form-container">
        @csrf

        <!-- Email Address -->
        <div class="input-group">
            <x-input-label for="email" :value="__('Email')" class="bold-label" />
            <x-text-input id="email" class="text-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="input-error" />
        </div>

        <!-- Password -->
        <div class="input-group mt-4">
            <x-input-label for="password" :value="__('Password')" class="bold-label" />
            <x-text-input id="password" class="text-input" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="input-error" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="form-footer mt-4">
            @if (Route::has('password.request'))
                <a class="forgot-password-link" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="login-btn ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    <style>
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
            background-color: #f9fafb;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .input-group {
            margin-bottom: 20px;
        }

        .text-input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1rem;
            margin-top: 8px;
            transition: border 0.3s ease;
        }

        .text-input:focus {
            border-color: #3490dc;
            outline: none;
        }

        .input-error {
            color: #e3342f;
            font-size: 0.875rem;
        }

        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .forgot-password-link {
            font-size: 0.875rem;
            color: #3490dc;
            text-decoration: underline;
        }

        .forgot-password-link:hover {
            color: #2779bd;
        }

        .login-btn {
            background-color: #3490dc;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-btn:hover {
            background-color: #2779bd;
        }

        .login-btn:focus {
            outline: none;
        }

        .bold-label {
            font-weight: bold;
            font-size: 1.1rem;
            color: #333;
        }
    </style>
</x-guest-layout>
