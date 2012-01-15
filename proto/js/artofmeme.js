

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
	// Start point
	var offset = $('#'+e.currentTarget.id).offset();
	$('.animInsert').append('<img class="thumbnail cartAnimImage cartItem" src="http://placehold.it/90x90" alt="">');
	$('.cartAnimImage').css(offset);
	// CSS animation
	setAnimationProperty($('.cartAnimImage'),"property","top, left");
	setAnimationProperty($('.cartAnimImage'),"duration","3s");
	// Add real item to cart
	$('#cartItems').append('<li class="tmpcartItem" style="visibility:hidden"><img class="thumbnail" src="http://placehold.it/90x90" alt=""> </li>');
	// Page scroll
	//$(this).scrollTop(0);
	// Timer
    requestAnimFrame(function(){
        addtocartCallback(e);
    });
	
}

function addtocartCallback(e){
	//$('.cartAnimImage').addClass("cartAnimImageMove");
	
	var offset = $('.tmpcartItem').offset();
	offset.top = offset.top - 80;
	
	console.log('addtocartCallback');
	console.log(offset);
	$('.cartAnimImage').css(offset);
	
	
	window.setTimeout(function() {
	 addtocartEndAnim();
	}, 3000);
	
	
}

function addtocartEndAnim(){
	console.log('addtocartEndAnim');
	var item = $('.tmpcartItem')
	item.css("visibility","visible");
	item.removeClass('tmpcartItem').addClass('cartItem');
	$('.animInsert').children().remove();
}



