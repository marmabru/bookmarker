<li class="w3-bar" style="padding: 0px; margin-top: 6px; margin-bottom: 0px; border-bottom: none;">

<?php if (isset($options)): ?>
  <?php echo $this->Form->control($field, [
          'type' => 'select',
          'options' => $options,
          'empty' => true,
          'class' => 'w3-bar-item w3-border w3-round',
          'style' => 'min-width:150px; width:60%',
          'label' => ['class' => 'w3-bar-item w3-text-gray', 'style' => 'min-width:150px; width:40%', 'text' => h($label) . ': ']]);
  ?>
<?php else: ?>
  <?php echo $this->Form->control($field, [
          'class' => 'w3-bar-item w3-border w3-round',
          'type' => 'text',
          'style' => 'min-width:150px; width:60%',
          'label' => ['class' => 'w3-bar-item w3-text-gray', 'style' => 'min-width:150px; width:40%', 'text' => h($label) . ': ']]);
  ?>
<?php endif ?>
