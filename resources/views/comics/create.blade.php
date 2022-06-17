@extends ('layouts.app')

@section('page-title', 'form') 

@section('content')

<div class="container">

    <h1>Inserisci un nuovo fumetto nel Database</h1>

    <!-- Visualizzazione degli errori di convalida -->
    @include ('partials.errors')



    <form action="{{route('comics.store')}}" method="post">
        @csrf

        <div class="form-group mb-3">
          <label for="title">Titolo</label>
          <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="es. Batman" aria-describedby="titleHelper" value="{{old('title')}}">
          <small id="titleHelper" class="text-muted">Scrivi qui il nome del fumetto</small>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>

        
        <div class="form-group mb-3">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" row="5">{{old('description')}}</textarea>
            <small id="descriptionHelper" class="text-muted">Scrivi qui il nome del fumetto</small>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        
        <div class="form-group mb-3">
          <label for="thumb">Thumbnail</label>
          <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="es. 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX'" aria-describedby="titleHelper"value="{{old('thumb')}}">
          <small id="thumbHelper" class="text-muted">Scrivi qui il percorso della thumb</small>
            @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="es. 25.99" aria-describedby="priceHelper" value="{{old('price')}}">
            <small id="priceHelper" class="text-muted">Scrivi qui il prezzo</small>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group mb-3">
            <label for="series">Serie</label>
            <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="es. Action Comics" aria-describedby="seriesHelper" value="{{old('series')}}">
            <small id="seriesHelper" class="text-muted">Scrivi qui la serie</small>
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="sale_date">Data di vendita</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control @error('sale_date') is-invalid @enderror" placeholder="es. 2018-10-02" aria-describedby="sale_dateHelper" value="{{old('sale_date')}}" >
            <small id="sale_dateHelper" class="text-muted">Scrivi qui la Data di vendita</small>
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="type">Tipo</label>
            <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="es. comic book" aria-describedby="typeHelper" value="{{old('type')}}">
            <small id="typeHelper" class="text-muted">Scrivi qui il tipo di fumetto</small>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Aggiungi</button>

    </form>
</div>


@endsection