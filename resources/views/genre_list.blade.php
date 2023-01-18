@extends('layout')
@section('title', "Page liste disque")
@section('content')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Genre</th>
            <th></th>
        </tr>
    </thead>
    <tboby>
        @foreach ($genres as $genre)
            <tr>
                <td>{{ $genre->id }}</td>
                <td>{{ $genre->nom }}</td>
                <td>
                    <a href="/genre/show/{{ $genre->id }}"><i class="fa-solid fa-eye"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="/genre/update/{{ $genre->id }}"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="/genre/delete/{{ $genre->id }}"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </tboby>
</table>
<a href="/genre/create">Nouveau genre</a>
@endsection