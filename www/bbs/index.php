<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . "/_init.php";
	include_once $GP -> INC_WWW . '/head.php';
	include_once($GP -> CLS."class.jhboard.php");
	$C_JHBoard = new JHBoard();	
	
	$index_page = "index.php";
	$query_page = "query.php";
	
	if(!$_GET['jb_code']) {
		$jb_code = "40";
	}else{
		$jb_code = $_GET['jb_code'];	
	}

			
	//$_SESSION['suserlevel'] = "9";			
	//$_SESSION['suserid'] = "jhsmh";	
	//$_SESSION['susername'] = "관리자";	
	
	$args = '';
	$args['jb_code'] = $jb_code;
	$db_config_data = $C_JHBoard -> Board_Config_Data($args);
	
	if(!$db_config_data['jba_idx']) {
		die("게시판 설정 에러입니다. 설정부분을 확인해주세요.");
	}
?>
<body class="layout">
<div id="wrap">
	<div id="location">
		<div class="controller">
			<h1 class="current"><?=$db_config_data['jba_title'];?></h1>
		</div>
	</div>
	<div id="container">
		<div id="article" class="admin">
			<!--게시판시작 -->
			<div class="contain"><?php include $GP -> INC_PATH ."/board_inc.php"; ?></div>
			<!-- 게시판끝 -->
		</div>
	</div>
</div>
</body>
</html>

