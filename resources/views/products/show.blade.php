@extends('layouts.app')
@section('content')

<h1 class="mt-5">
    {{$book->name}}
</h1>
<p>
  page: {{$book->page}}
</p>
<p>
    ISBN: {{$book->ISBN}}
</p>
<p>
    price: {{$book->price}}
</p>
<p>
    date: {{$book->date}}
</p>
@endsection
