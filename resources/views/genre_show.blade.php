@extends('layout')
@section('title', "Page détail genre")

@section('content')
<table>
  @csrf
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom</th>
      </tr>
    </thead>
    <tbody>
      
      <tr>
        <th>{{ $genre->id }}</th>
        <td>{{ $genre->nom }}</td>
        <td>
          <a href="/genre/update/{{ $genre->id }}"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;&nbsp;&nbsp;
          <a href="/genre/delete/{{ $genre->id }}"><i class="fa-solid fa-trash"></i></a>
        </td>
      </tr> 
    </tbody>
  </table>
  <a href="/genre">Retour</a>

@endsection
