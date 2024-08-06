<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="w-full h-full grid md:grid-cols-2 grid-cols-1 md:px-40 gap-10">
        <div>
            <div class="">
                <h1 class="text-3xl text-red-500"><b>SUPPLY MANAGEMENT SYSTEM</b></h1>
                <p class="text-justify pt-4">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus repudiandae quidem, tenetur aliquid
                    mollitia animi est quaerat blanditiis corrupti numquam officia. Voluptatem reprehenderit blanditiis
                    distinctio esse dolore corporis eligendi similique.
                </p>
            </div>

            <div class="pt-10">
                @if (!Auth::check())
                    <p>Don't have an account yet? <a href="{{ route('register') }}"
                            class="text-blue-500 hover:text-blue-700 hover:font-bold"><u>Create an
                                Account</u></a>
                    </p>
                @endif

            </div>
        </div>


        <div class="flex justify-center">
            <div class=" px-5 bg-white rounded-lg shadow-md py-10 md:w-2/3 w-full">
                <div>
                    <center>
                        <b>
                            <h1>Log In</h1>

                        </b>
                    </center>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf


                    <!-- Email Address -->
                    <div> <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex flex-col gap-2  justify-start mt-4 ">
                        @if (Route::has('password.request'))
                            <div>
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            </div>
                        @endif

                        <div class="flex justify-center">
                            <x-primary-button class=" w-full flex justify-center items-center">
                                {{ __('Log in') }}
                            </x-primary-button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
