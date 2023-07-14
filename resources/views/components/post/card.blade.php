<x-card>
    <x-card-body>
        <div>
            <h2 class="h6">
                <a href="{{ route('posts.show', $post->id) }}">
                    {{ $post->title }}
                </a>
            </h2>

            <p class="small text-muted">
                {{-- {{ now()->format('d.m.Y h:i:s')}} --}}
                {{ now()->toDateTimeString()}}
            </p>
        </div>
    </x-card-body>
</x-card>
