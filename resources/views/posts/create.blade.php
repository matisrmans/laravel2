<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Post</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Create a New Post</h1>
    <form action="{{ route(posts\store) }}" method="POST">
        @csrf
        
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br>
    
        
        <label for="content">Content:</label><br>
        <textarea id="content" name="content" required></textarea><br>
        
        <button type="submit">Create Post</button>
    </form>
</body>
</html>