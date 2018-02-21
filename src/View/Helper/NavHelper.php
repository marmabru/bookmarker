<?php

namespace App\View\Helper;

use Cake\View\Helper;

	class NavHelper extends Helper
	{
		public $name = 'Nav';

		public $helpers = array('Html');

		public function main() {

      				$menuLarge = '<!-- Menu -->
                <div class="w3-bar w3-theme-l2">
                <a href="#" class="w3-bar-item w3-button w3-theme-d2">ActorDB</a>' .
                $this->Html->link(__('Actors List'), ['controller' => 'Actors', 'action' => 'index'], ['class' => 'w3-bar-item w3-button w3-hide-small']) .
                $this->Html->link(__('List Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'index'], ['class' => 'w3-bar-item w3-button w3-hide-small']) .
                $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'w3-bar-item w3-button w3-hide-small']);

							// Language Dropdown
							$menuLarge = $menuLarge .

								'<div class="w3-dropdown-hover w3-right">
								<div class="w3-bar-item w3-button w3-center w3-container w3-right w3-round w3-tiny"><header>' . __('Language') . '</header>' .
									$this->Html->image('flags/' . $this->_View->get('LanguageList')[$this->_View->get('CurrentLanguage')]['img'], ['class' => 'w3-round w3-image', 'style' => 'height:10px;width:20px']) .
								'</div>
    							<div class="w3-dropdown-content w3-bar-block w3-card">';

								foreach ($this->_View->get('LanguageList') as $languageKey => $language) {
									$menuLarge = $menuLarge .
										$this->Html->link($this->Html->image('flags/' . $this->_View->get('LanguageList')[$languageKey]['img'], ['class' => 'w3-round w3-image', 'style' => 'height:10px;width:20px']) . ' ' . __($language['name']),
											['controller' => 'Users', 'action' => 'setLanguage', $languageKey],
											['class' => 'w3-bar-item w3-button w3-small w3-hide-small', 'escape' => false]);
								}

							$menuLarge = $menuLarge .
								   '</div>
  							</div>
								';

							// Logout Button
							if ($this->_View->get('LoggedInUsername') != '(none)') {
									$menuLarge = $menuLarge . '<div class="w3-bar-item w3-right w3-hide-small">' . $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'w3-button w3-small w3-border w3-padding-small w3-round-xlarge w3-ripple']) . '</div>';
							}

							$menuSmall = '
                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="toggleMenu()">&#9776;</a>
              </div>

              <div id="mainmenu" class="w3-bar-block w3-theme-l2 w3-hide w3-hide-large w3-hide-medium">' .
              $this->Html->link(__('Actors List'), ['controller' => 'Actors', 'action' => 'index'], ['class' => 'w3-bar-item w3-button']) .
              $this->Html->link(__('List Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'index'], ['class' => 'w3-bar-item w3-button']) .
              $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'w3-bar-item w3-button']) .
							'<div class="w3-bar-item w3-right">' . $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'w3-button w3-small w3-border w3-padding-small w3-theme-l1 w3-round-xlarge w3-ripple']) . '</div>
              </div>';

    return $menuLarge . $menuSmall;

		}
}
