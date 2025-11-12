@props(['value'])


<div class="m-3 p-3 border-4 border-indigo-500 ...">


    <label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
        <p>SITE-POSTED-DATA</p>
        {{ $value ?? $slot }}
    </label>

</div>
