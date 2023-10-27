<?php 

$arrayPasswordElement = [
  "abcdefghijklmnopqrstuvwxyz",
  "ABCDEFGHIKLMNOPQRSTUVXYZ",
  "0123456789",
  "~!@#$%^&*()_-+={|:;,.?/",
  ];

$password = "";

session_start();
if(isset($_SESSION["numPassword"])){

  for ($i=0; $i < $_SESSION["numPassword"]; $i++) {
    // scelgo da che stringa dell'array estrarre il carattere
    $typeSelect = rand(0,3);
    // scelgo l'elemento nella stringa
    $elementSelect = rand(0,strlen($arrayPasswordElement[$typeSelect]) - 1);
    $char = $arrayPasswordElement[$typeSelect][$elementSelect];
    $password .= $char;
  }

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