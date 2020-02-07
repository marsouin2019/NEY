<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TProprietaireFixture
 */
class TProprietaireFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 't_proprietaire';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idproprietaire' => ['type' => 'smallinteger', 'length' => 6, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'ididentite' => ['type' => 'smallinteger', 'length' => 6, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'nom' => ['type' => 'string', 'length' => 99, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'prenom' => ['type' => 'string', 'length' => 99, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'telephone' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'date_add' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'date_update' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'proprietaire' => ['type' => 'index', 'columns' => ['nom'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idproprietaire'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'idproprietaire' => 1,
                'ididentite' => 1,
                'nom' => 'Lorem ipsum dolor sit amet',
                'prenom' => 'Lorem ipsum dolor sit amet',
                'telephone' => 'Lorem ip',
                'email' => 'Lorem ipsum dolor sit amet',
                'date_add' => '2020-01-21 19:38:13',
                'date_update' => '2020-01-21 19:38:13',
            ],
        ];
        parent::init();
    }
}
