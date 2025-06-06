<?php 
  require('inc/essentials.php');
  require('inc/db-config.php');

  session_start();
  if((isset($_SESSION['adminlogin'])&& $_SESSION['adminlogin']==true)){
    redirect('dashboard.php');
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login panel</title>
    <?php require('inc/links.php');?>
    <style>
          div.login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
          }
    </style>
</head>
<body class="bg-light">
      <div class="login-form  text-center rounded bg-white shadow overflow-hidden">
         <form method="POST" >
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL </h4>
            <div class="p-4">
              <div class="mb-3">
                <input name="admin-name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name" >
              </div>
              <div class="mb-4">
                <input name="admin-pass" required type="password" class="form-control shadow-none text-center" placeholder="Password">
              </div>
              <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
            </div>
          </form>
      </div>

  <?php
     if(isset($_POST['login']))
     {
       $frm_data=filteration($_POST);

       $query ="SELECT * FROM `admin-cred` WHERE `admin-name`=? AND `admin-pass`=?";
       $values = [$frm_data['admin-name'],$frm_data['admin-pass']];

       $res= select($query,$values,"ss");
       if($res->num_rows == 1){
         $row = mysqli_fetch_assoc($res);
         $_SESSION['adminlogin'] = true;
         $_SESSION['adminId'] = $row['sr-no'];
         redirect('dashboard.php');
        }
        else{
         alert('error','login failed - invalid credentials!');
        }
     }
    ?>


  <?php require ('inc/scripts.php');?>
</body>
</html>