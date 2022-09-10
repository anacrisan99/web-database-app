<?php
$user='root';
$pass='rootroot';
$db='manualescolare';

$db=new mysqli ('localhost', $user, $pass, $db) or die ("Unable to connect");
if(isset($_POST["edituraID"])) 
{
$edituraID =$_POST['edituraID'];
$sql = "DELETE FROM edituri WHERE edituraID= $edituraID ";
if ($db->query($sql)==TRUE )
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
  <h1>Edituri:</h1>
        <?php
        
        $query = "SELECT * FROM Edituri";
        mysqli_query($db, $query) or die('Error querying database.');

        $result = mysqli_query($db, $query);
    
        echo "<table border='1'>
       <tr>
       <th>Nume</th>
	   <th>Adresa</th>
	   <th>Telefon</th>
	 
       
       </tr>";
        while ($row = mysqli_fetch_array($result)) {
		 echo"<tr>";
         echo "<td>". $row['Nume'] . "</td>"; 
		 echo "<td>". $row['Adresa'] . "</td>"; 
		 echo "<td>". $row['Telefon'] . "</td>"; 
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
