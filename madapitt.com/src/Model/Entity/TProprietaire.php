<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TProprietaire Entity
 *
 * @property int $idproprietaire
 * @property int $ididentite
 * @property string $nom
 * @property string $prenom
 * @property string $telephone
 * @property string $email
 * @property \Cake\I18n\FrozenTime $date_add
 * @property \Cake\I18n\FrozenTime $date_update
 */
class TProprietaire extends Entity
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
        'ididentite' => true,
        'nom' => true,
        'prenom' => true,
        'telephone' => true,
        'email' => true,
        'date_add' => true,
        'date_update' => true,
    ];
}
