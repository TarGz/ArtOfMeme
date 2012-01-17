

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
	cartIsOpen = false; 
	$('#closecartbuton').click(	function()  {butonclick();});
	$('#cartbouton').click(	   	function()  {butonclick();});
	$('#addtocart').click(	   	function(e) {addtocart(e);});
}

/** cart open & close **/
function butonclick(){
	cartIsOpen == false ? openCart() : closeCart();
}
function openCart(){
	 cartIsOpen=true;
	 $(".cartzone").height("200px");
	 $(".navbar-arrow").css("border-color",  "transparent  transparent grey transparent");
}
function closeCart(){
	cartIsOpen=false;
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
	$('.animInsert').append('<img class="thumbnail cartAnimImage cartItem" src="http://placehold.it/120x120" alt="">');
	$('.cartAnimImage').css(offset);
	// CSS animation
	setAnimationProperty($('.cartAnimImage'),"property","top, left");
	setAnimationProperty($('.cartAnimImage'),"duration","1.5s");
	// Add real item to cart
	$('#cartItems').append('<li class="tmpcartItem" style="visibility:hidden"><img class="thumbnail" src="http://placehold.it/120x120" alt=""> </li>');
	// Timer
    requestAnimFrame(function(){
        addtocartCallback(e);
    });
	
}

function addtocartCallback(e){
	var offset = $('.tmpcartItem').offset();
	offset.top = offset.top - 105;
	$('.cartAnimImage').css(offset);
	jQuery("html, body").stop().animate({
          'scrollTop': 0
        }, 1000, 'swing', function() {
          //window.location.hash = target;
        });
	window.setTimeout(function() {
	 addtocartEndAnim();
	}, 1500);
}

function addtocartEndAnim(){
	var item = $('.tmpcartItem')
	item.css("visibility","visible");
	item.removeClass('tmpcartItem').addClass('cartItem');
	$('.animInsert').children().remove();
}


/*
Scroll to

aze aze aze ljkaz lejkljakz

jQuery("html, body").stop().animate({
          'scrollTop': 0
        }, 500, 'swing', function() {
          //window.location.hash = target;
        });

Transition end event 
var transEndEventNames = {
    'WebkitTransition' : 'webkitTransitionEnd',
    'MozTransition'    : 'transitionend',
    'OTransition'      : 'oTransitionEnd',
    'msTransition'     : 'msTransitionEnd', // maybe?
    'transition'       : 'transitionEnd'
};
var transEndEventName = transEndEventNames[ Modernizr.prefixed('transition') ];

jQuery('monitem').bind(transEndEventName,function(e){
//callback
})
*/


