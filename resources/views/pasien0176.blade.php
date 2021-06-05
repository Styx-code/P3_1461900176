<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
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
        text-decoration: none;
        margin-bottom: 5px;
    }
    .tambah:hover{
        background-color: black;
        color: #f2f2f2;
    }
    .tombol{
        background-color: mediumorchid;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        display: inline-block;
        text-decoration: none;
    }
    .tombol:hover{
        background-color: khaki;
        color: black;
    }
    </style>
</head>
<body>
    <h2>Data Pasien</h2>    
    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Ubah</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($pasien as $ps)
                <tr>
                    <td>{{$no++}}</td>
                    <th>{{$ps->nama}}</th>
                    <th>{{$ps->alamat}}</th>
                    <th>
                    ||
                    <a href="{{ url('pasien0176/' . $ps->id . '/edit') }}" class="tombol">Edit</a>
                    |||
                    <a href="{{ url('/pasien0176/' . $ps->id . '/hapus') }}" class="tombol">Hapus</a>
                    ||
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <div>
    <a class="tambah" href="{{ route('pasien0176.create') }}">Tambah Data</a>
    </div>
</body>
</html>