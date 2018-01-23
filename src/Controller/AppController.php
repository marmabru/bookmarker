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

}

/**
 * Stuff to do always before rendering the View
 *
 * @return void
 */
public function beforeRender(Event $event)
{
      // make logged in user's name available to the view (mainly for menu)
      $name="(none)";
      if ($this->Auth->user()) {
        $name = $this->Auth->user('email');
      }
      $this->set("LoggedInUsername", $name);
    }
}
