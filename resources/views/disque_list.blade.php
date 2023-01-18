@extends('layout')

@section('title', "Page liste disque")
@section('content')
<table>
  @csrf
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">ARTISTE</th>
        <th scope="col">GENRE</th>
        <th scope="col">ANNÉE</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($disques as $disque)
        <tr>
            <td>{{ $disque->id }}</td>
            <td>{{ $disque->artiste->nom }}</td>
            <td>{{ $disque->genre->nom }}</td>
            <td>{{ $disque->annee }}</td>
            <td>
                <a href="/disque/show/{{ $disque->id }}"><i class="fa-solid fa-eye"></i></a>&nbsp;&nbsp;&nbsp;
                <a href="/disque/update/{{ $disque->id }}"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;&nbsp;&nbsp;
                <a href="/disque/delete/{{ $disque->id }}"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
        @endforeach

    </tbody>
  </table>
  <a href="/disque/create">Nouveau disque</a>
@endsection