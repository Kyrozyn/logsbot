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
                    <h1>Daftar Logs Grammar Whatsapp</h1>
                    <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                        <thead>
                        <tr class="border">
                            <th class="border px-6 py-4">Request Number</th>
                            <th class="border px-6 py-4">Text Sebelum Dikoreksi</th>
                            <th class="border px-6 py-4">Text Sesudah Dikoreksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        /** @var $logs \App\Models\log[] */
                            ?>
                        @foreach($logs as $log)
                        <tr>
                            <td>{{$log->request_number}}</td>
                            <td>{{$log->text_before}}</td>
                            <td>{{$log->text_after}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
