<?php
namespace App\Model\Table;

use Cake\ORM\Association\BelongsTo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use WyriHaximus\TwigView\Lib\Twig\Extension\Arrays;

/**
 * Reserves Model
 *
 * @method \App\Model\Entity\Reserve get($primaryKey, $options = [])
 * @method \App\Model\Entity\Reserve newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Reserve[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Reserve|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Reserve saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Reserve patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Reserve[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Reserve findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ReservesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('reserves');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
            // $this->belongsTo('Filmes', [
            //     'foreingKey'=> 'id_movies',
            //     'joinType' => 'LEFT',
            //     'ReservesController' => 'Usuarios',
            //     'propertyName' => 'filme',
            //     'dependent' => true
            // ]);
        $this->hasMany('Filmes');
        $this->hasMany('Clients');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('id_movies')
            ->requirePresence('id_movies', 'create')
            ->notEmptyString('id_movies');

        $validator
            ->integer('id_clients')
            ->requirePresence('id_clients', 'create')
            ->notEmptyString('id_clients');

        $validator
            ->date('data_locacao')
            ->requirePresence('data_locacao', 'create')
            ->notEmptyDate('data_locacao');

        $validator
            ->date('data_devolucao')
            ->requirePresence('data_devolucao', 'create')
            ->notEmptyDate('data_devolucao');

        $validator
            ->decimal('reserves_value')
            ->requirePresence('reserves_value', 'create')
            ->notEmptyString('reserves_value');

        $validator
            ->scalar('devolvido')
            ->maxLength('devolvido', 3)
            ->requirePresence('devolvido', 'create')
            ->notEmptyString('devolvido');

        return $validator;
    }
         
        
}
