const form = document.querySelector(".signup form");
const continuBtn = form.querySelector(".button input");
const errorText = form.querySelector(".error-txt");

form.onsubmit = (e) =>{
    e.preventDefault();         //prevenir la soumision de formulaire
}

continuBtn.onclick = ()=>{     //Permet de soumettre le formulaire lors de click sur le button submit
    //Debut d'Ajax
    let xhr = new XMLHttpRequest();     //creation de notre objet XML
    xhr.open("POST", "php/signup.php",true);

    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.responseText;
                if(data == "success"){

                }else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
    }

    //envoyons les donnees du formulaire a travers ajax a php
    let formData = new FormData(form)      // creation d'une formData objet

    xhr.send(formData);
}
