<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h3>Un cliente te ha contactado a través de la página web.</h3>

    <table>
        <tr>
            <th>Nombre</th>
            <td>{{ $request->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $request->email }}</td>
        </tr>
        <tr>
            <th>Teléfono</th>
            <td>{{ $request->phone }}</td>
        </tr>
        <tr>
            <th>Mensaje</th>
            <td>{{ $request->message }}</td>
        </tr>
    </table>

</body>

</html>