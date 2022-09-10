<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index ()
    {
        // return view('welcome');

        echo 'kljsdahflksadhflkjsadhlkjhsakldfjh';
    }

    public function getsomething(Request $request){

        $responsehtml="";

        $entrada = $request->input('entrada');
        $salida = $request->input('salida');
        $huespedes = $request->input('huespedes');

        $diff = abs(strtotime($salida) - strtotime($entrada));

        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));


  $responsehtml .= '<table class="table table-hover">';
  $responsehtml .= '<thead>';
  $responsehtml .= '<tr>';
  $responsehtml .= '<th scope="col">Nombre de la habitación:</th>';
  $responsehtml .= '<th scope="col">Régimen alimenticio:</th>';
  $responsehtml .= '<th scope="col">Condiciones de cancelación</th>';
  $responsehtml .= '<th scope="col">Tarifa:</th>';
  $responsehtml .= '</tr>';
  $responsehtml .= '</thead>';
  $responsehtml .= '<tbody>';
  $responsehtml .= '<tr>';
  $responsehtml .= '<td>Mark</td>';
  $responsehtml .= '<td>Otto</td>';
  $responsehtml .= '<td>@mdo</td>';
  $responsehtml .= '</tr>';
  $responsehtml .= '<tr>';
  $responsehtml .= '<td>Jacob</td>';
  $responsehtml .= '<td>Thornton</td>';
  $responsehtml .= '<td>@fat</td>';
  $responsehtml .= '</tr>';
  $responsehtml .= '<tr>';
  $responsehtml .= '<td colspan="2">Larry the Bird</td>';
  $responsehtml .= '<td>@twitter</td>';
  $responsehtml .= '</tr>';
  $responsehtml .= '</tbody>';
  $responsehtml .= '</table>';

        echo $responsehtml;
               
    }

    
}
