<?php
use Migrations\AbstractMigration;

class CreateTableUsers extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('users');

            $table->addColumn('name','string',[
                'default'=>null,
                'limit'=>100,
                'null'=>false,
            ]);
            $table->addColumn('username','string',[
                'default'=>null,
                'limit'=>20,
                'null'=>false,
            ]);
            $table->addColumn('email','string',[
                'default'=>null,
                'limit'=>100,
                'null'=>false,
            ]);
            $table->addColumn('password','string',[
                'default'=>null,
                'limit'=>100,
                'null'=>false,
            ]);
            $table->addColumn('id_roles','integer');

            $table->addForeignKey('id_roles','roles','id');

            $table->addColumn('created', 'datetime', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('modified', 'datetime', [
                'default' => null,
                'null' => false,
            ]);
            

        $table->create();
    }
}
