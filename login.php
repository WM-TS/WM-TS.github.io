<?php
$Password = 'learn'; 
   if (isset($_POST['submit_pwd'])){
      $pass = isset($_POST['passwd']) ? $_POST['passwd'] : '';
      if ($pass != $Password) {
         showForm("Incorrect, Please try again.");
         exit();     
      }
   } else {
      showForm();
      exit();
   }
function showForm($error=""){
?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Race Academy Hub</title>
</head>
<body>
   <img src="https://i.imgur.com/wNwwGPs.png" class="logo-image">
   <div class="login">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pwd">
         <input class="text" name="passwd" placeholder="Enter Access Code" id="password"  type="password"/></td></tr>
         <input class="text" type="submit" name="submit_pwd" value="Begin"/>
      </form>
   </div>
   <div class="caption"><?php echo $error; ?></div>
</body>
</html>
<?php   
}
?>
