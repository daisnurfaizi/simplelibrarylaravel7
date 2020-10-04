@extends('frontend.templates.default')
@section('content')
<h2>Daftar Buku</h2>
<blockquote>
    <p class="flow-text">Koleksi Buku Yang dapat Kamu Baca Dan Pinjam!</p>
</blockquote>
<div class="row">
   @foreach ($books as $book)
    @include('frontend.templates.component.card-component',['book'=>$book])
   @endforeach
</div>
{{$books->links('vendor.pagination.materialize')}}
@endsection