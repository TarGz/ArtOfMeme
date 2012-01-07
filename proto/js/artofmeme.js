// DOCUMENT READY
$(document).ready(function () {
	
    if(isMSIE()){
  		displayIEerror();
		}else{
		displayLangWarning();
	}
  	bindclick();
});

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
	$('<div class="cartAnimImage"><img class="thumbnail" src="http://placehold.it/90x90" alt=""></div>').insertAfter('.animInsert');

	$('.cartAnimImage').addClass("cartAnimImageMove");
	//$('.cartAnimImage').css("padding-left",  "100px");
	//$('.cartAnimImage').css("padding-top",  "100px");

	//openCart();
}






