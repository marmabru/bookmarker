<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActorPhoto $actorPhoto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $actorPhoto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $actorPhoto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Actor Photos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="actorPhotos form large-9 medium-8 columns content">
    <?= $this->Form->create($actorPhoto) ?>
    <fieldset>
        <legend><?= __('Edit Actor Photo') ?></legend>
        <?php
            echo $this->Form->control('actor_id');
            echo $this->Form->control('photo_type');
            echo $this->Form->control('file');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
