<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;

class DanceSkillMapperBehavior extends Behavior
{
  public function initialize(array $config)
  {
    // Some initialization code here
  }

  // Array of Haircolor Choices
  public function getDanceSkillList()
  {
    $danceSkillList=array(
        '1'=>__('Ballroom Standard'),
        '2'=>__('Ballroom Latin'),
        '3'=>__('Ballet'),
        '4'=>__('Jazz'),
        '5'=>__('Salsa'),
        '6'=>__('Swing'),
        '7'=>__('Hip-Hop')
      );

    return $danceSkillList;
  }
}
?>
