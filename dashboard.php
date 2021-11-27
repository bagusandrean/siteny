<?php
include('helper/db.php');
include('helper/session.php');
$username = $_SESSION['username'];
$sql = "SELECT * FROM user WHERE username='$username'";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>
<body>
  <?php include('navbar.php'); ?>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 col-xl-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-col justify-content-around">
              <div class="col-3">
                <img src="/assets/img/iot.jpg" alt="img" class="img-fluid" width="60px">
              </div>
              <div class="col-8">
                <div class="dflex flex-row"></div>
                <h6 class="text-secondary">Jumlah Project</h6>
                <h4 class="fs-1" i>5</h4>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-xl-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-col justify-content-around">
              <div class="col-3">
                <img src="/assets/img/iot.jpg" alt="img" class="img-fluid" width="60px">
              </div>
              <div class="col-8">
                <div class="dflex flex-row"></div>
                <h6 class="text-secondary">Project Aktif</h6>
                <h4 class="fs-1" i>5</h4>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!--Link-->
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title text-start">Link Project</h5>
          </div>
          <div class="card-body">
            <div class="form-group">
              <input type="text" name="link" id="link" class="form-control" value="https://siteny.tech/link/<?= $data['username']; ?>" readonly>
              <small>Note: Kunjungi link ini untuk memantau project anda.</small>
            </div>
          </div>
        </div>
      </div>
      <!--Link-->
    </div>
  </div>

  <?php include('footer.php'); ?>i

</body>
</html>