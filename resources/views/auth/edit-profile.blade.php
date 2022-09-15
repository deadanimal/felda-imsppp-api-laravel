<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('update') }}">
            @csrf

            <!-- ID Peneroka -->
            <div>
                <input id="id" class="block mt-1 w-full" type="hidden" name="id" value="{{Auth::user()->id}}"/>
            </div>

            <!-- Nama -->
            <div>
                <x-input-label for="nama" :value="__('Nama')" />

                <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" value="{{ Auth::user()->nama }}" required autofocus />
            </div>

            <!-- Status Peserta -->
            <div>
                <x-input-label for="statusPeserta" :value="__('Status Peserta')" />

                <x-text-input id="statusPeserta" class="block mt-1 w-full" type="text" name="statusPeserta" value="{{ Auth::user()->statusPeserta }}" required autofocus />
            </div>

            <!-- Alamat Tetap -->
            <div>
                <x-input-label for="alamatTetap" :value="__('alamatTetap')" />

                <x-text-input id="alamatTetap" class="block mt-1 w-full" type="text" name="alamatTetap" value="{{ Auth::user()->alamatTetap }}" required autofocus />
            </div>

            <!-- kadPengenalan -->
            <div>
                <x-input-label for="kadPengenalan" :value="__('Kad Pengenalan')" />

                <x-text-input id="kadPengenalan" class="block mt-1 w-full" type="text" name="kadPengenalan" value="{{ Auth::user()->kadPengenalan }}" required autofocus />
            </div>

            <!-- password -->
            <div>
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="text" name="password" required autofocus />
            </div>

            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="text"
                                name="password_confirmation" required />
            </div>

            <!-- tarikh Lahir -->
            <div>
                <x-input-label for="tarikhLahir" :value="__('Tarikh Lahir')" />

                <x-text-input id="tarikhLahir" class="block mt-1 w-full" type="date" name="tarikhLahir" value="{{ Auth::user()->tarikhLahir }}" required pattern="\d{4}-\d{2}-\d{2}"/>
            </div>

            <!-- email -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ Auth::user()->email }}" required autofocus />
            </div>

            <!-- pekerjaan -->
            <div>
                <x-input-label for="pekerjaan" :value="__('pekerjaan')" />

                <x-text-input id="pekerjaan" class="block mt-1 w-full" type="text" name="pekerjaan" value="{{ Auth::user()->pekerjaan }}" required autofocus />
            </div>

            <!-- pendapatanBulanan -->
            <div>
                <x-input-label for="pendapatanBulanan" :value="__('Pendapatan Bulanan')" />

                <x-text-input id="pendapatanBulanan" class="block mt-1 w-full" type="number" step="any" name="pendapatanBulanan" value="{{ Auth::user()->pendapatanBulanan }}" required autofocus />
            </div>

<br>
            <x-primary-button class="ml-4" type="submit">Kemas Kini Profil</x-primary-button>
        </form>
    </x-auth-card>
</x-guest-layout>