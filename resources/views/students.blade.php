<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

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
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date de naissance</th>
    </tr>
    @foreach ($student_paginator as $student)
    <tr>
        <td>{{ $student->given_name }}</td>
        <td>{{ $student->family_name }}</td>
        <td>{{ $student->birthday }}</td>
    </tr>
    @endforeach
</table>
<div class="pagination">
        {{ $student_paginator->links('paginator') }}
    </div>
</body>
</html>
