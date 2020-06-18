@extends('layouts.main')

@section('main-content')

<sections class="players">
    <h2 class="text-primary mb-5 text-center">
        PLAYERS
    </h2>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($players as $player)
                <tr>
                    <td>{{ $player->id }}</td>
                    <td>{{ $player->name }}</td>
                    <td><a href="{{route('players.show', $player->id)}}">Details</a></td>
                    <td><a href="">Update</a></td>
                    <td><a href="">Delete</a></td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</sections>

@endsection