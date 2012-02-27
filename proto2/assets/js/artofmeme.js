

/** DOCUMENT READY **/
$(document).ready(function () {
	
	console.log("ready")
    if(isMSIE()){
  		displayIEerror();
		}else{
		displayLangWarning();
	}
	init();
  	bindclick();
  	// $(".collapse").collapse();
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

/** INIT **/
function init(){
	$catritemid = 0;
	$('.cartzone').on('hidden', function () {
	  cartIsOpen=false;
	})
	$('.cartzone').on('show', function () {
	  cartIsOpen=true;
	})
}
/** NAVIGATION **/
function bindclick(){
	cartIsOpen = false; 

	$('#closecartbuton').click(	function() {butonclick();});
	$('#cartbouton').click(	   	function() {butonclick();});
	$('#addtocart').click(	   	function(e) {addtocart(e);});
	$('.cartItem').click(	   	function(e) {editCartItem(e);});

}

/** cart open & close **/
function butonclick(){
	cartIsOpen == false ? openCart() : closeCart();
}
function openCart(){
	if(!cartIsOpen){
	 
	 $(".cartzone").collapse('show');
	 $(".navbar-arrow").css("border-color",  "transparent  transparent grey transparent");
	 }
}
function closeCart(){
	if(!cartIsOpen){
	$(".cartzone").collapse('hide');
		setTimeout('cleararrow()',500);
	}
	
}
function cleararrow(){
	$(".navbar-arrow").css("border-color",  "transparent  transparent white transparent");
}

/** Add to cart **/
function addtocart(e){
	openCart();
	// Start point
	var offset = $('#'+e.currentTarget.id).offset();
	$('.animInsert').append('<img class="cartAnimImage cartItem" src="http://placehold.it/160x160" alt="">');

	$('.cartAnimImage').css(offset);
	// CSS animation
	setAnimationProperty($('.cartAnimImage'),"property","top, left");
	setAnimationProperty($('.cartAnimImage'),"duration","1.5s");
	$catritemid += 1;
	// Add real item to cart
	$('#cartItemid').before('<div id="cartItemid" class="tmpcartItem" style="visibility:hidden"><img src="http://placehold.it/160x160" class="cartImage" alt=""><div class="cartIntemDetails  collapse"> Lorem ipsum dolor lalala  Lorem ipsum dolor lalala  Lorem ipsum dolor lalala '+$catritemid+' </div></div>');
	// Timer
    requestAnimFrame(function(){
        addtocartCallback(e);
    });
	
}

function addtocartCallback(e){
	// Get offset of the new item
	var offset = $('.tmpcartItem').offset();
	offset.top = offset.top;
	// Set position
	$('.cartAnimImage').css(offset);
	// Scroll
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
	item.click(	   	function(e) {editCartItem(e);});
}

function editCartItem(e){
	console.log("editCartItem");
	console.log($( ".cartIntemDetails",e.currentTarget));
	$( ".cartIntemDetails",e.currentTarget).collapse('toggle');
}

