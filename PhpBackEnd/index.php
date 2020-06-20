<?php

header("Access-Control-Allow-Origin: *");
//header("Access-Control-Allow-Methods: GET, POST,");

//define('PhpBackEnd', 'AulaBanco');
define('PhpBackEnd', 'PhpBackEnd');

/* Função criada para retornar o tipo de requisição */
function checkRequest() {
	$method = $_SERVER['REQUEST_METHOD'];
	switch ($method) {
	  case 'PUT':
	  	$answer = "update";
	    break;
	  case 'POST':	  
	  	$answer = "post";
	    break;
	  case 'GET':
	  	$answer = "get";
	    break;
	  case 'DELETE':
	  	$answer = "delete";
	    break;	
	  default:
	    handle_error($method);  
	    break;
	}
	return $answer;
}

$answer = checkRequest();

// localhost/PhpBackEnd/pessoas
// localhost/PhpBackEnd/conteudo 
// localhost/PhpBackEnd/universidades 

$request = $_SERVER['REQUEST_URI']; 

// IDENTIFICA A URI DA REQUISIÇÃO

$args = explode('/', rtrim($request, '/'));
// localhost/PhpBackEnd/pessoas

// $args[0] localhost
// $args[1] PhpBackEnd
// $args[2] pessoas

$endpoint = array_shift($args);
if (array_key_exists(0, $args) && !is_numeric($args[0])) {
    $verb = array_shift($args);
}

if ($args) {
	$request = '/'.PhpBackEnd.'/'.$args[0];
	// /PhpBackEnd/pessoas
	// /PhpBackEnd/pessoas/1
	// /PhpBackEnd/conteudo
}

switch ($request) {
	case '/'.PhpBackEnd:	
      require __DIR__ . '/api/api.php';
        break;
	case '/'.PhpBackEnd.'/' :		
        require __DIR__ . '/api/api.php';
        break;
    case '' :
        require __DIR__ . '/api/api.php';
        break;
	case '/'.PhpBackEnd.'/pessoas' :		
		require __DIR__ . '/api/'.$answer.'_pessoa.php';
        break;
    case '/'.PhpBackEnd.'/conteudo' :
		require __DIR__ . '/api/'.$answer.'_conteudo.php';								
		break;		
	case '/'.PhpBackEnd.'/universidades' :
		require __DIR__ . '/api/'.$answer.'_universidade.php';								
		break;
	case '/'.PhpBackEnd.'/universidade_pessoas' :
		require __DIR__ . '/api/'.$answer.'_universidade_pessoas.php';								
		break;
    default:
        //require __DIR__ . '/api/404.php';
		break;		
}