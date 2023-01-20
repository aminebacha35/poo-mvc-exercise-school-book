
@extends('layout\default')
@section('content')

        <style>
            table{
                margin-bottom : 50px;
            }
            tr {
                text-align: center;
            }
            th, td {
                text-align : center;
                padding-right: 1.5rem;
            }
            h4{
                text-align : center;
               weight : bold;
            }
            p{
                text-align : center;
            }
        </style>
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
    </tr>
    <tr>
        <td>{{ $student->gender }}</td>
        <td>{{ $student->given_name }}</td>
        <td>{{ $student->family_name }}</td>
        <td>{{ $student->city }}</td>
        <td>{{ $student->zipcode }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->phone }}</td>
        <td>{{ $student->birthday }}</td>
    </tr>
</table>

<h4> Classes :</h4>
@foreach ($student->school_classes as $classe)
  <a href="/classes/{{ $classe->id }}"><p>{{ $classe->year }} : {{ $classe->class }} {{ $classe->number }}</p></a>

    @endforeach
    
    @stop

