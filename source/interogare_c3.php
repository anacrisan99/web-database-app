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
	   echo "Manualele care au fost aprobate dupa data " . htmlspecialchars($_POST["data"]) ." :" ;
	   if(isset($_POST["data"]))
	   {     
			 $data =$_POST['data'];
			 $query = "SELECT m.TitluManual, m.DataAprobare, mat.AnScolar
					   FROM manuale m JOIN materie mat ON m.MaterieID = mat.MaterieID
					   WHERE m.DataAprobare IN ( SELECT DataAprobare
												 FROM manuale
												 WHERE DataAprobare > '$data' )
					   ORDER BY m.DataAprobare DESC";
				 mysqli_query($db, $query) or die('Error querying database.');
				$result = mysqli_query($db, $query);
			  
				echo "<table border='1'>
			   <tr>
			   <th>Titlul manualului</th>
			   <th>Data aprobarii</th>
			   <th>Clasa </th>
			   
			   
			
			   
			   </tr>";
				while ($row = mysqli_fetch_array($result)) {
				 echo"<tr>";
				 echo "<td>". $row['TitluManual'] . "</td>"; 
				 echo "<td>". $row['DataAprobare'] . "</td>";
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
