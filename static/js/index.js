function LienOver() {
	var lien = document.getElementsByTagName("a");
	a.style.color = "#999999";
};

function LienOut() {
 	var lien = document.getElementsByTagName("a");
 	a.style.color = "";
};



function toggleForm(){
    // on réccupère l'élément form.
    var formulaire = document.getElementById('formulaire');
  
    // Condition pour afficher/cacher le formulaire en fonction de son état
    if(formulaire.style.display == 'block'){
        formulaire.style.display = 'none';
    }else{
        formulaire.style.display = 'block';
    }
}