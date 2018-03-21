<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExperiencesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExperiencesTable Test Case
 */
class ExperiencesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExperiencesTable
     */
    public $Experiences;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.experiences',
        'app.actors',
        'app.users',
        'app.actor_photos',
        'app.sport_skills',
        'app.language_skills',
        'app.dance_skills',
        'app.eyecolors',
        'app.eyecolors_eyecolor_translation',
        'app.i18n',
        'app.actors_artist_name_translation',
        'app.genres',
        'app.roles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Experiences') ? [] : ['className' => ExperiencesTable::class];
        $this->Experiences = TableRegistry::get('Experiences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Experiences);

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
