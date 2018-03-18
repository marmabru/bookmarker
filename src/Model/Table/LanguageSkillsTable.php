<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LanguageSkills Model
 *
 * @property \App\Model\Table\ActorsTable|\Cake\ORM\Association\BelongsTo $Actors
 *
 * @method \App\Model\Entity\LanguageSkill get($primaryKey, $options = [])
 * @method \App\Model\Entity\LanguageSkill newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LanguageSkill[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LanguageSkill|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LanguageSkill patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LanguageSkill[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LanguageSkill findOrCreate($search, callable $callback = null, $options = [])
 */
class LanguageSkillsTable extends Table
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

        $this->setTable('language_skills');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Actors', [
            'foreignKey' => 'actor_id',
            'joinType' => 'INNER'
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
            ->integer('skill')
            ->requirePresence('skill', 'create')
            ->notEmpty('skill');

        $validator
            ->scalar('level')
            ->maxLength('level', 1)
            ->requirePresence('level', 'create')
            ->notEmpty('level');

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
