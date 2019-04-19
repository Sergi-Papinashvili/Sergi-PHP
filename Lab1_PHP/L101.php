<?php
	$name= "";
	$surname= "";
	$position= "";
	$salary= "";
	$income = "";
	$finalSalary = "";
	if (isset($_GET["ok"])){
		$name = $_GET["name"];
		$surname = $_GET["surname"];
		$position = $_GET["position"];
		$salary = $_GET["salary"];
		$income = $_GET["income"];
		$finalSalary = $_GET["finalSalary"];
	}
?>  
<html>
<body>
<div class="form" style="width:500px;">
<form action="<?php $PHP_SELF ?>" method ="GET">
Name:<br> <input type="text" name="name" style="width:200px;"/><br>
Surname: <br> <input type="text" name="surname" style="width:200px;"/><br>
Position: <br><input type="text" name="position"style="width:200px;" /><br>
Salary: <br> <input type="text" name="salary" style="width:200px;"/><br>
Income: <br> <input type="text" name="income" style="width:200px;"/><br>
FinalSalary: <br> <input type="text" name="finalSalary" style="width:200px;"/><br>
<form action="submit. <?php?>" method ="GET"><br>
<input type="submit" name="ok"/><br>
</form>
</form>
</div>

<table  border="1px">
<tr >
<td style="width:300px;"><?php echo  'name:';?> </td>
<td style="width:300px;"><?php echo $name?><br /></td>
</tr>

<tr>
<td><?php echo  'surname:';?></td>
<td><?php echo $surname ?><br /></td>
</tr>

<tr>
<td><?php echo  'position:';?></td>
<td><?php echo $position?><br /></td>
</tr>



<tr>
<td><?php echo  'salary:';?></td>
<td><?php echo $salary?><br /></td>
</tr>

<tr>
<td><?php echo 'income:';?></td>
<td><?php echo $income ?><br /></td>
</tr>

<tr>
<td><?php echo 'finalSalary:';?></td>
<td><?php echo $finalSalary ?><br /></td>
</tr>

</table>


</body>
</html>