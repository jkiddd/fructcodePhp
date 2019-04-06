<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>PHP уроки</title>
</head>
<body>
<?php 
      $nickname = "Ivan";
      $addresult = 0;
      $add1 = 20;
      $add2 = 30;
      // константа
      define("DBNAME","kinomoster"); 
      $addresult = $add1 + $add2; 
      echo $addresult;
      echo DBNAME;
   ?>
<div> Привет, <?php echo $nickname; ?> </div>
 
<?php 
   echo "<div>".$addresult."</div>";
?>

</body>
</html>