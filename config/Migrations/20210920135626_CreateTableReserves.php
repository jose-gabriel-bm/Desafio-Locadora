<?php
use Migrations\AbstractMigration;

class CreateTableReserves extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('reserves');

            $table->addColumn('id_movies','integer');

            $table->addColumn('id_clients','integer');

            $table->addForeignKey('id_movies','filmes','id');

            $table->addForeignKey('id_clients','clients','id');

            $table->addColumn('data_locacao','string',[
                'default'=>null,
                'limit'=>4,
                'null'=>false
            ]);
            $table->addColumn('data_devolucao','string',[
                'default'=>null,
                'limit'=>4,
                'null'=>false
            ]);
            $table->addColumn('reserves_value','decimal',[ 
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
