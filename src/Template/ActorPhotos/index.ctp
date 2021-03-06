<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActorPhoto[]|\Cake\Collection\CollectionInterface $actorPhotos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Actor Photo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actorPhotos index large-9 medium-8 columns content">
    <h3><?= __('Actor Photos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('actor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($actorPhotos as $actorPhoto): ?>
            <tr>
                <td><?= $this->Number->format($actorPhoto->id) ?></td>
                <td><?= $this->Number->format($actorPhoto->actor_id) ?></td>
                <td><?= $this->Number->format($actorPhoto->photo_type) ?></td>
                <td><?= h($actorPhoto->file) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $actorPhoto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $actorPhoto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $actorPhoto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actorPhoto->id)]) ?>
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
