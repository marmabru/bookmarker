<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Actors Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ActorPhotosTable|\Cake\ORM\Association\HasMany $ActorPhotos
 *
 * @method \App\Model\Entity\Actor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Actor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Actor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Actor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Actor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Actor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Actor findOrCreate($search, callable $callback = null, $options = [])
 */
class ActorsTable extends Table
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

        $this->setTable('actors');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('ActorPhotos', [
            'foreignKey' => 'actor_id'
        ]);
        $this->addBehavior('GenderMapper');   // genderList
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
            ->scalar('artist_name')
            ->maxLength('artist_name', 255)
            ->allowEmpty('artist_name');

        $validator
            ->date('birthdate')
            ->allowEmpty('birthdate');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 1)
            ->allowEmpty('gender');

        $validator
            ->integer('playing_age_from')
            ->allowEmpty('playing_age_from');

        $validator
            ->integer('playing_age_to')
            ->allowEmpty('playing_age_to');

        $validator
            ->allowEmpty('eyecolor');

        $validator
            ->allowEmpty('haircolor');

        $validator
            ->integer('height_cm')
            ->allowEmpty('height_cm');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
