@php
	$name = "Buat list film favoritmu dan bagikan";
	$desc = "Karena fitur ini tidak ada di myanimelist, mydramalist & imdb maka saya membuatnya sendiri. list ini berupa card yang mudah dibagikan dengan tampilan yang menarik."
@endphp

<x-layouts.myApp>
	
		<section class="bg-top bg-no-repeat bg-[url('img/bg.jpeg')] bg-amber-700 bg-blend-multiply">
		    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
		        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">{{ $name }}</h1>
		        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">{{ $desc }}</p>
		        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
		            <a href="{{ route('login') }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:ring-lime-300 dark:focus:ring-lime-900">
		                Masuk
		                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
		                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
		                </svg>
		            </a>
		            <a href="{{ route('register') }}" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
		                Daftar
		            </a>  
		        </div>
		    </div>
		</section>

</x-layouts.myApp>