  function validateData()
  {

    if( document.signup.txtFName.value == "" )
     {
          alert( "Please provide your name!" );
          document.signup.txtLName.focus() ;
          return false;
      }
       if( document.signup.txtEmail.value == "" ) 
       {
           alert( "Please provide your Email!" );
          document.signup.txtEmail.focus() ;
          return false;
        }
      if( document.signup.txtTPNum.value == "" ) 
      {

          alert( "Please Provide your Telephone Number!" );
          document.signup.txtTPNum.focus() ;
          return false;
       }
      if( isNaN( document.signup.txtTPNum.value ) || document.signup.txtTPNum.value.length != 10 ) {

          alert( "Please Provide a Valid Telephone Number!");
          document.signup.txtTPNum.focus() ;
          return false;
       }
        
         if( document.signup.txtPassword.value == "" )
          {
           alert( "Please provide a Password!" );
          document.signup.txtPassword.focus() ;
          return false;
        }
         if( document.signup.txtRePassword.value == "" || document.signup.txtRePassword.value != document.signup.txtPassword.value )
          {
           alert( "Please Re-Enter your Password!" );
          document.signup.txtRePassword.focus() ;
          return false;
        }
     
  return (true);
   }
  
