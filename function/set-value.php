<?php 
	
	function setValue($name){
		return (isset($_POST[$name])) ? $_POST[$name] : '';
	}

?>