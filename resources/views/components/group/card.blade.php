<x-card>
    <x-card-body>
        <div>
            <h2 class="h6">
                <a href="" class="link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                    {{ $group->title }}
                </a>
            </h2>

            <p class="">
                {{-- {{ now()->format('d..Y h:i:s')}} --}}
                {{-- {{ $group->published_at->diffForHumans() }} --}}
                {{ $group->description ?? "" }}
            </p>
        </div>
    </x-card-body>
</x-card>
