<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    

    <style type="text/css">
      button{
        color:white;
        background:black;
        transition: 1.5s;
      }
      button:hover{
        background:white;
        color: black;
      }
      footer{
        background-color:#0d6efd;
        position: fixed;
        width: 100%;
        bottom: 0px;
    }
    #foot{
        margin-top:0%;
        margin-bottom:0%;
        text-align: center;
        color: white;
    }
    </style>
</head>

<body style="background:#630A10">
<?php
    include 'config.php';
    $sql = "SELECT * FROM bank";
    $result = mysqli_query($conn,$sql);
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-link" style="background-color: #630A10;">
  <a class="navbar-brand" href="">IC Bank</a>
  <ul class="navbar-nav ms-auto">
    <li class="nav-item"> <a class="nav-link" href="index.php">Home</a> </li>
    <li class="nav-item"> <a class="nav-link" href="customers.php">Transfer Money</a> </li>
  </ul>
</nav>

<div class="container">
        <h2 class="text-center pt-4" style="color:white">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr style="color:white">
                            <th scope="col" class="text-center py-2">id</th>
                            <th scope="col" class="text-center py-2">name</th>
                            <th scope="col" class="text-center py-2">email</th>
                            <th scope="col" class="text-center py-2">balance</th>
                            <th scope="col" class="text-center py-2">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr class="bg" style="color:white">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="userselected.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Show Details/Transfer</button></a></td>
                    </tr>
                <?php
                    }
                ?>

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

  </body>
</html>
