<!-- index.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Movie ID</td>
          <td>Movie Name</td>
          <td>Movie Description</td>
          <td>Movie Generation</td>
          <td>movie_imag_name</td> 
          <td>movie_imag_path</td> 
        </tr>
    </thead>
    <tbody>
        @foreach($netflixes as $netflix)
        <tr>
            <td>{{$netflix->id}}</td>
            <td>{{$netflix->movie_name}}</td>
            <td>{{$netflix->movie_description}}</td>
            <td>{{$netflix->movie_gener}}</td>
            <td>{{$netflix->movie_imag_name}}</td>
            <td>{{$netflix->movie_imag_path}}</td>
            
            
            <td><a href="{{ route('netflixes.edit', $netflix->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('netflixes.destroy', $netflix->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection