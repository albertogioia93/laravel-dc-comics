@extends('layout.app')

@section('page.title')
<div class="container">
  Modifica fumetto: {{ $comic->titolo }}
</div>
@endsection

@section('page.main')

<div class="container">
    <div>
        <a href="{{ route('comics.index') }}" class="btn btn-primary btn-sm">Torna all'elenco</a>
    </div>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="src" class="form-label">Immagine</label>
          <input type="text" class="form-control" id="src" name="src" value="{{ $comic->src }}">
        </div>
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" name="id" value="{{ $comic->id }}">
        </div>

        <div class="mb-3">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="titolo" name="titolo" value="{{ $comic->title }}">
        </div>

        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>




</div>

@endsection