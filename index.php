<?php 
$request_url = explode('/', $_SERVER['REQUEST_URI']);
$domain = $request_url[1];
$chat = $request_url[2];
header("Location: tg://");
if ($domain) {
	if ($chat) {
		header("Location: tg://join?invite=$chat");
	}else{
		header("Location: tg://resolve?domain=$domain");
	}	
}
