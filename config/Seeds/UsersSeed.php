<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '4',
                'name' => 'murilo',
                'username' => 'murilo',
                'email' => 'murilo@gmail.com',
                'password' => (new DefaultPasswordHasher)->hash('1234'),
                'id_roles' => '1',
                'created' => '2021-09-16 17:59:10',
                'modified' => '2021-09-16 17:59:10',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
