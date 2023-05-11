@extends('layout.app')

@section('page.title')
<div class="container">
   {{ $comic->title }}
</div>
@endsection

@section('page.main')

<div class="container">
    <div>
        <a href="{{ route('comics.index') }}" class="btn btn-primary btn-sm">Torna all'elenco</a>
    </div>
    {!! $comic->description !!}
</div>

@endsection

