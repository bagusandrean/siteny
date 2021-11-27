<?php
$db = mysqli_connect("localhost", "bagusokm_iot", "B@gusok55", "bagusokm_iot");

// Check connection
if (mysqli_connect_errno()) {
  echo "Koneksi database gagal : " . mysqli_connect_error();
}
date_default_timezone_set('Asia/Jakarta');
error_reporting(0);
?>