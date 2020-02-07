<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TProprietaire $tProprietaire
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List T Proprietaire'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tProprietaire form large-9 medium-8 columns content">
    <?= $this->Form->create($tProprietaire) ?>
    <fieldset>
        <legend><?= __('Add T Proprietaire') ?></legend>
        <?php
            echo $this->Form->control('ididentite');
            echo $this->Form->control('nom');
            echo $this->Form->control('prenom');
            echo $this->Form->control('telephone');
            echo $this->Form->control('email');
            echo $this->Form->control('date_add');
            echo $this->Form->control('date_update');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
