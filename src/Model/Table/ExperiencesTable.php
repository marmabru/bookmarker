<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Experiences Model
 *
 * @property \App\Model\Table\ActorsTable|\Cake\ORM\Association\BelongsTo $Actors
 * @property \App\Model\Table\GenresTable|\Cake\ORM\Association\BelongsTo $Genres
 * @property \App\Model\Table\RolesTable|\Cake\ORM\Association\BelongsTo $Roles
 *
 * @method \App\Model\Entity\Experience get($primaryKey, $options = [])
 * @method \App\Model\Entity\Experience newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Experience[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Experience|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Experience patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Experience[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Experience findOrCreate($search, callable $callback = null, $options = [])
 */
class ExperiencesTable extends Table
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

        $this->setTable('experiences');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('Actors', [
            'foreignKey' => 'actor_id'
        ]);
        $this->belongsTo('Genres', [
            'foreignKey' => 'genre_id'
        ]);
        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('type')
            ->maxLength('type', 1)
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->scalar('country')
            ->maxLength('country', 2)
            ->allowEmpty('country');

        $validator
            ->scalar('year_start')
            ->maxLength('year_start', 4)
            ->allowEmpty('year_start');

        $validator
            ->scalar('year_end')
            ->maxLength('year_end', 4)
            ->allowEmpty('year_end');

        $validator
            ->scalar('title')
            ->maxLength('title', 200)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('production')
            ->maxLength('production', 200)
            ->allowEmpty('production');

        $validator
            ->scalar('directed_by')
            ->maxLength('directed_by', 200)
            ->allowEmpty('directed_by');

        $validator
            ->scalar('role_name')
            ->maxLength('role_name', 200)
            ->allowEmpty('role_name');

        $validator
            ->scalar('distribution')
            ->maxLength('distribution', 200)
            ->allowEmpty('distribution');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['actor_id'], 'Actors'));
        $rules->add($rules->existsIn(['genre_id'], 'Genres'));
        $rules->add($rules->existsIn(['role_id'], 'Roles'));

        return $rules;
    }
}
