<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MembersFixture
 */
class MembersFixture extends TestFixture
{
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
                'name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'age' => 1,
                'gender' => 1,
                'birthplace' => 1,
                'birth_at' => '2023-01-22 12:30:12',
                'created' => '2023-01-22 12:30:12',
                'modified' => '2023-01-22 12:30:12',
            ],
        ];
        parent::init();
    }
}
