<?php
use Migrations\AbstractMigration;

class CreateTIdentite extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('t_identite');
        

        $table = $this->table('reference');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 10,
            'null' => false,
        ]);

        $table = $this->table('nom');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => false,
        ]);

        $table = $this->table('puce');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 10,
            'null' => false,
        ]);

        $table = $this->table('age');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 2,
            'null' => false,
        ]);

        $table = $this->table('sexe');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 1,
            'null' => false,
        ]);

        $table = $this->table('photo');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 150,
            'null' => false,
        ]);
        $table->create();
    }
}
