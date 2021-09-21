<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>IC Bank</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-link" style="background-color: #630A10;">
      <a class="navbar-brand" href="">IC Bank</a>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"> <a class="nav-link" href="index.php">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="customers.php">Transfer Money</a> </li>
        <li class="nav-item"> <a class="nav-link" href="transaction.php">View Transaction</a> </li>
      </ul>
    </nav>
    <div class="float-container">
      <div class="left-side">
        <h1> WELCOME TO <br> IC BANK</h1>
      </div>
      <div class="right-side">
        <h2> ~~~~~~~~~~~~~~~~~~~~~~~~~ Available Options are ~~~~~~~~~~~~~~~~~~~~~~~~~ </h2>
        <div class="transfer">
          <a href="customers.php">
            <button type="button" name="button" class="btn"> ~ Transfer Money ~ </button>
          </a>
        </div>
        <br>
          <div class="transaction">
          <a href="transaction.php">
            <button type="button" name="button" class="btn"> ~ Transaction History ~ </button>
          </a>
        </div>
      </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
