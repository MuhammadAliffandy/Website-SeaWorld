<?php
    session_start();
    require('crud.php');
    $dbakun = new database();
    $dbakun->sambungkan();

    $dbbarang1 = $dbakun->showbarang('Bibit Ikan Mas');
    $dbbarang2 = $dbakun->showbarang('batako');
    $dbbarang3 = $dbakun->showbarang('Fish Counter');
    $dbbarang4 = $dbakun->showbarang('Serokan Induk');
    $dbbarang5 = $dbakun->showbarang('Serokan benih');
    $dbbarang6 = $dbakun->showbarang('Penyortir ikan');
    $dbbarang7 = $dbakun->showbarang('Waring');
    $dbbarang8 = $dbakun->showbarang('Hapa telur');
    $dbbarang9 = $dbakun->showbarang('Water sampler');
    $dbbarang0 = $dbakun->showbarang('Terpal plastik');




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bahan</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            max-width: 100%;
            max-height: 100%;
            background-color: #0F1B33;
            margin: auto;
            font-family: 'Barlow Semi Condensed', sans-serif;
        }

        .header1 {
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 1450px;
        }

        #header {
            display: flex;
            justify-content: center;
        }

        #header li {
            list-style-type: none;
            margin: 15px 10px;
        }

        #header li a {
            color: white;
            font-size: 14px;
            padding: 8px;
            text-decoration-color: white;
            text-decoration-line: none;
        }

        li #iconuser {
            color: white;


        }

        h4 {
            color: white;
        }

        .search label input {

            border: none;
            border-radius: 15px;
            height: 35px;
            padding-left: 15px;
            box-shadow: 5px 10px 20px black;


        }


        .search label input {
            border: none;
            border-radius: 15px;
            height: 35px;
            padding-left: 15px;
            box-shadow: 0px 10px 30px -10px black;


        }

        .search {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;

        }

        #iconuser {
            color: white;
        }

        i {
            margin: 0rem 0.8rem 0rem 0.8rem;
            color: #13a5d3;
        }


        .shop {
            margin-top: 80px;
        }

        .container {
            display: flex;
            justify-content: center;
        }

        .filter {
            margin-top: 110px;
            margin: 0 auto;
        }

        .filter td {
            width: 200px;
            height: 400px;
        }

        a {}

        .isi {
            text-align: center;
            margin-bottom: 35px;
            margin-right: 30px;
            border-radius: 10px;
            padding: 15px;
            border: 3px solid #071021;

        }

        .isi:hover {
            background-color: #071021;
            box-shadow: 0px 10px 25px -20px white;
        }

        .shop {
            margin: 0 auto;
        }

        .hlbahan {
            color: white;
            font-size: 17px;
        }

        .isitext {
            font-size: 12px;
            color: white;
            width: 160px;
            margin: 0 auto;
        }

        .gambarbahan {
            width: 180px;
            height: 120px;
            border-radius: 6px;
            margin: 0 auto;
            box-shadow: 0px 10px 25px -15px #13a5d3;
        }

        .tombolbahan {
            display: flex;
            justify-content: space-between;
            width: 160px;
            height: 30px;
            margin: 0 auto;

        }

        .keranjang {
            padding: 8px 8px;
            border-radius: 7px;
            background-color: white;
            border: none;
        }

        .show {
            color: white;
            padding: 7px 35px;
            border-radius: 7px;
            background-color: transparent;
            border: 2px solid #13a5d3;
        }

        .show:hover {
            background-color: #13a5d3;
        }

        #daftarKategori {
            display: flex;
            flex-wrap: wrap;
            width: 1300px;
            margin-top: 0px;

        }

        .shop {
            width: 1200px;
            margin: 0 auto;
        }

        .shop h2 {
            margin-left: 40px;
            color: white;
        }

        .listsearch a {
            text-decoration: none;
        }

        .laman{

        width:100%;
        }
        .laman ul{
        display:flex;
        justify-content:right;
        color:white;
        margin-right:150px;

        }

        .laman ul li #satu{
        margin:0px 10px;
        padding: 6px 5px ;
        border: 1px solid white;
        border-radius:8px;
        background-color: #13a5d3;

        }

        .laman ul li a:hover {
        color: white;
        background-color: #13a5d3;
        border-radius: 10px;
        padding: 6px 5px ;

        }
    </style>

<body>
        <div class="shop">
            <h2>Bahan Pembuatan</h2>
            <ul type="none" id="daftarKategori">
                <li class="listsearch"><a target="_top"
                        href="#"><?php $dbakun->tampilkanbahan($dbbarang1['nama_barang'],$dbbarang1['Keterangan'],$dbbarang1['urlimages'],$dbbarang1['harga_barang']);?></a>
                </li>
                <li class="listsearch"><a target="_top"
                        href="#"><?php $dbakun->tampilkanbahan($dbbarang2['nama_barang'],$dbbarang2['Keterangan'],$dbbarang2['urlimages'],$dbbarang2['harga_barang']);?></a>
                </li>
                <li class="listsearch"><a target="_top"
                        href="#"><?php $dbakun->tampilkanbahan($dbbarang3['nama_barang'],$dbbarang3['Keterangan'],$dbbarang3['urlimages'],$dbbarang3['harga_barang']);?></a>
                </li>
                <li class="listsearch"><a target="_top"
                        href="#"><?php $dbakun->tampilkanbahan($dbbarang4['nama_barang'],$dbbarang4['Keterangan'],$dbbarang4['urlimages'],$dbbarang4['harga_barang']);?></a>
                </li>
                <li class="listsearch"><a target="_top"
                        href="#"><?php $dbakun->tampilkanbahan($dbbarang5['nama_barang'],$dbbarang5['Keterangan'],$dbbarang5['urlimages'],$dbbarang5['harga_barang']);?></a>
                </li>
                <li class="listsearch"><a target="_top"
                        href="#"><?php $dbakun->tampilkanbahan($dbbarang6['nama_barang'],$dbbarang6['Keterangan'],$dbbarang6['urlimages'],$dbbarang6['harga_barang']);?></a>
                </li>
                <li class="listsearch"><a target="_top"
                        href="#"><?php $dbakun->tampilkanbahan($dbbarang7['nama_barang'],$dbbarang7['Keterangan'],$dbbarang7['urlimages'],$dbbarang7['harga_barang']);?></a>
                </li>
                <li class="listsearch"><a target="_top"
                        href="#"><?php $dbakun->tampilkanbahan($dbbarang8['nama_barang'],$dbbarang8['Keterangan'],$dbbarang8['urlimages'],$dbbarang8['harga_barang']);?></a>
                </li>
                <li class="listsearch"><a target="_top"
                        href="#"><?php $dbakun->tampilkanbahan($dbbarang9['nama_barang'],$dbbarang9['Keterangan'],$dbbarang9['urlimages'],$dbbarang9['harga_barang']);?></a>
                </li>
                <li class="listsearch"><a target="_top"
                        href="#"><?php $dbakun->tampilkanbahan($dbbarang0['nama_barang'],$dbbarang0['Keterangan'],$dbbarang0['urlimages'],$dbbarang0['harga_barang']);?></a>
                </li>
            </ul>
        </div>
</body>
</html>