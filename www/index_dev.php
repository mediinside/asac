<?php
	include_once  './_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$page_title = "아삭치과";
	include_once $GP -> INC_WWW . '/head.php';
?>
<script type="text/javascript" src="/js/main_ui.js"></script>
<style>



</style>
</head>
<body>
<div id="wrap" class="main">
	<div id="main">
		<div class="display">
			<?php include_once $GP -> INC_WWW . '/header.php';?>
			<div id="container">
				<div id="main-visual">
					<div class="contain">
						<ul class="swiper" data-mode="fade" data-auto="true" data-auto-controls="true" data-controls="true" data-pager-type="short" data-pager="true" data-on-slide-before="slider.mainVisualInit">
							<li>
								<div class="background">
									<img src="/public/img/bg-main-visual-01.jpg" alt="" class="block" />
									<div class="background_txt">
										<p>
											<span class='bg_text notosan fw300 fz44'>연세대학교 치과보철과 출신 전문의</span>
											<span class='bg_text notosan fw500 fz58'>대표원장 황찬현</span>
										</p>
									</div>
								</div>
								<div class="contain">
									<p>
										<span class="text-slim">“보건복지부 인증 치과보철과”</span> <br />
										<strong class="text-white">전문의 황찬현원장</strong>
									</p>
								</div>
							</li>
							<li>
								<div class="background">
									<img src="/public/img/bg-main-visual-02.jpg" alt="" class="block" />
									<div class="background_txt">
										<p>
											<span class="bg_text nanummyeongjo fz55">아삭치과의 목표는</span>
											<span class="bg_text nanummyeongjo fz55">환자의 건강과 만족입니다.</span>
										</p>
									</div>

								</div>
								<div class="contain">
									<p>
										<span class="text-slim">“씹는 즐거움”</span> <br />
										<strong class="text-white">아삭아삭! 아삭치과</strong>
									</p>
								</div>
							</li>
							<li>
								<div class="background">
								<img src="/public/img/bg-main-visual-03.jpg" alt="" class="block" />
								<div class="background_txt">
									<p>
										<span class="bg_text nanummyeongjo fz55">합리적인 비용으로</span>
										<span class="bg_text nanummyeongjo fz55">최고의 재료와 기술력을 제공합니다.</span>
									</p>
								</div>
								</div>
								<div class="contain">
									<p>
										<span class="text-slim">“부담은 줄이고, 믿음은 더하겠습니다.”</span> <br />
										<strong class="text-white">착한가격 정찰제</strong>
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div id="main-quick">
					<div class="panel">
						<ul class="row">
							<li><a href="/intro/page01.html#promise"><i class="ip-icon-philosophy"></i><span>아삭치과의 약속</span></a></li>
							<li><a href="/intro/page02.html"><i class="ip-icon-medic"></i><span>의료진소개 </span></a></li>
							<li><a href="intro/page03.html"><i class="ip-icon-guide"></i><span>진료안내/진료시간</span></a></li>
						</ul>
						<ul class="row">
							<li><a href="/intro/page04.html"><i class="ip-icon-location"></i><span>오시는길</span></a></li>
							<li><a href="/conscience/page01.html"><i class="ip-icon-recommend"></i><span>착한가격정찰제</span></a></li>
							<li><a href="/toothy/page01.html"><i class="ip-icon-toothy"></i><span>자연치아살리기</span></a></li>
						</ul>
						<ul class="row">
							<li><a href="/conserv/page01.html"><i class="ip-icon-conservation"></i><span>보존치료</span></a></li>
							<li><a href="/implant/page01.html"><i class="ip-icon-implant"></i><span>임플란트</span></a></li>
							<li><a href="/aesthetic/page01.html"><i class="ip-icon-aesthetic"></i><span>심미치료</span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<?php include_once $GP -> INC_WWW . '/footer.php';?>
		</div>
	</div>
</div>
    	<?
		//팝업관련 꼭 넣어주세요
		$mobile_agent = '/(iPod|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS)/';
		$pop_gubun = "D";

		// preg_match() 함수를 이용해 모바일 기기로 접속하였는지 확인
		if(preg_match($mobile_agent, $_SERVER['HTTP_USER_AGENT'])) {
			 include $_SERVER[DOCUMENT_ROOT]."/popup/popup_layer.php";
		}else{
			 include $_SERVER[DOCUMENT_ROOT]."/popup/popup_script.php";
		}
	?>
</body>
</html>