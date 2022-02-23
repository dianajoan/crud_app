
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard - '. config('app.name')) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 hidden">
                    You're logged in!
                </div>

                @include('layouts.alerts')
                
                <div class="container mx-auto py-0 px-4" x-data="datatables()" x-cloak>
                    <div class="p-0 flex justify-between">
                        <h1 class="text-3xl py-4 border-b mb-10">All Items</h1>
                        @if(Auth::user()->isAdmin())
                        <span class="py-2">
                            <button 
                                class="inline-flex items-center px-2 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-800 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                                onclick="window.open('{{ route('items.create') }}','_self')">
                                {{ __('Add new') }}
                            </button>
                        </span>
                        @endif
                    </div>
                    
            
                    <div class="overflow-x-auto bg-white rounded-lg shadow overflow-auto relative"
                        style="height: 405px; overflow: auto">
                        <table class="border-collapse table-auto w-full whitespace-no-wrap px-2 bg-white table-striped relative">
                            <thead>
                                <tr style="text-align: left">
                                    <th>Item</th>
                                    <th style="text-align: right;"></th>
                                    <th style="text-align: right;" class="pr-4">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td style="text-align: right">
                                        <small><small>{{ $item->created_at->toDayDateTimeString() }}</small></small>
                                    </td>
                                    <td style="text-align: center; max-width: 10vw;">
                                        <div class="flex w-full justify-end">
                                            <button 
                                                class="inline-flex items-center px-1 py-1 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-800 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                            onclick="window.open('{{ route('items.show', $item->id) }}','_self')">
                                                {{ __('View') }}
                                            </button>
                                            @if(Auth::user()->isAdmin())
                                            <button 
                                                class="inline-flex items-center px-1 py-1 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-800 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                                                onclick="window.open('{{ route('items.edit', $item->id) }}','_self')">
                                                {{ __('Edit') }}
                                            </button>
                                            @endif
                                            @if(Auth::user()->isAdmin())
                                            <form method="post" action="{{ route('items.destroy', $item->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline-flex items-center px-1 py-1 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-800 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                                    {{ __('Trash') }}
                                                </button>
                                            </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
