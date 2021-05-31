<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/order">
            @csrf

            <!-- Name -->
            <div>
                    <x-label for="N_id" value="{{ __('Id Nota') }}" />
                    <x-input id="N_id" class="block mt-1 w-full" type="text" name="N_id" :value="old('N_id')" required autofocus autocomplete="N_id" />
                </div>

                <div class="mt-4">
                    <x-label for="L_id" value="{{ __('Id Layanan') }}" />
                    <x-input id="L_id" class="block mt-1 w-full" type="text" name="L_id" :value="old('L_id')" required />
                </div>
                <div class="mt-4">
                    <x-label for="nama_layanan" value="{{ __('Nama Layanan') }}" />
                    <x-input id="nama_layanan" class="block mt-1 w-full" type="text" name="nama_layanan" :value="old('nama_layanan')" required />
                </div>
                <div class="mt-4">
                    <x-label for="harga" value="{{ __('Harga') }}" />
                    <x-input id="harga" class="block mt-1 w-full" type="text" name="harga" :value="old('harga')" required />
                </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>