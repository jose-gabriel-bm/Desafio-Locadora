<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Phinx\Db\Table\ForeignKey;

/**
 * Filmes Model
 *
 * @method \App\Model\Entity\Filme get($primaryKey, $options = [])
 * @method \App\Model\Entity\Filme newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Filme[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Filme|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Filme saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Filme patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Filme[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Filme findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FilmesTable extends Table
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

        $this->setTable('filmes');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Reserves');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('ano')
            ->maxLength('ano', 4)
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        $validator
            ->scalar('genre')
            ->maxLength('genre', 100)
            ->requirePresence('genre', 'create')
            ->notEmptyString('genre');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('director')
            ->maxLength('director', 50)
            ->requirePresence('director', 'create')
            ->notEmptyString('director');

        $validator
            ->scalar('language')
            ->maxLength('language', 50)
            ->requirePresence('language', 'create')
            ->notEmptyString('language');

        $validator
            ->decimal('movie_value')
            ->requirePresence('movie_value', 'create')
            ->notEmptyString('movie_value');

        $validator
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmptyString('quantity');

        return $validator;
    }
   
}
