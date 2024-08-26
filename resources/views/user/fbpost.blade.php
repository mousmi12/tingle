<!DOCTYPE html>
<html>
<head>
    <title>Facebook Posts</title>
</head>
<body>
    <h1>Your Facebook Posts</h1>
    @foreach ($posts as $post)
        <div>
            <p>{{ $post['message'] ?? 'No message' }}</p>
            <small>{{ $post['created_time']->format('Y-m-d H:i:s') }}</small>
        </div>
    @endforeach
</body>
</html>
