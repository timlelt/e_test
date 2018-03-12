<?php
function redirect_to($url){
    echo('<script language="javascript">document.location="'.$url.'"</script>');
    exit();
}

?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>FACTURATION</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<script type="text/javascript">

//<![CDATA[

function valider(frm){
  var email=frm.elements['email'].value;
  if(email != "") {
    return true;
  }
  else {
    alert("Saisissez un email");
    return false;
  }
   var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
 
    if(reg.test(email))
      {
    return(true);
      }
    else
      {
        alert("Email erronée réessayez");
    return(false);
      }
}

//]]>
</script>
<body>

     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">FACTURATION</h4>
                
                            </div>

        </div>
            
            <div class="row">
                         
                <div class="col-md-12">
                     <div class="panel panel-info">
                        <div class="panel-heading">
                            INSCRIVEZ VOUS
                        </div>
                        <div class="panel-body">
                            <form action="#" method="post" name="formSaisie" onsubmit="return valider(this)">
                              <div id="error"></div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" id="email" class="form-control" type="text" />
                                        </div>
                                 
                                
                                 <div class="form-group">
                                            <label>Mot de passe</label>
                                            <input class="form-control" type="password"  />
                                        </div>
                                         <div class="form-group">
                                            <label>Retapez mot de passe</label>
                                            <input class="form-control" type="password"  />
                                        </div>
                                 <button id="connect" name="connect" type="submit" class="btn btn-success">INSCRIRE </button>
                                        
                                        

                                    </form>
                            </div>
                        </div>
                </div>

            </div>

    </div>
    </div>
     <?php
     if(isset($_POST['connect'])){
      redirect_to('home.php');
     }
     ?>

   <?php include('pied.php'); ?>

    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
  
</body>
</html>
