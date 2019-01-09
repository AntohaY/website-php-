@extends('layouts.app')


@section('content')

    <h1 class="title">Edit comment</h1>

    <form method="post" action="/comments/{{ $comment->id }}">
        {{method_field('PATCH')}}
        {{csrf_field()}}

        <div class="field">
            <label class="label" for="name">Title</label>

            <div class="control">
                <input type="text" class="input" name="name" placeholder="Name" value="{{ $comment->name }}">
            </div>
        </div>


        <div class="field">
            <label class="label" for="body">Body</label>

            <div class="control">
                <textarea name="body" class="textarea">{{ $comment->body }}</textarea>
            </div>
        </div>

        <div class="field">
            <label class="label" for="email">Body</label>

            <div class="control">
                <textarea name="email" class="textarea">{{ $comment->email }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="sumbit" class="button is-link">Update Comment</button>
            </div>
        </div>
    </form>

    <form method="post" action="/comments/{{$comment -> id}}">
        @csrf
        @method('DELETE')
        <div class="field">
            <div class="control">
                <button type="sumbit" class="button is-link">Delete Comment</button>
            </div>
        </div>
    </form>

@endsection