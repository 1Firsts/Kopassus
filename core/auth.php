<?php

session_start();
if (!isset($_SESSION["admin"])) {
  header("Location: ..\index.php");
}else{
    echo "Iya Maaf";
}
