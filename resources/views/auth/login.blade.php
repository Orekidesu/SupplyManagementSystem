<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="w-full h-full grid md:grid-cols-2 grid-cols-1 md:px-40 gap-10">
        <div>
            <h1><b>SUPPLY MANAGEMENT SYSTEM</b></h1>
            <P>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus repudiandae quidem, tenetur aliquid mollitia animi est quaerat blanditiis corrupti numquam officia. Voluptatem reprehenderit blanditiis distinctio esse dolore corporis eligendi similique.
            </P>
        </div>
        <div class="md:px-5 px-0 lg:px-20 bg-white rounded-lg shadow-md">
            <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="p-2">
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
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex flex-col md:flex-row gap-2  items-center justify-end mt-4 ">
            @if (Route::has('password.request'))
               <div>
                 <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
               </div>
            @endif

            <div>
                <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
            </div>
        </div>
    </form>
        </div>
    </div>
</x-guest-layout>
