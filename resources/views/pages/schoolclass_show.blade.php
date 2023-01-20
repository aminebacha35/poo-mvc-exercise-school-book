
@extends('layout\default')
@section('content')

        <style>
      
            tr {
                text-align: center;
            }
            th, td {
                text-align : center;
                padding-right: 1.5rem;
            }
            h2{
                text-align : center;
                margin-bottom : 80px;
            }
            h1{ 
                text-align : center;
                margin-bottom : 50px;
            }
        </style>
    <h1>{{$schoolclass->year}} : {{$schoolclass->class}} {{$schoolclass->number}}  </h1>
<table>
    <tr>
        <th>genre</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>ville</th>
        <th>Code postal</th>
        <th>Email</th>
        <th>Numero</th>
        <th>Date de naissance</th>
        <th>Détails</th>

    </tr>
@foreach ($schoolclass->students as $classe)
    
    <tr>
        <td>{{ $classe->gender }}</td>
        <td>{{ $classe->given_name }}</td>
        <td>{{ $classe->family_name }}</td>
        <td>{{ $classe->city }}</td>
        <td>{{ $classe->zipcode }}</td>
        <td>{{ $classe->email }}</td>
        <td>{{ $classe->phone }}</td>
        <td>{{ $classe->birthday }}</td>
        <td><a href="/students/{{ $classe->id }}">Info</a></td>

    </tr>
    @endforeach
</table>
@stop
