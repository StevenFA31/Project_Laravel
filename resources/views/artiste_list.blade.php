@extends('layout')
@section('title', "Page liste artiste")
@section('content')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th></th>
        </tr>
    </thead>
    <tboby>
        @foreach ($artistes as $artiste)
            <tr>
                <td>{{ $artiste->id }}</td>
                <td>{{ $artiste->nom }}</td>
                <td>
                    <a href="/artiste/show/{{ $artiste->id }}"><i class="fa-solid fa-eye"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="/artiste/update/{{ $artiste->id }}"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="/artiste/delete/{{ $artiste->id }}"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </tboby>
</table>
<a href="/artiste/create">Nouvel artiste</a>
@endsection