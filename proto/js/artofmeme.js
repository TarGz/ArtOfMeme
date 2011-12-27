window.onload = function(){
	bindclick();
	open = false; 
}

function bindclick(){

	$("#closecartbuton").click(function() {butonclick();});
	$("#cartbouton").click(function() {butonclick();});
}
function butonclick(){
  if(open == false){
	 	 open=true;
	 	 $(".cartzone").height("150px");
		 $(".navbar-arrow").css("border-color",  "transparent  transparent grey transparent");
	 }else{
		open=false;
		$(".cartzone").height("0px");
		setTimeout('cleararrow()',500);
	}
	
}
function cleararrow(){
	console.log("CLEAR ARROW");
	$(".navbar-arrow").css("border-color",  "transparent  transparent white transparent");
}
