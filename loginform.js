function loginvalid()
{
    const uname = document.getElementById("uname");
    const pass = document.getElementById("pass");
    

    const error1= document.getElementById("error1");
    const error2= document.getElementById("error2");
    

    if(uname.value === "" && pass.value==="")
    {
        
        window.alert("please fill all the forms");
    }
    else if(uname.value === "")
    {
        error1.innerHTML= "please enter the username";
    }
    else if(pass.value==="")
    {
        error2.innerHTML= "please enter the password";
    }
  
    else
    {
        return true;
    }

    return false;
}