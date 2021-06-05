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
        background-color: aqua;
        padding: 8px 16px ;
        text-decoration: dashed;
        margin-bottom: 5px;
    }
    </style>
</head>
<body>
    <h2>Data Pasien</h2>
    <div>
        <a href="" class="tambah">Tambah Data</a>
    </div>
    
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
                @foreach ($pasien as $pas)
                <tr>
                    <td>{{$no++}}</td>
                    <th>{{$pas->nama}}</th>
                    <th>{{$pas->alamat}}</th>
                    <th>
                        <button type="submit">edit</button>
                        <button type="submit">delete</button>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>