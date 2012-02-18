<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_htaccess {

    public function __construct()
    {
    }
	public function user_of_htaccess(){
	if($user_htaccess === 1)
	{
		return "index.php";
	}
	elseif($user_htaccess === 0)
	{
		return "";
	}
	elseif($user_htaccess > 2)
	{
		return "ERROR['1']:<br />Se ha dado un valor equivocado en la configuración sobre el uso del archivo '.htaccess'.";
		exit ();
	} else {
		return "ERROR['2']:<br />No se ha determinado si el sitio usa el archivo '.htaccess'.";
		exit ();
	}
	}
}