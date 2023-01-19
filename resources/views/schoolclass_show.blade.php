<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profil</title>

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
        <th>genre</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Adresse</th>
        <th>ville</th>
        <th>Code postal</th>
        <th>Email</th>
        <th>Numero</th>
        <th>Date de naissance</th>
    </tr>
@foreach ($schoolclass->students as $classe)
    
    <tr>
        <td>{{ $classe->gender }}</td>
        <td>{{ $classe->given_name }}</td>
        <td>{{ $classe->family_name }}</td>
        <td>{{ $classe->streetaddress }}</td>
        <td>{{ $classe->city }}</td>
        <td>{{ $classe->zipcode }}</td>
        <td>{{ $classe->email }}</td>
        <td>{{ $classe->phone }}</td>
        <td>{{ $classe->birthday }}</td>
    </tr>
    @endforeach
</table>
</body>
</html>
