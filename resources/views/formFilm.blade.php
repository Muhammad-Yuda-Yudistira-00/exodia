@php
	// dd($film);
@endphp

<x-layouts.admin title="{{ $title }}">
	<x-admin.back-link>
		<x-film.form :film="$film ?? null"></x-film>
	</x-admin>
</x-layouts.admin>