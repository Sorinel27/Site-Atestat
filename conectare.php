<?php
	
$conectare = mysqli_connect('localhost', 'root', '', 'bestpcs_data');
	if(!$conectare)
{
		die(mysqli_connect_error());
}
