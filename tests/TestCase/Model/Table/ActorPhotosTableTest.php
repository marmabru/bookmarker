<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActorPhotosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActorPhotosTable Test Case
 */
class ActorPhotosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActorPhotosTable
     */
    public $ActorPhotos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('ActorPhotos') ? [] : ['className' => ActorPhotosTable::class];
        $this->ActorPhotos = TableRegistry::get('ActorPhotos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ActorPhotos);

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
