<?php
use Migrations\AbstractMigration;

class CreateTableClients extends AbstractMigration
{
    
public function change()
    {
        $table = $this->table('clients');

            $table->addColumn('name','string',[
                'default'=>null,
                'limit'=>100,
                'null'=>false
            ]);
            $table->addColumn('cpf','string',[
                'default'=>null,
                'limit'=>14,
                'null'=>false
            ]);
            $table->addColumn('email','string',[
                'default'=>null,
                'limit'=>100,
                'null'=>false
            ]);
            $table->addColumn('contato','string',[
                'default'=>null,
                'limit'=>12,
                'null'=>false
            ]);
            $table->addColumn('created', 'datetime', [
                'default' => null,
                'null' => false
            ]);
            $table->addColumn('modified', 'datetime', [
                'default' => null,
                'null' => false
            ]);
            
        $table->create();
    }
}
