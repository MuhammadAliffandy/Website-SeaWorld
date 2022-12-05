<?php
    session_start();
    require('crud.php');

    $dbakun = new database();
    $dbakun->sambungkan();
    $profil = $_SESSION['username'];
    $db = $dbakun->query("SELECT * FROM akun WHERE Nama = '$profil'");

    if(isset($_POST['save'])){
        $nama = $_POST['nama'];
        $tempat = $_POST['lahir'];
        $tanggal = $_POST['tanggal'];
        $kelamin = $_POST['kelamin'];
        $alamat = $_POST['alamat'];
        $pekerjaan = $_POST['pekerjaan'];
        $hp = $_POST['hp'];
        $email = $_POST['email'];
        $password = $_POST['password1'];
        $pass = $_POST['password'];

        $dbakun->updateakun('Nama',$nama,$profil);
        $gantinama = $_SESSION['username'] = $nama;
        $dbakun->updateakun('Tempat_Lahir',$tempat,$gantinama);
        $dbakun->updateakun('Tanggal_Lahir',$tanggal,$gantinama);
        $dbakun->updateakun('Jenis_Kelamin',$kelamin,$gantinama);
        $dbakun->updateakun('Alamat',$alamat,$gantinama);
        $dbakun->updateakun('Pekerjaan',$pekerjaan,$gantinama);
        $dbakun->updateakun('No_Hp',$hp,$gantinama);
        $dbakun->updateakun('Email',$email,$gantinama);
        $dbakun->updateakun('Password',$pass,$gantinama);

        if(TRUE){
            header("location: profile.php");
        }

        else{ 
            header("location: edit.php");
        }
    }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edit Akun</title>
    <meta name="viewport" content="initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        function validateForm() {
            let x = document.forms["formregis"]["nama"].value;
            let y = document.forms["formregis"]["password"].value;
            if (x == "" && y == "") {
                alert("Silahkan isi dengan lengkap terlebih dahulu !!! ");
                return false;
            }
        }
    </script>
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
            margin-left: 10px;

        }

        #header li a:hover {
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

        .container {
            max-width: 100%;
            height: 580px;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .card {
            margin: 0 auto;
            width: min-content;
            height: 580;
            padding: 35px;
            text-align: center;

            border: 1px solid rgba(255, 255, 255, .25);
            border-radius: 20px;
            background-color: rgba(255, 255, 255, 0.10);
            box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(15px);

        }

        label p {
            text-align: left;
            color: white;
        }

        h1 {
            color: white;
            font-size: 45px;
            margin: auto;
            text-align: center;
            line-height: 40px;
        }

        h2 {
            font-family: Poppins;
            font-size: 19px;
            color: white;
            text-align: center;
        }



        .regis input {
            background: #0F1B33;
            width: 400px;
            padding: 8px;
            border-radius: 10px;
            color: white;
        }

        select {
            background: #0F1B33;
            width: 420px;
            padding: 8px;
            border-radius: 10px;
            color: white;

        }

        .editpage {
            display: flex;
            justify-content: center;
            margin: 0 auto;
        }

        .editpage div {
            width: min-content;
            margin: 6px;
        }

        .regis input:focus {
            color: white;
        }

        .regis input {
            color-scheme: dark;
        }

        input::placeholder {
            color: rgb(189, 185, 185);
            background-color: none;
        }

        .konfir {
            margin-top: 48px;
        }


        input[type="date"] {
            color: rgb(189, 185, 185);
        }

        .middlebutton {
            display: flex;
            justify-content: right;
        }

        button {
            color: white;
            margin-top: 30px;
            padding: 10px 35px;
            border-radius: 14px;
            background-color: #13A5D3;
            border: none;
            box-shadow: 0 0 10px 0px rgba(0, 0, 0, 0.15);

        }
    </style>
</head>

<body>
    <div class="header1">
        <div>
            <h4>SeaWorld</h4>
        </div>
        <div id="header">
            <li><a href="procedure.php">Prosedur</a></li>
            <li><a href="bahan.php">Bahan</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="testimoni.php">Testimoni</a></li>
        </div>
        <div width="70px" class="sessionakun" style="  display:flex;  align-items:center ; justify-content:center;  ">
            <?php 
            echo "<li type='none' class='sessionlogin' style='text-align:center; color: white ; font-size: 14px; padding: 6px 8px; border: 1px solid white; border-radius: 15px;'>";
            echo $_SESSION['username'];
            echo "</li>";
            echo " <li type='none'><a href='profile.php'><i id='iconuser' class='fa-solid fa-user fa-1x'></a></i></li>"; 
            ?>       
        </div>
    </div>
    <div class="container">
        <div class="card">
            <h2>Silahkan Ubah profile anda untuk pengalaman lebih baik</h2>
            <form class="regis" method="post" action="" name="formregis" onsubmit="return validateForm()">
                <div class="editpage">
                    <div>
                        <label>
                            <p><?php   
                                    echo $db['Nama'];
                            ?></p>
                            <input type="text" placeholder="Username" name="nama" id="username">
                        </label>
                        <label>
                            <p><?php 
                                if($db['Tempat_Lahir'] != ""){    
                                    echo $db['Tempat_Lahir'];
                                }else{
                                    echo 'Belum diisi';
                                }
                                ?></p>
                            <input type="text" placeholder="Tempat Lahir" name="lahir" id="lahir">
                        </label>
                        <label>
                            <p><?php
                                    if($db['Tanggal_Lahir'] != ""){    
                                        $tgl =$db['Tanggal_Lahir'];
                                        $date=date_create($tgl);
                                        $lhr = date_format($date,"d F Y"); 
                                        echo $lhr;
                                    }else{
                                        echo 'Belum diisi';
                                    }
                                ?></p>
                            <input type="date" name="tanggal" id="tanggal">
                        </label>
                        <label>
                            <p><?php 
                                if( $db['Jenis_Kelamin'] != ""){    
                                    echo $db['Jenis_Kelamin'];
                                }else{
                                    echo 'Belum diisi';
                                }
                            ?></p>
                            <select type="text" placeholder="P/L" name="kelamin" id="kelamin">
                                <option value="L">L</option>
                                <option value="P">P</option>
                            </select>
                        </label>
                        <label>
                            <p><?php
                                if($db['Alamat'] != ""){    
                                    echo $db['Alamat'];
                                }else{
                                    echo 'Belum diisi';
                                }
                             ?></p>
                            <input type="text" placeholder="Alamat" name="alamat" id="alamat">
                        </label>
                    </div>
                    <div>
                        <label>
                            <p> <?php 
                            if($db['Pekerjaan'] != ""){    
                                echo $db['Pekerjaan'];
                            }else{
                                echo 'Belum diisi';
                            }
                            ?></p>
                            <input type="text" placeholder="Pekerjaan" name="pekerjaan" id="pekerjaan">
                        </label>
                        <label>
                            <p> <?php
                             if($db['No_Hp'] != ""){    
                                 echo $db['No_Hp'];
                            }else{
                                echo 'Belum diisi';
                            }
                            ?></p>
                            <input type="tel" placeholder="No. Handphone" name="hp" id="hp">
                        </label>
                        <label>
                            <p> <?php 
                            if($db['Email'] != ""){    
                                echo $db['Email'];
                            }else{
                                echo 'Belum diisi';
                            }
                            ?></p>
                            <input type="email" placeholder="Email" name="email" id="email">
                        </label>
                        <label>
                            <p> <?php 
                            if($db['Password'] != ""){    
                                echo $db['Password'];
                            }else{
                                echo 'Belum diisi';
                            }
                            ?></p>
                            <input type="password" name="password1" placeholder="Password" id="password1">
                        </label>
                        <label>
                            <input class="konfir" type="password" name="password" placeholder="Konfirmasi Password"
                                id="password">
                        </label>
                    </div>
                </div>
                <div class="middlebutton">
                    <button type="submit" name="save">Save</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>