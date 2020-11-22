<!-- animalindex.blade.php -->

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Welcome</h1>
@stop

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Species</th>
        <th>Color</th>
        <th>Leg</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($animals as $animal)
      <tr>
        <td>{{$animal->id}}</td>
        <td>{{$animal->species}}</td>
        <td>{{$animal->color}}</td>
        <td>{{$animal->leg}}</td>
        <td><a href="{{ route('edit', $animal->id) }}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{ route('destroy', $animal->id) }}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
  @stop
</html>