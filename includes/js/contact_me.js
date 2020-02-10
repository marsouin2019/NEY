$("#name").blur(function(){
  if($(this).val().length == 0)
{
  $(this).addClass("is-invalid");
}else{
  $(this).removeClass("is-invalid").addClass("is-valid");
}
});

$("#email").blur(function(){
  if($(this).val().length == 0)
{
  $(this).addClass("is-invalid");
}else{
  $(this).removeClass("is-invalid").addClass("is-valid");
}
});

$("#phone").blur(function(){
  if($(this).val().length == 0)
{
  $(this).addClass("is-invalid");
}else{
  $(this).removeClass("is-invalid").addClass("is-valid");
}
});

$("#message").blur(function(){
  if($(this).val().length == 0)
{
  $(this).addClass("is-invalid");
}else{
  $(this).removeClass("is-invalid").addClass("is-valid");
}
});

