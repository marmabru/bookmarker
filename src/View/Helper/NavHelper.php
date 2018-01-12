<?php

namespace App\View\Helper;

use Cake\View\Helper;

	class NavHelper extends Helper
	{
		public $name = 'Nav';

		public $helpers = array('Html');

		private $navItems = array(
			array(
				'title' => 'Startseite',
				'url' => array('controller' => 'Bookmarks', 'action' => 'index', 'List Bookmarks')
			),
			array(
				'title' => 'Beispiele',
				'url' => array('controller' => 'Users', 'action' => 'index', 'List Users')
			)
		);

		public function main() {

      $content = '        <!-- Menu -->
                <div class="w3-bar w3-red">
                <a href="#" class="w3-bar-item w3-button w3-orange">ActorDB</a>' .
                $this->Html->link(__('Add Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'add'], ['class' => 'w3-bar-item w3-button w3-hide-small']) .
                $this->Html->link(__('List Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'index'], ['class' => 'w3-bar-item w3-button w3-hide-small']) .
                $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'w3-bar-item w3-button w3-hide-small']) . '
                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="toggleMenu()">&#9776;</a>
              </div>

              <div id="mainmenu" class="w3-bar-block w3-red w3-hide w3-hide-large w3-hide-medium">' .
              $this->Html->link(__('Add Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'add'], ['class' => 'w3-bar-item w3-button']) .
              $this->Html->link(__('List Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'index'], ['class' => 'w3-bar-item w3-button']) .
              $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'w3-bar-item w3-button']) . '
              </div>';

    return $content;

		}
}
