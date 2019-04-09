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
      // $nickname = "Ivan";
      // $addresult = 0;
      // $add1 = 20;
      // $add2 = 30;
      // // константа
      // define("DBNAME","kinomoster"); 
      // $addresult = $add1 + $add2; 
      // echo $addresult;
      // echo DBNAME;

      // $svetofor = "yelllow";

      // if($svetofor == "green") {
      //    echo "  светофор зеленый я перехожу дорогу ";
      // } else if ($svetofor == "yellow") {
      //    echo "  сейчас светофор желтый";
      // } else {
      //    echo "  Жду когда загориться зеленый";
      // }

      // switch ($svetofor) {
      //    case 'green':
      //          echo "  светофор зеленый я перехожу дорогу ";
      //       break;
      //    case 'yelllow':
      //          echo "  сейчас светофор желтый";
      //       break;
      //    case 'red':
      //       echo "  Жду когда загориться зеленый";
      //    break;
      //    default:
      //           echo "  Светофор не работает";
      //       break;
      // }   

      // $i = 1;
      // while($i <=25) {
      //    echo $i."<br>";
      //    $i++;
      // }
      // $i = 1;
      // do {
      //    echo $i."<br>";
      //    $i++;
      // } while ($i <=10);
       
      // for ($i=0; $i <=20; $i++) { 
      //    echo $i."<br>";
      // }
         $arr[0]= "продукты";
         $arr[1] = "бутылка с водой";
         // echo $arr[1];
         // print_r($arr);

      //  echo  count($arr);
         for ($i=0; $i < count($arr) ; $i++) { 
            echo $arr[$i]."<br>";
         }
   ?>
<!-- <div> Привет, <?php echo $nickname; ?> </div> -->
 
<?php 
   // echo "<div>".$addresult."</div>";
?>

</body>
</html>