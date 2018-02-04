<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;

class CountryMapperBehavior extends Behavior
{
  public function initialize(array $config)
  {
    // Some initialization code here
  }

  // Array of Countries and their database codes
  public function getCountryList()
  {
    $countryList=array(
        'BG'=>__('Bulgaria')
        'DE'=>__('Germany'),
        'GB'=>__('Great Britain'),
      );

    return $countryList;
  }
}
?>
