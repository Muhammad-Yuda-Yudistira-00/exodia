@php
    // dd($film)
@endphp

<x-layouts.admin :title="$title">
    <x-admin.back-link>
        <section class="m-auto w-max">
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $film->title }}</h5>
                </a>

                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{ str()->headline($film->category) }}</span>
                    <span class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">{{ str()->headline($film->time) }}</span>
                </p>
            
                <ul class="max-w-md space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
                    @for($i = 1; $i <= 10; $i++)
                    <li>
                        {{ $film["rank_$i"] }}
                    </li>
                    @endfor
                </ul>

            </div>
        </section>
    </x-admin>
</x-layouts>
