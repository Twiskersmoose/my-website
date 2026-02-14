<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-pvBshWk2BC7r2xNUGIjRql3KMZ9IeTMG8OV9FkWUr5aGQYRpKKLewVHbph+It+48" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-AHP9+OV3Z6kNQeHX8K3A+PFuWVKcKvh/LH5Q/R5C2YiLd2Xq6Wl2iSpvjMSyyGkS" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <title>@yield("title")</title>
     
</head>
<body>
    <style>

    </style>
    <div>
        <div>
            <div>
                <a href="{{ route('home') }}">Home</a>
            </div> 
            <div>
                <a href="{{ route('pics') }}">Pics</a>
            </div>    
        </div>
        <div>@yield("content")</div>
    </div>
</body>
</html>