<?php
require 'connections.php';
?>

<?php
    session_start();
        if(isset($_SESSION["id"])){
        
        }
        else{
            header('location:car.php');
        }
?>

<html>
<head>
    <title>Car details</title>
        <link rel="stylesheet" href="style.css">
         <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body id="main_result">
      <header>
        <ul>
            <li><a href="car.php">Home</a></li>
            <li><a href="registration.php">login</a></li>
            <li class="active"><a href="#">Result</a></li>
        </ul>
    </header>


<h1>Car Details</h1>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
           
                <h3>Name</h3><br>
                <?php echo $_SESSION["name"]?>
            </div>

            <div class="col-md-6">
              <h3>Info</h3><br>
                <?php echo $_SESSION["info"]?>

            </div>
                 
            <div class="col-md-4">
                 <h3>Price</h3><br>
                <?php echo $_SESSION["price"]?>

            </div>



        <div>
    </div>

    <footer class="fresult">
    <ol>
        <li class="left">Copyright @mytekla 2018</li>
        <li><a href="#">Contacts</a></li>
        <li><a href="#">Contacts</a></li>
        <li><a href="#">Contacts</a></li>
    </ol>
</footer>

</body>
</html>