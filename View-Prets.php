<!DOCTYPE html>
<html>
<head>
<title>Blossoms</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="Stylesworld.css" />
      <?php


    require_once("Config.php");
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBNAME);

    if (mysqli_connect_error()) {
        die(mysqli_connect_error());
    }

    $sql = "SELECT * FROM prets";

    $result = mysqli_query($connection, $sql);

    ?>
      
</head>
<body>
    <header>
          <div id="logo">
                  <img src="Images/logo.png" alt="website logo">
          </div>
          <nav class="navbar navbar-expand-lg navbar-default">
              <!-- Brand/logo -->
              
              
              <!-- Links -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="Header-Footer.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="View-Prets.php">Prets</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="View-SummerCollection.php">Summer Collection</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.us.html">About Us</a>
                  </li>
              </ul>
            </nav>
           </header>
           <p class="mainheading">PRETS</p>
<div class="container col-md-5">
    
        <table class="table">
       <?php
            while ($row = mysqli_fetch_assoc($result)) {
       ?>
       <tr>
                <td>
                  <img src="<?php echo $row["Item-Image"]; ?>" height="300" width="250">
                 <td>
                    
                    <td>
                    <a href="ProductDetail.php?id=<?= $row['Item-Name'] ?>">
                            <?php
                            echo $row['Item-Name'];
                            ?>
                    </a>
                    </td>
                   </tr>

      
    <?php
    }
    ?>
     </table>
</div>
<footer class="page-footer font-xs blue pt-4">

            <!-- Footer Links -->
            <div class="container-fluid text-center text-md-left">
        
              <!-- Grid row -->
              <div class="row">
        
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">
        
                  <!-- Content -->
                  <h5 class="text-uppercase">@Copyright Sana's Blossoms</h5>
                  <p>Get good quality stuff and design</p>
        
                </div>
                <!-- Grid column -->
          </footer>
  
</body>
</html>