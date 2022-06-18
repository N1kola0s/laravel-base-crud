@extends ('layouts.app')

@section('page-title', 'Comics') 


<h1 class="pt-5 pb-2 text-center text-uppercase">comics</h1>

@section('content')

<div class="container">
    <table class="table">
        <thead>
            <tr class="text-uppercase text-center">
                <th>Id</th>
                <th>Titolo</th>
                <th>Descrizione</th>
                <th>Thumb</th>
                <th>Prezzo</th>
                <th>Serie</th>
                <th>Data di vendita</th>
                <th>Tipo</th>
                <th>Azione</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comics as $comic)
            <tr>
                <td scope="row">{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->description}}</td>
                <td><img width="60" src="{{$comic->thumb}}" alt=""></td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td class="d-flex justify-content-center align-items-center flex-column"> 

                    <a class="btn btn-success" href="{{route('comics.show', $comic->id)}}">Visualizza</a>
                    <a class="btn btn-warning my-2" href="{{route('comics.edit', $comic->id)}}">Modifica</a>

                    <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Rimuovi</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection