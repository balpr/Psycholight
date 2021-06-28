<?php 

$host = 'ec2-35-168-145-180.compute-1.amazonaws.com';
$dbname = 'd5d9ao479npn9u';
$username = 'vqitiqwilsqeqi';
$password = '44fc7f13b3ee737fdacfc088b1238e8f825896170cd03535044ef6b2e9909358';

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

if(!$conn){
	echo "error";
 }
