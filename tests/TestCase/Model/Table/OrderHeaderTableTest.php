<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderHeaderTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderHeaderTable Test Case
 */
class OrderHeaderTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderHeaderTable
     */
    protected $OrderHeader;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.OrderHeader',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('OrderHeader') ? [] : ['className' => OrderHeaderTable::class];
        $this->OrderHeader = $this->getTableLocator()->get('OrderHeader', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->OrderHeader);

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
