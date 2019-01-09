@extends('layouts.app')


@section('content')

    <h1> {{$comment-> name}} </h1>
    <body>
        <div>
            {{$comment -> body}}
        </div>
    </body>

    @can('update', $comment)
        <a href="">Update</a>
    @endcan

@endsection

