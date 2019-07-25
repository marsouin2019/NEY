//declaration tableaux et initialisation a vide
var joueurs=[]
//declaration de ma fonction add_joueur
function add_joueur(){
    //aficher et stoker les joueur 
    joueurs.push(prompt("écrire un nom de joueur en majuscule."));
    //tester variable joueur
    if(joueurs !=null){ document.getElementById("affiche_joueur").innerHTML=joueurs;} else alert("vous n'avez pas indiquer de nom de joueur.")
}
//declarer la fonction tirage_au_sort
function tirage_au_sort(){
    //tester la longeur de la chaine
    if( joueurs.length > 0 ) {
        /* -declaration d'une varible
           -methode mathematique pour melonger des donnees
           -tirage au sort d'une donnee
           -indication de la longeur de mon tableau joueurs comme donnee
        */
        var rand = Math.floor(Math.random()*joueurs.length);
        //afficher le nom du gagnant
        document.getElementById("affiche_gagnant").innerHTML= "Le gagnant est :<strong>"+joueurs[rand]+"</strong>";}
        else {  alert ("vous n'avez pas inscrit de joueur ! ! !")
    
      

    }
}