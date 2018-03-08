<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\I18n;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
    * Include NavHelper
    **/
    public $helpers = array('Nav');

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
          'authenticate' => [
              'Form' => [
                  'fields' => [
                      'username' => 'email',
                      'password' => 'password'
                  ]
              ]
          ],
          'loginAction' => [
              'controller' => 'Users',
              'action' => 'login'
          ],
          'unauthorizedRedirect' => $this->referer() // If unauthorized, return them to page they were just on
      ]);

      // Allow the display action so our pages controller
      // continues to work.
      $this->Auth->allow(['display']);

      /*
       * Enable the following components for recommended CakePHP security settings.
       * see https://book.cakephp.org/3.0/en/controllers/components/security.html
       */
      $this->loadComponent('Security');
      $this->loadComponent('Csrf');

      $this->loadModel('Users');  // Make Users and its components available in all Controllers

}

/**
 * Stuff to do always before handing control to a controller function
 *
 * @return void
 */
public function beforeFilter(Event $event)
{
      $name=__('(none)');
      $currentLanguage='en_GB';     // default if nothing is set anywhere yet

      if ($this->Auth && $this->Auth->user()) {   // if User is logged in, we can set some Information
        $name =  $this->Auth->user('firstname') . ' ' . $this->Auth->user('lastname');
        $currentLanguage = $this->Auth->user('language'); // initialize currentLanguage with what is in the User config
      }
      if ($this->request->session()->read('currentLanguage') != '') {   // if user has set the language in this session, then use this one
        $currentLanguage = $this->request->session()->read('currentLanguage');
      }

      // make logged in user's name available to the view (mainly for menu)
      $this->set("LoggedInUsername", $name);

      // make list of languages available to the view (for menu)
      $languageList = $this->Users->getLanguageList();
      $this->set("LanguageList", $languageList);

      // make currently selected language available to the view (for menu)

      $this->set("CurrentLanguage", $currentLanguage);

      I18n::setLocale($currentLanguage);    // Set the session language
    }
}
