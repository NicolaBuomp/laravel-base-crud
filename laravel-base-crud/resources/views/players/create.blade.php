@extends('layouts.main')

@section('main-content')

        <h2 class="text-primary mb-5">
            Create a new Player
        </h2>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{route('players.store')}}" method="POST">

            @csrf
            @method('POST')

            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="team" placeholder="Team">
            </div>

            <div class="form-group">
                <input type="number" class="form-control" name="age" placeholder="Age">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="description" placeholder="Description">
            </div>

            <input type="submit" class="btn btn-primary" value="Create">

        </form>

@endsection