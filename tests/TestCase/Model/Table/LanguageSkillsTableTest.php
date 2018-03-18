<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LanguageSkillsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LanguageSkillsTable Test Case
 */
class LanguageSkillsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LanguageSkillsTable
     */
    public $LanguageSkills;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.language_skills',
        'app.actors',
        'app.users',
        'app.actor_photos',
        'app.sport_skills',
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
        $config = TableRegistry::exists('LanguageSkills') ? [] : ['className' => LanguageSkillsTable::class];
        $this->LanguageSkills = TableRegistry::get('LanguageSkills', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LanguageSkills);

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
