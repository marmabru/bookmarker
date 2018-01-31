<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActorPersonalInfosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActorPersonalInfosTable Test Case
 */
class ActorPersonalInfosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActorPersonalInfosTable
     */
    public $ActorPersonalInfos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.actor_personal_infos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ActorPersonalInfos') ? [] : ['className' => ActorPersonalInfosTable::class];
        $this->ActorPersonalInfos = TableRegistry::get('ActorPersonalInfos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ActorPersonalInfos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
