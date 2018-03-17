<!-- <tr>
<td class="w3-text-gray" style="padding: 0px; width:40%; "><b><?= h($key) . ': ' ?></b></td>
<td class="w3-text-gray" style="padding: 0px;"><?= h($value) ?></td>
<td></td>
</tr> -->

<?php if (isset($metervalue)): ?>
<li class="w3-bar">
  <div  class="w3-bar-item w3-text-gray" style="width:40%; "><?= h($key) . ': ' ?></div>
  <div  class="w3-bar-item""><meter value="<?php echo h($metervalue)?>" min="0" max="5"><?php echo h($metervalue)?> __('out of 5')</meter><br></div>
</li>
<?php elseif (isset($value)): ?>
  <li class="w3-bar">
    <div  class="w3-bar-item w3-text-gray" style="width:40%; "><?= h($key) . ': ' ?></div>
    <div  class="w3-bar-item""><?= h($value) ?></div>
  </li>
<?php else: ?>
  <li class="w3-bar">
    <div  class="w3-bar-item w3-text-gray" style="width:100%; "><?= h($key)?></div>
  </li>
<?php endif ?>
