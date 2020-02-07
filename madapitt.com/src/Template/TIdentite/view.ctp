<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TIdentite $tIdentite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit T Identite'), ['action' => 'edit', $tIdentite->ididentite]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete T Identite'), ['action' => 'delete', $tIdentite->ididentite], ['confirm' => __('Are you sure you want to delete # {0}?', $tIdentite->ididentite)]) ?> </li>
        <li><?= $this->Html->link(__('List T Identite'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New T Identite'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tIdentite view large-9 medium-8 columns content">
    <h3><?= h($tIdentite->ididentite) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Reference') ?></th>
            <td><?= h($tIdentite->reference) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($tIdentite->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Puce') ?></th>
            <td><?= h($tIdentite->puce) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= h($tIdentite->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexe') ?></th>
            <td><?= h($tIdentite->sexe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($tIdentite->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ididentite') ?></th>
            <td><?= $this->Number->format($tIdentite->ididentite) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Add') ?></th>
            <td><?= h($tIdentite->date_add) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Update') ?></th>
            <td><?= h($tIdentite->date_update) ?></td>
        </tr>
    </table>
</div>
