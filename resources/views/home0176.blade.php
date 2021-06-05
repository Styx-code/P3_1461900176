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
        padding: 8px 16px ;              
        text-decoration: none;
    }
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
        text-decoration: none;
        background-color: mediumorchid;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        display: inline-block;
        
    }
    .tombol:hover{
        background-color: khaki;
        color: black;
        text-decoration: none;
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
    <div class="tombol">
        <a href="{{url('')}}">Filter</a>
    </div>
</body>
</html>