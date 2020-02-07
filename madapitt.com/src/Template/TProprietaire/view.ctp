<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TProprietaire $tProprietaire
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit T Proprietaire'), ['action' => 'edit', $tProprietaire->idproprietaire]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete T Proprietaire'), ['action' => 'delete', $tProprietaire->idproprietaire], ['confirm' => __('Are you sure you want to delete # {0}?', $tProprietaire->idproprietaire)]) ?> </li>
        <li><?= $this->Html->link(__('List T Proprietaire'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New T Proprietaire'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tProprietaire view large-9 medium-8 columns content">
    <h3><?= h($tProprietaire->idproprietaire) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($tProprietaire->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?= h($tProprietaire->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($tProprietaire->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($tProprietaire->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idproprietaire') ?></th>
            <td><?= $this->Number->format($tProprietaire->idproprietaire) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ididentite') ?></th>
            <td><?= $this->Number->format($tProprietaire->ididentite) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Add') ?></th>
            <td><?= h($tProprietaire->date_add) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Update') ?></th>
            <td><?= h($tProprietaire->date_update) ?></td>
        </tr>
    </table>
</div>
