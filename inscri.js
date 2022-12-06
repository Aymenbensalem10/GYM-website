function checkPassword(){
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirm-password").value;
    console.log(" Password:", password,'\n',"Confirm Password:",confirmPassword);
    let message = document.getElementById("message");

    if(password.length != 0){
        if(password == confirmPassword){
            message.textContent = "Password match";
        }
        else{
            message.textContent = "Password don't match";
        }
    }
    else{
        alert("Password can't be empty!");
        message.textContent = "";
    }
}