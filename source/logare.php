<?php
include("config.php");
session_start();
 
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         echo "Login successful" ;
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
	

?>
<html>
<body>
 <link rel="stylesheet" type="text/css" href="style/style.css" title="style" /> 
   <div id="main">
   
    <div id="header">
      <div id="logo">
        <div id="logo_text">
         
          <h1><a href="index.php">Manuale alternative aprobate de Ministerul Educatiei</a></h1>
      
        </div>
      </div>
     
 <div id="menubar">
        <ul id="menu">
     
          <li><a href="index.php">Acasa</a></li>
          <li><a href="manuale.php">Lista manuale aprobate</a></li>
		  <li ><a href="autori.php">Lista autori</a></li>
		  <li class="selected" ><a href="logare.php">Logare</a></li>
          
        </ul>
      </div>
	  </div>
 <div id="site_content">
 <div id="content">
        
        <h1>Va rugam introduceti datele de conectare la baza de date:</h1>
         <form action="" method="post">
          <div class="form_settings">
            <p><span>Utilizator:</span><input type="text" name="username" /></p>
            <p><span>Parola:</span><input  type="password" name="password"  /></p>
            
            <p style="padding-top: 15px"><span>&nbsp;</span><input  type="submit"  value="Logare" /></p>
          </div>
        </form>
		 
					
            </div>
      
 </div>

 </div>
 </div>
 
</body>
</html>