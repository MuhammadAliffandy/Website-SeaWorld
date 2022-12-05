<?php
    session_start();

    require('crud.php');

    $dbakun = new database();
    $dbakun->sambungkan();
    $profil = $_SESSION['username'];
    $db = $dbakun->query("SELECT * FROM akun WHERE Nama = '$profil'");
    $id = $db['id'];

    
    if(isset($_POST['send'])){
        $pesan = $_POST['subject'];
        $kirim = $dbakun->insertpesan($id,$id,$id,$pesan);
        
    }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Contact</title>
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@500;600&display=swap');
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
            color: white;
            margin-left: 10px;

        }

        #contact{
            background-color: #13a5d3;
            border-radius: 10px;
            padding: 8px;
        }

        #header li a:hover {
            color: white;
            background-color: #13a5d3;
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
            width: max-content;
            display: flex;
            margin: 0 auto;

        }

        .formcon {
            border-radius: 20px 0px 0px 20px;
            width: 400px;
            height: 600px;
            background-color: #1e2b45;
            display: inline-block;
            text-align: center;


        }

        .detailcon {
            border-radius: 0px 20px 20px 0px;
            width: 400px;
            height: 600px;
            background-image: url('component/contbg.jpg');
            background-repeat: no-repeat;

        }

        h1 {
            color: white;
            font-size: 45px;
            margin-top: 40px;
            text-align: center;
            line-height: 40px;
        }

        h6 {
            font-family: Poppins;
            font-size: 10px;
            color: white;
            text-align: center;
        }



        .regis input {
            color: white;
            border: none;
            border-bottom: 1px solid rgb(203, 201, 201);
            background: none;
            width: 320px;
            margin: 10px;

        }

        .regis input:focus {
            color: white;
        }

        input::placeholder {
            color: rgb(189, 185, 185);
        }


        textarea::placeholder {
            color: rgb(189, 185, 185);
        }


        input[type="date"] {
            color: rgb(189, 185, 185);
        }

        .middlebutton {
            display: flex;
            justify-content: right;
            margin: 6px 35px;
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

        textarea {
            background-color: transparent;
            resize: none;
            color: white;
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
        <div class="formcon">
            <h1>Contact Us</h1>
            <h6>Hubungi kami <br>untuk keperluan yang lebih baik</h6>
            <form class="regis" method="post" action="">
                <input type="text" placeholder="Username" name="nama" id="username">
                <input type="email" placeholder="Email" name="email" id="email">
                <input type="text" placeholder="Alamat" name="alamat" id="alamat">
                <textarea id="subject" name="subject" placeholder="Kritik dan saran or something.."
                    style="width:320px; height:200px"></textarea>
                <div class="middlebutton">
                    <button type="submit" name="send">Send</button>
                </div>
            </form>
        </div>
        <div class="detailcon">

        </div>
    </div>
</body>

</html>