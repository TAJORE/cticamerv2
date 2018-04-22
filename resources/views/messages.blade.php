
@extends('layout')

@section('content')
    <div id="main_messages">
        <ul>
            @foreach($messages as $message)
                <li>Name: {{ $message->name }},  email: {{ $message->email }}</li>
            @endforeach
        </ul>
        List of messages
    </div>
@endsection