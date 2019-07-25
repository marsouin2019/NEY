var marsouins=["VEROUS","RENAY","VITULIN","TERINE","ROBYNEL","MAXIMIN","MARIE-LUCE","RENARD-VATON","NEY","THOME"];
var copie=[];
console.log(marsouins);
console.log(marsouins[4]);
console.log(marsouins.length);
var nbr=marsouins.length;
for(var i=0;i<nbr;i++)
{ copie.push(marsouins[i]);
    console.log(copie)

}
var last= marsouins[marsouins.length-1];
document.write(last);

marsouins.forEach(function(item, index, array){ console.log(item, index)});

var addNewMarsouin = marsouins.push("POPOTTE");
//document.write(marsouins);
var deletelLastMarsouin = marsouins.pop();
//document.write(marsouins);
var deleteFirsMarsouin = marsouins.shift();
//document.write(marsouins);
var question = prompt("Est-ce que Monsieur RENARD-VATON, a compris le cours? ");
if(question!=null){ document.getElementById("reponse") .innerHTML= question;}

var question = prompt("Est-ce que Monsieur RENAY, est mentalement stable? ");
if(question!=null){document.getElementById("reponse") .innerHTML= question;} 



var genre= prompt("etes");

if(genre!=null){
                    alert(genre) }
                    else {
                    alert("vous n'avez pas repondu!")}



