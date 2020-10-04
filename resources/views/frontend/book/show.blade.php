@extends('frontend.templates.default')
@section('content')
<div class="col s12 m6">
    <div class="card horizontal hoverable">
        <div class="card-image">
            <img src="{{$book->getCover()}}">
        </div>
        <div class="card-stacked">
            <div class="card-content">
            <h3 class="red-text accent-2">{{$book->title}}</h3>
            <blockquote>
                <p>{{$book->description }}</p>
            </blockquote>
            <p>
                <i class="material-icons">person </i> : {{$book->author->name}}
            </p>
            <p>
                <i class="material-icons">book</i> : {{$book->qty}}
            </p>
            </div>
            <div class="card-action">
                <form action="{{route('book.borrow',$book)}}" method="POST">
                    @csrf
                    <input type="submit" value="Pinjam Buku" class="btn red accent-1 right waves-effect waves-light">
                </form>
            </div>
        </div>
    </div>
</div>
<h4>Buku lainnya dari {{$book->author->name}}</h4>
<div class="row">
    @foreach ($book->author->books->shuffle()->take(4) as $book)
    @include('frontend.templates.component.card-component')
    @endforeach
</div>
@endsection