<?php
  include("includes/header.php");
?>
<?php
include("includes/navigation.php");
?>
<div class="container" >
<h1>Profils</h1>

<form>
   
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="frmEmailAdmin" name="frmEmailAdmin" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Ne partagez jamais vos identifiants avec quelqu'un d'autre.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control" id="frmPasswordAdmin" name="frmPasswordAdmin">
  </div>
  <div class="form-group form-check">
   
    <button type="submit" id="frmRegisterAdmin" name="frmForm" value="frmRegisterAdmin" class="btn btn-primary btn-lg btn-block">Block level button</button>
  </div>
  
</form>

    </div>

<?php
include("includes/footer.php");
?>