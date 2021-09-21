<?php
use Migrations\AbstractMigration;

class CreateTableRoles extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('roles');

            $table->addColumn('role','string',[
                'default'=>null,
                'limit'=>20,
                'null'=>false,
            ]);
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
