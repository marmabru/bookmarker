<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="w3-container w3-green" onclick="this.classList.add('hidden')"><?= $message ?></div>
