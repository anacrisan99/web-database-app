<!DOCTYPE html>
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
        
        <h1>Cautare manuale dupa:</h1>
		<select id= "myselect" onchange= "myFunction()">
		  <option value= "demo"> Selectati
		  <option value= "materie"> Materie  
		  <option value= "invatamant"> Ciclu Invatamant
		  <option value= "clasa"> Clasa
		  <option value= "autor"> Autor
		  <option value= "editura"> Editura
       </select>
	   
	   <p id="demo"></p>
	   <script language="JavaScript">
	   
	   function myFunction() {
       var x = document.getElementById("myselect").value;
       
	   
	   if (x == "materie" )
	   { document.getElementById("div1").style.display = 'block';
		 document.getElementById("div2").style.display = 'none';
		 document.getElementById("div3").style.display = 'none';
		 document.getElementById("div4").style.display = 'none';
		 document.getElementById("div5").style.display = 'none';
	   }
	    if (x == "invatamant" )
	   { document.getElementById("div1").style.display = 'none';
		 document.getElementById("div2").style.display = 'block';
		 document.getElementById("div3").style.display = 'none';
		 document.getElementById("div4").style.display = 'none';
		 document.getElementById("div5").style.display = 'none';
	   }
	     if (x == "clasa" )
	   { document.getElementById("div1").style.display = 'none';
		 document.getElementById("div2").style.display = 'none';
		 document.getElementById("div3").style.display = 'block';
		 document.getElementById("div4").style.display = 'none';
		 document.getElementById("div5").style.display = 'none';
	   }
	      if (x == "autor" )
	   { document.getElementById("div1").style.display = 'none';
		 document.getElementById("div2").style.display = 'none';
		 document.getElementById("div3").style.display = 'none';
		 document.getElementById("div4").style.display = 'block';
		 document.getElementById("div5").style.display = 'none';
	   }
	      if (x == "editura" )
	   { document.getElementById("div1").style.display = 'none';
		 document.getElementById("div2").style.display = 'none';
		 document.getElementById("div3").style.display = 'none';
		 document.getElementById("div4").style.display = 'none';
		 document.getElementById("div5").style.display = 'block';
	   }
	   }	 
	   </script>
	 

	
	<div id="div1" style="display:none">
		 <form  action="interogare_s6.php" method="post">
					<div class="form_settings">
						<p><span>Introduceti numele materiei :</span><input type="text" name="materie" /></p>
						<p style="padding-top: 15px"><span>&nbsp;</span><input  type="submit"  value="Afisati" /></p>
					 </div>
		</form>
	</div>
	<div id="div2" style="display:none">
		<form  action="interogare_s5.php" method="post">
					<div class="form_settings">
						<p><span>Introduceti ciclul de invatamant (P - primara/ G - gimnaziu/ L - liceu):</span><input type="text" name="inv" /></p>
						<p style="padding-top: 15px"><span>&nbsp;</span><input  type="submit"  value="Afisati" /></p>
					 </div>
				 </form>
	</div>
	<div id="div3" style="display:none">
		 <form  action="interogare_s2.php" method="post">
					<div class="form_settings">
						<p><span>Introduceti clasa:</span><input type="text" name="anscolar" /></p>
						<p style="padding-top: 15px"><span>&nbsp;</span><input  type="submit"  value="Afisati" /></p>
					 </div>
				</form>
	</div>
	<div id="div4" style="display:none">
		<form  action="interogare_s3.php" method="post">
				<div class="form_settings">
					<p><span>Introduceti numele autorului:</span><input type="text" name="nume" /></p>
					<p style="padding-top: 15px"><span>&nbsp;</span><input  type="submit"  value="Afisati" /></p>
				 </div>
				</form>
	</div>		
	<div id="div5" style="display:none">		
        <form  action="interogare_s4.php" method="post">
			<div class="form_settings">
				<p><span>Introduceti numele editurii: </span><input type="text" name="editura" /></p>
				<p style="padding-top: 15px"><span>&nbsp;</span><input  type="submit"  value="Afisati" /></p>
			</form>    
    </div>     
          </div>
       
		 
      </div>
		
      
      </div>
 
 </div>
 </div>
 
</body>

</html>
