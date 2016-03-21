<?php
function encrypt($pass)
{
	$pass = md5(crypt($pass,substr($pass,0,2)));
	return $pass;
}

function encode($data)
{
	$key = 'gd222';
	$td = mcrypt_module_open(MCRYPT_RIJNDAEL_256,'',MCRYPT_MODE_CBC,'');
	$iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td),MCRYPT_RAND);
	mcrypt_generic_init($td,$key,$iv);
	$encrypted = mcrypt_generic($td,$data);
	mcrypt_generic_deinit($td);
	
	return $iv . $encrypted;
}
     
function decode($data)
{
	$key = 'gd222';
	$td = mcrypt_module_open(MCRYPT_RIJNDAEL_256,'',MCRYPT_MODE_CBC,'');
	$iv = mb_substr($data,0,32,'latin1');
	mcrypt_generic_init($td,$key,$iv);
	$data = mb_substr($data,32,mb_strlen($data,'latin1'),'latin1');
	$data = mdecrypt_generic($td,$data);
	mcrypt_generic_deinit($td);
	mcrypt_module_close($td);
	 
	return trim($data);
}
