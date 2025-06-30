const recherche = document.getElementById('recherche')
const Btnrecherche = document.getElementById('logo-search')
const NavHeader = document.querySelector('.header-dashbord')
const Pannelrecherche = document.querySelector('.Pannelrecherche')
const LesRecherche = document.getElementById('LesRecherche')



// les recherche avec le clavier 
    recherche.addEventListener('keydown', (event)=> {
        console.log(event);
        
        const Taille_Input_Recherche = recherche.textContent.length
        const InputRecherche = recherche.value

        if (Taille_Input_Recherche <= 0 ) {
            LesRecherche.innerHTML = "< " + InputRecherche + " >" + " Recherche non trouvée !"
            Pannelrecherche.classList.add('PannelAfficher')
            console.log("tu ecris")
        } else {
            recherche.innerHTML = "lol"
            LesRecherche.innerHTML = "Veillez ecrire < @ > , < # > ou faire une recherche"
            console.log("pas de texte")

        } if(event.key === "#") {
            LesRecherche.textContent = "< " + InputRecherche + " >" + " Hashtags non trouvée !"
        } if(event.key === "@") {
            LesRecherche.textContent = "< " + InputRecherche + " >" + " indentifiant non trouvée !"
        } if(event.key === "Escape") {
            Pannelrecherche.classList.remove('PannelAfficher')
        }
    })

    // recherche avec l'icon recherche 

    Btnrecherche.addEventListener('click', (event)=> {
        console.log(event);
        
        Taille_Input_Recherche = recherche.textContent.length
        InputRecherche = recherche.value
        if (Taille_Input_Recherche <= 1) {
            LesRecherche.textContent = "< " + InputRecherche + " >" + " Recherche non trouvée !"
            Pannelrecherche.classList.add('PannelAfficher')
            console.log("tu ecris")
        } else {
            LesRecherche.textContent = "Veillez < @ > , < # > ou faire une recherche"
        } if(event.key === "#") {
            LesRecherche.textContent = "< " + InputRecherche + " >" + " Hashtags non trouvée !"
        } if(event.key === "@") {
            LesRecherche.textContent = "< " + InputRecherche + " >" + " indentifiant non trouvée !"
        } if(event.key === "Escape") {
            Pannelrecherche.classList.remove('PannelAfficher')
        }
    })


// bouton close

const Btnclose = document.querySelector('.Btnclose')
Btnclose.addEventListener('click', ()=> {
    Pannelrecherche.classList.remove('PannelAfficher')
})