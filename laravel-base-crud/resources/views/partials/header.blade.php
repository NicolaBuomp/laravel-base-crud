<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'/>
    <title>NBA Teams</title>
</head>
<body>

    <header class="mb-5">
        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="nav-brand">
                <img src="https://upload.wikimedia.org/wikipedia/it/thumb/e/e1/Nba1.png/140px-Nba1.png" style="width: 40px" alt="Logo">
            </div>
            
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link" href="{{ route('index') }}">All Teams</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('players.index') }}">Player</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('players.create') }}">Add Player</a>
                </li>
            </ul>
        </nav>
    </header>
    
