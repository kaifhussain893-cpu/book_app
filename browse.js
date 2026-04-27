function goToLogin() {

    const loginSection = document.getElementById("login-section");
        
       if(loginSection){
        loginSection.scrollIntoView({behavior:"smooth"});
       }
       else{
        alert("login section not found");
       }
}
