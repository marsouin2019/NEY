<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TIdentiteTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TIdentiteTable Test Case
 */
class TIdentiteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TIdentiteTable
     */
    public $TIdentite;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TIdentite',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TIdentite') ? [] : ['className' => TIdentiteTable::class];
        $this->TIdentite = TableRegistry::getTableLocator()->get('TIdentite', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TIdentite);

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
