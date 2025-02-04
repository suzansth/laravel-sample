<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->name }}</title>
</head>
<body>
    <h1>{{ $post->name }}</h1>
    <p>{{ $post->contents }}</p>

    <h3>Tags:</h3>
    @if($post->tags->isEmpty())
        <p>No tags available for this post.</p>
    @else
        <ul>
            @foreach($post->tags as $tag)
                <li>{{ $tag->name }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>

