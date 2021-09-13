

window.onload = () =>{
 
   
    
    let themeLink = document.getElementById("theme-link")

    if(localStorage.theme != null){
       
        themeLink.href = `css/style_${localStorage.theme}.css`
    }else{
       
        themeLink.href = `css/style_light.css`
  
        localStorage.theme = "light"
    }

    document.getElementById("theme").addEventListener("click", function(){
        // Si le thème stocké est "clair"
        if(localStorage.theme == "light"){
            // On stocke le thème "sombre"
            localStorage.theme = "dark"
            // On prépare le texte de la span pour revenir au thème clair
            var themeText = "clair"
        }else{ // Sinon
            // On stocke le thème "clair"
            localStorage.theme = "light"
            // On prépare le texte de la span pour revenir au thème sombre
            var themeText = "sombre"
        }
        // On met à jour le texte de la span
        this.innerText = `Thème ${themeText}`
        // On met à jour le href de la balise link
        themeLink.href = `css/style_${localStorage.theme}.css`
    })

}
