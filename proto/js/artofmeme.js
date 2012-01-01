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
}
function butonclick(){
  if(open == false){
	 	 open=true;
	 	 $(".cartzone").height("200px");
		 $(".navbar-arrow").css("border-color",  "transparent  transparent grey transparent");
	 }else{
		open=false;
		$(".cartzone").height("0px");
		setTimeout('cleararrow()',500);
	}
}
function cleararrow(){
	$(".navbar-arrow").css("border-color",  "transparent  transparent white transparent");
}
