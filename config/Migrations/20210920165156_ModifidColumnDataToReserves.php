<?php

use Migrations\AbstractMigration;

class ModifidColumnDataToReserves extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('reserves');

        $table->changeColumn("data_locacao","date",[
            'null' => false       
        ])->update();

        $table->changeColumn("data_devolucao","date",[
            'null' => false
        ])->update();
    }
}