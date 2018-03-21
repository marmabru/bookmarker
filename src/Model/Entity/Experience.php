<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Experience Entity
 *
 * @property int $id
 * @property int $actor_id
 * @property string $type
 * @property string $country
 * @property string $year_start
 * @property string $year_end
 * @property int $genre_id
 * @property string $title
 * @property string $production
 * @property string $directed_by
 * @property int $role_id
 * @property string $role_name
 * @property string $distribution
 *
 * @property \App\Model\Entity\Actor $actor
 * @property \App\Model\Entity\Genre $genre
 * @property \App\Model\Entity\Role $role
 */
class Experience extends Entity
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
        'type' => true,
        'country' => true,
        'year_start' => true,
        'year_end' => true,
        'genre_id' => true,
        'title' => true,
        'production' => true,
        'directed_by' => true,
        'role_id' => true,
        'role_name' => true,
        'distribution' => true,
        'actor' => true,
        'genre' => true,
        'role' => true
    ];
}
