/* ==========================================================================
   FULL SCREEN HEADER 
   ========================================================================== */

function min_height() {
  var window_height = $(window).height() - 50;
  $(".ssc-header, .ssc-color-overlay").css('min-height', window_height); 
  $(".choice-box").css('min-height', window_height);
  $("section").css('min-height', (window_height - 125));
}

$(document).ready(function() {
  min_height();
  $(window).bind('resize', min_height);
});

function ajaxObj( meth, url ) {
	var x = new XMLHttpRequest();
	x.open( meth, url, true );
	x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	return x;
}
function ajaxReturn(x){
	if(x.readyState == 4 && x.status == 200){
	    return true;	
	}
}
function _(x){
return document.getElementById(x);
}

function addChoice(u_id, type_id, item_id){
var choice_list = _("choice-list");
var hr = ajaxObj("POST", "json/choice_list.php");
hr.onreadystatechange = function(){
  if(ajaxReturn(hr) == true){
    var d = hr.responseText;
    choice_list.innerHTML= d;
  }
}
hr.send("u_id="+u_id+"&type_id="+type_id+"&item_id="+item_id);
choice_list.innerHTML='<div class="ajax-loader"><img src="img/ajax-loader.gif"</div>';
}

function removeChoice(id, u_id){
var choice_list = _("choice-list");
var hr = ajaxObj("POST", "json/remove.php");
hr.onreadystatechange = function(){
  if(ajaxReturn(hr) == true){
    var d = hr.responseText;
    choice_list.innerHTML= d;
  }
}
hr.send("u_id="+u_id+"&id="+id);
choice_list.innerHTML='<div class="ajax-loader"><img src="img/ajax-loader.gif"</div>';
}

function showEvents(ref){
	var event_list = _('event-list');
	var hr = ajaxObj("POST", "json/show_events.php");
	 hr.onreadystatechange = function(){
     if(ajaxReturn(hr) == true){
     	var s = hr.responseText;
		s = s.replace(/\\n/g, "\\n")  
               .replace(/\\'/g, "\\'")
               .replace(/\\"/g, '\\"')
               .replace(/\\&/g, "\\&")
               .replace(/\\r/g, "\\r")
               .replace(/\\t/g, "\\t")
               .replace(/\\b/g, "\\b")
               .replace(/\\f/g, "\\f");
		s = s.replace(/[\u0000-\u0019]+/g,""); 
     	var d = JSON.parse(s);
	    event_list.innerHTML = "";
	    for(var o in d){
	        event_list.innerHTML += '<li>'+(d[o].name).toUpperCase()+'</li>';
	    }
	  }
	}
	hr.send("ref="+ref);
	event_list.innerHTML='<div class="ajax-loader"><img src="img/ajax-loader.gif"</div>';
}

function images_to_gallery(ref){
var gal_list = _("gal-list");
var hr = ajaxObj("POST", "json/show_gallery.php");
hr.onreadystatechange = function(){
   var d = JSON.parse(hr.responseText);
    gal_list.innerHTML="";
    for(var o in d){
      if(d[o].src){
        gal_list.innerHTML+='<div class="col-lg-3 col-md-4 col-xs-6 thumb"><a class="thumbnail" href="#"><img class="img-responsive" src="'+d[o].src+'" alt="'+d[o].filename+'"></a> </div>';
      }
    }
}
  hr.send("ref="+ref);
  gal_list.innerHTML='<div class="ajax-loader"><img src="img/ajax-loader.gif"</div>';
}

function submit_form(uid){
var status = _("status");
var quote = _("quote-box");
var name = _("name").value;
var phone = _("phone").value;
var email = _("email").value;
var address = _("address").value;
var hr = ajaxObj("POST", "send_mail.php");
hr.onreadystatechange = function(){
   if(ajaxReturn(hr) == true){
    var d = hr.responseText;
    if(d == "success"){
      quote.innerHTML= '<div class="col-md-4 col-md-offset-4"><div class="thank-box"><h3>Thank you!</h3><p>Your response has been successfully submitted. We will contact you soon in response to your quotation. Have a nice day!..</p></div></div>';
    }
    else{
      status.innerHTML= d;
    }
  }
}
  hr.send("uid="+uid+"&name="+name+"&phone="+phone+"&email="+email+"&address="+address);
  quote.innerHTML='<div class="ajax-loader"><img src="img/ajax-loader.gif"</div>';
}