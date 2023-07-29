@if ($errors->any())
    <div class="alert alert-danger small pt-1 mb-0">
        <ul class="mb-0">
            @foreach ($errors->all() as $message)
                <li>
                    {{ $message }}
                </li>
            @endforeach
        </ul>
    </div>
@endif
