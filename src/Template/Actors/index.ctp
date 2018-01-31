<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actor[]|\Cake\Collection\CollectionInterface $actors
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Actor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actor Photos'), ['controller' => 'ActorPhotos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actor Photo'), ['controller' => 'ActorPhotos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actors index large-9 medium-8 columns content">
    <h3><?= __('Actors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('artist_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('playing_age_from') ?></th>
                <th scope="col"><?= $this->Paginator->sort('playing_age_to') ?></th>
                <th scope="col"><?= $this->Paginator->sort('eyecolor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('haircolor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('height_cm') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($actors as $actor): ?>
            <tr>
                <td><?= $this->Number->format($actor->id) ?></td>
                <td><?= $actor->has('user') ? $this->Html->link($actor->user->id, ['controller' => 'Users', 'action' => 'view', $actor->user->id]) : '' ?></td>
                <td><?= h($actor->artist_name) ?></td>
                <td><?= h($actor->birthdate) ?></td>
                <td><?= h($actor->gender) ?></td>
                <td><?= $this->Number->format($actor->playing_age_from) ?></td>
                <td><?= $this->Number->format($actor->playing_age_to) ?></td>
                <td><?= $this->Number->format($actor->eyecolor) ?></td>
                <td><?= $this->Number->format($actor->haircolor) ?></td>
                <td><?= $this->Number->format($actor->height_cm) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $actor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $actor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $actor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actor->id)]) ?>
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
