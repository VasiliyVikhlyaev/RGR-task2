<html>
	<link href="task2.css" rel="stylesheet">
	<meta charset="UTF-8">
	<form  method="GET">
	<p>
		<img src="http://elhow.ru/images/articles/8/88/8867/inner.jpg"><br><br>
		<img src="http://www-formula.ru/images/geometry/formula/triangle_height_formula.png"><br><hr>
	</p>
Сторона a = <input type ="text" name= "a" value="<?php 
	if (isset ($_GET['a'])) {
		echo htmlspecialchars($_GET['a']);
	}
	?> ">
		
Сторона b = <input type ="text" name="b" value="<?php 
	if (isset ($_GET['b'])) {
		echo htmlspecialchars ($_GET['b']);
	}
	?> ">
		
Сторона c = <input type ="text" name="c" value="<?php 
	if (isset ($_GET['c'])) {
		echo htmlspecialchars ($_GET['c']);
	}
	?> "> 
		
<input type ="submit" value="Рассчитать" name="add">
</form>

<?php 
 if (isset($_GET['a']) && isset ($_GET['b']) && isset ($_GET['c'])) {
	if (is_numeric($_GET['a'])&& is_numeric($_GET['b']) && is_numeric($_GET['c'])) {
		if (($_GET['a'])>0 && ($_GET['b'])>0 && ($_GET['c'])>0) {
			$p=((($_GET['a'])+($_GET['b'])+($_GET['c']))/2);
			$h=2/($_GET['a'])*(sqrt($p*($p-($_GET['a']))*($p-($_GET['b']))*($p-($_GET['c']))));
			echo  "Результат: ". number_format ($h, 2, ',', ' ');
		}
		else {
			echo "Ошибка! Введено отрицательное или нулевое значение";
		}
		echo "<br>";
	}
	else {
		echo "Ошибка! Введено не числовое значение";
		echo "<br>";
	}
 }
?>
</html>