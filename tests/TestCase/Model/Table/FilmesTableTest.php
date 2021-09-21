<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FilmesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FilmesTable Test Case
 */
class FilmesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FilmesTable
     */
    public $Filmes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Filmes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Filmes') ? [] : ['className' => FilmesTable::class];
        $this->Filmes = TableRegistry::getTableLocator()->get('Filmes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Filmes);

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
