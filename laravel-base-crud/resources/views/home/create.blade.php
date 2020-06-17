@extends('layouts.main')


@section('main-content')

        <h2 class="text-primary mb-5">
            Create a new Team
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


        <form action="{{route('store')}}" method="post">

            @csrf
            @method('POST')

            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Team Name">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="city" placeholder="City">
            </div>

            <div class="form-group">
                <input type="number" class="form-control" name="titles" placeholder="NBA Titles">
            </div>

            <input type="submit" class="btn btn-primary" value="Create">

        </form>

@endsection