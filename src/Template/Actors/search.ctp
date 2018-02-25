<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actor $actor
 */
?>

<div class="actors form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Search Actor') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('artist_name');
            echo $this->Form->control('birthdate', ['empty' => true]);
            echo $this->Form->control('gender');
            echo $this->Form->control('playing_age_from');
            echo $this->Form->control('playing_age_to');
            echo $this->Form->control('eyecolor');
            echo $this->Form->control('haircolor');
            echo $this->Form->control('height_cm');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
