function validateChangePass()
{
    const mail = document.getElementById("mail");
    const currpass = document.getElementById("currpass");
    const newpass = document.getElementById("newpass");
    const conpass = document.getElementById("conpass");

    const error1= document.getElementById("error1");
    const error2= document.getElementById("error2");
    const error3= document.getElementById("error3");
    const error4= document.getElementById("error4");

    if(mail.value === "" && currpass.value==="" && newpass.value==="" && conpass.value==="")
    {
        
        window.alert("please fill all the forms");
    }
    else if(mail.value === "")
    {
        error1.innerHTML= "please enter the mail";
    }
    else if(currpass.value==="")
    {
        error2.innerHTML= "please enter the current password";
    }
    else if(newpass.value==="")
    {
        error3.innerHTML= "please enter the new password";
    }
    else if(conpass.value==="")
    {
        error4.innerHTML= "please confirm the password";
    }
    else
    {
        return true;
    }

    return false;
}