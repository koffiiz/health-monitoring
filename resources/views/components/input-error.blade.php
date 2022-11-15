@props(['messages'])

@if ($messages)
        @foreach ((array) $messages as $message)
            <li style="font-size: 12px; margin-bottom: 1rem;list-style-type: none;">{{ $message }}</li>
        @endforeach
@endif
