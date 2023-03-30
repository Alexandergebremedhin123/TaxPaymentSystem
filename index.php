<?php 
require_once("Includes/config.php");
require_once("Includes/session.php");

if(isset($_SESSION['logged']))
{
    if ($_SESSION['logged'] == true)
    {
        if ($_SESSION['account']=="admin") {
                header("Location:admin/index.php");
            }
        elseif ($_SESSION['account']=="user") {
                header("Location:user/index.php");
            }
    }  
    else  {
        header("Location:../index.php");
      }  
}

if(isset($_POST['login_submit'])) {
    if(!(isset($_POST['email']))) {
        if(!(isset($_POST['pass']))) {
            location('index.php');    
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  

    <title>TAX PAYMENT SYSTEM</title>

 
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    


   
    <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

   
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><b>TAX PAYMENT SYSTEM</b></a>
            </div>
            <div class="navbar-collapse collapse" >
                <?php include("login.php"); ?>
            </div>
           
        </div>
    </div>

    <div id="headerwrap">
        <div class="darkhearderwrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 signup">
                        <h1>TAX PAYMENT<br>SYSTEM</h1>
                        <p>This website  will act as a consumer oriented service for users for easy payment of their respective <b>Tax bills</b> as well as interact with their kebele providers in case of any queries or grivances.</p>
                    </div>
                   
                    <div class="col-lg-6">
                        <h1>Sign Up</h1>
                        <?php include("signup.php"); ?>
                    </div>
              

                </div>
               
            </div>
        
            </div>
    </div>

<script src="assets/js/jquery-1.11.0.js"></script>
  
    <script src="assets/js/bootstrap.min.js"></script>


    <script src="assets/js/custom.js"></script>
    <script>

    function validateForm() {
            var x = document.forms["myForm"]["email"].value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                alert("Not a valid e-mail address");
                return false;
            }
        }
          </script> 

    
</body>

</html>
