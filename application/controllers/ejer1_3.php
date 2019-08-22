<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ejer1_3 extends CI_Controller
{
	public function index()
	{
		$this->load->view('Vejercisios');
	}
	public function ejercicio1()
	{
		
		$numero=rand(1,20);
		if ($numero>10) {
			echo "el numero es mayo que 10 ";
		}
		elseif ($numero<10) {
			echo "el numero es menor que 10 ";
		}
		
	}
	public function ejercicio2()
	{
		$numero=$_POST['fecha'];

		switch ($numero) {
			case '1':
				echo "domingo,1 de septiembre, 2018";
				break;
			case '2':
				echo "lunes,2 de septiembre, 2018";
				break;
			case '3':
				echo "martes,3 de septiembre, 2018";
				break;
			case '4':
				echo "miercoles,4 de septiembre, 2018";
				break;
			case '5':
				echo "jueves,5 de septiembre, 2018";
				break;
			case '6':
				echo "viernes,6 de septiembre, 2018";
				break;
			case '7':
				echo "sabado,7 de septiembre, 2018";
				break;
			case '8':
				echo "domingo,8 de septiembre, 2018";
				break;
			case '9':
				echo "lunes,9 de septiembre, 2018";
				break;
			case '10':
				echo "martes,10 de septiembre, 2018";
				break;
			case '11':
				echo "miercoles,11 de septiembre, 2018";
				break;
			case '12':
				echo "jueves,12 de septiembre, 2018";
				break;
			case '13':
				echo "viernes,13 de septiembre, 2018";
				break;
			case '14':
				echo "sabado,14 de septiembre, 2018";
				break;
			case '15':
				echo "domingo,15 de septiembre, 2018";
				break;
			case '16':
				echo "lunes,16 de septiembre, 2018";
				break;
			case '17':
				echo "martes,17 de septiembre, 2018";
				break;
			case '18':
				echo "miercoles,18 de septiembre, 2018";
				break;
			case '19':
				echo "jueves,19 de septiembre, 2018";
				break;
			case '20':
				echo "viernes,20 de septiembre, 2018";
				break;
			case '21':
				echo "sabado,21 de septiembre, 2018";
				break;
			case '22':
				echo "domingo,22 de septiembre, 2018";
				break;
			case '23':
				echo "lunes,23 de septiembre, 2018";
				break;
			case '24':
				echo "martes,24 de septiembre, 2018";
				break;
			case '25':
				echo "miercoles,25 de septiembre, 2018";
				break;
			case '26':
				echo "jueves,26 de septiembre, 2018";
				break;
			case '27':
				echo "viernes,27 de septiembre, 2018";
				break;
			case '28':
				echo "sabado,28 de septiembre, 2018";
				break;
			case '29':
				echo "domingo,29 de septiembre";
				break;
			case '30':
				echo "lunes,30 de septiembre";
				break;
			default:
				echo "fecha no encontrada";
				break;
		}
	}
	public function ejercicio3()
	{
		$numero1 = rand(-100,100);
		$numero2 = rand(-100,100);
		$numero3= rand(-100,100);
		echo "el primer numero  ", $numero1, "<br><br>"; 
		echo "el segundo numero ", $numero2, "<br><br>";
		echo "el tercer numero ", $numero3, "<br><br>";
		if ($numero1>50) {
			echo " <br> el primere numero es mayor de 50 ";
		}
		elseif ($numero1>20) {
			echo " <br> el primer nummero es mayorque 20";
		}
		elseif ($numero1<0) {
			echo "<br> el primer es negativo";
		}
		if ($numero2 > 50) {
			echo " <br> el segundo numero es mayor de 50 <br>";

		} 
		elseif ($numero2 > 20) {
			echo " <br> el segundo nummero es mayorque 20 <br>";

		} 
		elseif ($numero2 < 0) {
			echo "<br> el segundo es negativo <br>";

		}
		if ($numero3 > 50) {
			echo " <br> el tercer numero es mayor de 50 <br>";

		} 
		elseif ($numero3 > 20) {
			echo " <br> el tercer nummero es mayorque 20 <br>";

		} 
		elseif ($numero3 < 0) {
			echo "<br> el tercer es negativo <br>";

		}
	
	}
}
