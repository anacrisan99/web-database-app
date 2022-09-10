<?php


$user='root';
$pass='rootroot';
$db='manualescolare';

$db=new mysqli ('localhost', $user, $pass, $db) or die ("Unable to connect");


?>	   
	   


<html>
 <head>
  <title>Administrator </title>

 </head>
 <body>
  <link rel="stylesheet" type ="text/css" href="style/style.css" title="style" />
   <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
         
          <h1><a href="index.php">Pagina administrator</a></h1>
      
        </div>
      </div>
     
 <div id="menubar">
        <ul id="menu">
         
          <li class="selected"><a href="insert.php">Insert</a></li>
		  <li ><a href="delete.php">Delete</a></li>
		  <li ><a href="update.php">Update</a></li>
		  <li ><a href="index.php">Inapoi</a></li>
          
        </ul>
      </div>
	  </div>
 <div id="site_content">
 <div id="content">
        
        <h1>Va rugam introduceti datele pe care vreti sa le adaugati in tabelul AutoriManual:</h1>
         <form  action="insert_autorimanual.php" method="post">
          <div class="form_settings">
            <p><span>ID Manual:</span><input type="text" name="manualID" /></p>
            <p><span>ID Autor:</span><input  type="text" name="autorID"  /></p>
			
			
			
            
            <p style="padding-top: 15px"><span>&nbsp;</span><input  type="submit"  value="Insert" /></p>
          </div>
        </form>
		 
	   
	   
	   
      </div>
     </div>
 
 </div>
 </div>
 
</body>
</html>
