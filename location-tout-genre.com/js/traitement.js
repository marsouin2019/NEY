//$ ("#frmRegister").validate();

//vérifier taille champs password

//les élément que j'ai besoin
/*$("#frmPass");
$("#frmPassb");
$("#frmRegister");*/

$( "#frmPrenom" ).blur(function() {
  if($(this).val().length == 0 )
  {

     /* alert( $(this).val().length );
      return false;*/
      $(this).addClass("is-invalid");
  }
  else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
 
    
});

$( "#frmNom" ).blur(function() {
      if($(this).val().length == 0 )
      {
          $(this).addClass("is-invalid");
      }
      else{
        $(this).removeClass("is-invalid").addClass("is-valid");
      }
     
        
});

$( "#frmEmail" ).blur(function() {
          if($(this).val().length == 0 )
          {
              $(this).addClass("is-invalid");
          }
          else{
            $(this).removeClass("is-invalid").addClass("is-valid");
          }
});




$( "#frmPass" ).blur(function() {
  if($(this).val().length == 0 )
  {
      $(this).addClass("is-invalid");
  }
  else{
    if($(this).val().length < 6 )
    {
      $(this).addClass("is-invalid");

    } else {
      if($(this).val().length > 12 )
      {
        $(this).addClass("is-invalid");

      } else {
        $(this).removeClass("is-invalid").addClass("is-valid");
      }


    }
    
    
    
    //$(this).removeClass("is-invalid").addClass("is-valid")
  }
 
    
});     


$( "#frmPassb" ).blur(function() {
 

  if($(this).val().length == 0 )
  {
      $(this).addClass("is-invalid");
  }
  else{
    if($(this).val().length < 6 )
    {
      $(this).addClass("is-invalid");

    } else {
      if($(this).val().length > 12 )
      {
        $(this).addClass("is-invalid");

      } else {
        $(this).removeClass("is-invalid").addClass("is-valid");
      }


    }
    
    
    
    //$(this).removeClass("is-invalid").addClass("is-valid")
  }
 
    
         
});


           

    

    /*$( "#frmPass" ).blur(function() {
      if($(this).val(6,12).length )
     
          alert( $(this).val().length );
          return false;
        });
    */


    

    /*



     //test si chaine est plus petit que 6 caractère
                if( $(this).val().length < 6)
                {
                    $(this).addClass("is-invalid");
                }
                else
                {
                  //teste si chaine est plus grande que 12 caractère
                  if( $(this).val().length > 12)
                  {
                    $(this).removeClass("is-invalid");
                  }
                  else
                  {
                    $(this).removeClass("is-invalid").addClass("is-valid");
                  }
                     
                }

                //$(this).removeClass("is-invalid").addClass("is-valid")

                */

 