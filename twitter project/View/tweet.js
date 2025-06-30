
let limit = 830;
var NameUser = "Name"
var FirstNameUser = "User"

document.addEventListener('DOMContentLoaded', ()=> {
  const Counter = document.querySelector(".counter-limit");
  Counter.innerHTML = limit
})
// declaration de tous les element en HTML

const editable = document.getElementById("editable");
const placeholder = document.querySelector(".placeholder");
const Counter = document.querySelector(".counter-limit");
const Btnpub = document.getElementById("publier");
let ViewNameUser = document.querySelector('.name-user');
ViewNameUser.innerHTML = NameUser + " " + FirstNameUser

const annonce = document.getElementById("annonce");

// la limite des caractere a prendre en compte


// quand j'appuis sur le clavier

editable.addEventListener("keyup", () => {
  const TailleInput = editable.textContent.length; // la taille des cararere taper
  if (TailleInput > 0) {
    // si la taille des caractere est plus petite que 0 alors
    let numer = limit - TailleInput;
    Counter.innerHTML = numer; // le resultat sera afficher
    if (numer <= "-1") {
      // si la taille est plus petit que 1
      Btnpub.disabled = true; // le bouton publier sera desactiver
      Btnpub.classList.add("off");
      Counter.style.color = "red";
      Btnpub.classList.remove("pub");
      annonce.innerHTML = "Impossible de publier ! Trop de caractères"; // ce message sera afficher
      annonce.style.color = "red";

    } else if (numer <= "10") {
      Counter.style.color = "orange";
      Btnpub.disabled = false;
      annonce.innerHTML = "";
      Counter.innerHTML = numer;
      Btnpub.classList.add("pub");
      Btnpub.classList.remove("off");

    } else {
      Btnpub.disabled = false;
      Counter.style.color = "black";
      annonce.innerHTML = "";
      Btnpub.classList.add("pub");
      Btnpub.classList.remove("off");
    }
    placeholder.style.display = "none";
  } else {
    let numer = limit - TailleInput;
    Counter.innerHTML = numer;
    placeholder.style.display = "block";
  }
});

// la creation d'une nouvelle tweet et les element qui vont etre creer

var NewTweet = document.getElementsByName("div");
var i;

for (i = 0; i < NewTweet.length; i++) {
  var BtnSuprimer = document.createElement("span");
  var txtBtnSupprimer = document.createTextNode("suprimer");
  BtnSuprimer.className = "suprimer";
  BtnSuprimer.appendChild(txtBtn);
  NewTweet[i].appendChild(BtnSuprimer);
}

var suprimer = document.getElementsByClassName("suprimer");
var i;
for (i = 0; i < suprimer.length; i++) {
  suprimer[i].onclick = () => {
    var div = this.parentElement;
    div.style.display = "none";
    
  };
}



// quand j'appuis sur le boutton publier

Btnpub.addEventListener("click", () => {
  const TailleInput = editable.textContent.length; // la taille des cararere taper
  var BoxNewdivTweet = document.createElement('div');
  var li = document.createElement("li");
  var M = editable.textContent;
  var NewDivUser = document.createElement('div');

  li.innerText = M;
  li.className = "Tweet_ON";
  if (TailleInput === 0) {
    annonce.innerHTML = "Veillez creer un tweet";
  } else {
    
    
// ajout de la partie User
    // document.getElementById("myNewTweet").style.display = "block";

    document.getElementById("myNewTweet").appendChild(BoxNewdivTweet);
    BoxNewdivTweet.className = "BoxNewdivTweet"

    BoxNewdivTweet.appendChild(NewDivUser);
    NewDivUser.className = ('PartUser')
    NewDivUser.innerHTML = NameUser + " " + FirstNameUser


// creation du texte tweet

    BoxNewdivTweet.appendChild(li);

    document.getElementById("myNewTweet").classList.remove("Tweet_ON");
    editable.textContent = "";
    placeholder.style.display = "block";
    Counter.textContent = limit

// button suprimer

    var BtnSuprimer = document.createElement("span");
    var txtBtnSupprimer = document.createTextNode("Suprimer");
    BtnSuprimer.className = "suprimer";
    BtnSuprimer.appendChild(txtBtn);
    li.appendChild(BtnSuprimer);
  }
});
