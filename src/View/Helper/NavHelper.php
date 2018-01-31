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

      				$menu1 = '<!-- Menu -->
                <div class="w3-bar w3-theme-l2">
                <a href="#" class="w3-bar-item w3-button w3-theme-d2">ActorDB</a>' .
                $this->Html->link(__('Actors List'), ['controller' => 'Actors', 'action' => 'index'], ['class' => 'w3-bar-item w3-button w3-hide-small']) .
                $this->Html->link(__('List Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'index'], ['class' => 'w3-bar-item w3-button w3-hide-small']) .
                $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'w3-bar-item w3-button w3-hide-small']);


								if ($this->_View->get('LoggedInUsername') != '(none)') {
									$menu1 = $menu1 . '<div class="w3-bar-item w3-right w3-hide-small">' . $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'w3-button w3-small w3-border w3-padding-small w3-theme-l1 w3-round-xlarge w3-ripple']) . '</div>';
								}

							$menu2 = '
                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="toggleMenu()">&#9776;</a>
              </div>

              <div id="mainmenu" class="w3-bar-block w3-theme-l2 w3-hide w3-hide-large w3-hide-medium">' .
              $this->Html->link(__('Actors List'), ['controller' => 'Actors', 'action' => 'index'], ['class' => 'w3-bar-item w3-button']) .
              $this->Html->link(__('List Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'index'], ['class' => 'w3-bar-item w3-button']) .
              $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'w3-bar-item w3-button']) .
							'<div class="w3-bar-item w3-right">' . $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'w3-button w3-small w3-border w3-padding-small w3-theme-l1 w3-round-xlarge w3-ripple']) . '</div>
              </div>';

    return $menu1 . $menu2;

		}
}
