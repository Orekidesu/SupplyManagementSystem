<x-guest-layout>
    <div class="w-full h-full grid md:grid-cols-2 grid-cols-1 md:px-40 gap-10">
        <div>
            <div>
                <div class="">
                    <h1 class="text-3xl text-red-500"><b>SUPPLY MANAGEMENT SYSTEM</b></h1>
                    <p class="text-justify pt-4">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus repudiandae quidem, tenetur
                        aliquid
                        mollitia animi est quaerat blanditiis corrupti numquam officia. Voluptatem reprehenderit
                        blanditiis
                        distinctio esse dolore corporis eligendi similique.
                    </p>
                </div>

                <div class="pt-10">
                    @if (!Auth::check())
                        <p>Already have an account? <a href="{{ route('login') }}"
                                class="text-blue-500 hover:text-blue-700 hover:font-bold"><u>Log in</u></a>
                        </p>
                    @endif

                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <div class=" px-5 bg-white rounded-lg shadow-md py-10 md:w-2/3 w-full">
                <div>
                    <center>
                        <b>
                            <h1>Sign up</h1>

                        </b>
                    </center>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-center mt-4">

                        <x-primary-button class="w-full flex justify-center items-center">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-guest-layout>
