@extends('layout')

@section('title')
    Create book
@endsection

@section('content')
<form>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="title">
  </div>
  
 
  <div class="form-group">
    <textarea class="form-control" rows="3" placeholder="description"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection