@component('mail::message')
    @if (Arr::exists($email, 'title'))
        <x-slot name="title">
            {{$email['title']}}           
        </x-slot>
    @endif

    @if (Arr::exists($email, 'body'))
        <div>
            <p>{{$email['body']}} </p>
        </div>
    @endif

    @if ($button)
        <x-slot name="button">
            @component('mail::button', ['url' => $button['url']])
                {{$button['text']}}
            @endcomponent        
        </x-slot>
    @endif
@endcomponent
