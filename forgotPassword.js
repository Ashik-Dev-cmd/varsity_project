function forgot()
{
    $fname = document.getElementById("fname");
    $mail = document.getElementById("mail");

    if($fname.value==="" && $mail.value==="")
    {
        window.alert("Please fillup the form to retrieve password");
    }
    else if($fname.value==="")
    {
        window.alert("Please fillup the first name");
    }
    else if($mail.valu==="")
    {
        window.alert("Please enter the mail");
    }
    else
    {
        return true;
    }
    return false;
    
}