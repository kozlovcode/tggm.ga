<?php 
$request_url = explode('/', $_SERVER['REQUEST_URI']);
$domain = $request_url[1];
$chat = $request_url[2];
$proxy = explode('?', $domain);
header("Location: tg://");
if ($domain) {
	if ($chat) {
		header("Location: tg://join?invite=$chat");
	}elseif($proxy[0] == 'proxy'){
		header("Location: tg://$domain");
	}else{
		header("Location: tg://resolve?domain=$domain");
	}	
}
