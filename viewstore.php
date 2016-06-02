<!DOCTYPE html>
<html>
  <head>
   
  </head>
  <body >
    
  
<?php

if( $_POST["name"] || $_POST["surname"] || $_POST["day"] || $_POST["mounth"]|| $_POST["year"]|| $_POST["place"])
{
	//echo "Your name is: ". $_GET["surname"]. "<br />";
	//echo "Your surname is: ". $_GET["surname"]. "<br />";
	//echo "Your date  is: ". $_GET["day"]. "/" .$_GET["mounth"]. "/". $_GET["year"]."<br />";
	//echo "Your place is: ". $_GET["place"]."<br />";
	//print_r ($_GET);
	$name=$_POST["name"];
	$surname=$_POST["surname"];
	$day=$_POST["day"]; 
	$mounth=$_POST["mounth"];
	$year=$_POST["year"];
	$place=$_POST["place"];
	




	//if ($_POST['view'] == 'viewreturnlist') 
	if (isset($_POST['view'])) 	
		{
			echo
			"<table border=1 cellspacing=0 cellpading=0>
				<tr>
					<th>name</th>
					<th>surname</th>
					<th>date</th>
					<th>place</th>
				</tr>
				<tr>
					<td>$name</td>
					<td>$surname</td>
					<td>$day / $mounth / $year</td>
					<td>$place</td>
				</tr>
			</table>"; 
		}
		
		
	else if (isset($_POST['store'])) 
	//($_POST["store"]== 'save') 
	{
			$file = fopen("file.txt", "w") ;
			$txt = "$name;";
			fwrite($file, $txt);
			$txt = "$surname;";
			fwrite($file, $txt);
			$txt = "$day/$mounth/$year;";
			fwrite($file, $txt);
			$txt = $place;
			fwrite($file, $txt);
			fclose($file);
			echo "success";
			
		}	
		
	else 
		{
			echo "no button submitted";
		}	

	}
?>
<form action="viewstore.html"><input type="submit" value="back"></form></input>
</body>
</html>
