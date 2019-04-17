
/*S:MODALBOX*/
    
     $(".box_modal_connect").click(function (){
      if( $('div').attr('id') == 'pop_box_now'){}
      else{ 
          $(this).removeAttr('href');
          var src  = $(this).attr("alt");
          size   = src.split('|');
          url        = size[0],
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
/*E:MODALBOX*/
// sticky box discussion
$().ready(function() {
	var $scrollingDiv = $("#scrollingDiv");

	$(window).scroll(function(){			
		$scrollingDiv
			.stop()
			.animate({"marginTop": ($(window).scrollTop() + 30) + "px"}, "fast" );			
	});
});

// sticky box selector
$(function() {
    var $clingifyTarget = $('.filtera'),
        $parent = $('.main_content'),
        matchWidths = function($elem) {
            $elem.width($parent.width());
        };

    $clingifyTarget.clingify({
        locked : function() {
            matchWidths($clingifyTarget);
        },
        resized : function() {
            matchWidths($clingifyTarget);
        }
    });
});
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

firstTime = getCookie('hideNotif');
idLogged = $("#hide").attr('data-id');
if (firstTime == idLogged)
  $("div").remove('.bx_nt');

// hide box
$( "#hide" ).click(function() {
  var id = $(this).attr('data-id');
  $( "div" ).remove(".bx_nt");
  setCookie('hideNotif', id, 300); // 300days
});

//toggleDiscuss
/*$("a").click(function(){
   var myelement = $(this).attr("href")
    $(myelement).slideToggle("slow");
    $(".toggle:visible").not(myelement).hide("slow");
  });
  
*/

$(document).ready(function(){ 
	$(".acc_discuss .discuss_drop:first").addClass("active"); 
	$(".acc_discuss .tog_content").hide(); 
	$(".acc_discuss .discuss_drop").click(
		function(){ 
		$(this).next(".tog_content").slideToggle("slow") .siblings(".tog_content:visible").slideUp("slow"); 
		$(this).toggleClass("active"); $(this).siblings(".discuss_drop").removeClass("active"); 
	}); 
}); 


//dropdown menu 
$('.more').mouseover(function() {
	$('.dropdown-menu').fadeIn(100);
	$('.dropdown-menu').addClass('aktif');
}); 
$('.more').mouseleave(function() {
	$('.dropdown-menu').fadeOut(100);
	$('.dropdown-menu').removeClass('aktif');
});


$(document).ready(function()
{
    $(".edit").click(function(){
        var element = $(this);
        var I = element.attr("id");
        $(".user_edit"+I).hide();
        $("#form"+I).show();
        $(this).show("active");
        $("#form"+I+" input:first").focus();
        return false;
    });
    $(".btn_sbmt").click(function(){
        var element = $(this);
        var I = element.attr("id");
        $(".user_edit"+I).show();
        $("#form"+I).hide();
        $(this).show("active");
        return false;
    });
    $("#form2").on('click', '.cncl', function(){
      var element = $(this);
      var I = element.attr("data-id");
      $(".user_edit"+I).show();
      $("#form"+I).hide();
      return false;
    })
}); 