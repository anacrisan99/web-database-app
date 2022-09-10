<?php
$user='root';
$pass='rootroot';
$db='manualescolare';

$db=new mysqli ('localhost', $user, $pass, $db) or die ("Unable to connect");
if (isset($_GET['id'])){
$manualid = $_GET['id'];
$qry = mysqli_query($db, "select * from manuale where manualid = $manualid");
$data = mysqli_fetch_array($qry);
if(isset($_POST['update']))
{   
   
	$titlumanual = $_POST['TitluManual'];
	$modachizitie = $_POST['ModAchizitie'];
	
	
	$sql = "UPDATE manuale SET titlumanual= '$titlumanual', modachizitie = '$modachizitie' WHERE manualid = '$manualid'";
	
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
		<p><span>Titlul manualului:</span><input type = 'text' name = "TitluManual" value ="<?php echo $data['TitluManual']?>" placeholder= "Introduceti Titlul manualului" Required></p>
		<p><span>Mod achizitie:</span><input type = 'text' name = "ModAchizitie" value ="<?php echo $data['ModAchizitie']?>" placeholder= "Introduceti " Required ></p>

        <input type = "submit" name = "update" value="Update">
		</form>
      </div>
 
   </div>
     </div>
 

 
</body>
</html>


