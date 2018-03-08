<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Eyecolors Model
 *
 * @method \App\Model\Entity\Eyecolor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Eyecolor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Eyecolor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Eyecolor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Eyecolor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Eyecolor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Eyecolor findOrCreate($search, callable $callback = null, $options = [])
 */
class EyecolorsTable extends Table
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

        $this->setTable('eyecolors');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Translate', ['fields' => ['eyecolor']]);

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
            ->scalar('eyecolor_id')
            ->maxLength('eyecolor_id', 30)
            ->allowEmpty('eyecolor_id');

        $validator
            ->scalar('colorgroup1')
            ->maxLength('colorgroup1', 30)
            ->allowEmpty('colorgroup1');

        $validator
            ->scalar('colorgroup2')
            ->maxLength('colorgroup2', 30)
            ->allowEmpty('colorgroup2');

        return $validator;
    }
}
