@props(['value'])


<div class="p-6 border-4 border-indigo-500">


    <label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
        <p>SITE-INFO</p>
        {{ $value ?? $slot }}
    </label>

</div>
