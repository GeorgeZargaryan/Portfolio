var signUp = document.getElementById("signUpDiv")
var signIn = document.getElementById("signInDiv")

function openSignUp(){
    signIn.style.display = "none"
    signUp.style.display = "flex"
}
function openSignIn(){
    signIn.style.display = "flex"
    signUp.style.display = "none"
}