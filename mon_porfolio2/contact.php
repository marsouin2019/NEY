 <!-- Header -->
 <?php
  include("includes/header.php");
?>
 <!-- Navigation -->
<?php
  include("includes/navigation.php");
?>
 
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('https://gite-le-marival.fr/wp-content/uploads/2019/08/contact-gite-le-marival-hebergement-zoo-de-beauval-chateau-de-la-loire.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Contactez moi</h1>
            <span class="subheading">Vous avez des questions? J'ai les réponses.</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto"> 
      
        <p>Vous souhaitez me contacter? Remplissez le formulaire ci-dessous pour m'envoyer un message et je vous répondrai dans les plus brefs délais!</p>
        <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
        <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
        <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        <form action="traitement.php" method="POST" name="contact" >
                         <div class="form-group row">
                        <label for="inputNom3" class="col-sm-2 col-form-label">Sujet</label>
                        <div class="col-sm-10">
                          <input type="text" name="sujet" required="required" class="form-control" id="frmSujet" placeholder="Sujet..." required>
                        </div>
                      </div>      
                      <div class="form-group row">
                        <label for="inputNom3" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                          <input type="text" name="nom" required="required" class="form-control" id="frmNom" placeholder="Tapez votre nom..." required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPrénom3" class="col-sm-2 col-form-label">Prénom</label>
                        <div class="col-sm-10">    
                          <input type="text"  name="prenom" class="form-control" id="frmPrenom" placeholder="Tapez votre prénom..." required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" name="email" class="form-control" id="frmEmail" placeholder="Rentrez votre email..."  required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputTel3" class="col-sm-2 col-form-label">Tel</label>
                        <div class="col-sm-10">
                          <input type="tel" name="tel" class="form-control" id="frmTel" placeholder="Entrez votre numéro de téléphone..." required>
                        </div>
                      </div>
                     
                    <div class="form-group">
                      <label for="message">Message :</label>
                      <textarea  id="frmMsg" name="message" class="form-control" maxlength="200"  rows="3" placeholder="Laissez votre message... (200 caractères max)"></textarea>
                    </div>

                    <div class="container">
                      <div class="col-12">    
                      <input type="submit" class="btn btn-primary"   value="Envoyer"  id="sendMessageButton">
                       
                       <?
                       $id=1;
                       include("comments/add_commentaire.php");
                       ?>
                      
                        </div>
                    </div>
       
                  </form> 
              

      </div>
    </div>
  </div>

  <hr>
  <!-- Pager -->
  <div class="clearfix">
          <a class="btn btn-primary float-right" href="http://localhost/mon_porfolio2/index.php">Page suivante &rarr;</a>
  </div>
 <!-- Footer -->
 <?php
  include("includes/footer.php");
?>
