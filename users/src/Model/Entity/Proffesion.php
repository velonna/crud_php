<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Proffesion Entity
 *
 * @property int $id
 * @property string $description
 * @property int $level
 * @property \Cake\I18n\FrozenDate $effect_date
 */
class Proffesion extends Entity
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
        'description' => true,
        'level' => true,
        'effect_date' => true,
    ];
}