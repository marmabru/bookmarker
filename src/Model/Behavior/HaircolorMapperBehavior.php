<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;

class HaircolorMapperBehavior extends Behavior
{
  public function initialize(array $config)
  {
    // Some initialization code here
  }

  // Array of Haircolor Choices
  public function getHaircolorList()
  {
    $haircolorList=array(
        '1'=>__('black'),
        '2'=>__('light brown'),
        '3'=>__('dark brown'),
        '4'=>__('brown'),
        '5'=>__('light gray'),
        '6'=>__('dark gray'),
        '7'=>__('gray'),
        '8'=>__('light blond'),
        '9'=>__('dark blond'),
        '10'=>__('blond'),
        '11'=>__('red'),
        '12'=>__('white')
      );

    return $haircolorList;
  }
}
?>
