<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actor $actor
 */
?>

<div class="">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Search Actor') ?></legend>
        <div class="w3-card w3-margin-top">
          <div class='w3-container w3-theme-l3'><h4><?= __('Personal Info') ?></h4></div>
          <div class="w3-cell-row w3-theme-l5 w3-mobile">
            <div class="w3-cell w3-mobile" style="min-width:320px; width:50%;">
              <ul class="w3-ul">
                  <?php echo $this->element('Lists/actorsearch', ['field' => 'firstname', 'label' => __('First Name')]); ?>
                  <?php echo $this->element('Lists/actorsearch', ['field' => 'lastname', 'label' => __('Last Name')]); ?>
                  <?php echo $this->element('Lists/actorsearch', ['field' => 'artist_name', 'label' => __('Artist Name')]); ?>
              </ul>
            </div>
            <div class="w3-cell w3-mobile" style="min-width:320px; width:50%;">
              <ul class="w3-ul">
                <?php echo $this->element('Lists/actorsearch', ['field' => 'birthdate', 'label' => __('Date of Birth')]); ?>
                <?php echo $this->element('Lists/actorsearch', ['field' => 'gender', 'label' => __('Gender'), 'options' => $genderList]); ?>
              </ul>
            </div>
          </div>
        </div>

        <div class="w3-card w3-margin-top">
          <div class='w3-container w3-theme-l3'><h4><?= __('Appearance') ?></h4></div>
          <div class="w3-cell-row w3-theme-l5 w3-mobile">
            <div class="w3-cell w3-mobile" style="min-width:320px; width:50%;">
              <ul class="w3-ul">
                <?php echo $this->element('Lists/actorsearch', ['field' => 'haircolor_id', 'label' => __('Hair Color'), 'options' => $haircolorList]); ?>
                <?php echo $this->element('Lists/actorsearch', ['field' => 'eyecolor_id', 'label' => __('Eye Color'), 'options' => $eyecolorList]); ?>
              </ul>
            </div>
            <div class="w3-cell w3-mobile" style="min-width:320px; width:50%;">
              <ul class="w3-ul">
                  <?php echo $this->element('Lists/actorsearch', ['field' => 'playing_age', 'label' => __('Playing Age')]); ?>
                  <?php echo $this->element('Lists/actorsearch', ['field' => 'height_cm', 'label' => __('Height (cm)')]); ?>
              </ul>
            </div>
          </div>
        </div>

        <div class="w3-card w3-margin-top">
          <div class='w3-container w3-theme-l3'><h4><?= __('Skills') ?></h4></div>
          <div class="w3-cell-row w3-theme-l5 w3-mobile style="height:100%;">
            <div class="w3-display w3-cell w3-cell-middle w3-mobile" style="min-width:320px;">
              <?php echo $this->element('Lists/actorsearch', ['field' => 'dance_skill_1', 'label' => __('Dance Skill'), 'options' => $danceSkillList]); ?>
            </div>
            <div class="w3-container w3-cell w3-text-gray w3-cell-middle w3-mobile" style="min-width:320px;">
              Minimum Level: <?php echo $this->Form->radio('dance_skill_1_level',
                    [
                      ['value' => '1', 'text' => __('Basic'), 'style' => 'margin: 5px;'],
                      ['value' => '3', 'text' => __('Advanced'), 'style' => 'margin-right: 5px; margin-left: 10px;'],
                      ['value' => '5', 'text' => __('Master'), 'style' => 'margin-right: 5px; margin-left: 10px;']
                    ]
                  ); ?>
            </div>
          </div>
        </div>

        <div class="w3-card w3-margin-top">
          <div class='w3-container w3-theme-l3'><h4><?= __('Experience') ?></h4></div>
          <div class="w3-cell-row w3-theme-l5 w3-mobile">
            <div class="w3-container w3-cell w3-mobile" style="min-width:320px">
              <ul class="w3-ul">
                <li>Something will be added here</li>
              </ul>
            </div>
            <div class="w3-container w3-cell w3-mobile" style="min-width:320px">
              <ul class="w3-ul">
                <li>Something will be added here</li>
              </ul>
            </div>
          </div>
        </div>

    </fieldset>
    <?= $this->Form->button(__('Search'), ['class' => 'w3-button w3-small w3-border w3-padding-small w3-round-xlarge w3-ripple w3-right w3-margin-top']) ?>
    <?= $this->Form->end() ?>
</div>
