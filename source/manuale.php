<?php

include("config.php");
echo 'Baza de date a fost conectata cu succes';
?>
<html>
 <head>
  <title>Manuale alternative </title>
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
          <li class="selected"><a href="manuale.php">Manuale</a></li>
		    <li ><a href="autori.php">Autori</a></li>
		  <li ><a href="interogari_simple.php">Cautare manuale</a></li>
		  <li ><a href="interogari_complexe.php">Statistici</a></li>
		  <li ><a href="administrator.php">Admin</a></li>
          
        </ul>
      </div>
	  </div>
 <div id="site_content">
 <div id="content">
     <?php
     $query = "SELECT m.TitluManual, e.Nume, COUNT(am.AutorID) AS Count, mat.AnScolar FROM Manuale m INNER JOIN edituri e ON e.edituraID=m.edituraID
	                                                                                  INNER JOIN Autorimanual am ON am.manualID=m.manualID
																					  INNER JOIN Materie mat ON mat.materieID=m.materieID
				GROUP BY m.manualID
				ORDER BY mat.AnScolar";
	 mysqli_query($db, $query) or die('Error querying database.');

        $result = mysqli_query($db, $query);
      
        echo "<table border='1'>
       <tr>
       <th>Titlul Manualului</th>
	   <th>Editura</th>
	   <th>Numar Autori </th>
	   <th>Clasa </th>
	
       
       </tr>";
        while ($row = mysqli_fetch_array($result)) {
		 echo"<tr>";
         echo "<td>". $row['TitluManual'] . "</td>"; 
		 echo "<td>". $row['Nume'] . "</td>";
		  echo "<td>". $row['Count'] . "</td>";
		   echo "<td>". $row['AnScolar'] . "</td>";
		 
        
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