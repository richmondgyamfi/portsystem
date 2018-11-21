<?php 
	//fuctions to print errors on the screen
function display_errors($errors){
	$display = '<ul class= "bg-success">';
	foreach ($errors as $error) {
		$display .= '<li class="text-danger">' .$error.'</li>';
	}

	$display .= '</ul>';
	return $display;
 }
 ?>