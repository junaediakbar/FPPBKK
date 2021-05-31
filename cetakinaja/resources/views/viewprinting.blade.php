<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('List Printing') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <div class="flex">
                <div class="flex-auto text-2xl mb-4">Printings List</div>
            </div>
            <table class="w-full text-md rounded mb-4">
                <thead>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Id Percetakan</th>
                    <th class="text-left p-3 px-5">Nama Percetakan</th>
                    <th class="text-left p-3 px-5">Email</th>
                    <th class="text-left p-3 px-5">Alamat</th>
                    <th class="text-left p-3 px-5">No Telp</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($printings as $printing)
                    <tr class="border-b hover:bg-orange-100">
                        <td class="p-3 px-5">
                        {{$printing['P_id']}}
                        </td>
                        <td class="p-3 px-5">
                        {{$printing['P_nama']}}
                        </td>
                        <td class="p-3 px-5">
                        {{$printing['P_email']}}
                        </td>
                        <td class="p-3 px-5">
                        {{$printing['P_alamat']}}
                        </td>
                        <td class="p-3 px-5">
                        {{$printing['P_notelp']}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</x-app-layout>