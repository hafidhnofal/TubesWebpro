var targetWin=null,timer=null,originOpen=window.open,run={popup:function(e,t,n,r){var i=screen.width/2-n/2;var s=screen.height/2-r/2;return window.open(e,t,"toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width="+n+", height="+r+", top="+s+", left="+i)},checkChild:function(){if(targetWin.closed){clearInterval(timer);if(run.readCookie("next")&&run.getParam("parentURI"))parent.location=parentURI+"#"+run.readCookie("next")+" 840-550";else window.location.reload()}},readCookie:function(e){var t=e+"=";var n=document.cookie.split(";");for(var r=0;r<n.length;r++){var i=n[r];while(i.charAt(0)==" ")i=i.substring(1,i.length);if(i.indexOf(t)==0)return unescape(i.substring(t.length,i.length))}return false},eraseCookie:function(e){createCookie(e,"",-1)},getParam:function(e){e=e.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]");var t="[\\?&]"+e+"=([^&#]*)";var n=new RegExp(t);var r=n.exec(window.location.search);return r==null?false:decodeURIComponent(r[1].replace(/\+/g," "))},getAttr:function(e){var t={};for(i=0;i<e.length;i++){t[e[i].name]=e[i].value}return t},directLink:function(e){parent.location=parentURI+"#"+e}},parentURI=run.getParam("parentURI");$(function(){$(".dcLink").click(function(e){e.preventDefault();var t=e.target.href?run.getAttr(e.target.attributes):run.getAttr(e.target.parentNode.attributes);parent.location=parentURI+"#"+t.href});$(".log_left a.btn_con_fb").click(function(e){e.preventDefault();var t=run.getAttr(e.target.attributes),n=500,r=400,i="Facebook Login";if($(this).hasClass("btn_con_tw")){n=700,r=600;i="Twitter Login"}else if($(this).hasClass("btn_con_go")){i="Google Plus Login"}targetWin=run.popup(t.href,i,n,r);timer=setInterval(run.checkChild,1)})})
