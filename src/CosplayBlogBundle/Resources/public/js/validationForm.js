window.onload = function (){
    var login = document.getElementsByName('Login').value;
    var password = document.getElementsByName('Password').value;
    var ErrorBlock = document.getElementById('errorBlock');
    console.log('présent');
    if(login >= 4){
        ErrorBlock.innerHTML = "Votre login doit être plus long que 4 caractères";
    }
    if(password >= 6){
        ErrorBlock.innerHTML += "Votre Password doit être plus long que 6 caractères";
    }
    return false
};
