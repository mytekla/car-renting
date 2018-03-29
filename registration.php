<?php
    require 'connections.php';
?>
<?php
    if(isset($_POST['Lsubmit'])){
        session_start();
        $a = $_POST['name'];
        $b = $_POST['address'];
        $c = $_POST['tel'];
        $d = $_POST['location'];
        $e = $_POST['email'];
        $f = $_POST['duration'];
        $g = $_POST['payment'];
    
    $sql = $con->query("INSERT INTO sign_in (name, Address, tel, location, email, duration, payment) VALUES ('{$a}', '{$b}', '{$c}', '{$d}', '{$e}', '{$f}', '{$g}')");

    header ('location: car.php');

    }
?>
<html>
    <head>
        <title>Purchase</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="best logo.png">
    </head>
    <body id="login">
    <header>
        <ul>
            <li><a href="car.php">Home</a></li>
            <li class="active"><a href="#">login</a></li>
        </ul>
    </header>
    
   <!-- <legend><img class="profileimg" src="ppp.png"></legend> -->
<form method="post" action="">
  
          <div class="form-group">
               <label for="name" class="sr-only">Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name">
                    <br>
                <label for="address" class="sr-only">Address</label>
                <input type="text" id="address" name="address" class="form-control" placeholder="your address">
                    <br>
            <label for="tel" class="sr-only">Tel</label>
             <input type="tel" id="tel" name="tel" class="form-control" placeholder="phone number here">
                    <br>
                <label for="location" class="sr-only">Location</label>
                <input type="text" id="location" name="location" class="form-control" placeholder="your location">
                    <br>
                     <label for="email" class="sr-only">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="your email">
                    <br>
                    <label for="duration" class="sr-only">Duration</label>
                <input type="text" id="duration" name="duration" class="form-control" placeholder="duration(maximum of 1week)">
                    <br>
            <label for="payment" class="sr-only">Payment</label>
                <input type="text" id="payment" name="payment" class="form-control" placeholder="payment method(mobile money only)input your number">
                    <br>
                   <center><button type="submit" class="btn btn-default" name="Lsubmit" id="Lsubmit">submit</button></center> 
             </div>
</form>
        <footer id="login_footer">
            <ol>
                <li class="left">Copyright @mytekla 2018</li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#">About Us</a></li>
            </ol>
    </footer>
 
    </body>
</html>