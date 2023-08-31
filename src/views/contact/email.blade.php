<x-mail::message>
    # Introduction
    There are new query from: {{$name}}
    Message:
    {{$message}}

    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
