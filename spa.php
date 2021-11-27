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
<body id='body'>
  <div class="container">
    <div class="content mt-5 text-center">
      <button class="btn btn-primary" id="suhu">Click Me!</button>
      <button class="btn btn-warning" id="test">Click Me!</button>
      <div id="hasil"></div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      const state = {
        user: 12
      };
      const title = 'My new page';
      const url = '/new-page';
      $('#suhu').click(function(e) {
        // alert('click')
        e.preventDefault();
        history.pushState(state, title, url);
      })
      $('#test').click(function(e) {
        // alert('click')
        e.preventDefault();
        history.pushState(state, title, '/suhu.php');
        $('#body').load('suhu.php')
      })
    })
  </script>
</body>
</html>