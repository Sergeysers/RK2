<html>
 <body>
  <h2> Задание 1</h2>
 </body>
</html>
<?php
 for ($k=1,$k<101,$k++)
  echo "<tr>"
  (for ($i=1,$i<101,$i++)
   echo "<td> $k "-" $i </td>";)
  echo "</tr>";
?>

<html>
 <body>
  <h2> Задание 2</h2>
 <form action="" method="POST">
  <p> Введите число а: <input type="text" name="number1" required> </p>
  <p> Введите число b: <input type="text" name="number2" required> </p>
  <p> Выберите операцию: 
   <select name="operation[]" size="4" required>
    <option value="plus">Сложение</option>
	<option value="minus">Вычитание</option>
	<option value="umn">Умножение</option>
	<option value="del">Деление</option>
   </select>
  </p>
  <input type="submit" value="Выбрать">
 </form>
 </body>
</html>
  
<?php
 $a = $_POST("number1");
 $b = $_POST("number2");
 if (operation[plus]) {echo "$a+$b"}
  elseif (operation[minus]) {echo "$a-$b"}
   elseif (operation[umn]) {echo "$a*$b"}
    elseif (operation[del]) {echo "$a/$b"};
?>
