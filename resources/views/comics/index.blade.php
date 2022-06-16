@extends ('layouts.app')

@section('page-title', 'Comics') 


<h1 class="pt-5 pb-2 text-center text-uppercase">comics</h1>

@section('content')

<div class="container">
    <table class="table">
        <thead>
            <tr class="text-uppercase">
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
                <td><img width="60" src="{{$comic->thumb}}" alt=""></td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection