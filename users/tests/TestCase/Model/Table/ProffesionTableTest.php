<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProffesionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProffesionTable Test Case
 */
class ProffesionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProffesionTable
     */
    protected $Proffesion;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Proffesion',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Proffesion') ? [] : ['className' => ProffesionTable::class];
        $this->Proffesion = $this->getTableLocator()->get('Proffesion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Proffesion);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProffesionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
