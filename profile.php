<?php
    session_start();
    require('crud.php');

    $dbakun = new database();
    $dbakun->sambungkan();
    $profil = $_SESSION['username'];
    $db = $dbakun->query("SELECT * FROM akun WHERE Nama = '$profil'");

    if(isset($_POST['edit'])){
        header("location: edit.php");
        die();
    }

    
    if(isset($_POST['logout'])){
        session_destroy();
        header("location: index.html");
        die();
    }

    if(isset($_POST['hapus'])){
        $hps = $dbakun->deleteakun($profil);
        if($hps){     
            session_destroy();
            header("location: index.html");
            exit;
        }
            

        else{
            header("location: profile.php");
            die();
        }

    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@500;600&display=swap');
        body {
            max-width: 100%;
            max-height: 100%;
            margin: auto;
            background-image: url('component/homepage.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Barlow Semi Condensed', sans-serif;

        }

        .header1 {
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 1450px;
            margin-bottom: 40px;
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
            color: #0F1B33;

        }

        li a:hover {
            color: white;
            background-color: #0F1B33;
            border-radius: 10px;
            padding: 8px;
            z-index: 5;

        }

        h4 {
            font-family: Poppins;
            font-size: 15px;
            text-align: justify;
            color: white;
        }

        h5 {
            font-size: 10px;
            font-family: Poppins;
            text-align: center;
            color: white;
            margin: 3px 0px 15px 0px;
        }

        .container {
            width: max-content;
            display: flex;
            margin: 0 auto;

        }

        .formcon {

            width: 500px;
            height: 590px;
            display: inline-block;
            text-align: center;
            margin-right: 30px;
            border-radius: 20px;
            background-color: rgba(255, 255, 255, 0.10);
            box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(15px);


        }

        h1 {
            color: white;
            font-size: 45px;
            margin-top: 40px;
            text-align: center;
            line-height: 40px;
        }

        .middlebutton {
            display: flex;
            justify-content: right;
            margin: 6px;
        }

        #hapus {
            background-color: red;
        }

        button {
            font-size: 12px;
            text-align: right;
            color: white;
            padding: 10px 25px;
            border-radius: 14px;
            background-color: #13A5D3;
            border: none;
            box-shadow: 0 0 10px 0px rgba(0, 0, 0, 0.15);
            margin-right: 6px;

        }

        .gambarprofile {
            margin-top: 20px;
            height: 80px;
            width: 80px;
        }

        .datadiri {
            width: 400px;
            height: 400px;
            margin: 0 auto;
        }

        .dturgent {
            background-color: #0F1B33;
            border-radius: 10px;
            padding: 8px;
        }

        .dturgent h4 {
            padding-top: 10px;
            text-align: center;
            margin: 5px;
        }

        .logout button {
            color: white;
            background-color: red;
            border-radius: 5px;
            padding: 10px 15px
        }
    </style>
</head>

<body>
    <div class="header1">
        <div>
            <h4>SeaWorld</h4>
        </div>
        <div id="header">
            <li><a id="prosedur" href="procedure.php">Prosedur</a></li>
            <li><a id="bahan" href="bahan.php">Bahan</a></li>
            <li><a id="contact" href="contact.php">Contact</a></li>
            <li><a id="testi" href="testimoni.php">Testimoni</a></li>
        </div>
        <div width="70px" class="logout" style="  display:flex;  align-items:center ; justify-content:center;  ">
            <form method="post" action="">
                <button type='submit' name='logout'>Logout</button>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="formcon">
            <h1>Profile</h1>
            <div class="datadiri">
                <div class="dturgent">
                    <?php
                        if( $db['Jenis_Kelamin'] == 'L'){
                            echo "<img class='gambarprofile' src='component/Frame 3.png'>";
                        }
                        else{
                            echo "<img class='gambarprofile' src='component/Frame 4.png'>";
                        }
                    ?>
                    <h4><?php echo $db['Nama']?></h4>
                    <h5><?php
                        if($db['Email'] != ""){    
                        echo "Email :"." ".$db['Email'];
                    }else{
                        echo 'Email : Belum diisi';
                    }
                    ?></h5>
                    <h5><?php 
                        if($db['No_Hp'] != ""){    
                        echo "Hp :"." ".$db['No_Hp'];
                    }else{
                        echo 'Hp : Belum diisi';
                    }
                    ?></h5>
                </div>
                <h4><?php

                if($db['Tempat_Lahir'] != ""){    
                    $tgl =$db['Tanggal_Lahir'];
                    $date=date_create($tgl);
                    $lhr = date_format($date,"d F Y"); 
                    echo "TTL : ".$db['Tempat_Lahir'].", ".$lhr;
                }else{
                    echo 'TTL Belum diisi';
                }
                ?></h4>
                <h4><?php
                    if( $db['Jenis_Kelamin'] != ""){    
                        if( $db['Jenis_Kelamin'] == 'L'){
                            echo "Gender : Lelaki";
                        }
                        else{
                            echo"Gender : Perempuan";
                        }
                    }else{
                        echo 'Gender : Belum diisi';
                    }

                    ?></h4>
                <h4><?php
                    if($db['Alamat'] != ""){    
                    echo "Alamat : ".$db['Alamat'];
                }else{
                    echo 'Alamat : Belum diisi';
                }
                 ?></h4>
                <h4><?php
                    if($db['Pekerjaan'] != ""){    
                    echo "Pekerjaan : ".$db['Pekerjaan'];
                }else{
                    echo 'Pekejaan : Belum diisi';
                }
                 ?></h4>
                <form class="middlebutton" method="post" action="">
                    <button name="edit" type="submit">Edit</button>
                    <button name="hapus" id="hapus" type="submit">Hapus Akun</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>