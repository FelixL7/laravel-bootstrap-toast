@php
    $toasts = \FelixL7\Toast\Facades\Toaster::toasts()->merge(session('bootstrap-toasts'))
@endphp
@if ($toasts->isNotEmpty())
    <div aria-live="polite" aria-atomic="true" style="position: absolute; top: 10px; right: 10px; width: 300px; min-height: 200px;">
        @foreach ($toasts as $toast)
            @includeFirst(['bootstrap-toast::toasts.'.$toast->type, 'bootstrap-toast::toasts.default'], ['toast' => $toast])
        @endforeach
    </div>

    <script>
        $('.toast').toast('show');
    </script>    
@endif