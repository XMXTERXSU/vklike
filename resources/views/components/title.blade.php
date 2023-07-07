<div class="border-bottom mb-4">
    @isset($link)
    <div class="mb-2">
        {{ $link }}
    </div>
    @endisset
    <div class="d-flex justify-content-between">
        <div>
            <h1 class="h2 mb-3">
                {{ $slot }}
            </h1>
        </div>
        @isset($right)
            <div>
                {{ $right}}
            </div>
        @endisset
    </div>
</div>
