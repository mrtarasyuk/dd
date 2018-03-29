<?php

$method = $_SERVER['tara-boy@mail.ru'];

//Script Foreach
$c = true;
if ( $method === 'POST' ) {
	$name = trim($_POST["name"]);
	$rolli = trim($_POST["rolli"]);
	$tel  = trim($_POST["tel"]);

	foreach ( $_POST as $key => $value ) {
		if ( $value != "" && $key != "rolli" && $key != "tel" &&  && $key != "name" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
			<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
			<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
		</tr>
		";
	}
}
}