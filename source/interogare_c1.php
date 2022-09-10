<?php
$user='root';
$pass='rootroot';
$db='manualescolare';

$db=new mysqli ('localhost', $user, $pass, $db) or die ("Unable to connect");

?>
<html>
 <head>
  <title>Cautare manuale </title>

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
          <li ><a href="manuale.php">Manuale</a></li>
		   <li ><a href="autori.php">Autori</a></li>
		  <li ><a href="interogari_simple.php">Cautare manuale</a></li>
		  <li class="selected"><a href="interogari_complexe.php">Statistici</a></li>
		  <li ><a href="administrator.php">Admin</a></li>
          
        </ul>
      </div>
	  </div>
 <div id="site_content">
 <div id="content">
        
       <?php
	    echo "Autorii care au scris cele mai multe manuale: " ;
	  
			 $query = "SELECT a.Nume,a.Prenume , ( SELECT COUNT(*) FROM autorimanual am WHERE am.AutorID = a.AutorID) AS NumarManuale
					   FROM Autori a
					   HAVING NumarManuale > 1
                       ORDER BY NumarManuale DESC";
			 mysqli_query($db, $query) or die('Error querying database.');

				$result = mysqli_query($db, $query);
			  
				echo "<table border='1'>
			   <tr>
			   <th>Nume</th>
			   <th>Prenume</th>
			   <th>Numar manuale </th>
			   
			
			   
			   </tr>";
				while ($row = mysqli_fetch_array($result)) {
				 echo"<tr>";
				 
				 echo "<td>". $row['Nume'] . "</td>";
				 echo "<td>". $row['Prenume'] . "</td>";
				 echo "<td>". $row['NumarManuale'] . "</td>";
				 
				
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
