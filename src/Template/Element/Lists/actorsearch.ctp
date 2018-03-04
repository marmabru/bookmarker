<li class="w3-bar" style="padding: 0px; margin-top: 6px; margin-bottom: 0px; border-bottom: none;">
<?php
    echo $this->Form->control($field, ['class' => 'w3-bar-item w3-border w3-round', 'type' => 'text', 'label' => ['class' => 'w3-bar-item w3-text-gray', 'style' => 'width:40%', 'text' => h($label) . ': ']]);
?></li></ul>
