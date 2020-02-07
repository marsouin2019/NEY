<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('l_droit_user', ['id' => false])
            ->addColumn('iddroit', 'tinyinteger', [
                'default' => null,
                'limit' => 4,
                'null' => false,
            ])
            ->addColumn('iduser', 'smallinteger', [
                'default' => null,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('date_add', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('date_update', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('t_administration', ['id' => false, 'primary_key' => ['idadministration']])
            ->addColumn('idadministration', 'smallinteger', [
                'default' => null,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('idproprietaire', 'smallinteger', [
                'default' => null,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('ref_mairie', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('ref_gendarmerie', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('date_add', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('data_update', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'idproprietaire',
                ]
            )
            ->addIndex(
                [
                    'idproprietaire',
                ]
            )
            ->create();

        $this->table('t_capacite', ['id' => false, 'primary_key' => ['idcapacite']])
            ->addColumn('idcapacite', 'smallinteger', [
                'default' => null,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('reference', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('date_add', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('date_update', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('t_couleur', ['id' => false, 'primary_key' => ['idcouleur']])
            ->addColumn('idcouleur', 'smallinteger', [
                'default' => null,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('couleur', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('date_add', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('date_update', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('t_droit', ['id' => false, 'primary_key' => ['iddroit']])
            ->addColumn('iddroit', 'tinyinteger', [
                'default' => null,
                'limit' => 4,
                'null' => false,
            ])
            ->addColumn('droit', 'string', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('date_add', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('date_update', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('t_genetique', ['id' => false, 'primary_key' => ['idgenetique']])
            ->addColumn('idgenetique', 'smallinteger', [
                'default' => null,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('idrobe', 'smallinteger', [
                'default' => null,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('taille', 'string', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('osature', 'string', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('date_add', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('date_update', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('t_identite', ['id' => false, 'primary_key' => ['ididentite']])
            ->addColumn('ididentite', 'smallinteger', [
                'default' => null,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('reference', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nom', 'string', [
                'default' => null,
                'limit' => 15,
                'null' => false,
            ])
            ->addColumn('puce', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('age', 'string', [
                'default' => null,
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('sexe', 'string', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('photo', 'string', [
                'default' => null,
                'limit' => 150,
                'null' => false,
            ])
            ->addColumn('date_add', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('date_update', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('t_journal', ['id' => false, 'primary_key' => ['idlog']])
            ->addColumn('idlog', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('iduser', 'smallinteger', [
                'default' => null,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('action', 'string', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('date', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('t_proprietaire', ['id' => false, 'primary_key' => ['idproprietaire']])
            ->addColumn('idproprietaire', 'smallinteger', [
                'default' => null,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('ididentite', 'smallinteger', [
                'default' => null,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('nom', 'string', [
                'default' => null,
                'limit' => 99,
                'null' => false,
            ])
            ->addColumn('prenom', 'string', [
                'default' => null,
                'limit' => 99,
                'null' => false,
            ])
            ->addColumn('telephone', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('date_add', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('date_update', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'nom',
                ]
            )
            ->create();

        $this->table('t_robe', ['id' => false, 'primary_key' => ['idrobe']])
            ->addColumn('idrobe', 'smallinteger', [
                'default' => null,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('libere', 'string', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('date_add', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('date_update', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('t_user', ['id' => false, 'primary_key' => ['iduser']])
            ->addColumn('iduser', 'smallinteger', [
                'default' => null,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('idproprietaire', 'smallinteger', [
                'default' => null,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('psudo', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 99,
                'null' => false,
            ])
            ->addColumn('pasword', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('date_add', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('date_update', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('t_veterinaire', ['id' => false, 'primary_key' => ['idveterinaire']])
            ->addColumn('idveterinaire', 'smallinteger', [
                'default' => null,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('enseigne', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('adresse', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('suite', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('postal', 'string', [
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('commune', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => false,
            ])
            ->addColumn('siret', 'string', [
                'default' => null,
                'limit' => 14,
                'null' => false,
            ])
            ->addColumn('ref_veto', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('diplome', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('telephone', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('date_add', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('date_update', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();
    }

    public function down()
    {
        $this->table('l_droit_user')->drop()->save();
        $this->table('t_administration')->drop()->save();
        $this->table('t_capacite')->drop()->save();
        $this->table('t_couleur')->drop()->save();
        $this->table('t_droit')->drop()->save();
        $this->table('t_genetique')->drop()->save();
        $this->table('t_identite')->drop()->save();
        $this->table('t_journal')->drop()->save();
        $this->table('t_proprietaire')->drop()->save();
        $this->table('t_robe')->drop()->save();
        $this->table('t_user')->drop()->save();
        $this->table('t_veterinaire')->drop()->save();
    }
}
