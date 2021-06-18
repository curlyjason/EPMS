<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MaterialUnitCostsFixture
 */
class MaterialUnitCostsFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'MaterialUnitCost';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'MaterialCode' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'SQL_Latin1_General_CP1_CI_AS', 'precision' => null, 'comment' => null],
        'Quantity' => ['type' => 'float', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'UnitCost' => ['type' => 'decimal', 'length' => 38, 'precision' => 8, 'null' => true, 'default' => null, 'comment' => null, 'unsigned' => null],
        'EntryDate' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null],
        'EntryTime' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null],
        'CreateOpr' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'SQL_Latin1_General_CP1_CI_AS', 'precision' => null, 'comment' => null],
        'CreateDatim' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null],
        'UpdateOpr' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'SQL_Latin1_General_CP1_CI_AS', 'precision' => null, 'comment' => null],
        'Updatedatim' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null],
        'ContractUnitCost' => ['type' => 'decimal', 'length' => 38, 'precision' => 8, 'null' => true, 'default' => null, 'comment' => null, 'unsigned' => null],
        'POUnitCost' => ['type' => 'decimal', 'length' => 38, 'precision' => 8, 'null' => true, 'default' => null, 'comment' => null, 'unsigned' => null],
        'FlatCost' => ['type' => 'decimal', 'length' => 19, 'precision' => 4, 'null' => true, 'default' => null, 'comment' => null, 'unsigned' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['MaterialCode', 'Quantity'], 'length' => []],
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'MaterialCode' => '374967ab-18b9-4392-8dc7-df65e0aa8c6b',
                'Quantity' => 1,
                'UnitCost' => 1.5,
                'EntryDate' => '2021-06-10 21:06:13',
                'EntryTime' => '2021-06-10 21:06:13',
                'CreateOpr' => 'Lorem ipsum dolor sit amet',
                'CreateDatim' => '2021-06-10 21:06:13',
                'UpdateOpr' => 'Lorem ipsum dolor sit amet',
                'Updatedatim' => '2021-06-10 21:06:13',
                'ContractUnitCost' => 1.5,
                'POUnitCost' => 1.5,
                'FlatCost' => 1.5,
            ],
        ];
        parent::init();
    }
}
