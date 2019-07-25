//jquery/javascript
//javascript ses un langage de programation 
//jquery ses une librerie qui contien un ensemble de fonction

//en jquery

$("body").css("background-color","blue");
$("body").css("color", "yellow");
$(".nav-item").css("background-color" , "grey");
$("a").css("color","red");

//mettre un background gris pour toi les li qui ont la classe nav-item
$(".list-group").css("background-color","pink");
//height()
//document.getElementById("info").innerHTML= $(window).height()
//width
//document.getElementById("info").innerHTML= $(window).width()
document.getElementById("info").innerHTML= $(".nav"). innerHeight()
document.getElementById("info").innerHTML= $(".nav"). innerWidth()
//addClass
$("p").addClass("dweb")

