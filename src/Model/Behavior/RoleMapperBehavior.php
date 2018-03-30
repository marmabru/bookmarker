<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;

class RoleMapperBehavior extends Behavior
{
  public function initialize(array $config)
  {
    // Some initialization code here
  }

  // Array of Haircolor Choices
  public function getRoleList()
  {
    $roleList=array(
        '1'=>__('Lead'),
        '2'=>__('Small role'),
        '3'=>__('Guest role'),
        '4'=>__('Ongoing role'),
        '5'=>__('Cameo'),
        '6'=>__('Speaker'),
        '7'=>__('Host'),
        '101'=>__('Director'),
        '102'=>__('Producer')
      );

    return $roleList;
  }
}
?>
