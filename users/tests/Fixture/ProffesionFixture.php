<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProffesionFixture
 */
class ProffesionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'proffesion';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'description' => 'Lorem ipsum dolor sit amet',
                'level' => 1,
                'effect_date' => '2022-04-03',
            ],
        ];
        parent::init();
    }
}
