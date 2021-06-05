<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dokter</title>
    <style>
        table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
    }
    thead {
        background-color: #f2f2f2;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even){background-color: #f2f2f2}
    .tambah{
        background-color: navajowhite;
        padding: 10px 10px ;
        text-decoration: dashed;
        margin-bottom: 5px;
    }
    </style>
</head>
<body>
    <h2>Data Dokter</h2>    
    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Ubah</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($dokter as $dok)
                <tr>
                    <td>{{$no++}}</td>
                    <th>{{$dok->nama}}</th>
                    <th>{{$dok->jabatan}}</th>
                    <th>
                    ||
                    <a href="{{ url('dokter0176/' . $dok->id . '/edit') }}" class="btn btn-xs btn-info pull-right">Edit</a>
                    |||
                    <a href="{{ url('/dokter0176/' . $dok->id . '/hapus') }}" class="btn btn-xs btn-info pull-right">Hapus</a>
                    ||
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
    <a class="tambah" href="{{ route('dokter0176.create') }}">Tambah Data</a>
    </div>
</body>
</html>