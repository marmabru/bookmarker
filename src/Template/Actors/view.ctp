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

<div class='w3-container w3-card w3-theme-l3'>
  <h4><?= __('Personal Info') ?></h4>
</div>

<div class='w3-col w3-display l5 m9 s7 w3-theme-l5'>
  <table class="w3-table w3-normal" >
    <?php echo $this->element('Lists/actordetails', ['key' => __('Name'), 'value' => h($actor->user->firstname) . ' ' . h($actor->user->lastname)]); ?>
    <?php echo $this->element('Lists/actordetails', ['key' => __('Artist Name'), 'value' => h($actor->artist_name)]); ?>
    <?php echo $this->element('Lists/actordetails', ['key' => __('Birthdate'), 'value' => $actor->birthdate->i18nFormat([\IntlDateFormatter::MEDIUM, \IntlDateFormatter::NONE])]); ?>
    <?php if (isset($genderList[$actor->gender])): ?>
      <?php echo $this->element('Lists/actordetails', ['key' => __('Gender'), 'value' => h($genderList[$actor->gender])]); ?>
    <?php endif ?>
    <?php echo $this->element('Lists/actordetails', ['key' => __('Playing Age'), 'value' => h($this->Number->format($actor->playing_age_from)) . '-' . h($this->Number->format($actor->playing_age_to))]); ?>
    <?php echo $this->element('Lists/actordetails', ['key' => __('Eye Color'), 'value' => h($this->Number->format($actor->eyecolor))]); ?>
    <?php echo $this->element('Lists/actordetails', ['key' => __('Hair Color'), 'value' => h($this->Number->format($actor->haircolor))]); ?>
    <?php echo $this->element('Lists/actordetails', ['key' => __('Height'), 'value' => h($this->Number->format($actor->height_cm))]); ?>
  </table>
  </br>
</div>

<div class='w3-container w3-card w3-theme-l3'>
  <h4><?= __('Appearance') ?></h4>
</div>
Bla bla to be filled with important information

<div class='w3-container w3-card w3-theme-l3'>
  <h4><?= __('Experience') ?></h4>
</div>
Bla bla to be filled with important information
