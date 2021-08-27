<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Logs Grammar Bot Whatsapp') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Daftar Logs Koreksi Grammar Whatsapp</h1>
                    <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                        <thead>
                        <tr class="border">
                            <th class="border px-6 py-4">Request Number</th>
                            <th class="border px-6 py-4">Title</th>
                            <th class="border px-6 py-4">Group</th>
                            <th class="border px-6 py-4">Text</th>
                            <th class="border px-6 py-4">Detail</th>
                            <th class="border px-6 py-4">Explanation</th>
                            <th class="border px-6 py-4">Group Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        /** @var $corrections \App\Models\correction[] */
                        ?>
                        @foreach($corrections as $correction)
                            <tr>
                                <td>{{$correction->request_number}}</td>
                                <td>{{$correction->title}}</td>
                                <td>{{$correction->group}}</td>
                                <td>{{$correction->text}}</td>
                                <td>{{$correction->detail}}</td>
                                <td>{{$correction->explanation}}</td>
                                <td>{{$correction->groupdescription}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
