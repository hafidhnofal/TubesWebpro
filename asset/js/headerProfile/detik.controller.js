/*S:lazy load image*/
/*jQuery(document).ready(function() {
    jQuery("img").lazy({
        effect: "fadeIn",
        effectTime: 1000
    });
});*/

/*S:LIQUID IMAGE*/
//liquid image
$(document).ready(function() {
    $(".lqd").imgLiquid();
});
/*E:LIQUID IMAGE*/

/*S:MODALBOX*/
if( $('div.pop_box').attr('id') == 'pop_box_now'){
  	$("body").css('overflow','hidden');
}
else {
	$("body").css('overflow','scroll');
}

$(".box_modal").click(function (){
	if( $('div').attr('id') == 'pop_box_now'){}
	else{	
		var src  = $(this).attr("alt");
		size 	 = src.split('|');
        url    	 = size[0],
        width    = size[1],
        height   = size[2],
        tops	 = 'calc(50% - '+ (height/2) +'px)';
        tops2	 = '-webkit-calc(50% - '+ (height/2) +'px)';

		$("body").append( "<div class='pop_box' id='pop_box_now'><iframe frameborder='0' id='framebox' src=''></iframe></div>" );
		$("#framebox").animate({
			height: height,
			width: width,
		},0).attr('src',url).css('top',tops).css('top',tops2);
		$("body").css('overflow','hidden');
	}
});

$(document).on({
	click: function (){
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
	}},
".box_modal_full");

$(window).load(function(){
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
	$(".box_modal2").click(function (){
		$("#pop_box2").show();
		$("body").css('overflow','hidden');
	});
	function pop_next(src){
		size 	 = src.split('|');
		url    	 = size[0],
		width    = size[1],
		height   = size[2],
		tops	 = 'calc(50% - '+ (height/2) +'px)';
		tops2	 = '-webkit-calc(50% - '+ (height/2) +'px)';
		$("#framebox").animate({
			height: height,
			width: width,
		},0).attr('src',url).css('top',tops).css('top',tops2);
	};
});

function closepop()
{	
	$("#pop_box_now").remove();
	$("#pop_box2").hide();
	$("body").css('overflow','scroll');
};
$(".close_box").click(function (){
	closepop();
});
$(".close_box_in").click(function (){
	parent.closepop();
});
$(".pop_next").click(function (){
	var src = $(this).attr("alt");
	parent.pop_next(src);
});
/*S:MODALBOX*/

// S : Kontroler Untuk TABBING
$("#tab1").idTabs(function(id,list,set){ 
  $("a",set).removeClass("selected") 
  .filter("[href='"+id+"']",set).addClass("selected"); 
  for(i in list) 
	$(list[i]).hide(); 
  $(id).fadeIn(); 
  return false; 
});

$("#tab2").idTabs(function(id,list,set){ 
  $("a",set).removeClass("selected") 
  .filter("[href='"+id+"']",set).addClass("selected"); 
  for(i in list) 
	$(list[i]).hide(); 
  $(id).fadeIn(); 
  return false; 
});

$("#tab3").idTabs(function(id,list,set){ 
  $("a",set).removeClass("selected") 
  .filter("[href='"+id+"']",set).addClass("selected"); 
  for(i in list) 
	$(list[i]).hide(); 
  $(id).fadeIn(); 
  return false; 
});

$("#tab4").idTabs(function(id,list,set){ 
  $("a",set).removeClass("selected") 
  .filter("[href='"+id+"']",set).addClass("selected"); 
  for(i in list) 
	$(list[i]).hide(); 
  $(id).fadeIn(); 
  return false; 
});

$(".idTabs").idTabs(function(id,list,set) {
	$("a",set).removeClass("selected") 
	.filter("[href='"+id+"']",set).addClass("selected"); 
	for(i in list)
		$(list[i]).hide();
		$(id).fadeIn(200);
	return false;
});

// E : Kontroler Untuk TABBING

// S : Kontroler Untuk SUPERFISH
(function($){ //create closure so we can safely use $ as alias for jQuery
	$(document).ready(function(){
		// initialise plugin
		var ddmenu = $('#ddmenu').superfish
	});
})
// E : Kontroler Untuk SUPERFISH

