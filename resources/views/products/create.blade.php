@extends('layouts.app')

@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <h3 class="card-title">
                CREATE BOOK
            </h3>


            <div>
                @include('404.blade')

                <form method="POST" action="{{route('books.store ')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value={{old('name')}}placeholder="description" >
                    </div>
                    <div class="form-group">
                        <label for="page">page</label>
                        <input type="text" class="form-control" id="page" name="page"value={{old('page')}} placeholder="description">
                    </div>
                    <div class="form-group">
                        <label for="ISBN">ISBN</label>
                        <input type="number" class="form-control" id="ISBN" name="ISBN"value={{old('ISBN')}} placeholder="description">
                    </div>
                    <div class="form-group">
                        <label for="price">price</label>
                        <input type="number" class="form-control" id="price" name="price"value={{old('price')}} placeholder="description">
                    </div>
                    <div class="form-group">
                        <label for="date">date</label>
                        <input type="number" class="form-control" id="date" name="date"value={{old('date ')}} placeholder="description">
                    </div>

                    @if($errors->any())

                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all()as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>




@endsection
