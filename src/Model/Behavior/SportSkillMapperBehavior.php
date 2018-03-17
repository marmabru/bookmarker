<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;

class SportSkillMapperBehavior extends Behavior
{
  public function initialize(array $config)
  {
    // Some initialization code here
  }

  // Array of Haircolor Choices
  public function getSportSkillList()
  {
    $sportSkillList=array(
        '1'=>__('Archery'),
        '2'=>__('Fencing'),
        '3'=>__('Juggling'),
        '4'=>__('Soccer'),
        '5'=>__('Volleyball'),
        '6'=>__('Basketball'),
        '7'=>__('Baseball')
      );

    return $sportSkillList;
  }
}
?>
