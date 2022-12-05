<?php
     session_start();
     require('crud.php');
     error_reporting(0);

     $dbakun = new database();
     $dbakun->sambungkan();
 
     $password = $_POST['password'];
     $nama = $_POST['nama'];
     $dbnama = $dbakun->query("SELECT * FROM akun WHERE Nama = '$nama'");
     $db = $dbakun->query("SELECT * FROM akun WHERE Password = '$password'");
     if(isset($_POST['submit1'])){

        if($nama == $dbnama['Nama']){
            $_SESSION['username'] = $dbnama['Nama'];
            if ($password == $db['Password'] )
            {  
                header("location: procedure.php");
                die();
            }
            else{
                header("location: login.php");
                die();
            }
        }

        else{
            header("location: login.php");
                die();
        }
      }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"> 
        <title>Login</title>
        <meta name="viewport" content="initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script>
            function validateForm() {
                let x = document.forms["myForm"]["nama"].value;
                let y = document.forms["myForm"]["password"].value;
                if (x == "" && y == "") {
                    alert("Silahkan isi Nama dan Password terlebih dahulu !!! ");
                    return false;
                }
            }


        </script>
        <style>
                body{
                max-width: 100%;
                max-height: 100%;
                margin: auto;
                background-image: url('component/homepage.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;

                }
                .container{
                max-width: 100%;
                height: 780px;
                display: flex;
                justify-content: center;
                align-items: center;

                }
                .card{
                margin: 0 auto;
                width: 300px;
                height: 350px;
                padding: 35px;

                border: 1px solid rgba(255, 255, 255, .25);
                border-radius: 20px;
                background-color: rgba(255, 255, 255, 0.10);
                box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.25);
                backdrop-filter: blur(15px);

                }

                h1{
                color: white ;
                font-size: 45px;
                margin :  auto ;
                text-align: center;
                line-height: 40px;
                }

                h6{
                font-family: Poppins;
                font-size: 10px;
                color: white ;
                text-align: center;
                }


                .login{
                margin-top: 120px;

                }

                .login input{
                border: none; 
                border-bottom: 1px solid rgb(203, 201, 201);
                background: none;
                width: 280px;
                margin: 10px;
                color:white;

                }

                .login input::placeholder{
                color: rgb(189, 185, 185);
                background-color:none;
                }

                .middlebutton{
                display: flex;
                justify-content: center;
                }

                button{
                color: white;
                margin-top: 0px;
                padding: 10px 35px;
                border-radius: 14px;
                background-color:#13A5D3;
                border: none;
                box-shadow: 0 0 10px 0px rgba(0, 0, 0, 0.15);

                }


                p{
                font-size: 10px;
                color: white;
                text-align: right;
                }

                p a{
                color: white ;
                text-decoration-color: white;
                text-decoration-line: none;
                }

        </style>
    </head>
<body>
    <div class="container">
        <div class="card">
            <h1>Hi, Welcome</h1>
            <h6>Silahkan login terlebih dahulu untuk memulai<br>website ini dengan baik dan benar</h6>
            <form name="myForm" class="login" method="post" action=""  onsubmit="return validateForm()">
                    <input type="text" placeholder="Username" name="nama" id="username" >
                    <input type="password" name="password" placeholder="Password" id="password" >
                    <p><a href="forget.php" >Lupa kata sandi?</a></p>
                    <div class="middlebutton">
                        <button type="submit" name="submit1" >Sign in </button>
                    </div>
            </form>
        </div>
    </div>
</body>
</html>