<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    
    public	function getLogin(){
    	return view('seguridad.login'); 
    }

    public function postLogin(Request $request){

    	$lUsuario = false;
    	$lPass    = false;

    	if ($request->usuario == "" || $request->usuario == null) {
    		$lUsuario = true;
    	}

    	if ($request->password == "" || $request->password == null) {
    		$lPass = true;
    	}

    	if ($lUsuario || $lPass) {
    		return view('seguridad.login', array('usuario'	=>	$lUsuario, 
    			'password' => $lPass, 'usuValor' => $request->usuario));
    	}

    	return view('plantilla.vistas.home');
    }

}