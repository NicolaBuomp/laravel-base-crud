@extends('layouts.main')


@section('main-content')

        <h2 class="text-primary">
            {{ $player->name }}
        </h2>


        <ul class="list-group">
            <li class="list-group-item">
                ID: {{$player->id}}
            </li>
            <li class="list-group-item">
                Name: {{$player->name}}
            </li>
            <li class="list-group-item">
                Team: {{$player->team}}
            </li>
            <li class="list-group-item">
                Age: {{$player->age}}
            </li>
            <li class="list-group-item">
                Description: {{$player->description}}
            </li>
            <li class="list-group-item">
                Created At: {{$player->created_at}}
            </li>
            <li class="list-group-item">
                Updated At: {{$player->updated_at}}
            </li>
        </ul>
@endsection