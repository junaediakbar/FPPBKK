<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('List Review') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <div class="flex">
                <div class="flex-auto text-2xl mb-4">Review List</div>
            </div>
            <table class="w-full text-md rounded mb-4">
                <thead>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Id Review</th>
                    <th class="text-left p-3 px-5">Skor Review</th>
                    <th class="text-left p-3 px-5">Deskripsi</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($reviews as $review)
                    <tr class="border-b hover:bg-orange-100">
                        <td class="p-3 px-5">
                        {{$review['R_id']}}
                        </td>
                        <td class="p-3 px-5">
                        {{$review['R_skor']}}
                        </td>
                        <td class="p-3 px-5">
                        {{$review['R_deskripsi']}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</x-app-layout>