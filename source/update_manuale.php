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
		  <li ><a href="delete.php">Delete</a></li>
		  <li class="selected"><a href="update.php">Update</a></li>
		  <li ><a href="index.php">Inapoi</a></li>
          
        </ul>
      </div>
	  </div>
 <div id="site_content">
 <div id="content">
        
        <h1>Tabelul manuale:</h1>
		  <?php
        
        $query = "SELECT * FROM Manuale";
        mysqli_query($db, $query) or die('Error querying database.');

        $result = mysqli_query($db, $query);
    
        echo "<table border='1'>
       <tr>
	   <th> </th>
       <th>Titlul manualului</th>
	   <th>Mod achizitie</th>
	   <th>Actualizati</th>
	 
       </tr>";
        while ($row = mysqli_fetch_array($result)) {
		 ?>
		 <tr>
		    <td><?php echo $row['ManualID'];?></td>
			<td><?php echo $row['TitluManual'];?></td>
			<td><?php echo $row['ModAchizitie'];?></td>
			<td> <a href="update_manual.php?id=<?php echo $row['ManualID']; ?>">Actualizati</a></td>
			</tr>
			<?php
		}
		?>
		
		</table>  
         
          </div>
       
	  </div>
	  </div>
 

 
</body>
</html>
