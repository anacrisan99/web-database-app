<?php
$user='root';
$pass='rootroot';
$db='manualescolare';

$database=new mysqli ('localhost', $user, $pass, $db) or die ("Unable to connect");
if(isset($_POST["autorID"])) 
{
$autorID =$_POST['autorID'];
$sql = "DELETE FROM autori WHERE autorID= $autorID";
if ($database->query($sql)==TRUE )
	echo "Stergerea a fost realizata cu succes";
else
	echo "Error";
}
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
		  <li class="selected"><a href="delete.php">Delete</a></li>
		  <li ><a href="update.php">Update</a></li>
		  <li ><a href="index.php">Inapoi</a></li>
          
        </ul>
      </div>
	  </div>
	  <div id="site_content">
 <div id="content">
  <h1>Autori:</h1>
        <?php
        
        $query = "SELECT * FROM Autori";
        mysqli_query($database, $query) or die('Error querying database.');

        $result = mysqli_query($database, $query);
    
        echo "<table border='1'>
       <tr>
       <th>Nume</th>
	   <th>Prenume</th>
	   <th>Data Nasterii</th>
	   <th>Adresa</th>
       
       </tr>";
        while ($row = mysqli_fetch_array($result)) {
		 echo"<tr>";
         echo "<td>". $row['Nume'] . "</td>"; 
		 echo "<td>". $row['Prenume'] . "</td>"; 
		 echo "<td>". $row['DataNasterii'] . "</td>";
         echo "<td>". $row['Adresa'] . "</td>"; 
         echo "</tr>";		 
        }
		echo "</table>";
       mysqli_close($database);
	   ?>
        
      </div>
 
   </div>
     </div>
 
 </div>
 </div>
 
</body>
</html>


