<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ejer4_6 extends CI_Controller
{
	public function index()
	{
		$this->load->view('Vejercisios');

	}
	public function ejercicio4()
	{
		
		$numero = rand(1,100); 
		echo " el numero es ",$numero, "<br><br><br>";
		if ($numero%2==0) {
			echo " el numero es par ", $numero;
		}
		else {
			echo " el numero es impar ", $numero;
		}
	}
	public function ejercicio5()
	{
		$numero_ale = rand(1,20);
		echo "<h2><b>NUMERO MAYOR O MERO ENTRE </b></h2>";
		if ($numero_ale > 10) {
			echo "el numero es mayo que 10 <br>";
		} 
		elseif ($numero_ale < 10) {
			echo "el numero es menor que 10 <br> ";
		}
		echo "<h2><b>LOS NUMERO PARES</b></h2>";
		for ($i=0; $i < $numero_ale; $i++) { 
			$arr[]=$i;
			//echo $arr[$i], "<br>";
			if ($arr[$i] % 2 == 0) {
				echo " el numero es par ", $arr[$i], "<br>";
			} else {
				echo " el numero es impar ", $arr[$i], "<br>";
			}
		}

	}
	public function ejercicio6()
	{

	if ($_POST) {
		$Num1 = $_POST['1'];
		$Num2 = $_POST['2'];
		$Num3 = $_POST['3'];
		$Num4 = $_POST['4'];
		$Num5 = $_POST['5'];
		$Num6 = $_POST['6'];
		$Num7 = $_POST['7'];
		$Num8 = $_POST['8'];
		$Num9 = $_POST['9'];
		$Num10 = $_POST['10'];
		$Num11 = $_POST['11'];
		$Num12 = $_POST['12'];
		$Num13 = $_POST['13'];
		$Num14 = $_POST['14'];
		$Num15 = $_POST['15'];
		$Num16 = $_POST['16'];
		$Num17 = $_POST['17'];
		$Num18 = $_POST['18'];
		$Num19 = $_POST['19'];
		$Num20 = $_POST['20'];
		$Num21 = $_POST['21'];
		$Num22 = $_POST['22'];
		$Num23 = $_POST['23'];
		$Num24 = $_POST['24'];
		$Num25 = $_POST['25'];
		
	$suma = $Num1+$Num1+$Num2+$Num3+$Num4+$Num5+$Num6+$Num7+$Num8+$Num9+$Num11+$Num12+$Num13+$Num14+$Num15+$Num16+$Num17+$Num18+$Num19+$Num20+$Num21+$Num22+$Num23+$Num24+$Num25;
	$promedio = $suma/25;

	echo "El promedio del salon es: ",$promedio;

}


	

	}
}
 