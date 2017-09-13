@component('mail::message')

@if(isset($content))
  # {{ $content['subject'] }}
@endif

@component('mail::panel', ['url' => ''])
@if(isset($content))
  {{ $content['message'] }}.
@endif
@endcomponent
{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}
@endcomponent
