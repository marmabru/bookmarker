<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActorsTable Test Case
 */
class ActorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActorsTable
     */
    public $Actors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.actors',
        'app.users',
        'app.bookmarks',
        'app.tags',
        'app.bookmarks_tags',
        'app.actor_photos',
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
        $config = TableRegistry::exists('Actors') ? [] : ['className' => ActorsTable::class];
        $this->Actors = TableRegistry::get('Actors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Actors);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
