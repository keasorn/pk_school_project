@extends("layouts.app")

@section('content')
    <ul>
        @foreach($posts as $p)
            <li>{{$p['title']}} - {{$p['content']}}</li>
        @endforeach
    </ul>

@endsection
