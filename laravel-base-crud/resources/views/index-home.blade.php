@extends('layouts.main')

@section('main-content')

<sections class="teams">
    <h2 class="text-primary mb-5 text-center">
        Hompage - Teams
    </h2>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>NBA Titles</th>
                <th>Description</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
                <tr>
                    <td>{{ $team->id }}</td>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->titles }}</td>
                    <td>{{ $team->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</sections>

@endsection