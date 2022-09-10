<?php

include("config.php");

?>
<html>
 <head>
  <title>Administrator </title>

 </head>
 <body>
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
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
        
        <h1>Alegeti tabelul pe care doriti sa il populati:</h1>
         <ul>
          <li> <a href="insert_autori.php">Autori</a></li>
          <li> <a href="insert_autorimanuale.php">AutoriManual</a></li>
          <li> <a href="insert_edituri.php">Editura</a></li>
		  <li> <a href="insert_manuale.php">Manuale</a></li>
        </ul>
      </div>
		
      
      </div>
 
 </div>
 </div>
 
</body>
</html>
