<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AlumnoController extends Controller
{
    
    public	function getShow(){
    	return	view('alumno.muestra'); 
    }

}