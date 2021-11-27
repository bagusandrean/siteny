<?php
include("../helper/db.php");
$idProject = $_GET['token'];
$sql = "SELECT * FROM suhu_now INNER JOIN ruangan ON suhu_now.token=ruangan.token WHERE id_project='$idProject'";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

$date = date('Y-m-d H:i:s');
$waktuAwal = strtotime($data['updated_at']);
$waktuAkhir = strtotime($date);
//$waktuAkhir = strtotime('2021-10-07 08:59:59');
$diff = $waktuAkhir - $waktuAwal;
$jam = floor($diff / (60 * 60));
$menits = $diff - $jam * (60 * 60);
$menit = floor($menits / 60);

if ($diff > 15) {
  $status = "offline";
} else {
  $status = "online";
}

$datas['nama'] = $data['nama'];
$datas['id_project'] = $data['id_project'];
$datas['temperature'] = $data['temperature'];
$datas['humidity'] = $data['humidity'];
$datas['status'] = $status;
$datas['updated_at'] = $data['updated_at'];



echo json_encode($datas, true)

?>