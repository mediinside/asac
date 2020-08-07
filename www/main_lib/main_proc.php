<?
	include_once($GP -> CLS."class.jhboard.php");
	include_once($GP -> CLS."class.vote.php");
	$C_Vote = new Vote();	

	//메인 공지사항
	function Main_Notice() {
		global $GP, $C_JHBoard, $C_Func;

		$args = '';
		$args['jb_code'] = "10";
		$args['limit']  = " limit 0,3 ";
		$rst = $C_JHBoard->Board_Main_Data($args);

		$str = "";
		for($i=0; $i<count($rst); $i++) {
			$jb_idx					= $rst[$i]['jb_idx'];
			$jb_code				= $rst[$i]['jb_code'];
			$jb_title 			= $C_Func->strcut_utf8($rst[$i]['jb_title'], 50, true, "...");
			$jb_reg_date 		= date("Y.m.d", strtotime($rst[$i]['jb_reg_date']));		
			
			$url = "";
			if($jb_code == "10") { 
				$url = "/intro/intro05.html?jb_code=" . $jb_code . "&jb_idx=" . $jb_idx; 
			}	
			
			$str .= '
				<li><a href="'.$url.'">
					<span class="title">'.$jb_title.'</span>
					<span class="fbDate">'.$jb_reg_date.'</span>
				</a></li>
			';
		}
		return $str;
	}
	
	
	//투표하기
	function Main_Vote() {
		global $GP, $C_JHBoard, $C_Func, $C_Vote;

		$args = '';
		
		$rtn = $C_Vote->Board_Main_Data_Cnt($args);
		$num_idx = $rtn["cnt"];
		$GP -> MEMBER_CONFIG_LEVEL[$mb_level];
		$args['mb_level'] = "5"; 
		//$args['limit']  = " limit 2,3 ";
		$data = $C_Vote->Vote_Main_List($args);

		$str = "";
		for($i=0; $i<count($data); $i++) {
			$tv_idx				= $data[$i]['tv_idx'];
			$tv_title 			= $C_Func->strcut_utf8($data[$i]['tv_title'], 50, true, "...");
			$tv_regdate 		= date("Y.m.d", strtotime($data[$i]['tv_regdate']));
			$tv_see 			= $C_Func->num_f($data_list[$i]['tv_see']);
			$tv_type			= $data[$i]['tv_type'] == 'Y' ? "종료" : "진행중";

			$str .= '
					<tr>
						<td class="num">' .$num_idx. '</td>
						<td class="subject"><a href="page03_01.html?tv_idx='.$tv_idx.'">'.$tv_title.'</a></td>
						<td class="write_date">'.$tv_regdate.'</td>
						<td class="progress">'.$tv_type.'</td>
						<td class="views">'.$tv_see.'</td>
					</tr>
			';
				$num_idx--;
			
		}

		return $str;
	}
	
	
	
?>
