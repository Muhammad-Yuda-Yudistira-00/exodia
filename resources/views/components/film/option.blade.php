@php
    // dd($name);
@endphp

<div>
    <option value="{{ $name }}" @if(isset($film) && $film->$label == $name) selected @endif>{{ $slot }}</option>
</div>