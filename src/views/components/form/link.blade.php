<p class="mt-4">
    <a class="
        text-sm
        font-medium
        text-purple-600
        dark:text-purple-400
        hover:underline
        " href="{{ $route ?? '' }}" {{ $new ?? '' === "false" ? 'target="_blank"' : "" }}>
        {{ $name ?? 'add a name' }}
    </a>
</p>
