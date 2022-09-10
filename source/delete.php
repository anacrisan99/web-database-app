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
         
          <li ><a href="insert.php">Insert</a></li>
		  <li class="selected" ><a href="delete.php">Delete</a></li>
		  <li ><a href="update.php">Update</a></li>
		  <li ><a href="index.php">Inapoi</a></li>
          
        </ul>
      </div>
	  </div>
 <div id="site_content">
 <div id="content">
        
        <h1>Alegeti tabelul din care doriti sa stergeti:</h1>
        
          <div class="form_settings">
		    <h2>Tabelul autori: </h2>
		    <form  action="delete_autor.php" method="post">
			<div class="form_settings">
				<p><span>Introduceti ID-ul autorului pe care doriti sa il stergeti:</span><input type="text" name="autorID" /></p>
				<p style="padding-top: 15px"><span>&nbsp;</span><input  type="submit"  value="Stergeti" /></p>
			 </div>
			</form>
			
			  <h2>Tabelul edituri: </h2>
		    <form  action="delete_editura.php" method="post">
			<div class="form_settings">
				<p><span>Introduceti ID-ul editurii pe care doriti sa o stergeti:</span><input type="text" name="edituraID" /></p>
				<p style="padding-top: 15px"><span>&nbsp;</span><input  type="submit"  value="Stergeti" /></p>
			 </div>
			</form>
			
			 <h2>Tabelul manuale: </h2>
		    <form  action="delete_manual.php" method="post">
			<div class="form_settings">
				<p><span>Introduceti ID-ul manualului pe care doriti sa il stergeti:</span><input type="text" name="manualID" /></p>
				<p style="padding-top: 15px"><span>&nbsp;</span><input  type="submit"  value="Stergeti" /></p>
			 </div>
			</form>
		
		
			
           
			
			
            
         
          </div>
       
		 
      </div>
		
      
      </div>
 
 </div>
 </div>
 
</body>
</html>
