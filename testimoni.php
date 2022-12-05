<?php
      session_start();
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
  <title>Testimoni</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@500;600&display=swap');

    body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Barlow Semi Condensed', sans-serif;
      background-color: #0F1B33;
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

    #testi{
      background-color: #13a5d3;
      border-radius: 10px;
      padding: 8px;
    }

    li a #iconuser {
      color: white;
      margin-left: 10px;

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



    a:link,
    a:active,
    a:visited,
    a:hover {
      color: #3f51b5;
    }

    .outerdiv {
      width: 100%;
      min-height: 100vh;
      background: #0F1B33;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .innerdiv {
      transform: scale(0.9);
      margin: 1rem;
      display: grid;
      grid-gap: 1.5rem;
      grid-template-rows: repeat(2, 22rem);
      grid-template-columns: repeat(4, 17rem);
    }

    .eachdiv {
      padding: 1rem 2rem;
      border-radius: 0.8rem;
      box-shadow: 5px 5px 20px #6d6b6b6b;
      color: white;
    }

    .div1 {
      background: #733FC8;
      grid-column: 1/3;
      grid-row: 1/2;
      background-image: url(https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/bg-pattern-quotation.svg);
      background-repeat: no-repeat;
      background-position-x: 25rem;
    }

    .div2 {
      background: #49556B;
      grid-column: 3/4;
      grid-row: 1/2;
    }

    .div3 {
      background: white;
      grid-column: 4/5;
      grid-row: 1/3;
      color: black;
    }

    .div4 {
      background: white;
      grid-column: 1/2;
      grid-row: 2/3;
      color: black;
    }

    .div5 {
      background: #18202D;
      grid-column: 2/4;
      grid-row: 2/3;
    }

    .userdetails {
      display: flex;
    }

    .imgbox {
      margin-right: 1rem;
    }

    .imgbox img {
      border-radius: 50%;
      width: 2rem;
      border: 2px solid #cec5c5;
    }

    .detbox {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .detbox p {
      margin: 0;
    }

    .detbox .name {
      color: hsl(0, 0%, 81%);
      font-size: 0.9rem;
      margin-bottom: 0.1rem;
      font-weight: 600;
    }

    .detbox .name.dark {
      color: #49505A;
    }

    .detbox .designation {
      color: hsl(0, 0%, 81%);
      opacity: 50%;
      font-size: 0.8rem;
    }

    .detbox .designation.dark {
      color: #49505A;
    }

    .review h4 {
      font-size: 1.4rem;
      color: #F3DEFF;
      font-weight: 600;
      line-height: 1.5;
      margin-bottom: 0.8rem;
    }

    .review.dark h4 {
      color: #4B5258;
    }

    .review p {
      font-size: 0.95rem;
      color: #F3DEFF;
      font-weight: 500;
      opacity: 50%;
      line-height: 1.5;
    }

    .review.dark p {
      color: #0e0e0e;
    }

    .attribution {
      font-size: 1rem;
      line-height: 1.5;
      position: fixed;
      bottom: 1rem;
      right: 1rem;
      text-align: right;
    }

    .attribution a {
      text-decoration: none;
    }

    @media only screen and (max-width: 1000px) {
      .innerdiv {
        transform: scale(0.7);
      }
    }

    @media only screen and (max-width: 800px) {
      .innerdiv {
        transform: scale(0.6);
      }
    }

    @media only screen and (max-width: 600px) {
      .div1 {
        background-position-x: 10rem;
      }

      .innerdiv {
        display: flex;
        flex-direction: column;
        transform: scale(1);
        margin: 2rem;
        margin-bottom: 5rem;
      }

      .attribution {
        position: relative;
      }

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


  <div class="outerdiv">
    <div class="innerdiv">
      <!-- div1 -->
      <div class="div1 eachdiv">
        <div class="userdetails">
          <div class="imgbox">
            <img
              src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-daniel.jpg"
              alt="">
          </div>
          <div class="detbox">
            <p class="name">Daniel Clifford</p>
            <p class="designation">Verified Graduate</p>
          </div>
        </div>
        <div class="review">
          <h4>Website ini sangat mudah digunakan dan bermanfaat. Tampilan dari website ini menurut saya sangat menarik dan bagu </h4>
          <p>“ karena penempatan gambar serta tulisan-tulisan yang ada di website ini sudah pas dan sangat mudah dipahami dan digunakannya. Selain dari segi penampilan yang mudah digunakan, website ini juga sangat bermanfaat karena banyak memberikan penjelasan mengenai pengelolaan ikan.”</p>
        </div>
      </div>
      <!-- div2 -->
      <div class="div2 eachdiv">
        <div class="userdetails">
          <div class="imgbox">
            <img
              src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-jonathan.jpg"
              alt="">
          </div>
          <div class="detbox">
            <p class="name">Jonathan Walters</p>
            <p class="designation">Verified Graduate</p>
          </div>
        </div>
        <div class="review">
          <h4>Website ini sangat menarik</h4>
          <p>“ Ketika pertama kali membuka website ini saya merasa website ini sangat menarik, khususnya dari segi tampilan yang tidak memusingkan dan tulisan serta gambar-gambarnya yang pas. ”</p>
        </div>
      </div>
      <!-- div3 -->
      <div class="div3 eachdiv">
        <div class="userdetails">
          <div class="imgbox">
            <img
              src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-kira.jpg"
              alt="">
          </div>
          <div class="detbox">
            <p class="name dark">Kira Whittle</p>
            <p class="designation dark">Verified Graduate</p>
          </div>
        </div>
        <div class="review dark">
          <h4>Website ini sangat membantu. Saya baru memulai untuk melakukan pembudidayaan ikan</h4>
          <p>“ saya membuka website ini untuk melihat-lihat beberapa cara tentang pembudidayaan dan pengelolaan ikan, ternyata didalamnya tidak hanya memberikan edukasi tentang pembudidayaan ikan tetapi juga menyediakan beberapa perlengkapan untuk pengelolaan ikan. ”</p>
        </div>
      </div>
      <!-- div4 -->
      <div class="div4 eachdiv">
        <div class="userdetails">
          <div class="imgbox">
            <img
              src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-jeanette.jpg"
              alt="">
          </div>
          <div class="detbox">
            <p class="name dark">Jeanette Harmon</p>
            <p class="designation dark">Verified Graduate</p>
          </div>
        </div>
        <div class="review dark">
          <h4>Website ini sangat bagus dan informatif.</h4>
          <p>“ Website ini sangat bagus menurut saya karena tidak hanya menjual beberapa barang perlengkapan pengelolaan ikan tetapi juga memberikan banyak informasi serta penjelasan tentang pengelolaan ikan yang pastinya akan sangat membantu bagi yang akan melakukan pembudidayaan ikan.”</p>
        </div>
      </div>
      <!-- div5 -->
      <div class="div5 eachdiv">
        <div class="userdetails">
          <div class="imgbox">
            <img
              src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-patrick.jpg"
              alt="">
          </div>
          <div class="detbox">
            <p class="name">Patrick Abrams</p>
            <p class="designation">Verified Graduate</p>
          </div>
        </div>
        <div class="review">
          <h4>Website ini sangat bermanfaat.</h4>
          <p>“ Website ini akan sangat membantu bagi orang-orang yang akan melakukan pembudidayaan dan pengelolaan ikan, karena dalam website ini terdapat beberapa penjelasan mengenai pembudidayaan ikan serta menyediakan beberapa perlengkapan yang diperlukan, mulai dari bibit ikan sampai dengan pipa, serokan, dan banyak lagi lainnya yang dapat kita beli langsung di e-commerce website ini.. ”</p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>