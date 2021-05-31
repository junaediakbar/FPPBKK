<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />            

            <form method="POST" action="/review">

                <div class="form-group">
                <div>
                    <x-label for="R_id" value="{{ __('Id Review') }}" />
                    <x-input id="R_id" class="block mt-1 w-full" type="text" name="R_id" :value="old('R_id')" required autofocus autocomplete="R_id" />
                </div>

                <div class="mt-4">
                    <x-label for="R_skor" value="{{ __('Skor Review') }}" />
                    <x-input id="R_skor" class="block mt-1 w-full" type="text" name="R_skor" :value="old('R_skor')" required />
                </div>
                <div class="mt-4">
                    <x-label for="R_deskripsi" value="{{ __('Deskripsi') }}" />
                    <x-input id="R_deskripsi" class="block mt-1 w-full" type="text" name="R_deskripsi" :value="old('R_deskripsi')" required />
                </div>


                <div class="form-group">
                <br>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Review</button>
                </div>
                {{ csrf_field() }}
            </form>
        </x-auth-card>
</x-guest-layout>