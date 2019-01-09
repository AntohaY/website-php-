@extends('layouts.app')

@section('content')
<body>

    <h1>Create your comment</h1>

    <form method="post" action="/comments">
        @csrf


        <div>
            <input type="text" name="name" placeholder="Name">
        </div>

        <div>
            <textarea name="body" placeholder="Your text"></textarea>
        </div>

        <div>
            <input type="text" name="email" placeholder="Your email">
        </div>

        <div>
            <button type="submit">Create comment</button>
        </div>
    </form>

</body>
@endsection
