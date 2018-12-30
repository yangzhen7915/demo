<?php 
	$arr = array('jack','rose','hady');
	$name = $_POST['name'];
	$bool = in_array($name,$arr);
	echo $bool?'不可用':'可用';

 ?>