@if ($alert = session()->pull('danger.alert'))
    <div class="alert alert-danger mb-0 rounded-0 text-center small py-2">
        {{ $alert }}
    </div>
@endif
