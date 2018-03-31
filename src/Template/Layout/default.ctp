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
    <?= $this->Html->css('w3-theme-blue-grey.css') ?>

    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light|Roboto:300,400,700" rel="stylesheet">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <style>
      h1, h2, h3, h4 {
        font-family: "Shadows Into Light", cursive, sans-serif;
      }
      .w3-menufont {
        font-family: "Roboto", cursive, sans-serif;
      }
    </style>
</head>
<body>
    <?= $this->Flash->render() ?>
    <div class="w3-content" style="max-width:960px">
      <div class="w3-row w3-hide-small">
        <div class="w3-quarter w3-container w3-text-orange">
          <?= $this->Html->image('BetterCastMe-Logo1.png', ['alt' => 'Logo', 'class' => 'w3-round w3-image w3-padding', 'style' => 'width:70%;max-width:200px']); ?>
          <br>
          The Clever Way of Casting!
        </br>
        </div>
        <div class="w3-threequarter w3-container">
          <?= $this->Html->image('header-pic-wide2.jpg', ['alt' => 'Header-Pic', 'class' => 'w3-round w3-image']); ?>
        </div>
      </div>
      <div class="w3-container w3-tiny">

      <?php if ($LoggedInUsername != "(none)") : ?>
          <div class="w3-right-align"><?= __('Logged in as:') . " " . $LoggedInUsername . " "?>
          </div>
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
