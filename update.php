<?php
include('db.php');


if (isset($_REQUEST['key'])) {
  $suhu = $_REQUEST['suhu'];
  $hum = $_REQUEST['humidity'];
  $date = date('Y-m-d H:i:s');

  $sql = "UPDATE sensorsuhu SET suhu='$suhu', humidity='$hum', update_at='$date' WHERE id='1'";
  $query = mysqli_query($db, $sql);

  if (!$query) {
    echo mysqli_error($db);
  } else {
    echo "sukses";
  }
} else {
  echo "not valid";
}