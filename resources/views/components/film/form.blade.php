@php
  // dd($film);
@endphp

<form class="max-w-md mx-auto" action="{{ isset($film) ? route('film.update', $film->id) : route('film.store') }}" method="POST">
    @csrf

    @if(isset($film))
      @method('PUT')
    @endif

    <div class="mb-4">
        <label for="category" class="sr-only">Underline select</label>
          <select id="category" name="category" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" required>
              <option {{ !isset($film) ? 'selected' : '' }} value="">Choose a category</option>
              <x-film.option :film="$film" label="category" name="anime">Anime</x-film>
              <x-film.option :film="$film" label="category" name="drama">Drama</x-film>
              <x-film.option :film="$film" label="category" name="hollywood">Hollywood</x-film>
              <x-film.option :film="$film" label="category" name="fusion">Fusion</x-film>
          </select>
          <label for="category" class="sr-only">Underline select</label>
          <select id="category" name="time" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" required>
              <option {{ !$film ?? 'selected' }} value="">Choose a time</option>
              <x-film.option :film="$film" label="time" name="allTheTime">Sepanjang masa</x-film>
              <x-film.option :film="$film" label="time" name="year">Tahunan</x-film>
              <x-film.option :film="$film" label="time" name="season">Musiman</x-film>
          </select>
          <span class="inline-block mt-2 w-full">
            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example: Anime terbaik musim gugur 2024.." required value="{{  isset($film->title) ? $film->title : '' }}" />
              </div>
          </span>
    </div>
    @for($i = 1; $i <= 10; $i++)
        <x-film.input identify="rank_{{ $i }}" :required="$i <= 5 ? true : false" :value="isset($film) ? $film['rank_' . $i] : ''">
            Rank {{ $i }}
        </x-film>
    @endfor
  <x-general.button type="submit">
    Submit
  </x-general>
</form>
