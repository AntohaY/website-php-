@extends('layouts.app')


@section('content')


    <div class="container">

        <h3>Index view</h3>
        @foreach($comments as $comment)
            <li>
                {{$comment -> owner_id}}
                {{$comment -> name}}
            </li>
        @endforeach

    </div>


@endsection