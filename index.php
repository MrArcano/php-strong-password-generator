<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Custom css -->
  <link rel="stylesheet" href="./css/style.css">

  <title>PHP Strong Password Generator</title>
</head>
<body>
  <div class="container">
    <div class="box-generator d-flex flex-column align-items-center justify-content-center ">
      <h1>Strong Password Generator</h1>
      <h2>Genera una password sicura</h2>
      <div class="error my-3">
        <p>Scegliere una password con un minimo di 8 caratteri e un massimo di 32 caratteri</p>
      </div>
      <div class="form-container">
        <form action="index.php" method="post">
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