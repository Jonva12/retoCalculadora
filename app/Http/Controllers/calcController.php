<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcController extends Controller
{
   public function vista(Request $request){
	$nombre = $request->input('nombre');
	return view('VistaCalc', array('nombre'=>$nombre));
	}

	public function calcular(Request $request){
		$nombre = $request->input('nombre');
		$num1 = $request->input('num1');
		$num2 = $request->input('num2');
		$opcion = $request->input('opcion');

		switch ($opcion) {
			case 'Sumar':
				return view('VistaCalc', array('resultado' =>$num1+$num2, 'nombre'=>$nombre));
				break;
			case 'Restar':
				return view('VistaCalc', array('resultado' =>$num1-$num2, 'nombre'=>$nombre));
				break;
			case 'Multiplicar':
				return view('VistaCalc', array('resultado' =>$num1*$num2, 'nombre'=>$nombre));
				break;
			case 'Dividir':
				return view('VistaCalc', array('resultado' =>$num1/$num2, 'nombre'=>$nombre));
				break;
			default:
				return view('VistaCalc', array('nombre'=>$nombre));
				break;
		}
	}
}
