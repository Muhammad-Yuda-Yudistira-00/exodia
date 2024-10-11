@php
    // dd($films);
@endphp

@use('Illuminate\Support\Str')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Time
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @if($films)
                @foreach($films as $film)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $film->title }}
                        </th>
                        <td class="px-6 py-4">
                            {{ Str::headline($film->category) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ str()->headline($film->time) }}
                        </td>
                        <td class="px-6 py-4">

                            <a href="{{ route('film.show', $film->id) }}">
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-4 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300 hover:brightness-150">Show</span>
                            </a>
                            <a href="{{ route('film.edit', ['film' => $film->id]) }}">
                                <span class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300 hover:brightness-150">Edit</span>
                            </a>
                            <form action="{{ route('film.destroy', ['film' => $film->id]) }}" method="POST" onsubmit="return confirm('are you sure want to delete this film?')" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button>
                                    <span class="bg-pink-100 text-pink-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-pink-900 dark:text-pink-300 hover:brightness-150">Delete</span>
                                </button>
                                
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4" class="text-center h-24">
                        <h3 class="text-2xl">Not Found</h3>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
