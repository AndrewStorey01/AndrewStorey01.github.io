<!DOCTYPE html>
<html>
<body>
   $cars = array("Volvo", "BMW", "Toyota");
   <form action="/action_page.php">
  <input list=<?php echo $cars?> name="browser">
  <input type="submit">
</form>
</body>
</html>
