function validateData()
	{
		if( document.ADlogin.txtUsername.value == "" ) {
       		alert( "Please provide your Username!" );
       		document.ADlogin.txtUsername.focus() ;
       		return false;
     	}
   		 if( document.ADlogin.txtPassword.value == "" ) {
      		 alert( "Please provide your password!" );
       		document.ADlogin.txtPassword.focus() ;
       		return false;
    		}
	}