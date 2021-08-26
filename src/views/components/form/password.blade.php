<div class="mb-3 space-y-2 w-full text-xs">
    <label class="font-semibold text-sm text-gray-600 dark:text-white pb-1 block">
        {{ $label ?? 'undefine' }}
    </label>
    <div class="flex flex-wrap items-stretch w-full mb-4 relative">
        <div class="flex">
            <span
                class="flex leading-normal bg-primary border-1 rounded-r-none border border-r-0 border-blue-300 px-3 whitespace-no-wrap text-white text-sm w-12 h-10 justify-center items-center rounded-lg">
                <i onclick="$inputs.passwordToogle('{{ $id ?? $name }}')" data-feather="eye"></i>
            </span>
        </div>
        <input type="password" name="{{ $name ?? 'name' }}" id="{{ $id ?? $name }}"
        {{ $required ?? '' == "true" ? "required" : "" }} value="{{ $value ?? old($name) }}"
        placeholder="{{ $placeholder ?? '' }}"
            class="flex-shrink flex-grow leading-normal w-px border border-l-0 h-10 rounded-lg rounded-l-none px-3 relative focus:border-blue focus:shadow
            focus:border-black dark:focus:border-white dark:bg-gray-900 dark:text-white text-sm
        ">
    </div>
</div>

@error($name)
<span class="invalid-feedback text-black dark:text-white" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
