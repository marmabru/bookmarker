<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actor[]|\Cake\Collection\CollectionInterface $actors
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Actor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actor Photos'), ['controller' => 'ActorPhotos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actor Photo'), ['controller' => 'ActorPhotos', 'action' => 'add']) ?></li>
    </ul>
</nav> -->
<!-- <div class="actors index large-9 medium-8 columns content"> -->
    <!-- <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('artist_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('eyecolor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('haircolor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('height_cm') ?></th>
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
    </table> -->


    <?php foreach ($actors as $actor): ?>
    <div class="w3-panel w3-card">
      <div class="w3-row">
        <div class="w3-col l2 m3 s5 w3-container">
          <div class="w3-panel w3-small">

            <?php foreach ($actor->actor_photos as $actorPhoto): ?>
                <?php if ($actorPhoto->photo_type == "1"): ?>
                  <?= $this->Html->image($actorPhoto->file , ['alt' => 'Actor Photo', 'class' => 'w3-round w3-image', 'style' => 'width:100px;max-width:150px']); ?>
                <?php endif; ?>
            <?php endforeach; ?>

            <!-- <?= $this->Html->image('Actor-Pic-Sample.jpg', ['alt' => 'Picture', 'class' => 'w3-round w3-image', 'style' => 'width:100px;max-width:150px']); ?> -->
            <?= h($actor->artist_name) ?>
          </div>
        </div>
        <div class="w3-col l5 w3-hide-small w3-hide-medium w3-container">
          <div class="w3-panel">
            <?php foreach ($actor->actor_photos as $actorPhoto): ?>
                <?php if ($actorPhoto->photo_type == "2"): ?>
                  <?= $this->Html->image($actorPhoto->file , ['alt' => 'Actor Photo', 'class' => 'w3-round w3-image', 'style' => 'width:70px;max-width:150px']); ?>
                <?php endif; ?>
            <?php endforeach; ?>

            <!-- <?= $this->Html->image('Photo_Missing_173.png', ['alt' => 'Picture', 'class' => 'w3-round w3-image w3-border', 'style' => 'height:100px;max-height:150px']); ?>
            <?= $this->Html->image('Photo_Missing_260.png', ['alt' => 'Picture', 'class' => 'w3-round w3-image w3-border', 'style' => 'height:100px;max-height:150px']); ?>
            <?= $this->Html->image('Photo_Missing_173.png', ['alt' => 'Picture', 'class' => 'w3-round w3-image w3-border', 'style' => 'height:100px;max-height:150px']); ?> -->
          </div>
          <div>
            <?= $this->Html->image('BetterCastMe-Logo1.png', ['alt' => 'Logo', 'class' => 'w3-round w3-image w3-padding', 'style' => 'height:60px;max-height:60px']); ?>
            Agency XYZ
          </div>
        </div>
        <div class="w3-col l5 m9 s7 w3-container w3-small">
          <?= __('Name') . ': ' . h($actor->user->firstname) . ' ' . h($actor->user->lastname)?> </br>
          <?= __('Artist Name') . ': ' . h($actor->artist_name) ?> </br>
          <?= __('Birthdate') . ': ' . h($actor->birthdate) ?> </br>
          <?= __('Gender') . ': ' . $genderList[$actor->gender] ?> </br>
          <?= __('Playing Age') . ': ' . h($this->Number->format($actor->playing_age_from)) . '-' . h($this->Number->format($actor->playing_age_to)) ?> </br>
          <?= __('Eye Color') . ': ' . $this->Number->format($actor->eyecolor) ?> </br>
          <?= __('Hair Color') . ': ' . $this->Number->format($actor->haircolor) ?> </br>
          <?= __('Height') . ': ' . $this->Number->format($actor->height_cm) ?>cm </br>
          </br>
          <?= $this->Html->link(__('Details'), ['action' => 'view', $actor->id]) ?>
        </div>
      </div>
    </div>

    <?php endforeach; ?>

    <div class="w3-center">
      <div class="w3-bar">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
      </div>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
