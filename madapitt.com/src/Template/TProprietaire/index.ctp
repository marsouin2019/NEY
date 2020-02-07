<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TProprietaire[]|\Cake\Collection\CollectionInterface $tProprietaire
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New T Proprietaire'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tProprietaire index large-9 medium-8 columns content">
    <h3><?= __('T Proprietaire') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idproprietaire') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ididentite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_add') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_update') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tProprietaire as $tProprietaire): ?>
            <tr>
                <td><?= $this->Number->format($tProprietaire->idproprietaire) ?></td>
                <td><?= $this->Number->format($tProprietaire->ididentite) ?></td>
                <td><?= h($tProprietaire->nom) ?></td>
                <td><?= h($tProprietaire->prenom) ?></td>
                <td><?= h($tProprietaire->telephone) ?></td>
                <td><?= h($tProprietaire->email) ?></td>
                <td><?= h($tProprietaire->date_add) ?></td>
                <td><?= h($tProprietaire->date_update) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tProprietaire->idproprietaire]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tProprietaire->idproprietaire]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tProprietaire->idproprietaire], ['confirm' => __('Are you sure you want to delete # {0}?', $tProprietaire->idproprietaire)]) ?>
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
