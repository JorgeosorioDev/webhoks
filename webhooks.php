<?php 

$msg = date('Y-m-d H:i:s'). "\n\n";

$msg .= "_POST:\n";
if(!empty($_POST)){
    $msg .= var_export($_POST, true);
}
$msg .= "\n";

$msg .= "_GET:\n";
if(!empty($_GET)){
    $msg .= var_export($_GET, true);
}
$msg .= "\n";

$msg .= "_PUT:\n";
if(!empty($_PUT)){
    $msg .= var_export($_PUT, true);
}
$msg .= "\n";

$bruto = '';
try {
    $bruto = file_get_contents('php://input');
} catch (Exception $e) {
    $bruto = 'VACIO';
}

$msg .= "php://input (bruto):\n";
if(!empty($bruto)){
    $msg .= var_export($bruto, true);
}
$msg .= "\n";

mail("xxx@xx.com","Información recibida", $msg);

?>
