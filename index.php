<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP HomeWork 1</title>
	<style>
		body {
			padding-left: 10px;
		}
	</style>
</head>
<body>

<?php

	//Task 1
	echo "Task 1:" . "<br />";
		$day = 1;
		$sec = $day * 24 * 60 * 60;
		echo "Секунд в $day сутках = " . $sec;
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 2
	echo "Task 2:" . "<br />";
		$a = 3;
		echo "Переменная \"а\" = " . $a;
		echo "<br />";
		var_dump($a);
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 3
	echo "Task 3:" . "<br />";
		$a = 10;
		$b = 2;
		echo "$a + $b = " . ($a + $b);
		echo "<br />";
		echo "$a - $b = " . ($a - $b);
		echo "<br />";
		echo "$a * $b = " . ($a * $b);
		echo "<br />";
		echo "$a / $b = " . ($a / $b);
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 4
	echo "Task 4:" . "<br />";
		$c = 15;
		$d = 2;
		$result = $c + $d;
		echo "Переменная \"result\" = " . $result;
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 5
	echo "Task 5:" . "<br />";
		$x = 2;
		$y = 6;
		$z = 9;
		echo "(x+1)4−2(z−2x^2+y^2) = " . ((($x + 1) * 4) - (2 * ($z - (2 * ($x ** 2)) + ($y ** 2))));
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 6
	echo "Task 6:" . "<br />";
		$a = 4;
		$b = 8;
		$c = 3;
		echo "($a + $b) / $c = " . (($a + $b) / $c);
		echo "<br />";
		echo "($a + $c) / $b = " . (($a + $c) / $b);
		echo "<br />";
		echo "($b + $c) / $a = " . (($b + $c) / $a);
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 7
	echo "Task 7:" . "<br />";
		$a = 17;
		$b = 54;
		echo "Cумма 40% первого числа и 84% второго =  " . (($a * 0.4) + ($b * 0.84));
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 8
	echo "Task 8:" . "<br />";
		$a = 10;
		$b = 2;
		$c = 5;
		echo "$a + $b + $c =  " . ($a + $b + $c);
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 9
	echo "Task 9:" . "<br />";
		$a = 17;
		$b = 10;
		$c = $a - $b;
		$d = 7;
		$result = $c + $d;
		echo "Переменная \"result\" = " . $result;
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 10
	echo "Task 10:" . "<br />";
		$text = "Привет, Мир!";
		echo $text;
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 11
	echo "Task 11:" . "<br />";
		$text1 = "Привет, ";
		$text2 = "Мир!";
		echo $text1 . $text2;
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 12
	echo "Task 12:" . "<br />";
		$name = "Стас";
		echo "Привет, $name!";
		echo "<br />";	//или можно так
		echo "Привет, " . $name . "!";
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 13
	echo "Task 13:" . "<br />";
		$age = 24;
		echo "Мне $age лет!";
		echo "<br />";	//или можно так
		echo "Мне " . $age . " лет!";
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 14
	echo "Task 14:" . "<br />";
		$text = "abcde";
		echo $text[0] . ", " . $text[2] . " и " . $text[4];
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 15
	echo "Task 15:" . "<br />";
		$text = "abcde";
		echo $text;
		echo "<br />";
		$text[0] = "!";
		echo $text;
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 16
	echo "Task 16:" . "<br />";
		$num = "12345";
		$sum = $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
		echo "Сумма чисел числа $num = " . $sum;
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 17
	echo "Task 17:" . "<br />";
		$hour = 1;
		$sec = $hour * 60 * 60;
		echo "Секунд в $hour часе = " . $sec;
		echo "<br />";

		$day = 1;
		$sec = $day * 24 * 60 * 60;
		echo "Секунд в $day сутках = " . $sec;
		echo "<br />";

		$mounth = 1;
		$sec = $mounth * 30 * 24 * 60 * 60;
		echo "Секунд в $mounth месяце = " . $sec;
		echo "<br />";

		$year = 1;
		$sec = $year * 12 * 30 * 24 * 60 * 60;
		echo "Секунд в $year годе = " . $sec;
		echo "<br />";

		$y2020 = 2020;
		$y2000 = 2000;
		$year = $y2020 - $y2000;
		$sec = $year * 12 * 30 * 24 * 60 * 60;
		echo "С начала $y2000 г прошло секунд = " . $sec;
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 18
	echo "Task 18:" . "<br />";
		$hour = date("G") + 1;
		$min = date("i");
		$sec = date("s");
		echo "Текущее время: " . $hour . ":" . $min . ":" . $sec;
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 19
	echo "Task 19:" . "<br />";
		$num = 5;
		echo "Квадрат числа $num = " . ($num ** 2);
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 20
	echo "Task 20:" . "<br />";
		$var = 1;
		$var = $var + 12;
		$var = $var - 14;
		$var = $var * 5;
		$var = $var / 7;
		$var = $var + 1;
		$var = $var - 1;
		echo $var;

		echo "<br />";
		$var = 1;
		$var += 12;
		$var -= 14;
		$var *= 5;
		$var /= 7;
		$var++;
		$var--;
		echo $var;
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 21
	echo "Task 21:" . "<br />";
		define("SURNAME", "Vasilevskiy");
		$name = "Stanislav";
		$patronymic = "Viktorovich";
		$age = 24;
		if (defined("SURNAME")){
			echo "Меня зовут " . SURNAME . " (" . $name[0] . ". " .$patronymic[0] . ".).<br /> Мне $age лет.";
		};
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 22
	echo "Task 22:" . "<br />";
		$text = 'Я';
		$text = $text.' хочу';
		$text = $text.' знать';
		$text = $text.' PHP!';
		echo $text;

		echo "<br />";
		$text = "Я";
		$text .= " хочу";
		$text .= " знать";
		$text .= " PHP!";
		echo $text;
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 23
	echo "Task 23:" . "<br />";
		$var = 10;
		$var = $var + 1;
		$var = $var + 1;
		$var = $var - 1;
		echo $var;

		echo "<br />";
		$var = 10;
		$var++;
		$var++;
		$var--;
		echo $var;
	echo "<hr />" . "<br />";
	//-------------------------------------------

	// //Task 24
	// echo "Task 24:" . "<br />";
	// 	echo "Code";
	// echo "<hr />" . "<br />";
	// //-------------------------------------------

?>

</body>
</html>