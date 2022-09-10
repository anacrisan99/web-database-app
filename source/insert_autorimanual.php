<?php
$user='root';
$pass='rootroot';
$db='manualescolare';

$db=new mysqli ('localhost', $user, $pass, $db) or die ("Unable to connect");

$manualID =$_POST['manualID'];
$autorID =$_POST['autorID'];


$sql= "INSERT INTO autori (manualid,autorid) 
       VALUES ('$manualID','$autorID')" ;
if ($db->query($sql)==TRUE )
	echo "Adaugarea a fost realizata cu succes";
else
	echo "Error";
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
   </div>
     </div>
 
 </div>
 </div>
 
</body>
</html>
