@php
    // dd($films);
@endphp

<x-layouts.admin title="All List">
    <div class="mb-6">
        @if(session('success'))
            <x-general.alert></x-general>
        @endif
        <a href="{{ route('film.create') }}">
            <x-general.button type="button">
                Add+
            </x-general>
        </a>
        <span class="ml-2 text-gray-400 font-light text-sm">New Favorit Film</span>
    </div>
    <x-table :films="isset($films) ? $films : null"></x-table>
</x-layouts>
