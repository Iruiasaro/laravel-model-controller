
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Home</title>
</head>
<body>

<div class="wrapper">

    <div class="film">
        
        @foreach($movies as $movie)
            <h2>{{ $movie->title }}</h2>
            <ul>
                <li>Original Title: {{ $movie->original_title }}</li>
                <li>Nationality: {{$movie->nationality}}</li>
                <li>Date: {{ $movie->date }}</li>
                <li>Vote: {{ $movie->vote }}</li>
            </ul>
        @endforeach

    </div>
</div>        
    
</body>
</html>