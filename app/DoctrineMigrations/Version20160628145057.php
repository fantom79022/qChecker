<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160628145057 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        exit();
        $table = $schema->createTable('summoners');
        $table->addColumn('id', 'integer')->setNotnull(true);
        $table->addColumn('name', 'string')->setNotnull(true);
        $table->addColumn('profileIconId', 'int')->setNotnull(true);
        $table->addColumn('summonerLevel', 'int')->setNotnull(true);
        $table->addColumn('revisionDate', 'bigint')->setNotnull(true);
        $table->setPrimaryKey(['id']);
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $schema->dropTable('summoners');
    }
}
