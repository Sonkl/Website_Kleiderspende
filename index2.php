<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kleiderspende Jena</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>

<body>

  
 
   
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img class="logo" src="logo.png">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active, nav-link" aria-current="page" href="index.html">Startseite</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <h1 class="headline"> Vielen Dank für Ihre Spende!</h1>
      <h2 class="formular">Bestätigung</h2>

     
<form id ="form">
        <div class="container text-center, box">
          <div class="row">
            
            <div class="col">
              <div class="form-check, label">
                <label class="label" for="floatingTextArea2"> Art der Kleidung</label>
                <input class="form-control" type="textarea" value="<?php echo htmlspecialchars($_GET ['kleidung']); ?>" id="floatingTextArea2" readonly>
                
             </div>
            </div>
          </div>

          <div class="row">
          
            <div class="col">
              <label class="label" for="floatingTextArea2">Krisengebiet</label>
              <input class="form-control" type="text" value="<?php echo htmlspecialchars($_GET ['krisengebiet']); ?>" id="floatingTextArea2" readonly>
              
            </div>
          </div>
        
        <div class="row">
          <div class="col">
          <label class="label" for="floatingTextArea2">Datum</label>
          <input class="form-control" type="text" value="<?php echo "Musterstadt, den " . date("d.m.Y H:i:s"); ?>" id="floatingTextArea2" readonly>
            
          </div>
        </div>
        
    </form>
            
  
      
      
</body>
</html>