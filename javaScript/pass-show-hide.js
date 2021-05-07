/*traitement de password montrer ou cacher*/
const passwrdField = document.querySelector(".form input[type='password']");
toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = () =>{
    if(passwrdField.type == "password"){
        passwrdField.type = "text";
        toggleBtn.classList.add("active");  /*permet de mettre une barre sur l'icon de vue password quant on click dessus*/
    }else{
        passwrdField.type = "password";
        toggleBtn.classList.remove("active");  /*permet d'enlever la  barre sur l'icon de vue password quant on click dessus*/
    }
}