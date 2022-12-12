<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Files') }}
        </h2>
    </x-slot>

    <div class="text-2xl font-bold text-center" x-data="{ message: '' }" @file-upload-error.window="message=$event.detail.message">
        <div x-show="message" x-text="message" class="bg-blue-400-500 text-white p-2 rounded"></div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <livewire:file-browser :object="$object" :ancestors="$ancestors"/>
            </div>
        </div>
    </div>
</x-app-layout>
