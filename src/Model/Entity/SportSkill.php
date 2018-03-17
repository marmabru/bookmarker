<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SportSkill Entity
 *
 * @property int $id
 * @property int $actor_id
 * @property int $skill
 * @property string $level
 *
 * @property \App\Model\Entity\Actor $actor
 */
class SportSkill extends Entity
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
        'skill' => true,
        'level' => true,
        'actor' => true
    ];
}
