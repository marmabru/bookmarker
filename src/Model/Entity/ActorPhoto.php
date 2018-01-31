<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ActorPhoto Entity
 *
 * @property int $id
 * @property int $actor_id
 * @property int $photo_type
 * @property string $file
 *
 * @property \App\Model\Entity\ActorPersonalInfo $actor_personal_info
 */
class ActorPhoto extends Entity
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
        'actor_id' => true,
        'photo_type' => true,
        'file' => true,
        'actor_personal_info' => true
    ];
}
