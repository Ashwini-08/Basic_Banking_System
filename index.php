<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <!--Including style sheet-->
    <link rel="stylesheet" href="index.css">
    <!-- Icon -->
    <link rel="icon" height="50px" href="./images/icon.png">
    <script src="index.js"></script>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
</style>
<body  style="background-color: white;" onload="loader()">

    <div class="hero-content">
    <div class="container-fluid myclass" style="padding:0px; margin:0px;">
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm  navbar-toggler navbar-light" style="background-color:transparent; background-color:#B8F2F5; opacity:1;"> 
            <img  style="border-radius: 25px;" height="90"src="./images/bank_icon.jpeg">
            &nbsp;
            <div class="navbar-brand font-weight-bold zoomIn animated" id="title" data-anijs="if: mouseover, do: slideInUp animated" style="color:black;font-family: 'Courgette', cursive;font-size:2em;">
                &nbsp;Banking System
            </div>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="float:right;">
                <ul class="navbar-nav ml-auto font-weight-bold"  style="font-size:small; color:pink; "> 
                    <li class="nav-item">
                        <a class="nav-link" href="viewcustomers.php" style="color:black;font-weight:1em; font-size: 18px;font-family: 'Courgette', cursive;">
                            <div style="padding-left:20px;" >
                            </div>
                            View Customers
                        </a> 
                    </li> 
                </ul> 
            </div>
        </nav> 
    
    <div>
        <div class="row" style="margin:0px; padding:0px;">
            <div class="col-sm font-weight-bold typing_effect" style="padding-left:15px;color:black;font-size:2.2em;text-align:center;justify-content: center;">
             <p class="zoomIn animated" style="margin:30% auto; letter-spacing: 3px; font-family: 'Playfair Display', serif;, cursive; font-size: 30px; text-shadow: 2px 2px pink;"> <span class="halfcolour"></span>Your Perfect Banking Partner</p>
            </div>
            <div class="col-sm">
                <img id="square" class="slideInRight animated " height="430"src="./images/a.svg" alt="" style="align-self: flex-end;">
            </div>
        </div>
       
    </div>
</div>

<script>
setTimeout(function(){$('#loading').hide();}, 500); 
  var preloader = document.getElementById("loading");
      function loader(){
        preloader.style.display = 'none';
      }
</script>
</html>