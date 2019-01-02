<?php
require_once("../includes/braintree_init.php");
$json_str = file_get_contents('php://input');
//echo ($json_str);
$costumer = json_decode($json_str,TRUE);

print_r( $costumer );
$result = $gateway->customer()->create( $costumer );

//echo $result;

$result->success;
# true

$result->customer->id;
# Generated customer id