<?php

include '..\..\core\core.php';

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['update'])){

  // ambil data dari formulir
  $id = $_POST['id'];
  $flag = $_POST['icon-input'];
  $text_j = $_POST['tj'];

  // buat query update
  $sql = "UPDATE info SET flag='$flag', text_j='$text_j' WHERE id=$id";
  $query = mysqli_query($connect, $sql)or die(mysqli_error($connect));

  // apakah query update berhasil?
  if( $query ) {
    header('Location: ..\..\index.php');
  } else {
    die("Gagal menyimpan perubahan...");
  }

} else {
  die("Akses dilarang...");
}

?>
