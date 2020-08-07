<?
	include_once($GP -> CLS."class.jhboard.php");
	$C_JHBoard = new JHBoard();	

	//메인 공지사항
	function Main_Notice() {
		global $GP, $C_JHBoard, $C_Func;

		$args = '';
		$args['jb_code'] = "10";
		$args['limit']  = " limit 0,1 ";
		$rst = $C_JHBoard->Board_Main_Data($args);

		$str = "";
		for($i=0; $i<count($rst); $i++) {
			$jb_idx					= $rst[$i]['jb_idx'];
			
			$jb_code				= $rst[$i]['jb_code'];
			
			$jb_title 			= $C_Func->strcut_utf8($rst[$i]['jb_title'], 50, true, "...");
			$jb_reg_date 		= date("Y.m.d", strtotime($rst[$i]['jb_reg_date']));
			$jb_mb_id				= $C_Func->blindInfo($rst[$i]['jb_mb_id'],3);
			$jb_content			= $C_Func->dec_contents_edit($rst[$i]['jb_content']);
			$jb_content			= trim(strip_tags($jb_content));
			$jb_content 		= $C_Func->strcut_utf8($jb_content, 120, false, "...");	//제목 (길이, HTML TAG제한여부 처리)

			
			
			$url = "";
			if($jb_code == "10") { 
				$url = "/info/info01.html?jb_code=" . $jb_code . "&jb_idx=" . $jb_idx; 
			}	
			
			$str .= "
				<p class='date'>" . $jb_reg_date ."</p>
				<p class='txt'>" . $jb_content . "</p>
			";
		}
		return $str;
	}
?>