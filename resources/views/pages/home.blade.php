
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
            h2{
                text-align : center;
                margin-bottom : 80px;
            }
        </style>
   

            <h2>Students</h2>
            <table>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Détails</th>
                </tr>
                @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->family_name }}</td>
                    <td>{{ $student->given_name }}</td>
                    <td><a href="/students/{{ $student->id }}">Info</a></td>
                </tr>
                @endforeach
            </table>


            <h2>Classes</h2>
            <table>
                <tr>
                    <th>#</th>
                    <th>Classe</th>
                    <th>Groupe</th>
                    <th> Année </th>
                    <th>Détails</th>
                </tr>
                @foreach ($schools as $school)
                <tr>
                  <td>{{ $school->id }}</td>
                    <td>{{ $school->class }}</td>
                    <td>classe : {{ $school->number }}</td>
                    <td>{{ $school->year }}</td>
                    <td><a href="/classes/{{ $school->id }}">Info</a></td>
                </tr>
                @endforeach
            </table>
        @stop