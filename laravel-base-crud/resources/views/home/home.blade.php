@extends('layouts.main')


@section('main-content')

    <sections class="teams">
        <h2 class="text-primary">
            Hompage - Teams
        </h2>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>NBA Titles</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $team)
                    <tr>
                        <td>{{ $team->id }}</td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->city }}</td>
                        <td>{{ $team->titles }}</td>
                        	<td><a href="{{route('show', $team->id)}}">Show</a></td>
                        <td>Update</td>
                        <td>Delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </sections>

@endsection