<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="form-container">
        @csrf

        <!-- Name -->
        <div class="input-group">
            <x-input-label for="name" :value="__('Name')" class="bold-label" />
            <x-text-input id="name" class="text-input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="input-error" />
        </div>

        <!-- Email Address -->
        <div class="input-group">
            <x-input-label for="email" :value="__('Email')" class="bold-label" />
            <x-text-input id="email" class="text-input" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="input-error" />
        </div>

        <!-- Phone -->
        <div class="input-group">
            <x-input-label for="phone" :value="__('Phone')" class="bold-label" />
            <x-text-input id="phone" class="text-input" type="phone" name="phone" :value="old('phone')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('phone')" class="input-error" />
        </div>

        <!-- Address -->
        <div class="input-group">
            <x-input-label for="address" :value="__('Address')" class="bold-label" />
            <x-text-input id="address" class="text-input" type="address" name="address" :value="old('address')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('address')" class="input-error" />
        </div>

        <!-- Password -->
        <div class="input-group">
            <x-input-label for="password" :value="__('Password')" class="bold-label" />
            <x-text-input id="password" class="text-input" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="input-error" />
        </div>

        <!-- Confirm Password -->
        <div class="input-group">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="bold-label" />
            <x-text-input id="password_confirmation" class="text-input" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="input-error" />
        </div>

        <div class="form-footer">
            <a class="login-link" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="register-btn">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <style>
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: #f9fafb;
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
            margin-top: 20px;
        }

        .login-link {
            font-size: 0.875rem;
            color: #3490dc;
            text-decoration: underline;
        }

        .register-btn {
            background-color: #3490dc;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .register-btn:hover {
            background-color: #2779bd;
        }

        .register-btn:focus {
            outline: none;
        }

        .bold-label {
            font-weight: bold;
            font-size: 1.1rem;
            color: #333;
        }
    </style>
</x-guest-layout>
