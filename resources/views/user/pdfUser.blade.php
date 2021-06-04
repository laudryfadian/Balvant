<!DOCTYPE html>
<head>
    <title>Cetak PDF Data User</title>
</head>
<body>
    <style type="text/css">
        body{
            font-family: sans-serif;
        }
        table{
            margin: 20px auto;
            border-collapse: collapse;
        }
        table th,
        table td{
            border: 1px solid #3c3c3c;
            padding: 3px 8px;
        }
        a{
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
        }
        .tengah{
            text-align: center;
        }
    </style>
    <h2 align="center">Cetak Data User</h2>
    <table>
        <thead>
            <tr>
                <th style="width: 10%">ID</th>
                <th style="width: 16.66%">Nama</th>
                <th style="width: 10%">Email</th>
                <th style="width: 14%">Alamat</th>
                <th style="width: 12%">No Hp</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($user as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->nohp }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>