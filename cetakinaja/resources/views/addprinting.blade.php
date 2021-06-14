<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/printing">
            @csrf

            <!-- Name -->
            <div>
                    <x-label for="P_id" value="{{ __('Id Percetakan') }}" />
                    <x-input id="P_id" class="block mt-1 w-full" type="text" name="P_id" :value="old('P_id')" required autofocus autocomplete="P_id" />
                </div>

                <div class="mt-4">
                    <x-label for="P_nama" value="{{ __('Nama Percetakan') }}" />
                    <x-input id="P_nama" class="block mt-1 w-full" type="text" name="P_nama" :value="old('P_nama')" required />
                </div>
                <div class="mt-4">
                    <x-label for="P_email" value="{{ __('Email') }}" />
                    <x-input id="P_email" class="block mt-1 w-full" type="text" name="P_email" :value="old('P_email')" required />
                </div>
                <div class="mt-4">
                    <x-label for="P_alamat" value="{{ __('Alamat') }}" />
                    <x-input id="P_alamat" class="block mt-1 w-full" type="text" name="P_alamat" :value="old('P_alamat')" required />
                </div>
                <div class="mt-4">
                    <x-label for="P_notelp" value="{{ __('Notelp') }}" />
                    <x-input id="P_notelp" class="block mt-1 w-full" type="text" name="P_notelp" :value="old('P_notelp')" required />
                </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Add') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>