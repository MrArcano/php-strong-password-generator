<?php

require_once(__DIR__."/partials/functions.php");

$msg = "Scegliere una password con un minimo di 8 caratteri e un massimo di 32 caratteri";

if(isset($_GET["numPassword"])){
  $numPassword = $_GET["numPassword"];
  if(checkNumChar($numPassword)){
    // controllo superato
    session_start();
    $_SESSION["numPassword"] = $numPassword;
    header('Location: ./genPass.php');
  }else{
    $msg = "Errore! La lunghezza della password deve avere un minimo di 8 caratteri e un massimo di 32 caratteri";
  }
}

require_once(__DIR__."/partials/head.php");

?>


<body>
  <div class="container">
    <div class="box-generator d-flex flex-column align-items-center justify-content-center ">
      <h1>Strong Password Generator</h1>
      <h2>Genera una password sicura</h2>
      <div class="error my-3">
        <p><?php echo $msg ?></p>
      </div>
      <div class="form-container">
        <form action="index.php" method="get">
          <div class="row mb-3">
            <div class="col-auto d-flex align-items-center ">
              <label class="form-label m-0" for="num-pass">Lunghezza password:</label>
            </div>
            <div class="col-auto">
              <input class="form-control" type="number" name="numPassword" id="num-pass">
            </div>
          </div>

          <div>
            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset" class="btn btn-secondary">Annulla</button>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</body>
</html>