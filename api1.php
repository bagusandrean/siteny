<?php
include ('helper/db.php');

$sql = "SELECT * FROM suhu_now INNER JOIN ruangan WHERE id_project='PROIJYIK8RFNGWF1'";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);
$date = date('Y-m-d H:i:s');
$waktuAwal = strtotime($data['update_at']);
$waktuAkhir = strtotime($date);
//$waktuAkhir = strtotime('2021-10-07 08:59:59');
$diff = $waktuAkhir - $waktuAwal;
$jam = floor($diff / (60 * 60));
$menits = $diff - $jam * (60 * 60);
$menit = floor($menit / 60);

if ($diff > 15) {
  $status = "offline";
} else {
  $status = "online";
}

$datas['temperature'] = $data['temperature'];
$datas['humidity'] = $data['humidity'];
$datas['status'] = $status;
$datas['updated_at'] = $data['updated_at'];
array_push($arr, $datas);

print_r(json_encode($datas, true));


?>