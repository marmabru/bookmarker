<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EyecolorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EyecolorsTable Test Case
 */
class EyecolorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EyecolorsTable
     */
    public $Eyecolors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.k_eyecolor_ids'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Eyecolors') ? [] : ['className' => EyecolorsTable::class];
        $this->Eyecolors = TableRegistry::get('Eyecolors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Eyecolors);

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
