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
        
        <h1>Tabelul edituri:</h1>
		  <?php
        
        $query = "SELECT * FROM Edituri";
        mysqli_query($db, $query) or die('Error querying database.');

        $result = mysqli_query($db, $query);
    
        echo "<table border='1'>
       <tr>
	   <th> </th>
       <th>Nume</th>
	   <th>Adresa</th>
	   <th>Telefon</th>
	   <th>Actualizati</th>
       
       </tr>";
        while ($row = mysqli_fetch_array($result)) {
		 ?>
		 <tr>
		    <td><?php echo $row['EdituraID'];?></td>
			<td><?php echo $row['Nume'];?></td>
			<td><?php echo $row['Adresa'];?></td>
			<td><?php echo $row['Telefon'];?></td>
			<td> <a href="update_editura.php?id=<?php echo $row['EdituraID']; ?>">Actualizati</a></td>
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
