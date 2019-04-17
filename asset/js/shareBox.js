$(document).ready(function () {
    shareBox.includeFb();

    $('.img_sos').find('a').click(function(e) {
		if ($(this).hasClass('noshare')) {
			var skip;
		}
		else {
			shareBox.addShare(this);
			e.preventDefault();
		}
    });
});

var shareBox = {
	num_share : 0,
	fbLoaded : false,
    regShare : function(elm) {
        shareBox.addShare(elm);
        return false;
    },
	windowOptions : "scrollbars=yes,resizable=yes,toolbar=no,location=yes",
	facebook : function (data) {
		var _url	= 'http://www.facebook.com/share.php?u=|u|';
		_url = _url.replace('|u|',data.pageUrl).replace('|t|',data.pageTitle).replace('|d|',data.pageDesc).replace('|140|',data.pageTitle.substring(0,130));
		window.open(_url,shareBox.windowOptions, 'width=640, height=528');
	},
	twitter : function (data) {
		var twAPI = "https://twitter.com/intent/tweet",
	    title = encodeURIComponent(data.pageTitle),
	    url = encodeURIComponent(data.pageUrl);
		$.getJSON("http://detik.id/?"+url+"&detkjsonpcb=?", function(data){
			var data_url = data.result;

			window.open(twAPI+"?text="+title+"&url="+encodeURIComponent(data_url),
				shareBox.windowOptions, "width=550,height=320"
			);
		});
	},
	gplus : function (data) {
		var _url	= 'https://plusone.google.com/_/+1/confirm?url='+encodeURIComponent(data.pageUrl)+'&title='+encodeURIComponent(data.pageTitle);
		window.open(_url,shareBox.windowOptions, 'width=640, height=528');
	},
	fb_copy : function (data) {
        var obj = {
			method: 'feed',
			display: 'popup',
			link: data.pageUrl,
			picture: data.pageImage,
			name: data.pageTitle,
			// caption: data.pageDesc,
      caption: data.pageUrl, 
			description: '',
		};

		function callback(response) {
		  if (response && response.post_id) {
			jQuery.ajax({
			  type: "GET",
			  async: true,
			  cache: false,
			  dataType: 'jsonp',
			  jsonp: false,
			  jsonpCallback: 'track',
			  url: 'https://connect.detik.com/share/track?url='+data.pageUrl+'&service=facebook&clientId=21&token=0bcd238282d290b2122b566199e02ca4',
			  success: function (res, st, xhr) {},
			  error: function (xhr, ajaxOptions, thrownError) {}
			});
		  }

		  console.log('sukses fb');
	  }

        //FB.ui(obj);
        FB.ui(obj, callback);
	},
    addShare : function(elm) {
		var url_ex = $(elm).attr('data-url');
		if (url_ex.substr(0, 2) == '//')
			url_ex = 'http:'+url_ex;

        var data = {
            pageUrl : url_ex,
            pageTitle	: $(elm).attr('data-title'),
            pageDesc	: $(elm).attr('data-desc'),
            pageImage   : $(elm).attr('data-image')
        }
		if (!data.pageImage) {
			data.pageImage = baseurl+'images/default-43.gif?w=300';
		}

        if ($(elm).attr('class') == 'fb') {
            shareBox.fb_copy(data);
        }
        else if ($(elm).attr('class') == 'tw') {
            shareBox.twitter(data);
        }
        else if ($(elm).attr('class') == 'gplus') {
            shareBox.gplus(data);
        }

        return false;
    },
	addCounter : function(elm) {
		var url_ex = $(elm).attr('data-url');
		if (url_ex.substr(0, 1) == '//')
			url_ex = 'http:'+url_ex;

		var data = {
            pageUrl : url_ex,
            pageTitle	: $(elm).attr('data-title'),
            pageDesc	: $(elm).attr('data-desc'),
            pageImage   : $(elm).attr('data-image')
        }

		if($(elm).hasClass('fb')) {
			shareBox.countFB(elm);
			$(elm).click(function(e) {
				shareBox.fb_copy(data);
				e.preventDefault();
			});
		}
		else if ($(elm).hasClass('tw')) {
			shareBox.countTW(elm);
			$(elm).click(function(e) {
				shareBox.twitter(data);
				e.preventDefault();
			});
		}
		else if ($(elm).hasClass('gplus'))  {
			shareBox.countGplus(elm);
			$(elm).click(function(e) {
				shareBox.gplus(data);
				e.preventDefault();
			});
		}
		else if ($(elm).hasClass('comm')) {
			shareBox.countComment(elm);
			$(elm).click(function(e) {
				var divtop = parseInt($('#thecomment').offset().top) - parseInt(46);
				var dt_plus	= divtop + 200;

				$('html, body').animate({ scrollTop: dt_plus }, 600);
				setTimeout(function(){
					$('html, body').animate({ scrollTop: divtop }, 800);
				}, 500);


				return false;
			});
		}
	},
	countFB : function (elm) {
        var pageUrl	= $(elm).attr('data-url');

		FB.api({
			method: 'fql.query',
			query:'SELECT share_count FROM link_stat WHERE url = "'+pageUrl+'"'
		}, function(data) {
			$(elm).find('span').html(data[0].share_count);

			// update total share
			var total_share = $(elm).closest('.share_top').find('.total_share');
			if (typeof $(total_share) !== 'undefined') {

				var num = $(total_share).find('span').html();
				num = parseInt(num) + parseInt(data[0].share_count);
				$(total_share).find('span').html(num);
			}
		});
	},
	countTW : function (elm) {
		var pageUrl	= $(elm).attr('data-url');

		var tweets;
        $.getJSON('http://urls.api.twitter.com/1/urls/count.json?url=' + pageUrl + '&callback=?', function(data){
            tweets = data.count;
			$(elm).find('span').html(tweets);

			// update total share
			var total_share = $(elm).closest('.share_top').find('.total_share');
			if (typeof $(total_share) !== 'undefined') {
				var num = $(total_share).find('span').html();
				num = parseInt(num) + parseInt(tweets);
				$(total_share).find('span').html(num);
			}
        });
	},
	countGplus : function (elm) {
		var pageUrl	= $(elm).attr('data-url');
		var api_url = baseurl+'//share?url='+ pageUrl;

		$.ajax({
			url: api_url,
			dataType: 'json',
			contentType: 'application/json',
			type: 'GET',
			processData: false,
			success: function(data) {
				var google_pluses = data;

				$(elm).find('span').html(google_pluses);

				// update total share
				var total_share = $(elm).closest('.share_top').find('.total_share');
				if (typeof $(total_share) !== 'undefined') {

					var num = $(total_share).find('span').html();
					num = parseInt(num) + parseInt(google_pluses);
					$(total_share).find('span').html(num);
				}

			}
		})
	},
	countComment : function (elm) {
		$.getJSON('//comment.detik.com/v2/?count&callback=?',{
			key:article.idnews,
			group:article.idkanal,
			format:'jsonp'
		},function(response){
			$(elm).find('span').html(response);
		})
	},
	detail : function() {
		$.each($('.share_detail'), function( key, elm) {
			shareBox.addCounter(elm);
		});
	},
    includeFb : function() {
        window.fbAsyncInit = function() {
            FB.init({
              appId      : '187960271237149',
              xfbml      : true,
              version    : 'v2.3'
            });
			shareBox.detail();
        };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));

    }
};
