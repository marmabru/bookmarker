<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActorPhoto $actorPhoto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Actor Photo'), ['action' => 'edit', $actorPhoto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Actor Photo'), ['action' => 'delete', $actorPhoto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actorPhoto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Actor Photos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actor Photo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="actorPhotos view large-9 medium-8 columns content">
    <h3><?= h($actorPhoto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('File') ?></th>
            <td><?= h($actorPhoto->file) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($actorPhoto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actor Id') ?></th>
            <td><?= $this->Number->format($actorPhoto->actor_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Type') ?></th>
            <td><?= $this->Number->format($actorPhoto->photo_type) ?></td>
        </tr>
    </table>
</div>
