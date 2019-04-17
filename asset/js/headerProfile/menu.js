var dtkNavMenu = [
    {
        title:'detikPemilu',
        link:'https://www.detik.com/pemilu',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_pilpres2.png',
        isNew:true
    },
    {
        title:'detikcom',
        link:'http://www.detik.com/',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_detikcom.png',
        isNew:false
    },
    {
        title:'detikNews',
        link:'http://news.detik.com',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_news.png',
        isNew:false
    },
    {
        title:'detikFinance',
        link:'http://finance.detik.com',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_finance.png',
        isNew:false
    },
    {
        title:'detikHot',
        link:'http://hot.detik.com',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_hot.png',
        isNew:false
    },
    {
        title:'detikInet',
        link:'http://inet.detik.com',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_inet.png',
        isNew:false
    },
    {
        title:'detikSport',
        link:'http://sport.detik.com',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_sport.png',
        isNew:false
    },
    {
        title:'Sepakbola',
        link:'http://sport.detik.com/sepakbola',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_sepakbola.png',
        isNew:false
    },
    {
        title:'detikOto',
        link:'http://oto.detik.com',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_oto.png',
        isNew:false
    },
    {
        title:'detikFood',
        link:'http://food.detik.com',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_food.png',
        isNew:false
    },
    {
        title:'detikHealth',
        link:'http://health.detik.com',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_health.png',
        isNew:false
    },
    {
        title:'Wolipop',
        link:'http://wolipop.detik.com',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_wolipop.png',
        isNew:false
    },
    {
        title:'detikTravel',
        link:'http://travel.detik.com',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_travel.png',
        isNew:false
    },
    {
        title:'20detik',
        link:'https://tv.detik.com/20detik/',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_20detik.png',
        isNew:false
    },
    {
        title:'detikFoto',
        link:'http://foto.detik.com',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_foto.png',
        isNew:false
    },
    {
        title:'Pasangmata',
        link:'https://pasangmata.detik.com',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_pasangmata.png',
        isNew:false
    },
    {
        title:'detikForum',
        link:'http://forum.detik.com',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_forum.png',
        isNew:false
    },
    {
        title:'detikPoin',
        link:'https://poin.detikshop.com',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_poin.png',
        isNew:false
    },
    {
        title:'Adsmart',
        link:'https://adsmart.detik.com/?utm_source=detikcom&utm_medium=desktop',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_adsmart.png',
        isNew:true
    },
    {
        title:'Detik Event',
        link:'https://event.detik.com',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_event.png',
        isNew:true
    },
    {
        title:'Haibunda',
        link:'https://www.haibunda.com/',
        img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_haibunda.png',
        isNew:true
    },



    //{
    //    title:'dNewGeneration',
    //    link:'http://www.detik.com/dnewgeneration/?utm_source=desktopdetik&utm_medium=navbar&utm_campaign=dnewgeneration',
    //    img:'//cdn.detik.net.id/libs/dc/v1/image/fmb_dnewg.png',
    //    isNew:true
    //}
], dtkNavMenuStr = '', dtkNavMenuMobileStr = '';

var parseSecond = function() {
    var result = "desktop",
        tmp = [];
    var items = location.search.substr(1).split("&");
    for (var index = 0; index < items.length; index++) {
        tmp = items[index].split("=");
        if (tmp[0] === 'ui') result = decodeURIComponent(tmp[1]);
    }
    return result;
}

for (var i = 0;i < dtkNavMenu.length; i++) {
    
    var attr = {cls:'', label:''};
    
    if (dtkNavMenu[i].isNew)
        var attr = {cls:'sp', label:' <strong>new</strong>'};
    
    dtkNavMenuStr += ' <a href="'+dtkNavMenu[i].link+'" class="'+attr.cls+'" target="_blank"><img src="'+dtkNavMenu[i].img+'"> <span>'+dtkNavMenu[i].title+'</span>'+attr.label+'</a>';
    dtkNavMenuMobileStr += ' <option value="'+dtkNavMenu[i].link+'">'+dtkNavMenu[i].title+'</option>';
}

if (parseSecond()=='mobile')
    dtkmenu([dtkNavMenuMobileStr]);
else
    dtkmenu(['<div class=menu_k>'+dtkNavMenuStr+'<div class=clearfix></div></div>']);
