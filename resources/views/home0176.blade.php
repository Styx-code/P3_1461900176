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
        .tombol{
            background-color: coral;
            padding: 10px 10px;
            width: fit-content;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>Tugas Kegiatan 3</h1>
    <div class="tombol">
        <a href="{{url('/dokter0176')}}">Data Dokter</a>
    </div>
    <div class="tombol">
        <a href="{{url('/pasien0176')}}">Data Pasien</a>
    </div>
    <div class="tombol">
        <a href="{{url('/user0176')}}">Data User</
        a>
    </div>
    <div class="tombol">
        <a href="{{url('/kamar0176')}}">Data Kamar</a>
    </div>
</body>
</html>