<?php

    class database{

        private $DB_HOST = 'localhost';
        private $DB_USER = 'root';
        private $DB_PASS = '';
        private $DB_NAME = 'seaworld';
        var $koneksi = "";

        public function sambungkan(){
            $this->koneksi = new mysqli( $this-> DB_HOST , $this->DB_USER, $this->DB_PASS, $this->DB_NAME);
            if ($this->koneksi->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
        } 

        public function query($sql){
            $result = mysqli_query($this->koneksi,$sql);
            $row = mysqli_fetch_assoc($result);
            return $row;

        }

        public function showbarang($barang){
            $result = mysqli_query($this->koneksi,"SELECT * FROM barang WHERE nama_barang = '$barang'");
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
        

        public function updatepass($pass,$email){
            $result = mysqli_query($this->koneksi,"UPDATE akun SET Password = '$pass' WHERE Email = '$email'");
            return $result;
        }

        public function updateakun($tujuan,$dirubah,$nama){
            $result = mysqli_query($this->koneksi,"UPDATE akun SET $tujuan = '$dirubah' WHERE Nama = '$nama'");
            return $result;
        }


        public function insertakun($nama,$tempat,$tanggal,$kelamin,$alamat,$pekerjaan,$hp,$email,$pass){
            $result = mysqli_query($this->koneksi,"INSERT INTO akun (Nama, Tempat_Lahir, Tanggal_Lahir, Jenis_Kelamin, Alamat, Pekerjaan, No_Hp, Email, Password) VALUE('$nama','$tempat','$tanggal','$kelamin','$alamat','$pekerjaan','$hp','$email','$pass')");
            return $result;
        }

        public function insertpesan($nama,$email,$alamat,$pesan){
            $result = mysqli_query($this->koneksi,"INSERT INTO message (nama_pengirim, email_pengirim, alamat_pengirim, pesan) VALUE('$nama','$email','$alamat','$pesan')");
            return $result;
        }

        public function deleteakun($nama){
            $result = mysqli_query($this->koneksi,"DELETE FROM akun WHERE Nama = '$nama'");
            return $result;
        }
        
        
        public function tampilkanbahan($judul, $isi, $gambar,$harga){{
                echo '<div class="isi">';
                echo '<img class="gambarbahan" src=';
                echo $gambar;
                echo '>';
                echo '<p class="hlbahan"><b>';
                echo $judul;
                echo '</b></p>';
                echo '<div class="isitext">';
                echo '<p id="harga">';
                echo "Rp".$harga;
                echo '</p>';
                echo '<p>';
                echo substr($isi,0,22)."...";
                echo '</p>';
                echo '</div>';
                echo '<div class="tombolbahan">';
                echo '<form>';
                echo '<button class="show">show</button>';
                echo '</form>';
                echo '<form>';
                echo '<button class="keranjang"><i class="fa-solid fa-cart-shopping"></i></button>';
                echo '</form>';
                echo '</div>';
                echo '</div>';

        }}
    }
    



?>