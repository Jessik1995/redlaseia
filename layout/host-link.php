<?php 
	// url dinamyc assets host
	$host = "{$_SERVER['HTTP_HOST']}";
	//main folder project
	$link_project = 'redlaseia/';

	if ($host == 'redlaseia.localhost') {
		$protocol = "http:";
	}else {
		$protocol = "https:";
	}
	// $host_link = $protocol."//{$_SERVER['HTTP_HOST']}/".$link_project;
	// //url  server link
	// $server_link = "{$_SERVER['DOCUMENT_ROOT']}/".$link_project;

	$host_link = $protocol."//{$_SERVER['HTTP_HOST']}/";
	$server_link = "{$_SERVER['DOCUMENT_ROOT']}/";

?>