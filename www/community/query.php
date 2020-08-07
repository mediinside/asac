<?php
include ($_SERVER['DOCUMENT_ROOT'] . "/_init.php");

switch ($jb_code)
{		
	
		
	case "50" :
		$index_page = "page02.html";  	//민동앨범
		break;
		
	
	case "60" :
		$index_page = "page01.html";  	//자유게시판
		break;	


	default :
		$index_page = "page01.html";	// 
		break;
}

$query_page = "query.php";

include $GP -> INC_PATH . "/board_insert.php";
?>