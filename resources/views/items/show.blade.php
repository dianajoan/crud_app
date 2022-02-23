
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Item details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>{{ $item->name }}</p>
                    <br>
                    <p>
                        <small>By: @if( $item->user_id ) {{ App\Models\User::findOrFail($item->user_id)->name }} @endif </small>
                    </p>
                    <p>
                        <small>Created: {{ $item->created_at->toDayDateTimeString() }}</small>
                        <br>
                        <small>Last update: {{ $item->updated_at->toDayDateTimeString() }}</small>
                    </p>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>