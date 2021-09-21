<?php
use Migrations\AbstractMigration;

class ModifidAddColumnDevolvidoToReserves extends AbstractMigration
{
        public function change()
    {
        $table = $this->table('reserves');

        $table->addColumn('devolvido','string',[
            'limit'=>3
        ]);

        $table->update();
    }
}
