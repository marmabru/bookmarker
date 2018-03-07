<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Eyecolor Entity
 *
 * @property int $id
 * @property string $eyecolor_id
 * @property string $colorgroup1
 * @property string $colorgroup2
 */
class Eyecolor extends Entity
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
        'eyecolor_id' => true,
        'colorgroup1' => true,
        'colorgroup2' => true
    ];
}
