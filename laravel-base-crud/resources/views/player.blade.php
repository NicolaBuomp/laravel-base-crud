@extends('layouts.main')

@section('main-content')

    <sections class="players">
        <h2 class="text-primary">
            List Best Player
        </h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Team</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($players as $player)
                    <tr>
                        <td>{{ $player->name }}</td>
                        <td>{{ $player->team }}</td>
                        <td>{{ $player->age }}</td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </sections>

@endsection