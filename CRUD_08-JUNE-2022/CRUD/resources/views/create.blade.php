<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Movies Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('netflixes.store') }}">
          <div class="form-group">
              @csrf
              <label for="country_name">Movie Name:</label>
              <input type="text" class="form-control" name="movie_name"/>
          </div>
          <div class="form-group">
              <label for="cases">Movie Description :</label>
              <input type="text" class="form-control" name="movie_description"/>
          </div>

          <div class="form-group">
              <label for="cases">Movie Generation :</label>
              <input type="text" class="form-control" name="movie_gener"/>
          </div>

          <div class="form-group">
              <label for="cases">Movie Image Name :</label>
              <input type="text" class="form-control" name="movie_imag_name"/>
          </div>

          <div class="form-group">
              <label for="cases">Movie Image Path :</label>
              <input type="text" class="form-control" name="movie_imag_path"/>
          </div>
          <button type="submit" class="btn btn-primary">Add Movie</button>
      </form>
  </div>
</div>
@endsection