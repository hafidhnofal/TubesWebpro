js=document.createElement('script');
js.type = "text/javascript";
js.async=true;
js.defer=true;
js.src="https://ps.eyeota.net/pixel?pid=" + EO_PID +"&t=ajs&sid="+ EO_SID +"&gen=" + EO_GEN + "&ag=" + EO_AGE + "&cat=" + EO_CTG +"&subcat=" + EO_SUBCAT;
document.getElementsByTagName('head')[0].appendChild(js);
