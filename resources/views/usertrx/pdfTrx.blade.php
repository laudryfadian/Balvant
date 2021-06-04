<!DOCTYPE html>
<head>
    <title>Cetak PDF Data Transaksi</title>
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
    <h2 align="center">Cetak Data Transaksi</h2>
    <table>
        <thead>
            <tr>
                <th style="width: 10%">ID</th>
                <th style="width: 12%">User</th>
                <th style="width: 16.66%">Status</th>
                <th style="width: 10%">Kode</th>
                <th style="width: 10%">Total Harga</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($trx as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->user->name }}</td>
                <td>
                @if($data->status == 1)
                Sudah Pesan & Belum dibayar
                @else
                Sudah dibayar 
                @endif
                </td>
                <td>{{ $data->kode }}</td>
                <td>Rp. {{ number_format($data->jumlah_harga, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>