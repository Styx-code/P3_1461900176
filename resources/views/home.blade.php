<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Kegiatan 3</title>
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
        padding: 8px 16px ;               text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Tugas Kegiatan 3</h1>
    <a href="{{url('/dokter')}}">Data Dokter</a>
    <a href="{{url('/pasien')}}">Data Pasien</a>
    <a href="{{url('/user')}}">Data User</a>
    <a href="{{url('/kamar')}}">Data Kamar</a>
</body>
</html>