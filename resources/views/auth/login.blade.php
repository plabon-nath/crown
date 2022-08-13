<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <x-auth-card-logo/>
        </x-slot>


        @if ( session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            <p class="text-lg font-medium mb-2 flex justify-center">Sign in to your account</p>

            <x-jet-validation-errors class="mb-4"/>
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}"></x-jet-label>
                <div class="relative m-1">
                    <x-input id="email" type="email" name="email" :value="old('email')" required autofocus
                             placeholder="Enter your email address"></x-input>
                    <span class="absolute inset-y-0 inline-flex items-center right-4">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-5 h-5 text-gray-400"
                             fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                            />
                        </svg>
                    </span>
                </div>
                <x-jet-input-error for="email" class="mt-2"></x-jet-input-error>

            </div>

            <div class="mt-4" x-data="{ showPass: true }">
                <x-jet-label for="password" value="{{ __('Password') }}"></x-jet-label>
                <div class="relative m-1">
                    <x-input id="password" x-bind:type="showPass ? 'password' : 'text'" name="password" required
                             autocomplete="current-password" placeholder="Enter your password">

                    </x-input>
                    <span class="absolute inset-y-0 inline-flex items-center right-4">
                          <svg xmlns="http://www.w3.org/2000/svg"
                               class="w-5 h-5 text-gray-400"
                               @click="showPass = !showPass"
                               :class="{'hidden': !showPass, 'block':showPass}"
                               fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                              <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                          </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2"
                             @click="showPass = !showPass"
                             :class="{'block': !showPass, 'hidden':showPass }">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
                        </svg>

                    </span>
                </div>
                <x-jet-input-error for="password" class="mt-2"></x-jet-input-error>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember"/>
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex-row justify-center mt-4">
                <div class="flex items-center justify-center">
                    <button type="submit"
                            class="w-2/3 px-4 py-2 bg-gradient-to-br from-red-500/80 to-orange-400/80 hover:bg-gradient-to-bl border-transparent rounded-md font-semibold  text-white uppercase tracking-widest disabled:opacity-25 transition">
                        {{ __('Sign In') }}
                    </button>
                </div>

                <div class="flex justify-between ">
                    <a class="underline text-sm text-gray-600 mt-1 hover:text-gray-900"
                       href="{{ route('register') }}">
                        {{ __("Don't have account?") }}
                    </a>

                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 mt-1 hover:text-gray-900"
                           href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
                <div class="relative">
                    <hr class="border-red-400 my-2"/>
                    <span class="absolute inset-y-0 right-[45%] inline-flex items-center justify-center px-4 bg-white dark:bg-gray-800 ">
                        or
                    </span>
                </div>
                <div class="flex items-center justify-center mt-4">
                    <a href="{{ route('google.login')}}">
                        <button type="button" class="google-login drop-shadow-lg dark:bg-gray-800 font-semibold">
                            Sign in with Google
                        </button>
                    </a>
                </div>

            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
