@extends('layout.app')

@section('page.title')
<div class="container">
  Inserisci un fumetto
</div>
@endsection

@section('page.main')

<div class="container">
    <div>
        <a href="{{ route('comics.index') }}" class="btn btn-primary btn-sm">Torna all'elenco</a>
    </div>

    <div>
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
    </div>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="thumb" class="form-label">Img</label>
          <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
        </div>
        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
        </div>
        <div class="mb-3">
          <label for="sale_date" class="form-label">Sale date</label>
          <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
        </div>
        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
        </div>
        <div class="mb-3">
          <label for="artists" class="form-label">Artists</label>
          <input type="text" class="form-control" id="artists" name="artists" value="{{ old('artists') }}">
        </div>
        <div class="mb-3">
          <label for="writers" class="form-label">Writers</label>
          <input type="text" class="form-control" id="writers" name="writers" value="{{ old('writers') }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>




</div>

@endsection