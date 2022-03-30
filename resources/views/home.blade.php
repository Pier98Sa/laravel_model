@extends('layout.base')

@section('pageTitle', 'Homepage')


@section('content')
    
    <h1>Elelnco dei libri</h1>

    <ul>
        @foreach ($books as $book)

            <li>

                {{$book->id}} - {{$book->title}} - {{$book->author}} - {{$book->description}} - {{$book->rating}}

            </li>

        @endforeach  
    </ul>
   




@endsection
    
