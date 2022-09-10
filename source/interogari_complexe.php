<?php
$user='root';
$pass='rootroot';
$db='manualescolare';

$db=new mysqli ('localhost', $user, $pass, $db) or die ("Unable to connect");

?>
<html>
 <head>
  <title>Statistici </title>

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
        
        <h1>Alegeti statistica pe care doriti sa o vedeti:</h1>
        
          <div class="form_settings">
		    <h2>Afisarea autorilor care au scris cele mai multe manuale </h2>
		    <form  action="interogare_c1.php" method="post">
			<div class="form_settings">
				<p style="padding-top: 15px"><span>&nbsp;</span><input  type="submit"  value="Afisati" /></p>
			 </div>
			</form>
			
			  <h2>Afisati editurile care au publicat un numar minim de manuale: </h2>
		    <form  action="interogare_c2.php" method="post">
			<div class="form_settings">
				<p><span>Introduceti numarul minim de manuale:</span><input type="text" name="editura" /></p>
				<p style="padding-top: 15px"><span>&nbsp;</span><input  type="submit"  value="Afisati" /></p>
			 </div>
			</form>
			
			 <h2>Afisati manualele care au fost aprobate dupa o data:  </h2>
		    <form  action="interogare_c3.php" method="post">
			<div class="form_settings">
				<p><span>Introduceti data (aaaa-ll-zz):</span><input type="text" name="data" /></p>
				<p style="padding-top: 15px"><span>&nbsp;</span><input  type="submit"  value="Afisati" /></p>
			 </div>
			 </form>
			 	 
			 </div>
			
			 <h2>Afisati clasele care au numarul cel mai mare de manuale aprobate: </h2> 
		    <form  action="interogare_c4.php" method="post">
			<div class="form_settings">
				<p style="padding-top: 15px"><span>&nbsp;</span><input  type="submit"  value="Afisati" /></p>
				</div>
			</form>
			 
				
			
       
		 
      </div>
		
      
      </div>
 
 </div>

 
</body>
</html>
