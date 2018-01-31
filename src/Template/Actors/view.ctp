<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actor $actor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Actor'), ['action' => 'edit', $actor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Actor'), ['action' => 'delete', $actor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Actors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actor Photos'), ['controller' => 'ActorPhotos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actor Photo'), ['controller' => 'ActorPhotos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="actors view large-9 medium-8 columns content">
    <h3><?= h($actor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $actor->has('user') ? $this->Html->link($actor->user->id, ['controller' => 'Users', 'action' => 'view', $actor->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Artist Name') ?></th>
            <td><?= h($actor->artist_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($actor->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($actor->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Playing Age From') ?></th>
            <td><?= $this->Number->format($actor->playing_age_from) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Playing Age To') ?></th>
            <td><?= $this->Number->format($actor->playing_age_to) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Eyecolor') ?></th>
            <td><?= $this->Number->format($actor->eyecolor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Haircolor') ?></th>
            <td><?= $this->Number->format($actor->haircolor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Height Cm') ?></th>
            <td><?= $this->Number->format($actor->height_cm) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthdate') ?></th>
            <td><?= h($actor->birthdate) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Actor Photos') ?></h4>
        <?php if (!empty($actor->actor_photos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Actor Id') ?></th>
                <th scope="col"><?= __('Photo Type') ?></th>
                <th scope="col"><?= __('File') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($actor->actor_photos as $actorPhotos): ?>
            <tr>
                <td><?= h($actorPhotos->id) ?></td>
                <td><?= h($actorPhotos->actor_id) ?></td>
                <td><?= h($actorPhotos->photo_type) ?></td>
                <td><?= h($actorPhotos->file) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ActorPhotos', 'action' => 'view', $actorPhotos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ActorPhotos', 'action' => 'edit', $actorPhotos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ActorPhotos', 'action' => 'delete', $actorPhotos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actorPhotos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
