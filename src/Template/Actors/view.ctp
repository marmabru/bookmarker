<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actor $actor
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
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
</nav> -->

<div class='w3-container w3-card'>
  <?php foreach ($actor->actor_photos as $actorPhoto): ?>
      <?php if ($actorPhoto->photo_type == "1"): ?>
        <?= $this->Html->image($actorPhoto->file , ['alt' => 'Actor Photo', 'class' => 'w3-round w3-image w3-padding', 'style' => 'width:70%;max-width:200px']); ?>
      <?php endif; ?>
  <?php endforeach; ?>
  <?php foreach ($actor->actor_photos as $actorPhoto): ?>
      <?php if ($actorPhoto->photo_type == "2"): ?>
        <?= $this->Html->image($actorPhoto->file , ['alt' => 'Actor Photo', 'class' => 'w3-round w3-image w3-padding', 'style' => 'width:70%;max-width:200px']); ?>
      <?php endif; ?>
  <?php endforeach; ?>
</div>
<div class="actors view large-9 medium-8 columns content">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Artist Name') ?></th>
            <td><?= h($actor->artist_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= $genderList[$actor->gender] ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Playing Age') ?></th>
            <td><?= $this->Number->format($actor->playing_age_from) ?> - <?= $this->Number->format($actor->playing_age_to) ?></td>
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
            <td><?= $this->Number->format($actor->height_cm) ?>cm</td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthdate') ?></th>
            <td><?= h($actor->birthdate) ?></td>
        </tr>
    </table>
</div>
