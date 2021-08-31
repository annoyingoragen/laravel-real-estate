<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ADMIN Dashboard') }}
        </h2>
    </x-slot>

<div class="py-12">

    @extends('layouts.master')
        
        @section('content')
        <livewire:registration />
        
        
    </div>
</x-admin-layout>
