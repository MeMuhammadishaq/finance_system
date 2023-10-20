@extends('main')
@section('containt')
    <div class="container">
        <div class="text-center">
            <h1>Add new costomer</h1>
        </div>
        <form action="{{route('insert')}}" method="POST">
            @csrf
        <div class="mb-3">
            <label for="" class="form-label">Costomer Name </label>
            <input type="text" class="form-control" name="name" id="" aria-describedby="helpId"
                placeholder="name">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Costomer Number </label>
            <input type="text" class="form-control" name="number" id="" aria-describedby="helpId"
                placeholder="phone number">
        </div>
        <button type="submit" class="btn btn-primary">ADD</button>
    </form>


















    </div>
@endsection
