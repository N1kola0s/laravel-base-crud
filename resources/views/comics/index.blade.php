@extends ('layouts.app')

@section('page-title', 'Comics') 




@section('content')

<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>thumb</th>
            <th>price</th>
            <th>series</th>
            <th>sale_date</th>
            <th>type</th>
        </tr>
    </thead>
    <tbody>
        @foreach($comics as $comic)
        <tr>
            <td scope="row">{{$comic->id}}</td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->description}}</td>
            <td><img src="{{$comic->thumb}}" alt=""></td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection