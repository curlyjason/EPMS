<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderHeadersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderHeadersTable Test Case
 */
class OrderHeadersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderHeadersTable
     */
    protected $OrderHeaders;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.OrderHeaders',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('OrderHeaders') ? [] : ['className' => OrderHeadersTable::class];
        $this->OrderHeaders = $this->getTableLocator()->get('OrderHeaders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->OrderHeaders);

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
