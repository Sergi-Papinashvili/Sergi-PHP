<?php
   if( $_GET["name"] || $_GET["age"] && $_GET["position"] ) {
      echo "Welcome ". $_GET['name']. "<br />";
      echo "You are ". $_GET['age']. " years old.";
      echo "Your position is ". $_GET['position']. "<br />";
      exit();
   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         Position: <input type = "text" name = "position" />

         <input type = "submit" />
      </form>
      
   </body>
</html>