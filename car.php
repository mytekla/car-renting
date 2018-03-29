<?php
    require 'connections.php';
?>
<?php
    if(isset($_POST['info'])){

        $result = $con->query ("SELECT * FROM details");

        $row = $result->fetch_array(MYSQLI_BOTH);

        session_start();
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        $_SESSION["info"] = $row['info'];
        $_SESSION["price"] = $row['price'];

        header('location:result.php');
    }
     elseif(isset($_POST['info1'])){

        $result = $con->query ("SELECT * FROM details1");

        $row = $result->fetch_array(MYSQLI_BOTH);

        session_start();
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        $_SESSION["info"] = $row['info'];
        $_SESSION["price"] = $row['price'];

        header('location:result.php');
    }
    elseif(isset($_POST['info2'])){

        $result = $con->query ("SELECT * FROM details2");

        $row = $result->fetch_array(MYSQLI_BOTH);

        session_start();
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        $_SESSION["info"] = $row['info'];
        $_SESSION["price"] = $row['price'];

        header('location:result.php');
    }
    elseif(isset($_POST['info3'])){

        $result = $con->query ("SELECT * FROM details3");

        $row = $result->fetch_array(MYSQLI_BOTH);

        session_start();
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        $_SESSION["info"] = $row['info'];
        $_SESSION["price"] = $row['price'];

        header('location:result.php');
    }
    elseif(isset($_POST['info4'])){

        $result = $con->query ("SELECT * FROM details4");

        $row = $result->fetch_array(MYSQLI_BOTH);

        session_start();
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        $_SESSION["info"] = $row['info'];
        $_SESSION["price"] = $row['price'];

        header('location:result.php');
    }
    if(isset($_POST['info5'])){

        $result = $con->query ("SELECT * FROM details5");

        $row = $result->fetch_array(MYSQLI_BOTH);

        session_start();
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        $_SESSION["info"] = $row['info'];
        $_SESSION["price"] = $row['price'];

        header('location:result.php');
    }
?>



<html>
<head>
    <title>Car Renting</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="3.2.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="best logo.png">


</head>

<body id="main">
    <header>
        <ul>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="registration.php">login</a></li>

        </ul>
    </header>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="rendered-1-1000x350.jpg" style="width:100%">
  <div class="text">cool of the ferrari</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="rendered4-1000x350.jpg" style="width:100%">
  <div class="text">Our cool parking</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="Roman.S-Photographer-Shutterstock.com-3-1000x350.jpg" style="width:100%">
  <div class="text">Back end view of ferrari</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<hr><hr>

<form method="post" action="">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="4runner.jpg" width="300px" height="300px" class="col_image">
                    <br>
                    <br><input type="submit" value="info" id="info" name="info">
                </div>

                <div class="col-md-4">
                    <img src="xjportfolio.png" width="300px" height="300px" class="col_image">
                <br>
                <br><input type="submit" value="info" id="info1" name="info1">
                </div>

                <div class="col-md-4">
                    <img src="2018-infiniti-qx60-exterior-design-original.jpg" width="300px" height="300px" class="col_image">
                <br>
                <br><input type="submit" value="info" id="info2" name="info2">
                </div>

            </div>
    <br>
            <div class="row">
                <div class="col-md-4" >
                    <img src="highlander.jpg" width="300px" height="300px" class="col_image">
                    <br>
                    <br><input type="submit" value="info" id="info3" name="info3">
                </div>

                <div class="col-md-4">
                    <img src="stringer.jpg" width="300px" height="300px" class="col_image">
                <br>
                <br><input type="submit" value="info" id="info4" name="info4">
                </div>

                <div class="col-md-4">
                    <img src="xjluxury.png" width="300px" height="300px" class="col_image">
                <br>
                <br><input type="submit" value="info" id="info5" name="info5">
                </div>

            </div>

        
        </div>

<form/>

<hr><hr>

<footer>
    <ol>
        <li class="left">Copyright @mytekla 2018</li>
        <li><a href="#">Contacts</a></li>
        <li><a href="#">About Us</a></li>
    </ol>
</footer>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 1500); // Change image every 1.5 seconds
}
</script>
</body>
</html>