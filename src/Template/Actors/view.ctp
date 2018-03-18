<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actor $actor
 */
?>

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

<div class='w3-container w3-theme-l3'><h4><?= __('Personal Info') ?></h4></div>
<div class="w3-cell-row w3-theme-l5 w3-mobile">
  <div class="w3-container w3-cell w3-mobile" style="min-width:320px">
    <ul class="w3-ul">
      <?php echo $this->element('Lists/actordetails', ['key' => __('Name'), 'value' => h($actor->user->firstname) . ' ' . h($actor->user->lastname)]); ?>
      <?php echo $this->element('Lists/actordetails', ['key' => __('Artist Name'), 'value' => h($actor->artist_name)]); ?>
    </ul>
  </div>
  <div class="w3-container w3-cell w3-mobile" style="min-width:320px">
    <ul class="w3-ul">
      <?php echo $this->element('Lists/actordetails', ['key' => __('Date of Birth'), 'value' => $actor->birthdate->i18nFormat([\IntlDateFormatter::MEDIUM, \IntlDateFormatter::NONE])]); ?>
      <?php if (isset($genderList[$actor->gender])): ?>
        <?php echo $this->element('Lists/actordetails', ['key' => __('Gender'), 'value' => h($genderList[$actor->gender])]); ?>
      <?php endif ?>
    </ul>
  </div>
</div>

<div class='w3-container w3-theme-l3'><h4><?= __('Appearance') ?></h4></div>
<div class="w3-cell-row w3-theme-l5 w3-mobile">
  <div class="w3-container w3-cell w3-mobile" style="min-width:320px">
    <ul class="w3-ul">
      <?php if (isset($haircolorList[$actor->haircolor_id])): ?>
        <?php echo $this->element('Lists/actordetails', ['key' => __('Hair Color'), 'value' => h($haircolorList[$actor->haircolor_id])]); ?>
      <?php endif ?>
      <?php echo $this->element('Lists/actordetails', ['key' => __('Eye Color'), 'value' => h($eyecolorList[$actor->eyecolor_id])]); ?>
    </ul>
  </div>
  <div class="w3-container w3-cell w3-mobile" style="min-width:320px">
    <ul class="w3-ul">
      <?php echo $this->element('Lists/actordetails', ['key' => __('Playing Age'), 'value' => h($this->Number->format($actor->playing_age_from)) . '-' . h($this->Number->format($actor->playing_age_to))]); ?>
      <?php echo $this->element('Lists/actordetails', ['key' => __('Height'), 'value' => h($this->Number->format($actor->height_cm) . 'cm')]); ?>

    </ul>
  </div>
</div>

<div class='w3-container w3-theme-l3'><h4><?= __('Skills') ?></h4></div>
<div class="w3-cell-row w3-theme-l5 w3-mobile">
  <div class="w3-container w3-cell w3-mobile" style="min-width:320px">
    <ul class="w3-ul">
      <div class='w3-text-gray'><h5><?= __('Sports') ?></h5></div>
      <?php if (empty($actor->sport_skills)): ?>
        <?php echo $this->element('Lists/actordetails', ['key' => __('<no skills specified>')]); ?>
      <?php endif ?>
      <?php foreach ($actor->sport_skills as $skill): ?>
        <?php echo $this->element('Lists/actordetails', ['key' => h($sportSkillList[$skill->id]), 'metervalue' => h($skill->level)]); ?>
      <?php endforeach; ?>


      <div class='w3-text-gray'><h5><?= __('Dancing') ?></h5></div>
      <?php if (empty($actor->dance_skills)): ?>
        <?php echo $this->element('Lists/actordetails', ['key' => __('<no skills specified>')]); ?>
      <?php endif ?>
      <?php foreach ($actor->dance_skills as $skill): ?>
        <?php echo $this->element('Lists/actordetails', ['key' => h($danceSkillList[$skill->id]), 'metervalue' => h($skill->level)]); ?>
      <?php endforeach; ?>

      <div class='w3-text-gray'><h5><?= __('Singing') ?></h5></div>
        <?php echo $this->element('Lists/actordetails', ['key' => __('<no skills specified>')]); ?>

    </ul>
  </div>
  <div class="w3-container w3-cell w3-mobile" style="min-width:320px">
    <ul class="w3-ul">
      <div class='w3-text-gray'><h5><?= __('Languages') ?></h5></div>
      <?php if (empty($actor->language_skills)): ?>
        <?php echo $this->element('Lists/actordetails', ['key' => __('<no skills specified>')]); ?>
      <?php endif ?>
      <?php foreach ($actor->language_skills as $skill): ?>
        <?php echo $this->element('Lists/actordetails', ['key' => h($languageSkillList[$skill->id]), 'metervalue' => h($skill->level)]); ?>
      <?php endforeach; ?>

      <div class='w3-text-gray'><h5><?= __('Accents') ?></h5></div>
        <?php echo $this->element('Lists/actordetails', ['key' => __('<no skills specified>')]); ?>

      <div class='w3-text-gray'><h5><?= __('Musical Instruments') ?></h5></div>
        <?php echo $this->element('Lists/actordetails', ['key' => __('<no skills specified>')]); ?>
  </ul>
  </div>
</div>

<div class='w3-container w3-theme-l3'><h4><?= __('Experience') ?></h4></div>
<div class="w3-cell-row w3-theme-l5 w3-mobile">
  <div class="w3-container w3-cell w3-mobile" style="min-width:320px">
    <ul class="w3-ul">
      <?php echo $this->element('Lists/actordetails', ['key' => __('Name'), 'value' => h($actor->user->firstname) . ' ' . h($actor->user->lastname)]); ?>
      <?php echo $this->element('Lists/actordetails', ['key' => __('Artist Name'), 'value' => h($actor->artist_name)]); ?>
      <?php echo $this->element('Lists/actordetails', ['key' => __('Date of Birth'), 'value' => $actor->birthdate->i18nFormat([\IntlDateFormatter::MEDIUM, \IntlDateFormatter::NONE])]); ?>
      <?php if (isset($genderList[$actor->gender])): ?>
        <?php echo $this->element('Lists/actordetails', ['key' => __('Gender'), 'value' => h($genderList[$actor->gender])]); ?>
      <?php endif ?>
    </ul>
  </div>
  <div class="w3-container w3-cell w3-mobile" style="min-width:320px">
    <ul class="w3-ul">
      <?php echo $this->element('Lists/actordetails', ['key' => __('Playing Age'), 'value' => h($this->Number->format($actor->playing_age_from)) . '-' . h($this->Number->format($actor->playing_age_to))]); ?>
      <?php echo $this->element('Lists/actordetails', ['key' => __('Eye Color'), 'value' => h($this->Number->format($actor->eyecolor_id))]); ?>
      <?php if (isset($haircolorList[$actor->haircolor_id])): ?>
        <?php echo $this->element('Lists/actordetails', ['key' => __('Hair Color'), 'value' => h($haircolorList[$actor->haircolor_id])]); ?>
      <?php endif ?>
      <?php echo $this->element('Lists/actordetails', ['key' => __('Height'), 'value' => h($this->Number->format($actor->height_cm) . 'cm')]); ?>
    </ul>
  </div>
</div>
