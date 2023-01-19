<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Classes</title>

        <!-- Styles -->
        <style>
            body {
                max-width: 1000px;
                margin: auto;
            }
            th {
                text-align: left;
            }
            th, td {
                padding-right: 1.5rem;
            }
        </style>
    </head>
<body>
<table>
    <tr>
        <th>Nom de la classe</th>
        <th>Année</th>
        <th>Nombre d'étudiants</th>
    </tr>
    @foreach ($schoolclass_paginator as $school)
    <tr>
  <td>{{ $school->class }} {{ $school->number }}</td>
        <td>{{ $school->year }}</td> 
        <td>{{ $nStudent[$school->id-1]->students->count()}}</td>
        </tr>
  @endforeach    
</table>
<div class="pagination">
        {{ $schoolclass_paginator->links('paginator') }}
    </div>

</body>
</html>
