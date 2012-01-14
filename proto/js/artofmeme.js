

// DOCUMENT READY
$(document).ready(function () {
	
    if(isMSIE()){
  		displayIEerror();
		}else{
		displayLangWarning();
	}
  	bindclick();
});

/** TIMER **/
window.requestAnimFrame = (function(callback){
    return window.requestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    window.oRequestAnimationFrame ||
    window.msRequestAnimationFrame ||
    function(callback){
        window.setTimeout(callback, 17);
    };
})();

/** CSS ANIMATIONS **/
function setAnimationProperty(obj,prop,value){
	var anims = new Array('transition','-o-transition','-ms-transition','-moz-transition','-webkit-transition');
	for (i=0; i < anims.length; i++) {
	 	obj.css(anims[i]+"-"+prop, value );
	}
}
/** WARNING & MESSAGE **/
function displayIEerror(){
	$('#msg-container').load('msg/ie-warning.html');
}
function displayLangWarning(){
	$('#msg-container').load('msg/lang-warning.html');
}

/** DETECT IE **/
function isMSIE() {
  return '\v' == 'v';
}

/** NAVIGATION **/
function bindclick(){
	open = false; 
	$('#closecartbuton').mouseup(	function() {butonclick();});
	$('#cartbouton').mouseup(	   	function() {butonclick();});
	
	$('#addtocart').mouseup(	   	function(e) {addtocart(e);});
}

/** cart open & close **/
function butonclick(){
  if(open == false){
	 	 openCart();
	 }else{
		 closeCart();
	}
}
function openCart(){
	 open=true;
	 $(".cartzone").height("200px");
	 $(".navbar-arrow").css("border-color",  "transparent  transparent grey transparent");
}
function closeCart(){
	open=false;
	$(".cartzone").height("0px");
	setTimeout('cleararrow()',500);
	
}

function cleararrow(){
	$(".navbar-arrow").css("border-color",  "transparent  transparent white transparent");
}
/** Add to cart **/
function addtocart(e){
	openCart();
	var offset = $('#'+e.currentTarget.id).offset();
	$('.animInsert').append('<img class="thumbnail cartAnimImage cartItem" src="http://placehold.it/90x90" alt="">');
	$('.cartAnimImage').css(offset);
	
	setAnimationProperty($('.cartAnimImage'),"property","top, left");
	setAnimationProperty($('.cartAnimImage'),"duration","3s");
	
	$(this).scrollTop(0);

	
    requestAnimFrame(function(){
        addtocartCallback(e);
    });

}

function addtocartCallback(e){
	//$('.cartAnimImage').addClass("cartAnimImageMove");
	
	var offset = $('#targetanim').offset();
	console.log('addtocartCallback');
	console.log(offset);
	$('.cartAnimImage').css(offset);
	
	
	window.setTimeout(function() {
	 addtocartEndAnim();
	}, 3000);
	
	
}

function addtocartEndAnim(){
	console.log('addtocartEndAnim');
	
	$('#cartItem').append('<li class="cartItem"><img class="thumbnail" src="http://placehold.it/90x90" alt=""> </li>');
	$('.animInsert').children().remove();
}



