<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reserve Entity
 *
 * @property int $id
 * @property int $id_movies
 * @property int $id_clients
 * @property \Cake\I18n\FrozenDate $data_locacao
 * @property \Cake\I18n\FrozenDate $data_devolucao
 * @property float $reserves_value
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $devolvido
 */
class Reserve extends Entity
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
        'id_movies' => true,
        'id_clients' => true,
        'data_locacao' => true,
        'data_devolucao' => true,
        'reserves_value' => true,
        'created' => true,
        'modified' => true,
        'devolvido' => true,
    ];
}
