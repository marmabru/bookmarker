<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DanceSkillsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DanceSkillsTable Test Case
 */
class DanceSkillsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DanceSkillsTable
     */
    public $DanceSkills;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dance_skills',
        'app.actors',
        'app.users',
        'app.actor_photos',
        'app.sport_skills',
        'app.language_skills',
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
        $config = TableRegistry::exists('DanceSkills') ? [] : ['className' => DanceSkillsTable::class];
        $this->DanceSkills = TableRegistry::get('DanceSkills', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DanceSkills);

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
