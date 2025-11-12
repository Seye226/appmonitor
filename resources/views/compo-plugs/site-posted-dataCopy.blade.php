@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    <p>SITE-POSTED-DATA</p>
    {{ $value ?? $slot }}
</label>
