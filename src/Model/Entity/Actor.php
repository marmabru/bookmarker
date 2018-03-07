<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Actor Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $artist_name
 * @property \Cake\I18n\FrozenDate $birthdate
 * @property string $gender
 * @property int $playing_age_from
 * @property int $playing_age_to
 * @property int $eyecolor_id
 * @property int $haircolor_id
 * @property int $height_cm
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\ActorPhoto[] $actor_photos
 */

class Actor extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */

    protected $_accessible = [
        'user_id' => true,
        'artist_name' => true,
        'birthdate' => true,
        'gender' => true,
        'playing_age_from' => true,
        'playing_age_to' => true,
        'eyecolor_id' => true,
        'haircolor_id' => true,
        'height_cm' => true,
        'user' => true,
        'actor_photos' => true
    ];

    public function initialize(array $config)
    {
        // some initializations
    }
}
