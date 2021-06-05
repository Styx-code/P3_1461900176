<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <style>
        * {
            box-sizing: border-box;
        }
        input [type=text], input[type=number]{
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }
        input [type=submit]{
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover{
            background-color: #45a049;
        }
        .container{
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .col-25{
            float: left;
            width: 25%;
            margin-top: 6px;
        }
        .col-75{
            float: left;
            width: 75%;
            margin-top: 6px;
        }
        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>
<body>
    <h2>Tambah Data Dokter</h2>
    <div class="container">
        <form action="{{route('dokter0176.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-25">
                    <label>Nama Lengkap</label>
                </div>
                <div class="col-75">
                    <input type="text" name="nama">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Jabatan</label>
                </div>
                <div class="col-75">
                    <input type="text" name="jabatan">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>