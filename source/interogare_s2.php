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
		  <li class="selected"><a href="interogari_simple.php">Cautare manuale</a></li>
		  <li ><a href="interogari_complexe.php">Statistici</a></li>
		  <li ><a href="administrator.php">Admin</a></li>
          
        </ul>
      </div>
	  </div>
 <div id="site_content">
 <div id="content">
        
       <?php
	   echo "Manuale aprobate de Ministerul Educatiei pentru clasa a " . htmlspecialchars($_POST["anscolar"]) ."-a :" ;
	   if(isset($_POST["anscolar"]))
	   {     
			 $anscolar =$_POST['anscolar'];
			 $query = "SELECT m.TitluManual,mat.Denumire, mat.AnScolar FROM Manuale m INNER JOIN Materie mat ON mat.materieid = m.materieid
																							  
						GROUP BY m.ManualID
						HAVING mat.AnScolar = $anscolar ";
			 mysqli_query($db, $query) or die('Error querying database.');

				$result = mysqli_query($db, $query);
			  
				echo "<table border='1'>
			   <tr>
			   <th>Titlul Manualului</th>
			   <th>Materie</th>
			   <th>Clasa </th>
			   
			
			   
			   </tr>";
				while ($row = mysqli_fetch_array($result)) {
				 echo"<tr>";
				 echo "<td>". $row['TitluManual'] . "</td>"; 
				 echo "<td>". $row['Denumire'] . "</td>";
				 echo "<td>". $row['AnScolar'] . "</td>";
				 
				
				 echo "</tr>";		 
				}
				echo "</table>";
			   mysqli_close($db);
	   }
	 ?>
		
			
           
			
			
            
         
          </div>
       
		 
      </div>
		
      
      </div>
 
 </div>
 </div>
 
</body>
</html>
