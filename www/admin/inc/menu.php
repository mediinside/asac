<?php
// Dedc : admin 메뉴 Array
// Writer :
$GP -> MENU_ADMIN = array(
		array("tab"=>"1",			"folder"=>"main", 			"name"=>"관리자정보",			"link"=> "/admin/main/adm_info.php?m_tab=1"),
		array("tab"=>"2",			"folder"=>"bbs", 			"name"=>"게시판관리",			"link"=> "/admin/bbs/bbs_list.php?m_tab=2"),
		array("tab"=>"3",			"folder"=>"nonpay", 		"name"=>"비급여관리",			"link"=> "/admin/nonpay/nonpay_list.php?m_tab=3"),
//		array("tab"=>"3",			"folder"=>"cms", 			"name"=>"CMS관리",				"link"=> "/admin/cms/cms_list.php?m_tab=3"),
//		array("tab"=>"4",			"folder"=>"member", 		"name"=>"회원관리",				"link"=> "/admin/member/mem_list.php?m_tab=4"),	
//		array("tab"=>"5",			"folder"=>"vote", 			"name"=>"투표관리",				"link"=> "/admin/vote/vote_list.php?m_tab=5"),	
//		array("tab"=>"6",			"folder"=>"patriot", 		"name"=>"열사/동문관리",		"link"=> "/admin/patriot/pt_list.php?m_tab=6"),	
//		array("tab"=>"7",			"folder"=>"tag", 			"name"=>"태그관리",				"link"=> "/admin/tag/tag_list.php?m_tab=7"),		
//		array("tab"=>"8",			"folder"=>"slide", 			"name"=>"슬라이드관리",			"link"=> "/admin/slide/slide_list.php?m_tab=8"),
//		array("tab"=>"9",			"folder"=>"online", 		"name"=>"예약관리",				"link"=> "/admin/online/reserve_list.php?m_tab=9"),
//		array("tab"=>"10",			"folder"=>"phone", 			"name"=>"이용문의관리",			"link"=> "/admin/phone/phone_list.php?m_tab=10"),
		array("tab"=>"11",			"folder"=>"popup", 			"name"=>"팝업관리",				"link"=> "/admin/popup/popup_list.php?m_tab=11"),
//		array("tab"=>"12",			"folder"=>"sms", 			"name"=>"SMS관리",				"link"=> "/admin/sms/sms_send.php?m_tab=12"),
		array("tab"=>"13",			"folder"=>"analytics", 		"name"=>"통계관리",				"link"=> "/admin/analytics/day_visit.php?m_tab=13")
);


$GP -> MENU_SUB_ADMIN = array();

$GP -> MENU_SUB_ADMIN['main'] = array(
	"시스템관리"   => array(
		array("tab"=>"1",		"title"=>"main1",		"name"=>"관리자 정보",		"link"=>  "/admin/main/adm_info.php"),
		array("tab"=>"2",		"title"=>"main2",		"name"=>"권한 정보",			"link"=>  "/admin/main/adm_auth.php"),
	)
);

$GP -> MENU_SUB_ADMIN['bbs'] = array(
	"게시판관리"   => array(
		array("tab"=>"1",		"title"=>"bbs1",		"name"=>"게시판 리스트",				"link"=>  "/admin/bbs/bbs_list.php"),
	)
);

$GP -> MENU_SUB_ADMIN['cms'] = array(
	"게시판관리"   => array(
		array("tab"=>"1",		"title"=>"cms1",		"name"=>"CMS 관리",				"link"=>  "/admin/cms/cms_list.php"),
	)
);

$GP -> MENU_SUB_ADMIN['member'] = array(
	"회원관리"   => array(
		array("tab"=>"1",	"title"=>"member1",		"name"=>"회원 리스트",							"link"=>  "/admin/member/mem_list.php"),
		array("tab"=>"2",	"title"=>"member2",		"name"=>"탈퇴회원 리스트",						"link"=>  "/admin/member/mem_out_list.php"),
		array("tab"=>"3",	"title"=>"member3",		"name"=>"휴먼계정 발송전 리스트",				"link"=>  "/admin/member/mem_hu_list.php"),
		array("tab"=>"4",	"title"=>"member4",		"name"=>"휴먼계정 발송후 리스트",				"link"=>  "/admin/member/mem_hu_end_list.php"),

	)
);

