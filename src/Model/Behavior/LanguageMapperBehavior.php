<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;

class LanguageMapperBehavior extends Behavior
{
  public function initialize(array $config)
  {
    global $languageFlagList;
    global $languageList;

    // Flag images were retrieved from https://www.countryflags.com/en/clip-art-overview/
    $languageList=[
        'bg_BG'=>['img' => 'bulgaria-flag-small.png', 'name' => __('Bulgarian')],
        'de_DE'=>['img' => 'germany-flag-small.png', 'name' => __('German')],
        'en_GB'=>['img' => 'united-kingdom-flag-small.png', 'name' => __('English')],
      ];

    $languageNameList=array(
        'bg_BG'=>__('Bulgarian'),
        'de_DE'=>__('German'),
        'en_GB'=>__('English'),
      );

    // Flag images were retrieved from https://www.countryflags.com/en/clip-art-overview/
    // $languageFlagList=array(
    //     'BG'=>'bulgaria-flag-square-small.png',
    //     'DE'=>'germany-flag-square-small.png',
    //     'EN'=>'united-kingdom-flag-small.png',
    //   );
  }

  public function getLanguageList()

  {
    global $languageList;

    return $languageList;
  }

  public function getLanguageFlagList()
  {
    global $languageFlagList;

    return $languageFlagList;
  }

  public function getLanguageFlagByCode($code)
  {
    global $languageFlagList;

    return $languageFlagList[$code];
  }
}
?>
