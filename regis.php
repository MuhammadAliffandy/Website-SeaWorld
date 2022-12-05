<?php
    require('crud.php');
    $dbakun = new database();
    $dbakun->sambungkan();

    if(isset($_POST['submit'])){
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

        if ($password == $pass){
            $db = $dbakun->insertakun($nama,$tempat,$tanggal,$kelamin,$alamat,$pekerjaan,$hp,$email,$pass);
            if($db){
                header("location: login.php");
            }

            else{ 
                echo"gagal";
            }
        }
        else{
            echo"salaah";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Registrasi</title>
    <meta name="viewport" content="initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" href="css/regis.css" /> -->
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
        body {
            max-width: 100%;
            max-height: 100%;
            margin: auto;
            background-image: url('component/homepage.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;

        }

        .container {
            max-width: 100%;
            height: 780px;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .card {
            margin: 0 auto;
            width: 350px;
            height: max-contet;
            padding: 35px;
            text-align: center;

            border: 1px solid rgba(255, 255, 255, .25);
            border-radius: 20px;
            background-color: rgba(255, 255, 255, 0.10);
            box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(15px);

        }



        h1 {
            color: white;
            font-size: 45px;
            margin: auto;
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
            border: none;
            border-bottom: 1px solid rgb(203, 201, 201);
            background: none;
            width: 320px;
            margin: 10px;

        }


        select {
            border: none;
            color: rgb(189, 185, 185);
            border-bottom: 1px solid rgb(203, 201, 201);
            background: none;
            width: 320px;
            margin: 10px;

        }

        .regis input {
            color-scheme: dark;
        }


        input::placeholder {
            color: rgb(189, 185, 185);
            background-color:none;
        }

        input[type="date"] {
            color: rgb(189, 185, 185);
            background-color:none;
        }

        .middlebutton {
            display: flex;
            justify-content: center;
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
    <div class="container">
        <div class="card">
            <h1>Welcome</h1>
            <h6>Daftarkan diri anda<br>untuk pengalaman lebih baik</h6>
            <form class="regis" method="post" action="" name="formregis" onsubmit="return validateForm()">
                <input type="text" placeholder="Username" name="nama" id="username">
                <input type="text" placeholder="Tempat Lahir" name="lahir" id="lahir">
                <input type="date" name="tanggal" id="tanggal">
                <select type="text" placeholder="P/L" name="kelamin" id="kelamin">
                    <option value="L">L</option>
                    <option value="P">P</option>
                </select>
                <input type="text" placeholder="Alamat" name="alamat" id="alamat">
                <input type="text" placeholder="Pekerjaan" name="pekerjaan" id="pekerjaan">
                <input type="tel" placeholder="No. Handphone" name="hp" id="hp">
                <input type="email" placeholder="Email" name="email" id="email">
                <input type="password" name="password1" placeholder="Password" id="password1">
                <input type="password" name="password" placeholder="Konfirmasi Password" id="password">
                <div class="middlebutton">
                    <button type="submit" name="submit">Sign up</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>