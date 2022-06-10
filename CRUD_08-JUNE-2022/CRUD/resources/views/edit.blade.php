@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Game Data
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
      <form method="post" action="{{ route('netflixes.update', $netflix->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Movie Name:</label>
              <input type="text" class="form-control" name="movie_name" value="{{ $netflix->movie_name }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Movie Price :</label>
              <input type="text" class="form-control" name="movie_description" value="{{ $netflix->movie_description }}"/>
          </div>


          <div class="form-group">
              <label for="cases">Movie Price :</label>
              <input type="text" class="form-control" name="movie_gener" value="{{ $netflix->movie_gener }}"/>
          </div>

          
          <div class="form-group">
              <label for="cases">Movie Price :</label>
              <input type="text" class="form-control" name="movie_imag_name" value="{{ $netflix->movie_imag_name }}"/>
          </div>
          

          <div class="form-group">
              <label for="cases">Movie Price :</label>
              <input type="text" class="form-control" name="movie_imag_path" value="{{ $netflix->movie_imag_path }}"/>
          </div>

          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection