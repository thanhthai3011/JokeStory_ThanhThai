<?php
include_once('connect.php');
$result = mysqli_query($con, "SELECT content FROM `story` WHERE id=1");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <link rel="stylesheet" href="Assets/style.css" />
  <link rel="shortcut icon" href="favicon.ico" />
  <title>Joke story</title>
</head>



<body>
  <header>
    <div class="header-main">
      <div class="header-item header-left">
        <a href="#"><img src="IMG/Capture1-removebg.png" alt="" /></a>
      </div>
      <div class="header-item header-right">
        <a href="#"><img src="IMG/Capture2-removebg.png" alt="" /></a>
      </div>
    </div>
  </header>
  <div class="banner">
    <div class="banner-text">
      <div class="banner-content text-center">
        <h1>A joke a day keeps the doctor away</h1>
        <span>If you joke wrong way, your teath have to pay. (Serious)</span>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="main-content">
      <div id="responsecontainer" class="text-center">
        
        <?php
        while ($data = mysqli_fetch_array($result)) {
          echo "<p>" . $data['content'] . "</p>";
          
        }
        ?>
        
        <hr />
      </div>
      <form action="">
        <ul class="list-btn">
          <li class="list-item funny-btn">
            <input type="submit" id="display1" value="This is Funny!" />
          </li>
          <li class="list-item not-fun">
            <input type="submit" id="display" value="This is not Funny!" onclick="" />
          </li>
        </ul>
      </form>
    </div>
  </div>
  <footer>
    <div class="footer-content">
      <div class="desc-company">
        <div class="text-center">
          This website is created as part of HLSolutions on developer program.
          The materials contained on this website are provided for general
          information only and do not constitute any form of advice.
          HLSolutions assumes no responsibility for the accuracy of any
          particular statement and accepts no liability of any loss or damage
          which may arise form reliance on the information contained on this
          site.
        </div>
        <p>Copyright 2021 HLSolutions Pte. Ltd</p>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>