<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bookmark $bookmark
 */
?>

    <!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bookmarks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav> -->

<div class="w3-container">
  <div class="w3-card-4 w3-margin-top w3-theme-d5">
    <div class="w3-container">
        <h4><?= __('New Bookmark') ?></h4>
    </div>

    <?= $this->Form->create($bookmark, ['class' => 'w3-container w3-card-4 w3-theme-l3']) . PHP_EOL ?>

    <?php
        echo $this->Form->control('user_id', ['options' => $users, 'class' => 'w3-input w3-border']) . PHP_EOL;
        echo $this->Form->control('title', ['class' => 'w3-input w3-border']) . PHP_EOL;
        echo $this->Form->control('description', ['class' => 'w3-input w3-border']) . PHP_EOL;
        echo $this->Form->control('url', ['class' => 'w3-input w3-border']) . PHP_EOL;
        echo $this->Form->control('tags._ids', ['options' => $tags, 'class' => 'w3-input w3-border']) . PHP_EOL;
    ?>
    <p>
    <p>
    <?= $this->Form->button(__('Submit'), ['class' => 'w3-button w3-border w3-theme-l1 w3-round-xlarge w3-ripple w3-padding-small w3-right']) ?>
    <p>
    <?= $this->Form->end() ?>
    </form>
  </div>
</div>
