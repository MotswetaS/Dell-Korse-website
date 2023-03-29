//validation form

//create function
function validate(){
   if (document.myForm.Email.value ==""){
    alert("Please enter your email")
    document.myForm.Email.focus();
    return false;
   }
   if(document.myform.Name.value == ""){
    alert('Please enter your name!')
    document.myForm.Name.focus()
    return false
   }
}
 

//validate data format
function validateEmail() {
         const emailID = document.myForm.EMail.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.myForm.EMail.focus() ;
            return false;
         }
         return( true );
}