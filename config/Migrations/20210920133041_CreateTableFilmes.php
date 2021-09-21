<?php
use Migrations\AbstractMigration;

class CreateTableFilmes extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('filmes');

            $table->addColumn('title','string',[
                'default'=>null,
                'limit'=>255,
                'null'=>false
            ]);
            $table->addColumn('ano','string',[
                'default'=>null,
                'limit'=>4,
                'null'=>false
            ]);
            $table->addColumn('genre','string',[
                'default'=>null,
                'limit'=>100,
                'null'=>false
            ]);
            $table->addColumn('description','string',[
                'default'=>null,
                'limit'=>255,
                'null'=>false
            ]);
            $table->addColumn('director','string',[
                'default'=>null,
                'limit'=>50,
                'null'=>false
            ]);
            $table->addColumn('language','string',[
                'default'=>null,
                'limit'=>50,
                'null'=>false
            ]);
            $table->addColumn('movie_value','decimal',[
                'precision'=>6, 
                'scale'=>2
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
