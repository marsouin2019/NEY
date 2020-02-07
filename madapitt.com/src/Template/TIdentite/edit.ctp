<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TIdentite $tIdentite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tIdentite->ididentite],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tIdentite->ididentite)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List T Identite'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tIdentite form large-9 medium-8 columns content">
    <?= $this->Form->create($tIdentite) ?>
    <fieldset>
        <legend><?= __('Edit T Identite') ?></legend>
        <?php
            echo $this->Form->control('reference');
            echo $this->Form->control('nom');
            echo $this->Form->control('puce');
            echo $this->Form->control('age');
            echo $this->Form->control('sexe');
            echo $this->Form->control('photo');
            echo $this->Form->control('date_add');
            echo $this->Form->control('date_update');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
