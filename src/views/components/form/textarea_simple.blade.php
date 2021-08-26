<div class="p-4">
    <p class="mb-4 italic">
        {{ $label ?? 'undefine' }}
    </p>
    <textarea class="w-full h-24 p-2 bg-gray-100 rounded" name="{{ $name ?? 'name' }}" id="{{ $id ?? $name }}"
        {{ $required ?? '' == "true" ? "required" : "" }}>{{ $value }}</textarea>
</div>

@error($name)
<span class="invalid-feedback text-black dark:text-white" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
