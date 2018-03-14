<div class="w3-container w3-padding" >
<div class="w3-container w3-cell w3-quarter">
  <p></p>
</div>

<?= $this->Form->create(__('Please login'), ['class' => 'w3-container w3-card-4 w3-cell w3-cell-middle w3-theme-l3 w3-half', 'style' => 'width-min:320px; width-max:400px']) . PHP_EOL ?>

<?php
    echo $this->Form->control(__('email'), ['class' => 'w3-input w3-border']) . PHP_EOL;
    echo $this->Form->control(__('password'), ['class' => 'w3-input w3-border']) . PHP_EOL;
?>
<p>
<p>
<?= $this->Form->button(__('Login'), ['class' => 'w3-button w3-border w3-theme-l1 w3-round-xlarge w3-ripple w3-padding-small w3-small w3-right']) ?>
<p>
<?= $this->Form->end() ?>

  <div class="w3-container w3-cell w3-quarter" style='25%'>
    <p></p>
  </div>
<div>
