<?php
$user='root';
$pass='rootroot';
$db='manualescolare';

$db=new mysqli ('localhost', $user, $pass, $db) or die ("Unable to connect");

$edituraid =$_POST['Edituraid'];
$materieid =$_POST['Materieid'];
$titlumanual = $_POST['Titlumanual'];
$isbn = $_POST['Isbn'];
$dataaprobare =$_POST['Dataaprobare'];
$modachizitie =$_POST['Modachizitie'];

$sql= "INSERT INTO manuale (edituraid,materieid,titlumanual,isbn,dataaprobare,modachizitie) 
       VALUES ('$edituraid','$materieid','$titlumanual','$isbn','$dataaprobare','$modachizitie')" ;
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
  <h1>Manuale:</h1>
        <?php
        
        $query = "SELECT * FROM Manuale";
        mysqli_query($db, $query) or die('Error querying database.');

        $result = mysqli_query($db, $query);
    
        echo "<table border='1'>
       <tr>
       <th>Titlul manualului:</th>
	   <th>ISBN:</th>
	   <th>Data aprobarii:</th>
	   <th>Mod achizitie:</th>
       
       </tr>";
        while ($row = mysqli_fetch_array($result)) {
		 echo"<tr>";
         echo "<td>". $row['titlumanual'] . "</td>"; 
		 echo "<td>". $row['isbn'] . "</td>"; 
		 echo "<td>". $row['dataaprobarii'] . "</td>";
         echo "<td>". $row['modachizitie'] . "</td>"; 
         echo "</tr>";		 
        }
		echo "</table>";
       mysqli_close($db);
	   ?>
        
      </div>
 
   </div>
     </div>
 
 </div>
 </div>
 
</body>
</html>
