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


var indexThemeBtn = document.getElementById('themeChangeBtn');
var indexBody = document.getElementsByName('indexBody');

function changeTheme(theme){
    switch (theme) {
        case 0:
            indexThemeBtn.innerText = "Dark Theme";
            indexThemeBtn.setAttribute("onclick", "changeTheme(1)");
            indexThemeBtn.setAttribute("class", "changeToDark");
            indexBody.setAttribute("Style", "background-image: url('../assets/backgrounds/background_1.png'); background-repeat: no-repeat; background-position: center; background-size: cover;");
            break;
        case 1:
            indexThemeBtn.innerText = "Light Theme";
            indexThemeBtn.setAttribute("onclick", "changeTheme(0)");
            indexThemeBtn.setAttribute("class", "changeToLight");
            indexBody.setAttribute("Style", "background-image: url('../assets/backgrounds/background_0.png'); background-repeat: no-repeat; background-position: center; background-size: cover;");
            break;
        default:
            break;
    }
    
}