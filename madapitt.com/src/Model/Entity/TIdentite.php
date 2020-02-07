<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TIdentite Entity
 *
 * @property int $ididentite
 * @property string $reference
 * @property string $nom
 * @property string $puce
 * @property string $age
 * @property string $sexe
 * @property string $photo
 * @property \Cake\I18n\FrozenTime $date_add
 * @property \Cake\I18n\FrozenTime $date_update
 */
class TIdentite extends Entity
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
        'reference' => true,
        'nom' => true,
        'puce' => true,
        'age' => true,
        'sexe' => true,
        'photo' => true,
        'date_add' => true,
        'date_update' => true,
    ];
}
