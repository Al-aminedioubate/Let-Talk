/**Traitement de la barre de recherche de l'utilisateurs */
const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button");

searchBtn.onclick = ()=>{
    searchBar.classList.toggle("active");  /**Permet d'activer le text input de la barre de recherche */
    searchBar.focuse();
    searchBtn.classList.toggle("active");
}