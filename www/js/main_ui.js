fn.init = function(){
	var overlay = $('<div class="overlay"/>');
	overlay.append('<ul class="list"></ul>');
	$('#wrap.main').prepend(overlay);
	$('#main-visual').find('.swiper').children('li').not('.bx-clone').each(function(eq,el){
		var txt = $(el).find("div.background_txt").html();
		var row = $('<li />').css({'background-image':'url('+$(el).find('img').attr('src')+')'}).html(txt);

		overlay.children('.list').append(row);
		overlay.children('.list li').append(txt);
	});
	overlay.children('.list').children('li').eq(0).addClass('active');
}
slider.mainVisualInit = function(wrap,el,ol,nl){
	var row = $('#wrap.main').children('.overlay').find('li').removeClass('active');
	row.eq(nl).addClass('active');
}


