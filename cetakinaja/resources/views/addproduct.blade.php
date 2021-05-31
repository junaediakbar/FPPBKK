<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/product">

            <div class="form-group">
            <div>
                <x-label for="Pr_id" value="{{ __('Id Produk') }}" />
                <x-input id="Pr_id" class="block mt-1 w-full" type="text" name="Pr_id" :value="old('Pr_id')" required autofocus autocomplete="P_id" />
                </div>

             <div class="mt-4">
                <x-label for="Pr_nama" value="{{ __('Nama Produk') }}" />
                 <x-input id="Pr_nama" class="block mt-1 w-full" type="text" name="Pr_nama" :value="old('Pr_nama')" required />
            </div>
            <div class="mt-4">
                <x-label for="Pr_harga" value="{{ __('Harga') }}" />
                 <x-input id="Pr_harga" class="block mt-1 w-full" type="text" name="Pr_harga" :value="old('Pr_harga')" required />
            </div>
            <div class="mt-4">
                <x-label for="Pr_satuan" value="{{ __('Satuan') }}" />
                <x-input id="Pr_satuan" class="block mt-1 w-full" type="text" name="Pr_satuan" :value="old('Pr_satuan')" required />
            </div>
                <div class="form-group">
                <br>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Printing</button>
            </div>
            {{ csrf_field() }}
        </form>
    </x-auth-card>
</x-guest-layout>