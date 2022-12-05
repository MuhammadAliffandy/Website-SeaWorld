<?php
        session_start();
        require('crud.php');

        $dbakun = new database();
        $dbakun->sambungkan();

        
        



          $prosedur = 
          [
              [
                  'Judul' => 'Ikan Cupang',
                  'Tagline'=> 'Ikan Cupang dibagi menjadi 3 yaitu ikan cupang hias, ikan cupang aduan, dan ikan cupang liar. Di Indonesia sendiri yang paling populer adalah ikan cupang hias.',
                  'Syarat' =>  
                  [
                      '1' => '1. Siapkan Rumah untuk Ikan Cupang',
                      '2' => '2. Siapkan Peralatan Budidaya Ikan Cupang',
                      '3' => '3. Siapkan Indukan Ikan Cupang',
                      '4' => '4. Siapkan tempat Untuk Indukan Ikan Cupang Berkembang Biak',
                      '5' => '5. Satukan Ikan Cupang Betina dan Jantan dalam 1 Wadah',
                      '6' => '6. Pantau Perkembangbiakan Ikan Cupang',
                      '7' => '7. Pantau Sarang Ikan Cupang',
                      '8' => '8. Tunggu sampai Telur Ikan Cupang Menetas'
                  ]
              ],
              [
                  'Judul' => 'Ikan Gurame',
                  'Tagline'=> 'Ikan Gurame (Osphronemus gouramy) adalah sejenis ikan air tawar yang populer sebagai ikan konsumsi di Asia Tenggara dan Asia Selatan.',
                  'Syarat' =>  
                  [
                      '1' => '1. Persiapan Kolam',
                      '2' => '2. Pemilihan Bibit',
                      '3' => '3. Pemberian Pakan ',
                      '4' => '4. Pemeliharaan Ikan Gurame',
                      '5' => '5. Proses Pemanenan'
                  ]
              ],
              [
                  'Judul' => 'Ikan Lele',
                  'Tagline'=> 'Lele mudah dikenali karena tubuhnya yang licin, agak pipih memanjang, serta memiliki "kumis" yang panjang, yang mencuat dari sekitar bagian mulutnya. Ikan ini banyak dikonsumsi karena rasanya yang enak jika di masak dan biasanya di goreng atau dibakar[1].',
                  'Syarat' =>  
                  [
                      '1' => '1. Penyiapan Kolam Tempat Budidaya Ikan Lele',
                      '2' => '2. Pemilihan Benih Ikan Lele',
                      '3' => '3. Pakan Untuk Budidaya Ikan Lele',
                      '4' => '4. Pengelolaan Air',
                      '5' => '5. Pengendalian Hama dan Penyakit',
                      '6' => '6. Panen Budidaya Ikan Lele'
                  ]
              ],
              [
                  'Judul' => 'Ikan Mujair',
                  'Tagline'=> 'Ikan berukuran sedang, panjang total maksimum yang dapat dicapai ikan mujair adalah sekitar 40 cm. Bentuk badannya pipih dengan warna hitam, keabu-abuan, kecokelatan atau kuning.',
                  'Syarat' => 
                  [
                      '1' => '1. Pemilihan Induk',
                      '2' => '2. Pemijahan Benih',
                      '3' => '3. Pembuatan Kolam Terpal',
                      '4' => '4. Penebaran Bibit ke Kolam',
                      '5' => '5. Pemberian Pangan',
                      '6' => '6. Pembuatan Kolam Terpal',
                      '7' => '7. Panen'
                  ]
              ],
              [
                  'Judul' => 'Ikan Nila',
                  'Tagline'=> 'Nama ilmiahnya adalah Oreochromis niloticus, dan dalam bahasa Inggris dikenal sebagai Nile Tilapia.',
                  'Syarat' => 
                  [
                      '1' => '1. Persiapan Kolam',
                      '2' => '2. Penerban Benih Ikan Nila',
                      '3' => '3. Pemberian Makanan',
                      '4' => '4. Mengantisipasi Penyakit',
                      '5' => '5. Pemanenan Ikan Nila'
                  ]
              ],
              [
                  'Judul' => 'Ikan Gabus',
                  'Tagline'=> 'Ikan darat yang cukup besar, dapat tumbuh hingga mencapai panjang 1 m. Berkepala besar agak gepeng mirip kepala ular (sehingga dinamai snakehead), dengan sisik-sisik besar di atas kepala.',
                  'Syarat' => 
                  [
                      '1' => '1. Persiapan Media Pemijahan Ikan Gabus',
                      '2' => '2. Seleksi Induk Ikan Gabus',
                      '3' => '3. Proses Pemijahan',
                      '4' => '4. Proses Pendederan I',
                      '5' => '5. Pemberian Pakan Larva Ikan Gabus',
                      '6' => '6. Pemanenan Benih Ikan Gabus'
                  ]
              ],
              [
                  'Judul' => 'Ikan Bandeng',
                  'Tagline'=> 'Mereka hidup di Samudra Hindia dan Samudra Pasifik dan cenderung berkawanan di sekitar pesisir dan pulau-pulau dengan terumbu karang.',
                  'Syarat' => 
                  [
                      '1' => '1. Persiapan Kolam Budidaya',
                      '2' => '2. Pemilihan dan Penebaran Bibit Ikan Bandeng',
                      '3' => '3. Kualitas Air Kolam',
                      '4' => '4. Pakan untuk Ikan Bandeng',
                      '5' => '5. Panen Ikan Bandeng'
                  ]
              ],
              [
                  'Judul' => 'Ikan Patin',
                  'Tagline'=> 'Ikan Patin adalah sekelompok ikan berkumis ordo (Siluriformes) yang termasuk dalam keluarga Pangasiidae. Nama "patin" juga disematkan pada salah satu anggotanya, P. nasutus.',
                  'Syarat' => 
                  [
                      '1' => '1. Mempersiapkan kolam untuk budidaya',
                      '2' => '2. Memilih bibit ikan Patin',
                      '3' => '3. Memberi pupuk sebelum menebar benih ikan',
                      '4' => '4. Menyebarkan benih ikan Patin',
                      '5' => '5. Memberikan pakan berkualitas serta rutin',
                      '6' => '3. Merawat ikan Patin',
                      '7' => '7. Masa panen'
                  ]
              ],
              [
                  'Judul' => 'Ikan Bawal',
                  'Tagline'=> 'adalah sejenis ikan dari keluarga Bramidae. Ikan ini berasal dari Hawaii dan sejumlah daerah di Indonesia. Ikan ini hidup berkoloni dan termasuk jenis ikan predator. Ikan ini jauh berbeda dengan ikan Bawal Air Tawar atau Pacu (Colossoma macropomum) yang termasuk kedalam famili Serrasalmidae.',
                  'Syarat' => 
                  [
                      '1' => '1. Membuat Kolam Ikan Bawal',
                      '2' => '2. Memilih dan Menebarkan Bibit Ikan Bawal',
                      '3' => '3. Memberikan Pakan Ikan Bawal yang Benar',
                      '4' => '4. Merawat Kesehatan Ikan Bawal',
                      '5' => '5. Memanen Ikan Bawal'
                  ]
              ],
              [
                  'Judul' => 'Ikan Sidat',
                  'Tagline'=> 'Sidat (ordo Anguilliformes) adalah kelompok ikan yang memiliki tubuh ramping dan memanjang. Ikan ini masuk dalam Ordo Anguilliformes, yang terdiri atas 4 subordo, 19 famili, 110 genera, dan 400 spesies.',
                  'Syarat' => 
                  [
                      '1' => '1. Pemilihan jenis kolam',
                      '2' => '2. Perhatikan suhu kolam',
                      '3' => '3. Sesuaikan kadar pH air',
                      '4' => '4. Perhatikan kadar oksigen dalam air',
                      '5' => '5. Proses penyiapan bibit',
                      '6' => '6. Proses penyiapan pakan',
                      '7' => '7. Langkah penyebaran benih',
                      '8' => '8. Tahap pembesaran',
                      '9' => '9. Masa panen sidat'
                  ]
              ],
          ];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Procedure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        #prosedur{
            background-color: #13a5d3;
            border-radius: 10px;
            padding: 8px;
        }

        li #iconuser {
            color: white;

        }

        #header li a:hover {
            color: white;
            background-color: #13a5d3;
            border-radius: 10px;
            padding: 8px;
            z-index: 5;

        }


        h4 {
            color: white;
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

        i {
            margin: 0rem 0.8rem 0rem 0.8rem;
            color: white;
        }

        .container {
            display: flex;
        }

        .procedure {
            margin-top: 40px;
        }



        .container {
            display: flex;
            justify-content: center;
        }


        .iikan {
            height: 140px;
        }

        #iikan {
            width: 80px;
            margin: 18px 0px 0px 15px;
            height: 80px;
            border-radius: 50px;

        }

        .show {
            font-size: 10px;
            color: white;
            padding: 10px 15px;
            border-radius: 10px;
            background-color: #13a5d3;
            border: none;
            margin-bottom: 20px;
            margin-right: 20px;

        }

        #judulprosedur {
            color: white;
            margin-left: 20px;

        }

        #tagprosedur {
            margin-left: 20px;
            color: white;
            font-size: 14px;
        }

        .containerp {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            border: 3px solid rgba(49, 73, 120, 0.20);
            border-radius: 20px;
            background-color: #071021;
            box-shadow: 0px 126px 45px -91px rgba(0, 0, 0, 0.25);
        }


        .prosedur {
            width: 750px;
            height: 140px;
        }

        #content,
        #content2,
        #content3,
        #content4,
        #content5,
        #content6,
        #content7,
        #content8,
        #content9,
        #content0 {
            width: 800px;
            height: 220px;
            margin: 0 auto;
            display: none;

        }


        .isicontent {
            padding-top: 20px;
            color: white;
            background-color: #18243A;
            box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(15px);
            width: 800px;
            height: 170px;
            border-radius: 0px 0px 20px 20px;
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

    <div class="search">
        <form action="">
            <label>
                <input type="text" onkeyup="prosesMenu()" id="cariKat" placeholder="Search" size="55px">
            </label>
        </form>
        <div class="logo-search">
            <i class="fa-solid fa-magnifying-glass" style="position: relative;"></i>
        </div>

    </div>


    <span class="container">
        <div class="procedure">
            <ul class="daftarKategori" type="none">
                <li class="listsearch"><a target="">
                        <div class="containerp">
                            <div class="iikan">
                                <img id="iikan" src="component/fish1.jpg">
                            </div>
                            <div class="prosedur">
                                <h2 id='judulprosedur'><?php echo $prosedur[0]['Judul']?></h2>
                                <p id='tagprosedur'><?php echo $prosedur[0]['Tagline']?></p>
                            </div>
                            <button onclick="myFunction('content')" class="show">show</button>
                        </div>
                        <div id="content">
                            <div class="isicontent">
                                <ul type="none">
                                    <?php 
                                    foreach($prosedur[0]['Syarat'] as $sarat){
                                        echo "<li>";
                                        echo $sarat; 
                                        echo  "</li>";
                                    }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </a></li>

                <li class="listsearch"><a target="">
                        <div class="containerp">
                            <div class="iikan">
                                <img id="iikan" src="component/fish2.jpg">
                            </div>
                            <div class="prosedur">
                                <h2 id='judulprosedur'><?php echo $prosedur[1]['Judul']?></h2>
                                <p id='tagprosedur'><?php echo $prosedur[1]['Tagline']?></p>
                            </div>
                            <button onclick="myFunction('content2')" class="show">show</button>
                        </div>
                        <div id="content2">
                            <div class="isicontent">
                                <ul type="none">
                                    <?php 
                                    foreach($prosedur[1]['Syarat'] as $sarat){
                                        echo "<li>";
                                        echo $sarat; 
                                        echo  "</li>";
                                    }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </a></li>

                <li class="listsearch"><a target="">
                        <div class="containerp">
                            <div class="iikan">
                                <img id="iikan" src="component/fish1.jpg">
                            </div>
                            <div class="prosedur">
                                <h2 id='judulprosedur'><?php echo $prosedur[2]['Judul']?></h2>
                                <p id='tagprosedur'><?php echo $prosedur[2]['Tagline']?></p>
                            </div>
                            <button onclick="myFunction('content3')" class="show">show</button>
                        </div>
                        <div id="content3">
                            <div class="isicontent">
                                <ul type="none">
                                    <?php 
                                    foreach($prosedur[2]['Syarat'] as $sarat){
                                        echo "<li>";
                                        echo $sarat; 
                                        echo  "</li>";
                                    }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </a></li>

                <li class="listsearch"><a target="">
                        <div class="containerp">
                            <div class="iikan">
                                <img id="iikan" src="component/fish2.jpg">
                            </div>
                            <div class="prosedur">
                                <h2 id='judulprosedur'><?php echo $prosedur[3]['Judul']?></h2>
                                <p id='tagprosedur'><?php echo $prosedur[3]['Tagline']?></p>
                            </div>
                            <button onclick="myFunction('content4')" class="show">show</button>
                        </div>
                        <div id="content4">
                            <div class="isicontent">
                                <ul type="none">
                                    <?php 
                                    foreach($prosedur[3]['Syarat'] as $sarat){
                                        echo "<li>";
                                        echo $sarat; 
                                        echo  "</li>";
                                    }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </a></li>

                <li class="listsearch"><a target="">
                        <div class="containerp">
                            <div class="iikan">
                                <img id="iikan" src="component/fish1.jpg">
                            </div>
                            <div class="prosedur">
                                <h2 id='judulprosedur'><?php echo $prosedur[4]['Judul']?></h2>
                                <p id='tagprosedur'><?php echo $prosedur[4]['Tagline']?></p>
                            </div>
                            <button onclick="myFunction('content5')" class="show">show</button>
                        </div>
                        <div id="content5">
                            <div class="isicontent">
                                <ul type="none">
                                    <?php 
                                    foreach($prosedur[4]['Syarat'] as $sarat){
                                        echo "<li>";
                                        echo $sarat; 
                                        echo  "</li>";
                                    }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </a></li>

                <li class="listsearch"><a target="">
                        <div class="containerp">
                            <div class="iikan">
                                <img id="iikan" src="component/fish2.jpg">
                            </div>
                            <div class="prosedur">
                                <h2 id='judulprosedur'><?php echo $prosedur[5]['Judul']?></h2>
                                <p id='tagprosedur'><?php echo $prosedur[5]['Tagline']?></p>
                            </div>
                            <button onclick="myFunction('content6')" class="show">show</button>
                        </div>
                        <div id="content6">
                            <div class="isicontent">
                                <ul type="none">
                                    <?php 
                                    foreach($prosedur[5]['Syarat'] as $sarat){
                                        echo "<li>";
                                        echo $sarat; 
                                        echo  "</li>";
                                    }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </a></li>

                <li class="listsearch"><a target="">
                        <div class="containerp">
                            <div class="iikan">
                                <img id="iikan" src="component/fish1.jpg">
                            </div>
                            <div class="prosedur">
                                <h2 id='judulprosedur'><?php echo $prosedur[6]['Judul']?></h2>
                                <p id='tagprosedur'><?php echo $prosedur[6]['Tagline']?></p>
                            </div>
                            <button onclick="myFunction('content7')" class="show">show</button>
                        </div>
                        <div id="content7">
                            <div class="isicontent">
                                <ul type="none">
                                    <?php 
                                    foreach($prosedur[6]['Syarat'] as $sarat){
                                        echo "<li>";
                                        echo $sarat; 
                                        echo  "</li>";
                                    }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </a></li>

                <li class="listsearch"><a target="">
                        <div class="containerp">
                            <div class="iikan">
                                <img id="iikan" src="component/fish2.jpg">
                            </div>
                            <div class="prosedur">
                                <h2 id='judulprosedur'><?php echo $prosedur[7]['Judul']?></h2>
                                <p id='tagprosedur'><?php echo $prosedur[7]['Tagline']?></p>
                            </div>
                            <button onclick="myFunction('content8')" class="show">show</button>
                        </div>
                        <div id="content8">
                            <div class="isicontent">
                                <ul type="none">
                                    <?php 
                                    foreach($prosedur[7]['Syarat'] as $sarat){
                                        echo "<li>";
                                        echo $sarat; 
                                        echo  "</li>";
                                    }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </a></li>

                <li class="listsearch"><a target="">
                        <div class="containerp">
                            <div class="iikan">
                                <img id="iikan" src="component/fish1.jpg">
                            </div>
                            <div class="prosedur">
                                <h2 id='judulprosedur'><?php echo $prosedur[8]['Judul']?></h2>
                                <p id='tagprosedur'><?php echo $prosedur[8]['Tagline']?></p>
                            </div>
                            <button onclick="myFunction('content9')" class="show">show</button>
                        </div>
                        <div id="content9">
                            <div class="isicontent">
                                <ul type="none">
                                    <?php 
                                    foreach($prosedur[8]['Syarat'] as $sarat){
                                        echo "<li>";
                                        echo $sarat; 
                                        echo  "</li>";
                                    }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </a></li>

                <li class="listsearch"><a target="">
                        <div class="containerp">
                            <div class="iikan">
                                <img id="iikan" src="component/fish2.jpg">
                            </div>
                            <div class="prosedur">
                                <h2 id='judulprosedur'><?php echo $prosedur[9]['Judul']?></h2>
                                <p id='tagprosedur'><?php echo $prosedur[9]['Tagline']?></p>
                            </div>
                            <button onclick="myFunction('content0')" class="show">show</button>
                        </div>
                        <div id="content0">
                            <div class="isicontent">
                                <ul type="none">
                                    <?php 
                                    foreach($prosedur[9]['Syarat'] as $sarat){
                                        echo "<li>";
                                        echo $sarat; 
                                        echo  "</li>";
                                    }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </a></li>
            </ul>
        </div>
    </span>
    <script>
        function myFunction(ID) {
            var x = document.getElementById(ID);
            if (x.style.display !== "none") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>
</body>

</html>