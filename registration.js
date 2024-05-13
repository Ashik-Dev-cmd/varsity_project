function regval()
{
    const Fname = document.getElementById("Fname");
    const Lname = document.getElementById("Lname");
    const Email = document.getElementById("Email");
    const Phone = document.getElementById("Phone");
    const Pass = document.getElementById("Pass");
    const cPass = document.getElementById("cPass");

    const error0= document.getElementById("error0");
    const error1= document.getElementById("error1");
    const error2= document.getElementById("error2");
    const error3= document.getElementById("error3");
    const error4= document.getElementById("error4");
    const error5= document.getElementById("error5");
    const error6= document.getElementById("error6");

    if(Fname.value === "" && Lname.value==="" && Email.value==="" && Phone.value===""&& Pass.value===""&& cPass.value==="")
    {
        
        error0.innerHTML= "please fillup the form";
    }
    else if(Fname.value === "")
    {
        error1.innerHTML= "please enter the first name";
    }
    else if(Lname.value==="")
    {
        error2.innerHTML= "please enter the last name";
    }
    else if(Email.value==="")
    {
        error3.innerHTML= "please enter the email";
    }
    else if(Phone.value==="")
    {
        error4.innerHTML= "please enter the phone number";
    }
    else if(Pass.value==="")
    {
        error5.innerHTML= "please enter the password";
    }
    else if(cPass.value==="")
    {
        error6.innerHTML= "please confirm the password";
    }
    else if(Pass.value!==cPass.value)
    {
        window.alert("Password and confirm password doesn't match");
    }
    else
    {
        return true;
    }

    return false;
}