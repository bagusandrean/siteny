<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Suhu</title>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="card shadow-sm">
          <div class="card-header">
            <h5 class="card-title text-center">Suhu</h5>
          </div>
          <div class="card-body">
            <h1 class="h1 font-weight-bold text-center" id="suhu">----</h1>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="card shadow-sm">
          <div class="card-header">
            <h5 class="card-title text-center">Humidity</h5>
          </div>
          <div class="card-body">
            <h1 class="h1 font-weight-bold text-center" id="humidity">----</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="text mt-3">
      <p class="text">
        Last Update: <span class="text fw-bold" id="update"></span>
      </p>
    </div>
    <div class="text mt-3">
      <p class="text">
        Status: <span class="text fw-bold" id="status"></span>
      </p>
    </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      //   alert('hsj')
      setInterval(function () {
        suhu()}, 1000); // panggil setiap 10 detik
    })
    function suhu() {
      $.ajax({
        type: 'GET',
        url: 'api.php',
        success: function(data) {
          var res = JSON.parse(data)
          $("#suhu").text(res.suhu)
          $("#humidity").text(res.humidity)
          $("#status").text(res.status)
          $("#update").text(res.update_at)
        }, error: function(s) {}
      });

    }
  </script>
</body>
</html>