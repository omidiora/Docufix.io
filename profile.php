<?php

session_start();
$message = '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Plaster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <title>User Profile</title>
</head>

<body class="profile-body"> 
  <div class="container-fluid profile-box my-5 mx-90 mx-auto">  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.html"><img src="https://res.cloudinary.com/kuic/image/upload/v1572602189/docufix/Docufix_Logo_pzbbzi.png" alt="logo" class="logo-img img-fluid"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
          </li>
          <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tools
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-justify" href="fileUpload.html">Compare files</a>
                    <a class="dropdown-item text-justify" href="grammarChecker.html">Grammar Check</a>
                    <a class="dropdown-item text-justify" href="fileDuplicate.html">Check for Duplicates</a>
                  </div>
            </li>

          <li class="nav-item">
<?php

          if(isset($_GET['logout']))
              {
                  session_destroy();
                  unset($_SESSION['username']);
                  header('location:index.php');
              }
          ?>
            <a class="nav-link" href="profile.php?logout='1'" name="logout" >Logout</a>
          </ 
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">
                <div class="profile-circle">M.X</div>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="row">
        <section class="col-3 pr-3 userprofile-col">
            <div class = "profile-info-bloc p-0">
            <p class="small-spaced-text p-0">Profile Information</p>
            <h5>Subscription <span class="prof-btn mr-2 p-bloc-btn">Basic Plan</span></h5>
            <p class="m-0 font-nine">Duration: Forever</p>
            <p class="font-nine">Limit: 20mb/month upload</p>
            </div>

            <div class = "profile-info-bloc">
            <h5>Total Documents Analyzed</h5>
             <span class="btn prof-btn mr-2 mt-4">3</span>
            </div>

            <div class = "profile-info-bloc">
            <h5 class="mb-4">Recently Analyzed Documents</h5>

            <span class="btn prof-btn mb-4 mr-2 d-block">Document Title 1</span>
            <span class="btn prof-btn mb-4 mr-2 d-block">Document Title 2</span>
            <span class="btn prof-btn mb-4 mr-2 d-block">Document Title 3</span>
           </div>
            
        </section>
        <section class="col-9 pl-md-5 userprofile-col profile-details">
        <h4 class="userprofile-name shaded-black" style="color:black">
<?php    
if( isset($_SESSION['name'] ))       
echo  $_SESSION['name'] ;
else{
   
    $message .= '  <p class="userprofile-plan medium-purple-text"> </p> <span></span>';
            echo ($message);
}

?>
           </h4>
            <p class="userprofile-plan medium-purple-text">Basic User</p>
           
            <p class="userprofile-date small-spaced-text">Date Registered <span> 
                <br>
            <?php    
if( isset($_SESSION['time'] ))       
echo  $_SESSION['time'];
else{
   
    $message .= '  <p class="userprofile-plan medium-purple-text"> </p> <span></span>';
            echo ($message);
}

?>
 </span></p>
            <button class="userprofile-changeplan btn prof-btn p-bloc-btn mr-2"><i class="fa fa-pencil" aria-hidden="true"></i> Change Plan</button>
            <button class="userprofile-changeplan btn prof-btn p-bloc-btn"><i class="fa fa-lock" aria-hidden="true"></i>Change Password</button>

            <h6 class="shaded-black prof-about-title"><i class="fa fa-user" aria-hidden="true"></i> About</h6>
            <p class="small-spaced-text p-0">CONTACT INFORMATION</p>
            <div class="contact-info">
            <p class="d-flex justify-content-between medium-text">Full Name <span class="medium-purple-text">
            <?php    
            if( isset($_SESSION['name'] ))       
       
echo  $_SESSION['name'];
else{
   
    $message .= '<p class="userprofile-plan medium-purple-text"></p> <span></span>';
            echo ($message);


}
?>
           </h4>

 </span></p>
 <p class="d-flex justify-content-between medium-text">Email <span class="medium-purple-text">
 <?php      
    if( isset($_SESSION['login_user'] ))       
       
    echo  $_SESSION['login_user'];
    else{
       
        $message .= '<p class="userprofile-plan medium-purple-text"></p> <span></span>';
                echo ($message);
    
    
    }     

?>
          </span></p>
             <p class="d-flex justify-content-between medium-text">
        
          
         Phone Number <span class="medium-purple-text"><?php   if( isset($_SESSION['number'] ))       
       
       echo  $_SESSION['number'];
       else{
          
           $message .= '<p class="userprofile-plan medium-purple-text"></p> <span></span>';
                   echo ($message);
       
       
       }
    ?> </span></p>
                  
            
           </div>

           <h6 class="shaded-black prof-about-title"><i class="fa fa-credit-card" aria-hidden="true"></i> Billing History</h6>

           <div class="transaction-history-bloc">
               <p class="small-spaced-text p-0">No Trasaction Yet</p>
           </div>

        </section>
    </div> 


  </div> 
</body>

</html>