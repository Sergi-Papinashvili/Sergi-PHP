<?php
	$studentName = "";
	$studentSurname = "";
	$semestry = "";
	$course = "";
	$grade = "";
	$assessment = "";
	$lectName = "";
	$lectSurname = "";
	$dekanName = "";
	$dekanSurname = "";
	if (isset($_POST["ok"])){
		$studentName = $_POST["studentName"];
		$studentSurname = $_POST["studentSurname"];
		$semestry = $_POST["semestry"];
		$course = $_POST["course"];
		$grade = $_POST["grade"];
		$assessment = $_POST["assessment"];
		$lectName = $_POST["lectName"];
		$lectSurname =$_POST["lectSurname"];
		$dekanName = $_POST["dekanName"];
		$dekanSurname = $_POST["dekanSurname"];
	}

?>
<html>
<body>
<div class="form" style="width:500px;">
<form action="<?php $PHP_SELF ?>" method ="POST">
StudentName:<br> <input type="text" name="studentName" style="width:200px;"/><br>
StudentSurname:<br> <input type="text" name="studentSurname" style="width:200px;"/><br>
Semestry:<br> <input type="text" name="semestry" style="width:200px;"/><br>
Course:<br> <input type="text" name="course" style="width:200px;"/><br>
Grade:<br> <input type="text" name="grade" style="width:200px;"/><br>
LectName:<br> <input type="text" name="lectName" style="width:200px;"/><br>
lectSurname:<br> <input type="text" name="lectSurname" style="width:200px;"/><br>
dekanName:<br> <input type="text" name="dekanName" style="width:200px;"/><br>
dekanSurname:<br> <input type="text" name="dekanSurname" style="width:200px;"/><br>
<br> <input type="hidden" name="assessment" style="width:200px;"/><br>
<form action="submit. <?php?>" method ="POST"><br>
<input type="submit" name="ok"/><br>
</form>
</form>
</div>

<table  border="1px">
<tr >
<td style="width:300px;"><?php echo  'studentName:';?> </td>
<td style="width:300px;"><?php echo $studentName?><br /></td>
</tr>

<tr>
<td><?php echo  'studentSurname:';?></td>
<td><?php echo $studentSurname ?><br /></td>
</tr>

<tr>
<td><?php echo  'semestry:';?></td>
<td><?php echo $semestry ?><br /></td>
</tr>

<tr>
<td><?php echo  'course:';?></td>
<td><?php echo $course ?><br /></td>
</tr>

<tr>
<td><?php echo 'grade:';?></td>
<td><?php echo $grade ?><br /></td>
</tr>


<tr>
<td><?php echo 'lectName:';?></td>
<td><?php echo $lectName ?><br /></td>
</tr>


<tr>
<td><?php echo 'lectSurname:';?></td>
<td><?php echo $lectSurname ?><br /></td>
</tr>

<tr>
<td><?php echo 'dekanName:';?></td>
<td><?php echo $dekanName ?><br /></td>
</tr>

<tr>
<td><?php echo 'dekanSurname:';?></td>
<td><?php echo $dekanSurname ?><br /></td>
</tr>



<tr>
<td>
	<?php

	if ((91 <= $grade) && ($grade<= 100)) {
	    echo "A";
	}
	 elseif ((81 <= $grade) && ($grade <= 90)) {
	    echo "B";
		}
		 elseif ((71 <= $grade) && ($grade <= 80)) {
		    echo "C";
			}
			elseif ((61 <= $grade) && ($grade <= 70)) {
					echo "D";
				}
			elseif ((51 <= $grade) && ($grade <= 60)) {
							echo "E!";
						}
			elseif ((41 <= $grade) && ($grade <= 50)) {
							echo "F";
			}

			elseif ($grade < 41) {
							echo "FX";
			}



?></td>
<td><?php echo $assessment; ?><br /></td>
</tr>

</table>

</body>
</html>
