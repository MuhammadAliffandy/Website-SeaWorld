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
    $dbbarang8 = $dbakun->showbarang('Hapa telur ');
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
    <script type="text/javascript" src="jquery.js"></script>
    <script>
        function prosesMenu() {
            var input = document.getElementById("cariKat");
            var filter = input.value.toLowerCase();
            var ul = document.getElementById("daftarKategori");
            var li = document.querySelectorAll("li.listsearch")
            console.log(li)
            for (var i = 0; i < li.length; i++) {
                var ahref = document.querySelectorAll("a[target]")[i];
                if (ahref.innerHTML.toLowerCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>
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
        #bahan{
            background-color: #13a5d3;
            border-radius: 10px;
            padding: 8px;
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

        #header li a:hover {
            color: white;
            background-color: #13a5d3;
            border-radius: 10px;
            padding: 8px;
            z-index: 5;

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
        
        .laman ul li a{
            margin:0px 10px;
            padding: 6px 5px ;
            border: 1px solid white;
            border-radius:8px;
            
        }

        .laman ul li a:hover {
            color: white;
            background-color: #13a5d3;
            border-radius: 10px;
            padding: 6px 5px ;

        }


    </style>

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


    <div class="search">
        <label>
            <input name="" type="text" onkeyup="prosesMenu()" id="cariKat" placeholder="search" size="55px">
        </label>
        <div class="logo-search">
            <i class="fa-solid fa-magnifying-glass" style="position: relative;"></i>
        </div>
    </div>

    <div class="laman">
            <ul type="none">
                <li><a class="klik_laman" id="satu">1</a></li>
                <li><a class="klik_laman" id="dua">2</a></li>
                <li><a class="klik_laman" id="tiga">3</a></li>
            </ul>
        </div>

    <div class="container">
        <div class="shop">

        </div>
    </div>


</body>
<script type="text/javascript">
	$(document).ready(function(){
		$('.klik_laman').click(function(){
			var menu = $(this).attr('id');
			if(menu == "satu"){
				$('.shop').load('bahan1.php');						
			}else if(menu == "dua"){
				$('.shop').load('bahan2.php');						
			}else if(menu == "tiga"){
				$('.shop').load('bahan3.php');						
			}
		});
 
		$('.shop').load('bahan1.php');						
 
	});
</script>
</html>