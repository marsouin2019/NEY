 /* //déclaration variable sur élement html titre
let titre= document.getElementById("titre");
titre.add

//affiche la propriéter de l'élément ciblé
//document.write(titre);

//déclaration var sur les élément html de titre paragraphes
let paragraphes= document.getElementsByTagName("p")
//indiqué index de la colection(tableau) pou aficher la proprieter du paragraphe ciblé
//document.write(paragraphes[1]);

//une seul class"nom de la class"
let info = document.getElementsByClassName ("info");
//document.write(info[1]);

//tout les class"nom de la class"
let menu = document.querySelectorAll(".menu");
//document.write(menu[1]);


/*ex2 
 afficher le dexième paragraphes
 afficher la class bleu
  */
/*
let Paragraphes= document.getElementsByTagName("p")
//document.write(paragraphes[1]);

let bleu= document.querySelectorAll(" .bleu");
//document.write(bleu);

//afficherle contenu d'un element cible
/*
Diférence entre la méthode java scrip entre var et let
-var declaretion  de variable de meme nom possible
-let imposible de déclarer les variable de memem nom
*/
/*let Titre = document.getElementById("titre").innerHTML;
//document.write(Titre);

//cible un contenue dans une colection par son tag
let p= document.getElementsByTagName("p");
//document.write (p[3].innerHTML);

//cibler le menu, la class bleu et afficher son contenu
let m= document.getElementsByTagName("ul");
//document.write(m[1].innerHTML);
//console.log(m[1].children[3]);

/*
-ciblé les listes document.getElementsByTagName ("ul")-> m
-selectionner la liste qui contien element de classe bleu=> m[1]
-afficher le contenu de la liste selectionner m[1].innerHTML
-afficher l'element qui contien le class bleu => m [1].children[3].innerHTML

*/
//document.write(m[1].children[3].innerHTML);


//formulaire facture traitement
document.getElementById("submit").addEventListener("click", function(event){
    event.preventDefault(); //empeche le rechargement de la page formulaire

    document.getElementById("q1").value = 55; 

    document.getElementById("q2").value = 45; 
    
    document.getElementById("q3").value = 30; 
    
    document.getElementById("q4").value = 25; 
    
    document.getElementById("q5").value = 65; 

    let p1 = document.getElementById("p1");
    p1.value= 12.50;

    let p2 = document.getElementById("p2");
    p2.value= 23.50;

    let p3 = document.getElementById("p3");
    p3.value= 34.50;

    let p4 = document.getElementById("p4");
    p4.value= 45.50;

    let p5 = document.getElementById("p5");
    p5.value= 56.50;



  //calculer quantité/prix et afficher le total ligne
 /*
 -variable quantité
 -variable prix
 -calcule= quantité*prix
 -afficher le total
 */
//calculer(q1 , p1);  //fonction avec passage de paramètres

//tableau les quantités et les prix
let tabq = [q1.value,q2.value,q3.value,q4.value,q5.value];
let tabp = [p1.value,p2.value,p3.value,p4.value,p5.value];


calculer(tabq, tabp);


});//fin fonction anonyme
function calculer(quantites,prix)
{


  let nbrq = quantites.length;
  let totals = document.getElementsByClassName("total")
  let subTotal = [];
 
  

  /*subTotal=(quantites[0]*prix[0]);
  console.log ( subTotal)
  totals[5].innerHTML = subTotal*/


  for (let i=0; i< nbrq; i++)
  {
    for(let t = 0; t < nbrq; t++  )
    {
      // i et t
       if( i === t )
       {
         totals[t].innerHTML = quantites[i] * prix[1];

         //sto
         subTotal.push( (quantites[i] * prix[1]) );

         
       
       }


    }

   
    /*console.log( quantités [i]);
    console.log(prix[i]);*/
    //console.log(quantites[i] * prix[i]);
    //calculer les totalsline
    //console.log(totals[1].innerHTML=quantites[i]*prix[i])
    
   


   }
   //comment faire une addition des sommes dans notee array
   console.log(subTotal);
  
  

   //crée une fonction calculer totalal
   function getTotal(valp,valc)
   {
     //faire une addition dans un tableau
     return valp+valc;
   }

   
   //console.log( subTotal.reduce( getTotal,0) );
   
  totals[5].innerHTML=  subTotal.reduce( getTotal,0)

  let tax = 0.055;
  totals[6].innerHTML =  subTotal.reduce( getTotal,0) * tax;

 //let totalTaxe = totals[6].innerHTML = totalHt *tax


  totals[7].innerHTML =  subTotal.reduce( getTotal,0) * tax + subTotal.reduce( getTotal,0)
   //totals[7]. innerHTML = totalTaxe + totalHt;

   //alert(quantités + ""+prix);





    //calculer ma facture
    //alert(quantités.value * prix.value);
    //afficher dans totalLine
    //let totals = document.getElementsByClassName("total");//collection >>tableau
    //alert(totals.length);
    //permet de récupérer les index
    //let compteTotal = totals.length; //elements dans le tableau
//test pr calculer et afficher un total
    //let afficheTotal = quantités.value * prix.value;
    //récupérer index 0 et afficher le calcul total
  // totals[0].innerHTML = afficheTotal;


}
$("body").css("background-color","blue");

$(".col-9").css("background-color"," white");
$("p").css("text-align","center");
$("h2").css("text-align","center");
$("itop-bg.png").css("background-img","brun")





