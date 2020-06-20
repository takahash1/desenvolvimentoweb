<?php
include __DIR__.'/../control/Universidade_pessoasControl.php';
$universidade_pessoasControl = new Universidade_pessoasControl();

header('Content-type: application/json');

if (!isset($args[1])) {
	$result = $universidade_pessoasControl->findAll();
	if ($result) {
		http_response_code(200);
		echo json_encode($result);
	}
	else {
		http_response_code(400);
		echo json_encode(array("mensagem" => "Não encontrado"));
	}
}
else {
	$result = $universidade_pessoasControl->find($args[1]);
	if ($result) {
		http_response_code(200);
		echo json_encode($result);
	}
	else {
		http_response_code(400);
		echo json_encode(array("mensagem" => "Não encontrado"));
	}	
}
?>