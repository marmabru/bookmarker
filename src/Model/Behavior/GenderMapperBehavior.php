<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;

class GenderMapperBehavior extends Behavior
{
  public function initialize(array $config)
  {
    // Some initialization code here
  }

  // Array of Countries and their database codes
  public function getGenderList()
  {
    $genderList=array(
        'M'=>__('Male'),
        'F'=>__('Female')
      );
    debug(__('Male') . '=' . $genderList['M']);
    return $genderList;
  }
}
?>
