function bodyReady(fn){
    if (window["jQuery"] && fn) {
        $(function() {
        	$.ajaxSetup({ cache:false, traditional:true, global:true, timeout:90000});
            fn.apply(this, arguments);
        });
    } else if(fn) {
        var body = document.body || document.getElementsByTagName("body")[0];
        var loadFn = body.onload;
        var t,isRun=false,retry=0,doFn = function() {
        	if(!isRun){
        		isRun = true;
        		window["jQuery"] && window["jQuery"].ajaxSetup({cache:false, traditional:true, global:true, timeout:90000});
        		loadFn && loadFn.apply(this, arguments);
        		fn && fn.apply(this, arguments);
        	}
        };
        body.onload = function() {
        	t && clearInterval(t);
        	doFn();
        };
        t=setInterval(function(){
        	if(window["jQuery"] || ++retry>=3){
        		t && clearInterval(t);
        		doFn();
        	}
        },5000);
    }
}