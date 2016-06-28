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
        $table->addColumn('id', 'integer')->setNotnull(true);
        $table->addColumn('name', 'string')->setNotnull(true);
        $table->addColumn('profileIconId', 'integer')->setNotnull(true);
        $table->addColumn('summonerLevel', 'integer')->setNotnull(true);
        $table->addColumn('revisionDate', 'bigint')->setNotnull(true);
        $table->setPrimaryKey(array('id'));
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $schema->dropTable('summoners');
    }
}
