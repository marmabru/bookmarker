<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>


<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- <?= $this->Html->css('base.css') ?> -->
    <!-- <?= $this->Html->css('cake.css') ?> -->
    <?= $this->Html->css('app.css') ?>
    <?= $this->Html->css('w3.css') ?>
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Flash->render() ?>
    <div class="w3-content w3-theme-l5" style="max-width:960px">
      <div class="w3-row w3-hide-small">
        <div class="w3-quarter w3-container">
        </div>
        <div class="w3-half w3-container w3-margin">
          <?= $this->Html->image('header-pic-wide1.jpg', ['alt' => 'Header-Pic', 'class' => 'w3-circle w3-image']); ?>
        </div>
        <div class="w3-quarter w3-container">
        </div>
      </div>
      <div class="w3-container w3-small">

      <?php if ($LoggedInUsername != "(none)") : ?>
          <div class="w3-right-align"><p> <?= __('Logged in as: ') . $LoggedInUsername ?> </p></div>
      <?php else : ?>
          <div class="w3-right-align"><p> <?= __('Not logged in') ?> </p></div>
      <?php endif; ?>
    </div>

    <?= $this->Nav->main(); ?>
    <?= $this->fetch('content') ?>

    <footer>
    </footer>
    </div>

    <script>
    function toggleMenu() {
        var x = document.getElementById("mainmenu");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    </script>
</body>

</html>
