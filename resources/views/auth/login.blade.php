<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" class="text-white" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label  class="text-white" for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label  class="text-white" for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-white">{{ __('Remember me') }}</span>
            </label>
            <br>
            
        </div>
        
        <div class="flex items-center justify-end mt-4">
        
            <a href="/register" class=" ml-2 text-sm text-white
            ">Register New Account</a>
     

            <x-primary-button class="bg-white text-black ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
    @auth
    <script>
        // Trigger the discount modal when the user logs in
        showDiscountModal();
    </script>
@endauth
</x-guest-layout>
