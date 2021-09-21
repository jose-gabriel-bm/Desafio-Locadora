<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Filme Entity
 *
 * @property int $id
 * @property string $title
 * @property string $ano
 * @property string $genre
 * @property string $description
 * @property string $director
 * @property string $language
 * @property float $movie_value
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $quantity
 */
class Filme extends Entity
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
        'title' => true,
        'ano' => true,
        'genre' => true,
        'description' => true,
        'director' => true,
        'language' => true,
        'movie_value' => true,
        'created' => true,
        'modified' => true,
        'quantity' => true,
    ];
}
