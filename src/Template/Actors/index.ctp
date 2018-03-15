<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Actor[]|\Cake\Collection\CollectionInterface $actors
*/
?>

<?php foreach ($actors as $actor): ?>
  <div class="w3-panel w3-card">
    <div class="w3-row w3-cell-row">
      <div class="w3-col l2 m3 s5 w3-container">
        <div class="w3-panel w3-small w3-center">

          <?php if (isset($actor->actor_photos[0])): ?>
            <?= $this->Html->image($actor->actor_photos[0]->file , ['alt' => 'Actor Photo', 'class' => 'w3-round w3-image', 'style' => 'width:100px;max-width:150px']); ?>
          <?php else: ?>
            <?= $this->Html->image('Photo_Missing_173.png' , ['alt' => 'Actor Photo', 'class' => 'w3-round w3-image', 'style' => 'width:100px;max-width:150px']); ?>
          <?php endif ?>

          <?= h($actor->artist_name) ?>
        </div>
      </div>
      <div class="w3-col l5 w3-hide-small w3-hide-medium w3-container">
        <div class="w3-panel">
          <?php for ($i = 1; $i <= 3; $i++): ?>
            <?php if (isset($actor->actor_photos[$i])): ?>
              <?= $this->Html->image($actor->actor_photos[$i]->file , ['alt' => 'Actor Photo', 'class' => 'w3-round w3-image', 'style' => 'width:70px;max-width:150px']); ?>
            <?php endif ?>
          <?php endfor ?>
        </div>
        <div>
          <?= $this->Html->image('BetterCastMe-Logo1.png', ['alt' => 'Logo', 'class' => 'w3-round w3-image w3-padding', 'style' => 'height:60px;max-height:60px']); ?>
          Agency XYZ
        </div>
      </div>
      <div class='w3-col w3-display l5 m9 s7 w3-padding'>
        <ul class="w3-ul w3-small">
        <!-- <table class="w3-table w3-small" > -->
          <?php echo $this->element('Lists/actordetails-condensed', ['key' => __('Name'), 'value' => h($actor->user->firstname) . ' ' . h($actor->user->lastname)]); ?>
          <?php echo $this->element('Lists/actordetails-condensed', ['key' => __('Artist Name'), 'value' => h($actor->artist_name)]); ?>
          <?php echo $this->element('Lists/actordetails-condensed', ['key' => __('Date of Birth'), 'value' => h($actor->birthdate)]); ?>
          <?php if (isset($genderList[$actor->gender])): ?>
            <?php echo $this->element('Lists/actordetails-condensed', ['key' => __('Gender'), 'value' => h($genderList[$actor->gender])]); ?>
          <?php endif ?>
          <?php echo $this->element('Lists/actordetails-condensed', ['key' => __('Playing Age'), 'value' => h($this->Number->format($actor->playing_age_from)) . '-' . h($this->Number->format($actor->playing_age_to))]); ?>
          <?php echo $this->element('Lists/actordetails-condensed', ['key' => __('Eye Color'), 'value' => h($eyecolorList[$actor->eyecolor_id])]); ?>
          <?php if (isset($haircolorList[$actor->haircolor_id])): ?>
            <?php echo $this->element('Lists/actordetails-condensed', ['key' => __('Hair Color'), 'value' => h($haircolorList[$actor->haircolor_id])]); ?>
          <?php endif ?>
          <?php echo $this->element('Lists/actordetails-condensed', ['key' => __('Height'), 'value' => h($this->Number->format($actor->height_cm))]); ?>
        </ul>
        </br>
        <div class='w3-container w3-right w3-padding'>
          <?= $this->Html->link(__('Details'), ['action' => 'view', $actor->id], ['class' => 'w3-button w3-small w3-border w3-padding-small w3-round-xlarge w3-ripple']) ?>
        </div>
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
