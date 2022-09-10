<?php
$user='root';
$pass='rootroot';
$db='manualescolare';

$db=new mysqli ('localhost', $user, $pass, $db) or die ("Unable to connect");
if (isset($_GET['id'])){
$autorid = $_GET['id'];
$qry = mysqli_query($db, "select * from autori where autorid = $autorid");
$data = mysqli_fetch_array($qry);
if(isset($_POST['update']))
{   
   
	$nume = $_POST['Nume'];
	$prenume = $_POST['Prenume'];
	$adresa = $_POST['Adresa'];
	
	$sql = "UPDATE autori SET Nume= '$nume', Prenume = '$prenume', Adresa = '$adresa' WHERE autorid = '$autorid'";
	
	if ($db->query($sql)==TRUE)
	{
		echo "Actualizarea a fost realizata cu succes!";
		mysqli_close($db); // Close connection
		
        header("location:update.php"); 
        exit;
	}
	else
	{
		echo "Actualizarea nu a fost realizata cu succes";
	}
}
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
		  <li ><a href="delete.php">Delete</a></li>
		  <li class="selected"><a href="update.php">Update</a></li>
		  <li ><a href="index.php">Inapoi</a></li>
          
        </ul>
      </div>
	  </div>
	  <div id="site_content">
 <div id="content">
  <h1>Autor:</h1>
       <form method = "POST">
		<p><span>Nume:</span><input type = 'text' name = "Nume" value ="<?php echo $data['Nume']?>" placeholder= "Introduceti Numele" Required></p>
		<p><span>Prenume:</span><input type = 'text' name = "Prenume" value ="<?php echo $data['Prenume']?>" placeholder= "Introduceti Prenumele" Required ></p>
		<p><span>Adresa:</span><input type = 'text' name = "Adresa" value ="<?php echo $data['Adresa']?>" placeholder = "Introduceti Adresa" Required ></p>
        <input type = "submit" name = "update" value="Update">
		</form>
      </div>
 
   </div>
     </div>
 

 
</body>
</html>


