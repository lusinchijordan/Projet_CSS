<?php
session_start();
//session_destroy();

$current_page=$_SERVER['REQUEST_URI'];

$form_position=strpos($current_page, 'form0');


$page_number = substr($current_page, $form_position+5, 1);

if($page_number>1){


	for ($i=1; $i < $page_number; $i++) {

		if(!isset($_SESSION['submit0'.$i]) || $_SESSION['submit0'.$i]['sent']==false){
		echo 'petit malin';
		die();

		}

	}



}





