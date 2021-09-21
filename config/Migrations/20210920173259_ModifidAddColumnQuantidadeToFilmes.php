<?php
use Migrations\AbstractMigration;

class ModifidAddColumnQuantidadeToFilmes extends AbstractMigration
{
  
    public function change()
    {
        $table = $this->table('filmes');

        $table->addColumn('quantity','integer',[
            'default'=>null,
            'null'=>false,
        ]);

        $table->update();
    }
}
