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
         // $arr[0]= "продукты";
         // $arr[1] = "бутылка с водой";
         // echo $arr[1];
         // print_r($arr);

      //  echo  count($arr);
         // for ($i=0; $i < count($arr) ; $i++) { 
         //    echo $arr[$i]."<br>";
         // }
         // $arr = array("product"=>"продукты","water"=>"буталка с водой", " бутылка без воды");
         $arr = ["Миссия не выполнима","Игра престолов","Интерстеллар","Матрица"];

         $arr2 = array("кокос","арбуз");

         $newarr = array_merge($arr,$arr2);
         // unset($arr[0]);
         array_push($arr,"яблоко");
         array_unshift($arr,"апельсин");
         array_push($arr,"апельсин");
         $arr = array_unique($arr);
         $arr = array_reverse($arr);
         // sort($arr);
         shuffle($arr);
         foreach ( $newarr as $key => $value) {
            echo "Ключ к массиву ".$key. "----" .$value."<br>";
         }
$str = implode("->", $newarr);

echo "<br>".$str;

$str2 = "молоко, вода, водка, пиво, деньги";
$strtoarr = explode(",",$str2);
echo"<pre>";
print_r($strtoarr);
echo"</pre>";
   ?>
   <!-- array_chunk	Разбивает массив на несколько меньших массивов заданного размера
array_combine	Создает массив из двух заданных массивов - массива индексов элементов и массива значений
array_count_values	Формирует массив, индексами которого являются значения заданного массива, а значениями - число повторений соответствующего значения в заданном массиве
array_diff	Формирует массив из тех элементов первого заданного массива, которые отсутствуют в остальных заданных в качестве аргументов функции массива
array_fill	Заполняет массив заданным значением
array_intersect	Формирует массив из элементов, которые присутствуют во всех заданных массивах
array_key_exists	Проверяет наличие заданного индекса в массиве
array_keys	Возвращает массив из индексов заданного массива
array_merge	Объединяет несколько массивов в один
array_multisort	Выполняет сортировку многомерного массива или нескольких одномерных массивов
array_pad	Дополняет массив до заданного количества элементов заданным значением
array_pop	Возвращает последний элемент массива, одновременно удаляя элемент из массива
array_push	Добавляет заданные элементы в конец массива
array_rand	Выбирает один или несколько случайно взятых элементов из массива
array_reduce	Осуществляет последовательное применение заданной функции к элементам массива, формируя итоговое значение
array_reverse	Производит обращение массива - первый элемент становится последним, второй - предпоследним и т.д.
array_search	Ищет заданный элемент в массиве и возвращает соответствующим ему индекс
array_shift	Возвращает первый элемент массива, одновременно удаляя его из массива с перенумерацией числовых индексов
array_slice	Вырезает из массива подмассив заданной длины, начиная с указанного элемента
array_sum	Вычисляет сумму всех элементов массива
array_unique	Удаляет дублирующиеся значения из массива
array_unshift	Добавляет один или несколько элементов в начало массива с перенумерацией числовых индексов
array_walk	Вызывает заданную функцию последовательно для каждого элемента массива
array	Создает массив из заданных значений или пар индекс - значение
arsort	Сортирует массив по убыванию его значений, сохраняя индексы неизменными
assort	Сортирует массив по возрастанию его значений, сохраняя индексы неизменными
krsort	Сортирует массив по убыванию его индексов
ksort	Сортирует массив по возрастанию его индексов
sort	Сортирует массив по возрастанию значений его элементов с перенумерацией его индексов
usort	Сортирует массив с использование заданной функции сравнения элементов массива
rsort	Сортирует массив по убыванию значений его элементов с перенумерацией его индексов
natcasesort	Сортирует массив естественным образом без учета регистра массива
natsort	Сортирует массив естественным образом с учетом регистра символов
count	Возвращает количество элементов в массиве
current	Возвращает значение текущего элемента массива
each	Возвращает текущие индекс и значение элемента массива и продвигает указатели на следующий элемент
in_array	Проверяет, присутствует ли заданное значение в массиве
key	Возвращает индекс текущего элемента массива
list	Присваивает значения из массива списку переменных
pos	Синоним функции current
reset	Устанавливает внутренний указатель на первый элемент массива
shuffle	Переставляет элементы массива случайным образом
sizeof	Синоним функции count -->





<div> Привет, <?php echo $nickname; ?> </div>
 
<?php 
   // echo "<div>".$addresult."</div>";
?>

</body>
</html>