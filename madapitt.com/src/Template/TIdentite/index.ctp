 <!-- Mask & flexbox options-->
    
 <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
      
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row mt-5">
          <!--Grid column-->
          <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
            <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Bienvenue sur Madapitt </h1>
            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
            <h4 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Club de Pittbull privé de la Martinique</h4>
            
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">
            
            <!--Form-->
          <!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog cascading-modal" role="document">
  <!--Content-->
  <div class="modal-content">

    <!--Modal cascading tabs-->
    <div class="modal-c-tabs">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
            Connexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
            Inscription</a>
        </li>
      </ul>

      <!-- Tab panels -->
      <div class="tab-content">
        <!--Panel 7-->
        <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

          <!--Body-->
          <div class="modal-body mb-1">
            <div class="md-form form-sm mb-5">
              <i class="fas fa-envelope prefix"></i>
              <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
              <label data-error="wrong" data-success="right" for="modalLRInput10">Email</label>
            </div>

            <div class="md-form form-sm mb-4">
              <i class="fas fa-lock prefix"></i>
              <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
              <label data-error="wrong" data-success="right" for="modalLRInput11">Mot de passe</label>
            </div>
            <div class="text-center mt-2">
              <button class="btn btn-info">Connexion <i class="fas fa-sign-in ml-1"></i></button>
            </div>
          </div>
          <!--Footer-->
          <div class="modal-footer">
            <div class="options text-center text-md-right mt-1">
              
              <p> <a href="#" class="blue-text">Mot de passe oublier ?</a></p>
            </div>
            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Fermer</button>
          </div>

        </div>
        <!--/.Panel 7-->

        <!--Panel 8-->
        <div class="tab-pane fade" id="panel8" role="tabpanel">

          <!--Body-->
          <div class="modal-body">
            <form class="text-center" action="#!">

              <p class="h4 mb-4">Inscription</p>
  
              <div class="form-row mb-4">
                <div class="col">
                  <!-- First name -->
                  <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nom">
                </div>
                <div class="col">
                  <!-- Last name -->
                  <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Prénom">
                </div>
              </div>
  
              <!-- E-mail -->
              <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">
  
              <!-- Password -->
              <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Mot de passe"
                aria-describedby="defaultRegisterFormPasswordHelpBlock">
              <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                Plus de 8 caractères et doit comporter au moins une majuscule
              </small>
  
              <!-- Phone number -->
              <input type="number" id="defaultRegisterPhonePassword" class="form-control" placeholder="Téléphone"
                aria-describedby="defaultRegisterFormPhoneHelpBlock">
              
  
             
  
              <!-- Sign up button -->
              <button class="btn btn-info my-4 btn-block" type="submit">Inscription</button>
  
              
  

  
            </form>
          </div>
          <!--Footer-->
          <div class="modal-footer">
            <div class="options text-right">
              <p class="pt-1"><a href="#" class="blue-text">Vous avez un compte? </a></p>
            </div>
            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Fermer</button>
          </div>
        </div>
        <!--/.Panel 8-->
      </div>

    </div>
  </div>
  <!--/.Content-->
</div>
</div>
<!--Modal: Login / Register Form-->

<div class="text-center">
<a href="" class="btn btn-info font-weight-bold" data-toggle="modal" data-target="#modalLRForm">Connexion</a>
</div>
            <!--/.Form-->
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->



<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TIdentite[]|\Cake\Collection\CollectionInterface $tIdentite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New T Identite'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tIdentite index large-9 medium-8 columns content">
    <h3><?= __('T Identite') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ididentite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reference') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('puce') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexe') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_add') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_update') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tIdentite as $tIdentite): ?>
            <tr>
                <td><?= $this->Number->format($tIdentite->ididentite) ?></td>
                <td><?= h($tIdentite->reference) ?></td>
                <td><?= h($tIdentite->nom) ?></td>
                <td><?= h($tIdentite->puce) ?></td>
                <td><?= h($tIdentite->age) ?></td>
                <td><?= h($tIdentite->sexe) ?></td>
                <td><?= h($tIdentite->photo) ?></td>
                <td><?= h($tIdentite->date_add) ?></td>
                <td><?= h($tIdentite->date_update) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tIdentite->ididentite]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tIdentite->ididentite]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tIdentite->ididentite], ['confirm' => __('Are you sure you want to delete # {0}?', $tIdentite->ididentite)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
