<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BBC Solution - Database Projects</title>
    <link rel="stylesheet" href="packages/style.css">
    <?php include("elements/connection.php"); ?>
</head>
<body id="body">
  <div class="sidebar" id="sidebar">
      <div class="sidebar-content">
          <form action="elements/redirect.php" method="POST">
              <div class="sidebar-header-bottom">
                  <input type="text" name="database_name" placeholder="Enter Database Name">
                  <input type="text" name="database_user" placeholder="Enter User">
                  <input type="text" name="database_password" placeholder="Enter Password">
                  <input type="submit" name="create_database" value="create">
              </div>
          </form>
      </div>
  </div>


  <!-- container area start -->
  <div class="container">
      <?php
      $database_entry = mysqli_query($conn,"SELECT * FROM `database_bbcsolution`");
      while ($data=mysqli_fetch_array($database_entry)) {

      ?>
      <div class="elements">
      <ul>
          <li><a href="#"><?php echo $data['database_name']; ?></a></li>
          <li><a href="#"><?php echo $data['database_admin_name']; ?></a></li>
          <li><a href="#"><?php echo $data['database_admin_password']; ?></a></li>
      </ul>
      </div>
     <?php
      }
      ?>
  </div> 

  <script src="packages/animate.min.js"></script>
</body>
</html>