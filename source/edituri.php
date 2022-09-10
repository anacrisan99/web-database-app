<?php

include("config.php");
?>
<html>
 <head>
  <title>Lista edituri </title>
 </head>
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
        
          <li ><a href="index.php">Acasa</a></li>
          <li ><a href="manuale.php">Lista manuale aprobate</a></li>
		  <li ><a href="autori.php">Lista autori</a></li>
		   <li class="selected" ><a href="edituri.php">Lista edituri</a></li>
		   <li ><a href="administrator.php">Admin</a></li>
          
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
	   <th>Numar de telefon</th>
	
       
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
 
</body>
</html>