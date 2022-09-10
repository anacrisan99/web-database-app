<?php

include("config.php");

?>
<html>
 <head>
  <title>Administrator </title>
  <script language="JavaScript">
var parola;
var cuvant="parola";
parola=prompt('Introduceti parola de administrator:','');
if (parola==cuvant)
     alert('Bun venit!');
else
     {
          window.location="reincearca.html";
     }
</script>
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
        
         
          <li><a href="insert.php">Insert</a></li>
		  <li ><a href="delete.php">Delete</a></li>
		  <li ><a href="update.php">Update</a></li>
		  <li ><a href="index.php">Inapoi</a></li>
          
        </ul>
      </div>
	  </div>
 <div id="site_content">
 <div id="content">
        
        <h1>Aplicatie pentru evidenta manualelor alternative acceptate de minister</h1>
        <p> Aceasta pagina este destinata administratorului, pentru a putea face modificari in baza de date
            a manualelor aprobate de minister		</p>
		
      
      </div>
 
 </div>
 </div>
 
</body>
</html>
