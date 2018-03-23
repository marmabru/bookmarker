<div class="w3-container" style="min-width:320px width:800px">
  <ul class="w3-ul">
    <div class='w3-text-gray'><h5><?= h($title) ?></h5></div>
    <?php if (empty($experiences)): ?>
      <?php echo $this->element('Lists/actordetails', ['key' => __('<nothing specified>')]); ?>
    <?php endif ?>
    <table class="w3-table w3-small">
    <tr>
      <th class="w3-text-gray"><?= __('Year') ?></th>
      <th class="w3-text-gray"><?= __('Title') ?></th>
      <th class="w3-text-gray"><?= __('Role') ?></th>
      <th class="w3-text-gray"><?= __('Director') ?></th>
      <th class="w3-text-gray"><?= __('Production') ?></th>
      <th class="w3-text-gray"><?= __('Distribution') ?></th>
    </tr>

    <?php foreach ($experiences as $experience): ?>
      <?php if ($experience->type == $type): ?>
        <tr>
          <td><?= h($experience->year_start) ?>
            <?php if (!empty($experience->year_end)): ?>
              - <?= h($experience->year_end) ?>
            <?php endif ?>
          </td>
          <td><b><?= h($experience->title) ?></b></td>
          <td><?= h($experience->role_name) . ' (' . h($experience->role_id) . ')' ?></td>
          <td><?= h($experience->director) ?></td>
          <td><?= h($experience->production) ?></td>
          <td><?= h($experience->distribution) ?></td>
        </tr>
      <?php endif ?>
    <?php endforeach; ?>

    </table>
  </ul>
</div>
