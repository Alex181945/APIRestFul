<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    
    public	function getLogin(){
    	return view('seguridad.login'); 
    }

    public function postLogin(){
    	return view('plantilla.vistas.home');
    }

}