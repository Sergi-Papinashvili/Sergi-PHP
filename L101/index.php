<?php
if(isset($_GET["name"]) || isset($_GET["surname"]) || isset($_GET["salary"]) || isset($_GET["position"]))
$name= "name";
$surname= "surname";
$salary= "salary";
$position= "position";
?>
    
<html>
<body>
<div class="form" style="width:500px;">
<form action="<?php $PHP_SELF ?>" method ="GET">
name:<br> <input type="text" name="name" style="width:200px;"/><br>
lastname: <br> <input type="text" name="lastname" style="width:200px;"/><br>
salary: <br><input type="text" name="salary"style="width:200px;" /><br>
position: <br> <input type="text" name="position" style="width:200px;"/><br>
<form action="submit. <?php?>" method ="GET"><br>
<input type="submit"/><br>
</form>
</form>
</div>

<table  border="1px">
<tr >
<td style="width:300px;"><?php echo  'name:';?> </td>
<td style="width:300px;"><?php echo $_GET["name"]; ?><br /></td>
</tr>

<tr>
<td><?php echo  'lastname:';?></td>
<td><?php echo $_GET["lastname"]; ?><br /></td>
</tr>

<tr>
<td><?php echo  'salary:';?></td>
<td><?php echo $_GET["salary"]; ?><br /></td>
</tr>

<tr>
<td><?php echo 'position:';?></td>
<td><?php echo $_GET["position"]; ?><br /></td>
</tr>

</table>


</body>
</html>
