@extends('layouts.main')

@section('main-content')

        <h2 class="text-primary mb-5">
            Edit Player {{ $player->name }}
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


        <form action="{{route('players.update', $player->id)}}" method="POST">

            @csrf
            @method('PATCH')

            <div class="form-group">
            <input type="text" class="form-control" name="name" value="{{ $player->name }}">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="team" value="{{ $player->team }}">
            </div>

            <div class="form-group">
                <input type="number" class="form-control" name="age" value="{{ $player->age }}">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="description" value="{{ $player->description }}">
            </div>

            <input type="submit" class="btn btn-primary" value="Update">

        </form>

@endsection