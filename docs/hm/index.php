<?php
ini_set('allow_url_fopen', 1);

mb_http_output('utf8');

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);	//言語設定を得る（jaなら日本語環境）
if ($lang=="ja") {
	include('./hm.html');
}
else {
	include('./hme.html');
}

?>

