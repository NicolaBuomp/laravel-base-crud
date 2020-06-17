@extends('layouts.main')


@section('main-content')

        <h2 class="text-primary">
            {{ $teams->name }}
        </h2>


        <ul class="list-group">
            <li class="list-group-item">
                ID: {{$teams->id}}
            </li>
            <li class="list-group-item">
                ID: {{$teams->name}}
            </li>
            <li class="list-group-item">
                ID: {{$teams->city}}
            </li>
            <li class="list-group-item">
                ID: {{$teams->titles}}
            </li>
            <li class="list-group-item">
                ID: {{$teams->created_at}}
            </li>
            <li class="list-group-item">
                ID: {{$teams->updated_at}}
            </li>
        </ul>
@endsection