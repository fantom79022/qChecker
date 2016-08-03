<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160628182455 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $table = $schema->createTable('summoners');
        $table->addColumn('id', 'integer')->setNotnull(true)->setAutoincrement(true);
        $table->addColumn('summoner_id', 'integer')->setNotnull(true);
        $table->addColumn('name', 'string')->setNotnull(true);
        $table->addColumn('profile_icon_id', 'integer')->setNotnull(true);
        $table->addColumn('summoner_level', 'integer')->setNotnull(true);
        $table->addColumn('revision_date', 'integer')->setNotnull(true);
        $table->addColumn('region', 'integer')->setNotnull(true);
        $table->setPrimaryKey(array('id'));
        $table->addUniqueIndex(array('summoner_id', 'region'));
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $schema->dropTable('summoners');
    }
}
