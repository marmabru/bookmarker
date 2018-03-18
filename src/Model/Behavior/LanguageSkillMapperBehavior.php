<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;

class LanguageSkillMapperBehavior extends Behavior
{
  public function initialize(array $config)
  {
    // Some initialization code here
  }

  // Array of Haircolor Choices
  public function getLanguageSkillList()
  {
    $languageSkillList=array(
        '1'=>__('English'),
        '2'=>__('German'),
        '3'=>__('Bulgarian'),
        '4'=>__('Frensh'),
        '5'=>__('Italien'),
        '6'=>__('Spanish'),
        '7'=>__('Russian'),
        '8'=>__('Turkish'),
        '9'=>__('Polish'),
        '10'=>__('Swedish'),
        '11'=>__('Danish'),
        '12'=>__('Norwegian'),
        '13'=>__('Hungarian')
      );

    return $languageSkillList;
  }
}
?>
