<?php
	if( 
		isset($_GET["name"]) || isset($_GET["surname"]) || isset($_GET["position"]) ||
		isset($_GET["salaryAmount"]) || isset($_GET["detainedIncome"]) 
		|| isset($_GET["AccruedSalary"]) ||  isset($_GET["name"]) )
	{
  
   	$name = $_GET["name"];
	$surname = $_GET["surname"];
	$position = $_GET["position"];
	$salaryAmount = $_GET["salaryAmount"];
	$detainedIncome = $_GET["detainedIncome"];
	$AccruedSalary = $_GET["AccruedSalary"];
      echo " ". $_GET["name"]. "<br />";
      echo " ". $_GET["surname"]. "<br />";
      echo " ". $_GET["position"]. "<br />";
      echo " ". $_GET["salaryAmount"]. "<br />";
      echo " ". $_GET["detainedIncome"]. "<br />";
      echo " ". $_GET["AccruedSalary"]. "<br />";
      exit();
   }
?>








<html>
   <body>

   		<table border = 0 cellspacing = 0 cellpadding = 3>
		<tr><td>
			your name:
		</td>
		<?=$name?>
				
	    <tr><td>
	    	your email"
		</td>
		<?=$email?>

		<tr><td>
			Your Age:
		</td>
		<?=$age?>

</table>	


   
      <form action = "action.<?php?>" method = "GET">
 
         Name: <input type = "text" name = "name"  />
         <br>
         Surname: <input type = "text" name = "surname"  />
         <br>
         Position: <input type = "text" name = "position"  />
         <br>
         Salary Amount: <input type = "text" name = "salaryAmount"  />
         <br>
      	Detained Income: <input type = "text" name = "detainedIncome"  />
      	<br>
         Accrued Salary: <input type = "text" name = "AccruedSalary"  />
         <br>
         <input type = "submit"  />
      </form>
      






   </body>
</html>