<?php
session_start();

$number_of_page = 6;



for ($i=0; $i < 5 ; $i++) {

	if(!isset($_SESSION['submit0'.$i+1])){

		$_SESSION['submit0'.$i+1] = [
		'sent'=>false,
		'data'=>array()

	];



	}


}

function verif_after_submit($post){
	
	$page=null;

	foreach ($post as $key => $value) {
		if(substr($key, 0, 7)==='submit0'){
			$page=$key;
		}
	}

	if($page!=null){

	verif_data_submit01($post);
		$_SESSION[$page]['sent'] = $post[$page];
		$_SESSION[$page]['data'] = $post;
		$next_page=substr($page, 7,8)+1;
		header('location: http://localhost/tp_php/form0' .$next_page. '.php');

	}



}

function verif_data_submit01($data){
	$table_rules=[
		'submit01'=>[
			'name'=>[
				'type'=>'text', 'min'=>3, 'max'=>25
				],
			'lastname'=>[
				'type'=>'text', 'min'=>3, 'max'=>40
				],
			'mail' => [
				'type' => 'mail'
				]
			]
	];


	foreach ($data as $key => $value) {
		
		if ($table_rules['submit01'][$key]['type'] === 'text') {

			if(strlen($value) < $table_rules['submit01'][$key]['min'] || strlen($value) > $table_rules['submit01'][$key]['max']){
			$_SESSION['submit01']['errors'][$key] = $key.' doit être supérieur à 3 lettres et inférieur à 25';
			header('Location: http://localhost/tp_php/form01.php');
			exit();
			}

		}

		if ($table_rules['submit01'][$key]['type'] === 'mail')

			if (!strpos($value, '@')) {
				echo 'pas bon';die();
			}
		
	}


}

verif_after_submit($_POST);

