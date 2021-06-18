<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaterialUnitCostsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaterialUnitCostsTable Test Case
 */
class MaterialUnitCostsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MaterialUnitCostsTable
     */
    protected $MaterialUnitCosts;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.MaterialUnitCosts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('MaterialUnitCosts') ? [] : ['className' => MaterialUnitCostsTable::class];
        $this->MaterialUnitCosts = $this->getTableLocator()->get('MaterialUnitCosts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->MaterialUnitCosts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
