function popupAction(obj){
	var $this = $(obj);
	var $popup = $this.parents('.landing_contact').find('.informationWrap');
	$popup.toggleClass('on');
}

$(function() {

		var winWidth = $(window).width();
		if ( winWidth < 1024 ){
			//console.log('mobile');
			$('.informationWrap').removeClass('on');
			$(window).on('scroll', function (){
				if ( $(window).scrollTop() > 100 ){
					$('.mobileFixBtn').addClass('show');
				}else{
					$('.mobileFixBtn').removeClass('show');
				}
			})
			/*
			$('.landing_body .phone').on('click', function(){
				if ( $('.informationWrap').hasClass('on') ){
					$('.informationWrap').removeClass('on');
				}else{
					$('.informationWrap').addClass('on');
				}
			});
			*/
		}else {
			//console.log('pc');
			$('.ct1 .ctTxt').addClass('showV');
			$(window).on('scroll', function (){
				var winScroll = $(window).scrollTop(),
						  ct2 = $('.ct2'),
						  ct3 = $('.ct3'),
						  ct4 = $('.ct4'),
						  ct5 = $('.ct5'),
						  ct6 = $('.ct6'),
						  ct7 = $('.ct7'),
						  ct8_1 = $('.ct8-1'),
						  ct8_2 = $('.ct8-2'),
						  ct9 = $('.ct9');
			
				if( winScroll > ct2.offset().top - $(window).height()*0.5 && winScroll < ct2.offset().top + ct2.outerHeight()/2 ){
					ct2.find('.ctTxt').addClass('showH');
				}else if( winScroll > ct3.offset().top - $(window).height()*1.5 && winScroll < ct3.offset().top + ct3.outerHeight()/2 ){
					ct3.find('.ctTxt').addClass('showV');
				}else if( winScroll > ct4.offset().top - $(window).height()*1.5 && winScroll < ct4.offset().top + ct4.outerHeight()/2 ){
					ct4.find('.ctTxt').addClass('showH');
					ct4.find('.ctTxt_ksh').addClass('showH');
				}else if( winScroll > ct5.offset().top - $(window).height()*0.5 && winScroll < ct5.offset().top + ct5.outerHeight()/2 ){
					ct5.find('.ctTxt').addClass('showH');
					ct5.find('.ctTxt_ksh').addClass('showH');
				}else if( winScroll > ct6.offset().top - $(window).height()*0.5 && winScroll < ct6.offset().top + ct6.outerHeight()/2 ){
					ct6.find('.ctTxt').addClass('showH');
					//ct6.find('.ctTxt').addClass('showV');
				}else if( winScroll > ct7.offset().top - $(window).height()*0.5 && winScroll < ct7.offset().top + ct7.outerHeight()/2 ){
					ct7.find('.ctTxt').addClass('showH');
				}else if( winScroll > ct8_1.offset().top - $(window).height()*0.5 && winScroll < ct8_1.offset().top + ct8_1.outerHeight()/2 ){
					ct8_1.find('.ctTxt').addClass('showV');
					ct8_2.find('.ctTxt').addClass('showH');
				}else if( winScroll > ct9.offset().top - $(window).height()*1.5 && winScroll < ct9.offset().top + ct9.outerHeight()/2 ){
					ct9.find('.ctTxt').addClass('showV');
				}
			});
		}	

});
	