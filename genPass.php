<?php 

require_once(__DIR__."/partials/functions.php");

session_start();

if(isset($_SESSION["numPassword"])){
  $password = genPassword($_SESSION["numPassword"]);
}

require_once(__DIR__."/partials/head.php");
?>

<body>
  <div class="container">
    <div class="box-generator d-flex flex-column align-items-center justify-content-center">
      <h2>La password generata è:</h2>
      <div class="error my-3">
        <p class="text-center fs-3 fw-bold"><?php echo $password ?></p>
      </div>
      <a href="index.php">Torna indietro</a>
    </div>
  </div>
  <h1><?php echo $password ?></h1>
</body>
</html>