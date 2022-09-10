<?php

namespace App\Http\Controllers;

use App\Models\hotel;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index(Request $request){

        $responsehtml="";

        $entrada = $request->input('entrada');
        $salida = $request->input('salida');
        $huespedes = $request->input('huespedes');

        $diff = abs(strtotime($salida) - strtotime($entrada));

        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

        $data = new hotel;
        $objalldata = $data->getAll();

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

  

        foreach ($objalldata as $obj) 

        {

        
          
          $responsehtml .= '<tr>';
          $responsehtml .= '<td> '.$obj->name.' </td>';
          $responsehtml .= '<td>'.$obj->regimen.'</td>';
          $responsehtml .= '<td>'.$obj->condicionescancelacion.'</td>';
          $responsehtml .= '<td>'.$obj->tarifa.'</td>';

          $responsehtml .= '</tr>';


        }

  
        $responsehtml .= '</tbody>';
        $responsehtml .= '</table>';


         echo $responsehtml;
               
    }

    
}
