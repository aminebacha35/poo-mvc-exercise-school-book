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
    <tr>
        <td>{{ $student->gender }}</td>
        <td>{{ $student->given_name }}</td>
        <td>{{ $student->family_name }}</td>
        <td>{{ $student->streetaddress }}</td>
        <td>{{ $student->city }}</td>
        <td>{{ $student->zipcode }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->phone }}</td>
        <td>{{ $student->birthday }}</td>
    </tr>
</table>

</body>
</html>
