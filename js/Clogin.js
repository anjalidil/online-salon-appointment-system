function validateData()
	{
		if( document.login.txtEmail.value == "" ) {
       		alert( "Please provide your Registered Email!" );
       		document.login.txtEmail.focus() ;
       		return false;
     	}
   		 if( document.login.txtPassword.value == "" ) {
      		 alert( "Please provide your password!" );
       		document.login.txtPassword.focus() ;
       		return false;
    		}
	}