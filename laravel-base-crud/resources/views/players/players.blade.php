@extends('layouts.main')

@section('main-content')

<sections class="players">

    

    @if (session('deleted'))

        <div class="alert alert-success">
            {{session('deleted')}} successfully delete!
        </div>

    @endif


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
                    <td><a href="{{route('players.edit', $player->id)}}">Update</a></td>
                    <td>
                        <form action="{{route('players.destroy', $player->id)}}" method="POST">
                            @csrf
                            @method('DELETE')

                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</sections>

@endsection