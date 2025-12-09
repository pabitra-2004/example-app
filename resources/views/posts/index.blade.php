<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>

<body>
    <div>
        <ul>
            @foreach ($posts as $post)
                <li>
                    {{ $post->content }}
                    <ul>
                        @foreach ($post->comments as $comment)
                            <li>{{ $comment->content }}</li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
</body>

</html>