$GP -> MENU_SUB_ADMIN['vote'] = array(
	"투표관리"   => array(
		array("tab"=>"1",	"title"=>"vote1",		"name"=>"투표 정보",			"link"=>  "/admin/vote/vote_list.php"),
		array("tab"=>"2",	"title"=>"vote2",		"name"=>"투표 내역",			"link"=>  "/admin/vote/vote_mem_list.php"),
	)
);


$GP -> MENU_SUB_ADMIN['patriot'] = array(
	"게시판관리"   => array(
		array("tab"=>"1",		"title"=>"patriot1",		"name"=>"열사/동문 정보",				"link"=>  "/admin/patriot/pt_list.php"),
	)
);


$GP -> MENU_SUB_ADMIN['tag'] = array(
	"태그관리"   => array(
		array("tab"=>"1",	"title"=>"tag1",		"name"=>"태그 정보",			"link"=>  "/admin/tag/tag_list.php"),
	)
);

$GP -> MENU_SUB_ADMIN['slide'] = array(
	"슬라이드관리"   => array(
		array("tab"=>"1",	"title"=>"slide1",		"name"=>"슬라이드 정보",			"link"=>  "/admin/slide/slide_list.php"),
	)
);




$GP -> MENU_SUB_ADMIN['phone'] = array(
	"이용문의관리"   => array(
		array("tab"=>"1",	"title"=>"phone1",	"name"=>"이용문의신청정보",			"link"=>  "/admin/phone/phone_list.php"),
	)
);


$GP -> MENU_SUB_ADMIN['nonpay'] = array(
	"비급여관리"   => array(
	  array("tab"=>"1",		"title"=>"nonpay1",		"name"=>"비급여 리스트",			"link"=>  "/admin/nonpay/nonpay_list.php"),		
	)
);

$GP -> MENU_SUB_ADMIN['popup'] = array(
	"팝업관리"   => array(
		array("tab"=>"1",	"title"=>"popup1",		"name"=>"팝업 리스트",				"link"=>  "/admin/popup/popup_list.php"),
	)
);

$GP -> MENU_SUB_ADMIN['sms'] = array(
	"SMS관리"   => array(
		array("tab"=>"1",	"title"=>"sms1",	"name"=>"SMS 발송",					"link"=>  "/admin/sms/sms_send.php"),										 
		array("tab"=>"2",	"title"=>"sms2",	"name"=>"SMS 설정",					"link"=>  "/admin/sms/sms_setup.php"),		
		array("tab"=>"3",	"title"=>"sms3",	"name"=>"SMS 발송리스트",		"link"=>  "/admin/sms/sms_send_list.php"),
		array("tab"=>"4",	"title"=>"sms4",	"name"=>"SMS 그룹관리",			"link"=>  "/admin/sms/sms_grouplist.php"),
		array("tab"=>"5",	"title"=>"sms5",	"name"=>"SMS 회원관리",			"link"=>  "/admin/sms/sms_memlist.php"),
	)
);


$GP -> MENU_SUB_ADMIN['analytics'] = array(
	"통계관리"   => array(	
		array("tab"=>"1",	"title"=>"analytics1",	"name"=>"일별 통계",				"link"=>  "/admin/analytics/day_visit.php"),
		array("tab"=>"2",	"title"=>"analytics2",	"name"=>"월별 통계",				"link"=>  "/admin/analytics/month_visit.php"),
		array("tab"=>"3",	"title"=>"analytics3",	"name"=>"년별 통계",				"link"=>  "/admin/analytics/year_visit.php"),		
		array("tab"=>"4",	"title"=>"analytics4",	"name"=>"Agent 통계",				"link"=>  "/admin/analytics/Agent.php"),
		array("tab"=>"5",	"title"=>"analytics5",	"name"=>"기타 통계",				"link"=>  "/admin/analytics/OS.php"),
	)
);


?>