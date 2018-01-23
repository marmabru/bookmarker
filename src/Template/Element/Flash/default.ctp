<?php
$class = 'w3-container w3-yellow';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="<?= h($class) ?>" onclick="this.classList.add('hidden');"><?= $message ?></div>

<!-- <span onclick="this.parentElement.style.display='none'"
class="w3-button w3-display-topright">&times;</span> -->
