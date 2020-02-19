<?php
ob_start();
@session_start();
session_cache_expire(180000); 
date_default_timezone_set('America/Sao_Paulo');


$db = new DB();
foreach($_POST as $nome_campo => $valor){	

	if(!is_array($valor)){			
		$valor = str_replace("'",'',$valor);
		$valor = str_replace('"','',$valor);
		$valor =$db->escape(addslashes($valor));			
		$comando = "$" . $nome_campo . '="' . $valor . '";';
		eval($comando);	
	}	
}

//Recebe as variaveis do GET - PERMITINDO APENAS NUMEROS
	foreach($_GET as $nome_campo => $valor){	
		$comando = "\$" . $nome_campo . "='" . $valor . "';";
		eval($comando);
	}


function valores($valor){
	
	return number_format($valor,2,",",".")	;	
	
}


function status_pedido($status, $tipo){

	if($status=='CREATED'){
		$xeps = 'CRIADO E AGUARDANDO';
		$cor = '#f0ad4e';
	}

	if($status=='WAITING'){
		$xeps = 'AGUARDANDO CONFIRMAÇÃO DE PAGAMENTO';
		$cor = '#f0ad4e';
	}

	if($status=='IN_ANALYSIS'){
		$xeps = 'PAGAMENTO EM ANALÍSE';
		$cor = '#f0ad4e';
	}

	if($status=='PRE_AUTHORIZED' || $status=='AUTHORIZED'){
		$xeps = 'PAGAMENTO AUTORIZADO PELO CARTÃO';
		$cor = '#5cb85c';
	}

	if($status=='CANCELLED'){
		$xeps = 'PAGAMENTO CANCELADO';
		$cor = '#d9534f';
	}	


	if($status=='REFUNDED'){
		$xeps = 'PAGAMENTO REEMBOLSADO';
		$cor = '#d9534f';
	}	

	if($status=='REVERSED'){
		$xeps = 'PAGAMENTO EXTORNADO';
		$cor = '#d9534f';
	}	

	if($status=='SETTLED'){
		$xeps = 'PAGAMENTO CONCLUÍDO';
		$cor = '#5cb85c';
	}	


	if($tipo==1){
		return $xeps;
	} else {
		return $cor;
	}

}



function data_mysql_para_user($y){
	if ($y != ''){
		$data_inverter = explode("-",$y);
		$x = $data_inverter[2].'/'. $data_inverter[1].'/'. $data_inverter[0];
		return $x;
	}else{
		return '';
}
}


function data_user_para_mysql($y){
	if ($y != ''){
		$data_inverter = explode("/",$y);
		$x = $data_inverter[2].'-'. $data_inverter[1].'-'. $data_inverter[0];
		return $x;
	}else{
		return '';
}
}




function envia_email_ok($email,$mensagem,$assunto){
				
	$mail = new PHPMailer;	
	//$mail->SMTPDebug =1;                 	
	//$mail->isSMTP();                    
	$mail->Host = 'srv74.prodns.com.br';  
	$mail->SMTPAuth = true;                             
	$mail->Username = 'site@sisconnection.com.br';
	$mail->Password = 'a1b2c3d4';                      
	$mail->SMTPSecure = 'tls';                         
	$mail->Port = 587;                                 
	
	$mail->setFrom('site@sisconnection.com.br', 'MADALU');
	$mail->addAddress($email); 	
	$mail->isHTML(true);                              
	
	$mail->Subject = $assunto;
	$mail->Body    = $mensagem;
	$mail->send();	
}


function normaliza($str){
	
	
	$str = preg_replace('/[áàãâä]/ui', 'a', $str);
    $str = preg_replace('/[éèêë]/ui', 'e', $str);
    $str = preg_replace('/[íìîï]/ui', 'i', $str);
    $str = preg_replace('/[óòõôö]/ui', 'o', $str);
    $str = preg_replace('/[úùûü]/ui', 'u', $str);
    $str = preg_replace('/[ç]/ui', 'c', $str);
    $str = preg_replace('/[,(),;:|!"#$%&=?~^><ªº-]/', '-', $str);
    $str = preg_replace('/[^a-z0-9]/i', '-', $str);
    $str = preg_replace('/_+/', '-', $str); // ideia do Bacco :)
	$str = str_replace('<br>','', $str); // ideia do Bacco :)
	$str = strip_tags($str);
	$str = strtolower($str);
		
	$string = $str.'.html';		
		
	
	
	
	return $string; //finaliza, gerando uma saída para a funcao
	}
	
	
	
	function Mask($mask,$str){

    $str = str_replace(" ","",$str);

    for($i=0;$i<strlen($str);$i++){
        $mask[strpos($mask,"#")] = $str[$i];
    }

    echo $mask;

}
	
?>