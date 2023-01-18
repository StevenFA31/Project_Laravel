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
    <tbody>
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
    </tbody>
</table>
<div class="divCatButton">
<a class="addForm gray btn" href="/artiste/create">Nouvel artiste</a>
</div>
@endsection