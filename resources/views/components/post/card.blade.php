<x-card>
    <x-card-body>
        <div>
            <h2 class="h6">
                <a href="{{ route('posts.show', $post->id) }}">
                    {{ $post->title }}
                </a>
            </h2>

            <p class="small text-muted">
                {{-- {{ now()->format('d..Y h:i:s')}} --}}
                {{ $post->published_at->diffForHumans() }}
            </p>
        </div>
    </x-card-body>
</x-card>
