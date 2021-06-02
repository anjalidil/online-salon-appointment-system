function validateData()
	{
		if( document.ASSlogin.txtUsername.value == "" ) {
       		alert( "Please provide your Username!" );
       		document.ASSlogin.txtUsername.focus() ;
       		return false;
     	}
   		 if( document.ASSlogin.txtPassword.value == "" ) {
      		 alert( "Please provide your password!" );
       		document.ASSlogin.txtPassword.focus() ;
       		return false;
    		}
	}