<!-- resources/views/Condidat/index.blade.php -->
@extends('layouts.app')

@section('content')
<table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>nom</th>
            <th>prenom</th>
            <th>etablissement</th>
            <th>villeEtablissement</th>
            <th>haut_niveau</th>
        </tr>
        @foreach($condidats as $condidat)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $condidat->nom}}</td>
	        <td>{{ $condidat->prenom }}</td>
	        <td>{{ $condidat->etablissement }}</td>
	        <td>{{ $condidat->villeEtablissement }}</td>
	        <td>{{ $condidat->haut_niveau }}</td>
	    </tr>
	    @endforeach
    </table>
@endsection
