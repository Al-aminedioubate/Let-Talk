/*traitement de password montrer ou cacher*/
const passwordField = document.querySelector(".form input[type='password']");
toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = () =>{
    if(passwordField.type == "password"){
        passwordField.type = "text";
        toggleBtn.classList.add("active");  /*permet de mettre une barre sur l'icon de vue password quant on click dessus*/
    }else{
        passwordField.type = "password";
        toggleBtn.classList.remove("active");  /*permet d'enlever la  barre sur l'icon de vue password quant on click dessus*/
    }
}