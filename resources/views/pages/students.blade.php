
@extends('layout\default')
@section('content')

        <!-- Styles -->
        <style>
       
            tr {
                text-align: center;
            }
            th, td {
                text-align : center;
                padding-right: 1.5rem;
            }

            .trier{
                margin-top : 20px;
                text-align : center;
            }
            .trier a {
                color : white ;
                text-decoration : none ;
                background-color: blue ;
                padding : 5px;

            }
     
        </style>
    </head>
<body>
<table>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date de naissance</th>
        <th>Details</th>

    </tr>
    @foreach ($student_paginator as $student)
    <tr>
        <td>{{ $student->given_name }}</td>
        <td>{{ $student->family_name }}</td>
        <td>{{ $student->birthday }}</td>
        <td><a href="/students/{{ $student->id }}">Info</a></td>


    </tr>
    @endforeach
</table>

        {{ $student_paginator->links('elements/paginator') }}


<div class="trier"><a href="/students?order_by=birthday&order=asc"> Trier par date de naissance</a></div>

    @stop
