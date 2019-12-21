/**
 * js script 
 **/
  
function postForm(token, params){
		
	var dat = {token:token,data:params["postData"]};
	 $.post(params["formURL"], dat, function(data, status){
			alert("Data: " + data + "\nStatus: " + status);
		}).done(function() {
	  alert( "second success" );
	   })
	   .fail(function() {
	  alert( "error" );
	   })
	   .always(function() {
	  alert( "finished" );
	   });
}


