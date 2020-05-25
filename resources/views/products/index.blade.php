@extends('layouts.app')
@section('content')
@foreach($books as $book)
    <div>
        <a href={{"/books/".$book->id}}>{{$book->name}}</a>
    </div>
    @endsection
@endforeach
