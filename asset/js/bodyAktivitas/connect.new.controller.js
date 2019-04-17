/*$(document).ready(function() { 
	$('.tip-bottom').tipr({ 
		mode: 'bottom' 
	}); 
});*/

/*S:MODALBOX*/
  $(".box_modal_connect").click(function (){
	  if( $('div').attr('id') == 'pop_box_now'){}
	  else{	
		  $(this).removeAttr('href');
		  var src  = $(this).attr("alt");
		  size 	 = src.split('|');
		  url    	 = size[0],
		  width    = '100%',
		  height   = '100%'
  
		  $("body").append( "<div class='pop_box' id='pop_box_now'><iframe frameborder='0' id='framebox' src=''></iframe></div>" );
		  $("#framebox").animate({
			  height: height,
			  width: width,
		  },0).attr('src',url).css('position','fixed').css('top','0').css('left','0');
		  $("body").css('overflow','hidden');
	  }
	  rescale();
  });
  $(function() {
	  $(".pop_container").wrapInner( "<div id='pop_wrap'></div>" );
	  $('#pop_wrap').css('height',$(window).height());
	  $('#pop_wrap').css('width',$('#pop_wrap').parent('.pop_container').width());
  });
  function rescale(){
	  var size = {width: $(window).width() , height: $(window).height() }
	  $('#pop_wrap').css('height', size.height );
  }
  $(window).bind("resize", rescale);
  $(".box_modal_connect").click(function (){
	  $("#pop_box2").show();
	  $("body").css('overflow','hidden');
  });
  function closepop()
  {	
	  $("#pop_box_now").remove();
	  $("body").css('overflow','scroll');
  };
  $(".close_box").click(function (){
	  closepop();
  });
  $(".close_box_in").click(function (){
	  parent.closepop();
  });
/*S:MODALBOX*/
