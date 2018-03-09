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
        <div class='w3-container w3-theme-l3'><h4><?= __('Personal Info') ?></h4></div>
        <div class="w3-cell-row w3-theme-l5 w3-hide-small w3-hide-medium">
          <div class="w3-container w3-cell" style="width:50%">
            <ul class="w3-ul">
                <?php echo $this->element('Lists/actorsearch', ['field' => 'firstname', 'label' => __('First Name')]); ?>
                <?php echo $this->element('Lists/actorsearch', ['field' => 'lastname', 'label' => __('Last Name')]); ?>
                <?php echo $this->element('Lists/actorsearch', ['field' => 'artist_name', 'label' => __('Artist Name')]); ?>
            </ul>
          </div>
          <div class="w3-container w3-cell">
            <ul class="w3-ul">
              <?php echo $this->element('Lists/actorsearch', ['field' => 'birthdate', 'label' => __('Date of Birth')]); ?>
              <?php echo $this->element('Lists/actorsearch', ['field' => 'gender', 'label' => __('Gender'), 'options' => $genderList]); ?>
            </ul>
          </div>
        </div>

        <div class='w3-container w3-theme-l3'><h4><?= __('Appearance') ?></h4></div>
        <div class="w3-cell-row w3-theme-l5 w3-hide-small w3-hide-medium">
          <div class="w3-container w3-cell" style="width:50%">
            <ul class="w3-ul">
              <?php echo $this->element('Lists/actorsearch', ['field' => 'playing_age', 'label' => __('Playing Age')]); ?>
              <?php echo $this->element('Lists/actorsearch', ['field' => 'eyecolor_id', 'label' => __('Eye Color'), 'options' => $eyecolorList]); ?>
            </ul>
          </div>
          <div class="w3-container w3-cell">
            <ul class="w3-ul">
                <?php echo $this->element('Lists/actorsearch', ['field' => 'haircolor_id', 'label' => __('Hair Color')]); ?>
                <?php echo $this->element('Lists/actorsearch', ['field' => 'height_cm', 'label' => __('Height (cm)')]); ?>
            </ul>
          </div>
        </div>

        <div class='w3-container w3-theme-l3'><h4><?= __('Skills') ?></h4></div>
        <div class="w3-cell-row w3-theme-l5 w3-hide-small w3-hide-medium">
          <div class="w3-container w3-cell" style="width:50%">
            <ul class="w3-ul">
                <li>Something will be added here</li>
            </ul>
          </div>
          <div class="w3-container w3-cell">
            <ul class="w3-ul">
              <li>Something will be added here</li>
            </ul>
          </div>
        </div>

        <div class='w3-container w3-theme-l3'><h4><?= __('Experience') ?></h4></div>
        <div class="w3-cell-row w3-theme-l5 w3-hide-small w3-hide-medium">
          <div class="w3-container w3-cell" style="width:50%">
            <ul class="w3-ul">
              <li>Something will be added here</li>
            </ul>
          </div>
          <div class="w3-container w3-cell">
            <ul class="w3-ul">
              <li>Something will be added here</li>
            </ul>
          </div>
        </div>

    </fieldset>
    <?= $this->Form->button(__('Search'), ['class' => 'w3-button w3-small w3-border w3-padding-small w3-round-xlarge w3-ripple w3-right']) ?>
    <?= $this->Form->end() ?>
</div>
