@extends ('layouts.app')

@section('page-title', 'form') 

@section('content')

<div class="container">
    <h1>Inserisci un nuovo fumetto</h1>
    <form action="{{route('comics.store')}}" method="post">
        @csrf

        <div class="form-group mb-3">
          <label for="title">Titolo</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="es. Batman" aria-describedby="titleHelper">
          <small id="titleHelper" class="text-muted">Scrivi qui il nome del fumetto</small>
        </div>

        
        <div class="form-group mb-3">
            <label for="description">Descrizione</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="es. Sono la descrizione del fumetto" aria-describedby="descriptionHelper">
            <small id="descriptionHelper" class="text-muted">Scrivi qui il nome del fumetto</small>
        </div>
        
        <div class="form-group mb-3">
          <label for="thumb">Thumbnail</label>
          <input type="text" name="thumb" id="thumb" class="form-control" placeholder="es. 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX'" aria-describedby="titleHelper">
          <small id="thumbHelper" class="text-muted">Scrivi qui il percorso della thumb</small>
        </div>

        <div class="form-group mb-3">
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="es. 25.99" aria-describedby="priceHelper">
            <small id="priceHelper" class="text-muted">Scrivi qui il prezzo</small>
        </div>
        
        <div class="form-group mb-3">
            <label for="series">Serie</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="es. Action Comics" aria-describedby="seriesHelper">
            <small id="seriesHelper" class="text-muted">Scrivi qui la serie</small>
        </div>

        <div class="form-group mb-3">
            <label for="sale_date">Data di vendita</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="es. 2018-10-02" aria-describedby="sale_dateHelper">
            <small id="sale_dateHelper" class="text-muted">Scrivi qui la Data di vendita</small>
        </div>

        <div class="form-group mb-3">
            <label for="type">Tipo</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="es. comic book" aria-describedby="typeHelper">
            <small id="typeHelper" class="text-muted">Scrivi qui il tipo di fumetto</small>
        </div>
        
        <button type="submit" class="btn btn-primary">Aggiungi</button>

    </form>
</div>


@endsection