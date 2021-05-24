/**Traitement de la barre de recherche de l'utilisateurs */
const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button");

searchBtn.onclick = ()=>{
    searchBar.classList.toggle("active");  /**Permet d'activer le text input de la barre de recherche */
    searchBar.focuse();
    searchBtn.classList.toggle("active");
}

setInterval(()=>{

    let xhr = new XMLHttpRequest();     //creation de notre objet XML
    xhr.open("GET", "php/users.php",true);                //on va utiliser la methode GET ici pour recevoir les donnees 

    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.responseText;
               console.log(data);
               
            }
        }
    }
    xhr.send();

}, 500);            //cette fonction s'excutera apres a chaque 500ms