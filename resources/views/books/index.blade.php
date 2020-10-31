@extends('layout')

@section('title')
    All books
@endsection

@section('content')

<h1>All books</h1>

@foreach($books as $book)

<hr>
<a href="{{ route('books.show', $book->id) }}">
  <h3>{{ $book->title }}</h3>
</a>

<p>{{ $book->desc }}</p>


@endforeach

{{ $books->render() }}
    
@endsection

