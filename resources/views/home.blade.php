@extends('layouts.app')

@section('content')
<div class="fullscreen">
    @if ($video == 'twitch')
    <iframe src="https://player.twitch.tv/?channel=adangerousmix&parent=adangerousmix.com" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="620"></iframe>
    @else
    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $youtube }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    @endif
</div>
@endsection