<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- ID Peneroka -->
            <div>
                <x-input-label for="id" :value="__('ID Peneroka')" />

                <x-text-input id="id" class="block mt-1 w-full" type="text" name="id" required autofocus />
            </div>

            <!-- Nama -->
            <div>
                <x-input-label for="nama" :value="__('Name')" />

                <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('name')" required autofocus />
            </div>

            <!-- Email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="text"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="text"
                                name="password_confirmation" required />
            </div>

            <!-- wilayah -->
            <div class="mt-4">
                <x-input-label for="wilayah" :value="__('Wilayah')" />

                <x-text-input id="wilayah" class="block mt-1 w-full" type="text" name="wilayah" required />
            </div>

            <!-- Rancangan -->
            <div class="mt-4">
                <x-input-label for="rancangan" :value="__('Rancangan')" />

                <x-text-input id="rancangan" class="block mt-1 w-full" type="text" name="rancangan" required />
            </div>

            <!-- felda -->
            <div class="mt-4">
                <x-input-label for="felda" :value="__('Felda')" />

                <x-text-input id="felda" class="block mt-1 w-full" type="text" name="felda" required />
            </div>

            <!-- alamatTetap -->
            <div class="mt-4">
                <x-input-label for="alamatTetap" :value="__('Alamat Tetap')" />

                <x-text-input id="alamatTetap" class="block mt-1 w-full" type="text" name="alamatTetap" required />
            </div>

            <!-- kadPengenalan -->
            <div class="mt-4">
                <x-input-label for="kadPengenalan" :value="__('Kad Pengenalan')" />

                <x-text-input id="kadPengenalan" class="block mt-1 w-full" type="text" name="kadPengenalan" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
