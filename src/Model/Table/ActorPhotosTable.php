<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ActorPhotos Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $Actors
 *
 * @method \App\Model\Entity\ActorPhoto get($primaryKey, $options = [])
 * @method \App\Model\Entity\ActorPhoto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ActorPhoto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ActorPhoto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ActorPhoto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ActorPhoto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ActorPhoto findOrCreate($search, callable $callback = null, $options = [])
 */
class ActorPhotosTable extends Table
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

        $this->setTable('actor_photos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Actors', [
            'foreignKey' => 'actor_id'
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
            ->integer('photo_type')
            ->allowEmpty('photo_type');

        $validator
            ->scalar('file')
            ->maxLength('file', 255)
            ->requirePresence('file', 'create')
            ->notEmpty('file');

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

        return $rules;
    }
}
