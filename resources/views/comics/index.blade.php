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

                    <a class="btn btn-success w_btn" href="{{route('comics.show', $comic->id)}}">Visualizza</a>
                    <a class="btn btn-warning my-2 w_btn" href="{{route('comics.edit', $comic->id)}}">Modifica</a>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary w_btn" data-bs-toggle="modal" data-bs-target="#delete-comic-{{$comic->id}}">
                      Rimuovi
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="delete-comic-{{$comic->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitle-{{$comic->id}}" aria-hidden="true">

                        <div class="modal-dialog" role="document">

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title">Rimuovi "{{$comic->title}}"</h5>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                </div>

                                <div class="modal-body">
                                    Sei davvero sicuro di voler rimuovere definitivamente il fumetto dalla lista? *ATTENZIONE* l'azione è irreversibile!
                                </div>

                                <div class="modal-footer">

                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Esci</button>

                                    <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Conferma</button>
                                    </form>

                                </div>

                            </div>

                        </div>
                        
                    </div>
                    

                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection