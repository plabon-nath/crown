@props([' disabled' => false])

<select {!! $attributes->merge([
    'class' => 'w-full p-4 pr-12 text-sm bg-white dark:bg-gray-800 border border-indigo-200 rounded-lg drop-shadow-xl',
    ]) !!}>
    @foreach($options as $option)
        <option value="{{ $option->value }}">{{ $option->label }}</option>
    @endforeach
</select>