// S:ACCORDION
$(document).ready(function() {
  $("#accordion .title_acc").click(function() {
	if($(this).next("div").is(":visible")) {
	  $("#accordion .title_acc").removeClass("buka");
	  $(this).next("div").slideUp("fast");
	  } else {
	  $("#accordion .box_acc").slideUp("fast");
	  $("#accordion .title_acc").removeClass("buka");
	  $(this).addClass("buka");
	  $(this).next("div").slideToggle("fast");
	}
  });
});
// E:ACCORDION

// S:TOOLTIP
this.tooltip = function(){	
		xOffset1 = 40;
		yOffset1 = 0;		
	$("a.tooltip").hover(function(e){											  
		this.t = this.title;
		this.title = "";									  
		$("body").append("<p id='tooltip'>"+ this.t +"</p>");
		$("#tooltip")
			.css("top",(e.pageY - xOffset1) + "px")
			.css("left",(e.pageX + yOffset1) + "px")
			.fadeIn("fast");		
    },
	function(){
		this.title = this.t;		
		$("#tooltip").remove();
    });	
	$("a.tooltip").mousemove(function(e){
		$("#tooltip")
			.css("top",(e.pageY - xOffset1) + "px")
			.css("left",(e.pageX + yOffset1) + "px");
	});			
};

$(document).ready(function() {
	tooltip();
     $('.tip').tipr();
	 $('.datepick-selected').tipr();
	 
	 $('.tip-top').tipr({
		 mode: 'top'
	 });
	 $('.tip-bottom').tipr({
		 mode: 'bottom'
	 });
	 $('.tip-left').tipr({
		 mode: 'left'
	 });
	 $('.tip-right').tipr({
		 mode: 'right'
	 });
});
// E:TOOLTIP

/*SORTABLE*/
$(function() {
	$('.sortable').sortable();
	$('.handles').sortable({
		handle: 'span'
	});
	$('.connected').sortable({
		connectWith: '.connected'
	});
	$('.exclude').sortable({
		items: ':not(.disabled)'
	});
});
/**/

/*S:STICKY BOX*/
$(document).ready(function(){
	$("#sticky1").sticky({topSpacing:0});
});
/*E:STICKY BOX*/

/*S:DATEPICKER*/
$(function() {
	
	$('.datepick').datepick();
	
	/*SAMPLE DATE SELECTED*/
	var SelectedDates = {};
    SelectedDates[new Date('04/05/2015')] = new Date('04/05/2015');
    SelectedDates[new Date('05/04/2015')] = new Date('05/04/2015');
    SelectedDates[new Date('06/06/2015')] = new Date('06/06/2015');
	
	var SelectedText = {};
    SelectedText[new Date('04/05/2015')] = 'Holiday1';
    SelectedText[new Date('05/04/2015')] = 'Holiday2';
    SelectedText[new Date('06/06/2015')] = 'Holiday3';  
	
	$('#multiInlinePicker').datepick({ 
		multiSelect: 999,
		prevText: 'Prev', nextText: 'Next',
		dateFormat: 'D, M dd, yyyy', 
		altField: '#altOutput',
		multiSeparator: ' -- ',
		onSelect: function(dateText, inst){
			var hiddenDate = $("[name='altInput']").val();
			$("#myDate").html(hiddenDate);
    	},
		beforeShowDay: function(dateText, inst) {
            var Highlight = SelectedDates[dateText];
            var HighlighText = SelectedText[dateText]; 
            if (Highlight) {
                return [true, "Highlighted", HighlighText];
            }
            else {
                return [true, '', ''];
            }
        },
		onDate: function(date, current) { 
			return !current ? {} : 
				{
				/*content: date.getDate() + '<br><sub>' + 
				$.datepick.dayOfYear(date) + '</sub>', */
				dateClass: 'showDoY',
				selectable: true,
				title: 'Event Name'
				}; 
		},
		onShow: $.datepick.hoverCallback(showHover)
		/*onShow: $.datepick.multipleEvents( 
        $.datepick.selectWeek, $.datepick.showStatus)*/
	});
	
	function showHover(date, selectable) { 
    $("#showDate").html(!selectable ? "" :
    	$.datepick.formatDate("D, M dd, yyyy", date) + '<br>');

	}
	
	/*$('#setDates').click(function() {
      var dates = $('#altOutput').val().split(',');
	  var size = $(dates).size();
	  for(x = 0; x < size; x++) {
	  	$("#myDates").append("<a href=''>" + dates[x] + "</a><br>");
	  }
	  x++;
	});*/
	
});

function showDate(date) {
	alert('The date chosen is ' + date);
}

/*E:DATEPICKER*/
