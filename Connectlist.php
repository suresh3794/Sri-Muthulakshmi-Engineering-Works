<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Sri Muthulakshmi Engineering Works</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body class="mx-auto mt-5" style="width: 1000px;" >

  <a class="bi bi-house" style="font-size:xx-large;" href="index.html">Go Home </a>

  <h1 class="text-center bg-primary text-white mb-4">Connection List</h1>

  <table class="table table-hover">
    <thead>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
    </thead>
    <tbody>


      <?php
      $link = mysqli_connect('sql12.freesqldatabase.com','sql12600926','Qu5e3JJSLq','sql12600926');
      if (!$link) {
        die('Connection Failed : ' . mysqli_connect_error());
      }

      $query = "SELECT * FROM contact";

      $result = mysqli_query($link, $query);
      $numrow = mysqli_num_rows($result);
      if ($numrow > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

          echo '<tr>';
          echo '<td>' . $row['id'] . '</th>';
          echo '<td>' . $row['yourName'] . '</th>';
          echo '<td>' . $row['yourEmail'] . '</th>';
          echo '<td>' . $row['phone'] . '</th>';
          echo '</tr>';
        }
        echo '</table>';
      } else {
        echo "No pending list to display";
      }

      ?>

  </table>


</html>