<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SportSkillsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SportSkillsTable Test Case
 */
class SportSkillsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SportSkillsTable
     */
    public $SportSkills;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sport_skills',
        'app.actors',
        'app.users',
        'app.actor_photos',
        'app.eyecolors',
        'app.eyecolors_eyecolor_translation',
        'app.i18n',
        'app.actors_artist_name_translation'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SportSkills') ? [] : ['className' => SportSkillsTable::class];
        $this->SportSkills = TableRegistry::get('SportSkills', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SportSkills);

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
