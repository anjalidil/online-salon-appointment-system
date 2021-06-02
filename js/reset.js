function RESETvalidateData()
	{
        if( document.reset.txtEmail.value == "" ) {
            alert( "Please provide your Email!" );
            document.reset.txtEmail.focus() ;
            return false;
      }
		if( document.reset.txtPassword.value == "" ) {
       		alert( "Please provide your New Password!" );
       		document.reset.txtPassword.focus() ;
       		return false;
     	}
   		 if( document.reset.txtRePassword.value == "" ) {
      		 alert( "Please Re-Enter your New Password!" );
       		document.reset.txtRePassword.focus() ;
       		return false;
            }
            if( document.reset.txtRePassword.value != document.reset.txtPassword.value )
          {
           alert( "Please Re-Enter your New Password!" );
          document.reset.txtRePassword.focus() ;
          return false;
        }
        return true;
    }
    
    function REvalidateData()
	{
        
		if( document.reset.txtPassword.value == "" ) {
       		alert( "Please provide your New Password!" );
       		document.reset.txtPassword.focus() ;
       		return false;
     	}
   		 if( document.reset.txtRePassword.value == "" ) {
      		 alert( "Please Re-Enter your New Password!" );
       		document.reset.txtRePassword.focus() ;
       		return false;
            }
            if( document.reset.txtRePassword.value != document.reset.txtPassword.value )
          {
           alert( "Please Re-Enter your New Password!" );
          document.reset.txtRePassword.focus() ;
          return false;
        }
	}