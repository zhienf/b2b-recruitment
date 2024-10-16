<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contractors Model
 *
 * @property \App\Model\Table\EnquiriesTable&\Cake\ORM\Association\HasMany $Enquiries
 * @property \App\Model\Table\ProjectsTable&\Cake\ORM\Association\HasMany $Projects
 * @property \App\Model\Table\SkillsTable&\Cake\ORM\Association\BelongsToMany $Skills
 *
 * @method \App\Model\Entity\Contractor newEmptyEntity()
 * @method \App\Model\Entity\Contractor newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Contractor> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contractor get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Contractor findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Contractor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Contractor> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contractor|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Contractor saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Contractor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Contractor>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Contractor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Contractor> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Contractor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Contractor>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Contractor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Contractor> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ContractorsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('contractors');
        $this->setDisplayField('first_name');
        $this->setPrimaryKey('id');

        $this->hasMany('Enquiries', [
            'foreignKey' => 'contractor_id',
        ]);
        $this->hasMany('Projects', [
            'foreignKey' => 'contractor_id',
        ]);
        $this->belongsToMany('Skills', [
            'foreignKey' => 'contractor_id',
            'targetForeignKey' => 'skill_id',
            'joinTable' => 'contractors_skills',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->requirePresence('first_name', 'create')
            ->notEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 255)
            ->requirePresence('last_name', 'create')
            ->notEmptyString('last_name');

        $validator
            ->scalar('phone_number')
            ->maxLength('phone_number', 12)
            ->requirePresence('phone_number', 'create')
            ->notEmptyString('phone_number');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        return $validator;
    }
}
