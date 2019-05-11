<?php

include '..\..\core\core.php';

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['update'])){

  // ambil data dari formulir
  $id = $_POST['id'];
  $head = $_POST['hd'];
  $informasi = $_POST['in'];
  $game = $_POST['gm'];
  $guild = $_POST['gl'];
  $date = $_POST['dt'];
  $jm_member = $_POST['jm'];

  // buat query update
  $sql = "UPDATE info SET head='$head', informasi='$informasi', game='$game', guild='$guild', date='$date', jm_member='$jm_member' WHERE id=$id";
  $query = mysqli_query($connect, $sql)or die(mysqli_error($connect));

  // apakah query update berhasil?
  if( $query ) {
    header('Location: ../../index.php');
  } else {
    die("Gagal menyimpan perubahan...");
  }

} else {
  die("Akses dilarang...");
}

?>
