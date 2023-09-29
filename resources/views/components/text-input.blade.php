@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-brown-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-white']) !!} style="background:black !important;">
