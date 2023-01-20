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

          
     
        </style>
    </head>
<table>
    <tr>
        <th>Nom de la classe</th>
        <th>Année</th>
        <th>Nombre d'étudiants</th>
        <th>Détails</th>

    </tr>
    @foreach ($schoolclass_paginator as $school)
    <tr>
  <td>{{ $school->class }} {{ $school->school_classes }}</td>
        <td>{{ $school->year }}</td> 
        <td>{{ $nStudent[$school->id-1]->students->count()}}</td>
        <td><a href="/classes/{{$school->id}}">Info</a></td>

        </tr>
  @endforeach    
</table>

        {{ $schoolclass_paginator->links('elements/paginator') }}

@stop
